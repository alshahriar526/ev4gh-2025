@extends('front.layout.front-master')
@section('styles')
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Make the header taller for event style */
        .breadcrumbs .page-header {
            padding: 140px 0;
            background-size: cover;
            background-position: center;
            position: relative;
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
    </style>
@endsection
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs position-relative">
            <!-- Particle Background -->
            <div id="particles-js"></div>
            <div class="page-header d-flex align-items-center" style="background-color: #3ba4d7;">
                <div class="container position-relative header-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Call for Applications</h2>
                            <p>Emerging Voices for Global Health (EV4GH) 2026</p>
                            <span>Linked to the 9th Global Health Symposium on Health Systems Research (HSR 2026) in</span>
                            <br>
                            <span>Dubai, UAE, November 2026</span>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                        <li>Call for Applications 2026</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                
                <div class="row">
                    <div class="col-md-3">
                        <h1><span>What</span> is the Emerging Voices for Global Health program? History</h1>
                    </div>
                    <div class="col-md-9">
                        <p>Emerging Voices for Global Health (EV4GH) is an innovative multi-partner blended training program
                            for promising and emerging health policy & systems researchers, decision-makers,
                            knowledge-brokers, implementers and other health system actors with the passion and potential to
                            become influential global health voices and global/ local change makers. EV4GH coaches Emerging
                            Voices (EVs) to participate in global health platforms, raise their voices in scientific and
                            policy debates, contribute to solving global health problems and improving health conditions.
                            The EV4GH program is managed by an internationally representative governance committee
                            consisting of EV alumni elected by previous EV4GH participants and several invited (liaison)
                            members from EV partner institutes. EV4GH became a Thematic Working Group (TWG) of Health
                            Systems Global (HSG) in 2015 and was reconfirmed as a TWG in 2021 and 2025.</p>
                        <p>The Institute of Tropical Medicine in Antwerp first initiated the Emerging Voices program.
                            Currently, this is largely an alumni and partner institutes-driven initiative with an aim to
                            empower health professionals particularly from the Global South by providing intensive skills
                            training and facilitating their participation in global health events. Since its inception in
                            2010, a total of eight EV4GH training programs were organized, all linked to the biannual
                            international events of the Global Symposium on Health Systems Research and other regional and
                            international events. The first edition of the EV4GH program (2010) was conducted in conjunction
                            with the 1st Global Symposium on Health Systems Research in Montreux, Switzerland. The
                            subsequent editions were linked to the 2nd Global Symposium on Health Systems Research in
                            Beijing, China (2012); the AIDS in Africa Conference (ICASA) in Cape Town, South Africa (2013);
                            the 3rd, 4th and 5th Global Symposium on Health Systems Research in Cape Town, South Africa
                            (2014), Vancouver, Canada (2016), and Liverpool, UK (2018), the (virtual) 6th Global Symposium
                            on Health Systems Research in Dubai, UAE (2020) and the 7th Global Symposium on Health Systems
                            Research in Bogotá, Colombia (2022), 8th Global Symposium on Health Systems Research in
                            Nagasaki, Japan (2024). See the EV4GH website for more information on previous editions. Until
                            now, 365 EVs from over 70 countries have participated in the EV4GH program. Many EVs are now in
                            different leadership positions in their countries, regions, and globally.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-3">
                        <h1>What is the EV4GH 2026 venture?</h1>
                    </div>
                    <div class="col-md-9">
                        <p>The EV4GH 2026 venture aims to expand the global network with new Emerging Voices from across the
                            world, specifically, historically underrepresented countries and regions. The 2026 call comes at
                            a moment when global health is shaped by overlapping crises that undermine hard-won gains and
                            expose the limits of established expertise. We are seeking applicants with diverse experiential
                            and disciplinary backgrounds who can bring grounded, context-sensitive perspectives and who are
                            prepared to question prevailing assumptions in order to reimagine how global health problems are
                            framed and addressed. </p>
                        <p>The venture is a blended learning program and consists of a 4-week distance learning phase,
                            followed by a 2-week face-to-face phase held prior to the 9th Global Symposium on Health Systems
                            Research to be held in Dubai, United Arab Emirates (UAE), in November 2026. It uses innovative
                            methods and activities to enable emerging global health change agents, including health systems
                            and policy researchers, policymakers and implementers, practitioners and other actors to not
                            only to elevate emerging voices but to support them in generating concrete ideas for reform and
                            practical solutions to persistent global health challenges.</p>
                        <p>In addition, the global EV alumni and facilitator network provides opportunities for networking
                            and learning across contexts and regions. After the venture, EVs become members of the EV4GH
                            thematic working group and can then join other thematic working groups of HSG.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/EV4GH-2026-Timeline.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h2>Stages of EV4GH 2026 venture (dates may be subject to change )</h2>
                        <ul>
                            <li>Mid-November 2025: Call for applications launch
                            </li>
                            <li>20 March 2026: Deadline for applications (11 pm GMT +6)
                            </li>
                            <li>21 March - 31 May 2026: Review and Selection of new EVs
                            </li>
                            <li>June - July 2026: Notification of acceptance to the program
                            </li>
                            <li>September - October 2026: E-coaching and distance learning phase</li>
                            <li>Two weeks before the HSR2026 symposium: Face-to-face phase in Dubai, UAE. This will include
                                scientific presentations, networking and communication skills, content training, and field
                                visit to local health system facilities in Dubai, UAE</li>
                            <li>Last day of the Face-to-face training: Emerging researchers and other changemakers’
                                pre-conference (/TWG event)</li>
                            <li>Early November 2026: Participation in the 9th Global Symposium on Health Systems Research,
                                Dubai, UAE (HSR 2026 dates will be announced soon)</li>
                            <li>The day after the HSR2026 symposium: Wrap-up session focusing on emerging beyond Dubai, UAE
                            </li>
                            <li>Beyond November 2026: Participation in the EV4GH network (and other HSG thematic working
                                groups) with other emerging researchers, professionals, peers, senior researchers,
                                policymakers, and experts in health systems and global health. Some of the activities of the
                                EV4GH network include regular discussion and information sharing in the Google group;
                                webinars; regional meetings; residencies; blog writing etc.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-8">
                        <h2>What does the EV2026 venture offer to participants?</h2>
                        <ul>
                            <li>A structured space for critical discussions around the current global health agenda,
                                including global health reform, power and politics, and other related topics through
                                exchanges with senior global health experts and peers, leading to the co-production of
                                solution-oriented outputs such as reform proposals.
                            </li>
                            <li>Practical training on power-sensitive stakeholder engagement, leadership, diplomacy,
                                communication and dissemination, and policy advocacy relevant to emerging global health
                                professionals.</li>
                            <li>Access to global health networks, including 400+ EV alumni and institutional partners
                            </li>
                            <li>High-level mentorships from leading global health actors.
                            </li>
                            <li>Attendance at the 9th Global Symposium on Health Systems Research and Health Systems Global
                                (HSG) membership.
                            </li>
                            <li>Present and engage in a pre-conference with invited senior researchers and policymakers.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Who is eligible to apply?</h2>
                        <p>The 2026 venture will accept applications through two application tracks: - </p>
                        <ul>
                            <li>Track 1) Researchers involved in health policy and systems research (researchers track), and
                            </li>
                            <li>Track 2) Health professionals, activists, policymakers, knowledge brokers, health
                                journalists, and other health system actors (other health system professional track).
                            </li>
                        </ul>
                        <p>Applicants may apply to only one track. Either the researcher track or the non-research health
                            professional track. This helps ensure that each cohort reflects distinct yet complementary
                            perspectives.
                        </p>
                        <p>In addition, all applicants must have been born on or after 1st January 1986.
                        </p>
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
