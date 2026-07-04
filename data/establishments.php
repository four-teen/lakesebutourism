<?php

function normalizeEstablishmentAssetText($value)
{
    $value = strtolower((string) $value);
    $value = preg_replace("/'s\b/u", 's', $value);
    $value = str_replace('&', ' and ', $value);
    $value = preg_replace('/[^a-z0-9]+/u', ' ', $value);

    return trim((string) preg_replace('/\s+/u', ' ', $value));
}

function establishmentAssetTokens($value)
{
    $stopWords = array('and', 'by', 'house', 'lake', 'of', 'resort', 'sebu', 'the', 'tourism');
    $normalized = normalizeEstablishmentAssetText($value);

    if ($normalized === '') {
        return array();
    }

    $tokens = array_filter(
        explode(' ', $normalized),
        static function ($token) use ($stopWords) {
            return $token !== '' && !in_array($token, $stopWords, true);
        }
    );

    return array_values(array_unique($tokens));
}

function establishmentSharedPrefixLength($left, $right)
{
    $maxLength = min(strlen($left), strlen($right));
    $length = 0;

    while ($length < $maxLength && $left[$length] === $right[$length]) {
        $length++;
    }

    return $length;
}

function establishmentTokenMatches($folderToken, array $candidateTokens)
{
    foreach ($candidateTokens as $candidateToken) {
        if ($candidateToken === $folderToken) {
            return true;
        }

        $minimumLength = min(strlen($folderToken), strlen($candidateToken));
        $maximumDistance = $minimumLength >= 8 ? 2 : 1;

        if (
            $minimumLength >= 4 &&
            abs(strlen($candidateToken) - strlen($folderToken)) <= $maximumDistance &&
            levenshtein($folderToken, $candidateToken) <= $maximumDistance
        ) {
            return true;
        }

        if (
            $minimumLength >= 6 &&
            abs(strlen($candidateToken) - strlen($folderToken)) <= 3 &&
            establishmentSharedPrefixLength($folderToken, $candidateToken) >= ($minimumLength - 2)
        ) {
            return true;
        }
    }

    return false;
}

function establishmentCandidateTokens(array $establishment)
{
    $values = array(
        $establishment['name'],
        str_replace('-', ' ', $establishment['slug']),
        $establishment['map_query'],
    );

    $tokens = array();

    foreach ($values as $value) {
        $tokens = array_merge($tokens, establishmentAssetTokens($value));
    }

    return array_values(array_unique($tokens));
}

function establishmentIsSupportedImageFile($path)
{
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    return in_array($extension, array('avif', 'gif', 'jpg', 'jpeg', 'png', 'webp'), true);
}

function establishmentPublicAssetPath($folderName, $fileName)
{
    return implode('/', array_map('rawurlencode', array('assets', $folderName, $fileName)));
}

function establishmentLowercaseFirst($value)
{
    $value = (string) $value;

    if ($value === '') {
        return '';
    }

    return strtolower($value[0]) . substr($value, 1);
}

function establishmentWithIndefiniteArticle($value)
{
    $value = trim((string) $value);

    if ($value === '') {
        return '';
    }

    $article = preg_match('/^[aeiou]/i', $value) ? 'an' : 'a';

    return $article . ' ' . $value;
}

function getEstablishmentFolderImages($folderName, $assetsRoot)
{
    $folderPath = $assetsRoot . DIRECTORY_SEPARATOR . $folderName;
    $files = scandir($folderPath);

    if ($files === false) {
        return array();
    }

    $imageFiles = array();

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }

        $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;

        if (!is_file($filePath) || !establishmentIsSupportedImageFile($filePath)) {
            continue;
        }

        $imageFiles[] = $file;
    }

    if (!$imageFiles) {
        return array();
    }

    natcasesort($imageFiles);
    $imageFiles = array_values($imageFiles);

    return array_map(
        static function ($fileName) use ($folderName) {
            return establishmentPublicAssetPath($folderName, $fileName);
        },
        $imageFiles
    );
}

function getEstablishmentAssetFolders($assetsRoot)
{
    $entries = scandir($assetsRoot);

    if ($entries === false) {
        return array();
    }

    $folders = array();

    foreach ($entries as $entry) {
        if ($entry === '.' || $entry === '..' || in_array($entry, array('img', 'mp_img'), true)) {
            continue;
        }

        $folderPath = $assetsRoot . DIRECTORY_SEPARATOR . $entry;

        if (!is_dir($folderPath)) {
            continue;
        }

        $tokens = establishmentAssetTokens($entry);
        $images = getEstablishmentFolderImages($entry, $assetsRoot);

        if (!$tokens || !$images) {
            continue;
        }

        $folders[] = array(
            'name' => $entry,
            'tokens' => $tokens,
            'images' => $images,
        );
    }

    usort($folders, static function ($left, $right) {
        $leftCount = count($left['tokens']);
        $rightCount = count($right['tokens']);

        if ($leftCount === $rightCount) {
            $leftLength = strlen($left['name']);
            $rightLength = strlen($right['name']);

            if ($leftLength === $rightLength) {
                return 0;
            }

            return $leftLength < $rightLength ? 1 : -1;
        }

        return $leftCount < $rightCount ? 1 : -1;
    });

    return $folders;
}

function buildEstablishmentGalleryItems(array $establishment, array $imageUrls)
{
    $highlights = !empty($establishment['highlights'])
        ? array_values($establishment['highlights'])
        : array($establishment['type']);
    $name = $establishment['name'];
    $type = strtolower($establishment['type']);
    $typeWithArticle = establishmentWithIndefiniteArticle($type);
    $idealFor = establishmentLowercaseFirst($establishment['ideal_for']);
    $items = array();
    $total = count($imageUrls);

    foreach ($imageUrls as $index => $imageUrl) {
        $position = $index + 1;
        $highlight = establishmentLowercaseFirst($highlights[$index % count($highlights)]);
        $label = 'Photo ' . $position . ' of ' . $total;

        if ($position === 1) {
            $alt = 'Featured gallery photo of ' . $name . ' in Lake Sebu';
            $caption = 'Featured gallery view of ' . $name . ', ' . $typeWithArticle . ' in Lake Sebu.';
        } elseif ($position % 3 === 2) {
            $alt = 'Gallery photo ' . $position . ' of ' . $name . ' for visitors interested in ' . $highlight;
            $caption = 'Another gallery image from ' . $name . ', included for visitors drawn to ' . $highlight . '.';
        } elseif ($position % 3 === 0) {
            $alt = 'Gallery photo ' . $position . ' of ' . $name . ' for ' . $idealFor;
            $caption = 'Gallery image ' . $position . ' from ' . $name . ', shared as another look at the establishment for ' . $idealFor . '.';
        } else {
            $alt = 'Gallery photo ' . $position . ' of ' . $name;
            $caption = 'Additional gallery view from ' . $name . ', another look at its ' . $highlight . ' appeal.';
        }

        $items[] = array(
            'src' => $imageUrl,
            'alt' => $alt,
            'caption' => $caption,
            'label' => $label,
        );
    }

    return $items;
}

function buildEstablishmentGalleryDescription(array $establishment, $photoCount)
{
    if ($photoCount <= 1) {
        return 'A quick visual preview for this Lake Sebu establishment.';
    }

    return 'Browse ' . $photoCount . ' photos from ' . $establishment['name'] . ' for a fuller look at this ' . strtolower($establishment['type']) . ' in Lake Sebu.';
}

function applyEstablishmentFolderImages(array $establishments, $assetsRoot)
{
    $folders = getEstablishmentAssetFolders($assetsRoot);

    foreach ($establishments as &$establishment) {
        $candidateTokens = establishmentCandidateTokens($establishment);
        $matchedImages = array();
        $matchedFolderName = null;

        foreach ($folders as $folder) {
            $isMatch = true;

            foreach ($folder['tokens'] as $folderToken) {
                if (!establishmentTokenMatches($folderToken, $candidateTokens)) {
                    $isMatch = false;
                    break;
                }
            }

            if (!$isMatch) {
                continue;
            }

            $matchedImages = $folder['images'];
            $matchedFolderName = $folder['name'];
            break;
        }

        if (!$matchedImages) {
            $matchedImages = array($establishment['image']);
        }

        $galleryItems = buildEstablishmentGalleryItems($establishment, $matchedImages);

        $establishment['gallery'] = $galleryItems;
        $establishment['gallery_count'] = count($galleryItems);
        $establishment['gallery_description'] = buildEstablishmentGalleryDescription(
            $establishment,
            $establishment['gallery_count']
        );
        $establishment['gallery_folder'] = $matchedFolderName;

        if (!empty($galleryItems[0])) {
            $establishment['image'] = $galleryItems[0]['src'];
            $establishment['image_alt'] = $galleryItems[0]['alt'];
        }
    }

    unset($establishment);

    return $establishments;
}

$establishments = array(
    array(
        'slug' => 'camp-lake-view-resort',
        'name' => 'Camp Lake View Resort',
        'type' => 'Lakeside resort',
        'category' => 'resort',
        'phone' => '(+63) 948 375 7134',
        'phone_tel' => '+639483757134',
        'image' => 'assets/mp_img/lakeside1.jpg',
        'image_alt' => 'Lakeside resort stay in Lake Sebu',
        'summary' => 'A lake-view stay option for travelers who want easy access to quiet mornings and scenic water views.',
        'description' => 'Camp Lake View Resort is suited for visitors looking for a relaxed base near the lake, with a setting that works well for family stays, sunrise plans, and slower overnight trips.',
        'ideal_for' => 'Families, overnight guests, lake-view stays',
        'highlights' => array('Lake-facing setting', 'Good overnight base', 'Relaxed family stop'),
        'map_query' => 'Camp Lake View Resort Lake Sebu'
    ),
    array(
        'slug' => 'centro-inn-ultimate-water-tubing',
        'name' => 'Centro Inn & Ultimate Water Tubing',
        'type' => 'Inn and adventure',
        'category' => 'lodging',
        'phone' => '(+63) 909 745 1167',
        'phone_tel' => '+639097451167',
        'image' => 'assets/mp_img/kayak.jpg',
        'image_alt' => 'Water activity in Lake Sebu',
        'summary' => 'A practical inn option connected with water tubing for guests who want lodging and activity access.',
        'description' => 'Centro Inn & Ultimate Water Tubing combines a straightforward stay with an active water experience, making it useful for travelers planning a more energetic Lake Sebu itinerary.',
        'ideal_for' => 'Adventure travelers, groups, practical lodging',
        'highlights' => array('Inn accommodation', 'Water tubing activity', 'Group-friendly option'),
        'map_query' => 'Centro Inn Ultimate Water Tubing Lake Sebu'
    ),
    array(
        'slug' => 'divine-mercy-retreat-house',
        'name' => 'Divine Mercy Retreat House',
        'type' => 'Retreat house',
        'category' => 'lodging',
        'phone' => '(+63) 917 811 0181',
        'phone_tel' => '+639178110181',
        'image' => 'assets/mp_img/homestay.jpg',
        'image_alt' => 'Quiet homestay style lodging in Lake Sebu',
        'summary' => 'A quieter stay option for visitors who prefer a reflective and simple lodging environment.',
        'description' => 'Divine Mercy Retreat House works best for guests seeking a calmer pace, simple accommodations, and a setting that supports rest between Lake Sebu activities.',
        'ideal_for' => 'Retreats, quiet stays, small groups',
        'highlights' => array('Calm lodging environment', 'Simple guest base', 'Good for reflective trips'),
        'map_query' => 'Divine Mercy Retreat House Lake Sebu'
    ),
    array(
        'slug' => 'dolores-lake-resort',
        'name' => 'Dolores Lake Resort',
        'type' => 'Lake resort',
        'category' => 'resort',
        'phone' => '(+63) 950 118 7072',
        'phone_tel' => '+639501187072',
        'image' => 'assets/mp_img/main.jpg',
        'image_alt' => 'Lake Sebu scenic water view',
        'summary' => 'A resort option for travelers who want a scenic place to pause around the lake.',
        'description' => 'Dolores Lake Resort is a useful choice for visitors shaping a relaxed lake trip, especially when the day includes scenic stops, family time, and easy rest between activities.',
        'ideal_for' => 'Families, scenic breaks, overnight stays',
        'highlights' => array('Scenic setting', 'Resort-style stop', 'Easy lake itinerary base'),
        'map_query' => 'Dolores Lake Resort Lake Sebu'
    ),
    array(
        'slug' => 'dreamweavers-hill-resort',
        'name' => 'Dreamweavers Hill Resort',
        'type' => 'Hill resort',
        'category' => 'resort',
        'phone' => '(+63) 917 307 2767',
        'phone_tel' => '+639173072767',
        'image' => 'assets/mp_img/culture1.jpg',
        'image_alt' => 'Traditional weaving and cultural setting in Lake Sebu',
        'summary' => 'A hill resort option with a name that connects naturally with Lake Sebu culture and upland views.',
        'description' => 'Dreamweavers Hill Resort suits visitors who want a stay that feels close to the cultural identity and cooler highland atmosphere of Lake Sebu.',
        'ideal_for' => 'Cultural travelers, couples, scenic stays',
        'highlights' => array('Hill setting', 'Cultural character', 'Relaxed resort stop'),
        'map_query' => 'Dreamweavers Hill Resort Lake Sebu'
    ),
    array(
        'slug' => 'emilios-flower-garden',
        'name' => "Emilio's Flower Garden",
        'type' => 'Garden attraction',
        'category' => 'garden',
        'phone' => '(+63) 915 900 5784',
        'phone_tel' => '+639159005784',
        'image' => 'assets/mp_img/culture3.jpg',
        'image_alt' => 'Colorful cultural landscape in Lake Sebu',
        'summary' => 'A garden stop for guests who want a gentler, photo-friendly break in their route.',
        'description' => "Emilio's Flower Garden gives visitors a softer stop between bigger activities, with a garden-focused setting that works well for photos, families, and slower afternoons.",
        'ideal_for' => 'Photo stops, families, relaxed visits',
        'highlights' => array('Garden setting', 'Photo-friendly stop', 'Good light activity'),
        'map_query' => "Emilio's Flower Garden Lake Sebu"
    ),
    array(
        'slug' => 'evelandia-lake-vista',
        'name' => 'Evelandia Lake Vista',
        'type' => 'Lake-view lodging',
        'category' => 'lodging',
        'phone' => '(+63) 953 410 7708',
        'phone_tel' => '+639534107708',
        'image' => 'assets/mp_img/sunrise.jpg',
        'image_alt' => 'Sunrise view over Lake Sebu',
        'summary' => 'A lake-view option that fits sunrise plans and scenic overnight visits.',
        'description' => 'Evelandia Lake Vista is suited for guests who want a calmer Lake Sebu base, especially when early morning views and easy access to lake scenery are part of the plan.',
        'ideal_for' => 'Sunrise trips, couples, quiet lodging',
        'highlights' => array('Lake vista setting', 'Good for sunrise plans', 'Calm lodging option'),
        'map_query' => 'Evelandia Lake Vista Lake Sebu'
    ),
    array(
        'slug' => 'garden-by-the-lake-resort',
        'name' => 'Garden by the Lake Resort',
        'type' => 'Garden resort',
        'category' => 'resort',
        'phone' => '(+63) 935 611 2913',
        'phone_tel' => '+639356112913',
        'image' => 'assets/mp_img/floating.jpg',
        'image_alt' => 'Floating dining and lake scenery in Lake Sebu',
        'summary' => 'A garden-and-lake resort setting for visitors who want scenery without rushing their day.',
        'description' => 'Garden by the Lake Resort fits relaxed stays and scenic breaks, with a name and setting that point visitors toward a softer lakeside experience.',
        'ideal_for' => 'Families, slow travel, lake breaks',
        'highlights' => array('Garden atmosphere', 'Lake-side experience', 'Restful stop'),
        'map_query' => 'Garden by the Lake Resort Lake Sebu'
    ),
    array(
        'slug' => 'merl-garden-spring-resort',
        'name' => 'Merl Garden Spring Resort',
        'type' => 'Garden spring resort',
        'category' => 'resort',
        'phone' => '(+63) 916 279 1277',
        'phone_tel' => '+639162791277',
        'image' => 'assets/mp_img/ecolodge.jpg',
        'image_alt' => 'Green eco lodge setting in Lake Sebu',
        'summary' => 'A green resort option for travelers looking for a restful garden-style stop.',
        'description' => 'Merl Garden Spring Resort can serve as a quiet pause or overnight base for guests who want a garden atmosphere close to Lake Sebu activities.',
        'ideal_for' => 'Nature breaks, family stays, quiet trips',
        'highlights' => array('Garden resort character', 'Restful setting', 'Good for laid-back trips'),
        'map_query' => 'Merl Garden Spring Resort Lake Sebu'
    ),
    array(
        'slug' => 'myrna-garden-resort',
        'name' => 'Myrna Garden Resort',
        'type' => 'Garden resort',
        'category' => 'resort',
        'phone' => '(+63) 918 456 4489',
        'phone_tel' => '+639184564489',
        'image' => 'assets/mp_img/culture2.jpg',
        'image_alt' => 'Lake Sebu cultural and garden landscape',
        'summary' => 'A resort option with a garden feel for easy-going Lake Sebu visits.',
        'description' => 'Myrna Garden Resort is a practical choice for visitors who want lodging or a calm stop that can pair with culture, food, and lake activities.',
        'ideal_for' => 'Families, groups, relaxed stays',
        'highlights' => array('Garden setting', 'Easy travel base', 'Relaxed resort option'),
        'map_query' => 'Myrna Garden Resort Lake Sebu'
    ),
    array(
        'slug' => 'highlanders-lake-resort',
        'name' => "Highlander's Lake Resort",
        'type' => 'Highland lake resort',
        'category' => 'resort',
        'phone' => '(+63) 998 498 9088',
        'phone_tel' => '+639984989088',
        'image' => 'assets/mp_img/main.jpg',
        'image_alt' => 'Highland lake scenery in Lake Sebu',
        'summary' => 'A lake resort option with a highland feel for guests planning a scenic stay.',
        'description' => "Highlander's Lake Resort suits travelers who want a Lake Sebu base that emphasizes the area's cool highland mood and easy access to scenic routes.",
        'ideal_for' => 'Scenic stays, families, highland escapes',
        'highlights' => array('Highland atmosphere', 'Lake resort option', 'Good scenic base'),
        'map_query' => "Highlander's Lake Resort Lake Sebu"
    ),
    array(
        'slug' => 'punta-isla-lake-resort',
        'name' => 'Punta Isla Lake Resort',
        'type' => 'Lake resort',
        'category' => 'resort',
        'phone' => '(+63) 907 199 9603',
        'phone_tel' => '+639071999603',
        'image' => 'assets/mp_img/floating.jpg',
        'image_alt' => 'Floating restaurant and lake resort experience',
        'summary' => 'A known Lake Sebu resort choice for lake dining, stays, and classic water-view itineraries.',
        'description' => 'Punta Isla Lake Resort is a strong fit for visitors who want the classic Lake Sebu resort experience, especially when a route includes lake dining, family time, and scenic views.',
        'ideal_for' => 'Lake dining, families, first-time visitors',
        'highlights' => array('Classic lake stop', 'Dining-friendly setting', 'Good for group visits'),
        'map_query' => 'Punta Isla Lake Resort Lake Sebu'
    ),
    array(
        'slug' => 'ramfels-paradise-resort',
        'name' => 'Ramfels Paradise Resort',
        'type' => 'Resort',
        'category' => 'resort',
        'phone' => '(+63) 985 582 2940',
        'phone_tel' => '+639855822940',
        'image' => 'assets/mp_img/ecolodge.jpg',
        'image_alt' => 'Quiet resort setting in Lake Sebu',
        'summary' => 'A resort option for travelers who want a comfortable pause in a Lake Sebu route.',
        'description' => 'Ramfels Paradise Resort can work as a simple leisure stop or overnight base for guests balancing sightseeing, meals, and rest.',
        'ideal_for' => 'Relaxed stays, families, groups',
        'highlights' => array('Resort-style stop', 'Good for rest breaks', 'Group-friendly option'),
        'map_query' => 'Ramfels Paradise Resort Lake Sebu'
    ),
    array(
        'slug' => 'sa-balai-lake-view-resort',
        'name' => 'Sa Balai Lake View Resort',
        'type' => 'Lake-view resort',
        'category' => 'resort',
        'phone' => '(+63) 917 149 6795',
        'phone_tel' => '+639171496795',
        'image' => 'assets/mp_img/sunrise.jpg',
        'image_alt' => 'Lake view sunrise in Lake Sebu',
        'summary' => 'A lake-view resort for guests who want scenery close to their stay.',
        'description' => 'Sa Balai Lake View Resort is suitable for visitors who want the lake to be part of the stay itself, from quiet mornings to relaxed downtime between planned activities.',
        'ideal_for' => 'Lake views, couples, quiet stays',
        'highlights' => array('Lake-view focus', 'Good for sunrise plans', 'Relaxed lodging option'),
        'map_query' => 'Sa Balai Lake View Resort Lake Sebu'
    ),
    array(
        'slug' => 'sebul-farm',
        'name' => 'Sebul Farm',
        'type' => 'Farm stop',
        'category' => 'garden',
        'phone' => '(+63) 917 923 0957',
        'phone_tel' => '+639179230957',
        'image' => 'assets/mp_img/culture2.jpg',
        'image_alt' => 'Green landscape in Lake Sebu',
        'summary' => 'A farm-oriented stop for visitors who want a nature-based break in the itinerary.',
        'description' => 'Sebul Farm gives travelers a lighter nature stop that can complement lake scenery, cultural visits, and family-friendly routes around Lake Sebu.',
        'ideal_for' => 'Nature stops, families, casual visits',
        'highlights' => array('Farm setting', 'Nature-based stop', 'Good for slower itineraries'),
        'map_query' => 'Sebul Farm Lake Sebu'
    ),
    array(
        'slug' => 'seven-falls-zip-line-adventure',
        'name' => 'Seven Falls & Zip Line Adventure',
        'type' => 'Adventure attraction',
        'category' => 'adventure',
        'phone' => '(+63) 930 560 3124',
        'phone_tel' => '+639305603124',
        'image' => 'assets/mp_img/zip1.jpg',
        'image_alt' => 'Seven Falls zipline in Lake Sebu',
        'summary' => 'An adventure stop for guests planning the famous Seven Falls and zipline experience.',
        'description' => 'Seven Falls & Zip Line Adventure is one of the most active stops in Lake Sebu, best for visitors who want sweeping views, movement, and a memorable high-point in the day.',
        'ideal_for' => 'Adventure seekers, groups, first-time visitors',
        'highlights' => array('Zipline adventure', 'Waterfall views', 'High-energy itinerary anchor'),
        'map_query' => 'Seven Falls Zip Line Adventure Lake Sebu'
    ),
    array(
        'slug' => 'sox-paragliding-adventure',
        'name' => 'SOX Paragliding Adventure',
        'type' => 'Air adventure',
        'category' => 'adventure',
        'phone' => '(+63) 945 470 4387',
        'phone_tel' => '+639454704387',
        'image' => 'assets/mp_img/main.jpg',
        'image_alt' => 'Wide landscape view in Lake Sebu',
        'summary' => 'An adventure option for travelers interested in a higher-view outdoor experience.',
        'description' => 'SOX Paragliding Adventure is for guests who want a more daring activity and a different perspective on the Lake Sebu highland landscape.',
        'ideal_for' => 'Adventure travelers, couples, scenic thrill seekers',
        'highlights' => array('Paragliding activity', 'Highland views', 'Memorable adventure option'),
        'map_query' => 'SOX Paragliding Adventure Lake Sebu'
    ),
    array(
        'slug' => 'summer-lake-wood',
        'name' => 'Summer Lake Wood',
        'type' => 'Lodging',
        'category' => 'lodging',
        'phone' => '(+63) 943 129 9063',
        'phone_tel' => '+639431299063',
        'image' => 'assets/mp_img/homestay.jpg',
        'image_alt' => 'Simple lodging near Lake Sebu',
        'summary' => 'A lodging choice for visitors looking for a comfortable base around Lake Sebu.',
        'description' => 'Summer Lake Wood can support a simple overnight plan, especially for guests who want flexibility while moving between lake, food, and adventure stops.',
        'ideal_for' => 'Overnight guests, families, flexible routes',
        'highlights' => array('Lodging option', 'Good travel base', 'Simple overnight stay'),
        'map_query' => 'Summer Lake Wood Lake Sebu'
    ),
    array(
        'slug' => 'sunrise-garden-lake-resort',
        'name' => 'Sunrise Garden Lake Resort',
        'type' => 'Garden lake resort',
        'category' => 'resort',
        'phone' => '(+63) 907 212 8683',
        'phone_tel' => '+639072128683',
        'image' => 'assets/mp_img/sunrise.jpg',
        'image_alt' => 'Sunrise over Lake Sebu',
        'summary' => 'A resort option that naturally fits sunrise-focused Lake Sebu itineraries.',
        'description' => 'Sunrise Garden Lake Resort is a fitting choice for guests who want an early-morning lake plan, garden scenery, and a restful pace during their stay.',
        'ideal_for' => 'Sunrise trips, couples, relaxed stays',
        'highlights' => array('Sunrise-friendly mood', 'Garden resort setting', 'Lake itinerary base'),
        'map_query' => 'Sunrise Garden Lake Resort Lake Sebu'
    ),
    array(
        'slug' => 'tolentos-pension-house',
        'name' => "Tolento's Pension House",
        'type' => 'Pension house',
        'category' => 'lodging',
        'phone' => '(+63) 906 717 1186',
        'phone_tel' => '+639067171186',
        'image' => 'assets/mp_img/homestay.jpg',
        'image_alt' => 'Pension house lodging near Lake Sebu',
        'summary' => 'A practical pension house option for visitors who need straightforward lodging.',
        'description' => "Tolento's Pension House is suited for travelers looking for a simpler place to stay while keeping the focus on Lake Sebu's outdoor, cultural, and food stops.",
        'ideal_for' => 'Budget-conscious guests, practical stays, groups',
        'highlights' => array('Pension house lodging', 'Practical guest base', 'Good for simple itineraries'),
        'map_query' => "Tolento's Pension House Lake Sebu"
    ),
    array(
        'slug' => 'lemobung-resort-tourism-lodge',
        'name' => 'Lemobung Resort (Tourism Lodge)',
        'type' => 'Tourism lodge',
        'category' => 'lodging',
        'phone' => '(+63) 936 263 8492',
        'phone_tel' => '+639362638492',
        'image' => 'assets/mp_img/ecolodge.jpg',
        'image_alt' => 'Eco lodge stay in Lake Sebu',
        'summary' => 'A lodge option for guests who want a simple tourism stay around Lake Sebu.',
        'description' => 'Lemobung Resort works as a tourism lodge for visitors who need a practical place to settle while planning lake routes, food stops, and nearby experiences.',
        'ideal_for' => 'Lodge stays, families, route-based trips',
        'highlights' => array('Tourism lodge option', 'Practical overnight base', 'Good for local routes'),
        'map_query' => 'Lemobung Resort Tourism Lodge Lake Sebu'
    ),
    array(
        'slug' => 'tdaan-kini-waterfalls',
        'name' => "T'Daan Kini Waterfalls",
        'type' => 'Waterfall attraction',
        'category' => 'adventure',
        'phone' => '(+63) 948 552 5835',
        'phone_tel' => '+639485525835',
        'image' => 'assets/mp_img/zip1.jpg',
        'image_alt' => 'Waterfall adventure in Lake Sebu',
        'summary' => 'A waterfall stop for travelers building a scenic and active Lake Sebu route.',
        'description' => "T'Daan Kini Waterfalls gives visitors another waterfall-focused stop to consider, especially for scenic routes that include walking, views, and nature breaks.",
        'ideal_for' => 'Nature travelers, waterfall routes, active groups',
        'highlights' => array('Waterfall scenery', 'Nature-based activity', 'Good route add-on'),
        'map_query' => "T'Daan Kini Waterfalls Lake Sebu"
    )
);

return applyEstablishmentFolderImages(
    $establishments,
    dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets'
);
