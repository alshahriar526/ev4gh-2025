<div class="top_header_banner">
    <!-- START TOPBAR (Contact Info + Social Media) -->
    <section class="topbar-section">
        <div class="container-fluid container-xl">
            <div class="row align-items-center">
                <!-- Contact Details -->
                <div class="col-lg-8 col-md-9 col-12">
                    <div class="top-contact-wrapper d-flex flex-wrap align-items-center">
                        <div class="single-top-contact me-4">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:+880248812213">+880-2-48812213-18</a>
                        </div>
                        <div class="single-top-contact me-4">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:ev_secretariat@bracu.ac.bd">ev_secretariat@bracu.ac.bd</a>
                        </div>
                        {{-- <div class="single-top-contact d-none d-lg-block">
                            <i class="bi bi-clock-fill"></i>
                            <span>Mon - Sat: 9:00 AM - 6:00 PM</span>
                        </div> --}}
                    </div>
                </div>

                <!-- Social Profile Links -->
                <div class="col-lg-4 col-md-3 col-12 text-md-end text-center">
                    <div class="top_social_profile">
                        <ul class="list-inline m-0">

                            <li class="list-inline-item"><a target="_blank" href="https://www.linkedin.com/company/ev4gh" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/EV4GH/" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.youtube.com/@ev4ghsecretariat298" aria-label="Youtube"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TOPBAR -->

    <!-- START NAVBAR (Logo + Dynamic Menu + Donation Button) -->
    <header id="header" class="header site-navigation">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between h-100">
            
            <!-- Site Logo -->
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/images/logo/EV4GH-NEW-Logo.png') }}" alt="EV4GH Logo">
            </a>

            <!-- Navigation Links -->
<nav id="navbar" class="navbar">
    <ul>
        {{-- Home --}}
        <li>
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        </li>

        {{-- About Dropdown --}}
        <li class="dropdown">
            <a href="#" class="{{ request()->is('about*') || request()->routeIs('gb_members.*') || request()->routeIs('our-funders-and-partners') ? 'active' : '' }}">
                <span>About</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul>
                <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Our History</a></li>
                <li><a href="{{ route('gb_members.index') }}" class="{{ request()->routeIs('gb_members.*') ? 'active' : '' }}">Governance Board Members</a></li>
                <li><a href="{{ route('our-funders-and-partners') }}" class="{{ request()->routeIs('our-funders-and-partners') ? 'active' : '' }}">Our Funders & Partners</a></li>
            </ul>
        </li>

        {{-- 10th Anniversary Dropdown --}}
        <li class="dropdown">
            <a href="#" class="{{ request()->is('testimonial*') ? 'active' : '' }}">
                <span>10th Anniversary</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul>
                <li><a href="{{ url('/testimonial') }}" class="{{ request()->is('testimonial') ? 'active' : '' }}">Testimonials</a></li>
                <li><a target="_blank" rel="noopener" href="{{ asset('assets/pdf/ev-10th-anniversary/EV-2020-magazine.pdf') }}">EV Digital Magazine</a></li>
                <li><a target="_blank" rel="noopener" href="{{ asset('assets/pdf/ev-10th-anniversary/EV4GH-Evaluation-Exec-Summary.pdf') }}">Executive Summary</a></li>
                <li><a target="_blank" rel="noopener" href="{{ asset('assets/pdf/ev-10th-anniversary/EV4GH-Evaluation-Report-FINAL_optimize.pdf') }}">Full Evaluation Report</a></li>
            </ul>
        </li>

        {{-- Call for Applications 2026 --}}
        <li>
            <a href="{{ route('call-for-applications-2026') }}" class="{{ request()->routeIs('call-for-applications-2026') ? 'active' : '' }}">
                <span>Call for Applications 2026</span>
            </a>
        </li>

        {{-- EV4GH Ventures Dropdown --}}
        <li class="dropdown">
            <a href="#" class="{{ request()->routeIs('past-venture.*') ? 'active' : '' }}">
                <span>EV4GH Ventures</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul>
                <li><a href="{{ route('past-venture.2022') }}" class="{{ request()->routeIs('past-venture.2022') ? 'active' : '' }}">EV4GH 2022</a></li>
                <li><a href="{{ route('past-venture.2018') }}" class="{{ request()->routeIs('past-venture.2018') ? 'active' : '' }}">EV4GH 2018</a></li>
                <li><a target="_blank" rel="noopener" href="https://old.ev4gh.net/programme/">EV4GH 2016</a></li>
                <li><a target="_blank" rel="noopener" href="https://old.ev4gh.net/past-editions/2014-2/">EV4GH 2014</a></li>
                <li><a target="_blank" rel="noopener" href="https://old.ev4gh.net/past-editions/2013-2/">EV4GH 2013</a></li>
                <li><a target="_blank" rel="noopener" href="https://old.ev4gh.net/past-editions/2012-2/">EV4GH 2012</a></li>
                <li><a target="_blank" rel="noopener" href="https://old.ev4gh.net/past-editions/2010-2/">EV4GH 2010</a></li>
            </ul>
        </li>

        {{-- Newsletters --}}
        <li>
            <a href="{{ route('newsletter') }}" class="{{ request()->routeIs('newsletter') ? 'active' : '' }}">
                <span>Newsletters</span>
            </a>
        </li>
    </ul>
</nav>

            <!-- Donation Action Button & Mobile Toggle -->
            <div class="header-action-btn d-flex align-items-center">
                <a href="#XUEXSECN" style="display: none"></a>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list d-xl-none ms-3"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x ms-3"></i>
            </div>

        </div>
    </header>
    <!-- END NAVBAR -->
</div>