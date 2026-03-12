@extends('front.layout.front-master')
@section('styles')
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <style>
        /* Make the header taller for event style */
        .breadcrumbs .page-header {
            padding: 140px 0;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .breadcrumbs .page-header h2 {
            font-size: 40px;
            font-weight: 500;
            color: #fff;
            font-family: var(--font-secondary);
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 20px;
            word-spacing: 2px;
        }

        /* Particles background */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Content must stay above particles */
        .header-content {
            position: relative;
            z-index: 2;
        }

        /* .about-text {
                                    padding-right: 50px;
                                    text-align: justify;
                                } */
        .about-text {
            display: flex;
            flex-direction: column;
            border-radius: 18px;
            /* border: 1px solid #eee; */
            transition: .3s;
            height: 100%
        }

        .about-sec-title {
            font-size: 24px;
            color: var(--color-default);
            font-family: 'nerissemibold';
            margin-bottom: 20px;
        }

        h3.about-sec-title-h3 {
            font-size: 20px;
            color: #000;
            font-family: 'nerissemibold';
            margin-bottom: 20px;
            text-align: left;
        }

        .about-text p {
            font-family: var(--text-font);
            font-size: 15px !important;
            font-weight: 300;
            line-height: 20px;
            color: #6a6f78;
        }

        .ev-check-list {
            list-style: none;
            padding-left: 0;
        }

        .ev-check-list li {
            display: flex;
            /* Align icon and text properly */
            align-items: flex-start;
            /* Align icon with the top of the text block */
            font-size: 16px;
            line-height: 26px;
            font-weight: 300;
            color: #6a6f78;
            margin-bottom: 20px;
        }

        .ev-check-list li:last-child {
            margin-bottom: 0px !important;
        }

        .ev-check-list li i,
        .ev-check-list li svg {
            flex-shrink: 0;
            /* Prevent icon from shrinking */
            width: 20px;
            height: 20px;
            margin-right: 10px;
            /* color: #6a6f78; */
            color: var(--color-default);
            margin-top: 3px;
            /* Small adjustment to align with text */
        }

        .call-for-application-hero {}

        .call-for-application-hero h5 {
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .call-for-application-hero span {
            font-size: 20px;
            color: #003651;
        }
    </style>
    <style>
        .ev-box {
            background: #eef4f8;
            /* Light muted blue-grey background */
            /* border: 1px solid rgba(0, 0, 0, 0.12); */
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 4px 10px rgb(0 0 0 / 40%);
            /* margin-bottom: 40px; */
        }

        /* Title styles */
        .about-sec-title,
        .about-sec-title-h3 {
            margin-bottom: 18px;
            font-weight: 600;
        }

        /* Main list */
        .ev-check-list {
            list-style: none;
            padding-left: 0;
            margin-left: 0;
        }

        .ev-check-list>li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 14px;
            font-size: 15px;
            line-height: 20px;
        }

        .ev-check-list>li>i {
            position: absolute;
            left: 0;
            top: 3px;
            font-size: 18px;
        }

        /* Nested list icons */
        .ev-icon i {
            color: #3ba4d7;
            font-size: 18px;
            margin-right: 6px;
        }

        /* Sub list */
        .ev-sub-list {
            list-style: none;
            margin-top: 12px;
            padding-left: 20px;
        }

        .ev-sub-list li {
            position: relative;
            padding-left: 22px;
            margin-bottom: 12px;
            font-size: 15px;
            line-height: 20px;
        }

        .ev-sub-list li i {
            position: absolute;
            left: 0;
            top: 3px;
            font-size: 14px;
            color: #3ba4d7;
        }

        /* Add spacing between columns on desktop */
        @media (min-width: 768px) {
            .col-md-6 .ev-box {
                height: 100%;
            }
        }
    </style>
@endsection
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs position-relative call-for-applicarion">
            <!-- Particle Background -->
            <div id="particles-js"></div>
            <div class="page-header d-flex align-items-center call-for-applicarion-header"
                style="background-color: #e40000;">
                <div class="container position-relative header-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="call-for-application-hero">
                                {{-- <h5>Emerging Voices for Global Health (EV4GH) 2026</h5> --}}
                                <h2>Emerging Voices for Global Health 2022</h2>
                                {{-- <span>Linked to the 9th Global Health Symposium on Health Systems Research (HSR 2026)
                                    in</span>
                                <br>
                                <span><i class="fa-thin fa-location-dot fa-beat me-2"></i> Dubai, UAE, November 2026</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>EV4GH Ventures</li>
                        <li>About</li>
                        <li>EV4GH 2022</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2 class="about-sec-title">What is the Emerging Voices for Global Health training program?</h2>
                            <p>Emerging Voices for Global Health (EV4GH) is an innovative multi-partner blended training
                                program for promising and emerging health policy &amp; systems researchers, decision makers,
                                and other health system actors with an interest to become influential global health voices
                                and/or local change makers. EV4GH coaches “Emerging Voices (EVs)” to participate on global
                                health platforms and raise their voices in scientific and policy debates. The EV4GH program
                                is managed by an internationally representative <a
                                    href="https://ev4gh.net/about/the-secretariat/">governance committee</a> consisting of
                                EV alumni elected by previous EV4GH participants and several invited (liaison) members from
                                EV partner institutes. EV4GH became <a
                                    href="https://healthsystemsglobal.org/news/emerging-voices-for-global-health-accepted-as-an-hsg-thematic-working-group/">a
                                    Thematic Working Group</a> (TWG) of Health Systems Global (HSG) in 2015 and was
                                reconfirmed as a <a href="https://healthsystemsglobal.org/thematic-groups/">TWG</a> in 2021.
                            </p>
                            <h2 class="about-sec-title">What is the EV4GH 2022 training program?</h2>
                            <p>EV4GH 2022 is a blended learning training program and consists of an e-coaching and distance
                                learning phase, followed by a face-to-face training phase held prior to the Symposium. It
                                uses innovative training methods and activities to enable emerging researchers, and other
                                health system actors and change agents to present their work effectively and engage on
                                various global health platforms. In addition, the global network of EVs fosters networking
                                and learning across contexts and regions. After the training program, EVs become members of
                                the EV4GH thematic working group and can then join other thematic working groups of HSG.</p>
                            <h2 class="about-sec-title">What is the EV4GH training?</h2>
                            <p><span style="font-weight: 400;">For both tracks, the full EV4GH 2020 venture consists
                                    of:</span></p>
                            <ol>
                                <li><span style="font-weight: 400;">August-October 2022: E-coaching and distance learning
                                        phase</span></li>
                                <li><span style="font-weight: 400;">Last week (/ten days of) October 2022 (kick-off: around
                                        22-24 October): Face-to-face training, including scientific presentations,
                                        networking and communication skills, content training, and field visit to local
                                        health system facilities in Colombia</span></li>
                                <li><span style="font-weight: 400;">30</span><span style="font-weight: 400;">th</span><span
                                        style="font-weight: 400;"> October 2022: Emerging researchers and other
                                        changemakers’ pre-conference (/TWG event)</span></li>
                                <li><span style="font-weight: 400;">31</span><span style="font-weight: 400;">st</span><span
                                        style="font-weight: 400;"> October-4th November 2022: Participation in the 7th
                                        Global Symposium on Health Systems Research, Bogotá, Colombia</span></li>
                                <li><span style="font-weight: 400;">5</span><span style="font-weight: 400;">th</span><span
                                        style="font-weight: 400;"> November 2022: Wrap-up session focusing on emerging
                                        beyond Bogotá, Colombia</span></li>
                                <li><span style="font-weight: 400;">After 5</span><span
                                        style="font-weight: 400;">th</span><span style="font-weight: 400;"> November 2022:
                                        Participation in the EV4GH network (and other HSG thematic working groups) with
                                        other emerging researchers, professionals, peers as well as senior researchers,
                                        policy makers, and experts in health systems and global health.</span></li>
                            </ol>
                            <h2 class="about-sec-title">Who can apply?</h2>
                            <p style="text-align: justify;">There will be two tracks for which participants can apply to be
                                an EV 2022. Track 1 is reserved for researchers involved in health policy and systems
                                research (researchers’ track), Track 2 seeks to attract health professionals, activists,
                                policy makers, knowledge brokers, health journalists, and other health system actors (other
                                health system actors’ track). All applicants must have been born on or after <strong>January
                                    1, 1982</strong>. In case of any difficulty, please write to EV Secretariat at&nbsp;
                                ev4ghinfo@aphrc.org</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


       <section id="application-materials" class="our-history-section" style=" background: var(--color-ev4gh-gray); ">
            <style>
                .info-card {
                    border: none;
                    border-radius: 12px;
                    transition: all .3s ease;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
                    height: 100%;
                }

                .info-card:hover {
                    transform: translateY(-6px);
                    box-shadow: 0 18px 35px rgba(0, 0, 0, 0.12);
                }

                .info-card a {
                    text-decoration: none;
                    color: inherit;
                    display: block;
                    padding: 30px 20px;
                }

                .info-icon {
                    font-size: 42px;
                    color: #a12d2d;
                    margin-bottom: 15px;
                }

                .info-title {
                    font-weight: 600;
                    font-size: 18px;
                    color: #333;
                }
            </style>
            <div class="container py-4">
                <div class="row g-4">
                    <!-- Program Information -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card text-center">
                            <a href="https://old.ev4gh.net/wp-content/uploads/2021/11/Call-info-2022.pdf" target="_blank">
                                <div class="info-icon">
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                                <div class="info-title">Program Information</div>
                            </a>
                        </div>
                    </div>
                    <!-- FAQs -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card text-center">
                            <a href="https://old.ev4gh.net/faq2022" target="_blank">
                                <div class="info-icon">
                                    <i class="fa-solid fa-circle-question"></i>
                                </div>
                                <div class="info-title">FAQs</div>
                            </a>
                        </div>
                    </div>
                    <!-- Download Call -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card text-center">
                            <a href="https://old.ev4gh.net/wp-content/uploads/2021/11/EV4GH_2022_Call_November_ENG.pdf"
                                target="_blank">
                                <div class="info-icon">
                                    <i class="fa-solid fa-download"></i>
                                </div>
                                <div class="info-title">Download Call</div>
                            </a>
                        </div>
                    </div>
                    <!-- Apply Now -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card text-center">
                            <a href="https://redcap.aphrc.org/redcap/surveys/?s=EY7WWYNYNRJ3WDXP" target="_blank">
                                <div class="info-icon">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <div class="info-title">Apply Now</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section" style="background:#fdf1e5">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2 class="about-sec-title" style="color:black">The EV4GH 2026 Venture: Timeline</h2>
                            <img src="{{ asset('assets/images/past-venture/2022/2022-timeline.png') }}" class="img-fluid"
                                alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        
    </main>
@endsection
@section('scripts')
    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        /* particles.js configuration */
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 90,
                    "density": {
                        "enable": true,
                        "value_area": 900
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    }
                },
                "opacity": {
                    "value": 0.7,
                    "random": false
                },
                "size": {
                    "value": 3,
                    "random": true
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2.5,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    }
                },
                "modes": {
                    "grab": {
                        "distance": 150,
                        "line_linked": {
                            "opacity": 0.7
                        }
                    },
                    "push": {
                        "particles_nb": 4
                    }
                }
            },
            "retina_detect": true
        });
    </script>
@endsection
