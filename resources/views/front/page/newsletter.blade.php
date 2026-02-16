@extends('front.layout.front-master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        

       :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --card-bg: #ffffff;
            --text-main: #2d3748;
            --text-light: #718096;
            --accent-color: #764ba2;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* --- Creative Section Background --- */
        .newsletter-section {
            position: relative;
            padding: 100px 0;
            background-color: #f8f9fa;
            overflow: hidden;
        }

        /* Abstract blobs in background */
        .newsletter-section::before, .newsletter-section::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            z-index: 0;
            filter: blur(60px);
        }
        .newsletter-section::before { top: -100px; left: -100px; }
        .newsletter-section::after { bottom: -100px; right: -100px; }

        /* Modern Card Styling */
        .newsletter-card {
            background: var(--card-bg);
            border: none;
            border-radius: 24px; /* Softer corners */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .newsletter-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Decorative Gradient Line at top */
        .newsletter-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--color-default, #0d6efd), var(--color-support, #0dcaf0));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .newsletter-card:hover::after {
            opacity: 1;
        }

        /* Icon Styling */
        .icon-box {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-info-rgb), 0.1));
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
            position: relative;
        }

        .newsletter-card:hover .icon-box {
            background: linear-gradient(135deg, var(--color-default, #0d6efd), var(--color-support, #0dcaf0));
            transform: scale(1.1) rotate(5deg);
        }

        .env-icon {
            font-size: 32px;
            color: var(--color-default, #0d6efd);
            transition: all 0.3s ease;
        }

        .newsletter-card:hover .env-icon {
            color: #ffffff;
        }

        /* Icon Swap Animation */
        .env-open { display: none; }
        .newsletter-card:hover .env-closed { display: none; }
        .newsletter-card:hover .env-open { display: inline-block; animation: popIn 0.3s forwards; }

        @keyframes popIn {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* Typography */
        .card-title {
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 1.25rem;
        }

        .read-more-text {
            font-size: 0.9rem;
            color: #6c757d;
            font-weight: 600;
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: color 0.3s ease;
        }

        .newsletter-card:hover .read-more-text {
            color: var(--color-default, #0d6efd);
        }

        .arrow-icon {
            transition: transform 0.3s ease;
        }

        .newsletter-card:hover .arrow-icon {
            transform: translateX(5px);
        }

        /* Stretched Link Fix (This makes the whole card clickable) */
        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        /* Breadcrumbs styling update */
        .breadcrumbs {
            background: #fff;
            padding: 40px 0;
            border-bottom: 1px solid #eaeaea;
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
                            <h2>Newsletter</h2>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Newsletter</li>
                    </ol>
                </div>
            </nav>
        </div>

        <section class="newsletter-section">
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">MAY-JUNE 2025</h5>
                                  
                                </div>
                                
                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>
                                <a class="stretched-link" target="_blank"  href="{{asset('assets/pdf/newsletter/2025/News Letter Design Final Version 23 _06_2025-1.pdf')}}">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">May Edition 2022</h5>
                                  
                                </div>
                                
                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2022/05/EV4GH-Newsletter-May-Edition-2022-1.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">January 2022</h5>
                                   
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2022/01/EV4GH-Newsletter-January-2022.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">Newsletter 2020</h5>
                                   
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2020/09/EV-Newsletter_Issue6_July2020_Final.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">Newsletter Issue 1</h5>
                                   
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2017/12/EV4GH_Newsletter_Issue_1.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">Newsletter Issue 2</h5>
                                   
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2018/04/Newsletter_EV2_April2018-2.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">Newsletter Issue 3</h5>
                                   
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2018/09/EV4GH_Newsletter_Issue_3.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">Newsletter Issue 4</h5>
                                    
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2019/06/EV-Newsletter_Issue4_June-2019.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">Newsletter Issue 5</h5>
                                   
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2019/11/EV-Newsletter_Issue5_November-2019.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="newsletter-card card h-100">
                            <div class="card-body text-center p-5 d-flex flex-column">
                                <div>
                                    <div class="icon-box">
                                        <i class="fa-regular fa-envelope env-icon env-closed"></i>
                                        <i class="fa-solid fa-envelope-open-text env-icon env-open"></i>
                                    </div>
                                    <h5 class="card-title">Newsletter Issue 6</h5>
                                    {{-- <p class="text-muted small mb-4">Archive: July 2020</p> --}}
                                </div>

                                <div class="read-more-text mt-auto">
                                    <span>Read PDF</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </div>

                                <a class="stretched-link" target="_blank"
                                   href="https://old.ev4gh.net/wp-content/uploads/2020/09/EV-Newsletter_Issue6_July2020_Final.pdf">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
@endsection