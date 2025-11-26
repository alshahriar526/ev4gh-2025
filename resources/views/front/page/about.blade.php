@extends('front.layout.front-master')
@section('styles')
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /*--------------------------------------------------------------
            # our History
            --------------------------------------------------------------*/
        .main-timeline {
            position: relative
        }

        .main-timeline:before {
            content: "";
            display: block;
            width: 2px;
            height: 100%;
            background: #e3b0af;
            margin: 0 auto;
            position: absolute;
            top: 0;
            left: 0;
            right: 0
        }

        .main-timeline .timeline {
            margin-bottom: 40px;
            position: relative
        }

        .main-timeline .timeline:after {
            content: "";
            display: block;
            clear: both
        }

        .main-timeline .icon {
            width: 18px;
            height: 18px;
            line-height: 18px;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .main-timeline .icon:before,
        .main-timeline .icon:after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.33s ease-out 0s
        }

        .main-timeline .icon:before {
            background: #fff;
            border: 2px solid var(--color-default);
            ;
            left: -3px
        }

        .main-timeline .icon:after {
            border: 2px solid #e3b0af;
            left: 3px
        }

        .main-timeline .timeline:hover .icon:before {
            left: 3px
        }

        .main-timeline .timeline:hover .icon:after {
            left: -3px
        }

        .main-timeline .date-content {
            width: 50%;
            float: left;
            margin-top: 22px;
            position: relative
        }

        .main-timeline .date-content:before {
            content: "";
            width: 36.5%;
            height: 2px;
            background: #e3b0af;
            margin: auto 0;
            position: absolute;
            top: 0;
            right: 10px;
            bottom: 0
        }

        .main-timeline .date-outer {
            width: 125px;
            height: 125px;
            font-size: 16px;
            text-align: center;
            margin: auto;
            z-index: 1
        }

        .main-timeline .date-outer:before,
        .main-timeline .date-outer:after {
            content: "";
            width: 125px;
            height: 125px;
            margin: 0 auto;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            transition: all 0.33s ease-out 0s
        }

        .main-timeline .date-outer:before {
            background: #fff;
            border: 2px solid var(--color-default);
            ;
            left: -6px
        }

        .main-timeline .date-outer:after {
            border: 2px solid #e3b0af;
            left: 6px
        }

        .main-timeline .timeline:hover .date-outer:before {
            left: 6px
        }

        .main-timeline .timeline:hover .date-outer:after {
            left: -6px
        }

        .main-timeline .date {
            width: 100%;
            margin: auto;
            position: absolute;
            top: 27%;
            left: 0
        }

        .main-timeline .month {
            font-size: 18px;
            font-weight: 700
        }

        .main-timeline .year {
            display: block;
            font-size: 30px;
            font-weight: 700;
            color: var(--color-default);
            ;
            line-height: 36px
        }

        .main-timeline .timeline-content {
            width: 50%;
            padding: 20px 0 20px 50px;
            float: right
        }

        .main-timeline .title {
            font-size: 19px;
            font-weight: 700;
            line-height: 24px;
            margin: 0 0 15px 0
        }

        .main-timeline .description {
            margin-bottom: 0
        }

        .main-timeline .timeline:nth-child(2n) .date-content {
            float: right
        }

        .main-timeline .timeline:nth-child(2n) .date-content:before {
            left: 10px
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content {
            padding: 20px 50px 20px 0;
            text-align: right
        }

        @media only screen and (max-width: 991px) {
            .main-timeline .date-content {
                margin-top: 35px
            }

            .main-timeline .date-content:before {
                width: 22.5%
            }

            .main-timeline .timeline-content {
                padding: 10px 0 10px 30px
            }

            .main-timeline .title {
                font-size: 17px
            }

            .main-timeline .timeline:nth-child(2n) .timeline-content {
                padding: 10px 30px 10px 0
            }
        }

        @media only screen and (max-width: 767px) {
            .main-timeline:before {
                margin: 0;
                left: 7px
            }

            .main-timeline .timeline {
                margin-bottom: 20px
            }

            .main-timeline .timeline:last-child {
                margin-bottom: 0
            }

            .main-timeline .icon {
                margin: auto 0
            }

            .main-timeline .date-content {
                width: 95%;
                float: right;
                margin-top: 0
            }

            .main-timeline .date-content:before {
                display: none
            }

            .main-timeline .date-outer {
                width: 110px;
                height: 110px
            }

            .main-timeline .date-outer:before,
            .main-timeline .date-outer:after {
                width: 110px;
                height: 110px
            }

            .main-timeline .date {
                top: 30%
            }

            .main-timeline .year {
                font-size: 24px
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(2n) .timeline-content {
                width: 95%;
                text-align: center;
                padding: 10px 0
            }

            .main-timeline .title {
                margin-bottom: 10px
            }
        }

        /*  Our histroy 2 */
        .our-history-section-2 {
            background: #e4f0ff;
            ;
        }

        .bsb-timeline-7 {
            --bsb-tl-color: var(--bs-primary-bg-subtle);
            --bsb-tl-circle-color: var(--bs-light);
            --bsb-tl-circle-border-color: var(--bs-primary);
            --bsb-tl-indicator-color: var(--bs-white);
            --bsb-tl-circle-size: 16px;
            --bsb-tl-circle-offset: 8px;
            --bsb-tl-circle-border-size: 2px
        }

        .bsb-timeline-7 .timeline {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative
        }

        .bsb-timeline-7 .timeline:after {
            background-color: #f19c9c;
            bottom: 0;
            content: "";
            left: 0;
            margin-left: -1px;
            position: absolute;
            top: 0;
            width: 2px
        }

        @media(min-width: 768px) {
            .bsb-timeline-7 .timeline:after {
                left: 10%
            }
        }

        .bsb-timeline-7 .timeline>.timeline-item {
            margin: 0;
            padding: 0;
            position: relative
        }

        .bsb-timeline-7 .timeline>.timeline-item:after {
            background: var(--bsb-tl-circle-color);
            border: var(--bsb-tl-circle-border-size) solid #c70200;
            border-radius: 50%;
            content: "";
            height: var(--bsb-tl-circle-size);
            left: calc(var(--bsb-tl-circle-offset)*-1);
            position: absolute;
            top: calc(50% - var(--bsb-tl-circle-offset));
            width: var(--bsb-tl-circle-size);
            z-index: 1
        }

        .bsb-timeline-7 .timeline>.timeline-item .timeline-body {
            margin: 0;
            padding: 0;
            position: relative
        }

        .bsb-timeline-7 .timeline>.timeline-item .timeline-meta {
            padding: 0 0 1rem 2.5rem
        }

        .bsb-timeline-7 .timeline>.timeline-item:first-child .timeline-meta {
            padding: 2.5rem 0 1rem 2.5rem
        }

        .bsb-timeline-7 .timeline>.timeline-item .timeline-content {
            padding: 0 0 2.5rem 2.5rem
        }

        .bsb-timeline-7 .timeline>.timeline-item .timeline-meta>div {
            background: var(--color-default);
            min-width: 150px;
            color: #ffffff;
            border: 1px solid var(--color-default);
            padding: 10px 20px !important;
            border-radius: 8px;
        }

        @media(min-width: 768px) {
            .bsb-timeline-7 .timeline>.timeline-item {
                left: 10%;
                width: 90%
            }

            .bsb-timeline-7 .timeline>.timeline-item .timeline-meta {
                display: flex;
                justify-content: flex-end;
                left: -100%;
                margin: 0;
                padding: 0 2.5rem 0 0;
                position: absolute;
                top: calc(50% - 29px);
                width: 100%;
                z-index: 1
            }

            .bsb-timeline-7 .timeline>.timeline-item:first-child .timeline-meta {
                padding: 0 2.5rem 0 0
            }

            /* .bsb-timeline-7 .timeline>.timeline-item .timeline-content {
                    padding: 2.5rem
                } */
            .bsb-timeline-7 .timeline>.timeline-item .timeline-indicator {
                position: relative
            }

            .bsb-timeline-7 .timeline>.timeline-item .timeline-indicator:after {
                border-width: 1px;
                border: 10px solid var(--bsb-tl-indicator-color);
                border-color: transparent var(--bsb-tl-indicator-color) transparent transparent;
                border-left-width: 0;
                content: "";
                left: calc(2.5rem - 10px);
                position: absolute;
                top: calc(50% - var(--bsb-tl-circle-offset));
                z-index: 1
            }
        }

        /* Goals and Objectives */
        .goal-objective-section {}

        .goals-panel {
            height: 100%;
            background: var(--color-default);
            padding: 60px 90px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .goals-panel .panel-title {
            color: #fff;
            font-size: 50px;
            font-weight: 900;
            letter-spacing: 5px;
            text-transform: uppercase;
            margin-bottom: 30px;
            text-align: right;
        }

        .goals-panel .goal-card {
            background: transparent;
            border: 0;
        }

        .goals-panel .card .card-body {
            padding: 10px !important
        }

        .goals-panel .goal-card img {
            width: 80px;
            max-width: 80px;
        }

        .goals-panel .goal-card p {
            color: #fff;
        }

        .goals-panel .goal-card p:last-child,
        .objectives-panel .objectives-card p:last-child {
            margin-bottom: 0 !important;
        }

        .objectives-panel {
            height: 100%;
            background: var(--color-support1);
            padding: 60px 90px;
        }

        .objectives-panel .panel-title {
            color: #fff;
            font-size: 50px;
            font-weight: 900;
            letter-spacing: 5px;
            text-transform: uppercase;
            margin-bottom: 30px;
            text-align: left;
        }

        .objectives-panel .card {
            background: transparent;
            border: 0px solid #fff;
            margin-bottom: 0 !important;
            width: 80%;
        }

        .objectives-panel .card img {
            width: 80px;
            max-width: 80px;
        }

        .objectives-panel .card .card-body {
            padding: 10px !important
        }

        .objectives-panel .card p {
            color: #fff;
            margin: 0;
        }

        h1.panel-title {
            font-size: 28px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 1.5em;
            padding-bottom: 15px;
            position: relative;
        }

        .objectives-panel h1.panel-title:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 5px;
            width: 55px;
            background-color: #fff;
        }

        .goals-panel h1.panel-title:before {
            content: "";
            position: absolute;
            right: 0 !important;
            bottom: 0;
            height: 5px;
            width: 55px;
            background-color: #fff;
        }

        h1.panel-title:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 2px;
            height: 1px;
            width: 95%;
            max-width: 255px;
            background-color: #fff;
        }

        /* activity-achivement-section */
        .activity-achivement-section {}

        .activity-achivement-section .activity-card {
            background-color: #ff9d00;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg stroke='%23000' stroke-width='66.7' stroke-opacity='0.05' %3E%3Ccircle fill='%23ff9d00' cx='0' cy='0' r='1800'/%3E%3Ccircle fill='%23fb8d17' cx='0' cy='0' r='1700'/%3E%3Ccircle fill='%23f47d24' cx='0' cy='0' r='1600'/%3E%3Ccircle fill='%23ed6e2d' cx='0' cy='0' r='1500'/%3E%3Ccircle fill='%23e35f34' cx='0' cy='0' r='1400'/%3E%3Ccircle fill='%23d85239' cx='0' cy='0' r='1300'/%3E%3Ccircle fill='%23cc453e' cx='0' cy='0' r='1200'/%3E%3Ccircle fill='%23be3941' cx='0' cy='0' r='1100'/%3E%3Ccircle fill='%23b02f43' cx='0' cy='0' r='1000'/%3E%3Ccircle fill='%23a02644' cx='0' cy='0' r='900'/%3E%3Ccircle fill='%23901e44' cx='0' cy='0' r='800'/%3E%3Ccircle fill='%23801843' cx='0' cy='0' r='700'/%3E%3Ccircle fill='%236f1341' cx='0' cy='0' r='600'/%3E%3Ccircle fill='%235e0f3d' cx='0' cy='0' r='500'/%3E%3Ccircle fill='%234e0c38' cx='0' cy='0' r='400'/%3E%3Ccircle fill='%233e0933' cx='0' cy='0' r='300'/%3E%3Ccircle fill='%232e062c' cx='0' cy='0' r='200'/%3E%3Ccircle fill='%23210024' cx='0' cy='0' r='100'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .activity-achivement-section .activity-card:hover {
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 800'%3E%3Cg %3E%3Ccircle fill='%23000000' cx='400' cy='400' r='600'/%3E%3Ccircle fill='%23230046' cx='400' cy='400' r='500'/%3E%3Ccircle fill='%232f0052' cx='400' cy='400' r='400'/%3E%3Ccircle fill='%233b075e' cx='400' cy='400' r='300'/%3E%3Ccircle fill='%2348156a' cx='400' cy='400' r='200'/%3E%3Ccircle fill='%23552277' cx='400' cy='400' r='100'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .activity-achivement-section .activity-card .card-body {
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        .activity-achivement-section .activity-card p {
            color: #fff;
        }

        .activity-achivement-section .activity-card p:last-child {
            margin-bottom: 0 !important;
        }

        p.details-below {
            color: var(--color-support1);
        }

        p.details-below {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            grid-template-rows: 16px 0;
            grid-gap: 22px;
            margin: 20px 0;
        }

        p.details-below:after,
        p.details-below:before {
            content: " ";
            display: block;
            border-bottom: 2px solid var(--color-default);
            background-color: #f8f8f8;
        }

        /* impact-recognition-section */
        .impact-recognition-section {
            background-color: #f0f8ff
        }

        .impact-recognition-section p {
            margin-bottom: 30px;
        }

        .impact-recognition-section p.impact-recognition-pera-1 {}

        .impact-recognition-section p.impact-recognition-pera-2 {
            margin-left: 100px;
        }

        .impact-recognition-section p.impact-recognition-pera-3 {
            margin-left: 200px;
        }

        /* future directions section */
        .future-directions-card {
            background: var(--color-support1);
            /* border: 1px solid var(--color-default); */
            margin-bottom: 0 !important;
        }

        .future-directions-card img {
            width: 80px;
            max-width: 80px;
        }

        .future-directions-card .card-body {
            padding: 30px !important
        }

        .future-directions-card .card-body .card-title {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
        }

        .future-directions-card p {
            color: #fff;
            margin: 0;
        }

        .future-directions-card p:last-child {
            margin: 0 !important;
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
                            <h2>About Us</h2>
                            <p>The Emerging Voices program is the initiative of the Institute of Tropical Medicine in
                                Antwerp, and it aims at empowering health researchers from the Global South by providing
                                intensive skills training and facilitating their participation in a global health
                                conference. EV4GH has a globally representative governing board and a secretariat.</p>
                        </div>

                        {{-- <div class="col-lg-8 text-center">
                            <h2>The Emerging Voices for Global Health (EV4GH) Story</h2>
                            <p>What began at the Institute of Tropical Medicine in Antwerp has grown into one of the most
                                dynamic, community-driven leadership platforms in global health. Built today by its vibrant
                                alumni and partner institutions, the program was shaped with a clear purpose: <b>to amplify the
                                voices of early-career health professionals from the Global South</b> and place them at the
                                centre of global debates.
                            <p>
                            <p>Since its launch in 2010, EV4GH has travelled the world with <b>9 editions across four
                                continents</b>, each aligned with major global health gatherings. The journey started in
                                Montreux, Switzerland, alongside the 1st Global Symposium on Health Systems Research. From
                                there, it moved to Beijing (2012), Cape Town for ICASA (2013), then again to Cape Town for
                                HSR2014, followed by Vancouver (2016), Liverpool (2018), the virtual Dubai-hosted edition
                                (2020), Bogotá (2022), and most recently, Nagasaki (2024) for the 8th Global Symposium on
                                Health Systems Research.
                            </p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="our-history-section" class="our-history-section">
            <div class="container-fluid p-5">
                <div class="row mb-5">
                    <div class="col-md-12 justify-item-center">
                        <div class="section-heading">
                            <h1><span>Our</span> History</h1>
                        </div>
                    </div>
                </div>
                <div class="main-timeline">
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2010</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">To give people from the Global South the chance to present their
                                research and policy agenda on the global scene, ITM decided to encourage them to have
                                their voices heard. Through an essay competition 50 Emerging Voices were selected to
                                present their ideas on how to progress towards universal health coverage (UHC), the
                                topic of the 1st Global Symposium.</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2012</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">The WHO Alliance of Health Policy and Systems Research encouraged an
                                Emerging Voices 2012 track (EV2012) in view of the success of EV2010. The selection
                                process, which was integrated in the Second Global Symposium on Health Systems Research
                                calls for abstracts. We received 300 applications, of which 50 EV 2012s were selected.
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2013</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">The EV4GH 2013 edition was linked to the AIDS in Africa Conference
                                (ICASA), ‘Now more than ever: targeting zero’ in Cape Town, South Africa, from 7 to 11
                                December 2013; it was hosted by the School of Public Health, and Centre for Research in
                                HIV and AIDS at the University of the Western Cape, South Africa.</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2014</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">The EV4GH 2014 track linked up with the Third Global Health
                                Symposium on Health Systems Research, Science and Practice of people-centered health
                                systems, in Cape Town, South Africa, from mid-September to 3 October 2014.</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">EV2016 was held in close association and partnership with the fourth
                                global symposium on health systems research, 14-18 November 2016 in Vancouver, themed,
                                ‘Resilient and responsive health systems for a changing world.’</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2018</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">EV2018 was held in Liverpool, in close association and partnership
                                with the fifth global symposium on health systems research from 8 – 12 October 2018. The
                                theme for the symposium was ‘Advancing Health Systems for all in the SDG era’. For the
                                EV2018 venture, there were two tracks one for researchers involved in health policy and
                                system research (researcher track) and the other for health professionals, health
                                journalists, activists, decision or policy-makers, and/or other health systems actors
                                (the ‘change agents’ track).</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2020</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">Navigating through the challenges posed by COVIS-19 pandemic in
                                2020, the EV2020 venture took place in 2021 in Dubai in November 2021 with support from
                                Mohammed Bin Rashid School of Government, Dubai. 14 new Emerging Voices from around the
                                world travelled to Dubai to attend the EV4GH 2020 edition in person, with others joined
                                remotely across time differences and hemispheres.</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2022</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">The 8th edition of the Emerging Voices for Global Health (EV4GH)
                                program, EV2022, was held in Colombia, in sync with the Seventh Global Symposium on
                                Health Systems Research (HSR2022) in Bogota (31 Oct-4 Nov). 60 people, including
                                participants and facilitators of 31 different nationalities, attended and facilitated
                                the program.</p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">EV4GH</span>
                                    <span class="year">2024</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description">The 9th edition of the EV4GH program, EV4GH 2024, was held in Nagasaki, Japan; in sync with the 8th Global Symposium on Health Systems Research (HSR 2024) in nagasaki, Japan (18 to 22 November 2024). Around 60 people, including participants and facilitators of 31 different nationalities, attended and facilitated the program.
</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class=" our-history-section-2 bsb-timeline-7  py-3 py-md-5 py-xl-8">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <ul class="timeline">
                                <li class="timeline-item">
                                    <div class="timeline-body">
                                        <div class="timeline-meta">
                                            <div class="d-inline-flex flex-column px-2 py-1   text-md-end">
                                                <span>EV</span>
                                                <span class="fw-bold">2010</span>
                                            </div>
                                        </div>
                                        <div class="timeline-content timeline-indicator">
                                            <div class="card border-0 shadow">
                                                <div class="card-body p-xl-4">
                                                    <p class="card-text m-0">To give people from the Global South the
                                                        chance to present their research and policy agenda on the global
                                                        scene, ITM decided to encourage them to have their voices heard.
                                                        Through an essay competition 50 Emerging Voices were selected to
                                                        present their ideas on how to progress towards universal health
                                                        coverage (UHC), the topic of the 1st Global Symposium.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-body">
                                        <div class="timeline-meta">
                                            <div class="d-inline-flex flex-column px-2 py-1   text-md-end">
                                                <span>EV</span>
                                                <span class="fw-bold">2012</span>
                                            </div>
                                        </div>
                                        <div class="timeline-content timeline-indicator">
                                            <div class="card border-0 shadow">
                                                <div class="card-body p-xl-4">
                                                    <p class="card-text m-0">The WHO Alliance of Health Policy and Systems
                                                        Research encouraged an Emerging Voices 2012 track (EV2012) in view
                                                        of the success of EV2010. The selection process, which was
                                                        integrated in the Second Global Symposium on Health Systems Research
                                                        calls for abstracts. We received 300 applications, of which 50 EV
                                                        2012s were selected.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-body">
                                        <div class="timeline-meta">
                                            <div class="d-inline-flex flex-column px-2 py-1   text-md-end">
                                                <span>EV</span>
                                                <span class="fw-bold">2013</span>
                                            </div>
                                        </div>
                                        <div class="timeline-content timeline-indicator">
                                            <div class="card border-0 shadow">
                                                <div class="card-body p-xl-4">
                                                    <p class="card-text m-0">The EV4GH 2013 edition was linked to the AIDS
                                                        in Africa Conference (ICASA), ‘Now more than ever: targeting zero’
                                                        in Cape Town, South Africa, from 7 to 11 December 2013; it was
                                                        hosted by the School of Public Health, and Centre for Research in
                                                        HIV and AIDS at the University of the Western Cape, South Africa.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-body">
                                        <div class="timeline-meta">
                                            <div class="d-inline-flex flex-column px-2 py-1   text-md-end">
                                                <span>EV</span>
                                                <span class="fw-bold">2014</span>
                                            </div>
                                        </div>
                                        <div class="timeline-content timeline-indicator">
                                            <div class="card border-0 shadow">
                                                <div class="card-body p-xl-4">
                                                    <p class="card-text m-0">The EV4GH 2014 track linked up with the Third
                                                        Global Health Symposium on Health Systems Research, Science and
                                                        Practice of people-centered health systems, in Cape Town, South
                                                        Africa, from mid-September to 3 October 2014.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-body">
                                        <div class="timeline-meta">
                                            <div class="d-inline-flex flex-column px-2 py-1   text-md-end">
                                                <span>EV</span>
                                                <span class="fw-bold">2016</span>
                                            </div>
                                        </div>
                                        <div class="timeline-content timeline-indicator">
                                            <div class="card border-0 shadow">
                                                <div class="card-body p-xl-4">
                                                    <p class="card-text m-0">EV2016 was held in close association and
                                                        partnership with the fourth global symposium on health systems
                                                        research, 14-18 November 2016 in Vancouver, themed, ‘Resilient and
                                                        responsive health systems for a changing world.’</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-body">
                                        <div class="timeline-meta">
                                            <div class="d-inline-flex flex-column px-2 py-1   text-md-end">
                                                <span>EV</span>
                                                <span class="fw-bold">2018</span>
                                            </div>
                                        </div>
                                        <div class="timeline-content timeline-indicator">
                                            <div class="card border-0 shadow">
                                                <div class="card-body p-xl-4">
                                                    <p class="card-text m-0">EV2018 was held in Liverpool, in close
                                                        association and partnership with the fifth global symposium on
                                                        health systems research from 8 – 12 October 2018. The theme for the
                                                        symposium was ‘Advancing Health Systems for all in the SDG era’. For
                                                        the EV2018 venture, there were two tracks one for researchers
                                                        involved in health policy and system research (researcher track) and
                                                        the other for health professionals, health journalists, activists,
                                                        decision or policy-makers, and/or other health systems actors (the
                                                        ‘change agents’ track).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section> -->

        <section id="ev4gh-section-video" class="ev4gh-section left ev4gh-section-video ">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="ev4gh-text-card">
                            <!-- <h3 class="ev4gh-section-title">10th Anniversary of EV4GH</h3> -->
                            <img class="ten-anniversary-logo" src="assets/images/10th-Anniversary.png" alt="">
                            <p class="ev4gh-section-text-para">Emerging Voices for Global Health (EV4GH) celebrates its
                                10th anniversary. Here is a glimpse at the decade past. 6 ventures of EV4GH have been
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
        </section>
        <section id="goal-objective-section" class="goal-objective-section">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="goals-panel">
                            <h1 class="panel-title ">Goals</h1>
                            <div class="card goal-card mb-3" style="max-width: 80%;">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <img src="assets/images/about/goal.png" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-10 d-flex align-items-center">
                                        <div class="card-body">
                                            <p class="card-text">To empower health researchers from the Global South
                                                with skills and knowledge to enhance their participation and
                                                contribution to global health discourse.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card goal-card mb-3" style="max-width: 80%;">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <img src="assets/images/about/goal.png" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-10 d-flex align-items-center">
                                        <div class="card-body">
                                            <p class="card-text">To promote the representation and active involvement
                                                of health researchers from the Global South in global health discourse
                                                and decision-making processes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="objectives-panel">
                            <h1 class="panel-title">Objectives</h1>
                            <div class="card goal-card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <img src="assets/images/about/objective.png" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-10 d-flex align-items-center">
                                        <div class="card-body">
                                            <p class="card-text">Provide intensive skills training to selected Emerging
                                                Voices.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card goal-card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <img src="assets/images/about/objective.png" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-10 d-flex align-items-center">
                                        <div class="card-body">
                                            <p class="card-text">Facilitate their participation in a global health
                                                conference to enable them to present their research and policy agenda on
                                                the global scene.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card goal-card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <img src="assets/images/about/objective.png" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-10 d-flex align-items-center">
                                        <div class="card-body">
                                            <p class="card-text">Foster a globally representative governing board and
                                                secretariat for the Emerging Voices program.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card goal-card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <img src="assets/images/about/objective.png" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-10 d-flex align-items-center">
                                        <div class="card-body">
                                            <p class="card-text">Encourage health researchers from the Global South to
                                                share their research and policy perspectives and engage in collaborative
                                                activities with researchers from other regions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="activity-achivement-section" class="activity-achivement-section py-5">
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-md-12 justify-item-center">
                        <div class="section-heading">
                            <h1>Activities <span>and</span> Achievements</h1>
                            <p class="my-3">Since its inception, Emerging Voices has trained and mentored over 300
                                health researchers and professionals from more than 70 countries in the Global South.
                                The program has provided them with the opportunity to develop their research,
                                communication, and leadership skills, and to network with like-minded peers and experts
                                in the field of global health.</p>
                            <p class="details-below">Some of the key activities and achievements of the program
                                include:</p>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 justify-content-center g-4">
                    <div class="col">
                        <div class="card activity-card h-100">
                            <div class="card-body">
                                <p class="card-text">Organizing an annual workshop to provide intensive training and
                                    mentorship for Emerging Voices participants, covering topics such as research
                                    methodology, scientific writing, presentation skills, and advocacy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card activity-card h-100">
                            <div class="card-body">
                                <p class="card-text">Facilitating the formation of alumni networks to support continued
                                    learning, collaboration, and advocacy among Emerging Voices participants and
                                    graduates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card activity-card h-100">
                            <div class="card-body">
                                <p class="card-text">Engaging with policymakers, funders, and other stakeholders to
                                    advocate for greater investment in research and capacity building in the Global
                                    South, and to ensure that the voices and perspectives of those most affected by
                                    health inequities are heard and acted upon.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card activity-card h-100">
                            <div class="card-body">
                                <p class="card-text">Providing travel scholarships and conference fees for participants
                                    to attend the Global Symposium on Health Systems Research and other international
                                    conferences, allowing them to present their research and connect with potential
                                    collaborators and mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card activity-card h-100">
                            <div class="card-body">
                                <p class="card-text">Contributing to policy and research agendas by publishing opinion
                                    pieces, research articles, and policy briefs on topics related to global health and
                                    health systems strengthening.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="impact-recognition-section" class="impact-recognition-section py-5">
            <div class="container p-4">
                <div class="row mb-3">
                    <div class="col-md-12 justify-item-center">
                        <div class="section-heading">
                            <h1>Impact <span>and</span> Recognition</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="impact-recognition-pera-1">The Emerging Voices program has had a significant impact
                            on the careers of participants and the wider field of global health research. Since its
                            inception, the program has trained over 300 researchers from around the world, providing
                            them with skills and knowledge that they can apply to their work. Many Emerging Voices
                            alumni have gone on to become leaders in the field, contributing to the development of new
                            research agendas and policies.
                        </p>
                        <p class="impact-recognition-pera-2">The program has also been recognized for its contribution
                            to global health research. In 2017, the Emerging Voices program was awarded the Partnerships
                            for Global Health Award by the Global Health Council. The award recognizes the program’s
                            commitment to building partnerships and collaborations across borders and its contributions
                            to advancing global health research and policy.</p>
                        <p class="impact-recognition-pera-3">Overall, the Emerging Voices program has made a
                            significant contribution to the field of global health research, providing a platform for
                            researchers from the Global South to have their voices heard and to contribute to the
                            development of new ideas and policies.</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="future-directions-section" class="future-directions-section py-5">
            <div class="container p-4">
                <div class="row ">
                    <div class="col-md-12 justify-item-center">
                        <div class="section-heading">
                            <h1>Future <span>Directions</span></h1>
                            <p class="details-below">The Emerging Voices program has already achieved a significant
                                impact in empowering health researchers from the Global South and promoting their
                                participation in global health conversations. Looking ahead, the program aims to build
                                on its successes and continue to expand its reach and impact in the following ways:</p>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 justify-content-center g-4 my-4">
                    <div class="col">
                        <div class="card future-directions-card activity-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Increasing the number of participants:</h5>
                                <p class="card-text">The program aims to increase the number of participants each year
                                    so that more health researchers from the Global South can benefit from the skills
                                    training and global exposure provided by the program.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  future-directions-card activity-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Expanding the program’s reach:</h5>
                                <p class="card-text">The program aims to expand its reach beyond the current focus on
                                    the Global South, to include researchers from other parts of the world facing
                                    similar health challenges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  future-directions-card activity-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Deepening the impact of the program:</h5>
                                <p class="card-text">The program aims to deepen its impact by developing a robust
                                    alumni network of Emerging Voices who can serve as mentors and role models for
                                    future participants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card future-directions-card activity-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Continuing to advocate for greater inclusion and equity in
                                    global health:</h5>
                                <p class="card-text">The program will continue to advocate for greater inclusion and
                                    equity in global health conversations and work towards dismantling the structural
                                    barriers that prevent health researchers from the Global South from fully
                                    participating in these conversations.</p>
                            </div>
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
@endsection
