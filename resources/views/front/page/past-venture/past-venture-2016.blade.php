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

        .accordion-button:not(.collapsed) {
            background: #a12d2d;
            color: #fff;
        }

        .accordion-button:focus {
            box-shadow: none;
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
                                <h2>Emerging Voices for Global Health 2016</h2>
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
                        <li>EV4GH 2016</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2 class="about-sec-title">About the Emerging Voices for Global Health</h2>
                            <p>Emerging Voices for Global Health (EV4GH) is an innovative multi-partner blended training
                                program for young, promising and emerging health policy & systems researchers, decision
                                makers and other health system actors with an interest to become influential global health
                                voices and/or local change makers. EV4GH coaches “Emerging Voices” to participate actively
                                in international conferences where global health issues are addressed and to raise their
                                voice in scientific and policy debates. EV4GH 2018 tracks for young researchers and other
                                health system actors The EV4GH programme is managed by an internationally representative
                                governance committee consisting of EV alumni elected by previous EV4GH participants and a
                                few invited members from academia (from EV partner institutes, mostly). What is the EV4GH
                                training? For both tracks, the full EV4GH 2018 venture consists of:</p>
                            <h2 class="about-sec-title">What is the EV4GH 2022 training program?</h2>
                            <ol>
                                <li>&nbsp;E-coaching and distance learning in preparation of a face-to-face training (July –
                                    Sept 2018)</li>
                                <li>Face-to-face training: scientific presentation, networking and communication skills
                                    coaching using innovative formats, and content training &amp; field visit to the
                                    National Health Service (Liverpool, end of September – 5 October 2018)</li>
                                <li>Young researchers (&amp; other changemakers’) pre-conference (6 October 2018)</li>
                                <li>Participation in the Fifth Global Symposium on Health Systems Research (Liverpool, 8-12
                                    October 2018)</li>
                                <li>Wrap-up – focusing on Emerging ‘beyond Liverpool’ (Liverpool, 13 October 2018)</li>
                                <li>Membership of EV4GH network and other thematic working groups of Health Systems Global
                                </li>
                            </ol>
                            <h2 class="about-sec-title">Who can apply?</h2>
                            <p style="text-align: justify;">There will be two tracks for which participants can apply to be
                                an EV 2018. While one track is reserved for researchers involved in health policy and
                                systems research, the other track seeks to attract health professionals, activists, decision
                                or policy-makers and/or other health systems actors.</p>
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
                <div class="row justify-content-center g-4">
                    <!-- Program Information -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card text-center">
                            <a href="https://old.ev4gh.net/wp-content/uploads/2018/02/Emerging-voices-for-global-health-2018.pdf"
                                target="_blank">
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
                            <a data-bs-toggle="modal" data-bs-target="#faqModal">
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
                            <a href="https://old.ev4gh.net/wp-content/uploads/2017/11/Call-for-Emerging-Voices-for-Global-Health-2018.pdf"
                                target="_blank">
                                <div class="info-icon">
                                    <i class="fa-solid fa-download"></i>
                                </div>
                                <div class="info-title">Download Call</div>
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
                            <h2 class="about-sec-title" style="color:black">The EV4GH 2018 Venture: Timeline</h2>
                            <img src="{{ asset('assets/images/past-venture/2018/2018-timeline.png') }}" class="img-fluid"
                                alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="faqModal" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title fw-bold" style="color:#a12d2d;">EV4GH Frequently Asked Questions</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="accordion" id="faqAccordion">

                            <!-- FAQ 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1">
                                        What is the Emerging voices for global health?
                                    </button>
                                </h2>

                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        Emerging Voices for Global Health (EV4GH) is an innovative multi-partner blended
                                        training
                                        program for young, promising and emerging health policy & systems researchers,
                                        decision
                                        makers and other health system actors with an interest to become influential global
                                        health
                                        voices and/or local change makers. EV4GH coaches “Emerging Voices” to participate
                                        actively in international conferences where global health issues are addressed and
                                        to raise
                                        their voice in scientific and policy debates.

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2">
                                        What is the EV4GH training?
                                    </button>
                                </h2>

                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        <p>The full EV4GH 2018 venture consists of:</p>

                                        <ul>
                                            <li>E-coaching and distance learning in preparation of a face-to-face training
                                                (July – Sept 2018)</li>
                                            <li>Face-to-face training: scientific presentation, networking and communication
                                                skills coaching using innovative formats, and content training & field visit
                                                to the National Health Service (Liverpool, end of September – 5 October
                                                2018)</li>
                                            <li>Young researchers (& other changemakers’) pre-conference (6 October 2018)
                                            </li>
                                            <li>Participation in the Fifth Global Symposium on Health Systems Research
                                                (Liverpool, 8-12 October 2018)</li>
                                            <li>Wrap-up – focusing on Emerging ‘beyond Liverpool’ (Liverpool, 13 October
                                                2018)</li>
                                            <li>Membership of EV4GH network and other thematic working groups of Health
                                                Systems Global</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq3">
                                        Who can apply?
                                    </button>
                                </h2>

                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        There will be two tracks for which participants can apply to be an EV 2018. While
                                        one track
                                        is reserved for researchers involved in health policy and systems research, the
                                        other track
                                        seeks to attract health professionals, activists, decision or policy-makers and/or
                                        other
                                        health systems actors.
                                        All applicants must have been born on or after 1 January 1978

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq4">
                                        Can I apply for both the tracks?
                                    </button>
                                </h2>

                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        No! You need to choose only one track that best suits your profile

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq5">
                                        Who is eligible for track – 1?
                                    </button>
                                </h2>

                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        <p>Applicants must submit an abstract for the Liverpool conference and have at least
                                            two of the following:</p>

                                        <ul>
                                            <li>A Master’s degree in health or a health-related field</li>
                                            <li>Be enrolled in a doctoral-level programme in health or a health-related
                                                field</li>
                                            <li>At least two-year work or research experience in public health or
                                                development</li>
                                            <li>Experience and/or knowledge from working in LMICs</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq6">
                                        Who is eligible for track – 2?
                                    </button>
                                </h2>

                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        <p>Applicants must fulfil one of the following:</p>

                                        <ul>
                                            <li>Be involved in a decision-making, implementation or practitioner role within
                                                health services or systems</li>
                                            <li>Be a passionate voice for strengthening health systems within their
                                                local/national health systems in the role of activists, health journalists
                                                or patient advocates or otherwise involved in advancing health equity and
                                                social justice in their regions.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 7 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq7">
                                        What should my application focus on?
                                    </button>
                                </h2>

                                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        For both tracks, special consideration will be given to people who explicitly
                                        include the political dimension of health systems and services in their work, and
                                        challenge power in whatever form, based on good evidence.

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 8 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq8">
                                        I am from a high-income country, am I still eligible to apply?
                                    </button>
                                </h2>

                                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        Yes! EV4GH is open to all. Focus will be on applicants from the Global South
                                        especially LMICs, but candidates from the global north can also apply (they need to
                                        have relevant field experience in the global South, though, and work on health
                                        policy & systems research in the South).

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 9 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq9">
                                        I have just enrolled for a PhD, am I still eligible to apply?
                                    </button>
                                </h2>

                                <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        Yes! Please refer to question 6 and if you fulfil at least 2 of the points mentioned
                                        there you are eligible to apply

                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 10 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq10">
                                        What is covered in the scholarship?
                                    </button>
                                </h2>

                                <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">

                                        <p>
                                            In case of a full scholarship the travel, accommodation and living expenses for
                                            the duration of the course is covered and participation in the Health systems
                                            global symposia from the 8 – 12 October will be covered.
                                        </p>

                                        <p>
                                            In case of partial scholarships, some of the above aspects will be covered on
                                            case to case basis.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
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
