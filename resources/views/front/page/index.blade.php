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
    </style>
@endsection
@section('content')
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
            <a href="https://www.youtube.com/@ev4ghsecretariat298" target="_blank" class="ytb-logo"><img src="assets/images/logo/youtube.png" alt="Youtube"></a>
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
