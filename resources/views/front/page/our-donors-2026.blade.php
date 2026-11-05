@extends('front.layout.front-master')
@section('styles')
    <!-- Bootstrap 5 CDN -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        /* ================= EV4GH 2026 donors - version 2 (light, glass, colourful) =================
                   Uses your site tokens (--color-default, --color-support, --color-support1 ...).
                   Fallback values are included in case a token is not loaded on this page. */
        .evd2 {
            --c-red: var(--color-default, #a62527);
            --c-red-hover: var(--color-default-hover, #831d1f);
            --c-red-lite: var(--color-default-lite, #ffa1a1);
            --c-blue: var(--color-support, #3ba4d7);
            --c-teal: var(--color-support1, #126466);
            --c-gray: var(--color-ev4gh-gray, #f4f6f8);
            --c-dark: var(--color-dark, #1e293b);
            --c-border: var(--color-border, #e2e8f0);
            position: relative;
            overflow: hidden;
            isolation: isolate;
            padding: 84px 16px 96px;
            color: var(--c-dark);
            background:
                radial-gradient(900px 480px at 8% 0%, rgba(255, 161, 161, .45), transparent 60%),
                radial-gradient(800px 460px at 95% 8%, rgba(59, 164, 215, .30), transparent 60%),
                radial-gradient(900px 520px at 50% 105%, rgba(18, 100, 102, .22), transparent 60%),
                var(--c-gray);
        }

        .evd2 * {
            box-sizing: border-box;
        }

        /* dotted texture */
        .evd2::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background-image: radial-gradient(rgba(30, 41, 59, .13) 1.2px, transparent 1.2px);
            background-size: 26px 26px;
            -webkit-mask-image: radial-gradient(ellipse at 50% 30%, #000 20%, transparent 78%);
            mask-image: radial-gradient(ellipse at 50% 30%, #000 20%, transparent 78%);
        }

        /* floating colour blobs */
        .evd2__blob {
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            filter: blur(60px);
            pointer-events: none;
            animation: evd2-float 16s ease-in-out infinite;
        }

        .evd2__blob--1 {
            width: 300px;
            height: 300px;
            top: 40px;
            left: -80px;
            background: var(--c-red);
            opacity: .22;
        }

        .evd2__blob--2 {
            width: 280px;
            height: 280px;
            top: 120px;
            right: -70px;
            background: var(--c-blue);
            opacity: .30;
            animation-delay: -5s;
        }

        .evd2__blob--3 {
            width: 260px;
            height: 260px;
            bottom: 60px;
            left: 40%;
            background: var(--c-teal);
            opacity: .20;
            animation-delay: -9s;
        }

        @keyframes evd2-float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(28px, -24px) scale(1.12);
            }
        }

        /* ---------- hero ---------- */
        .evd2__hero {
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .evd2__pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 18px 8px 12px;
            margin-bottom: 24px;
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--c-red);
            background: rgba(255, 255, 255, .8);
            border: 1px solid var(--c-border);
            border-radius: 999px;
            box-shadow: 0 6px 20px rgba(30, 41, 59, .08);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
        }

        .evd2__pill-icon {
            display: grid;
            place-items: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--c-red), var(--c-red-hover));
            color: #fff;
            animation: evd2-beat 1.8s ease-in-out infinite;
        }

        .evd2__pill-icon svg {
            width: 14px;
            height: 14px;
            fill: currentColor;
        }

        @keyframes evd2-beat {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(166, 37, 39, .45);
            }

            50% {
                transform: scale(1.1);
                box-shadow: 0 0 0 10px rgba(166, 37, 39, 0);
            }
        }

        .evd2__title {
            margin: 0 0 22px;
            font-size: clamp(2.3rem, 6vw, 4.3rem);
            line-height: 1.06;
            font-weight: 800;
            letter-spacing: -.03em;
            color: var(--c-dark);
        }

        .evd2__title span {
            display: inline-block;
            background: linear-gradient(90deg, var(--c-red), var(--c-blue), var(--c-teal), var(--c-red));
            background-size: 300% 100%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            animation: evd2-shine 7s linear infinite;
        }

        @keyframes evd2-shine {
            to {
                background-position: 300% 0;
            }
        }

        .evd2__hero p {
            margin: 0 auto 14px;
            max-width: 720px;
            font-size: 1.12rem;
            line-height: 1.8;
            color: #475569;
        }

        .evd2__thanks {
            position: relative;
            display: inline-flex !important;
            align-items: center;
            gap: 10px;
            margin: 14px auto 0 !important;
            padding: 14px 30px;
            overflow: hidden;
            font-weight: 700;
            font-size: 1.05rem !important;
            color: #fff !important;
            background: linear-gradient(135deg, var(--c-red), var(--c-red-hover));
            border-radius: 999px;
            box-shadow: 0 14px 34px rgba(166, 37, 39, .38);
        }

        .evd2__thanks::after {
            /* shimmer sweep */
            content: "";
            position: absolute;
            top: 0;
            left: -60%;
            width: 40%;
            height: 100%;
            background: linear-gradient(100deg, transparent, rgba(255, 255, 255, .45), transparent);
            transform: skewX(-20deg);
            animation: evd2-sweep 3.4s ease-in-out infinite;
        }

        @keyframes evd2-sweep {
            0% {
                left: -60%;
            }

            60%,
            100% {
                left: 130%;
            }
        }

        .evd2__stats {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
            margin-top: 34px;
        }

        .evd2__stat {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 22px 12px 14px;
            background: rgba(255, 255, 255, .8);
            border: 1px solid var(--c-border);
            border-radius: 18px;
            box-shadow: 0 8px 24px rgba(30, 41, 59, .07);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
        }

        .evd2__stat b {
            display: grid;
            place-items: center;
            min-width: 52px;
            height: 52px;
            padding: 0 8px;
            font-size: 1.35rem;
            font-weight: 800;
            color: #fff;
            border-radius: 14px;
        }

        .evd2__stat:nth-child(1) b {
            background: linear-gradient(135deg, var(--c-red), var(--c-red-hover));
        }

        .evd2__stat:nth-child(2) b {
            background: linear-gradient(135deg, var(--c-blue), #2b86b8);
        }

        .evd2__stat small {
            display: block;
            text-align: left;
            font-size: .8rem;
            font-weight: 600;
            line-height: 1.3;
            color: #475569;
        }

        /* ---------- thank-you ribbon ---------- */
        .evd2__ribbon-wrap {
            margin: 64px 0 56px;
            padding: 26px 0;
            overflow: hidden;
        }

        .evd2__ribbon {
            width: 104%;
            margin-left: -2%;
            overflow: hidden;
            transform: rotate(-1.6deg);
            background: linear-gradient(90deg, var(--c-red-hover), var(--c-red), var(--c-red-hover));
            box-shadow: 0 14px 34px rgba(166, 37, 39, .3);
        }

        .evd2__track {
            display: flex;
            width: max-content;
            animation: evd2-marquee 38s linear infinite;
        }

        .evd2__group {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .evd2__group span {
            padding: 14px 0;
            font-size: 1.15rem;
            font-weight: 800;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #fff;
            white-space: nowrap;
        }

        .evd2__group i {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 0 28px;
            background: var(--c-red-lite);
            border-radius: 50%;
        }

        @keyframes evd2-marquee {
            to {
                transform: translateX(-50%);
            }
        }

        /* ---------- logo grid ---------- */
        .evd2__wrap {
            max-width: 1140px;
            margin: 0 auto;
        }

        .evd2__grid {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 26px;
        }

        .evd2__item {
            --accent: var(--c-red);
            perspective: 900px;
        }

        .evd2__item:nth-child(3n+2) {
            --accent: var(--c-blue);
        }

        .evd2__item:nth-child(3n) {
            --accent: var(--c-teal);
        }

        .evd2__card {
            --rx: 0deg;
            --ry: 0deg;
            --mx: 50%;
            --my: 50%;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 16px;
            height: 100%;
            min-height: 250px;
            padding: 18px;
            background: rgba(255, 255, 255, .78);
            border: 1px solid var(--c-border);
            border-radius: 26px;
            box-shadow: 0 10px 30px rgba(30, 41, 59, .08);
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px);
            transform: rotateX(var(--rx)) rotateY(var(--ry));
            transition: transform .18s ease-out, box-shadow .3s ease;
            will-change: transform;
        }

        .evd2__card::before {
            /* gradient border */
            content: "";
            position: absolute;
            inset: -1px;
            padding: 2px;
            border-radius: 27px;
            background: linear-gradient(135deg, var(--accent), var(--c-red-lite), var(--accent));
            -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
            -webkit-mask-composite: xor;
            mask: linear-gradient(#000 0 0) content-box exclude, linear-gradient(#000 0 0);
            opacity: 0;
            transition: opacity .3s ease;
            pointer-events: none;
        }

        .evd2__card::after {
            /* cursor spotlight */
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 26px;
            background: radial-gradient(260px circle at var(--mx) var(--my), color-mix(in srgb, var(--accent) 22%, transparent), transparent 60%);
            opacity: 0;
            transition: opacity .3s ease;
            pointer-events: none;
        }

        .evd2__card:hover {
            box-shadow: 0 26px 56px rgba(30, 41, 59, .18);
        }

        .evd2__card:hover::before,
        .evd2__card:hover::after {
            opacity: 1;
        }

        .evd2__num {
            position: absolute;
            top: 14px;
            left: 16px;
            z-index: 2;
            padding: 3px 10px;
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .08em;
            color: #fff;
            background: var(--accent);
            border-radius: 999px;
        }

        .evd2__logo {
            position: relative;
            z-index: 1;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 150px;
            padding: 34px 18px 18px;
            background: #fff;
            border-radius: 18px;
            box-shadow: inset 0 0 0 1px var(--c-border);
        }

        .evd2__logo img {
            max-width: 100%;
            max-height: 96px;
            object-fit: contain;
            transition: transform .35s ease;
        }

        .evd2__card:hover .evd2__logo img {
            transform: scale(1.1);
        }

        .evd2__name {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 0 4px 2px;
            text-align: center;
            font-size: .9rem;
            font-weight: 700;
            line-height: 1.35;
            color: var(--c-dark);
        }

        .evd2__name::before {
            content: "";
            flex-shrink: 0;
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
        }

        /* ---------- scroll reveal (only when JS runs) ---------- */
        .evd2.evd2-js .evd2__item {
            opacity: 0;
            transform: translateY(40px) scale(.95);
            transition: opacity .7s ease, transform .7s cubic-bezier(.2, .8, .2, 1);
            transition-delay: calc(var(--d, 0) * 90ms);
        }

        .evd2.evd2-js .evd2__item.is-visible {
            opacity: 1;
            transform: none;
        }

        @media (max-width: 991px) {
            .evd2__grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 720px) {
            .evd2 {
                padding: 56px 14px 72px;
            }

            .evd2__grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }

            .evd2__card {
                min-height: 200px;
                padding: 12px;
                border-radius: 20px;
            }

            .evd2__logo {
                min-height: 110px;
                padding: 30px 10px 12px;
            }

            .evd2__logo img {
                max-height: 66px;
            }

            .evd2__name {
                font-size: .78rem;
            }

            .evd2__ribbon-wrap {
                margin: 44px 0 40px;
            }

            .evd2__group span {
                font-size: .95rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .evd2 *,
            .evd2 *::before,
            .evd2 *::after {
                animation: none !important;
                transition: none !important;
            }

            .evd2.evd2-js .evd2__item {
                opacity: 1;
                transform: none;
            }
        }
    </style>
@endsection
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        {{-- <div class="breadcrumbs">

            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                        <li>EV4GH 2026 Donors</li>
                    </ol>
                </div>
            </nav>
        </div> --}}

        {{-- ================= EV4GH 2026 donor acknowledgement (v2) =================
             Put the donor logos in: public/assets/images/about/Logos-Donors/
             Then edit only the $donors list below (logo file name + donor name). --}}
        @php
            $donors = [
                [
                    'name' => 'Belgian Directorate-General for Development Co-operation (DGD)',
                    'logo' => 'DGD_CBD_logo_EN_RGB.jpg',
                ],

                ['name' => 'Institute of Tropical Medicine Antwerp', 'logo' => 'ITM-logo_col_rgb.jpg'],

                [
                    'name' => 'BRAC James P Grant School of Public Health, BRAC University',
                    'logo' => 'BRACJPGSPH_New-logo.png',
                ],

                ['name' => 'Institute of Public Health, Bengaluru', 'logo' => 'IPH-logo-100px.png'],
                ['name' => 'Liverpool School of Tropical Medicine (LSTM)', 'logo' => 'LSTM Logo.png'],
                ['name' => 'Lvcthealth', 'logo' => 'LVCT_Health_Logo.webp'],
                ['name' => 'World Health Organization (WPRO)', 'logo' => 'WHO WPRO_Logo.jpeg'],
                ['name' => 'Health Systems Global (HSG)', 'logo' => 'HSG Logo.png'],
            ];
            $thanks = [
                'ধন্যবাদ', // Bangladesh (Bengali)
                'धन्यवाद', // India (Hindi)
                'Merci', // Benin (French)
                'Medaase', // Ghana (Twi)
                'Salamat', // Philippines (Filipino)
                'ကျေးဇူးတင်ပါတယ်', // Myanmar (Burmese)
                'Gracias', // Bolivia (Spanish)
                'Danke', // Germany (German)
                'شكراً', // Egypt (Arabic)
                'Thank you', // Liberia (English)
                'Asante', // Kenya (Swahili)
                'Ndatenda', // Zimbabwe (Shona)
                'Muchas gracias', // Mexico (Spanish)
                'Terima kasih', // Indonesia (Indonesian)
                'Zikomo', // Zambia (Nyanja)
            ];
        @endphp
        <section id="donors" class="evd2" aria-labelledby="evd2-title">
            <span class="evd2__blob evd2__blob--1"></span>
            <span class="evd2__blob evd2__blob--2"></span>
            <span class="evd2__blob evd2__blob--3"></span>

            <div class="evd2__hero">
                <span class="evd2__pill">
                    <span class="evd2__pill-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </span>
                    EV4GH 2026 Venture
                </span>
                <h2 class="evd2__title" id="evd2-title">Acknowledging Our <span>Supporters</span></h2>
                <p>We extend our sincere gratitude to all our donors and partners for their generous support and
                    contributions to the Emerging Voices for Global Health (EV4GH) 2026 Venture.</p>
                <p>Your support has been instrumental in making this venture possible and empowering the next generation
                    of global health leaders.</p>
                <p class="evd2__thanks">Thank you for being part of the EV4GH 2026 journey!</p>

                <div class="evd2__stats">
                    <div class="evd2__stat">
                        <b data-count="{{ count($donors) }}">{{ count($donors) }}</b>
                        <small>Donors</small>
                    </div>
                    <div class="evd2__stat">
                        <b>2026</b>
                        <small>EV4GH<br>Venture</small>
                    </div>
                </div>
            </div>

            <div class="evd2__ribbon-wrap" aria-hidden="true">
                <div class="evd2__ribbon">
                    <div class="evd2__track">
                        @for ($r = 0; $r < 2; $r++)
                            <div class="evd2__group">
                                @foreach ($thanks as $word)
                                    <span>{{ $word }}</span><i></i>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="evd2__wrap">
                <ul class="evd2__grid">
                    @foreach ($donors as $i => $donor)
                        <li class="evd2__item" style="--d: {{ $i % 4 }}">
                            <div class="evd2__card">
                                <span class="evd2__num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <div class="evd2__logo">
                                    <img src="{{ asset('assets/images/about/Logos-Donors/' . $donor['logo']) }}"
                                        alt="{{ $donor['name'] }}" loading="lazy">
                                </div>
                                <div class="evd2__name">{{ $donor['name'] }}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <div class="container">
            <div class="row p-5">
                <p>We remain grateful to all individuals and teams within these organisations who have accompanied
                    EV4GH’s journey and contributed to strengthening a more inclusive and equitable global health
                    discourse.</p>
                <p><em>The logos of our funders and partners are displayed above as a visual acknowledgement of their
                        contribution to the EV4GH journey.</em></p>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            var root = document.getElementById('donors');
            if (!root) return;
            var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var items = root.querySelectorAll('.evd2__item');

            /* scroll reveal */
            root.classList.add('evd2-js');
            if (!('IntersectionObserver' in window) || reduce) {
                items.forEach(function(el) {
                    el.classList.add('is-visible');
                });
            } else {
                var io = new IntersectionObserver(function(entries) {
                    entries.forEach(function(e) {
                        if (e.isIntersecting) {
                            e.target.classList.add('is-visible');
                            io.unobserve(e.target);
                        }
                    });
                }, {
                    threshold: 0.15
                });
                items.forEach(function(el) {
                    io.observe(el);
                });
            }

            /* count-up for the donor count */
            var counter = root.querySelector('[data-count]');
            if (counter && !reduce) {
                var target = parseInt(counter.getAttribute('data-count'), 10) || 0;
                var start = null;
                counter.textContent = '0';
                var tick = function(ts) {
                    if (start === null) start = ts;
                    var p = Math.min((ts - start) / 1200, 1);
                    counter.textContent = Math.round(target * (1 - Math.pow(1 - p, 3)));
                    if (p < 1) requestAnimationFrame(tick);
                };
                requestAnimationFrame(tick);
            }

            /* 3D tilt + cursor spotlight (mouse devices only) */
            if (!reduce && window.matchMedia && window.matchMedia('(hover: hover)').matches) {
                root.querySelectorAll('.evd2__card').forEach(function(card) {
                    card.addEventListener('mousemove', function(e) {
                        var r = card.getBoundingClientRect();
                        var x = e.clientX - r.left;
                        var y = e.clientY - r.top;
                        card.style.setProperty('--mx', x + 'px');
                        card.style.setProperty('--my', y + 'px');
                        card.style.setProperty('--ry', ((x / r.width - 0.5) * 12) + 'deg');
                        card.style.setProperty('--rx', ((0.5 - y / r.height) * 12) + 'deg');
                    });
                    card.addEventListener('mouseleave', function() {
                        card.style.setProperty('--rx', '0deg');
                        card.style.setProperty('--ry', '0deg');
                    });
                });
            }
        })();
    </script>
@endsection
