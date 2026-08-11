@extends('front.layout.front-master')
@section('styles')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Salsa&display=swap");

        .swiper-container {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: var(--color-default);
        }

        .swiper-slide {
            position: relative;
            width: 100%;
            height: 100vh;
        }

        /* content */
        #main-slider-section .content {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            top: 30%;
            /* left: 3%; */
            width: 40%;
            height: max-content;
            color: #f2f2f2;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
            opacity: 0;
            z-index: 2;
        }

        #main-slider-section .content.slider-style-default {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            top: 30%;
            left: 3%;
            width: 40%;
            height: max-content;
            color: #f2f2f2;
            text-align: center;
            padding: 20px;
            opacity: 0;
            z-index: 2;
        }

        #main-slider-section .content h1 {
            font-family: "Salsa", cursive;
            font-size: clamp(1.5rem, 2.5vw, 4.5rem);
            margin-bottom: 20px;
            opacity: 0;
        }

        #main-slider-section .content p {
            font-family: inherit;
            font-size: 1.2rem;
            line-height: 1.4;
            font-weight: 500;
            opacity: 0;
        }

        #main-slider-section .swiper-slide-active .content {
            opacity: 1;
        }

        #main-slider-section .swiper-slide-active .content h1 {
            animation: moveDown 0.8s ease-in forwards;
        }

        #main-slider-section .swiper-slide-active .content p {
            animation: moveDown 1s ease-in forwards;
            animation-delay: 1s;
        }

        @keyframes moveDown {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* background */
        /* #main-slider-section .background[data-item="one"] {
                                                                                    background-position: 50% 40%;
                                                                                } */
        #main-slider-section .background {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            clip-path: circle(5%);
            filter: brightness(90%);
            overflow: hidden;
            opacity: 0;
            z-index: 1;
            background-size: cover !important;
            background-repeat: no-repeat !important;
        }

        #main-slider-section .animation {
            animation: resizeClipPath 3s ease-in-out forwards;
        }

        @keyframes resizeClipPath {
            0% {
                clip-path: circle(5%);
                opacity: 0;
            }

            100% {
                clip-path: circle(71%);
                opacity: 1;
            }
        }

        /* pagination bullet */
        #main-slider-section .swiper-pagination-bullet {
            width: 16px;
            height: 16px;
            background-color: #a3a6a3;
            border-radius: 50%;
            transition: all 0.6s ease-in-out;
        }

        #main-slider-section .swiper-pagination-bullet-active {
            height: 32px;
            background-image: linear-gradient(180deg, var(--color-support1) 0%, var(--color-default) 100%);
            border-radius: 14px;
        }

        /* footer */
        #main-slider-section .footer {
            position: absolute;
            display: flex;
            justify-content: space-between;
            column-gap: 20px;
            bottom: 0;
            left: 50%;
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            width: max-content;
            padding: 20px;
            color: #f2f2f2;
            border-radius: 8px 8px 0 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            z-index: 2;
        }

        #main-slider-section .feature {
            display: flex;
            align-items: center;
            column-gap: 12px;
        }

        #main-slider-section .feature i {
            font-size: 1.4rem;
        }

        #main-slider-section .feature a {
            color: #f0f8ff;
            font-size: 1.4rem;
        }

        #main-slider-section .feature p {
            font-weight: 700;
        }

        #main-slider-section .btn {
            display: block;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
            padding: 15px 20px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0px 0px 14px -7px #f09819;
            background-image: linear-gradient(45deg,
                    var(--color-default) 0%,
                    var(--color-support1) 51%,
                    var(--color-default) 100%);
            background-size: 200% auto;
            cursor: pointer;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            transition: 0.5s;
        }

        #main-slider-section .btn:hover {
            background-position: right center;
        }

        #main-slider-section .btn:active {
            transform: scale(0.95);
        }

        #main-slider-section .ytb-logo {
            position: fixed;
            right: 30px;
            bottom: 30px;
            z-index: 10;
            
        }

        #main-slider-section .ytb-logo img {
            width: 50px;
            filter: drop-shadow(5px 6px 6px #000000);
        }

        @media (max-width: 890px) {
            #main-slider-section .ytb-logo {
                right: -10px;
                bottom: -20px;
            }

            #main-slider-section .ytb-logo img {
                width: 80px;
            }
        }

        /* media queries */
        @media (max-width: 1200px) {
            #main-slider-section .content {
                top: 18%;
            }

            #main-slider-section .content[data-content="two"],
            #main-slider-section .content[data-content="three"] {
                top: 5%;
                width: 50%;
            }
        }

        @media (max-width: 900px) {

            #main-slider-section .content,
            #main-slider-section .content[data-content="three"] {
                top: 55%;
                left: 2%;
                width: 60%;
            }

            #main-slider-section .content[data-content="two"] {
                top: 10%;
            }

            #main-slider-section .content h1 {
                margin-bottom: 14px;
            }

            #main-slider-section .content p {
                font-size: 1rem;
                line-height: 1.4;
            }

            #main-slider-section .feature i {
                font-size: 1.3rem;
            }

            #main-slider-section .feature p {
                font-size: 1rem;
            }

            #main-slider-section .btn {
                padding: 8px 16px;
            }
        }

        @media (max-width: 790px) {
            #main-slider-section .footer {
                column-gap: 10px;
            }

            #main-slider-section .feature i {
                font-size: 1.1rem;
            }

            #main-slider-section .feature p {
                font-size: 0.9rem;
            }

            #main-slider-section .feature small {
                font-size: 0.8rem;
            }

            #main-slider-section .btn {
                font-size: 0.8rem;
                padding: 8px 12px;
            }
        }

        @media (max-width: 660px) {

            #main-slider-section .content,
            #main-slider-section .content[data-content="two"],
            #main-slider-section .content[data-content="three"] {
                top: unset;
                left: 2%;
                bottom: 3%;
                width: 80%;
            }

            #main-slider-section .content p {
                font-size: 0.9rem;
                line-height: 1.2;
            }

            #main-slider-section .background[data-item="two"] {
                background-position: 40% 50%;
            }

            #main-slider-section .swiper-pagination-bullet {
                width: 12px;
                height: 12px;
            }

            #main-slider-section .swiper-pagination-bullet-active {
                height: 24px;
            }

            #main-slider-section .footer {
                column-gap: 0;
                left: unset;
                bottom: unset;
                top: 20px;
                right: -30px;
                padding: 0;
                border-radius: 0;
                border: 0;
                background-color: transparent;
                box-shadow: unset;
                -webkit-backdrop-filter: blur(0);
                backdrop-filter: blur(0);
            }

            #main-slider-section .feature,
            hr {
                display: none;
            }
        }

        .call-for-application-slider {}

        .call-for-application-slider h1 {
            font-size: 32px !important;
            color: var(--color-default);
            text-align: left;
            font-weight: 900;
            font-family: Poppins, sans-serif !important;
            margin-bottom: 30px;
            text-shadow: 2px 2px 0 #bcbcbc, 4px 4px 0 #9c9c9c;
            line-height: 1;
        }

        .call-for-application-slider h5 {
            font-size: 30px !important;
            color: #000000;
            text-align: left;
            font-weight: 500;
            font-family: Poppins, sans-serif !important;
            margin-bottom: 30px;
        }

        .call-for-application-slider p {
            font-size: 25px !important;
            color: var(--color-support);
            text-align: left;
            font-weight: 900 !important;
            font-family: Poppins, sans-serif !important;
            margin-bottom: 30px;
        }

        .index-page-img-1 img {
            max-height: 400px;
            min-height: 400px;
            max-width: 400px;
            min-width: 400px;
        }

        .ev4gh-text-card .ev-btn-1 {
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }
    </style>
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
            <div class="footer">
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
            </div>
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
                            <h3 class="ev4gh-section-title">Be the next Global Health Changemaker.</h3>
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
                            <a target="_blank" href="{{ asset('assets/pdf/newsletter/2026/EV4GH Newsletter Spring 2026.pdf') }}"
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
            direction: "vertical",
            effect: "fade",
            speed: 1000,
            autoplay: {
                delay: 15000, // 5 seconds
                disableOnInteraction: false, // keeps autoplay running after user interacts
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // mousewheel: {
            //     invert: false,
            //     forceToAxis: false,
            //     thresholdDelta: 50,
            //     sensitivity: 1,
            // },
            on: {
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
