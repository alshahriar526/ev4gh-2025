@extends('front.layout.front-master')
@section('styles')
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ===== Card Container ===== */

        .modal-backdrop {
            background-color: var(--color-default) !important;
            opacity: .9 !important;
        }

        #board-members {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        #board-members .member-info {
            display: flex;
            flex-direction: column;
            padding: 30px;
            background: rgb(228 2 0 / 3%);
            border-radius: 18px;
            border: 1px solid #eee;
            transition: .3s;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.10);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }


        #board-members .member-info:hover {
            /* transform: translateY(-6px); */
            box-shadow: 0 20px 40px rgb(0 0 0 / 40%);
        }

        /* ===== Image ===== */
        #board-members .member-photo {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            overflow: hidden;
            border: 6px solid var(--color-primary);
            position: relative;
            flex-shrink: 0;
            /* margin: 10px 10px; */
        }

        #board-members .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
            image-rendering: high-quality;
        }

        #board-members .member-photo::before {
            content: "";
            position: absolute;
            inset: 0;
            /* background: rgba(61, 172, 216, .35); */
            background: rgb(228 2 0 / 13%);
            border-radius: 50%;
            transition: .4s ease;
            z-index: 2;
        }

        #board-members .member-info:hover .member-photo::before {
            opacity: 0;
        }

        /* ===== Text ===== */
        .member-content {
            /* margin: 20px 20px; */
            text-align: left;
            width: 100%;
        }

        #board-members .member-info .member-name {
            font-size: 22px;
            color: var(--color-default);
            font-weight: 900;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        #board-members .member-info .member-role {
            font-size: 14px;
            color: #810100;
            margin-bottom: 10px;
        }

        #board-members .member-info p {
            padding: 0;
            margin: 0;
        }

        .member-designation {
            color: #777;
            font-size: 16px;
        }

        /* ===== Read More Button ===== */

        .read-more-btn {
            background: none;
            border: none;
            padding: 0;
            color: #000000;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            align-self: flex-start;
            /* optional: left-align button */
        }

        .read-more-btn:hover {
            text-decoration: underline;
        }

        /* ===== Modal Styling ===== */
        .modal-content {
            border-radius: 20px;
        }

        .modal-body {
            /* background: var(--color-default); */
            /* color: #fff; */
            border-radius: 20px 20px;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-header .btn-close {
            filter: invert(1);
            /* Make X button white */
        }

        .modal-photo {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            overflow: hidden;
            border: 6px solid #fff;
            flex-shrink: 0;
        }

        .modal-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative text-center">
                <h2>Governance Board Members</h2>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Governance Board Members</li>
                </ol>
            </div>
        </nav>
    </div>

    <main id="main">
        <section id="board-members" class="board-members">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($members as $m)
                        <div class="col-md-4 mb-4">
                            <div class="member-info h-100">
                                <div class="member-photo">
                                    <img src="{{ asset('assets/images/governance-board-members/2025/' . $m->photo) }}"
                                        alt="">
                                </div>
                                <div class="member-content">
                                    <h5 class="member-name">{{ $m->full_name }}</h5>
                                    <p class="member-role">{!! $m->role_ev_gb !!}</p>
                                    <p class="member-designation">{{ $m->designatation_org }}</p>
                                    {{-- <button class="read-more-btn" data-bs-toggle="modal"
                                        data-bs-target="#memberModal{{ $m->id }}">
                                        Read More →
                                    </button> --}}
                                </div>
                                <button class="read-more-btn mt-auto" data-bs-toggle="modal"
                                    data-bs-target="#memberModal{{ $m->id }}">
                                    Read More →
                                </button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="memberModal{{ $m->id }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content" style=" border-radius: 20px; position: relative;">

                                    <!-- Close Button -->
                                    <button type="button" class="btn btn-light position-absolute"
                                        style="top:10px; right:10px; z-index: 10; border-radius:50%; font-weight:bold;"
                                        data-bs-dismiss="modal">✕
                                    </button>

                                    <!-- Modal Body -->
                                    <div class="modal-body  gap-4 p-4">

                                        <div class="member-info h-100">
                                            <div style="display: flex;flex-direction: row;justify-content: center;align-items: center;align-content: center;">
                                                <div class="member-photo">
                                                    <img src="{{ asset('assets/images/governance-board-members/2025/' . $m->photo) }}"
                                                        alt="">
                                                </div>

                                                <div class="member-content mx-4">
                                                    <h5 class="member-name my-2">{{ $m->full_name }}</h5>
                                                    <p class="member-role">{!! $m->role_ev_gb !!}</p>
                                                    <p class="member-designation">{!! $m->designatation_org !!}</p>

                                                </div>
                                            </div>

                                            <div class="member-content">

                                                <hr style="border-color: rgba(255,255,255,0.4);">
                                                <p style=" font-size:16px; line-height:1.7;">{{ $m->short_bio }}</p>
                                            </div>

                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
