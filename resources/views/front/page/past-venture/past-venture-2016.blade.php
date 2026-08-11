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
        .venue-section {
            background: #fafafa;
        }
        .venue-title {
            font-size: 32px;
            font-weight: 700;
            color: #222;
        }
        .venue-date {
            color: #777;
            font-size: 18px;
            margin-top: 5px;
        }
        .venue-divider {
            width: 70px;
            height: 4px;
            background: #a12d2d;
            margin: 15px auto 0;
            border-radius: 5px;
        }
        .venue-card {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }
        .venue-name {
            font-weight: 700;
            margin-bottom: 15px;
            color: #a12d2d;
        }
        .venue-info li {
            margin-bottom: 10px;
        }
        .venue-links {
            margin-top: 20px;
        }
        .venue-btn {
            background: #a12d2d;
            color: white;
            border: none;
            margin-right: 10px;
            padding: 10px 20px;
        }
        .venue-btn:hover {
            background: #7e1f1f;
            color: white;
        }
        .venue-btn-outline {
            border: 2px solid #a12d2d;
            color: #a12d2d;
            padding: 10px 20px;
        }
        .venue-btn-outline:hover {
            background: #a12d2d;
            color: white;
        }
        .venue-map iframe {
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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
                        <li>EV4GH 2016</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section class="venue-section py-5">
            <div class="container">
                <!-- Section Title -->
                <!-- Section Title -->
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center d-flex flex-column align-items-center justify-content-center">
                        <h2 class="venue-title">Emerging Voices Training Venue</h2>
                        <p class="venue-date mt-2" style="color:#800080;"><strong>3 – 11 November 2016</strong></p>
                        <div class="venue-divider"></div>
                    </div>
                </div>
                <div class="row align-items-center g-4">
                    <!-- Venue Info -->
                    <div class="col-lg-5">
                        <div class="venue-card">
                            <h4 class="venue-name">SANDMAN HOTEL VANCOUVER CITY CENTRE</h4>
                            <p>
                                Emerging Voices 2016 will take place at <strong>SANDMAN HOTEL VANCOUVER CITY
                                    CENTRE</strong>.
                                This hotel is 9 minutes’ walk from the historic Gastown district’s shopping and dining.
                            </p>
                            <ul class="venue-info list-unstyled">
                                <li><strong>Address:</strong> 180 West Georgia Street, Vancouver BC, V6B 4P4, Canada</li>
                                <li><strong>Telephone:</strong> +1 604-681-2211</li>
                            </ul>
                            <div class="venue-links">
                                <a target="_blank"
                                    href="https://www.sandmanhotels.com/locations/british-columbia/vancouver/hotels/vancouver-city-centre-vcc?property=VCC&currency=CAD"
                                    class="btn venue-btn">Hotel Website</a>
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/49%C2%B016'44.3%22N+123%C2%B006'47.4%22W/@49.278974,-123.1153577,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d49.278974!4d-123.113169"
                                    class="btn venue-btn-outline">Directions from Airport</a>
                            </div>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="col-lg-7">
                        <div class="venue-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2602.864104470128!2d-123.11316669999998!3d49.278972200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDnCsDE2JzQ0LjMiTiAxMjPCsDA2JzQ3LjQiVw!5e0!3m2!1sen!2sbd!4v1773326642477!5m2!1sen!2sbd"
                                width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="venue-section py-5" style="background:#f9f9f9;">
            <div class="container">
                <!-- Section Title -->
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center d-flex flex-column align-items-center justify-content-center">
                        <h2 class="venue-title">Emerging Voices Pre-conference Venue</h2>
                        <p class="venue-date mt-2" style="color:#800080;"><strong>12 November 2016</strong></p>
                        <div class="venue-divider"></div>
                    </div>
                </div>
                <div class="row align-items-center g-4">
                    <!-- Venue Info -->
                    <div class="col-lg-5">
                        <div class="venue-card">
                            <h4 class="venue-name">SIMON FRASER UNIVERSITY at HARBOUR CENTRE</h4>
                            <p>515 West Hastings Street, Vancouver, British Columbia V6B 5K3</p>
                            <p>Telephone: 778.782.5800 <br> Facsimile: 778.782.7621</p>
                            <p>
                                <strong>Website: </strong>
                                <a href="http://www.sfu.ca/mecs/facilities/harbour-centre.html" target="_blank"
                                    style="color:#00ccff;">Click here</a>
                            </p>
                            <p>
                                For directions to the university:
                                <a href="https://www.google.com/maps/place/Simon+Fraser+University/@49.2843204,-123.1142917,17z/data=!3m1!4b1!4m5!3m4!1s0x548673e7bde5acdf:0x9f179f886a077be4!8m2!3d49.2843204!4d-123.112103"
                                    target="_blank" style="color:#00ccff;">click here</a>
                            </p>
                        </div>
                    </div>
                    <!-- Venue Image -->
                    {{-- <div class="col-lg-4">
                        <div class="venue-image">
                            <img src="https://old.ev4gh.net/wp-content/uploads/2016/10/Simon-university.jpg"
                                class="img-fluid rounded shadow" alt="Simon Fraser University">
                        </div>
                    </div> --}}
                    <!-- Google Map -->
                    <div class="col-lg-7">
                        <div class="venue-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.567636541518!2d-123.11146!3d49.284589399999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486717860837f99%3A0xca38b70b0694419a!2sSimon%20Fraser%20University%20-%20Vancouver%20Campus!5e0!3m2!1sen!2sbd!4v1773327523777!5m2!1sen!2sbd"
                                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
