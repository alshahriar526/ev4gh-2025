<style>
    #slider-modal-1 .modal-content {
        border: none;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    /* Top Banner */
    #slider-modal-1 .slider-modal-header {
        background: #a12d2d;
        color: #fff;
        padding: 30px;
        text-align: center;
    }

    #slider-modal-1 .slider-modal-header h2 {
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 5px;
    }

    /* Body */
    #slider-modal-1 .slider-modal-body {
        padding: 40px;
    }

    #slider-modal-1 .slider-modal-body p {
        font-size: 16px;
        line-height: 1.8;
        color: #444;
    }

    /* Deadline Box */
    #slider-modal-1 .deadline-box {
        background: #f8f5f5;
        border-left: 5px solid #a12d2d;
        padding: 18px 20px;
        margin-top: 25px;
        font-size: 18px;
        font-weight: 600;
    }

    /* Button */
    #slider-modal-1 .btn-announcement {
        background: #a12d2d;
        border: none;
        padding: 10px 28px;
        font-weight: 600;
        border-radius: 6px;
    }

    #slider-modal-1 .btn-announcement:hover {
        background: #861f1f;
    }

    .call-for-application-slider .badge-tag {
        display: inline-block;
        font-family: Poppins, sans-serif !important;
        font-size: 26px !important;
        font-weight: 600 !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #553c21;
        background: rgba(85, 60, 33, 0.12);
        padding: 6px 14px;
        border-radius: 30px;
        margin-bottom: 16px;
    }

    .call-for-application-slider.slider1 h1 {
        font-size: 34px !important;
        color: #553c21 !important;
        text-align: left;
        font-weight: 800 !important;
        font-family: Poppins, sans-serif !important;
        margin-bottom: 30px !important;
        line-height: 1.25 !important;
        text-shadow: none !important;
        /* Removed dirty shadow */
    }

    .call-for-application-slider .meta-details {
        margin-bottom: 20px;
        border-left: 3px solid #553c21;
        padding-left: 14px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .call-for-application-slider p.event-date {
        font-size: 24px !important;
        color: #553c21 !important;
        text-align: left;
        font-weight: 400 !important;
        font-family: Poppins, sans-serif !important;
        margin-bottom: 6px !important;
        line-height: 1.4;
    }

    .call-for-application-slider h3.event-location {
        font-size: 24px !important;
        color: #553c21 !important;
        font-weight: 700 !important;
        font-family: Poppins, sans-serif !important;
        margin-bottom: 0 !important;
    }

    .call-for-application-slider .event-date i,
    .call-for-application-slider .event-location i {
        margin-right: 8px;
        color: #553c21;
    }

    /* Optional: Slight vertical alignment tweak if needed */
    .call-for-application-slider .meta-details i {
        display: inline-block;
        vertical-align: middle;
    }

    .call-for-application-slider .btn-learn-more {
        display: inline-block;
        background: #553c21 !important;
        color: #ffffff !important;
        font-family: Poppins, sans-serif !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        padding: 12px 28px !important;
        border-radius: 50px !important;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(85, 60, 33, 0.2);
    }

    .call-for-application-slider .btn-learn-more:hover {
        background: #3d2b17 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(85, 60, 33, 0.3);
    }



    .call-for-application-slider h1 {
        font-size: 32px !important;
        color: var(--color-default);
        text-align: left;
        font-weight: 900;
        font-family: var(--font-primary) !important;
        margin-bottom: 30px;
        text-shadow: 2px 2px 0 #bcbcbc, 4px 4px 0 #9c9c9c;
        line-height: 1.3;
    }

    .call-for-application-slider h5 {
        font-size: 30px !important;
        color: #000;
        text-align: left;
        font-weight: 500;
        font-family: var(--font-primary) !important;
        margin-bottom: 30px;
    }

    .call-for-application-slider p {
        font-size: 25px !important;
        color: var(--color-support);
        text-align: left;
        font-weight: 900 !important;
        font-family: var(--font-primary) !important;
        margin-bottom: 30px;
    }
</style>


@section('styles')
@endsection

<div class="swiper-container main-slider">
    <div class="swiper-wrapper">


        <div class="swiper-slide call-for-application-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h1 style="color: #fff; text-shadow: 0 0 black !important">
                                Congratulations to Dr. Beverly Lorraine Ho, EV Fellow, 2012 Cohort!
                            </h1>

                            {{-- <p style="font-weight: 100 !important; color: #d2d2d2">
                                Due to the current ongoing situation, HSG is relocating the conference venue. EV4GH will
                                also take place in a new location and is currently exploring options. The updated venue
                                will be announced soon - stay tuned.
                            </p> --}}
                            <a style="
                                    background: #ffffff !important;
                                    color: #aa2f2f !important;
                                    padding: 10px 20px !important;
                                "
                                target="_blank" class="btn"
                                href="https://web.facebook.com/EV4GH/posts/pfbid02ReHWqiewfu9M5ew8wcVktwLBEm6jPeApJR73xPU93v7Mny3gkTUALXiJZg2JYoRql">Learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background"
                style="
                    background-image: url(assets/images/index/slider/congratulation-dr-ho_ev.jpg);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
            </div>
        </div>



        <div class="swiper-slide call-for-application-slider slider1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <span class="badge-tag">New location and dates</span>
                            <h1>EV4GH 2026 Face-to-face venture</h1>

                            <div class="meta-details">
                                <p class="event-date">
                                    <i class="fa-regular fa-calendar-days"></i>
                                    23 November 2026 - 5 December 2026
                                </p>
                                <h3 class="event-location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Cairo, Egypt
                                </h3>
                            </div>

                            <a target="_blank" class="btn btn-learn-more"
                                href="https://www.facebook.com/EV4GH/posts/pfbid0GzsqkPBkavUAn7ZVx13v517vrBkgArxApDmDKmYdWU58hrnMBYGUSaCcR9iS2pysl">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background"
                style="
                    background-image: url(assets/images/index/slider/EV4GH-2026.png);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
            </div>
        </div>




        <div class="swiper-slide call-for-application-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h1 style="color: #fff; font-size: 36px !important; text-shadow: 0 0 black !important">
                                THE EMERGING VOICES FOR GLOBAL HEALTH NEWSLETTER
                            </h1>
                            <p style="color: #fff; font-weight: lighter !important; margin-bottom: 40px">
                                <i class="fa-regular fa-envelope fa-beat me-2"></i> Spring 2026
                            </p>
                            <a style="
                                    background: #ffffff !important;
                                    color: #aa2f2f !important;
                                    padding: 10px 20px !important;
                                "
                                target="_blank" class="btn"
                                href="{{ asset('assets/pdf/newsletter/2026/EV4GH Newsletter Spring 2026.pdf') }}">Read
                                Our Latest Newsletter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background"
                style="
                    background-image: url(assets/images/index/slider/newsletter-slider.png);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
            </div>
        </div>

        <div class="swiper-slide call-for-application-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h1 style="color: #fff; text-shadow: 0 0 black !important">
                                <i class="fa-thin fa-bullhorn fa-flip me-2"></i>1,120 Reasons to Celebrate
                            </h1>
                            <a style="
                                    background: #ffffff !important;
                                    color: #aa2f2f !important;
                                    padding: 10px 20px !important;
                                "
                                target="_blank" class="btn"
                                href="https://www.linkedin.com/posts/ev4gh_ev4gh-globalhealth-changemakers-activity-7470794276784955393-iTMz?utm_source=share&utm_medium=member_desktop&rcm=ACoAABiadXcBabyj_Zwri3eaTwzqp8JWxRZjmag">Learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background"
                style="
                    background-image: url(assets/images/index/slider/application-received.png);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
            </div>
        </div>

        <div class="swiper-slide call-for-application-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h1 style="color: #fff; text-shadow: 0 0 black !important">
                                <i class="fa-thin fa-triangle-exclamation fa-flip"></i> Important Update
                            </h1>
                            <p style="font-weight: 100 !important; color: #d2d2d2">
                                Due to the current ongoing situation, HSG is relocating the conference venue. EV4GH will
                                also take place in a new location and is currently exploring options. The updated venue
                                will be announced soon - stay tuned.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background"
                style="
                    background-image: url(assets/images/index/slider/StatementAnnouncement3.png);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
            </div>
        </div>
        <div class="swiper-slide call-for-application-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h1 style="color: #fff; text-shadow: 0 0 black !important">
                                Statement & Announcement <br />from EV4GH
                            </h1>
                            <a style="background: #ffbd59 !important" class="btn" data-bs-toggle="modal"
                                data-bs-target="#slider-modal-1">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background"
                style="
                    background-image: url(assets/images/index/slider/StatementAnnouncement3.png);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
            </div>
        </div>
        <div class="swiper-slide call-for-application-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content">
                            <h1 style="margin-bottom: 0px">DEADLINE EXTENDED</h1>
                            <p style="color: #36a3d6; margin-bottom: 40px">20 APRIL 2026</p>
                            <h3 style="color: #d21b22">CALL FOR APPLICATIONS</h3>
                            <h5>
                                Emerging Voices for <br />
                                Global Health (EV4GH) 2026
                            </h5>

                            <a class="btn" target="_blank" href="{{ route('call-for-applications-2026') }}">Apply
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background"
                style="
                    background-image: url(assets/images/index/slider/call-for-application-red.jpg);
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="content slider-style-default">
                <h1 style="color: #d21b22">EV4GH Board Convenes in Dubai to Shape 2026 Fellowship and HSR Programme</h1>
                <p></p>
                <a class="btn" target="_blank"
                    href="https://www.facebook.com/EV4GH/posts/pfbid02zu49Z7tBiR6vSt69Rs1SLttzy3QLGQTtmhBRyRJ23n9omZMRo11ZVYxh4yqKobeAl">Learn
                    More</a>
            </div>
            <div class="background" style="background-image: url(assets/images/index/slider/2026-Fellowship.jpg)">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="content slider-style-default">
                <h1 style="color: #d21b22">
                    EV4GH Appoints Germ谩n Alarc贸n Garavito and Soe Yu Naing as Governance Board Co-Chairs
                </h1>
                <p></p>
                <a class="btn" target="_blank"
                    href="https://www.facebook.com/EV4GH/posts/pfbid02a2PYhsqMxDpMKwSvCq2wzpuyviHcHDsxmr41fakKwBuGEaFHsJo614aTqSd62Hmal">Learn
                    More</a>
            </div>
            <div class="background" style="background-image: url(assets/images/index/slider/Board-Co-Chairs.jpg)">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="content slider-style-default">
                <h1>EV4GH Governance Board Convenes to Shape the 2026 Venture</h1>
                <p></p>
                <a class="btn" target="_blank"
                    href="https://www.facebook.com/EV4GH/posts/pfbid02mf69fxb1RS9dUBH4SvWjsuMYJkPyiTwaUG5gSiK3GcMPzKAi9kr3CgHLzcEmjdt7l">Learn
                    More</a>
            </div>
            <div class="background" style="background-image: url(assets/images/index/slider/ev-2026-venture.jpg)">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="content">
                <h1 style="color: var(--color-support1)">
                    Congratulations to the 41 Emerging Voices from 27 countries participating in the EV4GH 2024
                    programme
                </h1>
                <p></p>
            </div>
            <div class="background" style="background: url(assets/images/index/slider/Ev-slider-map-1.jpg)"></div>
        </div>
        <div class="swiper-slide">
            <div class="content slider-style-default">
                <h1>EV4GH releases a statement on the destruction of Gaza鈥檚 health system and ongoing genocide</h1>
                <p></p>
                <a class="btn" target="_blank"
                    href="https://ev4gh.net/wp-content/uploads/2024/06/EV4GH-Call-for-HSG-statement-on-Palestine-only-statement.pdf">Learn
                    More</a>
            </div>
            <div class="background"
                style="background-image: url(assets/images/index/slider/pexels-photo-10010408.jpg)"></div>
        </div>
    </div>
    <!-- Right Side Vertical Pagination -->
    <div class="swiper-pagination"></div>

    <!-- Left Side Navigation Buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<div class="slider-modal modal fade" id="slider-modal-1" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Close Button -->
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                data-bs-dismiss="modal"></button>
            <!-- Header -->
            <div class="slider-modal-header">
                <h2>Statement & Announcement from EV4GH</h2>
                {{--
                <p class="mb-0">Statement from Emerging Voices for Global Health</p>
                --}}
            </div>
            <!-- Body -->
            <div class="slider-modal-body">
                <p>
                    The Emerging Voices for Global Health (EV4GH) expresses its deep concern and solidarity with
                    everyone affected by the ongoing crisis across the Middle East.
                </p>
                <p>
                    As a global community grounded in equity and mutual support, we earnestly hope for a swift
                    stabilization of the situation, with minimal impact on lives, safety, and well-being.
                </p>
                <p>
                    In solidarity with those affected by the ongoing situation in the Middle East, the Emerging Voices
                    for Global Health has extended the application deadline for the 2026 cohort.
                </p>
                <div class="deadline-box mb-2">New Deadline: Monday, 20 April 2026 (11 pm GMT+6)</div>
                <p>
                    This decision reflects our commitment to supporting applicants experiencing instability and to
                    ensuring equitable consideration. We will continue to monitor the situation closely and keep the
                    network informed of any further updates.
                </p>
                <div class="text-center mt-4">
                    <button class="btn btn-announcement" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
