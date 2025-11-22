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

        .about-text {
            padding-right: 50px;
            text-align: justify;
        }

        .about-sec-title {
            font-size: 24px;
            color: var(--color-default);
            font-family: 'nerissemibold';
            margin-bottom: 20px;
        }

        .about-text p {
            font-family: var(--text-font);
            font-size: 18px !important;
            font-weight: 300;
            line-height: 30px;
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
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2 class="about-sec-title">Whatis the Emerging Voices for Global Health program? </h2>
                            <p>Emerging Voices for Global Health (EV4GH) is an innovative multi-partner blended training
                                program
                                for promising and emerging health policy & systems researchers, decision-makers,
                                knowledge-brokers, implementers and other health system actors with the passion and
                                potential to
                                become influential global health voices and global/ local change makers. EV4GH coaches
                                Emerging
                                Voices (EVs) to participate in global health platforms, raise their voices in scientific and
                                policy debates, contribute to solving global health problems and improving health
                                conditions.
                                The EV4GH program is managed by an internationally representative governance committee
                                consisting of EV alumni elected by previous EV4GH participants and several invited (liaison)
                                members from EV partner institutes. EV4GH became a Thematic Working Group (TWG) of Health
                                Systems Global (HSG) in 2015 and was reconfirmed as a TWG in 2021 and 2025.</p>
                            <p>The Institute of Tropical Medicine in Antwerp first initiated the Emerging Voices program.
                                Currently, this is largely an alumni and partner institutes-driven initiative with an aim to
                                empower health professionals particularly from the Global South by providing intensive
                                skills
                                training and facilitating their participation in global health events. Since its inception
                                in
                                2010, a total of eight EV4GH training programs were organized, all linked to the biannual
                                international events of the Global Symposium on Health Systems Research and other regional
                                and
                                international events. The first edition of the EV4GH program (2010) was conducted in
                                conjunction
                                with the 1st Global Symposium on Health Systems Research in Montreux, Switzerland. The
                                subsequent editions were linked to the 2nd Global Symposium on Health Systems Research in
                                Beijing, China (2012); the AIDS in Africa Conference (ICASA) in Cape Town, South Africa
                                (2013);
                                the 3rd, 4th and 5th Global Symposium on Health Systems Research in Cape Town, South Africa
                                (2014), Vancouver, Canada (2016), and Liverpool, UK (2018), the (virtual) 6th Global
                                Symposium
                                on Health Systems Research in Dubai, UAE (2020) and the 7th Global Symposium on Health
                                Systems
                                Research in Bogotá, Colombia (2022), 8th Global Symposium on Health Systems Research in
                                Nagasaki, Japan (2024). See the EV4GH website for more information on previous editions.
                                Until
                                now, 365 EVs from over 70 countries have participated in the EV4GH program. Many EVs are now
                                in
                                different leadership positions in their countries, regions, and globally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section" style="background:#f0f6f8">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2 class="about-sec-title">What is the EV4GH 2026 venture?</h2>
                            <p>The EV4GH 2026 venture aims to expand the global network with new Emerging Voices from across
                                the
                                world, specifically, historically underrepresented countries and regions. The 2026 call
                                comes at
                                a moment when global health is shaped by overlapping crises that undermine hard-won gains
                                and
                                expose the limits of established expertise. We are seeking applicants with diverse
                                experiential
                                and disciplinary backgrounds who can bring grounded, context-sensitive perspectives and who
                                are
                                prepared to question prevailing assumptions in order to reimagine how global health problems
                                are
                                framed and addressed. </p>
                            <p>The venture is a blended learning program and consists of a 4-week distance learning phase,
                                followed by a 2-week face-to-face phase held prior to the 9th Global Symposium on Health
                                Systems
                                Research to be held in Dubai, United Arab Emirates (UAE), in November 2026. It uses
                                innovative
                                methods and activities to enable emerging global health change agents, including health
                                systems
                                and policy researchers, policymakers and implementers, practitioners and other actors to not
                                only to elevate emerging voices but to support them in generating concrete ideas for reform
                                and
                                practical solutions to persistent global health challenges.</p>
                            <p>In addition, the global EV alumni and facilitator network provides opportunities for
                                networking
                                and learning across contexts and regions. After the venture, EVs become members of the EV4GH
                                thematic working group and can then join other thematic working groups of HSG.</p>
                        </div>
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
                        <div class="about-text ms-5">
                            <h2 class="about-sec-title">Stages of EV4GH 2026 venture (dates may be subject to change )</h2>
                            <ul class="ev-check-list">
                                <li><i class="fa fa-check-circle"></i>2025: Call for applications launch
                                </li>
                                <li><i class="fa fa-check-circle"></i>20 March 2026: Deadline for applications (11 pm GMT
                                    +6)
                                </li>
                                <li><i class="fa fa-check-circle"></i>21 March - 31 May 2026: Review and Selection of new
                                    EVs
                                </li>
                                <li><i class="fa fa-check-circle"></i>June - July 2026: Notification of acceptance to the
                                    program
                                </li>
                                <li><i class="fa fa-check-circle"></i>September - October 2026: E-coaching and distance
                                    learning phase</li>
                                <li><i class="fa fa-check-circle"></i>Two weeks before the HSR2026 symposium: Face-to-face
                                    phase in Dubai, UAE. This will
                                    include
                                    scientific presentations, networking and communication skills, content training, and
                                    field
                                    visit to local health system facilities in Dubai, UAE</li>
                                <li><i class="fa fa-check-circle"></i>Last day of the Face-to-face training: Emerging
                                    researchers and other changemakers’
                                    pre-conference (/TWG event)</li>
                                <li><i class="fa fa-check-circle"></i>Early November 2026: Participation in the 9th Global
                                    Symposium on Health Systems
                                    Research,
                                    Dubai, UAE (HSR 2026 dates will be announced soon)</li>
                                <li><i class="fa fa-check-circle"></i>The day after the HSR2026 symposium: Wrap-up session
                                    focusing on emerging beyond Dubai,
                                    UAE
                                </li>
                                <li><i class="fa fa-check-circle"></i>Beyond November 2026: Participation in the EV4GH
                                    network (and other HSG thematic working
                                    groups) with other emerging researchers, professionals, peers, senior researchers,
                                    policymakers, and experts in health systems and global health. Some of the activities of
                                    the
                                    EV4GH network include regular discussion and information sharing in the Google group;
                                    webinars; regional meetings; residencies; blog writing etc.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section" style="background:#f0f6f8">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2 class="about-sec-title">What does the EV2026 venture offer to participants?</h2>
                            <ul class="ev-check-list">
                                <li><i class="fa fa-check-circle"></i>A structured space for critical discussions around the
                                    current global health agenda,
                                    including global health reform, power and politics, and other related topics through
                                    exchanges with senior global health experts and peers, leading to the co-production of
                                    solution-oriented outputs such as reform proposals.
                                </li>
                                <li><i class="fa fa-check-circle"></i>Practical training on power-sensitive stakeholder
                                    engagement, leadership, diplomacy,
                                    communication and dissemination, and policy advocacy relevant to emerging global health
                                    professionals.</li>
                                <li><i class="fa fa-check-circle"></i>Access to global health networks, including 400+ EV
                                    alumni and institutional partners
                                </li>
                                <li><i class="fa fa-check-circle"></i>High-level mentorships from leading global health
                                    actors.
                                </li>
                                <li><i class="fa fa-check-circle"></i>Attendance at the 9th Global Symposium on Health
                                    Systems Research and Health Systems
                                    Global
                                    (HSG) membership.
                                </li>
                                <li><i class="fa fa-check-circle"></i>Present and engage in a pre-conference with invited
                                    senior researchers and policymakers.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-history-section" class="our-history-section">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2 class="about-sec-title">Who is eligible to apply?</h2>
                            <p>The 2026 venture will accept applications through two application tracks: -</p>
                            <ul class="ev-check-list">
                                <li><i class="fa fa-check-circle"></i>Track 1) Researchers involved in health policy and
                                    systems research (researchers track), and</li>
                                <li><i class="fa fa-check-circle"></i>Track 2) Health professionals, activists,
                                    policymakers, knowledge brokers, health journalists, and other health system actors
                                    (other health system professional track).</li>
                            </ul>
                            <p>Applicants may apply to only one track. Either the researcher track or the non-research
                                health professional track. This helps ensure that each cohort reflects distinct yet
                                complementary perspectives.</p>
                            <p>In addition, all applicants must have been born on or after 1st January 1986.</p>
                            <h3>Application Track 1: Researchers’ track</h3>
                            <p>This track aims to attract applications from emerging researchers involved in health policy
                                and systems research. Applicants must also submit an abstract for the 9th Global Symposium
                                on Health Systems Research, Dubai, United Arab Emirates (UAE) and have the following:</p>
                            <ul class="ev-check-list">
                                <li><i class="fa fa-check-circle"></i>Early (2-5 years work experience) to Mid (5-10 years
                                    work experience) career professionals</li>
                                <li><i class="fa fa-check-circle"></i>A Master’s degree in health or a health-related field,
                                    or be enrolled in a doctoral-level program in health or a health-related field</li>
                                <li><i class="fa fa-check-circle"></i>Demonstrate active involvement in health policy and
                                    systems research at the local, national, or global level</li>
                            </ul>
                            <h3>Application Track 2: Other health system professionals track</h3>
                            <p>This track targets other emerging health professionals, activists, policymakers, knowledge
                                brokers, health journalists, and other professionals working in health systems. Applicants
                                must fulfill all of the following:</p>
                            <ul class="ev-check-list">
                                <li><i class="fa fa-check-circle"></i>Early (2-5 years work experience) or mid (5-10 years
                                    work experience) career professionals</li>
                                <li><i class="fa fa-check-circle"></i>A bachelor’s degree</li>
                                <li><i class="fa fa-check-circle"></i>One of the following:
                                    <ul class="ev-check-list">
                                        <li><i class="fa fa-check-circle"></i>Demonstrate active involvement in an
                                            implementation or practitioner or advocacy or decision-making role within health
                                            services or a health system, OR</li>
                                        <li><i class="fa fa-check-circle"></i>Have experience in strengthening health
                                            systems within their local/national health systems as an activist, health
                                            journalist, or patient advocate or otherwise be involved in advancing health
                                            systems strengthening, health equity and social justice in their setting</li>
                                    </ul>
                                </li>
                            </ul>
                            <h3>Note::</h3>
                            <ul class="ev-check-list">
                                <li><i class="fa fa-check-circle"></i>The EV4GH venture is in English. Participants need to
                                    have a reasonable command of the English language (written and spoken) to participate.
                                    All documents needed for the application should be in English (or have English
                                    translation (see below)).</li>
                                <li><i class="fa fa-check-circle"></i>Focus will be on applicants from low- and
                                    middle-income countries (LMICs). Candidates from high-income countries are also welcome
                                    to apply if they have demonstrable relevant experience in LMICs, or are currently
                                    working with marginalized groups on health equity issues in any country. Please see
                                        the Scholarship details at the end of the call.</li>
                                <li><i class="fa fa-check-circle"></i>Accepted participants should be able to participate in
                                    the training program in full. This includes participation and presence in both the
                                    distance e-learning phase and the face-to-face phase in Dubai, United Arab Emirates.
                                    Applicants who cannot participate in full and can undertake only part of the program
                                    will not be eligible to participate.</li>
                                <li><i class="fa fa-check-circle"></i>For this venture, we encourage participants from the
                                    Eastern Mediterranean region (EMRO) and countries underrepresented in the EV network to
                                    apply.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Application Materials Section ======= -->
<!-- ======= Application Materials, Selection, and Scholarship Section ======= -->
<section id="application-materials" class="our-history-section">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="about-text">

                    <h2 class="about-sec-title">Application materials and process</h2>

                    <h3>Application submission materials for track 1: Researchers’ track</h3>
                    <p>Abstract: Please follow the HSR2026 abstract submission guidelines. If you submit multiple abstracts to HSR2026, please add only one to the EV2026 application.</p>
                    <p>Short portfolio: The portfolio should include,</p>
                    <ul class="ev-check-list">
                        <li><i class="fa fa-check-circle"></i>A short CV: Personal details, Education, Relevant professional experience. If you are submitting a written document, the CV should not be more than two pages.</li>
                        <li><i class="fa fa-check-circle"></i>A short motivation statement: Explanation of what the EV program means to you and how it will contribute to your professional development. If you are submitting a written document, the motivation letter should be no more than 250 words.</li>
                        <li><i class="fa fa-check-circle"></i>A short concept note: What global health problem are you more interested in (linked to the EV2026 themes) and how do you envision addressing it? If you are submitting a written document, it should be within 500 words.</li>
                    </ul>
                    <p>We encourage you to be innovative in presenting your portfolio. For example, you could present it as a website, a short 3-minute video, PowerPoint slides, or any other creative visual materials.</p>
                    <p>Submission: After uploading the abstract on the 9th Global Symposium on Health Systems Research website and receiving acknowledgement, please use the button below to complete your application for the EV4GH 2026 researchers’ track. Please note that you will need the unique ID from the 9th Global Symposium on Health Systems Research abstract submission for completing this application</p>
                    <p><strong>[TRACK 1 APPLICATION]</strong></p>

                    <h3>Application Track 2: Other health system professionals’ track</h3>
                    <p>Short portfolio: The portfolio should include,</p>
                    <ul class="ev-check-list">
                        <li><i class="fa fa-check-circle"></i>A short CV: Personal details, Education, Relevant professional experience. If you are submitting a written document, the CV should not be more than two pages.</li>
                        <li><i class="fa fa-check-circle"></i>A short motivation statement: Explanation of what the EV program means to you and how it will contribute to your professional development. If you are submitting a written document, the motivation letter should not be more than 250 words.</li>
                        <li><i class="fa fa-check-circle"></i>A short concept note: What global health problem are you more interested in addressing (linked to the EV2026 themes) and how do you envision addressing that? If you are submitting a written document, it should be within 500 words.</li>
                    </ul>
                    <p>We encourage you to be innovative in presenting your portfolio. For example, you could present it as a website, a short 3-minute video, PowerPoint slides, or any other creative visual materials at your disposal.</p>
                    <p>Submission: For the Other health system professionals’ track, please use the button below to complete your application for the EV4GH 2026, keeping the above documents ready.</p>
                    <p><strong>[TRACK 2 APPLICATION]</strong></p>

                    <p><strong>Application Submission Deadline:</strong> All the above should be completed by 20 March 2026 (11 pm GMT+6) at the latest. If you have any queries/ questions, please contact the EV4GH Secretariat at <a href="mailto:ev_secretariat@bracu.ac.bd">ev_secretariat@bracu.ac.bd</a>.</p>

                     <h2 class="about-sec-title">Selection process</h2>
                    <p>A selection committee consisting of the EV governance board members, independent EV4GH peer reviewers, representatives from partner institutes and funders, and EV Secretariat will facilitate the selection process, taking into account various funding criteria, regional representation in the EV network, gender and ethnicity.</p>

                    
                     <h2 class="about-sec-title">What does the EV2026 scholarship include?</h2>
                    <p>A limited number of full and partial scholarships will be awarded to successful applicants. The full scholarship will cover participation in the face to face program, including participants’ airfares to and from Dubai, shared accommodation, meals, and materials, as well as participation in the 9th Global Symposium on Health Systems Research in Dubai. Partial scholarships shall fund only some aspects of the above. Scholarships shall prioritize low- and middle-income country participants. Participants from or based in high-income countries, if selected, are expected to raise their own funds to cover all costs of participation in the EV4GH program and are considered self-funded. Please reach out to the EV Secretariat (<a href="mailto:ev_secretariat@bracu.ac.bd">ev_secretariat@bracu.ac.bd</a>) for details about self-funding.</p>

                    <p><strong>Please note:</strong> As part of the EV venture, accommodation for all EVs in Dubai will be on a twin-share basis, whether selected for a scholarship or self-funded. Successful EV selection cannot guarantee a successful and timely visa process, so if selected, we encourage participants to start visa applications as soon as possible.</p>

                    <p>Theme for 9th Global Symposium on Health Systems Research: Future-Focused Health Systems in a Changing World. Please see the details of the themes of the 2026 symposium at the <a href="https://healthsystemsglobal.org/global-symposia/hsr2024/8th-global-symposium-on-health-systems-research-2024-theme/">HSG website</a>.</p>

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
