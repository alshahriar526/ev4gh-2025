@extends('front.layout.front-master')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --color-primary: #e40000;
        }




        /* Intro Box */
        .intro-box {
            background: #fff;
            border-left: 5px solid var(--color-primary);
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .quote-icon {
            font-size: 2rem;
            color: var(--color-primary);
            opacity: 0.3;
        }

        .lead-text {
            /* font-style: italic; */
            font-size: 1.15rem;
            color: #555;
        }


         .testimonial-card .card-body .card-title {
            font-size: 20px;
            color: var(--color-primary);
        }

        .testimonial-card .card-body .card-text {
            font-size: 14px;
        }


        /* Custom List Styling */
        .testimonial-card .card-body ul {
            list-style: none;
            padding-left: 0;
            margin: 2rem 0;
        }

        .testimonial-card .card-body ul li {
            position: relative;
            padding-left: 35px;
            margin-bottom: .5rem;
            font-size: 12px;
        }

        .testimonial-card .card-body ul li::before {
            content: "\f058";
            /* FontAwesome Check Circle */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            color: var(--color-support);
        }

        .author-name {
            font-weight: 700;
            color: var(--color-primary);
        }

        .author-position {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs mb-4">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Testimonial</h2>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Testimonial</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section class="testimonial-section">
            <div class="container">


                <div class="row justify-content-center  mb-5">
                    <div class="col-lg-12">
                        <div class="intro-box p-4 p-md-5">
                            {{-- <i class="fas fa-quote-left quote-icon mb-3"></i> --}}
                            <p class="lead-text">“This year, EV4GH celebrates its 10th&nbsp;anniversary,&nbsp;
                                among others through a
                                series of blogs from EV alumni from various cohorts.&nbsp; Since the first EV
                                venture in Antwerp/Montreux (2010), the program &amp; network have evolved
                                considerably, and we thought it would be nice to see how EV alumni reflect on the
                                experience and the network, especially with hindsight, but also looking ahead, with
                                a new EV venture (2020, Dubai) coming up !&nbsp; In the coming months, a series of
                                blogs will be published, starting early August 2019.”</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">


                    <div class="col-md-12">
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/12/Anar-Recent.jpg" class="card-img-top"alt="..."> --}}
                            
                            <div class="card-body">
                                <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">The “Emerging Voices” venture as my passport to Global Health
                                    Citizenship </h5>
                                <p class="card-text">I was part of the first ever Emerging Voices venture held back in 2010
                                    (Antwerp/Montreux). When I first received an email from ITM informing me of
                                    my successful acceptance to the EV program, I was not sure if I could afford
                                    to leave my “very important” job for three long weeks. At the time, I was
                                    working as a National Consultant for the Health Sector Development Program
                                    of the Ministry of Health, Mongolia, and I considered myself as a relatively
                                    “emerged” professional. However, looking back, now I can confidently say my
                                    participation was one of the few best decisions I have ever made in my life.
                                    Just to name a few reasons why this is the case:</p>
                                <ul>
                                    <li>It made me a “life-time” member of a larger global health family (with
                                        members from all over the world) from whom I drew my inspiration to
                                        pursue my research career.</li>
                                    <li>It made me realise how boring I was in communicating my ideas and
                                        presentations and provided me with all necessary skills and knowledge to
                                        become a more effective presenter/writer. As a result, my applications
                                        for a PhD scholarship submitted to three different institutions all got
                                        accepted. An unbelievable success! </li>
                                    <li>It sowed a “disruptive mindset” seed in my thinking, turning me into a
                                        life-long learner.</li>
                                    <li>It made me pursue my further career in international health and obtain
                                        my PhD degree from one of the best universities in Australia.
                                    </li>
                                    <li>It gave me the confidence to work internationally which had been
                                        almost a “mission impossible” for me before my EV experience.
                                    </li>
                                    <li>It provided me with the necessary tools, knowledge and confidence to
                                        apply to well-known International consulting companies like Abt
                                        Associates, and be successful in my application. </li>
                                    <li>The Googlegroup (to be exact, it is Kristof) keeps me up-to-date on
                                        the latest news and publications which is one of the reasons why I’m
                                        considered a “valuable” member within my team. </li>
                                    <li>Lastly but most importantly, thanks to the EV venture, I have met Dr
                                        Asmat Malik who later became my best colleague and friend, a “ruthless”
                                        critic, co-author of my papers and the greatest mentor whom I could ask
                                        the silliest question. Sadly, in May 2017, we all received the
                                        heartbreaking news of our dearest friend having passed away. He will
                                        always be remembered by the EV community as a passionate professional,
                                        best friend and the greatest human being. </li>
                                </ul>
                                <p class="card-text">In a nutshell, the EV venture provided me with a passport to Global
                                    (Health) Citizenship. Being heard in a global platform is a rare
                                    opportunity, especially, for someone like me who was educated (and used to
                                    practice) in a former socialist/Soviet country, where open communication and
                                    diversity are not often encouraged. In fact, I was and still am the first
                                    and only EV from Mongolia. Moving forward, expanding the EV opportunity to
                                    engage those often-unheard voices would be a great contribution to the
                                    development of the global health community, and bring further equity and
                                    diversity within the EV community as well. </p>
                                <p class="card-text">Lastly, I must also say that the EV experience was not all “fairy
                                    tale”.
                                    The programme challenged my language abilities (English), fluency, critical
                                    thinking and presentation and networking skills. It also required some
                                    critical “de-learning” first, in order to “enable” my mind for innovation
                                    and different ways of thinking and doing. However, a diverse package of
                                    training, mentoring and peer learning opportunities provided by the EV
                                    venture assisted to overcome all these challenges. And the support and
                                    learning opportunities did not end there. It is not an exaggeration that in
                                    these ten years, not a week went by that I didn’t receive EV4GH
                                    emails/updates. Unbelievable! I cannot thank Kristof and the
                                    EV&nbsp;secretariat enough for their relentless effort&nbsp;to keep
                                    the&nbsp;EV&nbsp;loop still so alive and vibrant even 10 years since its
                                    start. </p>
                                    <div class="article-footer border-top p-4">
                                <p class="author-name mb-0">Anar Ulikpan </p>
                                <p class="author-position">Monitoring and Evaluation Specialist (Health programme), Abt
                                    Associates, Australia</p>
                            </div>
                            </div>
                            
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/12/FreddyKitutu-1.jpg" class="card-img-top"> --}}
                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">I am because EV4GH is, and EV4GH is because we are</h5>
                                <p class="card-text">I was part of the Emerging Voices for Global Health (EV4GH) 2013 cohort
                                    linked to
                                    the International Conference of AIDS and Sexually Transmitted infections (ICASA)
                                    in Cape Town, South Africa. At the time, my big idea for research and
                                    implementation was to use private community pharmacies as drug refill vehicles
                                    for stable HIV/AIDS patients. It seemed like an idea ahead of its time in 2013,
                                    but I am glad that today, it has been implemented in Uganda by the Infectious
                                    Diseases Institute in collaboration with the Kampala City Council Authority.</p>
                                <p class="card-text">Since then, I have made strides in my career and life. Some of these
                                    are
                                    (at
                                    least partly) explained by my association with the EV4GH program. First of all,
                                    I went on to complete my doctoral studies at the International Maternal and
                                    Child Health unit, Uppsala University, Sweden (October 2018). Second, thanks to
                                    poster presentation skills acquired during the EV4GH training, we got a poster
                                    award for “engaging power and politics in promoting health and public value”, at
                                    the 4th Global HSR symposium in Vancouver, Canada. Third, I was nominated by
                                    Uppsala University (with support from Robert Bosch Stiftung) to attend the
                                    prestigious 68th Lindau Nobel laureate meeting dedicated to Medicine and
                                    Physiology. It is another unique international forum for scientific exchange
                                    modelled along the Alfred Nobel prize enterprise to educate, inspire and connect
                                    the “next generation” of leading scientists with each other and with Nobel
                                    Laureates.</p>
                                <p class="card-text">In addition to poster presentation, I picked up some other fancy
                                    communication
                                    skills from EV4GH. I will always remember “pecha kucha”, the “elevator pitch” to
                                    one’s prime minister (still need to do that one 😊) and the savvy use of social
                                    media to spread the gospel according to
                                    “one’s-latest-published-peer-reviewed-article”. As a consequence, networking has
                                    become so much easier, both face-to-face and online. Nowadays, I even combine
                                    the two: when I meet new people, our introductions often start with “I know you
                                    from twitter” (the scientific version of ‘I know what you did last summer’).</p>
                                <p class="card-text">In the 2019 World Antibiotic Awareness Week, I participated in the
                                    Twitter
                                    storm
                                    to raise awareness about antimicrobial resistance (AMR). The networking and
                                    communication skills are useful in my role to support Uganda’s response against
                                    the spread of resistant bugs. As part of ReAct Africa, an independent global
                                    network against AMR, I have been part of advocacy, implementation and
                                    strengthening of antimicrobial use, stewardship and their surveillance in
                                    Uganda. EV4GH and Uppsala University connections led me to actors like the UK
                                    Fleming Fund and Commonwealth Partnership for Antimicrobial Stewardship (CwPAMS)
                                    who support AMR activities in Uganda. As you can tell, I’m passionate about the
                                    battle against AMR. Borrowing some inspiration from Hollywood’s Guardians of the
                                    Galaxy, let us all become guardians of our antibiotics in real life!</p>
                                <p class="card-text">Since my return to the Pharmacy Department at Makerere University
                                    (MakPD)
                                    after
                                    my PhD, I have been entrusted by colleagues and University Management to serve
                                    as the Dean at the School of Health Sciences, Makerere University for the next
                                    year. It’s a school in the College of Health Sciences that hosts degree programs
                                    to train five health professions: dental surgeons, nurses and midwives,
                                    pharmacists, optometrists and dental technologists. Although indicators are not
                                    completely clear, I guess I have “emerged” by now, but I remain very much
                                    connected to the colleagues and friends of EV4GH. If René Descartes were still
                                    around and became an Emerging Voice, he’d probably say, “I am because EV4GH is
                                    and EV4GH is because we are”.</p>
                                <p class="card-text">I have seen the program and network grow over the years to become a
                                    powerful
                                    brand in global health, especially at health systems research meetings. I would
                                    not change the focus of EV4GH as it provides young researchers with a vital
                                    opportunity to connect across cultures, disciplines and time and share their
                                    curiosity, dreams and ambitions for a better world.</p>

                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Freddy Eric Kitutu </p>
                                    <p class="author-position">Lecturer
                                        and
                                        Health Systems Scholar, Pharmacy Department Acting Dean, School of Health
                                        Sciences,
                                        Makerere University College of Health Sciences</p>
                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/11/20191002_082328-rotated.jpg" class="card-img-top"> --}}
                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">Your voice never stops emerging.</h5>
                                <p class="card-text">When I took part in the 2012 EV programme, I was working as a senior
                                    advisor to
                                    the Minister of Health’s Office of my country, Costa Rica. I remembered that
                                    some of my fellow EVs asked me at the time, as a joke: “What are you doing here?
                                    You have already <em>emerged</em>, you can talk with the big guys whenever you
                                    want!” &nbsp;Fortunately, the joke proved to be wrong.</p>
                                <p class="card-text">I think one of the most important teachings I took from my EV
                                    experience
                                    was to
                                    learn that there will always be people who have not heard your voice (yet), and
                                    so, of which you must find out how to let your voice “emerge” towards them.
                                    These people won’t necessarily be policy makers, or other “big guys”, as a
                                    fellow EV called them.</p>
                                <p class="card-text">Over the past 7 years, I have frequently found myself in situations
                                    where I
                                    had
                                    to use the knowledge and skills that I gained from my EV experience, such as
                                    using multimedia tools in an effective way, to let my voice “emerge” towards a
                                    myriad of actors coming from many different contexts: health professionals,
                                    labour union leaders, teachers, religious leaders, business people, and perhaps
                                    the most demanding group of all, my students at the university – now that the
                                    age gap is becoming more evident, trust me, EV skills have come in handy !</p>
                                <p class="card-text">It is funny to see how explaining a complex health situation to people
                                    who
                                    are
                                    not health professionals or who are just beginning their health career, becomes
                                    easier when using the communication techniques I learnt as an EV, and how
                                    receptive people can be when they perceive you are putting in some real effort
                                    into conveying your ideas in an approachable way. I dare you to do a Pecha Kucha
                                    presentation to explain what UHC is, in a meeting of the Chamber of Commerce!
                                </p>
                                <p class="card-text">The only thing else I can say, is, remember your voice needs to
                                    continue to
                                    emerge! You’re never done. Every situation is different, even for Emerging
                                    Voices.</p>

                                <div class="article-footer border-top p-4">

                                    <p class="author-name mb-0">Francisco Oviedo </p>
                                    <p class="author-position">EV 2012,
                                        Medical
                                        Officer, Ministry of Health of Costa Rica</p>

                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2018/07/Okikilo.jpg" class="card-img-top"> --}}
                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">EV4GH: There is always</h5>
                                <p class="card-text">Fresh from an MPH Program at ITM, which, by the way, didn’t disappoint
                                    after
                                    being recommended to me as (one of) the best in the world, I didn’t think I
                                    could be wowed by any new knowledge as far as global health was concerned. But
                                    the EV4GH program in 2018 (linked to the Liverpool Health Systems Research
                                    symposium) exceeded my expectations and opened me up to new levels and types of
                                    learnings which have pushed me several notches higher professionally. I have
                                    since discovered my preference for a research-based career and got accepted into
                                    a doctoral program, become part of very interesting professional networks and
                                    have been actively involved in the broader global/regional health space. The
                                    community of past EV alumni growing together and making visible impacts in the
                                    field of global health, somehow granted me the permission to also be a real
                                    change agent in my own ways. The EV4GH program has in many ways delivered what I
                                    had hoped for, in terms of exposure and scientific aptitude. Perhaps the biggest
                                    thing EV4GH contributed to my career is the process through which the EV program
                                    has stimulated my professional evolution. Rather than just spoon-feeding
                                    knowledge, EV4GH has instead unlocked in me an unending quest to be a real
                                    change maker and through that quest, I have discovered things which I could have
                                    never learned in any other way. For me this discovery has meant professional
                                    clarity, coupled with the ability to be flexible when needed. I’m perhaps not
                                    yet the “finished article” (i.e. “fully emerged”), but EV4GH has definitely set
                                    the work in progress.</p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Okikiolu Badejo </p>
                                    <p class="author-position">EV 2018,
                                        PhD
                                        Student at the Institute of Tropical Medicine, Antwerp and University of
                                        Antwerp</p>
                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/11/Renzo-Guinto.jpg" class="card-img-top"> --}}
                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">Decolonizing global health and the ‘EV vibe’</h5>
                                <p class="card-text">It was through the Emerging Voices for Global Health (EV4GH) program
                                    that I
                                    first
                                    realized I have an important and unique voice that needs to be heard by the
                                    world entire. Before, I thought that the cookie-cutter path for a wide-eyed
                                    neophyte Filipino doctor like me is to pursue an MPH abroad, find a consulting
                                    job in a USAID-funded firm, and forever be a reactive participant in the global
                                    health enterprise, going with the flow where limited opportunities arise. But
                                    thanks to EV4GH, I discovered that I possess the power to shape ideas and
                                    conversations, launch vibrant networks and innovative solutions, and inspire
                                    fellow emerging voices from around the world coming from my generation and those
                                    that are yet to come.</p>
                                <p class="card-text">#DecolonizeGlobalHealth, which started as a single tweet, may seem a
                                    vague
                                    construct that still requires unpacking. But what it simply tells us is that
                                    today, we have a new cadre of global health scholars and practitioners not just
                                    from the Global South but from the millennial generation who, through the gifts
                                    of modern education and community building, have developed superb technical and
                                    leadership capacities, witnessed first-hand global health’s chronic pathologies,
                                    and are now clamoring for a bigger space – and deeper respect – in the global
                                    health discourse. This development should not be seen as a disruptive attack to
                                    the mirage of global health peace, but as a transformative force for achieving
                                    equity and justice not just in the outcomes but also in the operations of the
                                    unfair global health machinery. EV4GH is part of this emerging planetary engine
                                    for global health decolonization – it is an effective scout for amazing talent
                                    that for a long time was invisible in our discipline, and a powerful convener
                                    for all voices, both emerging and emerged, to build lasting alliances for
                                    dismantling global health’s inherent coloniality and for co-designing a truly
                                    decolonized global health future.</p>
                                <p class="card-text">What is the kind of force that will decolonize global health? A few
                                    weeks
                                    ago, I
                                    was in the train from Antwerp to Brussels with Kristof Decoster and fellow EV
                                    Sophie Vusha and all of a sudden, I mentioned about the ‘EV vibe.’ For sure, the
                                    EV4GH committee has a list of selection criteria, but for me, the EV vibe is
                                    beyond an impressive CV, a long array of publications, and a prestigious PhD
                                    degree. The EV vibe is characterized by an infectious level of passion and
                                    energy, a renewable storage of creativity, innovativeness, and imagination, and
                                    undying flow of optimism and hope amid global health’s perennial disease and
                                    despair. The EVs of all generations may be many and diverse, but in most
                                    respects, we are united and one. Thanks to the EV vibe, you know an EV when you
                                    meet one. But the EV vibe must be handled with great care and responsibility, so
                                    that in the process of decolonization, we do not end up being neocolonizers
                                    ourselves.</p>
                                <p class="card-text">It is a deep personal honor and privilege that I will cherish within my
                                    lifetime
                                    to be surrounded by the EV vibe embodied by friends and comrades from places far
                                    and wide, and I feel thrilled about the collaborations that will infect the
                                    world with the EV vibe for decolonizing global health in the years and decades
                                    to come. May our tribe continue to increase – for the health of people, and for
                                    the planet too.</p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Renzo Guinto </p>
                                    <p class="author-position">EV 2014,
                                        Chief
                                        Planetary Doctor, PH Lab, Philippines and Doctor of Public Health graduate,
                                        Harvard
                                        University, USA </p>
                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/10/Sophie-Pic.jpg" class="card-img-top"> --}}
                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">Emerging Voices: Never stop learning to convey messages sharper –
                                    the many unheard voices in the world expect nothing less from
                                    us</h5>
                                <p class="card-text">Learning never stops, it only takes a willing heart. I participated in
                                    the
                                    <a href="https://old.ev4gh.net/">Emerging Voices for Global Health</a> (EV4GH) 2013
                                    venture linked to the <a
                                        href="https://phasa.org.za/2012/04/26/17th-icasa-conference-2013/">ICASA
                                        conference</a> in Cape Town, South Africa. ICASA – the International
                                    Conference on AIDS and Sexually Transmitted Infections in Africa – is organized
                                    biannually. It was the first time I was attending not only an international
                                    training but also a conference out of my country, Kenya. Throughout the training
                                    programme, we experienced different learning methods. Among others, we learnt
                                    about interactive presentation skills, moving away from the (still too common)
                                    “Death by PowerPoint” experience to real audience engagement using the – among
                                    EVs notorious – “<a
                                        href="https://24slides.com/presentbetter/what-is-a-pecha-kucha-presentation/">pecha
                                        kucha</a>” (PK) format. It’s an experience I have shared since then with my
                                    friends and colleagues. Pecha Kucha certainly boosted my presentation skills and
                                    confidence over time, so I think it’s a bit a pity that in recent ventures, PK
                                    was somewhat overtaken by other formats &amp; innovations with a view on
                                    effective presenting (like mindmapping, multimedia principles,…). But true, PK
                                    can be a bit tricky for presenters, and not every EV in my cohort was a PK
                                    “class act”! In Cape Town, we also had quite a bit of fun (of course) during the
                                    organized sightseeing, rather strongly “moderated” fishbowl discussions (ahum,
                                    Siphiwe?) and ‘social activities’.
                                </p>
                                <p class="card-text">But EV wasn’t just about the training programme. Formal &amp; informal
                                    networks
                                    were also formed, and it’s through one of these that I got to know about another
                                    opportunity a little after. Together with 2 other EVs from my batch, I attended
                                    a WHO sponsored training on Research Methods at the Effective Care Research unit
                                    in East London, South Africa. The course focused on conducting randomized
                                    control trials and Cochrane systematic reviews. Being part of the EV group, I
                                    was also introduced to the <a
                                        href="https://www.internationalhealthpolicies.org/">International health
                                        policies</a> (IHP) website and weekly newsletter (to which I subscribed),
                                    and this has enabled me to follow global health policy news &amp; publications
                                    over the years. Moreover, via the EV google group, I also got to know about a
                                    course on <a
                                        href="https://www.uantwerpen.be/en/research-groups/global-health-institute/education/ebq/">Epidemiology,
                                        Biostatics and qualitative research</a> which I attended in 2017, at the
                                    University of Antwerp. I also attended the 10th European Congress on Tropical
                                    Medicine and International Health (ECTMIH) in the same city – I remember there
                                    were quite some other EVs around from various cohorts (and the pizza nearby the
                                    train station ). In 2018, I participated as a coach in the online distance phase
                                    for new EVs for the Liverpool EV venture. As many of you know, the EV ‘model’
                                    tries to provide alumni with an opportunity to coach the next cohort of EVs,
                                    both in the distance and face to face (F2F) stage (funding allowing, of course,
                                    for the latter). I also reviewed abstracts for the 2018 HSR conference held in
                                    Liverpool. Since 2013, my network has expanded through interactions with various
                                    people in the global health systems research and policy community, it’s a pool
                                    to draw from or refer other people to whenever needed.</p>
                                <p class="card-text">The EV 2013 venture was perhaps “unique” due to its link with an HIV
                                    conference,
                                    a regional event too, as opposed to the other EV ventures all linked to (global)
                                    health systems research symposia. A number of us, however, work at the
                                    intersection with health systems, and hence the continued relevance of EV4GH
                                    also for us. May the program continue to spread through the world and reach the
                                    unheard voices.</p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Sophie Vusha Chabeda </p>
                                    <p class="author-position">EV
                                        2013,
                                        Research
                                        Officer, KEMRI Wellcome Trust Research Programme, Health Systems Research
                                        &amp;
                                        Ethics department, Kilifi, Kenya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/10/CRAZY-EV-MEMORIES.jpg" class="card-img-top"> --}}
                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">A Revolutionary Programme in Global Health – Emerging Voices for
                                    Global Health</h5>
                                <p class="card-text">If I reflect back on my career thus far, the one programme which I
                                    reckon
                                    was the
                                    start of it all (i.e. pushing me into what I coin a “research-advocate”) was the
                                    exposure to the <a href="https://old.ev4gh.net/">Emerging Voices for Global Health
                                        Programme.</a></p>
                                <p class="card-text">Okay, I know it’s hard to believe, especially if you follow me on
                                    social
                                    media,
                                    but I am actually an introvert and shy! I recall going to sit at my own big
                                    round table for lunch on the first day of the Emerging Voices programme back in
                                    2014 ( in Cape Town), I was also pretty much a spring chicken at the time! Enter
                                    the epic <a href="https://www.theimpactinitiative.net/people/nasreen-jessani">Nasreen
                                        Jessani</a> who came over and introduced herself, and well the rest is
                                    history from amazing roommates <a
                                        href="https://www.facebook.com/beverlylorraineho">Beverly
                                        Lorraine Ho</a>
                                    and <a
                                        href="https://www.facebook.com/maivalera?fref=search&amp;__tn__=%2Cd%2CP-R&amp;eid=ARC0cjNKxBWg4LOJB2b29eraRD7nHA9LVhEo3aI1lNYqwvZkXt3-yqlcDB39SFZBJy0pc92OLQKbw1ov">Mai
                                        Valera</a> (which FYI also helped with my being “afraid of the dark
                                    syndrome”) … to being part of a network of accomplished health systems and
                                    policy researchers from all over the globe, and let’s not forget about our
                                    mentors who are on a level of awesomeness as well, specifically thinking here of
                                    the very much missed <a
                                        href="https://twitter.com/ev4gh/status/870135840764289024">Asmat
                                        Malik</a>.
                                </p>
                                <p class="card-text">Also, I can’t not mention this, the EV programme is definitely where I
                                    learnt how
                                    to blog and write in this way (please don’t remove this, <a
                                        href="https://twitter.com/KristofDecoste1?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Kristof
                                        Decoster</a>)! Other highlights to date have been, to just learn and grow
                                    with others; moreover, the opportunity to continue contributing to the programme
                                    as an Alumnus/a – for me this is one of the selling points of the EV programme –
                                    how can you give back, remain engaged, … Well, essentially, it’s anything but a
                                    one-off programme!</p>
                                <p class="card-text">Finally, the programme also led to the introduction and finetuning of
                                    public
                                    speaking, staying up-to- date, collaborating across boundaries despite time
                                    zones and geographies with no need for resources in many cases, just
                                    #EVCommitment, and without a doubt critical thinking which is promoted and
                                    punted as part of the programme.</p>
                                <p class="card-text">The distinct “EV way of doing things” is precisely what’s needed in
                                    global
                                    health, just imagine if we organised a session at the United Nations General
                                    Assembly (UNGA) next year. True, I don’t usually go to those (you can find out
                                    why <a
                                        href="http://youngleadersfordev.org/99-other/2016/06/talking-youth-participation-and-the-sdgs-with-shakira-choonara/">here</a>)
                                    but hey, <a
                                        href="https://www.dw.com/en/greta-thunberg-kicks-off-un-youth-climate-summit/a-50532292">Greta
                                        Thunberg</a> may have just changed this for me!</p>
                                <p class="card-text"><em>Picture Description: <a
                                            href="https://www.facebook.com/sameera.seraj">Sameera
                                            Hussain
                                            (EV2010)</a>, a leading fellow on the Sustainable Development Goals
                                        (SDGs) invited me for a hearty meal post speaking at the opening plenary at
                                        the 2017 Canadian Conference in Global Health. Who would have thought the
                                        main speaker could dress up, go trick-or-treating ànd collect a bag full of
                                        candy (don’t judge) and thanks for supplying the outfit Sameera!</em></p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Shakira Choonara </p>
                                    <p class="author-position">EV
                                        2014,
                                        African Union</p>
                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/09/seye-abimbo-photo-1-e1569301211974.jpeg" class="card-img-top"> --}}
                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">From Emerging Voices to Enduring Friendships</h5>
                                <p class="card-text">It was C.S. Lewis, one of my all-time favourite writers, who once
                                    said:
                                    “Friendship is born at that moment when one person says to another: ‘What! You
                                    too? I thought I was the only one.” That was how the story of my Emerging Voices
                                    for Global Health (EV) experience began in 2010, and that is how it has
                                    continued ever since. The many moments of discovering kindred spirits, leading
                                    to enduring friendships from each cohort; friends without whom my life and
                                    career as a global health and health systems researcher would be much less
                                    interesting, rewarding, and rich. Friends from whom I learn regularly, from whom
                                    I draw inspiration, who are generous with their ideas and time; who offer their
                                    ears to hear me rant away about my latest academic obsessions; who listen to my
                                    arguments patiently and nudge me to the path of moderation; who partner with me
                                    on real or dream projects; friends who are at the same time intellectual
                                    co-conspirators. I am grateful for the conversations, for the friendly
                                    disputations, and most of all, for kindness. When I look back at my EV
                                    experience so far, one thing stands out – friendships; the many friends I’ve
                                    made along the way. For some, our interactions are episodic, we pick up from
                                    where we left off the last time, often two or more years ago. But for others
                                    they are more continuous; every few weeks. Long may the EV programme continue!
                                    And, indeed, long may these friendships – mine and others’ – continue!</p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Seye Abimbola</p>
                                    <p class="author-position">EV
                                        2010,
                                        Lecturer, School of Public Health, University of Sydney, Australia &amp;
                                        Editor-in-Chief, BMJ Global Health</p>
                                </div>
                            </div>
                        </div>

                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/09/File_001.jpeg" class="card-img-top"> --}}

                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">My journey as an Emerging Voice for Global Health</h5>
                                <p class="card-text"><em>“Once an emerging voice (EV), always an EV”</em> – I think
                                    this statement best describes the Emerging Voices for Global Health (EV4GH)
                                    program. EV4GH has ignited my global health passion, shaping where I am now
                                    and my future plans.</p>
                                <p class="card-text">I was one of the EVs in 2014 (Cape Town). Through EV4GH, I got a
                                    chance to
                                    attend (fully funded) the Global Symposium on Health Systems Research
                                    (HSR2014), which I wouldn’t have been able to attend otherwise. This opened
                                    doors for me to get to know the key players in the (health systems/policy)
                                    field, resulting in my involvement as an intern then consultant for the
                                    World Health Organization (WHO) and Gavi. At WHO, I worked with WHO Europe
                                    and the Headquarters at the Alliance for Health Policy and Systems Research
                                    – to the latter I was introduced through EVGH and Health Systems Global
                                    (HSG). Since then, I have finished my PhD (with some chapters written in
                                    collaboration with the institutions I met through EV4GH), pursued a postdoc
                                    at Yale, and now I’m working as a researcher at Harvard, still focusing on
                                    health systems. Indeed, EV4GH has been the launch pad for my career.
                                </p>
                                <p class="card-text">Beyond being a launch pad, EV4GH has provided so much more. With EV4GH
                                    offering additional social media training, I have also been actively
                                    involved with the communications team of HSG for five years (and
                                    continuing). Many EVs know the <em>Pecha Kucha</em>
                                    presentation format, which I have used up to this day when I wanted to give
                                    compelling stories and lectures. If most researchers focus on publishing in
                                    high impact journals (for good reasons), as an EV, I also had the privilege
                                    of writing for the International Health Policies (IHP) blog, allowing me to
                                    share with a wider audience my perspectives on issues that matter the most
                                    to me. Being a global network, it has been one of my main sources when
                                    seeking potential project collaborators and advice on the local context of a
                                    foreign country I am working on.</p>
                                <p class="card-text">For me, two things made my experience with the EV4GH stand out since
                                    Cape
                                    Town: 1. the relentless engagement of the alumni (thanks Kristof and the
                                    Secretariat) by providing constant updates and opportunities where EVs can
                                    take part in; and 2. the inspiring and vibrant community, where alumni are
                                    supporting each other, collaborating, and ensuring that we all excel in our
                                    own endeavors. It makes me proud to be an EV every time I hear how others
                                    have made great strides in their work. We can only hope that the network
                                    continues to grow and open doors especially for those who have great
                                    potential but may not have all the means and resources to excel.</p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Erlyn Rachelle Macarayan</p>
                                    <p class="author-position">EV
                                        2014,
                                        Harvard Global Health Institute, Harvard TH Chan School of Public Health,
                                        Cambridge,
                                        MA, USA </p>
                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/08/Charles.jpg " class="card-img-top"> --}}

                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">Emerging Voices: the path to a global mindset and spreading your
                                    wings as a young researcher </h5>
                                <p class="card-text">Of all my international experiences so far, the Emerging Voices for
                                    Global
                                    Health (EV4GH) programme stands out. As Sheryl Crow sang in ‘<a
                                        href="https://www.youtube.com/watch?v=dK9eLe8EQps">The first cut is the
                                        deepest</a>’, indeed it is. Fresh from my postgraduate degree and
                                    working on my first research project, there I was in Vancouver (EV 2016), on
                                    my first expedition to global health meetings. Today, my international
                                    network has grown. I feel more confident in all audiences with the energy to
                                    shake the global health hegemony. </p>
                                <p class="card-text">Since Vancouver, I have participated in the organization of several
                                    conferences, attended others and won career development fellowships. Fresh
                                    from the EV experience, I chaired the logistics committee for the <a
                                        href="https://chwsymposium.musph.ac.ug/">First International Conference
                                        on Community Health Workers</a> organised by the Community Health
                                    Workers (CHWs) Thematic Working Group (TWG) of Health Systems Global in
                                    February 2017. This event in Kampala, Uganda was attended by over 450 people
                                    from more than 20 countries, including three EV alumni. During the
                                    conference, I also moderated the opening and closing plenaries building on
                                    the skills I gained from the EV programme. Consequently, we collaboratively
                                    wrote a <a
                                        href="https://www.internationalhealthpolicies.org/blogs/getting-community-health-services-out-of-survival-mode-reflections-from-the-1st-international-symposium-on-community-health-workers/">blog</a>
                                    about the conference proceeding which was published in International Health
                                    Policies. The second symposium is taking place in Bangladesh in November
                                    2019. In April 2019, we hosted the <a href="https://ifehmuehsa2019.musph.ac.ug/">Third
                                        International
                                        Federation of Environmental Health Academic Conference</a> in Kampala,
                                    Uganda. I was a member of the scientific committee and chair of the
                                    logistics team. Since joining the EV program, I have attended a couple of
                                    scientific meetings including the <u>10th European Congress on Tropical
                                        Medicine and International Health</u> in Antwerp and the second
                                    planetary health meeting in Edinburgh, among others. I have also been
                                    awarded the <a href="http://cartafrica.org/">Consortium for Advanced
                                        Research Training in Africa (CARTA) </a>&nbsp;and Fogarty Global Health
                                    Fellowships (FGHF) to support my PhD work. </p>
                                <p class="card-text">Overall, the EV experience boosted my professional confidence and
                                    self-esteem. It
                                    saved me from thinking (only) within my own space and instilled a global
                                    mindset. Moving forward, I crave for an EV community that engages alumni
                                    aggressively post-symposium, even if I know this is a “resource constrained”
                                    network.</p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Charles Ssemugabo</p>
                                    <p class="author-position">EV
                                        2016,
                                        Research Associate in the Department of Disease Control and Environmental
                                        Health
                                        at
                                        Makerere University School of Public Health</p>
                                </div>
                            </div>
                        </div>
                        <div class="card testimonial-card mb-5 shadow-lg">
                            {{-- <img src="https://old.ev4gh.net/wp-content/uploads/2019/08/Adithya-P.jpg" class="card-img-top"> --}}

                            <div class="card-body">
                                  <i class="fas fa-quote-left quote-icon mb-3"></i>
                                <h5 class="card-title">The EV effect – tangibles and intangibles</h5>
                                <p class="card-text">Participating in the 2014 “Cape Town” edition of Emerging Voices was a
                                    great
                                    experience in itself. It opened the doors to help me imagine more creative and
                                    interesting communication of my research. More importantly, I was able to
                                    interact with other young researchers from around the world and learn about
                                    methods they were using for their work. I can say that in a quiet way, the EV
                                    venture provided me the little nudge I needed to publish (occasionally with
                                    other EVs and mentors!) and to enroll for doctoral studies. I also feel more
                                    aware of what is going on in global health due to the active EV Google Group.
                                    These have been critical changes since the program. However, what has been most
                                    interesting to witness is the growing stature of several of my fellow EVs. While
                                    I always needed to push myself to engage with audiences, it has been a pleasure
                                    to see my fellow EVs take (and occasionally take over) important stages to
                                    communicate important messages. Be it talking to prominent leaders or appearing
                                    on television to participate in discussions, EVs are seen everywhere in the
                                    sphere of global health. EVs are also regularly participating in, organizing and
                                    contributing to webinars, which are an effective way to disseminate knowledge
                                    and skills to global audiences. I have attended some of these, and found them
                                    very useful. This is inspiring, because we surely need our voices heard in the
                                    context of the most pressing issues all around us. Some of these EVs have also
                                    been kind enough to review my work and provide me with feedback when I have
                                    approached them. I can say that being a part of this network has been very
                                    useful, in many tangible and intangible ways.</p>
                                <div class="article-footer border-top p-4">
                                    <p class="author-name mb-0">Adithya Pradyumna</p>
                                    <p class="et_pb_testimonial_meta"><span class="et_pb_testimonial_position">(EV2014,
                                            PhD
                                            student with the Health Impact Assessment Research Group at the Swiss
                                            Tropical
                                            and
                                            Public Health Institute, Basel, Switzerland)</p>
                                </div>
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
