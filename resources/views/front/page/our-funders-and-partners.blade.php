@extends('front.layout.front-master')
@section('styles')
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #ev4gh-section-partner {
            background: #dfdfdf;
        }

        .partner-box {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px 20px;
            text-align: center;
            height: 100%;
            border: 1px solid #eee;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: 0.3s ease;
        }

        .partner-box img {
            max-height: 70px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .partner-box h6 {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            line-height: 1.4;
        }

        .partner-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Our funders and partners</h2>

                            {{-- <p>Emerging Voices for Global Health (EV4GH) is a collaborative, networked initiative. Its growth and continuity have been made possible through the commitment of organizations that have funded, hosted, and partnered with the program over the years.</p>
<p>We are deeply indebted to the institutions below, whose financial support, in-kind contributions, and strategic collaboration have shaped EV4GH and enabled early-career researchers and advocates from across the world to be heard in global health debates.</p>
<p>EV4GH is supported by its Governance Board, partner institutions, and the secretariat, which is hosted at the BRAC James P Grant School of Public Health, BRAC University, Dhaka, Bangladesh.</p> --}}

                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                        <li>Our funders and partners</li>
                    </ol>
                </div>
            </nav>
        </div>

        <section id="ev4gh-section-video" class="ev4gh-section p-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ev4gh-text-card">
                            <p class="ev4gh-section-text-para">
                            <p>Emerging Voices for Global Health (EV4GH) is a collaborative, networked initiative. Its
                                growth and continuity have been made possible through the commitment of organizations that
                                have funded, hosted, and partnered with the program over the years.</p>
                            <p>We are deeply indebted to the institutions below, whose financial support, in-kind
                                contributions, and strategic collaboration have shaped EV4GH and enabled early-career
                                researchers and advocates from across the world to be heard in global health debates.</p>
                            <p>EV4GH is supported by its Governance Board, partner institutions, and the secretariat, which
                                is hosted at the BRAC James P Grant School of Public Health, BRAC University, Dhaka,
                                Bangladesh.</p>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="ev4gh-section-partner" class="ev4gh-section ev4gh-section-partner p-5">
            <div class="container overflow-hidden">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Key funders and institutional supporters</h2>
                    <p class="text-muted">We gratefully acknowledge the sustained support and partnership of:
                    </p>
                </div>

                <div class="row justify-content-center gy-4">

                    <!-- Partner Box -->
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                            <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/CBD_logo_EN_RGB.jpg') }}"
                                alt="">
                            <h6>Belgian Directorate-General for Development Co-operation (DGD)</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/Mohammad Bin Rashid.png') }}"
                                alt="">
                            <h6>Mohammed Bin Rashid School of Government (MBRSG), Dubai, United Arab Emirates</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/ITM-logo_col_pms.png') }}"
                                alt="">
                            <h6>Institute of Tropical Medicine (ITM), Antwerp, Belgium</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/BRACJPGSPH_New-logo.png') }}"
                                alt="">
                            <h6>BRAC James P Grant School of Public Health, BRAC University, Dhaka, Bangladesh</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/Logo-HSG-Colour-1.svg') }}"
                                alt="">
                            <h6>Health Systems Global (HSG)</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/BMJ- logo.jpeg') }}"
                                alt="">
                            <h6>BMJ Publishing Group Limited</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/Nagasaki University.jpg') }}"
                                alt="">
                            <h6>Nagasaki University (NU), Nagasaki, Japan</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/Liverpool_School_of_Tropical_Medicine_Logo.png') }}"
                                alt="">
                            <h6>Liverpool School of Tropical Medicine (LSTM), University of Liverpool, Liverpool, UK</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/IPH-logo-100px.png') }}"
                                alt="">
                            <h6>Institute of Public Health (IPH), Bengaluru, India</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/Peking University.png') }}"
                                alt="">
                            <h6>Peking University Health Science Centre, Beijing, China</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/UWC_logo.svg.png') }}"
                                alt="">
                            <h6>University of the Western Cape (UWC), Cape Town, South Africa</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/Universidad de Antioquia.png') }}"
                                alt="">
                            <h6>Universidad de Antioquia (UoA), Medellín, Colombia</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/cpi-logo_v_square_696x696_rgb.png') }}"
                                alt="">
                            <h6>Community Partners International (CPI)</h6>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="partner-box">
                             <img class="img-fluid" src="{{ asset('assets/images/about/Logos-Partner Institutes/APHRC-logo.png') }}"
                                alt="">
                            <h6>African Population and Health Research Center (APHRC)</h6>
                        </div>
                    </div>

                </div>





            </div>
        </section>

        <div class="container">
            <div class="row p-5">
                <p>We remain grateful to all individuals and teams within these organisations who have accompanied
                    EV4GH’s journey and contributed to strengthening a more inclusive and equitable global health
                    discourse.</p>

                <p><em>The logos of our funders and partners are displayed below as a visual acknowledgement of their
                        contribution to the EV4GH journey.
                    </em></p>
            </div>

        </div>





    </main>
@endsection

@section('scripts')
    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
