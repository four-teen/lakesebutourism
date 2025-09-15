<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Discover Lake Sebu: Seven Falls zipline, lotus sunrise at Lake Seloton, T'boli culture, floating restaurants, and eco‑adventures in South Cotabato, Philippines." />
  <meta name="theme-color" content="#0d6efd" />
  <title>Lake Sebu Tourism</title>
   <link rel="icon" href="assets/img/logo/logo.png" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <style>
    :root{
      --bg-grad: linear-gradient(180deg, #eaf6ff 0%, #ffffff 40%);
    }
    body{ font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background: var(--bg-grad); color:#24303f; }
    /* Header */
    .navbar-glass{ background: rgba(255,255,255,.85); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,.06); }
    .nav-link{ font-weight: 600; }
    .nav-link.active{ color:#0d6efd !important; }
    /* Hero */
    .hero{ position: relative; min-height: 70vh; display:grid; place-items:center; text-align:center; color:#fff; }
    .hero::before{ content:""; position:absolute; inset:0; background:url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=2400&auto=format&fit=crop') center/cover no-repeat; }
    .hero::after{ content:""; position:absolute; inset:0; background:linear-gradient(180deg, rgba(0,0,0,.55), rgba(0,0,0,.35), rgba(0,0,0,.25)); }
    .hero > .hero-inner{ position:relative; z-index:2; padding: 5rem 1rem; }
    .hero h1{ font-weight:800; letter-spacing:.2px; text-shadow: 0 8px 30px rgba(0,0,0,.35); }
    .badge-pill{ border-radius:50rem; }

    .section-title{ font-weight:800; letter-spacing:.3px; }
    .section-sub{ color:#6b7a8c; }
    .card-img-top{ height: 200px; object-fit: cover; }

    .mosaic img{ height:220px; object-fit:cover; }

    .ratio iframe{ border:0; }

    /* Back to top */
    #backToTop{ position: fixed; right: 16px; bottom: 16px; display:none; z-index:1030 }

    /* Footer */
    footer{ background:#f6f9fc; border-top:1px solid #eaeff4; }

    /* Mobile tweaks */
    @media (max-width: 576px){ .hero h1{ font-size: 2.25rem; } }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navPrimary" data-bs-offset="80" tabindex="0">
  <!-- NAVBAR -->
  <nav id="navPrimary" class="navbar navbar-expand-lg navbar-light navbar-glass sticky-top py-2">
    <div class="container">
<a class="navbar-brand d-flex align-items-center" href="#home">
  <img src="assets/img/logo/logo.png" alt="Lake Sebu Tourism" width="36" height="36" class="me-2">
  <div>
    <strong>Lake Sebu</strong><br>
    <small class="text-muted">South Cotabato • PH</small>
  </div>
</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavLabel">Navigate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#highlights">Highlights</a></li>
            <li class="nav-item"><a class="nav-link" href="#experiences">Experiences</a></li>
            <li class="nav-item"><a class="nav-link" href="#culture">Culture</a></li>
            <li class="nav-item"><a class="nav-link" href="#map">Map</a></li>
            <li class="nav-item"><a class="nav-link" href="#plan">Plan</a></li>
            <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header id="home" class="hero">
    <div class="hero-inner container">
      <span class="badge bg-light text-dark badge-pill px-3 py-2 mb-3"><i class='bx bxs-map me-1'></i> South Cotabato, Philippines</span>
      <h1 class="display-4">Lake Sebu</h1>
      <p class="lead mb-4">Where waters mirror the sky</p>
      <div class="d-flex flex-wrap gap-2 justify-content-center">
        <a href="#plan" class="btn btn-primary btn-lg"><i class='bx bx-calendar-star me-1'></i> Plan Your Escape</a>
        <a href="#highlights" class="btn btn-outline-light btn-lg"><i class='bx bx-image-alt me-1'></i> View Highlights</a>
      </div>
    </div>
  </header>

  <!-- HIGHLIGHTS -->
  <section id="highlights" class="container py-5">
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-3">
      <div>
        <h2 class="section-title h3 mb-1">Highlights</h2>
        <p class="section-sub mb-0">Signature sights you shouldn't miss</p>
      </div>
      <div class="w-100 w-sm-auto">
        <select id="filterHighlight" class="form-select" style="width: 260px;">
          <option value="all" selected>Filter: All</option>
          <option value="nature">Nature & Views</option>
          <option value="adventure">Adventure</option>
          <option value="food">Food & Dining</option>
          <option value="culture">Culture</option>
        </select>
      </div>
    </div>

    <div id="highlightGrid" class="row g-4">
      <!-- Cards (data-tags used for filtering) -->
      <div class="col-12 col-sm-6 col-lg-3" data-tags="adventure nature">
        <div class="card h-100 shadow-sm">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?q=80&w=1600&auto=format&fit=crop" alt="Seven Falls Zipline">
          <div class="card-body">
            <h5 class="card-title">Seven Falls Zipline</h5>
            <p class="card-text small mb-0"><i class='bx bx-rocket me-1'></i> Asia's tallest zipline views over roaring cascades.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3" data-tags="nature">
        <div class="card h-100 shadow-sm">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop" alt="Lake Seloton Sunrise">
          <div class="card-body">
            <h5 class="card-title">Lake Seloton Sunrise</h5>
            <p class="card-text small mb-0"><i class='bx bx-sun me-1'></i> Glass‑calm waters painted with dawn light.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3" data-tags="nature adventure">
        <div class="card h-100 shadow-sm">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1600&auto=format&fit=crop" alt="Kayak at Lake Lahit">
          <div class="card-body">
            <h5 class="card-title">Kayak at Lake Lahit</h5>
            <p class="card-text small mb-0"><i class='bx bx-water me-1'></i> Paddle through lotus blooms and misty mornings.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3" data-tags="food">
        <div class="card h-100 shadow-sm">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1600&auto=format&fit=crop" alt="Floating Restaurants">
          <div class="card-body">
            <h5 class="card-title">Floating Restaurants</h5>
            <p class="card-text small mb-0"><i class='bx bx-restaurant me-1'></i> Tilapia feasts with panoramic lake views.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPERIENCES -->
  <section id="experiences" class="container py-5">
    <h2 class="section-title h3">Experiences</h2>
    <p class="section-sub">Feel Lake Sebu beyond the postcard</p>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
          <div class="d-flex align-items-start gap-2"><i class='bx bxs-hot text-primary fs-3'></i>
            <div>
              <h6 class="mb-1">Zipline Over Seven Falls</h6>
              <small class="text-muted">Soar above canyons at up to 120 kph — a bucket‑list rush.</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
          <div class="d-flex align-items-start gap-2"><i class='bx bxs-ship text-primary fs-3'></i>
            <div>
              <h6 class="mb-1">Lotus Sunrise Cruise</h6>
              <small class="text-muted">Dawn boat ride across lotus‑dotted waters at Lake Seloton.</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
          <div class="d-flex align-items-start gap-2"><i class='bx bxs-spa text-primary fs-3'></i>
            <div>
              <h6 class="mb-1">T'boli Weaving Workshop</h6>
              <small class="text-muted">Try weaving t'nalak and hear the lore of dreams.</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
          <div class="d-flex align-items-start gap-2"><i class='bx bxs-tree-alt text-primary fs-3'></i>
            <div>
              <h6 class="mb-1">Waterfall Trek</h6>
              <small class="text-muted">Short hikes connect multiple cascades — each unique.</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CULTURE -->
  <section id="culture" class="container py-5">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6 order-2 order-lg-1">
        <h2 class="section-title h3">T'boli Culture</h2>
        <p class="section-sub">Meet the dreamweavers of South Cotabato</p>
        <ul class="list-unstyled small">
          <li class="mb-2">• Visit the <strong>Lang Dulay Weaving Center</strong> — home of a National Living Treasure awardee.</li>
          <li class="mb-2">• Meanings behind <em>t'nalak</em> patterns: <em>kinibang</em> (crab), <em>bulinglangit</em> (universe), <em>kabangi</em> (butterfly).</li>
          <li class="mb-2">• Support community‑based souvenirs and guided storytelling.</li>
        </ul>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="row g-3 mosaic">
          <div class="col-6"><img class="img-fluid rounded-3 shadow-sm w-100" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1200&auto=format&fit=crop" alt="Textiles"></div>
          <div class="col-6"><img class="img-fluid rounded-3 shadow-sm w-100" src="https://images.unsplash.com/photo-1549880338-65ddcdfd017b?q=80&w=1200&auto=format&fit=crop" alt="Lake Mist"></div>
          <div class="col-12"><img class="img-fluid rounded-3 shadow-sm w-100" src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1200&auto=format&fit=crop" alt="Falls Trail"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAP -->
  <section id="map" class="container py-5">
    <h2 class="section-title h3">Map &amp; Orientation</h2>
    <div class="ratio ratio-16x9 rounded-4 shadow-sm">
      <iframe src="https://www.google.com/maps?q=Lake%20Sebu&output=embed" loading="lazy" allowfullscreen title="Lake Sebu Map"></iframe>
    </div>
  </section>

  <!-- TOURS & RATES (Tourism focus) -->
  <section id="tours" class="container py-5">
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-3">
      <div>
        <h2 class="section-title h3 mb-1">Tours &amp; Rates</h2>
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
            <td><i class='bx bx-rocket text-primary me-1'></i> Seven Falls Zipline</td>
            <td class="small">Harness + helmet • Shuttle to launch • Photo point</td>
            <td class="fw-semibold">₱ 350 – 550</td>
            <td><span class="badge bg-primary-subtle text-primary">Adventure</span></td>
            <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Seven Falls Zipline"><i class='bx bx-message-square-dots me-1'></i> Inquire</button></td>
          </tr>
          <tr data-cat="water">
            <td><i class='bx bx-boat text-primary me-1'></i> Lotus Sunrise Cruise (Seloton)</td>
            <td class="small">Private boat • Life vests • Local guide</td>
            <td class="fw-semibold">₱ 600 – 1,200 / boat</td>
            <td><span class="badge bg-info-subtle text-info">Water</span></td>
            <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Lotus Sunrise Cruise"><i class='bx bx-message-square-dots me-1'></i> Inquire</button></td>
          </tr>
          <tr data-cat="culture">
            <td><i class='bx bx-spa text-primary me-1'></i> T'boli Weaving &amp; Culture</td>
            <td class="small">Weaving demo • Storytelling • Community fee</td>
            <td class="fw-semibold">₱ 150 – 300 / guest</td>
            <td><span class="badge bg-warning-subtle text-warning">Culture</span></td>
            <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="T'boli Weaving & Culture"><i class='bx bx-message-square-dots me-1'></i> Inquire</button></td>
          </tr>
          <tr data-cat="family">
            <td><i class='bx bx-walk text-primary me-1'></i> Waterfall Trek (multi-cascade)</td>
            <td class="small">Guide • Short hikes • Photo stops</td>
            <td class="fw-semibold">₱ 500 – 1,000 / group</td>
            <td><span class="badge bg-success-subtle text-success">Family</span></td>
            <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Waterfall Trek"><i class='bx bx-message-square-dots me-1'></i> Inquire</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="small text-muted mt-2">Rates are indicative only and may change. Confirm current prices with the Municipal Tourism Office or accredited operators.</p>
  </section>

  <!-- STAYS & FOOD -->
  <section id="stays" class="container py-5">
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-3">
      <div>
        <h2 class="section-title h3 mb-1">Stays &amp; Where to Eat</h2>
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
      <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tabStays" type="button" role="tab"><i class='bx bxs-hotel me-1'></i> Stays</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tabEats" type="button" role="tab"><i class='bx bx-restaurant me-1'></i> Where to Eat</button></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane fade show active" id="tabStays" role="tabpanel">
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
              <img src="https://images.unsplash.com/photo-1551776235-dde6d4829808?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Lakeside Resort">
              <div class="card-body">
                <h6 class="mb-1">Lakeside Resort (Sample)</h6>
                <div class="text-warning small mb-2"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star-half'></i><i class='bx bx-star'></i></div>
                <small class="text-muted d-block mb-2">Rooms • Family cottages • Lake view deck</small>
                <a href="https://www.google.com/search?q=lake+sebu+resort" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
              <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3b2d8d?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Eco Lodge">
              <div class="card-body">
                <h6 class="mb-1">Eco Lodge (Sample)</h6>
                <div class="text-warning small mb-2"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></div>
                <small class="text-muted d-block mb-2">Garden huts • Breakfast • Tours desk</small>
                <a href="https://www.google.com/search?q=lake+sebu+hotel" target="_blank" class="btn btn-outline-primary btn-sm">View on Google</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
              <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Homestay">
              <div class="card-body">
                <h6 class="mb-1">Community Homestay (Sample)</h6>
                <div class="text-warning small mb-2"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star-half'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></div>
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
      </div>
    </div>
  </section>

  <!-- ITINERARIES -->
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

  <!-- ESSENTIALS -->
  <section id="essentials" class="container py-5">
    <h2 class="section-title h3">Travel Essentials</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
          <div class="fw-semibold mb-2"><i class='bx bx-credit-card me-1'></i> Money & Connectivity</div>
          <ul class="small mb-2">
            <li>Currency: Philippine Peso (PHP). ATMs more common in Koronadal/Surallah.</li>
            <li>SIM: Globe/Smart work well in town centers.</li>
            <li>Wi‑Fi: Available in many resorts/cafés; mobile data varies by area.</li>
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
          <div class="fw-semibold mb-2"><i class='bx bx-navigation me-1'></i> Getting There</div>
          <ul class="small mb-0">
            <li>Fly to General Santos (GES) or Davao (DVO).</li>
            <li>Land travel to Lake Sebu: 3–5 hours (bus + van/hired car).</li>
            <li>Local transport: tricycles, habal‑habal, chartered boats.</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="p-4 border rounded-3 bg-white h-100 shadow-sm">
          <div class="fw-semibold mb-2"><i class='bx bx-first-aid me-1'></i> Safety & Contacts</div>
          <ul class="small mb-0">
            <li>Emergency: <strong>911</strong> (PH national hotline)</li>
            <li>Tourism Office: sample +63 (000) 123 4567</li>
            <li>Guides: book accredited operators only.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- RESPONSIBLE TOURISM -->
  <section id="responsible" class="container py-5">
    <div class="row g-4 align-items-center">
      <div class="col-lg-7">
        <h2 class="section-title h3">Responsible &amp; Inclusive Tourism</h2>
        <p class="section-sub">Travel kindly — protect the lakes, honor the culture</p>
        <ul class="small">
          <li>Respect sacred sites; ask permission before photographing people.</li>
          <li>Leave no trace: pack out trash; avoid single‑use plastics.</li>
          <li>Support community enterprises and fair trade crafts.</li>
          <li>Hire accredited local guides; follow safety briefings.</li>
        </ul>
        <button id="pledgeBtn" class="btn btn-success btn-sm"><i class='bx bx-leaf me-1'></i> I Pledge to Travel Kindly</button>
      </div>
      <div class="col-lg-5">
        <div class="p-4 border rounded-3 bg-white shadow-sm">
          <h6 class="mb-2"><i class='bx bx-calendar-event me-1'></i> Events (Dates Vary)</h6>
          <ul class="small mb-0">
            <li>Helobung Cultural Festival — cultural dances & crafts (check annual dates)</li>
            <li>Regatta & Tilapia Harvest — lakeside community events</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- PLAN (with planner form) -->
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
        <div class="h-100 p-4 border rounded-3 bg-white shadow-sm">
          <div class="fw-semibold mb-1"><i class='bx bx-plane-alt me-1'></i> Flights</div>
          <small class="text-muted">Nearest airports: General Santos (GES), Davao (DVO). Land travel 3–5 hrs.</small>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="h-100 p-4 border rounded-3 bg-white shadow-sm">
          <div class="fw-semibold mb-1"><i class='bx bxs-hotel me-1'></i> Stays</div>
          <small class="text-muted">Lakeside resorts, homestays, and eco‑lodges. Book early for weekends.</small>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="h-100 p-4 border rounded-3 bg-white shadow-sm">
          <div class="fw-semibold mb-1"><i class='bx bxs-bowl-rice me-1'></i> Food</div>
          <small class="text-muted">Try crispy tilapia and native coffee at sunrise.</small>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="h-100 p-4 border rounded-3 bg-white shadow-sm">
          <div class="fw-semibold mb-1"><i class='bx bx-map me-1'></i> Getting Around</div>
          <small class="text-muted">Tricycles, habal‑habal, and chartered boats. Guided tours available.</small>
        </div>
      </div>
    </div>

    <!-- Simple planner (demo only) -->
    <form id="plannerForm" class="mt-4 p-4 border rounded-3 bg-white shadow-sm">
      <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
          <label class="form-label small">Travel Month</label>
          <select name="month" class="form-select" required>
            <option value="">Select month…</option>
            <option>January</option><option>February</option><option>March</option><option>April</option>
            <option>May</option><option>June</option><option>July</option><option>August</option>
            <option>September</option><option>October</option><option>November</option><option>December</option>
          </select>
        </div>
        <div class="col-sm-6 col-lg-3">
          <label class="form-label small">Group Size</label>
          <select name="size" id="groupSize" class="form-select" required>
            <option value="">Select…</option>
            <option>Solo</option><option>Couple</option><option>Family (3–5)</option><option>Group (6+)</option>
          </select>
        </div>
        <div class="col-sm-6 col-lg-3">
          <label class="form-label small">Interests</label>
          <select name="interests" id="interests" class="form-select" multiple>
            <option value="nature">Nature</option>
            <option value="adventure">Adventure</option>
            <option value="culture">Culture</option>
            <option value="food">Food</option>
          </select>
        </div>
        <div class="col-sm-6 col-lg-3 d-grid align-items-end">
          <button class="btn btn-primary mt-2" type="submit"><i class='bx bx-magic-wand me-1'></i> Get Suggested Itinerary</button>
        </div>
      </div>
    </form>
  </section>

  <!-- FAQ -->
  <section id="faq" class="container py-5">
    <h2 class="section-title h3">FAQ</h2>
    <div class="accordion" id="faqAcc">
      <div class="accordion-item">
        <h2 class="accordion-header" id="q1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="true" aria-controls="a1">When is the best time to visit?</button></h2>
        <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAcc"><div class="accordion-body small">Dry months (Dec–May) offer clearer skies. Sunrise cruises are best 5:00–6:00 AM.</div></div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="q2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">How do I get there?</button></h2>
        <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAcc"><div class="accordion-body small">Fly to General Santos or Davao, then 3–5 hours by land to Lake Sebu (South Cotabato).</div></div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="q3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="a3">Is it family‑friendly?</button></h2>
        <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAcc"><div class="accordion-body small">Yes. Boat rides, light treks, and cultural visits suit all ages (zipline has weight limits).</div></div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="container py-5">
    <h2 class="section-title h3">Contact</h2>
    <div class="row g-4">
      <div class="col-lg-7">
        <form id="contactForm" class="p-4 border rounded-3 bg-white shadow-sm">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label small">Full Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small">Country</label>
              <select name="country" id="country" class="form-select" required>
                <option value="">Select country…</option>
                <option>Philippines</option>
                <option>United States</option>
                <option>Japan</option>
                <option>Australia</option>
                <option>United Kingdom</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label small">Subject</label>
              <input type="text" name="subject" id="subject" class="form-control" placeholder="Tour inquiry / Media / Partnership" required>
            </div>
            <div class="col-12">
              <label class="form-label small">Message</label>
              <textarea name="message" class="form-control" rows="4" placeholder="Tell us your dates and interests…" required></textarea>
            </div>
          </div>
          <div class="d-flex gap-2 mt-3">
            <button type="submit" class="btn btn-primary"><i class='bx bx-send me-1'></i> Send Inquiry</button>
            <button type="reset" class="btn btn-outline-secondary"><i class='bx bx-eraser me-1'></i> Clear</button>
          </div>
        </form>
      </div>
      <div class="col-lg-5">
        <div class="h-100 p-4 border rounded-3 bg-white shadow-sm">
          <p class="fw-semibold mb-1">Municipal Tourism Office (Sample)</p>
          <p class="small text-muted mb-2">Poblacion, Lake Sebu, South Cotabato</p>
          <p class="small mb-1"><i class='bx bx-envelope me-1'></i> tourism@lakesebu.ph</p>
          <p class="small mb-3"><i class='bx bx-phone me-1'></i> +63 (000) 123 4567</p>
          <div class="d-flex gap-2">
            <a class="btn btn-outline-primary btn-sm" href="#" aria-label="Facebook"><i class='bx bxl-facebook'></i></a>
            <a class="btn btn-outline-danger btn-sm" href="#" aria-label="YouTube"><i class='bx bxl-youtube'></i></a>
            <a class="btn btn-outline-dark btn-sm" href="#" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
          </div>
          <hr>
          <form id="newsletterForm" class="d-flex gap-2">
            <input type="email" class="form-control" name="email" placeholder="Subscribe for updates" required>
            <button class="btn btn-dark" type="submit"><i class='bx bx-mail-send'></i></button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4 small">
    <div class="container d-flex flex-wrap align-items-center justify-content-between gap-2">
      <span>© <span id="year"></span> Lake Sebu Tourism • Built with Bootstrap 5</span>
      <a href="#home" class="link-primary">Back to top</a>
    </div>
  </footer>

  <button id="backToTop" class="btn btn-primary btn-lg rounded-circle"><i class='bx bx-chevron-up'></i></button>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', e=>{ const id=a.getAttribute('href'); if(id.length>1){ e.preventDefault(); document.querySelector(id)?.scrollIntoView({behavior:'smooth', block:'start'}); } });
    });

    // Back to top
    const btt = document.getElementById('backToTop');
    window.addEventListener('scroll', ()=>{ btt.style.display = window.scrollY > 600 ? 'inline-flex' : 'none'; });
    btt.addEventListener('click', ()=> window.scrollTo({top:0, behavior:'smooth'}));

    // Init year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Select2 initializations
    $('#filterHighlight').select2({ minimumResultsForSearch: 5, width: 'resolve' });
    $('#langSelect').select2({ minimumResultsForSearch: Infinity, width: 'resolve' });
    $('#interests').select2({ placeholder: 'Choose interests', width: 'resolve' });
    $('#country').select2({ width: 'resolve' });
    $('#tourCategory').select2({ width:'resolve', minimumResultsForSearch: Infinity });
    $('#guests').select2({ width:'resolve', minimumResultsForSearch: Infinity });

    // Filter highlights
    $('#filterHighlight').on('change', function(){
      const val = this.value;
      $('#highlightGrid > [data-tags]').each(function(){
        const tags = $(this).attr('data-tags');
        if(val === 'all' || (tags && tags.includes(val))) $(this).show(); else $(this).hide();
      });
    });

    // Tours: category filter
    $('#tourCategory').on('change', function(){
      const val = this.value;
      $('#tourRows > tr').each(function(){
        const show = val==='all' || $(this).data('cat')===val; $(this).toggle(show);
      });
    });

    // Inquire tour (prefill subject and open contact)
    $(document).on('click', '.inquire-tour', function(){
      const tour = $(this).data('tour');
      $('#subject').val('Tour Inquiry — ' + tour);
      document.getElementById('contact').scrollIntoView({behavior:'smooth', block:'start'});
      Swal.fire({ icon:'info', title:'Inquiry Drafted', text:'We pre‑filled the subject line for you.' });
    });

    // Itinerary quick‑add -> planner prefill
    $('.add-to-planner').on('click', function(){
      const size = $(this).data('size');
      const ints = (($(this).data('interests')||'')+ '').split(',');
      $('#groupSize').val(size).trigger('change');
      $('#interests').val(ints).trigger('change');
      document.getElementById('plan').scrollIntoView({behavior:'smooth', block:'start'});
      Swal.fire({ icon:'success', title:'Planner Updated', text:'We pre‑selected group size and interests.' });
    });

    // Simple USD<->PHP de