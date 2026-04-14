<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Discover Lake Sebu: Seven Falls zipline, lotus sunrise at Lake Seloton, T'boli culture, floating restaurants, and eco-adventures in South Cotabato, Philippines." />
    <meta name="theme-color" content="#0f3d3e" />
    <title>Lake Sebu Tourism</title>
    <link rel="icon" href="assets/img/logo/logo.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <style>
        :root{
            --bg-grad: linear-gradient(180deg, #eef6f2 0%, #f6fbfc 34%, #ffffff 62%);
            --brand-deep: #0f3d3e;
            --brand-moss: #2f6d57;
            --brand-sand: #d8b16c;
            --brand-cream: #f7f3eb;
            --brand-ink: #24303f;
        }

        body{
            font-family: "Manrope", system-ui, -apple-system, "Segoe UI", sans-serif;
            background: var(--bg-grad);
            color:var(--brand-ink);
        }

        /* Header */
        .navbar-glass{
            background: rgba(248,250,248,.84);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255,255,255,.45);
            box-shadow: 0 16px 32px rgba(15,61,62,.08);
        }
        .nav-shell{ min-height: 74px; }
        .navbar-brand{
            gap: .85rem;
            text-decoration: none;
        }
        .navbar-brand img{
            width: 44px;
            height: 44px;
        }
        .brand-title{
            display:block;
            font-weight:800;
            line-height:1.05;
            color:var(--brand-deep);
        }
        .brand-subtitle{
            display:block;
            color:#59706a;
            font-size:.9rem;
            line-height:1.2;
        }
        .nav-link{
            font-weight:700;
            color:#335253;
        }
        .nav-cluster .nav-link{
            padding:.55rem .95rem !important;
            border-radius:999px;
            transition: background-color .2s ease, color .2s ease, transform .2s ease;
        }
        .nav-cluster .nav-link:hover,
        .nav-cluster .nav-link.active{
            color:var(--brand-deep) !important;
            background:rgba(15,61,62,.08);
            transform:translateY(-1px);
        }
        .nav-plan-btn{
            border:0;
            border-radius:999px;
            background:linear-gradient(135deg, var(--brand-sand), #c68b34);
            color:#132425;
            font-weight:800;
            padding:.8rem 1.2rem;
            box-shadow:0 14px 28px rgba(198,139,52,.18);
        }
        .nav-plan-btn:hover{
            color:#132425;
            transform:translateY(-1px);
            box-shadow:0 18px 36px rgba(198,139,52,.24);
        }
        .navbar-toggler{
            border:1px solid rgba(15,61,62,.14);
            border-radius:1rem;
            padding:.55rem .7rem;
        }
        .navbar-toggler:focus{
            box-shadow:0 0 0 .18rem rgba(15,61,62,.16);
        }

        /* Hero (desktop/tablet) */
        .hero{
            position: relative;
            min-height: calc(100vh - 74px);
            display:flex;
            align-items:center;
            color:#fff;
            overflow: hidden;
        }
        .hero-bg-wrapper {
            position: absolute;
            inset: 0;
            background:url('assets/mp_img/main.jpg') center/cover no-repeat;
            z-index: 0;
        }
        .hero-bg-wrapper::before{
            content:"";
            position:absolute;
            width:34rem;
            height:34rem;
            right:-10rem;
            top:-10rem;
            border-radius:50%;
            background:radial-gradient(circle, rgba(216,177,108,.34) 0%, rgba(216,177,108,0) 72%);
            z-index:0;
        }
        .hero-bg-wrapper::after{
            content:"";
            position:absolute;
            inset:0;
            background:
                linear-gradient(90deg, rgba(7,22,23,.82) 0%, rgba(10,32,38,.66) 42%, rgba(14,52,60,.30) 100%),
                linear-gradient(180deg, rgba(0,0,0,.10), rgba(0,0,0,.20), rgba(0,0,0,.30));
        }

        .hero > .hero-inner{
            position:relative;
            z-index:2;
            width:100%;
            padding: clamp(4.5rem, 8vw, 6.5rem) 1rem;
        }
        .hero-layout{
            align-items:center;
            min-height: calc(100vh - 74px);
        }
        .hero-copy-col{
            max-width:42rem;
        }
        .hero-kicker{
            display:inline-flex;
            align-items:center;
            gap:.55rem;
            padding:.65rem 1rem;
            border-radius:999px;
            background:rgba(255,255,255,.12);
            border:1px solid rgba(255,255,255,.16);
            backdrop-filter:blur(12px);
            font-size:.95rem;
            font-weight:700;
            letter-spacing:.01em;
        }
        .hero-title{
            font-family:"Cormorant Garamond", Georgia, serif;
            font-size:clamp(4rem, 8vw, 6.5rem);
            line-height:.92;
            font-weight:700;
            letter-spacing:-.03em;
            margin:1.25rem 0 .9rem;
            text-shadow:0 18px 40px rgba(0,0,0,.24);
        }
        .hero-lead{
            font-size:1.12rem;
            line-height:1.8;
            color:rgba(255,255,255,.88);
            max-width:38rem;
        }
        .hero-quickfacts{
            display:flex;
            flex-wrap:wrap;
            gap:.9rem;
        }
        .hero-stat{
            display:inline-flex;
            align-items:center;
            gap:.5rem;
            padding:.78rem 1.05rem;
            border-radius:999px;
            background:rgba(255,255,255,.10);
            border:1px solid rgba(255,255,255,.14);
            backdrop-filter:blur(12px);
            font-size:.96rem;
            font-weight:700;
            color:#fff;
        }
        .hero-actions{
            display:flex;
            flex-wrap:wrap;
            gap:1rem;
        }
        .btn-hero-primary,
        .btn-hero-secondary{
            border-radius:999px;
            padding:1rem 1.4rem;
            font-weight:800;
        }
        .btn-hero-primary{
            border:0;
            background:linear-gradient(135deg, #e1bf7b, #c08a34);
            color:#132425;
            box-shadow:0 18px 36px rgba(192,138,52,.24);
        }
        .btn-hero-primary:hover{
            color:#132425;
            transform:translateY(-1px);
            box-shadow:0 22px 42px rgba(192,138,52,.30);
        }
        .btn-hero-secondary{
            color:#fff;
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.26);
            backdrop-filter:blur(10px);
        }
        .btn-hero-secondary:hover{
            color:#fff;
            background:rgba(255,255,255,.16);
        }
        .hero-note{
            display:flex;
            flex-wrap:wrap;
            gap:1.25rem 1.5rem;
            color:rgba(255,255,255,.82);
            font-size:.95rem;
        }
        .hero-note span{
            display:inline-flex;
            align-items:center;
            gap:.45rem;
        }

        /* Hero scenic panel */
        .hero-scene{
            position:relative;
            max-width:29rem;
            margin-left:auto;
            display:grid;
            grid-template-columns:repeat(2, minmax(0, 1fr));
            gap:1rem;
            align-content:start;
        }
        .hero-scene-main{
            position:relative;
            grid-column:1 / -1;
            padding:.95rem;
            border-radius:2rem;
            background:rgba(247,243,235,.96);
            color:var(--brand-ink);
            box-shadow:0 28px 60px rgba(6,27,35,.34);
        }
        .hero-carousel {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: none;
            padding: 0;
        }
        .hero-carousel .carousel-inner {
            border-radius: 1.45rem;
            overflow: hidden;
            box-shadow: 0 12px 28px rgba(0,0,0,.16);
        }
        .hero-carousel .carousel-item img {
            width: 100%;
            height: 27rem;
            object-fit: cover;
            object-position: center;
        }
        .hero-scene-copy{
            padding:1rem .25rem .15rem;
        }
        .hero-scene-label{
            display:inline-flex;
            align-items:center;
            gap:.45rem;
            padding:.4rem .75rem;
            border-radius:999px;
            background:rgba(15,61,62,.08);
            color:var(--brand-deep);
            font-size:.82rem;
            font-weight:800;
            text-transform:uppercase;
            letter-spacing:.08em;
        }
        .hero-scene-copy h3{
            font-family:"Cormorant Garamond", Georgia, serif;
            font-size:2rem;
            font-weight:700;
            color:#173434;
            margin:.8rem 0 .45rem;
        }
        .hero-scene-copy p{
            margin:0;
            color:#52615d;
            line-height:1.65;
        }
        .hero-float-card{
            position:relative;
            width:auto;
            min-height:100%;
            padding:1rem 1rem .95rem;
            border-radius:1.4rem;
            background:rgba(255,255,255,.94);
            color:var(--brand-ink);
            box-shadow:0 18px 36px rgba(11,38,45,.20);
        }
        .hero-float-card span{
            display:block;
            margin-bottom:.35rem;
            color:var(--brand-moss);
            font-size:.78rem;
            font-weight:800;
            letter-spacing:.08em;
            text-transform:uppercase;
        }
        .hero-float-card strong{
            display:block;
            font-size:1rem;
            line-height:1.35;
        }
        .hero-float-card small{
            display:block;
            margin-top:.3rem;
            color:#5f6e69;
            line-height:1.5;
        }
        .hero-float-top{
            top:auto;
            right:auto;
        }
        .hero-float-bottom{
            left:auto;
            bottom:auto;
        }

        .section-title{ font-weight:800; letter-spacing:.3px; }
        .section-sub{ color:#6b7a8c; }

        .highlights-shell{
            position:relative;
            padding:clamp(1.5rem, 3vw, 2rem);
            border-radius:2rem;
            background:linear-gradient(180deg, rgba(255,255,255,.92) 0%, rgba(246,249,246,.96) 100%);
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 24px 54px rgba(15,61,62,.08);
            overflow:hidden;
        }
        .highlights-shell::before,
        .highlights-shell::after{
            content:"";
            position:absolute;
            border-radius:50%;
            pointer-events:none;
        }
        .highlights-shell::before{
            width:18rem;
            height:18rem;
            left:-8rem;
            bottom:-10rem;
            background:radial-gradient(circle, rgba(216,177,108,.20), rgba(216,177,108,0) 72%);
        }
        .highlights-shell::after{
            width:14rem;
            height:14rem;
            right:-5rem;
            top:-5rem;
            background:radial-gradient(circle, rgba(47,109,87,.14), rgba(47,109,87,0) 72%);
        }
        .highlights-head,
        .highlight-grid-shell{
            position:relative;
            z-index:1;
        }
        .section-kicker{
            display:inline-flex;
            align-items:center;
            gap:.5rem;
            padding:.55rem .9rem;
            border-radius:999px;
            background:rgba(15,61,62,.07);
            color:var(--brand-deep);
            font-size:.82rem;
            font-weight:800;
            letter-spacing:.08em;
            text-transform:uppercase;
        }
        .highlights-intro{
            max-width:39rem;
        }
        .highlight-toolbar{
            display:flex;
            flex-wrap:wrap;
            align-items:flex-end;
            justify-content:flex-end;
            gap:1rem 1.25rem;
        }
        .highlight-filter-card{
            min-width:min(100%, 260px);
            padding:1rem 1.05rem;
            border-radius:1.25rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 12px 24px rgba(15,61,62,.06);
        }
        .highlight-filter-label{
            display:block;
            margin-bottom:.5rem;
            color:var(--brand-moss);
            font-size:.76rem;
            font-weight:800;
            letter-spacing:.08em;
            text-transform:uppercase;
        }
        .highlight-filter-card .form-select{
            border:0;
            border-radius:999px;
            background-color:rgba(15,61,62,.06);
            color:var(--brand-deep);
            font-weight:700;
            box-shadow:none;
            padding-top:.8rem;
            padding-bottom:.8rem;
        }
        .highlight-guide-note{
            margin:0;
            max-width:18rem;
            color:#5c6f6a;
            font-size:.94rem;
            line-height:1.6;
        }
        .highlight-results{
            display:inline-flex;
            align-items:center;
            gap:.45rem;
            padding:.7rem .95rem;
            border-radius:999px;
            background:rgba(15,61,62,.07);
            color:var(--brand-deep);
            font-weight:800;
        }
        .highlight-card{
            display:flex;
        }
        .highlight-card[role="button"]{
            outline:none;
        }
        .highlight-card[role="button"]:focus-visible .highlight-surface{
            transform:translateY(-4px);
            box-shadow:0 28px 48px rgba(11,38,45,.16);
        }
        .highlight-surface{
            position:relative;
            display:flex;
            flex-direction:column;
            width:100%;
            min-height:100%;
            border-radius:1.7rem;
            overflow:hidden;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 20px 38px rgba(11,38,45,.10);
            transition:transform .35s ease, box-shadow .35s ease;
        }
        .highlight-card:hover .highlight-surface{
            transform:translateY(-6px);
            box-shadow:0 28px 50px rgba(11,38,45,.16);
        }
        .highlight-visual{
            position:relative;
            overflow:hidden;
            isolation:isolate;
        }
        .highlight-visual::after{
            content:"";
            position:absolute;
            inset:0;
            background:linear-gradient(180deg, rgba(8,26,27,.04) 0%, rgba(8,26,27,.18) 48%, rgba(8,26,27,.62) 100%);
        }
        .highlight-media{
            width:100%;
            height:17.5rem;
            object-fit:cover;
            transition:transform .5s ease;
        }
        .highlight-card-large .highlight-media{
            height:24rem;
        }
        .highlight-card:hover .highlight-media{
            transform:scale(1.05);
        }
        .highlight-badge-row{
            position:absolute;
            top:1rem;
            left:1rem;
            right:1rem;
            z-index:1;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
            gap:.55rem;
        }
        .highlight-badge{
            display:inline-flex;
            align-items:center;
            gap:.35rem;
            padding:.45rem .72rem;
            border-radius:999px;
            background:rgba(255,255,255,.9);
            color:var(--brand-deep);
            font-size:.78rem;
            font-weight:800;
            box-shadow:0 8px 16px rgba(11,38,45,.08);
        }
        .highlight-badge-spotlight{
            background:rgba(15,61,62,.78);
            color:#fff;
        }
        .highlight-content{
            display:flex;
            flex:1;
            flex-direction:column;
            gap:.9rem;
            padding:1.15rem 1.15rem 1.2rem;
        }
        .highlight-card-large .highlight-content{
            padding:1.3rem 1.3rem 1.35rem;
        }
        .highlight-eyebrow{
            color:var(--brand-moss);
            font-size:.78rem;
            font-weight:800;
            letter-spacing:.08em;
            text-transform:uppercase;
        }
        .highlight-title{
            margin:0;
            color:#163535;
            font-size:1.35rem;
            font-weight:800;
        }
        .highlight-card-large .highlight-title{
            font-family:"Cormorant Garamond", Georgia, serif;
            font-size:2.35rem;
            line-height:.98;
        }
        .highlight-summary{
            margin:0;
            color:#566661;
            line-height:1.7;
        }
        .highlight-metrics{
            display:flex;
            flex-wrap:wrap;
            gap:.55rem;
        }
        .highlight-metric{
            display:inline-flex;
            align-items:center;
            gap:.38rem;
            padding:.48rem .72rem;
            border-radius:999px;
            background:var(--brand-cream);
            color:#445651;
            font-size:.84rem;
            font-weight:700;
        }
        .highlight-action{
            margin-top:auto;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:1rem;
            padding-top:.15rem;
            color:var(--brand-deep);
            font-weight:800;
        }
        .highlight-action i{
            font-size:1.3rem;
        }
        @media (min-width: 992px) {
            .highlight-card-wide .highlight-surface{
                flex-direction:row;
            }
            .highlight-card-wide .highlight-visual{
                flex:0 0 44%;
            }
            .highlight-card-wide .highlight-media{
                height:100%;
                min-height:100%;
            }
            .highlight-card-wide .highlight-content{
                padding:1.25rem 1.25rem 1.3rem;
            }
        }
        @media (max-width: 991.98px) {
            .highlight-toolbar{
                justify-content:flex-start;
            }
            .highlight-guide-note{
                max-width:none;
            }
        }
        @media (max-width: 767.98px) {
            .highlights-shell{
                padding:1.2rem;
                border-radius:1.5rem;
            }
            .highlight-card-large .highlight-media,
            .highlight-media{
                height:15rem;
            }
            .highlight-results{
                font-size:.9rem;
            }
        }

        .section-shell{
            position:relative;
            padding:clamp(1.4rem, 3vw, 2rem);
            border-radius:2rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 24px 54px rgba(15,61,62,.08);
            overflow:hidden;
        }
        .section-shell-soft{
            background:linear-gradient(180deg, rgba(255,255,255,.95) 0%, rgba(243,248,246,.98) 100%);
        }
        .section-shell-dark{
            background:linear-gradient(180deg, #10383a 0%, #0d2e2f 100%);
            color:#f6fbfa;
            border-color:rgba(255,255,255,.08);
            box-shadow:0 26px 56px rgba(8,26,27,.22);
        }
        .section-shell-dark .section-title,
        .section-shell-dark .section-sub,
        .section-shell-dark .section-note,
        .section-shell-dark p,
        .section-shell-dark li,
        .section-shell-dark .text-muted{
            color:rgba(246,251,250,.82) !important;
        }
        .section-shell-dark .section-kicker{
            background:rgba(255,255,255,.12);
            color:#f6fbfa;
        }
        .section-shell::before{
            content:"";
            position:absolute;
            inset:auto auto -8rem -7rem;
            width:16rem;
            height:16rem;
            border-radius:50%;
            background:radial-gradient(circle, rgba(216,177,108,.16), rgba(216,177,108,0) 72%);
            pointer-events:none;
        }
        .section-shell > *{
            position:relative;
            z-index:1;
        }
        .section-header{
            display:flex;
            flex-wrap:wrap;
            align-items:flex-end;
            justify-content:space-between;
            gap:1.25rem 1.5rem;
            margin-bottom:1.5rem;
        }
        .section-copy{
            max-width:42rem;
        }
        .section-note{
            margin:0;
            max-width:19rem;
            color:#5d6e69;
            line-height:1.65;
        }
        .travel-card{
            position:relative;
            display:flex;
            flex-direction:column;
            height:100%;
            padding:1.3rem;
            border-radius:1.55rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 18px 34px rgba(11,38,45,.08);
            transition:transform .32s ease, box-shadow .32s ease;
        }
        .travel-card:hover{
            transform:translateY(-5px);
            box-shadow:0 26px 48px rgba(11,38,45,.14);
        }
        .travel-icon{
            width:3.2rem;
            height:3.2rem;
            display:grid;
            place-items:center;
            border-radius:1rem;
            background:rgba(15,61,62,.08);
            color:var(--brand-deep);
            font-size:1.5rem;
        }
        .travel-chip{
            display:inline-flex;
            align-items:center;
            gap:.4rem;
            padding:.45rem .7rem;
            border-radius:999px;
            background:var(--brand-cream);
            color:var(--brand-deep);
            font-size:.8rem;
            font-weight:800;
            letter-spacing:.03em;
        }
        .travel-card h3,
        .travel-card h4{
            margin:.95rem 0 .55rem;
            color:#173434;
            font-size:1.18rem;
            font-weight:800;
        }
        .travel-card p{
            margin:0;
            color:#596863;
            line-height:1.7;
        }
        .travel-pills{
            display:flex;
            flex-wrap:wrap;
            gap:.5rem;
            margin-top:1rem;
        }
        .travel-pill{
            display:inline-flex;
            align-items:center;
            gap:.35rem;
            padding:.42rem .65rem;
            border-radius:999px;
            background:rgba(15,61,62,.06);
            color:#435650;
            font-size:.82rem;
            font-weight:700;
        }
        .info-stack{
            display:grid;
            gap:1rem;
        }
        .split-shell{
            display:grid;
            gap:1.5rem;
        }
        .mosaic-card{
            border-radius:1.55rem;
            overflow:hidden;
            box-shadow:0 20px 40px rgba(11,38,45,.12);
        }
        .mosaic-card img{
            width:100%;
            height:100%;
            object-fit:cover;
        }
        .culture-side-note{
            padding:1.05rem 1.1rem;
            border-radius:1.25rem;
            background:rgba(255,255,255,.88);
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 14px 28px rgba(11,38,45,.08);
        }
        .culture-side-note strong{
            display:block;
            margin-bottom:.35rem;
            color:var(--brand-deep);
        }
        .route-card{
            padding:1.15rem 1.15rem 1.05rem;
            border-radius:1.35rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 16px 30px rgba(11,38,45,.07);
        }
        .route-card h4{
            margin:0 0 .35rem;
            color:#173434;
            font-size:1rem;
            font-weight:800;
        }
        .route-card p{
            margin:0;
            color:#5a6a65;
            line-height:1.6;
        }
        .route-icon{
            width:2.8rem;
            height:2.8rem;
            display:grid;
            place-items:center;
            border-radius:.95rem;
            background:rgba(15,61,62,.08);
            color:var(--brand-deep);
            font-size:1.3rem;
        }
        .route-link{
            border-radius:999px;
            font-weight:800;
        }
        .tour-toolbar{
            display:flex;
            flex-wrap:wrap;
            align-items:flex-end;
            justify-content:space-between;
            gap:1rem 1.5rem;
        }
        .tour-filter-card{
            min-width:min(100%, 220px);
            padding:1rem 1.05rem;
            border-radius:1.25rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 12px 24px rgba(15,61,62,.06);
        }
        .tour-filter-card .form-select,
        .planner-lang-card .form-select{
            border:0;
            border-radius:999px;
            background:rgba(15,61,62,.06);
            color:var(--brand-deep);
            font-weight:700;
            box-shadow:none;
            padding-top:.8rem;
            padding-bottom:.8rem;
        }
        .table-card{
            overflow:hidden;
            border-radius:1.55rem;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 20px 40px rgba(11,38,45,.08);
            background:#fff;
        }
        .tour-table{
            margin:0;
        }
        .tour-table thead th{
            border-bottom:0;
            background:#eff6f3;
            color:#33504d;
            font-size:.82rem;
            font-weight:800;
            letter-spacing:.05em;
            text-transform:uppercase;
        }
        .tour-table tbody td{
            padding-top:1rem;
            padding-bottom:1rem;
            border-color:#edf3f1;
        }
        .tour-table tbody tr:hover{
            background:rgba(15,61,62,.02);
        }
        .pill-tabs{
            gap:.75rem;
        }
        .pill-tabs .nav-link{
            border-radius:999px;
            padding:.8rem 1.15rem;
            background:rgba(15,61,62,.06);
            color:var(--brand-deep);
            font-weight:800;
            border:0;
        }
        .pill-tabs .nav-link.active{
            background:linear-gradient(135deg, #e1bf7b, #c08a34);
            color:#132425;
            box-shadow:0 14px 28px rgba(192,138,52,.18);
        }
        .stay-card{
            border:0;
            border-radius:1.55rem;
            overflow:hidden;
            box-shadow:0 20px 40px rgba(11,38,45,.10);
        }
        .stay-card .card-body{
            padding:1.2rem 1.2rem 1.25rem;
        }
        .stay-card .card-img-top{
            height:15rem;
        }
        .stay-card .btn{
            border-radius:999px;
            font-weight:800;
        }
        .itinerary-accordion .accordion-item,
        .faq-accordion .accordion-item{
            border:1px solid rgba(15,61,62,.08);
            border-radius:1.4rem !important;
            overflow:hidden;
            box-shadow:0 14px 28px rgba(11,38,45,.06);
            margin-bottom:1rem;
            background:#fff;
        }
        .itinerary-accordion .accordion-button,
        .faq-accordion .accordion-button{
            font-weight:800;
            color:#173434;
            background:#fff;
            box-shadow:none;
            padding:1.1rem 1.2rem;
        }
        .itinerary-accordion .accordion-button:not(.collapsed),
        .faq-accordion .accordion-button:not(.collapsed){
            background:#f3f8f6;
            color:var(--brand-deep);
        }
        .itinerary-accordion .accordion-body,
        .faq-accordion .accordion-body{
            padding:1rem 1.2rem 1.25rem;
            color:#566661;
            line-height:1.7;
        }
        .essentials-grid,
        .responsible-grid,
        .plan-grid{
            align-items:stretch;
        }
        .info-card{
            height:100%;
            padding:1.25rem;
            border-radius:1.5rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 18px 34px rgba(11,38,45,.07);
        }
        .info-card h3,
        .info-card h4{
            margin:0 0 .65rem;
            color:#173434;
            font-size:1.05rem;
            font-weight:800;
        }
        .info-card ul{
            margin:0;
            padding-left:1rem;
            color:#566661;
            line-height:1.75;
        }
        .info-card p{
            margin:0;
            color:#566661;
            line-height:1.7;
        }
        .pledge-card{
            border-radius:1.6rem;
            background:linear-gradient(180deg, rgba(255,255,255,.98), rgba(241,248,243,.98));
        }
        .pledge-button{
            border-radius:999px;
            font-weight:800;
            padding:.85rem 1.2rem;
        }
        .planner-map-card,
        .planner-form-card{
            height:100%;
            padding:1.25rem;
            border-radius:1.6rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 20px 38px rgba(11,38,45,.08);
        }
        .planner-form-card .form-control,
        .planner-form-card .form-select{
            border-radius:1rem;
            border-color:#dbe8e3;
            padding:.8rem .95rem;
        }
        .planner-actions{
            display:flex;
            flex-wrap:wrap;
            gap:.75rem;
            align-items:center;
        }
        .planner-actions .btn{
            border-radius:999px;
            font-weight:800;
        }
        .planner-lang-card{
            min-width:min(100%, 220px);
            padding:1rem 1.05rem;
            border-radius:1.25rem;
            background:#fff;
            border:1px solid rgba(15,61,62,.08);
            box-shadow:0 12px 24px rgba(15,61,62,.06);
        }
        .footer-shell{
            border-radius:2rem;
            padding:2rem;
            background:linear-gradient(180deg, #143a3c 0%, #0d2d2f 100%);
            color:#f4faf8;
            box-shadow:0 26px 56px rgba(8,26,27,.22);
        }
        .footer-shell .btn{
            border-radius:999px;
            font-weight:800;
        }
        .footer-shell .btn-outline-light{
            border-color:rgba(255,255,255,.28);
        }
        .footer-meta{
            color:rgba(244,250,248,.76);
        }
        .modal-content{
            border:0;
            border-radius:1.6rem;
            overflow:hidden;
            box-shadow:0 28px 60px rgba(6,27,35,.24);
        }
        #backToTop{
            background:linear-gradient(135deg, #e1bf7b, #c08a34);
            border:0;
            color:#132425;
        }
        #backToTop:hover{
            color:#132425;
        }
        .select2-container--bootstrap-5 .select2-selection{
            border-radius:1rem !important;
            border-color:#dbe8e3 !important;
            min-height:48px !important;
            padding:.35rem .5rem !important;
        }
        @media (max-width: 991.98px) {
            .section-header{
                align-items:flex-start;
            }
            .section-note{
                max-width:none;
            }
        }
        @media (max-width: 767.98px) {
            .section-shell,
            .footer-shell{
                padding:1.2rem;
                border-radius:1.5rem;
            }
            .travel-card,
            .info-card,
            .planner-map-card,
            .planner-form-card{
                padding:1.05rem;
                border-radius:1.35rem;
            }
            .stay-card .card-img-top{
                height:13rem;
            }
        }
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
        @media (max-width: 767.98px){
            /* Smaller hero title if ever shown */
            .hero-title{ font-size:2.25rem; }

            /* Hide desktop hero below md; show splash */
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
        @media (max-width: 1199.98px) {
            .hero-scene{
                grid-template-columns:1fr;
                max-width:27rem;
            }
            .hero-scene-main{
                grid-column:auto;
            }
            .hero-carousel .carousel-item img {
                height: 24rem;
            }
        }
        @media (max-width: 991.98px) {
            .hero{
                min-height: 72vh;
            }
            .hero-layout{
                min-height: auto;
                justify-content: center;
            }
            .hero-copy-col{
                max-width: 100%;
                margin-inline: auto;
                text-align: center;
            }
            .hero-quickfacts,
            .hero-actions,
            .hero-note{
                justify-content: center;
            }
            .hero-scene{
                margin: 2rem auto 0;
                max-width: 32rem;
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
.modal-hero-image { width:100%; height:min(56vh, 500px); object-fit:cover; }
.planner-status { min-height:1.5rem; }
.chatbot-fab{
  position:fixed;
  right:16px;
  bottom:80px;
  width:58px;
  height:58px;
  z-index:1200;
  display:flex;
  align-items:center;
  justify-content:center;
  padding:0;
  background:#fffaf3;
  border:2px solid #d89b36;
  box-shadow:0 18px 32px rgba(15,61,62,.16);
}
.chatbot-fab:hover{
  background:#fff4df;
  border-color:#c68b34;
}
.chatbot-btn-icon{
  width:34px;
  height:34px;
  border-radius:50%;
  overflow:hidden;
  display:flex;
  align-items:center;
  justify-content:center;
}
.chatbot-btn-image {
  width:100%;
  height:100%;
  display:block;
  object-fit:cover;
  object-position:center center;
}

@media (max-width: 767.98px) {
  .modal-hero-image { height:42vh; }
}


    </style>

</head>
<body data-bs-spy="scroll" data-bs-target="#navPrimary" data-bs-offset="80" tabindex="0">
    <nav id="navPrimary" class="navbar navbar-expand-lg navbar-light navbar-glass sticky-top py-2">
        <div class="container nav-shell">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="assets/img/logo/logo.png" alt="Lake Sebu Tourism">
                <div>
                    <span class="brand-title">Lake Sebu</span>
                    <small class="brand-subtitle">South Cotabato, Philippines</small>
                </div>
            </a>
            <div class="nav-cluster d-none d-lg-flex align-items-center ms-auto">
                <a class="nav-link" href="#highlights">Highlights</a>
                <a class="nav-link" href="#experiences">Experiences</a>
                <a class="nav-link" href="#culture">Culture</a>
                <a class="nav-link" href="#map">Map</a>
                <a class="nav-link" href="#faq">FAQ</a>
            </div>
            <a href="#plan" class="btn nav-plan-btn d-none d-lg-inline-flex ms-3">
                <i class="bx bx-calendar-star me-2"></i>Start Your Trip
            </a>
            <button class="navbar-toggler ms-auto d-lg-none" type="button"
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
            <h5 class="offcanvas-title" id="offcanvasNavLabel">Lake Sebu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#highlights"><i class='bx  bx-directions text-primary'  ></i> Highlights</a></li>
                <li class="nav-item"><a class="nav-link" href="#experiences"><i class='bx  bx-cycling text-primary'></i> Experiences</a></li>
                <li class="nav-item"><a class="nav-link" href="#culture"><i class='bx bxs-castle'></i> Culture</a></li>
                <li class="nav-item"><a class="nav-link" href="#map"><i class='bx bx-map' ></i> Map</a></li>
                <li class="nav-item"><a class="nav-link" href="#plan"><i class='bx bxs-plane-alt' ></i> Planner</a></li>
                <li class="nav-item"><a class="nav-link" href="#faq"><i class='bx bx-question-mark' ></i> FAQ</a></li>
            </ul>
        </div>
    </div>
    <header id="home" class="hero">
        <div class="hero-bg-wrapper"></div>
        <div class="hero-inner container">
            <div class="row g-5 hero-layout">
                <div class="col-lg-7">
                    <div class="hero-copy-col text-center text-lg-start">
                        <span class="hero-kicker"><i class="bx bxs-map"></i> South Cotabato, Philippines</span>
                        <h1 class="hero-title">Waterfalls, culture, and quiet lake mornings.</h1>
                        <p class="hero-lead mb-0">
                            Lake Sebu is a cool highland escape where lotus sunrise views, T'boli living traditions,
                            and Seven Falls adventures come together in one memorable trip.
                        </p>
                        <div class="hero-quickfacts mt-4">
                            <span class="hero-stat"><i class="bx bx-water"></i> Lotus sunrise views</span>
                            <span class="hero-stat"><i class="bx bx-landscape"></i> Seven Falls adventure</span>
                            <span class="hero-stat"><i class="bx bx-home-heart"></i> T'boli culture trails</span>
                        </div>
                        <div class="hero-actions mt-4">
                            <a href="#plan" class="btn btn-lg btn-hero-primary">
                                <i class="bx bx-calendar-star me-2"></i>Build My Itinerary
                            </a>
                            <a href="#highlights" class="btn btn-lg btn-hero-secondary">
                                <i class="bx bx-image-alt me-2"></i>Explore Highlights
                            </a>
                        </div>
                        <div class="hero-note mt-4">
                            <span><i class="bx bx-sun"></i> Best for sunrise starts and cool afternoon stops</span>
                            <span><i class="bx bx-camera"></i> Ideal for scenic rides, dining, and photo walks</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-scene">
                        <div class="hero-scene-main">
                            <div class="hero-carousel">
                                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3600">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/mp_img/ecolodge.jpg" class="d-block w-100" alt="Lake Sebu lakeside stay">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/mp_img/zip1.jpg" class="d-block w-100" alt="Seven Falls Zipline">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/mp_img/floating.jpg" class="d-block w-100" alt="Floating dining in Lake Sebu">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/mp_img/main.jpg" class="d-block w-100" alt="Lake Sebu scenic view">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/mp_img/sunrise.jpg" class="d-block w-100" alt="Lake Sebu sunrise">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/mp_img/homestay.jpg" class="d-block w-100" alt="Lake Sebu homestay">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/mp_img/kayak.jpg" class="d-block w-100" alt="Kayaking in Lake Sebu">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-scene-copy">
                                <span class="hero-scene-label"><i class="bx bx-route"></i> Signature Journey</span>
                                <h3>From sunrise lakes to waterfalls and floating meals</h3>
                                <p>Use this guide to shape a day trip or an overnight stay around Lake Sebu's most scenic stops.</p>
                            </div>
                        </div>
                        <div class="hero-float-card hero-float-top">
                            <span>Start Here</span>
                            <strong>Lake Seloton at dawn</strong>
                            <small>Still water, lotus blooms, and misty light make mornings the most photogenic.</small>
                        </div>
                        <div class="hero-float-card hero-float-bottom">
                            <span>Visitor Favorite</span>
                            <strong>Falls and lunch circuit</strong>
                            <small>Pair the zipline and viewpoints with a relaxed lakeside meal after.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<section id="mobileSplash" class="mobile-splash">
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
        <div class="highlights-shell">
            <div class="highlights-head d-flex justify-content-between align-items-end flex-wrap gap-4 mb-4">
                <div class="highlights-intro">
                    <h2 class="section-title display-6 mb-2">Highlights That Make Lake Sebu Memorable</h2>
                    <p class="section-sub mb-0">Start with these signature views, meals, and quiet-water moments. Each stop opens into a larger preview with trip context.</p>
                </div>
                <div class="highlight-toolbar">
                    <div class="highlight-filter-card">
                        <label for="filterHighlight" class="visually-hidden">Filter highlights</label>
                        <select id="filterHighlight" class="form-select" aria-label="Filter highlights">
                            <option value="all" selected>Show all highlights</option>
                            <option value="nature">Nature</option>
                            <option value="adventure">Adventure</option>
                            <option value="food">Dining</option>
                            <option value="culture">Culture</option>
                        </select>
                    </div>
                    <div>
                        <p class="highlight-guide-note">Open any card for a closer look, extra photos, and planning details.</p>
                        <div class="highlight-results mt-2">
                            <i class="bx bx-compass"></i>
                            <span id="highlightResultsValue">4 signature stops showing</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="highlightGrid" class="row g-4 interactive-grid highlight-grid-shell">
                <div class="col-12 col-lg-7 highlight-card highlight-card-large"
                     data-tags="adventure nature"
                     data-bs-toggle="modal"
                     data-bs-target="#imageModal"
                     data-title="Seven Falls Zipline"
                     data-image="assets/mp_img/zip1.jpg"
                     data-gallery="assets/mp_img/zip1.jpg,assets/mp_img/ecolodge.jpg"
                     data-description="The Seven Falls Zipline is one of Asia's highest and longest, soaring over canyons and roaring waterfalls. It offers an exhilarating, bird's-eye view of the lush, dense forest below. A truly unforgettable experience for thrill-seekers."
                     role="button"
                     tabindex="0"
                     aria-label="Open Seven Falls Zipline highlight">
                    <article class="highlight-surface">
                        <div class="highlight-visual">
                            <img class="highlight-media" src="assets/mp_img/zip1.jpg" alt="Seven Falls Zipline" loading="lazy" decoding="async">
                            <div class="highlight-badge-row">
                                <span class="highlight-badge"><i class="bx bx-rocket"></i> Adventure</span>
                                <span class="highlight-badge highlight-badge-spotlight">Most booked</span>
                            </div>
                        </div>
                        <div class="highlight-content">
                            <div class="highlight-eyebrow">High-energy signature stop</div>
                            <h3 class="highlight-title">Seven Falls Zipline</h3>
                            <p class="highlight-summary">Ride above the canyon for the most dramatic waterfall views and one of the most thrilling experiences in Lake Sebu.</p>
                            <div class="highlight-metrics">
                                <span class="highlight-metric"><i class="bx bx-timer"></i> Half-day stop</span>
                                <span class="highlight-metric"><i class="bx bx-cloud-sun"></i> Best in clear weather</span>
                            </div>
                            <div class="highlight-action">
                                <span>Open photo story</span>
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-5 highlight-card"
                     data-tags="nature"
                     data-bs-toggle="modal"
                     data-bs-target="#imageModal"
                     data-title="Lake Seloton Sunrise"
                     data-image="assets/mp_img/sunrise.jpg"
                     data-gallery="assets/mp_img/sunrise.jpg,assets/mp_img/main.jpg"
                     data-description="Witness a breathtaking sunrise at Lake Seloton. As the morning mist lifts, the still, glass-like water reflects the vibrant colors of the sky. The lake is dotted with floating lotus flowers, creating a serene and magical scene."
                     role="button"
                     tabindex="0"
                     aria-label="Open Lake Seloton Sunrise highlight">
                    <article class="highlight-surface">
                        <div class="highlight-visual">
                            <img class="highlight-media" src="assets/mp_img/sunrise.jpg" alt="Lake Seloton Sunrise" loading="lazy" decoding="async">
                            <div class="highlight-badge-row">
                                <span class="highlight-badge"><i class="bx bx-sun"></i> Nature</span>
                                <span class="highlight-badge highlight-badge-spotlight">Sunrise favorite</span>
                            </div>
                        </div>
                        <div class="highlight-content">
                            <div class="highlight-eyebrow">Quiet morning escape</div>
                            <h3 class="highlight-title">Lake Seloton Sunrise</h3>
                            <p class="highlight-summary">Arrive early for still water, lotus blooms, and soft light that turns the lake into Lake Sebu's calmest photo stop.</p>
                            <div class="highlight-metrics">
                                <span class="highlight-metric"><i class="bx bx-alarm"></i> Best before 7 AM</span>
                                <span class="highlight-metric"><i class="bx bx-camera"></i> Great for photography</span>
                            </div>
                            <div class="highlight-action">
                                <span>View sunrise preview</span>
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4 highlight-card"
                     data-tags="food"
                     data-bs-toggle="modal"
                     data-bs-target="#imageModal"
                     data-title="Floating Restaurants"
                     data-image="assets/mp_img/floating.jpg"
                     data-gallery="assets/mp_img/floating.jpg,assets/mp_img/main.jpg"
                     data-description="Indulge in a unique dining experience at Lake Sebu's famous floating restaurants. Enjoy delicious local cuisine, especially the fresh grilled tilapia, while your table gently drifts on the water. It's a culinary and scenic delight."
                     role="button"
                     tabindex="0"
                     aria-label="Open Floating Restaurants highlight">
                    <article class="highlight-surface">
                        <div class="highlight-visual">
                            <img class="highlight-media" src="assets/mp_img/floating.jpg" alt="Floating Restaurants" loading="lazy" decoding="async">
                            <div class="highlight-badge-row">
                                <span class="highlight-badge"><i class="bx bx-restaurant"></i> Dining</span>
                                <span class="highlight-badge highlight-badge-spotlight">Lunch stop</span>
                            </div>
                        </div>
                        <div class="highlight-content">
                            <div class="highlight-eyebrow">Relaxed lakeside meal</div>
                            <h3 class="highlight-title">Floating Restaurants</h3>
                            <p class="highlight-summary">Fresh tilapia, cool air, and water views make this the easiest way to slow down after a morning of sightseeing.</p>
                            <div class="highlight-metrics">
                                <span class="highlight-metric"><i class="bx bx-group"></i> Good for families</span>
                                <span class="highlight-metric"><i class="bx bx-map-pin"></i> Easy add-on stop</span>
                            </div>
                            <div class="highlight-action">
                                <span>See dining preview</span>
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-lg-8 highlight-card highlight-card-wide"
                     data-tags="nature adventure"
                     data-bs-toggle="modal"
                     data-bs-target="#imageModal"
                     data-title="Kayaking at Lake Lahit"
                     data-image="assets/mp_img/kayak.jpg"
                     data-gallery="assets/mp_img/kayak.jpg,assets/mp_img/sunrise.jpg"
                     data-description="Paddle through the serene waters of Lake Lahit. This is a perfect activity to get up close with nature. Glide past colorful water lilies and lush vegetation while enjoying the peaceful and quiet surroundings."
                     role="button"
                     tabindex="0"
                     aria-label="Open Kayaking at Lake Lahit highlight">
                    <article class="highlight-surface">
                        <div class="highlight-visual">
                            <img class="highlight-media" src="assets/mp_img/kayak.jpg" alt="Kayaking at Lake Lahit" loading="lazy" decoding="async">
                            <div class="highlight-badge-row">
                                <span class="highlight-badge"><i class="bx bx-water"></i> Nature and soft adventure</span>
                                <span class="highlight-badge highlight-badge-spotlight">Slow travel</span>
                            </div>
                        </div>
                        <div class="highlight-content">
                            <div class="highlight-eyebrow">Gentle water experience</div>
                            <h3 class="highlight-title">Kayaking at Lake Lahit</h3>
                            <p class="highlight-summary">Paddle through quiet water and green edges for a slower, more intimate view of Lake Sebu's morning landscape.</p>
                            <div class="highlight-metrics">
                                <span class="highlight-metric"><i class="bx bx-time-five"></i> Best before noon</span>
                                <span class="highlight-metric"><i class="bx bx-heart"></i> Great for couples and small groups</span>
                            </div>
                            <div class="highlight-action">
                                <span>Open lake route</span>
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

<section id="experiences" class="container py-5">
        <div class="section-shell section-shell-soft">
            <div class="section-header">
                <div class="section-copy">
                    <h2 class="section-title display-6 mb-2">Choose the Kind of Lake Sebu Day You Want</h2>
                    <p class="section-sub mb-0">Build your visit around high views, quiet water, living culture, and relaxed food stops.</p>
                </div>
                <p class="section-note">The most balanced itinerary usually combines one active stop, one cultural visit, and one calm lakeside break.</p>
            </div>
            <div class="row g-4 experience-grid">
                <div class="col-md-6 col-lg-3">
                    <article class="travel-card experience-card">
                        <div class="travel-icon"><i class="bx bxs-hot"></i></div>
                        <span class="travel-chip mt-3"><i class="bx bx-run"></i> For thrill seekers</span>
                        <h3>Zipline Over Seven Falls</h3>
                        <p>See the canyon from above and anchor your day around Lake Sebu's biggest adrenaline stop.</p>
                        <div class="travel-pills">
                            <span class="travel-pill"><i class="bx bx-time"></i> 1 to 2 hours</span>
                            <span class="travel-pill"><i class="bx bx-cloud-sun"></i> Clear weather best</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="travel-card experience-card">
                        <div class="travel-icon"><i class="bx bxs-ship"></i></div>
                        <span class="travel-chip mt-3"><i class="bx bx-sun"></i> For sunrise lovers</span>
                        <h3>Lotus Sunrise Cruise</h3>
                        <p>Start early for calm water, soft light, and the most peaceful views across the lake.</p>
                        <div class="travel-pills">
                            <span class="travel-pill"><i class="bx bx-alarm"></i> Best before 7 AM</span>
                            <span class="travel-pill"><i class="bx bx-camera"></i> Photo favorite</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="travel-card experience-card">
                        <div class="travel-icon"><i class="bx bxs-spa"></i></div>
                        <span class="travel-chip mt-3"><i class="bx bx-heart"></i> For cultural immersion</span>
                        <h3>T'boli Weaving Workshop</h3>
                        <p>Meet local artisans, learn the story of t'nalak, and experience Lake Sebu beyond the scenery.</p>
                        <div class="travel-pills">
                            <span class="travel-pill"><i class="bx bx-book-open"></i> Story-led visit</span>
                            <span class="travel-pill"><i class="bx bx-store"></i> Community support</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="travel-card experience-card">
                        <div class="travel-icon"><i class="bx bxs-tree-alt"></i></div>
                        <span class="travel-chip mt-3"><i class="bx bx-walk"></i> For soft adventure</span>
                        <h3>Waterfall Trek</h3>
                        <p>Link viewpoints, short trails, and fresh-air stops into an easy half-day outdoor circuit.</p>
                        <div class="travel-pills">
                            <span class="travel-pill"><i class="bx bx-map"></i> Multiple stops</span>
                            <span class="travel-pill"><i class="bx bx-group"></i> Great for groups</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="culture" class="container py-5">
        <div class="section-shell section-shell-soft">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <h2 class="section-title display-6 mb-2">T'boli Culture and Dreamweaving</h2>
                    <p class="section-sub mb-4">Lake Sebu is not only a scenic stop. It is also home to stories, patterns, and traditions that shape the identity of the place.</p>
                    <div class="info-stack">
                        <div class="travel-card">
                            <span class="travel-chip"><i class="bx bx-map-pin"></i> Where to begin</span>
                            <h3>Start at the Lang Dulay Weaving Center</h3>
                            <p>Learn why dream-inspired t'nalak weaving matters and why respectful visits help sustain local knowledge.</p>
                        </div>
                        <div class="travel-card">
                            <span class="travel-chip"><i class="bx bx-palette"></i> What to notice</span>
                            <h3>Look for story-rich patterns</h3>
                            <p>Common motifs include forms inspired by crabs, butterflies, and the wider universe, each carrying its own meaning.</p>
                        </div>
                        <div class="travel-card">
                            <span class="travel-chip"><i class="bx bx-heart-circle"></i> Best visitor mindset</span>
                            <h3>Support with care</h3>
                            <p>Ask before photographing people, buy directly from community makers, and choose guided storytelling when available.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="row g-3 mosaic">
                        <div class="col-6">
                            <div class="mosaic-card" style="height: 16rem;">
                                <img src="assets/mp_img/culture3.jpg" alt="T'nalak textiles" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mosaic-card" style="height: 16rem;">
                                <img src="assets/mp_img/culture2.jpg" alt="Lake Sebu cultural landscape" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mosaic-card" style="height: 18rem;">
                                <img src="assets/mp_img/culture1.jpg" alt="Traditional weaving and storytelling" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                    <div class="culture-side-note mt-3">
                        <strong>Visitor note</strong>
                        Cultural stops feel most meaningful when you leave enough time to listen, ask questions, and avoid rushing through the experience.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map" class="container py-5">
        <div class="section-shell">
            <div class="section-header">
                <div class="section-copy">
                    <h2 class="section-title display-6 mb-2">Plan the Route Before You Arrive</h2>
                    <p class="section-sub mb-0">Use the live map for directions, then scan the route notes so you know what to expect on arrival.</p>
                </div>
                <p class="section-note">Signal, weather, and transport availability can change by area, so it helps to confirm your final transfer before departure day.</p>
            </div>
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <div class="planner-map-card">
                        <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
                            <iframe src="https://www.google.com/maps?q=Lake%20Sebu&output=embed" loading="lazy" allowfullscreen title="Lake Sebu Map"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="info-stack h-100">
                        <div class="route-card d-flex gap-3">
                            <div class="route-icon"><i class="bx bx-car"></i></div>
                            <div>
                                <h4>Main arrival pattern</h4>
                                <p>Most visitors arrive via General Santos City, then continue by land through Surallah toward Lake Sebu.</p>
                            </div>
                        </div>
                        <div class="route-card d-flex gap-3">
                            <div class="route-icon"><i class="bx bx-time-five"></i></div>
                            <div>
                                <h4>Travel pacing</h4>
                                <p>Give yourself extra time for transfers, rest stops, and weather changes, especially if you are chasing sunrise activities.</p>
                            </div>
                        </div>
                        <div class="route-card d-flex gap-3">
                            <div class="route-icon"><i class="bx bx-navigation"></i></div>
                            <div>
                                <h4>Local movement</h4>
                                <p>Expect tricycles, hired rides, habal-habal, and boats to cover the last stretch between attractions.</p>
                            </div>
                        </div>
                        <a href="https://www.google.com/maps/place/Lake+Sebu" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary route-link">
                            <i class="bx bx-map-pin me-2"></i>Open Full Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tours" class="container py-5">
        <div class="section-shell section-shell-soft">
            <div class="tour-toolbar mb-4">
                <div class="section-copy">
                    <h2 class="section-title display-6 mb-2">Estimate the Cost of Your Day</h2>
                    <p class="section-sub mb-0">These are guide prices for common visitor activities. Use AI for questions, then confirm with accredited operators.</p>
                </div>
                <div class="tour-filter-card">
                    <label for="tourCategory" class="visually-hidden">Filter tour activities</label>
                    <select id="tourCategory" class="form-select" aria-label="Filter tour activities">
                        <option value="all" selected>All tours</option>
                        <option value="adventure">Adventure</option>
                        <option value="water">Water</option>
                        <option value="culture">Culture</option>
                        <option value="family">Family</option>
                    </select>
                </div>
            </div>

            <div class="table-card table-responsive">
                <table class="table table-hover align-middle tour-table">
                    <thead>
                    <tr>
                        <th style="min-width:180px">Activity</th>
                        <th>Inclusions</th>
                        <th class="text-nowrap">Est. Rate</th>
                        <th>Category</th>
                        <th class="text-center">Ask Guide</th>
                    </tr>
                    </thead>
                    <tbody id="tourRows">
                    <tr data-cat="adventure">
                        <td><i class="bx bx-rocket text-primary me-2"></i>Seven Falls Zipline</td>
                        <td class="small">Harness, helmet, shuttle to launch, and photo point access</td>
                        <td class="fw-semibold">PHP 350-550</td>
                        <td><span class="badge bg-primary-subtle text-primary">Adventure</span></td>
                        <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Seven Falls Zipline"><i class="bx bx-message-square-dots me-1"></i>Ask Guide</button></td>
                    </tr>
                    <tr data-cat="water">
                        <td><i class="bx bx-water text-primary me-2"></i>Lotus Sunrise Cruise</td>
                        <td class="small">Private boat, life vests, and a local guide for the route</td>
                        <td class="fw-semibold">PHP 600-1,200 per boat</td>
                        <td><span class="badge bg-info-subtle text-info">Water</span></td>
                        <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Lotus Sunrise Cruise"><i class="bx bx-message-square-dots me-1"></i>Ask Guide</button></td>
                    </tr>
                    <tr data-cat="culture">
                        <td><i class="bx bx-store-alt text-primary me-2"></i>T'boli Weaving and Culture</td>
                        <td class="small">Weaving session, storytelling, and community support fee</td>
                        <td class="fw-semibold">PHP 150-300 per guest</td>
                        <td><span class="badge bg-warning-subtle text-warning">Culture</span></td>
                        <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="T'boli Weaving and Culture"><i class="bx bx-message-square-dots me-1"></i>Ask Guide</button></td>
                    </tr>
                    <tr data-cat="family">
                        <td><i class="bx bx-walk text-primary me-2"></i>Waterfall Trek</td>
                        <td class="small">Guide, short hikes, and scenic stops across the waterfall circuit</td>
                        <td class="fw-semibold">PHP 500-1,000 per group</td>
                        <td><span class="badge bg-success-subtle text-success">Family</span></td>
                        <td class="text-center"><button class="btn btn-sm btn-primary inquire-tour" data-tour="Waterfall Trek"><i class="bx bx-message-square-dots me-1"></i>Ask Guide</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p class="small text-muted mt-3 mb-0">Rates may shift by season, operator, group size, and bundled inclusions. Confirm the latest fee before you depart or pre-book.</p>
        </div>
    </section>

    <section id="stays" class="container py-5">
        <div class="section-shell">
            <div class="section-header">
                <div class="section-copy">
                    <h2 class="section-title display-6 mb-2">Choose Where to Stay and Where to Slow Down</h2>
                    <p class="section-sub mb-0">Use these stay and dining ideas to shape either a relaxed overnight visit or a scenic food stop between activities.</p>
                </div>
                <p class="section-note">If you are arriving late or leaving early, staying near the lake makes sunrise plans much easier.</p>
            </div>

            <ul class="nav nav-pills pill-tabs mb-4" role="tablist">
                <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tabStays" type="button" role="tab"><i class="bx bxs-hotel me-1"></i> Stay Options</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tabEats" type="button" role="tab"><i class="bx bx-restaurant me-1"></i> Food Finds</button></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="tabStays" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="card stay-card h-100">
                                <img src="assets/mp_img/lakeside1.jpg" class="card-img-top" alt="Lakeside resort stay" loading="lazy" decoding="async">
                                <div class="card-body">
                                    <span class="travel-chip"><i class="bx bx-water"></i> Best for views</span>
                                    <h3 class="h5 mt-3 mb-2">Lakeside Resort Stay</h3>
                                    <p class="small text-muted mb-3">Rooms, family cottages, and an easy lakefront base for sunrise starts.</p>
                                    <a href="https://www.google.com/search?q=lake+sebu+resort" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">Explore Nearby</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card stay-card h-100">
                                <img src="assets/mp_img/ecolodge.jpg" class="card-img-top" alt="Eco lodge escape" loading="lazy" decoding="async">
                                <div class="card-body">
                                    <span class="travel-chip"><i class="bx bx-leaf"></i> Quiet and green</span>
                                    <h3 class="h5 mt-3 mb-2">Eco Lodge Escape</h3>
                                    <p class="small text-muted mb-3">Garden huts, simple breakfast, and a calm overnight setting away from the busiest stops.</p>
                                    <a href="https://www.google.com/search?q=lake+sebu+hotel" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">Explore Nearby</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card stay-card h-100">
                                <img src="assets/mp_img/homestay.jpg" class="card-img-top" alt="Community homestay" loading="lazy" decoding="async">
                                <div class="card-body">
                                    <span class="travel-chip"><i class="bx bx-home-heart"></i> Local connection</span>
                                    <h3 class="h5 mt-3 mb-2">Community Homestay</h3>
                                    <p class="small text-muted mb-3">Shared meals, local hosting, and a stronger sense of place for cultural travelers.</p>
                                    <a href="https://www.google.com/search?q=lake+sebu+homestay" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">Explore Nearby</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tabEats" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="card stay-card h-100">
                                <img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Floating tilapia dining" loading="lazy" decoding="async">
                                <div class="card-body">
                                    <span class="travel-chip"><i class="bx bx-restaurant"></i> Lake meal</span>
                                    <h3 class="h5 mt-3 mb-2">Floating Tilapia Dining</h3>
                                    <p class="small text-muted mb-3">Fresh tilapia, open views, and an easy lunch stop after the falls or zipline circuit.</p>
                                    <a href="https://www.google.com/search?q=floating+restaurant+lake+sebu" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">Explore Nearby</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card stay-card h-100">
                                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Native coffee stop" loading="lazy" decoding="async">
                                <div class="card-body">
                                    <span class="travel-chip"><i class="bx bx-coffee"></i> Slow morning</span>
                                    <h3 class="h5 mt-3 mb-2">Native Coffee Stop</h3>
                                    <p class="small text-muted mb-3">Good for local coffee, rice cakes, and a softer start before heading to the lake.</p>
                                    <a href="https://www.google.com/search?q=cafe+lake+sebu" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">Explore Nearby</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card stay-card h-100">
                                <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1600&auto=format&fit=crop" class="card-img-top" alt="Family grill house" loading="lazy" decoding="async">
                                <div class="card-body">
                                    <span class="travel-chip"><i class="bx bx-dish"></i> Group-friendly</span>
                                    <h3 class="h5 mt-3 mb-2">Family Grill House</h3>
                                    <p class="small text-muted mb-3">A practical stop for grilled dishes, shared platters, and families ending a full day out.</p>
                                    <a href="https://www.google.com/search?q=restaurant+lake+sebu" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">Explore Nearby</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="itineraries" class="container py-5">
        <div class="section-shell">
            <div class="section-header">
                <div class="section-copy">
                    <h2 class="section-title display-6 mb-2">Start With a Route, Then Personalize It</h2>
                    <p class="section-sub mb-0">These itinerary ideas are made to help visitors move smoothly between sunrise, adventure, food, and culture.</p>
                </div>
                <p class="section-note">Each one can be sent straight into the planner so you can save notes, dates, and must-do activities.</p>
            </div>
            <div class="accordion itinerary-accordion" id="itinAcc">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="it1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ic1">Day Trip (1D)</button></h2>
                    <div id="ic1" class="accordion-collapse collapse show" data-bs-parent="#itinAcc"><div class="accordion-body small">
                        <ol class="mb-3">
                            <li>05:30 - Lotus Sunrise Cruise</li>
                            <li>08:00 - Breakfast by the lake</li>
                            <li>10:00 - Seven Falls Zipline and viewpoints</li>
                            <li>12:30 - Tilapia lunch on the lake</li>
                            <li>14:30 - T'boli weaving center</li>
                            <li>16:00 - Optional Lake Lahit kayak</li>
                        </ol>
                        <button class="btn btn-outline-primary btn-sm add-to-planner" data-size="Couple" data-interests="nature,adventure,food">Use This Plan</button>
                    </div></div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="it2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ic2">2D1N Getaway</button></h2>
                    <div id="ic2" class="accordion-collapse collapse" data-bs-parent="#itinAcc"><div class="accordion-body small">
                        <ol class="mb-3">
                            <li>Day 1: Arrival, lakeside lunch, waterfall trek, and sunset deck</li>
                            <li>Day 2: Sunrise cruise, weaving workshop, and souvenir stop</li>
                        </ol>
                        <button class="btn btn-outline-primary btn-sm add-to-planner" data-size="Family (3-5)" data-interests="nature,culture,food">Use This Plan</button>
                    </div></div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="it3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ic3">3D2N Adventure and Culture</button></h2>
                    <div id="ic3" class="accordion-collapse collapse" data-bs-parent="#itinAcc"><div class="accordion-body small">
                        <ol class="mb-3">
                            <li>Day 1: Zipline, Seven Falls, and Lake Lahit kayak</li>
                            <li>Day 2: Sunrise cruise, T'boli immersion, and farm-to-table dinner</li>
                            <li>Day 3: Free morning, coffee by the lake, and departure</li>
                        </ol>
                        <button class="btn btn-outline-primary btn-sm add-to-planner" data-size="Group (6+)" data-interests="adventure,culture,food">Use This Plan</button>
                    </div></div>
                </div>
            </div>
        </div>
    </section>

    <section id="essentials" class="container py-5">
        <div class="section-shell">
            <div class="section-header">
                <div class="section-copy">
                    <h2 class="section-title display-6 mb-2">Travel Details Worth Checking Before Departure</h2>
                    <p class="section-sub mb-0">A little prep goes a long way in Lake Sebu, especially when your day includes transport changes and sunrise timing.</p>
                </div>
                <p class="section-note">This section is meant to reduce surprises on the road, not replace local updates from verified tourism channels.</p>
            </div>
            <div class="row g-4 essentials-grid">
                <div class="col-md-6 col-lg-4">
                    <div class="info-card">
                        <h3><i class="bx bx-credit-card me-1"></i>Cash, signal, and basics</h3>
                        <ul class="small">
                            <li>Bring Philippine Peso and prepare cash before reaching smaller areas.</li>
                            <li>Signal is usually stronger in town centers than at remote viewpoints.</li>
                            <li>Bring cash for smaller eateries, boat rides, and community purchases.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="info-card">
                        <h3><i class="bx bx-navigation me-1"></i>Getting there</h3>
                        <ul class="small">
                            <li>Common gateways are General Santos (GES) and Davao (DVO).</li>
                            <li>Expect around 3 to 5 hours of land travel depending on your route and transfers.</li>
                            <li>Local movement often involves tricycles, habal-habal, hired rides, or chartered boats.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="info-card">
                        <h3><i class="bx bx-first-aid me-1"></i>Safety and local support</h3>
                        <ul class="small">
                            <li>Emergency hotline in the Philippines: <strong>911</strong>.</li>
                            <li>Choose accredited guides and confirm rates before leaving the jump-off point.</li>
                            <li>Check official tourism or municipal pages for weather, closures, and event-day crowding.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="responsible" class="container py-5">
        <div class="section-shell section-shell-soft pledge-card">
            <div class="row g-4 responsible-grid align-items-center">
                <div class="col-lg-7">
                    <h2 class="section-title display-6 mb-2">Responsible and Inclusive Tourism</h2>
                    <p class="section-sub mb-4">A better visit protects the lakes, respects the culture, and supports the communities that make Lake Sebu meaningful.</p>
                    <div class="info-stack">
                        <div class="travel-card">
                            <span class="travel-chip"><i class="bx bx-camera-off"></i> Respect first</span>
                            <p>Ask permission before taking close-up photos of people, homes, weaving spaces, or sacred areas.</p>
                        </div>
                        <div class="travel-card">
                            <span class="travel-chip"><i class="bx bx-recycle"></i> Leave less trace</span>
                            <p>Pack out your trash, avoid single-use plastics when possible, and keep the lakeside clean for the next group.</p>
                        </div>
                        <div class="travel-card">
                            <span class="travel-chip"><i class="bx bx-store-alt"></i> Support local value</span>
                            <p>Choose accredited guides and buy from community-based makers so more of your visit benefits local families.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button id="pledgeBtn" class="btn btn-success pledge-button"><i class="bx bx-leaf me-1"></i> I Pledge to Travel Kindly</button>
                        <div id="pledgeStatus" class="small text-muted mt-2 planner-status" aria-live="polite"></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="info-card">
                        <h3><i class="bx bx-calendar-event me-1"></i>Visitor Notes</h3>
                        <ul class="small mb-0">
                            <li>Early morning is best for lotus views, boat rides, and cooler temperatures.</li>
                            <li>Weekends and holidays can feel busier around the most popular attractions.</li>
                            <li>A light rain layer is useful even when conditions look clear at the start of the day.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="plan" class="container py-5">
        <div class="section-shell">
            <div class="section-header">
                <div class="section-copy">
                    <h2 id="planSectionTitle" class="section-title display-6 mb-2">Plan Your Trip</h2>
                    <p id="planSectionSubtitle" class="section-sub mb-0">Save your dates, route, and must-do experiences</p>
                </div>
                <div class="planner-lang-card">
                    <label for="langSelect" class="visually-hidden">Planner language</label>
                    <select id="langSelect" class="form-select" aria-label="Planner language">
                        <option value="en" selected>English</option>
                        <option value="fil">Filipino</option>
                    </select>
                </div>
            </div>

            <div class="row g-4 mt-1 plan-grid">
                <div class="col-md-6 col-lg-4">
                    <div class="planner-map-card">
                        <div id="mapDirectionsTitle" class="fw-semibold mb-3"><i class="bx bx-map-pin me-1"></i> Map & Directions</div>
                        <div class="ratio ratio-1x1 mb-3 rounded-4 overflow-hidden" style="min-height:220px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.92523274291!2d124.69335882875107!3d6.216335193982542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f8664405367809%3A0x6a0a76a5913e1f0e!2sLake%20Sebu%2C%20South%20Cotabato!5e0!3m2!1sen!2sph!4v1714574972322!5m2!1sen!2sph" loading="lazy"></iframe>
                        </div>
                        <p class="small text-muted mb-3">Use this quick map as your planner anchor, then open the full route once your trip details are set.</p>
                        <a href="https://www.google.com/maps/place/Lake+Sebu" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm w-100">Open in Maps</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="planner-form-card">
                        <div id="tripPlannerTitle" class="fw-semibold mb-3"><i class="bx bxs-edit-alt me-1"></i> Trip Planner</div>
                        <form id="tripForm" class="row g-3">
                            <div class="col-md-6">
                                <label id="tripNameLabel" for="tripName" class="form-label">Trip Name</label>
                                <input type="text" class="form-control" id="tripName" value="Lake Sebu Adventure">
                            </div>
                            <div class="col-md-6">
                                <label id="travelDatesLabel" for="travelDates" class="form-label">Travel Dates</label>
                                <input type="text" class="form-control" id="travelDates" placeholder="e.g., May 10-12, 2026">
                            </div>
                            <div class="col-12">
                                <label id="activitiesLabel" for="activities" class="form-label">Activities & Highlights</label>
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
                                <label id="notesLabel" for="notes" class="form-label">Personal Notes</label>
                                <textarea class="form-control" id="notes" rows="4" placeholder="e.g., Must-try: tilapia! Book guide for the trek."></textarea>
                            </div>
                            <div class="col-12">
                                <div class="planner-actions">
                                    <button id="savePlanBtn" type="submit" class="btn btn-primary"><i class="bx bxs-save me-1"></i> Save on This Device</button>
                                    <button id="clearPlanBtn" type="reset" class="btn btn-outline-secondary">Clear</button>
                                </div>
                                <div id="tripStatus" class="small text-muted mt-2 planner-status" aria-live="polite"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="container py-5">
        <div class="section-shell">
            <div class="section-header justify-content-center text-center">
                <div class="section-copy mx-auto">
                    <h2 class="section-title display-6 mb-2">Questions Visitors Usually Ask First</h2>
                    <p class="section-sub mb-0">Quick answers for timing, safety, food, and arrival planning before you commit to a route.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="accordion faq-accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q1">How do I get to Lake Sebu?</button></h2>
                            <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                                Most visitors fly to General Santos City, continue to Surallah by bus or van, then transfer toward Lake Sebu for the final leg.
                            </div></div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">What is the best time to visit?</button></h2>
                            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                                Clear mornings are especially rewarding for sunrise and lake views, so many visitors prefer the drier months and early-day schedules.
                            </div></div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">Is Lake Sebu safe for tourists?</button></h2>
                            <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                                Lake Sebu is generally visitor-friendly, especially when you stay aware of your route, follow guide briefings, and book with accredited operators.
                            </div></div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">What food should I try?</button></h2>
                            <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">
                                Start with tilapia dishes on the lake, then look for simple local breakfasts, grilled meals, and coffee stops between attractions.
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="py-5">
        <div class="container">
            <div class="footer-shell text-center">
                <img src="assets/img/logo/logo.png" alt="Lake Sebu Tourism" width="56" height="56" class="mb-3">
                <p class="h4 fw-bold mb-2">Lake Sebu Visitor Guide</p>
                <small class="d-block footer-meta mb-3">South Cotabato, Philippines</small>
                <p class="small footer-meta mb-4">Plan your visit, save your route, and use the highlights above to shape a tourism experience that feels scenic, thoughtful, and easy to follow.</p>
                <div class="d-flex justify-content-center gap-2 flex-wrap mb-4">
                    <a href="#plan" class="btn btn-light btn-sm">Plan Your Trip</a>
                    <a href="#highlights" class="btn btn-outline-light btn-sm">See Highlights</a>
                    <a href="https://www.google.com/maps/place/Lake+Sebu" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light btn-sm">Open in Maps</a>
                </div>
                <p class="small footer-meta mb-0">Copyright 2026 Lake Sebu Tourism. All rights reserved.</p>
            </div>
        </div>
    </footer>



<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-md-8 bg-dark">
                        <div class="position-relative">
                            <img id="mainModalImage" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" class="modal-hero-image" alt="">
                            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div id="modalThumbnails" class="d-flex p-3 bg-light justify-content-center flex-wrap gap-2"></div>
                    </div>

                    <div class="col-md-4">
                        <div class="d-flex flex-column h-100 p-4">
                            <div>
                                <h5 id="modalTitle" class="modal-title section-title h4 mb-2"></h5>
                                <p id="modalDescription" class="mb-0"></p>
                            </div>
                            <div class="mt-auto pt-3">
                                <a href="#plan" class="btn btn-primary w-100" data-bs-dismiss="modal">
                                    <i class="bx bx-calendar-star me-1"></i> Add to My Plan
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
const plannerCopy = {
    en: {
        planSectionTitle: 'Plan Your Trip',
        planSectionSubtitle: 'Save your dates, route, and must-do experiences',
        mapDirectionsTitle: 'Map & Directions',
        tripPlannerTitle: 'Trip Planner',
        tripNameLabel: 'Trip Name',
        travelDatesLabel: 'Travel Dates',
        activitiesLabel: 'Activities & Highlights',
        notesLabel: 'Personal Notes',
        savePlanLabel: 'Save on This Device',
        clearPlanLabel: 'Clear',
        travelDatesPlaceholder: 'e.g., May 10-12, 2026',
        notesPlaceholder: 'e.g., Must-try: tilapia! Book guide for the trek.',
        selectActivitiesPlaceholder: 'Choose experiences',
        addedToPlanner: 'This itinerary was added to your planner. Review the details, then save.',
        planSaved: 'Trip plan saved on this device.',
        planLoaded: 'Saved trip plan restored from this device.',
        planCleared: 'Saved trip plan cleared from this device.'
    },
    fil: {
        planSectionTitle: 'Planuhin ang Iyong Biyahe',
        planSectionSubtitle: 'I-save ang mga petsa, ruta, at mahahalagang karanasan',
        mapDirectionsTitle: 'Mapa at Direksyon',
        tripPlannerTitle: 'Trip Planner',
        tripNameLabel: 'Pangalan ng Biyahe',
        travelDatesLabel: 'Mga Petsa ng Biyahe',
        activitiesLabel: 'Mga Aktibidad at Highlight',
        notesLabel: 'Personal na Tala',
        savePlanLabel: 'I-save sa Device na Ito',
        clearPlanLabel: 'Linisin',
        travelDatesPlaceholder: 'hal. Mayo 10-12, 2026',
        notesPlaceholder: 'hal. Dapat subukan: tilapia! Mag-book ng guide para sa trek.',
        selectActivitiesPlaceholder: 'Pumili ng mga karanasan',
        addedToPlanner: 'Nadagdag ang itinerary sa planner mo. Suriin ang mga detalye at saka i-save.',
        planSaved: 'Naka-save ang trip plan sa device na ito.',
        planLoaded: 'Naibalik ang naka-save na trip plan mula sa device na ito.',
        planCleared: 'Na-clear ang naka-save na trip plan sa device na ito.'
    }
};

const imageModal = document.getElementById('imageModal');
if (imageModal) {
    imageModal.addEventListener('show.bs.modal', event => {
        const rawTrigger = event.relatedTarget;
        const trigger = rawTrigger && rawTrigger.closest
            ? (rawTrigger.closest('[data-bs-target="#imageModal"]') || rawTrigger)
            : rawTrigger;
        if (!trigger) return;

        const title = trigger.getAttribute('data-title') || '';
        const description = trigger.getAttribute('data-description') || '';
        const mainImage = trigger.getAttribute('data-image') || '';
        const galleryImages = (trigger.getAttribute('data-gallery') || mainImage)
            .split(',')
            .map(src => src.trim())
            .filter(Boolean);
        const thumbnails = galleryImages.length ? galleryImages : [mainImage];

        const modalTitle = imageModal.querySelector('#modalTitle');
        const modalDescription = imageModal.querySelector('#modalDescription');
        const mainModalImage = imageModal.querySelector('#mainModalImage');
        const modalThumbnailsContainer = imageModal.querySelector('#modalThumbnails');

        modalTitle.textContent = title;
        modalDescription.textContent = description;
        mainModalImage.src = mainImage;
        mainModalImage.alt = title;

        modalThumbnailsContainer.innerHTML = '';
        thumbnails.forEach(src => {
            const img = document.createElement('img');
            img.src = src;
            img.alt = title;
            img.loading = 'lazy';
            img.decoding = 'async';
            img.className = 'img-thumbnail';
            img.style.cursor = 'pointer';
            img.style.width = '80px';
            img.style.height = '60px';
            img.style.objectFit = 'cover';
            img.addEventListener('click', () => {
                mainModalImage.src = src;
            });
            modalThumbnailsContainer.appendChild(img);
        });
    });
}

$(function() {
    const plannerStorageKey = 'lake_sebu_trip_plan_v1';
    const languageStorageKey = 'lake_sebu_plan_lang_v1';
    const pledgeStorageKey = 'lake_sebu_pledge_v1';
    const offcanvasElement = document.getElementById('offcanvasNav');
    const offcanvasInstance = offcanvasElement ? bootstrap.Offcanvas.getOrCreateInstance(offcanvasElement) : null;

    function setTripStatus(message, tone) {
        const $status = $('#tripStatus');
        $status.removeClass('text-muted text-success text-primary');
        $status.addClass(tone || 'text-muted');
        $status.text(message || '');
    }

    function setPledgeState(pledged, message) {
        const $button = $('#pledgeBtn');
        const $status = $('#pledgeStatus');

        if (pledged) {
            $button
                .removeClass('btn-success')
                .addClass('btn-outline-success')
                .prop('disabled', true)
                .html('<i class="bx bx-check-circle me-1"></i> Travel Kindness Pledged');
            $status.text(message || 'Thanks for supporting responsible tourism.');
        } else {
            $button
                .removeClass('btn-outline-success')
                .addClass('btn-success')
                .prop('disabled', false)
                .html('<i class="bx bx-leaf me-1"></i> I Pledge to Travel Kindly');
            $status.text(message || '');
        }
    }

    function applyPlannerLanguage(lang) {
        const copy = plannerCopy[lang] || plannerCopy.en;

        $('#planSectionTitle').text(copy.planSectionTitle);
        $('#planSectionSubtitle').text(copy.planSectionSubtitle);
        $('#mapDirectionsTitle').html('<i class="bx bx-map-pin me-1"></i> ' + copy.mapDirectionsTitle);
        $('#tripPlannerTitle').html('<i class="bx bxs-edit-alt me-1"></i> ' + copy.tripPlannerTitle);
        $('#tripNameLabel').text(copy.tripNameLabel);
        $('#travelDatesLabel').text(copy.travelDatesLabel);
        $('#activitiesLabel').text(copy.activitiesLabel);
        $('#notesLabel').text(copy.notesLabel);
        $('#savePlanBtn').html('<i class="bx bxs-save me-1"></i> ' + copy.savePlanLabel);
        $('#clearPlanBtn').text(copy.clearPlanLabel);
        $('#travelDates').attr('placeholder', copy.travelDatesPlaceholder);
        $('#notes').attr('placeholder', copy.notesPlaceholder);
        $('#activities').data('placeholder', copy.selectActivitiesPlaceholder);

        if ($('#activities').hasClass('select2-hidden-accessible')) {
            $('#activities').select2('destroy');
        }

        $('#activities').select2({
            theme: 'bootstrap-5',
            width: '100%',
            placeholder: copy.selectActivitiesPlaceholder
        });

        return copy;
    }

    function restoreTripPlan() {
        const raw = localStorage.getItem(plannerStorageKey);
        if (!raw) return;

        try {
            const saved = JSON.parse(raw);
            if (!saved) return;

            $('#tripName').val(saved.tripName || '');
            $('#travelDates').val(saved.travelDates || '');
            $('#activities').val(Array.isArray(saved.activities) ? saved.activities : []).trigger('change');
            $('#notes').val(saved.notes || '');
            setTripStatus((plannerCopy[$('#langSelect').val()] || plannerCopy.en).planLoaded, 'text-success');
        } catch (error) {
            console.error('Unable to restore trip plan:', error);
        }
    }

    $('.select2-multiple').select2({
        theme: 'bootstrap-5',
        width: '100%',
        placeholder: plannerCopy.en.selectActivitiesPlaceholder
    });

    $('a[href^="#"]').not('[href="#"]').on('click', function(e) {
        const targetSelector = $(this).attr('href');
        const $target = $(targetSelector);
        if (!$target.length) return;

        e.preventDefault();
        if ($(this).closest('.offcanvas').length && offcanvasInstance) {
            offcanvasInstance.hide();
        }

        $('html, body').animate({
            scrollTop: $target.offset().top - 70
        }, 800);
    });

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 300) {
            $('#backToTop').fadeIn();
        } else {
            $('#backToTop').fadeOut();
        }
    });

    $('#backToTop').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    function updateHighlightResults() {
        const visibleCount = $('#highlightGrid .highlight-card:visible').length;
        const summary = visibleCount === 1
            ? '1 signature stop showing'
            : `${visibleCount} signature stops showing`;

        $('#highlightResultsValue').text(summary);
    }

    $('#filterHighlight').on('change', function() {
        const selectedTag = $(this).val();
        $('#highlightGrid .highlight-card').each(function() {
            const tags = ($(this).data('tags') || '').toString();
            $(this).toggle(selectedTag === 'all' || tags.includes(selectedTag));
        });
        updateHighlightResults();
    });

    $('.highlight-card[role="button"]').on('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            $(this).trigger('click');
        }
    });

    updateHighlightResults();

    $('#tourCategory').on('change', function() {
        const selectedCat = $(this).val();
        $('#tourRows tr').each(function() {
            const category = $(this).data('cat');
            $(this).toggle(selectedCat === 'all' || category === selectedCat);
        });
    });

    $('.add-to-planner').on('click', function() {
        const itinerarySize = $(this).data('size');
        const itineraryInterests = ($(this).data('interests') || '').split(',').filter(Boolean);

        $('#tripName').val(`Lake Sebu Itinerary for a ${itinerarySize}`);
        $('#activities').val(itineraryInterests).trigger('change');
        setTripStatus((plannerCopy[$('#langSelect').val()] || plannerCopy.en).addedToPlanner, 'text-primary');
    });

    $('#tripForm').on('submit', function(e) {
        e.preventDefault();

        const payload = {
            tripName: $('#tripName').val().trim(),
            travelDates: $('#travelDates').val().trim(),
            activities: $('#activities').val() || [],
            notes: $('#notes').val().trim()
        };

        localStorage.setItem(plannerStorageKey, JSON.stringify(payload));
        setTripStatus((plannerCopy[$('#langSelect').val()] || plannerCopy.en).planSaved, 'text-success');
    });

    $('#tripForm').on('reset', function() {
        window.setTimeout(() => {
            $('#activities').val(null).trigger('change');
            localStorage.removeItem(plannerStorageKey);
            setTripStatus((plannerCopy[$('#langSelect').val()] || plannerCopy.en).planCleared, 'text-muted');
        }, 0);
    });

    const savedLanguage = localStorage.getItem(languageStorageKey) || $('#langSelect').val();
    $('#langSelect').val(savedLanguage);
    applyPlannerLanguage(savedLanguage);

    $('#langSelect').on('change', function() {
        const lang = $(this).val();
        localStorage.setItem(languageStorageKey, lang);
        applyPlannerLanguage(lang);
    });

    const pledged = localStorage.getItem(pledgeStorageKey) === 'true';
    setPledgeState(pledged);

    $('#pledgeBtn').on('click', function() {
        localStorage.setItem(pledgeStorageKey, 'true');
        setPledgeState(true, 'Thanks for supporting responsible tourism.');
    });

    restoreTripPlan();
});
    </script>

<button id="chatbotBtn" type="button" class="btn rounded-circle shadow-lg chatbot-fab" aria-label="Open Lake Sebu travel assistant">
  <span class="chatbot-btn-icon">
    <img src="assets/mp_img/cbot.gif" alt="Lake Sebu travel assistant" class="chatbot-btn-image">
  </span>
</button>

<div class="modal fade" id="chatbotModal" tabindex="-1" aria-labelledby="chatbotModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm modal-fullscreen-sm-down">
    <div class="modal-content shadow rounded-4">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title" id="chatbotModalLabel">
          <img src="assets/img/ls_logo.png" alt="Lake Sebu Assistant" width="28" height="28" class="me-2">
          <span id="chatbotTitleText">Lake Sebu Assistant</span>
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
          <input type="text" id="userInput" class="form-control" placeholder="Ask about routes, rates, or stays..." required>
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-send"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>






<!-- chat proxy -->
<script>
  (() => {

    const chatboxEl = document.getElementById('chatbox');
    const chatFormEl = document.getElementById('chatForm');
    const userInputEl = document.getElementById('userInput');
    const submitButtonEl = chatFormEl?.querySelector('button[type="submit"]');
    const chatbotBtnEl = document.getElementById('chatbotBtn');
    const chatbotModalElement = document.getElementById('chatbotModal');
    const chatbotModalInstance = new bootstrap.Modal(chatbotModalElement);
    const chatbotTitleTextEl = document.getElementById('chatbotTitleText');
    const inquireButtons = document.querySelectorAll('.inquire-tour');
    const chatHistory = [];
    const defaultChatTitle = 'Lake Sebu Assistant';
    const defaultGreeting = "Hello! I'm your virtual guide for Lake Sebu. How can I help you plan your visit?";

    function addMessage(sender, text) {
      const wrap = document.createElement('div');
      wrap.className = `ls-msg ${sender}`;
      const bubble = document.createElement('div');
      bubble.className = 'bubble';
      bubble.textContent = text;
      wrap.appendChild(bubble);
      chatboxEl.appendChild(wrap);
      chatboxEl.scrollTop = chatboxEl.scrollHeight;
      return bubble;
    }

    function resetChat(title, greeting) {
      chatboxEl.innerHTML = '';
      chatHistory.length = 0;
      chatbotTitleTextEl.textContent = title || defaultChatTitle;
      addMessage('bot', greeting || defaultGreeting);
    }

    function setChatPending(isPending) {
      userInputEl.disabled = isPending;
      if (submitButtonEl) {
        submitButtonEl.disabled = isPending;
      }
    }

    async function readProxyResponse(response) {
      try {
        return await response.json();
      } catch (error) {
        return {
          reply: 'The Lake Sebu Assistant returned an unreadable response.',
          detail: error instanceof Error ? error.message : String(error)
        };
      }
    }

    chatFormEl.addEventListener('submit', async (e) => {
      e.preventDefault();
      const userMessage = userInputEl.value.trim();
      if (!userMessage) return;

      addMessage('user', userMessage);
      chatHistory.push({ role: 'user', content: userMessage });
      userInputEl.value = '';

      const typing = document.createElement('div');
      typing.className = 'ls-typing ms-2';
      typing.textContent = 'Lake Sebu assistant is helping...';
      chatboxEl.appendChild(typing);
      chatboxEl.scrollTop = chatboxEl.scrollHeight;
      setChatPending(true);

      try {
        const response = await fetch('api/chat_proxy.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            message: userMessage,
            history: chatHistory.slice(-10)
          })
        });
        const data = await readProxyResponse(response);
        if (!response.ok) {
          console.error('Chat proxy returned an error:', {
            status: response.status,
            providerStatus: data.providerStatus || null,
            detail: data.detail || null
          });
          throw new Error(data.reply || 'Unable to reach the chat service right now.');
        }
        const reply = data.reply || "Sorry, no reply right now.";
        if (typing.isConnected) {
          typing.remove();
        }
        addMessage('bot', reply);
        chatHistory.push({ role: 'assistant', content: reply });
      } catch (err) {
        console.error('Chat proxy error:', err);
        if (typing.isConnected) {
          typing.remove();
        }
        addMessage('bot', err.message || "Sorry, I'm having trouble connecting right now. Please try again later.");
      } finally {
        setChatPending(false);
        userInputEl.focus();
      }
    });

    chatbotModalElement.addEventListener('shown.bs.modal', () => userInputEl.focus());

    inquireButtons.forEach(button => {
      button.addEventListener('click', () => {
        const tourName = button.getAttribute('data-tour') || 'this tour';
        resetChat(`Inquire About ${tourName}`, `Hello! How can I help you with the ${tourName} tour?`);
        chatbotModalInstance.show();
      });
    });

    chatbotBtnEl.addEventListener('click', () => chatbotModalInstance.show());
  })();
</script>






</body>
</html>
