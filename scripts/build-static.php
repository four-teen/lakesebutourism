<?php

$root = dirname(__DIR__);
$establishments = require $root . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'establishments.php';

function renderStaticPage($entry, $query = '')
{
    $command = escapeshellarg(PHP_BINARY)
        . ' ' . escapeshellarg(__DIR__ . DIRECTORY_SEPARATOR . 'render-page.php')
        . ' ' . escapeshellarg($entry);

    if ($query !== '') {
        $command .= ' ' . escapeshellarg($query);
    }

    $output = array();
    $status = 0;
    exec($command, $output, $status);

    if ($status !== 0) {
        throw new RuntimeException('Unable to render ' . $entry . ($query ? '?' . $query : ''));
    }

    return implode(PHP_EOL, $output) . PHP_EOL;
}

function staticEstablishmentUrl($slug)
{
    return '/establishment/' . rawurlencode($slug) . '/';
}

function makeVercelStaticHtml($html, $rootPrefix = '')
{
    $html = str_replace("\r\n", "\n", $html);
    $homePrefix = $rootPrefix === '' ? '' : $rootPrefix;
    $homeHref = $rootPrefix === '' ? './' : $rootPrefix;
    $assetPrefix = $rootPrefix . 'assets/';

    $html = str_replace('fetch(\'api/chat_proxy.php\'', 'fetch(\'' . $rootPrefix . 'api/chat\'', $html);
    $html = str_replace('fetch("api/chat_proxy.php"', 'fetch("' . $rootPrefix . 'api/chat"', $html);
    $html = str_replace('href="index.php#', 'href="' . $homePrefix . '#', $html);
    $html = str_replace("href='index.php#", "href='" . $homePrefix . '#', $html);
    $html = str_replace('href="index.php"', 'href="' . $homeHref . '"', $html);
    $html = str_replace("href='index.php'", "href='" . $homeHref . "'", $html);

    $html = preg_replace_callback(
        '/establishment\.php\?slug=([^"\'\s<]+)/',
        static function ($matches) use ($rootPrefix) {
            return $rootPrefix . ltrim(staticEstablishmentUrl(rawurldecode($matches[1])), '/');
        },
        $html
    );

    $assetReplacements = array(
        'href="/assets/' => 'href="' . $assetPrefix,
        "href='/assets/" => "href='" . $assetPrefix,
        'src="/assets/' => 'src="' . $assetPrefix,
        "src='/assets/" => "src='" . $assetPrefix,
        'data-image="/assets/' => 'data-image="' . $assetPrefix,
        "data-image='/assets/" => "data-image='" . $assetPrefix,
        'data-gallery="/assets/' => 'data-gallery="' . $assetPrefix,
        "data-gallery='/assets/" => "data-gallery='" . $assetPrefix,
        'url(\'/assets/' => 'url(\'' . $assetPrefix,
        'url("/assets/' => 'url("' . $assetPrefix,
        '"/assets/' => '"' . $assetPrefix,
        "'/assets/" => "'" . $assetPrefix,
        ',/assets/' => ',' . $assetPrefix,
        'href="assets/' => 'href="' . $assetPrefix,
        "href='assets/" => "href='" . $assetPrefix,
        'src="assets/' => 'src="' . $assetPrefix,
        "src='assets/" => "src='" . $assetPrefix,
        'data-image="assets/' => 'data-image="' . $assetPrefix,
        "data-image='assets/" => "data-image='" . $assetPrefix,
        'data-gallery="assets/' => 'data-gallery="' . $assetPrefix,
        "data-gallery='assets/" => "data-gallery='" . $assetPrefix,
        'url(\'assets/' => 'url(\'' . $assetPrefix,
        'url("assets/' => 'url("' . $assetPrefix,
        '"assets/' => '"' . $assetPrefix,
        "'assets/" => "'" . $assetPrefix,
        ',assets/' => ',' . $assetPrefix,
    );

    return strtr($html, $assetReplacements);
}

function writeStaticFile($path, $contents)
{
    $directory = dirname($path);

    if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
        throw new RuntimeException('Unable to create directory: ' . $directory);
    }

    if (file_put_contents($path, $contents) === false) {
        throw new RuntimeException('Unable to write file: ' . $path);
    }
}

writeStaticFile(
    $root . DIRECTORY_SEPARATOR . 'index.html',
    makeVercelStaticHtml(renderStaticPage('index.php'))
);

foreach ($establishments as $establishment) {
    $slug = $establishment['slug'];
    $html = makeVercelStaticHtml(renderStaticPage('establishment.php', 'slug=' . rawurlencode($slug)), '../../');
    writeStaticFile(
        $root . DIRECTORY_SEPARATOR . 'establishment' . DIRECTORY_SEPARATOR . $slug . DIRECTORY_SEPARATOR . 'index.html',
        $html
    );
}

echo 'Generated index.html and ' . count($establishments) . " establishment pages.\n";
