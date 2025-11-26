<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between h-100">

        
        <a href="{{url('/')}}" class="logo d-flex align-items-center h-100">
            <img src="assets/images/logo/EV4GH-NEW-Logo.png" alt="Ev4gh logo" />
        </a>
        <nav id="navbar" class="navbar">
            <ul>
            <!-- <li><a href="index.php">Home</a></li> -->
            <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <!-- <li><a href="about.php">About us</a></li> -->
                    <li><a href="{{url('/about')}}">Our History</a></li>
                    <li><a href="{{route('gb_members.index')}}">Governance Board Members</a></li>
                    <li><a href="{{route('our-funders-and-partners')}}">Our funders and partners</a></li>
                </ul>
            </li>
            <li><a href="{{route('call-for-applications-2026')}}"><span>Call for Applications 2026</span></a></li>
            <!-- <li><a href="news.php">News and blogs</a></li> -->
            <!-- <li class="dropdown"><a href="#"><span>EV 10th anniversary</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="testimonial.php">Testimonial</a></li>
                    <li><a href="https://old.ev4gh.net/wp-content/uploads/2020/10/EV-2020-magazine.pdf">EV Digital Magazine</a></li>
                    <li><a href="https://old.ev4gh.net/wp-content/uploads/2021/05/EV4GH-Evaluation-Exec-Summary.pdf">EV External Evaluation- Executive Summary</a></li>
                    <li><a href="https://old.ev4gh.net/wp-content/uploads/2021/05/EV4GH-Evaluation-Report-FINAL_optimize.pdf">EV External Evaluation- Full report</a></li>
                </ul>
            </li> -->
            <!-- <li><a href="testimonial.php">Governance Board Members</a></li> -->
            <li class="dropdown"><a href="#"><span>Newsletter</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                <li><a class="dropdown-item" href="https://old.ev4gh.net/wp-content/uploads/2023/07/EV4GH-Newsletter-January-2023.pdf">EV4GH Newsletter January 2023</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2022/05/EV4GH-Newsletter-May-Edition-2022-1.pdf">EV4GH Newsletter May Edition 2022</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2022/01/EV4GH-Newsletter-January-2022.pdf">EV4GH Newsletter 2022</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2020/09/EV-Newsletter_Issue6_July2020_Final.pdf">EV4GH Newsletter-6</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2019/11/EV-Newsletter_Issue5_November-2019.pdf">EV4GH Newsletter-5</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2019/06/EV-Newsletter_Issue4_June-2019.pdf">EV4GH Newsletter-4</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2018/09/EV4GH_Newsletter_Issue_3.pdf">EV4GH Newsletter-3</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2018/04/Newsletter_EV2_April2018-2.pdf">EV4GH Newsletter-2</a></li>
                            <li><a href="https://old.ev4gh.net/wp-content/uploads/2017/12/EV4GH_Newsletter_Issue_1.pdf">EV4GH Newsletter-1</a></li>
                </ul>
            </li>
            <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
        </nav><!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>