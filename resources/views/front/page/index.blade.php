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
            right: 0px;
            bottom: 0px;
            z-index: 10;
        }
        #main-slider-section .ytb-logo img {
            width: 110px;
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
    </style>
@endsection
@section('content')
<main id="main">
        <section id="main-slider-section" class="main-slider-section">
            <div class="swiper-container main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content">
                            <h1 style="color: var(--color-support1);">Congratulations to the 41 Emerging Voices from 27
                                countries participating in the EV4GH
                                2024 programme</h1>
                            <p></p>
                        </div>
                        <div class="background"
                            style="background: url(assets/images/index/slider/Ev-slider-map-1.jpg);">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <!-- Optional content -->
                        </div>
                        <div class="background"
                            style="background-image: url('assets/images/index/slider/call-for-application-red.jpg'); 
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <h1>EV4GH releases a statement on the destruction of Gaza’s health system and ongoing
                                genocide</h1>
                            <p></p>
                            <a class="btn" target="_blank"
                                href="https://ev4gh.net/wp-content/uploads/2024/06/EV4GH-Call-for-HSG-statement-on-Palestine-only-statement.pdf">Learn
                                More</a>
                        </div>
                        <div class="background"
                            style="background-image: url(assets/images/index/slider/pexels-photo-10010408.jpg);">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="footer">
                <div class="feature">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <hr />
                <div class="feature">
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                </div>
                <hr />
                <div class="feature">
                    <a href=""><i class="fa-solid fa-house"></i></a>
                </div>
            </div>
            <a href="https://www.youtube.com/@ev4ghsecretariat298" target="_blank" class="ytb-logo"><img
                    src="https://assets.codepen.io/9868786/youtube.webp" alt="HTML tutorial"></a>
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
                            <!-- <h4>XX XX XXXXXXXX</h4> -->
                            <!-- <div class="hero-other">
                                <span class="hero-span">PHP | Laravel</span>
                                <span class="hero-span">HTML | CSS | BOOTSTRAP | JS</span>
                                <span class="hero-span">DevOps</span>
                            </div> -->
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section id="ev4gh-section-1" class="ev4gh-section ev4gh-section-1">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="ev4gh-text-card">
                            <h3 class="ev4gh-section-title">Be the next Global Health Changemaker.</h3>
                            <p class="ev4gh-section-text-para">Emerging Voices for Global Health (EV4GH) is an
                                innovative multi-partner blended training program that includes face-to-face training
                                and virtual training components, for young, promising, and emerging health policy &
                                systems researchers, decision-makers, and other health system professionals with an
                                interest in becoming influential global health voices and/or local change makers,
                                particularly in LMIC.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ev4gh-img-card">
                            <img class="img-fluid" src="assets/images/index/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ev4gh-img-card ">
                            <img class="img-fluid" src="assets/images/index/Liverpool-2018-43-of-82-scaled.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ev4gh-text-card right">
                            <h3 class="ev4gh-section-title">Legacy of EV4GH venture</h3>
                            <p class="ev4gh-section-text-para">The EV4GH venture was initially conceived by the
                                Institute of Tropical Medicine, Antwerp in 2010 with the aim of empowering health
                                systems researchers from the global South by providing them with intensive skills
                                training and facilitating their participation in global health symposia. After initial
                                success with a small cohort of researchers aspiring for local change and global impact,
                                the EV4GH venture began to involve more institutions from across several LMICs.
                            </p>
                            <p class="ev4gh-section-text-para">Over time, the emerging voices (EV) initiative has
                                acquired a life of its own with over 260 EVs from 6 cohorts (2010-16) representing close
                                to 60 countries in Africa, Asia, Australia, Europe, Latin, North, and Central America.
                                EV4GH has reconfigured itself with a globally representative elected governance board
                                and a secretariat based at BRAC James P Grant School of Public Health, BRAC University
                                in Bangladesh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="ev4gh-section-news-blogs" class="ev4gh-section ev4gh-section-news-blogs">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 justify-item-center">
                        <div class="section-heading">
                            <h1>News <span>&</span> Blogs</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <section class="splide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn ev4gh-btn-1">Learn more ></a></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn ev4gh-btn-1">Learn more ></a></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn ev4gh-btn-1">Learn more ></a></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn ev4gh-btn-1">Learn more ></a></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn ev4gh-btn-1">Learn more ></a></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <section id="ev4gh-section-video" class="ev4gh-section left ev4gh-section-video ">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="ev4gh-text-card">
                            <img class="ten-anniversary-logo" src="assets/images/10th-Anniversary.png"
                                alt="">
                            <p class="ev4gh-section-text-para">Emerging Voices for Global Health (EV4GH) celebrates its
                                10th anniversary. Here is a glimpse at the decade past. 6 ventures of EV4Gh have been
                                successfully conducted so far. We look forward to the upcoming EV 2020 venture and many
                                more to come.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ev4gh-video-card">
                            <video controls="">
                                <source type="video/mp4" src="assets/videos/Emerging Voices 10th Anniversary.mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <hr>
        <section id="ev4gh-section-latest" class="ev4gh-section ev4gh-section-latest" style="  background: #e8e8e8; ">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 justify-item-center">
                        <div class="section-heading">
                            <h1>Latest <span>updates</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="fb-page" data-href="https://www.facebook.com/EV4GH/" data-tabs="timeline"
                            data-width="500" data-height="600" data-small-header="true"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/EV4GH/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/EV4GH/">Emerging Voices 4 Global Health</a>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 ev4gh-newsletter-card">
                            <div class="card-body">
                                <img src="assets/images/newsletter-svgrepo-com.svg" class="card-img-top"
                                    alt="newsletter svg">
                                <h5 class="card-title">Read Our Latest Newsletter:</h5>
                                <p class="card-text">EV Newsletter January 2023</p>
                                <a href="#" class="btn ev4gh-btn-2">Learn more ></a></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <a class="twitter-timeline" data-width="500" data-height="600"
                            href="https://twitter.com/ev4gh?ref_src=twsrc%5Etfw">Tweets by ev4gh</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div> -->
                </div>
            </div>
        </section>
        <section id="ev4gh-section-ev4gh-section-testimonials" class="ev4gh-section ev4gh-section-testimonials">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="section-heading-2">
                            <h1><span>Testimonials</span></h1>
                        </div>
                    </div>
                    <div class="col-md-10 d-flex align-items-end p-5">
                        <section class="splide testimonial-slide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text description">I work at the Institute of public
                                                    health in Bengaluru. I am health systems research working on various
                                                    topics related to strengthening health systems . I went to the
                                                    emerging voices training program in the year 2010. Program has
                                                    enormously help me with trying to find a balance between focussing
                                                    on rigorous research as well as trying to see that the research gets
                                                    into impact.</p>
                                            </div>
                                            <div class="image-content">
                                                <div class="card-image">
                                                    <img src="https://ev4gh.net/wp-content/uploads/2017/02/Prashanth1.png"
                                                        alt="" class="card-img">
                                                </div>
                                                <div class="name-designation">
                                                    <h5 class="name">Prashanth N S</h5>
                                                    <p>Public Health Expert</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text description">Being an EV has provided the platform
                                                    to be a changemaker speak my mind right and engage differently the
                                                    opportunities extend beyond the program and had described such
                                                    opportunity has been critical for one’s Korea in health systems
                                                    research from one young researcher to another.</p>
                                            </div>
                                            <div class="image-content">
                                                <div class="card-image">
                                                    <img src="https://ev4gh.net/wp-content/uploads/2016/06/shakira.png"
                                                        alt="" class="card-img">
                                                </div>
                                                <div class="name-designation">
                                                    <h5 class="name">Shakira Choonara</h5>
                                                    <p>EV Alumni</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text description">Inspired set of mentors, a great
                                                    family, the best platform to raise your voice, share ideas and
                                                    learning from others – this is what being an EV has meant to me. It
                                                    empowers us to take on the most important health challenges of today
                                                    and the future.</p>
                                            </div>
                                            <div class="image-content">
                                                <div class="card-image">
                                                    <img src="https://ev4gh.net/wp-content/uploads/2016/07/erlyn.png"
                                                        alt="" class="card-img">
                                                </div>
                                                <div class="name-designation">
                                                    <h5 class="name">Erlyn Macarayan</h5>
                                                    <p>EV Alumni</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text description">I was an Emerging Voice for Global
                                                    Health in 2014. The program enabled me to gain a strong
                                                    understanding of the macro-level trends, debates, and discussions in
                                                    health systems research. Being a part of the EV network has given me
                                                    an opportunity to collaborate with alumni and encouraged me to
                                                    become a more active blogger and more effective communicator.</p>
                                            </div>
                                            <div class="image-content">
                                                <div class="card-image">
                                                    <img src="https://ev4gh.net/wp-content/uploads/2017/02/Kerry.png"
                                                        alt="" class="card-img">
                                                </div>
                                                <div class="name-designation">
                                                    <h5 class="name">Kerry Scott</h5>
                                                    <p>Public Health Expert</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
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
                    <a target="_blank" href="">
                        <img src="assets/images/popup.jpg" class="card-img-top" alt="Popup Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
 <script type="module">
        const swiper = new Swiper(".main-slider", {
            direction: "vertical",
            effect: "fade",
            speed: 1000,
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
        var elms = document.getElementsByClassName('splide');
        for (var i = 0; i < elms.length; i++) {
            new Splide(elms[i], {
                arrowPath: 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z',
                perPage: 3,
                gap: '2rem',
                breakpoints: {
                    640: {
                        perPage: 2,
                        gap: '.7rem',
                        height: '6rem',
                    },
                    480: {
                        perPage: 1,
                        gap: '.7rem',
                        height: '6rem',
                    },
                },
            }).mount();
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popup = new bootstrap.Modal(document.getElementById('imagePopup'));
            popup.show();
        });
    </script>
@endsection
