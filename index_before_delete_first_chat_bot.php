<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Discover Lake Sebu: Seven Falls zipline, lotus sunrise at Lake Seloton, T'boli culture, floating restaurants, and eco-adventures in South Cotabato, Philippines." />
    <meta name="theme-color" content="#0d6efd" />
    <title>Lake Sebu Tourism</title>
    <link rel="icon" href="assets/img/logo/logo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <style>
        :root{
            --bg-grad: linear-gradient(180deg, #eaf6ff 0%, #ffffff 40%);
        }

        body{
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: var(--bg-grad);
            color:#24303f;
        }

        /* Header */
        .navbar-glass{
            background: rgba(255,255,255,.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,.06);
        }
        .nav-link{ font-weight:600; }
        .nav-link.active{ color:#0d6efd !important; }

        /* Hero (desktop/tablet) */
        .hero{
            position: relative;
            min-height: 70vh;
            display:grid;
            place-items:center;
            text-align:center;
            color:#fff;
            overflow: hidden;
        }
        .hero-bg-wrapper {
            position: absolute;
            inset: 0;
            background:url('assets/mp_img/main.jpg') center/cover no-repeat;
            z-index: 0;
        }
        .hero-bg-wrapper::after{
            content:""; position:absolute; inset:0;
            background:linear-gradient(180deg, rgba(0,0,0,.55), rgba(0,0,0,.35), rgba(0,0,0,.25));
        }

        .hero > .hero-inner{ position:relative; z-index:2; padding: 5rem 1rem; }
        .hero h1{ font-weight:800; letter-spacing:.2px; text-shadow: 0 8px 30px rgba(0,0,0,.35); }
        .badge-pill{ border-radius:50rem; }

        /* New Carousel styles */
        .hero-carousel {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            width: 100%;
            max-width: 400px;
            padding: 0 1rem;
        }
        .hero-carousel .carousel-inner {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,.2);
        }
        .hero-carousel .carousel-item img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            object-position: center;
        }

        .section-title{ font-weight:800; letter-spacing:.3px; }
        .section-sub{ color:#6b7a8c; }
        .card-img-top{ height:200px; object-fit:cover; }

        .mosaic img{ height:220px; object-fit:cover; }
        .ratio iframe{ border:0; }

        /* Back to top */
        #backToTop{ position:fixed; right:16px; bottom:16px; display:none; z-index:1030; }



        /* Footer */
        footer{ background:#f6f9fc; border-top:1px solid #eaeff4; }

        /* Offcanvas */
        .offcanvas{ background-color:#fff; }
        .offcanvas .nav-link{ font-weight:600; padding:.5rem 1rem; }

        /* --- Mobile Splash: hidden by default (desktop/tablet) --- */
        .mobile-splash{ display:none; }

        /* ===== MOBILE ONLY (≤576px) ===== */
        @media (max-width: 576px){
            /* Smaller hero title if ever shown */
            .hero h1{ font-size:2.25rem; }

            /* Hide desktop hero on phones; show splash */
            .hero{ display:none; }
            .mobile-splash{
                display:block; position:relative; min-height:100dvh;
            }

            /* Dedicated mobile background */
            .mobile-splash .splash-bg{
                position:absolute; inset:0;
                background:url('assets/img/dw/mobile.jpg') center/cover no-repeat;
            }

            .mobile-splash .splash-overlay{
                position:absolute; inset:0;
                background:linear-gradient(180deg, rgba(0,0,0,.15), rgba(0,0,0,.35) 50%, rgba(0,0,0,.55));
            }

            .mobile-splash .splash-inner{
                position:relative; z-index:2;
                min-height:100dvh; display:flex; flex-direction:column;
                align-items:center; justify-content:center; color:#fff;
                padding:2rem 1rem 3.5rem;
            }

            /* Round seal */
            .mobile-splash .seal{
                width:120px; height:120px; border-radius:50%;
                display:grid; place-items:center;
                background:rgba(255,255,255,.9);
                border:3px solid rgba(255,255,255,.95);
                margin:0 auto;
            }
            .mobile-splash .seal img{ width:84px; height:84px; object-fit:contain; }

            /* Titles */
            .mobile-splash .splash-title{
                font-weight:900; letter-spacing:.4px; color:#fff;
                text-shadow:0 8px 28px rgba(0,0,0,.35); font-size:2rem;
            }
            .mobile-splash .splash-sub{ color:#e9f2ff; font-weight:600; letter-spacing:.2px; }

            /* Glass buttons */
            .btn-glass{
                background:rgba(255,255,255,.75); backdrop-filter:blur(8px);
                border:1px solid rgba(255,255,255,.8); color:#0b2a3a; font-weight:400;
                padding:.9rem 1.25rem; box-shadow:0 4px 18px rgba(0,0,0,.18);
            }
            .btn-glass:hover{ background:rgba(255,255,255,.9); color:#0b2a3a; }

            .btn-glass-strong{
                background:rgba(13,110,253,.85); backdrop-filter:blur(8px);
                border:1px solid rgba(13,110,253,.95); color:#fff; font-weight:400;
                padding:.9rem 1.25rem; box-shadow:0 6px 22px rgba(13,110,253,.4);
            }
            .btn-glass-strong:hover{ background:rgba(13,110,253,.95); color:#fff; }

            /* Scroll hint */
            .mobile-splash .scroll-hint{
                position:absolute; left:0; right:0; bottom:12px;
                text-align:center; opacity:.9; font-size:1.25rem;
            }
            .mobile-splash .scroll-hint i{
                animation:bob 1.4s infinite; display:inline-block;
            }
            @keyframes bob{
                0%,100%{ transform:translateY(0); }
                50%{ transform:translateY(5px); }
            }
            /* Hide carousel on small screens */
            .hero-carousel {
                display: none;
            }
        }
        /* DESKTOP ONLY (≥992px) */
        @media (min-width: 992px) {
            .hero-carousel {
                display: block; /* Ensure it's shown on large screens */
            }
        }
        /* Papyrus styled text */
        .papyrus-text {
            font-family: Ink Free, Papyrus, fantasy;
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 1px;
            color: #f0f8ff; /* light water blue */
            text-shadow: 0 2px 6px rgba(0,0,0,0.4);
        }

/* --- New Styles for Interactive UI/UX --- */
.interactive-card, .interactive-card-lg {
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.interactive-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
}

.interactive-card-lg:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2) !important;
}

.interactive-card .card-img-top, .interactive-card-lg .card-img-top {
    height: 200px; /* Uniform height for smaller cards */
    object-fit: cover;
}

.interactive-card-lg .card-img-top {
    height: 350px; /* Taller image for the hero card */
}

/* Experience Card Hover */
.experience-card{
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.experience-card:hover{
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15) !important;
}

/* --- Responsive adjustments for the new design --- */
@media (max-width: 768px) {
    .interactive-card-lg .card-img-top {
        height: 250px; /* Adjust hero card image height for tablets */
    }
}

@media (min-width: 992px) {
    /* Aligning heights for the smaller cards */
    .interactive-grid > .col-md-6:last-child .col-lg-6 {
        display: flex;
    }
}

.ls-msg { display:flex; margin-bottom:.5rem; }
.ls-msg .bubble {
  padding:.6rem .8rem; border-radius:1rem; max-width:82%; box-shadow:0 4px 12px rgba(0,0,0,.06);
}
.ls-msg.user { justify-content:flex-end; }
.ls-msg.user .bubble { background:#0d6efd; color:#fff; border-bottom-right-radius:.3rem; }
.ls-msg.bot .bubble { background:#ffffff; color:#24303f; border-bottom-left-radius:.3rem; }
.ls-typing { font-size:.85rem; color:#6b7a8c; }


    </style>

</head>
<body data-bs-spy="scroll" data-bs-target="#navPrimary" data-bs-offset="80" tabindex="0">
    <nav id="navPrimary" class="navbar navbar-expand-lg navbar-light navbar-glass sticky-top py-2">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="assets/img/logo/logo.png" alt="Lake Sebu Tourism" width="36" height="36" class="me-2">
                <div>
                    <strong>Lake Sebu</strong><br>
                    <small class="text-muted">South Cotabato • PH</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNav"
                    aria-controls="offcanvasNav"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        </div>
    </nav>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavLabel">Navigate</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#highlights"><i class='bx  bx-directions text-primary'  ></i> Featured Distinations</a></li>
                <li class="nav-item"><a class="nav-link" href="#experiences"><i class='bx  bx-cycling text-primary'></i> Experiences</a></li>
                <li class="nav-item"><a class="nav-link" href="#culture"><i class='bx bxs-castle'></i> Culture</a></li>
                <li class="nav-item"><a class="nav-link" href="#map"><i class='bx bx-map' ></i> Map</a></li>
                <li class="nav-item"><a class="nav-link" href="#plan"><i class='bx bxs-plane-alt' ></i> Plan</a></li>
                <li class="nav-item"><a class="nav-link" href="#faq"><i class='bx bx-question-mark' ></i> FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact"><i class='bx bx-mobile' ></i> Contact</a></li>
            </ul>
        </div>
    </div>
    <header id="home" class="hero">
        <div class="hero-bg-wrapper"></div>
        <div class="hero-inner container">
            <span class="badge bg-light text-dark badge-pill px-3 py-2 mb-3"><i class="bx bxs-map me-1"></i> South Cotabato, Philippines</span>
            <h1 class="display-4">Lake Sebu</h1>
            <p class="lead mb-4">Where waters mirror the sky</p>
            <div class="d-flex flex-wrap gap-2 justify-content-center">
                <a href="#plan" class="btn btn-primary btn-lg"><i class="bx bx-calendar-star me-1"></i> Plan Your Escape</a>
                <a href="#highlights" class="btn btn-outline-light btn-lg"><i class="bx bx-image-alt me-1"></i> View Highlights</a>
            </div>
        </div>

        <div class="hero-carousel d-none d-lg-block">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/mp_img/ecolodge.jpg" class="d-block w-100" alt="Lake Sebu Mist">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/mp_img/zip1.jpg" class="d-block w-100" alt="Seven Falls Zipline">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/mp_img/floating.jpg" class="d-block w-100" alt="Floating Restaurant">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/mp_img/main.jpg" class="d-block w-100" alt="Floating Restaurant">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/mp_img/sunrise.jpg" class="d-block w-100" alt="Floating Restaurant">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/mp_img/homestay.jpg" class="d-block w-100" alt="Floating Restaurant">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/mp_img/kayak.jpg" class="d-block w-100" alt="Floating Restaurant">
                    </div>



                </div>
            </div>
        </div>
        </header>

<section id="mobileSplash" class="mobile-splash d-block d-md-none">
    <div class="splash-bg" role="img" aria-label="Lake Sebu landscape"></div>
    <div class="splash-overlay"></div>

    <div class="splash-inner container text-center">
        <div class="seal shadow-lg">
            <img src="assets/img/ls_logo.png" alt="Lake Sebu Logo" />
        </div>

        <div class="mt-4">
            <h1 class="splash-title mb-1">MABUHAY!</h1>
            <p class="splash-sub mb-4">Dayun ka sa <strong>Lake Sebu</strong>!</p>
            <p class="splash-sub mb-4 papyrus-text">Where waters mirror the sky!</p>
        </div>

        <div class="d-grid gap-3">
            <a href="#plan" class="btn btn-glass btn-lg rounded-pill w-100">
                <i class="bx bx-calendar-star me-1"></i> Plan Your Escape
            </a>
            <a href="#highlights" class="btn btn-glass-strong btn-lg rounded-pill w-100">
                <i class="bx bx-image-alt me-1"></i> View Highlights
            </a>
        </div>

        <div class="scroll-hint">
            <i class="bx bx-chevrons-down"></i>
        </div>
    </div>
</section>

<section id="highlights" class="container py-5">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
            <div>
                <h2 class="section-title h3 mb-1">Highlights</h2>
                <p class="section-sub mb-0">Signature sights you shouldn't miss</p>
            </div>
            <div class="w-100 w-sm-auto">
                <select id="filterHighlight" class="form-select" style="width:260px;">
                    <option value="all" selected>Filter: All</option>
                    <option value="nature">Nature & Views</option>
                    <option value="adventure">Adventure</option>
                    <option value="food">Food & Dining</option>
                    <option value="culture">Culture</option>
                </select>
            </div>
        </div>

        <div id="highlightGrid" class="row g-4 interactive-grid">
            <div class="col-12 col-md-6 highlight-card" 
                 data-tags="adventure nature" 
                 data-bs-toggle="modal" 
                 data-bs-target="#imageModal"
                 data-title="Seven Falls Zipline"
                 data-image="assets/mp_img/zip1.jpg"
                 data-description="The Seven Falls Zipline is one of Asia's highest and longest, soaring over canyons and roaring waterfalls. It offers an exhilarating, bird's-eye view of the lush, dense forest below. A truly unforgettable experience for thrill-seekers.">
                <div class="card h-100 shadow-sm interactive-card-lg">
                    <img class="card-img-top" src="assets/mp_img/zip1.jpg" alt="Seven Falls Zipline">
                    <div class="card-body">
                        <h5 class="card-title">Seven Falls Zipline</h5>
                        <p class="card-text small mb-0"><i class="bx bx-rocket me-1"></i> Asia's tallest zipline views over roaring cascades.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="row g-4">
                    <div class="col-12 col-lg-6 highlight-card" 
                         data-tags="nature"
                         data-bs-toggle="modal" 
                         data-bs-target="#imageModal"
                         data-title="Lake Seloton Sunrise"
                         data-image="assets/mp_img/sunrise.jpg"
                         data-description="Witness a breathtaking sunrise at Lake Seloton. As the morning mist lifts, the still, glass-like water reflects the vibrant colors of the sky. The lake is dotted with floating lotus flowers, creating a serene and magical scene.">
                        <div class="card h-100 shadow-sm interactive-card">
                            <img class="card-img-top" src="assets/mp_img/sunrise.jpg" alt="Lake Seloton Sunrise">
                            <div class="card-body">
                                <h5 class="card-title">Lake Seloton Sunrise</h5>
                                <p class="card-text small mb-0"><i class="bx bx-sun me-1"></i> Glass-calm waters painted with dawn light.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 highlight-card" 
                         data-tags="food"
                         data-bs-toggle="modal" 
                         data-bs-target="#imageModal"
                         data-title="Floating Restaurants"
                         data-image="assets/mp_img/floating.jpg"
                         data-description="Indulge in a unique dining experience at Lake Sebu's famous floating restaurants. Enjoy delicious local cuisine, especially the fresh grilled tilapia, while your table gently drifts on the water. It's a culinary and scenic delight.">
                        <div class="card h-100 shadow-sm interactive-card">
                            <img class="card-img-top" src="assets/mp_img/floating.jpg" alt="Floating Restaurants">
                            <div class="card-body">
                                <h5 class="card-title">Floating Restaurants</h5>
                                <p class="card-text small mb-0"><i class="bx bx-restaurant me-1"></i> Tilapia feasts with panoramic lake views.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 highlight-card" 
                         data-tags="nature adventure"
                         data-bs-toggle="modal" 
                         data-bs-target="#imageModal"
                         data-title="Kayaking at Lake Lahit"
                         data-image="assets/mp_img/kayak.jpg"
                         data-description="Paddle through the serene waters of Lake Lahit. This is a perfect activity to get up close with nature. Glide past colorful water lilies and lush vegetation while enjoying the peaceful and quiet surroundings.">
                        <div class="card h-100 shadow-sm interactive-card">
                            <img class="card-img-top" src="assets/mp_img/kayak.jpg" alt="Kayak at Lake Lahit">
                            <div class="card-body">
                                <h5 class="card-title">Kayak at Lake Lahit</h5>
                                <p class="card-text small mb-0"><i class="bx bx-water me-1"></i> Paddle through lotus blooms and misty mornings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="experiences" class="container py-5">
        <h2 class="section-title h3">Experiences</h2>
        <p class="section-sub">Feel Lake Sebu beyond the postcard</p>
        <div class="row g-4 experience-grid">
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm experience-card">
                    <div class="text-primary mb-3"><i class="bx bxs-hot fs-2"></i></div>
                    <h6 class="mb-1">Zipline Over Seven Falls</h6>
                    <small class="text-muted">Soar above canyons at up to 120 kph — a bucket-list rush.</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm experience-card">
                    <div class="text-primary mb-3"><i class="bx bxs-ship fs-2"></i></div>
                    <h6 class="mb-1">Lotus Sunrise Cruise</h6>
                    <small class="text-muted">Dawn boat ride across lotus-dotted waters at Lake Seloton.</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm experience-card">
                    <div class="text-primary mb-3"><i class="bx bxs-spa fs-2"></i></div>
                    <h6 class="mb-1">T'boli Weaving Workshop</h6>
                    <small class="text-muted">Try weaving t'nalak and hear the lore of dreams.</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm experience-card">
                    <div class="text-primary mb-3"><i class="bx bxs-tree-alt fs-2"></i></div>
                    <h6 class="mb-1">Waterfall Trek</h6>
                    <small class="text-muted">Short hikes connect multiple cascades — each unique.</small>
                </div>
            </div>
        </div>
    </section>

    <section id="culture" class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="section-title h3">T'boli Culture</h2>
                <p class="section-sub">Meet the dreamweavers of South Cotabato</p>
                <ul class="list-unstyled small">
                    <li class="mb-2">• Visit the <strong>Lang Dulay Weaving Center</strong> — home of a National Living Treasure awardee.</li>
                    <li class="mb-2">• Meanings behind <em>t'nalak</em> patterns: <em>kinibang</em> (crab), <em>bulinglangit</em> (universe), <em>kabangi</em> (butterfly).</li>
                    <li class="mb-2">• Support community-based souvenirs and guided storytelling.</li>
                </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="row g-3 mosaic">
                    <div class="col-6"><img class="img-fluid rounded-3 shadow-sm w-100" src="assets/mp_img/culture3.jpg" alt="Textiles"></div>
                    <div class="col-6"><img class="img-fluid rounded-3 shadow-sm w-100" src="assets/mp_img/culture2.jpg" alt="Lake Mist"></div>
                    <div class="col-12"><img class="img-fluid rounded-3 shadow-sm w-100" src="assets/mp_img/culture1.jpg" alt="Falls Trail"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="map" class="container py-5">
        <h2 class="section-title h3">Map & Orientation</h2>
        <div class="ratio ratio-16x9 rounded-4 shadow-sm">
            <iframe src="https://www.google.com/maps?q=Lake%20Sebu&output=embed" loading="lazy" allowfullscreen title="Lake Sebu Map"></iframe>
        </div>
    </section>

    <section id="tours" class="container py-5">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-3">
            <div>
                <h2 class="section-title h3 mb-1">Tours & Rates</h2>
                <p class="section-sub mb-0">Indicative prices • Book with accredited guides</p>
            </div>
            <select id="tourCategory" class="form-select" style="width:220px;">
                <option value="all" selected>All categories</option>
                <option value="adventure">Adventure</option>
                <option value="water">Water</option>
                <option value="culture">Culture</option>
                <option value="family">Family</option>
            </select>
        </div>

        <div class="table-responsive shadow-sm rounded-3">
            <table class="table table-hover align-middle mb-0 bg-white">
                <thead class="table-light">
                <tr>
                    <th style="min-width:180px">Activity</th>
                    <th>Inclusions</th>
                    <th class="text-nowrap">Est. Rate (PHP)</th>
                    <th>Category</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody id="tourRows">
                <tr data-cat="adventure">
                    <td><i class="bx bx-spa text-primary me-1"></i> Seven Falls Zipline</td>
                    <td class="small">Harness + helmet • Shuttle to launch • Photo point</td>
                    <td class="fw-semibold">₱ 350 – 550</td>
                    <td><span class="badge bg-primary-subtle text-primary">Adventure</span></td>
                    <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Seven Falls Zipline"><i class="bx bx-message-square-dots me-1"></i> Inquire</button></td>
                </tr>
                <tr data-cat="water">
                    <td><i class="bx bx-spa text-primary me-1"></i> Lotus Sunrise Cruise (Seloton)</td>
                    <td class="small">Private boat • Life vests • Local guide</td>
                    <td class="fw-semibold">₱ 600 – 1,200 / boat</td>
                    <td><span class="badge bg-info-subtle text-info">Water</span></td>
                    <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Lotus Sunrise Cruise"><i class="bx bx-message-square-dots me-1"></i> Inquire</button></td>
                </tr>
                <tr data-cat="culture">
                    <td><i class="bx bx-spa text-primary me-1"></i> T'boli Weaving & Culture</td>
                    <td class="small">Weaving demo • Storytelling • Community fee</td>
                    <td class="fw-semibold">₱ 150 – 300 / guest</td>
                    <td><span class="badge bg-warning-subtle text-warning">Culture</span></td>
                    <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="T'boli Weaving & Culture"><i class="bx bx-message-square-dots me-1"></i> Inquire</button></td>
                </tr>
                <tr data-cat="family">
                    <td><i class="bx bx-spa text-primary me-1"></i> Waterfall Trek (multi-cascade)</td>
                    <td class="small">Guide • Short hikes • Photo stops</td>
                    <td class="fw-semibold">₱ 500 – 1,000 / group</td>
                    <td><span class="badge bg-success-subtle text-success">Family</span></td>
                    <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Waterfall Trek"><i class="bx bx-message-square-dots me-1"></i> Inquire</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <p class="small text-muted mt-2">Rates are indicative only and may change. Confirm current prices with the Municipal Tourism Office or accredited operators.</p>
    </section>

    <section id="stays" class="container py-5">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-3">
            <div>
                <h2 class="section-title h3 mb-1">Stays & Where to Eat</h2>
                <p class="section-sub mb-0">Handy picks to base and feast</p>
            </div>
            <form class="d-flex gap-2 flex-wrap">
                <input type="date" class="form-control" style="min-width:160px" aria-label="Check-in">
                <input type="date" class="form-control" style="min-width:160px" aria-label="Check-out">
                <select id="guests" class="form-select" style="width:140px">
                    <option>1 guest</option><option>2 guests</option><option>3 guests</option><option>4+ guests</option>
                </select>
            </form>
        </div>

        <ul class="nav nav-pills mb-3" role="tablist">
            <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tabStays" type="button" role="tab"><i class="bx bxs-hotel me-1"></i> Stays</button></li>
            <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tabEats" type="button" role="tab"><i class="bx bx-restaurant me-1"></i> Where to Eat</button></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="tabStays" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="assets/mp_img/lakeside1.jpg" class="card-img-top" alt="Lakeside Resort">
                            <div class="card-body">
                                <h6 class="mb-1">Lakeside Resort</h6>
                                <div class="text-warning small mb-2"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star-half"></i><i class="bx bx-star"></i></div>
                                <small class="text-muted d-block mb-2">Rooms • Family cottages • Lake view deck</small>
                                <a href="https://www.google.com/search?q=lake+sebu+resort" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="assets/mp_img/ecolodge.jpg" class="card-img-top" alt="Eco Lodge">
                            <div class="card-body">
                                <h6 class="mb-1">Eco Lodge</h6>
                                <div class="text-warning small mb-2"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bx-star"></i><i class="bx bx-star"></i></div>
                                <small class="text-muted d-block mb-2">Garden huts • Breakfast • Tours desk</small>
                                <a href="https://www.google.com/search?q=lake+sebu+hotel" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="assets/mp_img/homestay.jpg" class="card-img-top" alt="Homestay">
                            <div class="card-body">
                                <h6 class="mb-1">Community Homestay</h6>
                                <div class="text-warning small mb-2"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star-half"></i><i class="bx bx-star"></i><i class="bx bx-star"></i></div>
                                <small class="text-muted d-block mb-2">Local experience • Shared meals • Guide referrals</small>
                                <a href="https://www.google.com/search?q=lake+sebu+homestay" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tabEats" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Floating Restaurant">
                            <div class="card-body">
                                <h6 class="mb-1">Floating Restaurant (Sample)</h6>
                                <small class="text-muted d-block mb-2">Fresh tilapia • Lake views • Group platters</small>
                                <a href="https://www.google.com/search?q=floating+restaurant+lake+sebu" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Native Cafe">
                            <div class="card-body">
                                <h6 class="mb-1">Native Cafe (Sample)</h6>
                                <small class="text-muted d-block mb-2">Local coffee • Rice cakes • Light breakfast</small>
                                <a href="https://www.google.com/search?q=cafe+lake+sebu" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Tilapia Grill">
                            <div class="card-body">
                                <h6 class="mb-1">Tilapia Grill (Sample)</h6>
                                <small class="text-muted d-block mb-2">Crispy tilapia • Sinugba • Family-friendly</small>
                                <a href="https://www.google.com/search?q=restaurant+lake+sebu" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> </div>
    </section>

    <section id="itineraries" class="container py-5">
        <h2 class="section-title h3">Suggested Itineraries</h2>
        <p class="section-sub">Pick a template — tweak in the planner</p>
        <div class="accordion" id="itinAcc">
            <div class="accordion-item">
                <h2 class="accordion-header" id="it1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ic1">Day Trip (1D)</button></h2>
                <div id="ic1" class="accordion-collapse collapse show" data-bs-parent="#itinAcc"><div class="accordion-body small">
                    <ol class="mb-2">
                        <li>05:30 – Lotus Sunrise Cruise (Seloton)</li>
                        <li>08:00 – Breakfast by the lake</li>
                        <li>10:00 – Seven Falls Zipline + Viewpoints</li>
                        <li>12:30 – Tilapia lunch (floating resto)</li>
                        <li>14:30 – T'boli weaving center</li>
                        <li>16:00 – Lake Lahit kayak (optional)</li>
                    </ol>
                    <button class="btn btn-outline-primary btn-sm add-to-planner" data-size="Couple" data-interests="nature,adventure,food">Add to Planner</button>
                </div></div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="it2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ic2">2D1N Getaway</button></h2>
                <div id="ic2" class="accordion-collapse collapse" data-bs-parent="#itinAcc"><div class="accordion-body small">
                    <ol class="mb-2">
                        <li>Day 1: Arrival • Lakeside lunch • Waterfall trek • Sunset deck</li>
                        <li>Day 2: Sunrise cruise • Weaving workshop • Souvenir stop</li>
                    </ol>
                    <button class="btn btn-outline-primary btn-sm add-to-planner" data-size="Family (3–5)" data-interests="nature,culture,food">Add to Planner</button>
                </div></div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="it3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ic3">3D2N Adventure & Culture</button></h2>
                <div id="ic3" class="accordion-collapse collapse" data-bs-parent="#itinAcc"><div class="accordion-body small">
                    <ol class="mb-2">
                        <li>Day 1: Zipline & Seven Falls • Kayak Lake Lahit</li>
                        <li>Day 2: Sunrise cruise • T'boli immersion • Farm-to-table dinner</li>
                        <li>Day 3: Free morning • Coffee by the lake • Departure</li>
                    </ol>
                    <button class="btn btn-outline-primary btn-sm add-to-planner" data-size="Group (6+)" data-interests="adventure,culture,food">Add to Planner</button>
                </div></div>
            </div>
        </div>
    </section>

    <section id="essentials" class="container py-5">
        <h2 class="section-title h3">Travel Essentials</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
                    <div class="fw-semibold mb-2"><i class="bx bx-credit-card me-1"></i> Money & Connectivity</div>
                    <ul class="small mb-2">
                        <li>Currency: Philippine Peso (PHP). ATMs more common in Koronadal/Surallah.</li>
                        <li>SIM: Globe/Smart work well in town centers.</li>
                        <li>Wi-Fi: Available in many resorts/cafés; mobile data varies by area.</li>
                    </ul>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">USD</span>
                        <input id="usd" type="number" class="form-control" placeholder="100">
                        <span class="input-group-text">≈ PHP</span>
                        <input id="php" type="number" class="form-control" placeholder="5800">
                    </div>
                    <small class="text-muted">*Demo rates. Replace with live FX API.</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
                    <div class="fw-semibold mb-2"><i class="bx bx-navigation me-1"></i> Getting There</div>
                    <ul class="small mb-0">
                        <li>Fly to General Santos (GES) or Davao (DVO).</li>
                        <li>Land travel to Lake Sebu: 3–5 hours (bus + van/hired car).</li>
                        <li>Local transport: tricycles, habal-habal, chartered boats.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
                    <div class="fw-semibold mb-2"><i class="bx bx-first-aid me-1"></i> Safety & Contacts</div>
                    <ul class="small mb-0">
                        <li>Emergency: <strong>911</strong> (PH national hotline)</li>
                        <li>Tourism Office: sample +63 (000) 123 4567</li>
                        <li>Guides: book accredited operators only.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="responsible" class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h2 class="section-title h3">Responsible & Inclusive Tourism</h2>
                <p class="section-sub">Travel kindly — protect the lakes, honor the culture</p>
                <ul class="small">
                    <li>Respect sacred sites; ask permission before photographing people.</li>
                    <li>Leave no trace: pack out trash; avoid single-use plastics.</li>
                    <li>Support community enterprises and fair trade crafts.</li>
                    <li>Hire accredited local guides; follow safety briefings.</li>
                </ul>
                <button id="pledgeBtn" class="btn btn-success btn-sm"><i class="bx bx-leaf me-1"></i> I Pledge to Travel Kindly</button>
            </div>
            <div class="col-lg-5">
                <div class="p-4 border rounded-3 bg-white shadow-sm">
                    <h6 class="mb-2"><i class="bx bx-calendar-event me-1"></i> Events (Dates Vary)</h6>
                    <ul class="small mb-0">
                        <li>Helobung Cultural Festival — cultural dances & crafts (check annual dates)</li>
                        <li>Regatta & Tilapia Harvest — lakeside community events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="plan" class="container py-5">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3">
            <div>
                <h2 class="section-title h3 mb-1">Plan Your Trip</h2>
                <p class="section-sub mb-0">Practical essentials for a smooth visit</p>
            </div>
            <div class="w-100 w-sm-auto">
                <select id="langSelect" class="form-select" style="width: 220px;">
                    <option value="en" selected>Language: English</option>
                    <option value="fil">Wika: Filipino</option>
                </select>
            </div>
        </div>

        <div class="row g-4 mt-1">
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
                    <div class="fw-semibold mb-2"><i class="bx bx-map-pin me-1"></i> Map & Directions</div>
                    <div class="ratio ratio-1x1 mb-2 rounded-3" style="min-height:220px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.92523274291!2d124.69335882875107!3d6.216335193982542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f8664405367809%3A0x6a0a76a5913e1f0e!2sLake%20Sebu%2C%20South%20Cotabato!5e0!3m2!1sen!2sph!4v1714574972322!5m2!1sen!2sph" loading="lazy"></iframe>
                    </div>
                    <a href="https://www.google.com/maps/place/Lake+Sebu" target="_blank" class="btn btn-outline-primary btn-sm w-100">Open in Maps</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-9">
                <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
                    <div class="fw-semibold mb-3"><i class="bx bxs-edit-alt me-1"></i> My Trip Planner</div>
                    <form id="tripForm" class="row g-3">
                        <div class="col-md-6">
                            <label for="tripName" class="form-label">Trip Name</label>
                            <input type="text" class="form-control" id="tripName" value="Lake Sebu Adventure">
                        </div>
                        <div class="col-md-6">
                            <label for="travelDates" class="form-label">Travel Dates</label>
                            <input type="text" class="form-control" id="travelDates" placeholder="e.g., May 10-12, 2025">
                        </div>
                        <div class="col-12">
                            <label for="activities" class="form-label">Activities & Highlights</label>
                            <select id="activities" class="form-control select2-multiple" multiple="multiple">
                                <option value="zip">Seven Falls Zipline</option>
                                <option value="sunrise">Lotus Sunrise Cruise</option>
                                <option value="kayak">Kayaking at Lake Lahit</option>
                                <option value="culture">T'boli Weaving Center</option>
                                <option value="falls">Waterfall Trekking</option>
                                <option value="tilapia">Floating Restaurant Lunch</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="notes" class="form-label">Personal Notes</label>
                            <textarea class="form-control" id="notes" rows="3" placeholder="e.g., Must-try: tilapia! Book guide for the trek."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary"><i class="bx bxs-save me-1"></i> Save Plan</button>
                            <button type="reset" class="btn btn-outline-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="container py-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="section-title text-center h3">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q1">How do I get to Lake Sebu?</button></h2>
                        <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                            The most common route is to fly to General Santos City (GES), then take a bus to Surallah, and a van or "habal-habal" (motorcycle) to Lake Sebu. The total land travel is about 3-4 hours.
                        </div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">What's the best time to visit?</button></h2>
                        <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                            The dry season from December to April is ideal. This period offers clear skies for sunrise viewing and comfortable weather for outdoor activities like trekking and ziplining.
                        </div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">Is Lake Sebu safe for tourists?</button></h2>
                        <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                            Yes, Lake Sebu is generally safe. The local tourism office and police are active in ensuring visitor safety. However, it is always wise to be aware of your surroundings and book tours with accredited guides.
                        </div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">What food should I try?</button></h2>
                        <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                            Lake Sebu is famous for its tilapia dishes, especially the "chicharabao" (crispy deep-fried tilapia). You can enjoy it at the floating restaurants on the lake.
                        </div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="py-5">
        <div class="container text-center">
            <img src="assets/img/logo/logo.png" alt="Lake Sebu Tourism" width="48" height="48" class="mb-3">
            <p class="h6 fw-bold mb-2">Lake Sebu Tourism</p>
            <small class="d-block text-muted mb-3">South Cotabato, Philippines</small>
            <div class="d-flex justify-content-center gap-3 fs-4 mb-3">
                <a href="#" class="text-primary"><i class="bx bxl-facebook-square"></i></a>
                <a href="#" class="text-primary"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="text-primary"><i class="bx bxl-twitter"></i></a>
            </div>
            <p class="small text-muted mb-0">© 2024 Lake Sebu Tourism. All rights reserved.</p>
        </div>
    </footer>


<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="position-relative">
                            <img id="mainModalImage" src="" class="img-fluid w-100" style="object-fit: cover; height: 500px;" alt="">
                            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10;"></button>
                        </div>
                        <div id="modalThumbnails" class="d-flex p-2 bg-light justify-content-center flex-wrap gap-2">
                            </div>
                    </div>

                    <div class="col-md-4">
                        <div class="d-flex flex-column h-100 p-4">
                            <div>
                                <h5 id="modalTitle" class="modal-title section-title h4 mb-2"></h5>
                                <p id="modalDescription" class="mb-0"></p>
                            </div>
                            <div class="mt-auto pt-3">
                                <a href="#plan" class="btn btn-primary w-100" data-bs-dismiss="modal">
                                    <i class="bx bx-calendar-star me-1"></i> Plan This Activity
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <a href="#" id="backToTop" class="btn btn-primary rounded-circle shadow-lg" style="width:50px; height:50px; padding:10px; display:grid; place-items:center;">
        <i class="bx bx-arrow-to-top fs-4"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>

// Modal content loader
const imageModal = document.getElementById('imageModal');
if (imageModal) {
    imageModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        
        // Extract main info from the clicked card's data attributes
        const title = button.getAttribute('data-title');
        const description = button.getAttribute('data-description');
        const mainImage = button.getAttribute('data-image');
        
        // You'll need to add a new data attribute for thumbnails on your HTML cards
        // For this example, let's assume a sample set of thumbnails
        const thumbnails = [
            'assets/mp_img/zip1.jpg',
            'assets/mp_img/sunrise.jpg',
            'assets/mp_img/kayak.jpg'
        ];

        // Update the modal's main content
        const modalTitle = imageModal.querySelector('#modalTitle');
        const modalDescription = imageModal.querySelector('#modalDescription');
        const mainModalImage = imageModal.querySelector('#mainModalImage');
        const modalThumbnailsContainer = imageModal.querySelector('#modalThumbnails');
        
        modalTitle.textContent = title;
        modalDescription.textContent = description;
        mainModalImage.src = mainImage;
        mainModalImage.alt = title;

        // Clear previous thumbnails and create new ones
        modalThumbnailsContainer.innerHTML = '';
        thumbnails.forEach(src => {
            const img = document.createElement('img');
            img.src = src;
            img.className = 'img-thumbnail';
            img.style.cursor = 'pointer';
            img.style.width = '80px';
            img.style.height = '60px';
            img.style.objectFit = 'cover';
            img.alt = title;
            img.onclick = () => {
                mainModalImage.src = src; // Change main image on thumbnail click
            };
            modalThumbnailsContainer.appendChild(img);
        });
    });
}

        $(document).ready(function() {
            // Initialize Select2
            $('.select2-multiple').select2({
                theme: 'bootstrap-5',
                width: '100%',
                placeholder: 'Select activities...'
            });

            // "Plan Your Escape" button click handler
            $('.btn-lg[href="#plan"], .btn-glass-strong').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 70 // Offset for fixed navbar
                }, 800);
            });

            // "View Highlights" button click handler
            $('.btn-lg[href="#highlights"], .btn-glass').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 70
                }, 800);
            });

            // Back to top button logic
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#backToTop').fadeIn();
                } else {
                    $('#backToTop').fadeOut();
                }
            });

            $('#backToTop').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });



            // Highlight filter logic
            $('#filterHighlight').on('change', function() {
                const selectedTag = $(this).val();
                $('#highlightGrid > div').each(function() {
                    const tags = $(this).data('tags');
                    if (selectedTag === 'all' || tags.includes(selectedTag)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            // Tour table filter logic
            $('#tourCategory').on('change', function() {
                const selectedCat = $(this).val();
                $('#tourRows tr').each(function() {
                    const category = $(this).data('cat');
                    if (selectedCat === 'all' || category === selectedCat) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            // Inquire button modal/alert handler
            $('.inquire-tour').on('click', function() {
                const tourName = $(this).data('tour');
                alert(`Thank you for your interest in the "${tourName}". Please contact the tourism office for booking information.`);
            });

            // "Add to Planner" button logic
            $('.add-to-planner').on('click', function() {
                const itinerarySize = $(this).data('size');
                const itineraryInterests = $(this).data('interests').split(',');

                // Set values in the trip planner form
                $('#tripName').val(`Lake Sebu Itinerary for a ${itinerarySize}`);
                // Select multiple options in the Select2 dropdown
                $('#activities').val(itineraryInterests).trigger('change');
                alert('Itinerary added to the planner! Please fill in your travel dates and notes.');
            });

            // Trip form submission (placeholder)
            $('#tripForm').on('submit', function(e) {
                e.preventDefault();
                alert('Your trip plan has been saved!');
                // You would add real form submission logic here (e.g., to a server)
            });

        });



    </script>

<!-- Floating Chat Button -->
<button id="lsChatBtn"
  class="btn btn-primary rounded-circle shadow-lg"
  style="position:fixed; right:16px; bottom:80px; width:56px; height:56px; z-index:1200; display:grid; place-items:center;">
  <i class="bx bx-message-dots fs-4"></i>
</button>

<!-- Chat Window -->
<div id="lsChat" class="card shadow-lg"
     style="position:fixed; right:16px; bottom:148px; width:340px; max-height:70vh; z-index:1200; display:none;">
  <div class="card-header d-flex align-items-center justify-content-between bg-primary text-white py-2">
    <div class="d-flex align-items-center gap-2">
      <span class="badge bg-light text-primary">Lake Sebu</span>
      <strong>Tourism Chat</strong>
    </div>
    <button id="lsChatClose" class="btn btn-sm btn-light" type="button"><i class="bx bx-x"></i></button>
  </div>
  <div id="lsChatBody" class="card-body p-3" style="overflow:auto; max-height:50vh; background:#f8fafc;"></div>
  <div class="card-footer p-2">
    <form id="lsChatForm" class="d-flex align-items-center gap-2">
      <input id="lsChatInput" type="text" class="form-control" placeholder="Type your message…" autocomplete="off" />
      <button class="btn btn-primary" type="submit"><i class="bx bx-send"></i></button>
    </form>
    <div class="form-text mt-1">Ask: Directions, best time, zipline price, where to eat</div>
  </div>
</div>

<div class="modal fade" id="chatbotModal" tabindex="-1" aria-labelledby="chatbotModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content shadow rounded-4">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title" id="chatbotModalLabel">
          <img src="assets/img/ls_logo.png" alt="Lakbay AI" width="28" height="28" class="me-2">
          Lakbay AI
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pt-2 pb-0">
        <div id="chatbox" class="d-flex flex-column" style="max-height: 50vh; overflow-y: auto;">
          <div class="ls-msg bot">
            <div class="bubble">
              Hello! I'm your virtual guide for Lake Sebu. How can I help you plan your visit?
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer border-0 pt-0">
        <form id="chatForm" class="w-100 d-flex gap-2">
          <input type="text" id="userInput" class="form-control" placeholder="Ask me anything..." required>
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-send"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<button id="chatbotBtn" class="btn btn-primary btn-lg rounded-circle shadow-lg" style="position:fixed; bottom:20px; right:20px; z-index:1000;"><i class="bx bx-chat fs-4"></i></button>

<script>
  const inquireButtons = document.querySelectorAll('.inquire-tour');
  const chatbotModalEl = document.getElementById('chatbotModal');
  const chatbotModal = new bootstrap.Modal(chatbotModalEl);
  const chatbox = document.getElementById('chatbox');
  const chatbotTitle = document.getElementById('chatbotModalLabel');

  inquireButtons.forEach(button => {
    button.addEventListener('click', () => {
      const tourName = button.getAttribute('data-tour');
      chatbotTitle.textContent = `Inquire About ${tourName}`;

      // seed the chatbox
      chatbox.innerHTML = `
        <div class="ls-msg bot"><div class="bubble">
          Hello! How can I help you with the ${tourName} tour?
        </div></div>
      `;

      chatbotModal.show();
    });
  });
</script>


<!-- for gemini -->
<script type="module">
  import { GoogleGenerativeAI } from "https://esm.run/@google/generative-ai@0.21.0";

  // ⛔ Replace with your real key from Google AI Studio
  const API_KEY = "REPLACE_ME";
  const genAI = new GoogleGenerativeAI(API_KEY);
  const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });
  const chat = model.startChat({
    history: [],
    generationConfig: { temperature: 0.9 },
  });

  const chatbox = document.getElementById('chatbox');
  const chatForm = document.getElementById('chatForm');
  const userInput = document.getElementById('userInput');
  const chatbotBtn = document.getElementById('chatbotBtn');
  const chatbotModal = new bootstrap.Modal(document.getElementById('chatbotModal'));

  function addMessage(sender, text) {
    const wrap = document.createElement('div');
    wrap.className = `ls-msg ${sender}`;
    const bub = document.createElement('div');
    bub.className = 'bubble';
    bub.textContent = text;
    wrap.appendChild(bub);
    chatbox.appendChild(wrap);
    chatbox.scrollTop = chatbox.scrollHeight;
    return bub; // return bubble for streaming updates
  }

  chatForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const userMessage = userInput.value.trim();
    if (!userMessage) return;

    addMessage('user', userMessage);
    userInput.value = '';

    const typing = document.createElement('div');
    typing.className = 'ls-typing ms-2';
    typing.textContent = 'Lakbay AI is typing...';
    chatbox.appendChild(typing);
    chatbox.scrollTop = chatbox.scrollHeight;

    try {
      const result = await chat.sendMessageStream(userMessage);
      typing.remove();
      const botBubble = addMessage('bot', ''); // create once

      for await (const chunk of result.stream) {
        const chunkText = chunk.text();
        botBubble.textContent += chunkText;
        chatbox.scrollTop = chatbox.scrollHeight;
      }
    } catch (err) {
      console.error('Gemini error:', err);
      typing.remove();
      addMessage('bot', "Sorry, I'm having trouble connecting right now. Please try again later.");
    }
  });

  chatbotBtn.addEventListener('click', () => chatbotModal.show());
</script>




<script>
// OFFLINE mode muna; gawin true kapag may /api/chat_proxy.php ka na
const LS_USE_AI = false;

$(function () {
  const $btn = $('#lsChatBtn');
  const $chat = $('#lsChat');
  const $close = $('#lsChatClose');
  const $body = $('#lsChatBody');
  const $form = $('#lsChatForm');
  const $input = $('#lsChatInput');

  if (!$btn.length) { console.warn('Chat button not found'); return; }

  const STORAGE_KEY = 'ls_chat_history_v1';
  let history = JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
  const saveHistory = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(history));
  const scrollToBottom = () => $body.stop().animate({ scrollTop: $body[0].scrollHeight }, 300);

  function bubble(role, text, isHtml=false) {
    const safe = isHtml ? text : $('<div>').text(text).html();
    $body.append(`<div class="ls-msg ${role}"><div class="bubble">${safe}</div></div>`);
    scrollToBottom();
  }

  function typing(on=true) {
    if (on) { $body.append('<div id="lsTyping" class="ls-typing">Bot is typing…</div>'); scrollToBottom(); }
    else { $('#lsTyping').remove(); }
  }

  function initWelcome() {
    if (!history.length) {
      bubble('bot', "Mabuhay! 👋 I can help with directions, best time to visit, zipline price, lotus sunrise, or where to eat.");
      history.push({role:'bot', content:'Welcome message'}); saveHistory();
    } else {
      history.forEach(m => bubble(m.role, m.content));
    }
  }

  function faqBrain(q) {
    const t = q.toLowerCase();
    if (/(how.*get|directions|route|transport|paano pumunta|ito punta)/.test(t))
      return "✈️ Fly to General Santos (GES) → bus to Surallah → van/habal-habal to Lake Sebu (~3–4 hrs).";
    if (/(best time|when to visit|season|ulan|tag-init)/.test(t))
      return "🌤️ Best time: Dec–Apr (drier months) for sunrise cruises and trekking.";
    if (/(zip|zipline|seven falls).*(price|rate|magkano)/.test(t))
      return "🎢 Seven Falls Zipline: indicative ₱350–₱550 per rider (confirm on-site).";
    if (/(lotus|sunrise|seloton).*(boat|cruise|price|rate)/.test(t))
      return "🌅 Lotus Sunrise Cruise: ~₱600–₱1,200 per boat; go 5:30–6:00 AM.";
    if (/(eat|restaurant|food|kainan|tilapia|where to eat)/.test(t))
      return "🍽️ Floating restaurants: tilapia specialties (crispy/sinugba) with lake views.";
    if (/(t.?boli|culture|weav|t'nalak|tnalak|dreamweaver)/.test(t))
      return "🧶 Visit Lang Dulay Weaving Center; support fair-trade crafts.";
    if (/(safe|safety|ligtas|security)/.test(t))
      return "🛡️ Generally safe. Book accredited guides; PH emergency: 911.";
    if (/(stay|hotel|resort|homestay|saan matulog)/.test(t))
      return "🏨 Lakeside resorts, eco-lodges, and homestays available (see Google for current options).";
    if (/(contact|tourism office|number|hotline)/.test(t))
      return "📞 Tourism Office: sample +63 (000) 123 4567. Check official LGU/Tourism FB for current numbers.";
    return null;
  }

  async function askBot(text) {
    const faq = faqBrain(text);
    if (faq && !LS_USE_AI) return faq;

    if (LS_USE_AI) {
      try {
        const res = await fetch('/api/chat_proxy.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ message: text, history: history.slice(-10) })
        });
        const data = await res.json();
        return data.reply || "Sorry, no reply right now.";
      } catch (e) {
        console.error(e);
        return faq || "Sorry, I’m having trouble. Try asking about directions, best time, zipline price, or where to eat.";
      }
    }

    return "I didn’t catch that yet 🤖. Try: directions, best time, zipline price, lotus sunrise, where to eat, culture, or safety.";
  }

  // Open/close
  $btn.on('click', () => { $chat.toggle(); if ($chat.is(':visible')) initWelcome(); });
  $close.on('click', () => $chat.hide());

  // Send
  $form.on('submit', async (e) => {
    e.preventDefault();
    const text = $input.val().trim();
    if (!text) return;
    bubble('user', text);
    history.push({role:'user', content:text}); saveHistory();
    $input.val('');
    typing(true);
    const reply = await askBot(text);
    typing(false);
    bubble('bot', reply);
    history.push({role:'bot', content:reply}); saveHistory();
  });

  // Auto-open on Inquire buttons
  $('.inquire-tour').on('click', function() {
    const q = `I want to inquire about "${$(this).data('tour')}". What should I know?`;
    $chat.show(); initWelcome(); bubble('user', q);
    history.push({role:'user', content:q}); saveHistory();
    typing(true);
    askBot(q).then(r => { typing(false); bubble('bot', r); history.push({role:'bot', content:r}); saveHistory(); });
  });
});
</script>




</body>
</html>