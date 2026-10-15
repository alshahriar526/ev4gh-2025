@extends('front.layout.front-master')
@section('styles')
    <style>
        .fb-wrapper {
            width: 100%;
            background: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Force FB iframe to scale responsively */
        .fb_iframe_widget,
        .fb_iframe_widget span,
        .fb_iframe_widget iframe {
            width: 100% !important;
        }

        .ev4gh-newsletter-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .news-card {
            display: flex;
            flex-direction: column;
            padding: 30px;
            background: rgb(228 2 0 / 3%);
            border-radius: 18px;
            border: 1px solid #eee;
            transition: .3s;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.10);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }



        /* Card Core Style */
        .ev4gh-news-event-card {
            background: var(--color-white);
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Image Hover Zoom */
        .card-image-wrapper {
            position: relative;
            width: 100%;
            height: 240px;
            overflow: hidden;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        /* Floating Category Tag */
        .card-category {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: var(--color-default);
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            z-index: 2;
        }

        /* Card Body */
        .card-content {
            padding: 30px 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-family: var(--text-font);
            font-size: 1.125rem;
            font-weight: 700;
            color: #1a1a1a;
            line-height: 1.2;
            margin-bottom: 25px;
            transition: color 0.3s ease;
        }

        .card-title p {
            text-align: start !important;
        }



        /* Link Style */
        .card-link {
            color: var(--color-support1);
            text-decoration: none;
            font-weight: 800;
            font-size: 14px;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
        }

        .card-link .arrow {
            margin-left: 8px;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        /* Interaction Effects */
        .ev4gh-news-event-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
        }

        .ev4gh-news-event-card:hover img {
            transform: scale(1.15);
        }

        .ev4gh-news-event-card:hover .card-title {
            color: var(--color-default);
        }

        .ev4gh-news-event-card:hover .card-link .arrow {
            transform: translateX(8px);
        }


        /* --- Visual Separator --- */
        .ev4gh-separator {
            text-align: center;
            position: relative;
            border-bottom: 1px solid #dcdcdc;
            margin-bottom: 20px;
        }

        .ev4gh-separator span {
            background: #f4f4f4;
            /* Match section background */
            padding: 0 20px;
            position: relative;
            top: 12px;
            color: #888;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.85rem;
        }

        /* --- Social & Newsletter Row Styles --- */
        .social-widget-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            height: 480px;
            /* Fixed height for symmetry */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
        }

        /* Specific Newsletter Design */
        .ev4gh-newsletter-card {
            background: linear-gradient(135deg, var(--color-support1), #0a4d4e);
            color: white;
            padding: 40px 30px;
            border-radius: 15px;
            height: 480px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .ev4gh-newsletter-card:hover {
            transform: scale(1.02);
        }

        .newsletter-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            padding: 15px;
            margin-bottom: 20px;
        }

        .newsletter-icon img {
            width: 100%;
            filter: brightness(0) invert(1);
        }

        .newsletter-title {
            font-weight: 800;
            margin-bottom: 10px;
        }

        .ev4gh-newsletter-btn {
            background: var(--color-default);
            color: white !important;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 700;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(228, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .ev4gh-newsletter-btn:hover {
            background: white;
            color: var(--color-default) !important;
        }

        /* Twitter/FB Wrappers to fix scrolling */
        .fb-wrapper,
        .twitter-wrapper {
            width: 100%;
            height: 100%;
            overflow-y: auto;
        }

        /* Hide pointer interactions on cloned duplicate slides when they are not active */
        .swiper-slide-duplicate:not(.swiper-slide-active) {
            pointer-events: none !important;
            visibility: hidden;
        }

        /* Ensure active clone or normal slide is interactive */
        .swiper-slide-active,
        .swiper-slide-duplicate-active {
            pointer-events: auto !important;
            visibility: visible !important;
            z-index: 10 !important;
        }

        .swiper-slide-active .slider-btn,
        .swiper-slide-duplicate-active .slider-btn {
            position: relative;
            z-index: 20 !important;
            pointer-events: auto !important;
        }

/* =========================================================
   EV4GH 2026 – Welcome Fellows Banner (clean cream + soft glass)
   Fits inside: --slider-height: calc(100vh - var(--topbar-height) - var(--navbar-height));
   ========================================================= */

.main-slider .ev26-slide {
    --ev26-navy: #0f2847;
    --ev26-blue: #1f7fb0;
    --ev26-red: #a62527;
    --ev26-gold: #d9a441;

    /* Keep clear of slider controls – tweak to match your arrows/dots */
    --ev26-ctrl-bottom: 76px;
    --ev26-ctrl-side: 84px;

    /* One consistent vertical rhythm between header / grid / footer */
    --ev26-section-gap: clamp(14px, 2.6vh, 30px);

    --ev26-cols: 8;
    --ev26-rows: 3;

    height: var(--slider-height, calc(100vh - var(--topbar-height, 0px) - var(--navbar-height, 0px))) !important;
    max-height: var(--slider-height, calc(100vh - var(--topbar-height, 0px) - var(--navbar-height, 0px))) !important;
    position: relative;
    overflow: hidden;
    color: var(--ev26-navy);
    isolation: isolate;
    /* Layered cream "mesh": soft light top-left, warm gold bottom-right, gentle blue tint top-right */
    background:
        radial-gradient(60% 75% at 6% 0%, rgba(255, 255, 255, .75) 0%, rgba(255, 255, 255, 0) 60%),
        radial-gradient(45% 60% at 100% 0%, rgba(59, 164, 215, .16) 0%, rgba(59, 164, 215, 0) 65%),
        radial-gradient(55% 70% at 100% 100%, rgba(217, 164, 65, .45) 0%, rgba(217, 164, 65, 0) 65%),
        radial-gradient(40% 55% at 0% 100%, rgba(166, 37, 39, .10) 0%, rgba(166, 37, 39, 0) 65%),
        linear-gradient(135deg, #f1e3c9 0%, #efd199 55%, #fce4b8 100%) !important;
}

/* subtle dotted texture (fades out toward the edges) */
.ev26-slide::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    pointer-events: none;
    background-image: radial-gradient(rgba(15, 40, 71, .14) 1.2px, transparent 1.4px);
    background-size: 22px 22px;
    -webkit-mask-image: radial-gradient(ellipse at center, #000 35%, rgba(0, 0, 0, .35) 100%);
    mask-image: radial-gradient(ellipse at center, #000 35%, rgba(0, 0, 0, .35) 100%);
}

/* soft concentric rings in the corners for depth */
.ev26-slide::after {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    pointer-events: none;
    background:
        repeating-radial-gradient(circle at 100% 0%, rgba(15, 40, 71, .07) 0 1px, transparent 1px 38px),
        repeating-radial-gradient(circle at 0% 100%, rgba(166, 37, 39, .07) 0 1px, transparent 1px 38px);
    -webkit-mask-image:
        radial-gradient(circle at 100% 0%, #000 0, transparent 38%),
        radial-gradient(circle at 0% 100%, #000 0, transparent 38%);
    mask-image:
        radial-gradient(circle at 100% 0%, #000 0, transparent 38%),
        radial-gradient(circle at 0% 100%, #000 0, transparent 38%);
    -webkit-mask-composite: source-over;
    mask-composite: add;
}

.ev26-inner {
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: var(--ev26-section-gap);
    padding: clamp(10px, 2vh, 22px) var(--ev26-ctrl-side) var(--ev26-ctrl-bottom);
}

/* ---------- Header ---------- */
.ev26-header {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: clamp(14px, 2vw, 28px);
    border-bottom: 1px solid rgba(15, 40, 71, .15);
    padding: 20px;
}


.ev26-logo {
    height: clamp(44px, 9vh, 84px);
    width: auto;
    object-fit: contain;
    background: #fff;
    padding: 6px 10px;
    border-radius: 16px;
    box-shadow: 0 6px 18px rgba(15, 40, 71, .15);
}

.ev26-header > div {
    padding-left: clamp(14px, 2vw, 28px);
    border-left: 3px solid var(--ev26-gold);
}

.ev26-eyebrow {
    display: block;
    font-size: clamp(.6rem, 1.3vh, .75rem);
    letter-spacing: .28em;
    text-transform: uppercase;
    color: var(--ev26-red);
    font-weight: 700;
    margin-bottom: 2px;
}

.ev26-title {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    line-height: 1.1;
    font-size: clamp(1.3rem, 3.8vh, 2.2rem);
    letter-spacing: -.3px;
    color: var(--ev26-navy);
}

/* ---------- Fellows grid ---------- */
.ev26-grid-wrap {
    flex: 1 1 auto;
    min-height: 0;
    container-type: size;
}

.ev26-grid {
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(var(--ev26-cols), minmax(0, 1fr));
    grid-template-rows: repeat(var(--ev26-rows), minmax(0, 1fr));
    gap: clamp(8px, 1.4vh, 14px) clamp(8px, 1vw, 14px);
}

/* Soft glass tile, big round photo */
.ev26-card {
    --avatar: clamp(
        56px, 
        min(
            calc(100cqh / var(--ev26-rows) - 42px), 
            calc(100cqw / var(--ev26-cols) - 20px)
        ), 
        220px
    );
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-width: 0;
    min-height: 0;
    padding: 8px 8px 10px;
    text-align: center;
    /* background: rgba(255, 255, 255, .55); */
    /* border: 1px solid rgba(255, 255, 255, .85); */
    /* border-radius: 20px; */
    /* box-shadow: 0 6px 18px rgba(15, 40, 71, .09), inset 0 1px 0 rgba(255, 255, 255, .9); */
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
}

.ev26-card:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, .85);
    box-shadow: 0 14px 28px rgba(15, 40, 71, .18), inset 0 1px 0 #fff;
}

.ev26-avatar {
    flex: 0 0 auto;
    width: var(--avatar);
    height: var(--avatar);
    border-radius: 50%;
    padding: 3px;
    background: linear-gradient(135deg, var(--color-default), #2e9bd9);
    box-shadow: 0 6px 14px rgba(15, 40, 71, .22);
}

.ev26-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: 50% 25%;
    border-radius: 50%;
    border: 3px solid #fff;
    background: #e2d7c1;
    display: block;
}

.ev26-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3px;
    width: 100%;
    min-width: 0;
    line-height: 1.2;
}

.ev26-name {
    font-size: clamp(.7rem, 1.7vh, .8rem);
    font-weight: 500;
    color: var(--ev26-navy);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.ev26-country {
    max-width: 100%;
    padding: 1px 8px;
    border-radius: 999px;
    background: rgba(31, 127, 176, .12);
    font-size: clamp(.56rem, 1.3vh, .7rem);
    font-weight: 700;
    color: var(--color-default);
    text-transform: uppercase;
    letter-spacing: .08em;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* ---------- Footer ---------- */
.ev26-footer {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
        justify-content: flex-end;
    gap: clamp(14px, 2vw, 32px);
    padding-top: var(--ev26-section-gap);
    border-top: 1px solid rgba(15, 40, 71, .15);
}

.ev26-partner {
    height: clamp(26px, 5vh, 42px);
    max-width: 170px;
    object-fit: contain;
    /* background: #fff; */
    padding: 4px 12px;
    border-radius: 10px;
    /* box-shadow: 0 3px 10px rgba(15, 40, 71, .12); */
}

/* ---------- Responsive ---------- */
@media (max-width: 1100px) {
    .main-slider .ev26-slide { --ev26-cols: 6; --ev26-rows: 4; --ev26-ctrl-side: 64px; }
}

@media (max-width: 820px) {
    .main-slider .ev26-slide { --ev26-cols: 4; --ev26-rows: 6; --ev26-ctrl-side: 40px; }
}

@media (max-width: 640px) {
    .main-slider .ev26-slide { --ev26-cols: 3; --ev26-ctrl-side: 14px; --ev26-ctrl-bottom: 56px; }
    .ev26-header { flex-direction: column; text-align: center; gap: 8px; }
    .ev26-header > div { border-left: 0; padding-left: 0; }
    .ev26-grid-wrap { container-type: normal; overflow-y: auto; scrollbar-width: none; }
    .ev26-grid-wrap::-webkit-scrollbar { display: none; }
    .ev26-grid { height: auto; grid-template-rows: none; }
    .ev26-card { --avatar: 64px; }
    .ev26-country { display: none; }
}

@media (max-width: 420px) {
    .main-slider .ev26-slide { --ev26-cols: 2; }
    .ev26-card { --avatar: 72px; }
}



    </style>
@endsection
@section('content')

{{-- @include('front.page.modal') --}}
    <main id="main">
        <section id="main-slider-section" class="main-slider-section">
            @include('front.page.slider')
            {{-- <div class="footer">
                <div class="feature">
                    <a target="_blank" href="https://www.facebook.com/EV4GH/"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <hr />
                <div class="feature">
                    <a target="_blank" href="https://www.linkedin.com/company/ev4gh"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
                <hr />
                <div class="feature">
                    <a href="#ev-footer"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div> --}}
            <a href="https://www.youtube.com/@ev4ghsecretariat298" target="_blank" class="ytb-logo"><img
                    src="assets/images/logo/youtube.png" alt="Youtube"></a>
        </section>
        <section id="main-hero" class="main-hero">
            <div class="hero-inner-content container">
                <div class="row g-0 h-100">
                    <div class="col-md-12">
                        <article class="hero-article" id="hero-article">
                            <h1 class="hero-title">
                                Emerging Voices for<br />
                                <span>Global Health <span>.</span> </span>
                            </h1>

                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section id="ev4gh-section-1" class="ev4gh-section ev4gh-section-1">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-7">
                        <div class="ev4gh-text-card"
                            style="    display: flex; flex-direction: column; align-items: flex-start; justify-content: center;">
                            <h1 class="ev4gh-section-title">Be the next Global Health Changemaker.</h1>
                            <p class="ev4gh-section-text-para">Emerging Voices for Global Health (EV4GH) is an
                                innovative multi-partner blended training program that includes face-to-face training
                                and virtual training components, for young, promising, and emerging health policy &
                                systems researchers, decision-makers, and other health system professionals with an
                                interest in becoming influential global health voices and/or local change makers,
                                particularly in LMIC.
                            </p>
                            <a class="btn ev-btn-1" href="{{ route('about') }}">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-5  text-center">

                        <img class="rounded-pill shadow-lg border border-5 border-white img-fluid"
                            style="max-height: 450px;" src="assets/images/index/2.jpg" alt="EV4GH Image">

                    </div>

                </div>
            </div>
        </section>

        <section id="ev4gh-section-latest" class="ev4gh-section ev4gh-section-latest"
            style="background: #f4f4f4; padding: 80px 0;">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <div class="section-heading">
                            <h1 style="font-weight: 900;">News <span style="color: var(--color-default);">&</span> Events
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center news-row">
                    @foreach ($newsEvents as $news)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="ev4gh-news-event-card">
                                <div class="card-image-wrapper">
                                    <img src="{{ asset($news->image) }}" alt="{{ $news->title }}">
                                    <div class="card-category">{{ $news->type }}</div>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title">{!! $news->title !!}</h3>
                                    @if ($news->link)
                                        <a href="{{ $news->link }}" class="card-link" target="_blank">
                                            {{ $news->button_text ?? 'Learn More' }} <span class="arrow">→</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row my-5">
                    <div class="col-12">
                        <div class="ev4gh-separator">
                            <span>Stay Connected</span>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center default-news-row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="social-widget-card fb-card">
                            <div class="fb-wrapper">
                                <div class="fb-page" data-href="https://www.facebook.com/EV4GH/" data-tabs="timeline"
                                    data-width="500" data-height="450" data-small-header="true"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="ev4gh-newsletter-card text-center">
                            <div class="newsletter-icon">
                                <img src="assets/images/newsletter-svgrepo-com.svg" alt="newsletter">
                            </div>
                            <h4 class="newsletter-title">Stay Informed</h4>
                            <p>Read Our Latest Newsletter:</p>
                            <a target="_blank"
                                href="{{ asset('assets/pdf/newsletter/2026/EV4GH Newsletter Spring 2026.pdf') }}"
                                class="btn ev4gh-newsletter-btn">
                                Spring 2026
                            </a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="social-widget-card tw-card">
                    <div class="twitter-wrapper">
                        <a class="twitter-timeline" data-width="700" data-height="400" data-theme="light" href="https://twitter.com/ev4gh?ref_src=twsrc%5Etfw">Tweets by ev4gh</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div> --}}
                </div>
            </div>
        </section>

        <section id="ev4gh-alumni" class="ev4gh-section py-5" style="background:#fff;">
            <div class="container">

                <!-- Heading -->
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h1 style="font-weight:900;">
                            Hear From Our <span style="color: var(--color-default);">Alumni</span>
                        </h1>

                    </div>
                </div>

                <!-- Video Cards -->
                <div class="row justify-content-center">

                    <!-- Video 1 -->

                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="card shadow-sm border-0 h-100" style="border-radius:15px; overflow:hidden;">

                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fweb.facebook.com%2Freel%2F1688215995506167%2F&show_text=false&width=560&t=0"
                                    width="560" height="314" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                    allowFullScreen="true"></iframe>
                            </div>

                            <div class="p-3">
                                <h5 style="font-weight:700;">Sara Dada</h5>

                            </div>

                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="card shadow-sm border-0 h-100" style="border-radius:15px; overflow:hidden;">

                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fweb.facebook.com%2Freel%2F1253921536137435%2F&show_text=false&width=560&t=0"
                                    width="560" height="314" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                    allowFullScreen="true"></iframe>
                            </div>

                            <div class="p-3">
                                <h5 style="font-weight:700;">Motto Nganda</h5>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>
    <!-- Image Popup Modal -->
    <div class="modal fade" id="imagePopup" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content border-0 bg-transparent">
                <!-- Close Button (top-right) -->
                <button type="button" class="btn btn-light position-absolute"
                    style="top:10px; right:10px; z-index: 10; border-radius:50%;" data-bs-dismiss="modal">
                    ✕
                </button>
                <!-- Image Card -->
                <div class="card shadow-lg border-0">
                    <a target="_blank" href="{{ route('call-for-applications-2026') }}">
                        <img src="assets/images/popup.jpg" class="card-img-top" alt="Popup Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script type="module">
        const swiper = new Swiper(".main-slider", {
            // direction: "vertical",
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
            autoplay: {
                delay: 15000,
                disableOnInteraction: false,
            },
            loop: true,
            loopAdditionalSlides: 2, // Forces clean clone offsets for fade effect
            watchSlidesProgress: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                init: function() {
                    let activeSlide = this.slides[this.activeIndex];
                    let background = activeSlide.querySelector(".background");
                    if (background) {
                        background.classList.add("animation");
                    }
                },
                slideChange: function() {
                    this.slides.forEach((slide) => {
                        let background = slide.querySelector(".background");
                        if (background) {
                            background.classList.remove("animation");
                        }
                    });
                    let activeSlide = this.slides[this.activeIndex];
                    let background = activeSlide.querySelector(".background");
                    if (background) {
                        background.classList.add("animation");
                    }
                },
            },
        });
        var elms = document.getElementsByClassName('testimonial-slide');
        for (var i = 0; i < elms.length; i++) {
            new Splide(elms[i], {
                arrowPath: 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z',
                // General Options
                perPage: 3,
                gap: '2rem',
                autoplay: true, // Added back autoplay/pauseOnHover/rewind for completeness
                pauseOnHover: true,
                rewind: true,
                // Responsive Breakpoints
                breakpoints: {
                    1200: { // Added 1200px breakpoint back (useful since your slides are wide)
                        perPage: 2,
                        gap: '1.5rem',
                    },
                    768: { // Tablet portrait
                        perPage: 1,
                        gap: '1rem',
                    },
                    640: { // Your specified breakpoint
                        perPage: 1, // Changed to 1, as 2 might be too cramped at 640px
                        gap: '.7rem',
                        // Removed height: '6rem'
                    },
                    480: {
                        perPage: 1,
                        gap: '.7rem',
                        // Removed height: '6rem'
                    },
                },
            }).mount();
        }


        /* document.addEventListener("DOMContentLoaded", function() {
            var popup = new bootstrap.Modal(document.getElementById('imagePopup'));
            popup.show();
        }); */
    </script>
@endsection
