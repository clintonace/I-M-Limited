<x-guest-layout>

    <x-slot name="body">

           {{-- <!-- Map Section -->
    <section class="map-section">
        <div class="map-outer">
          <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="/onboarding/images/icons/contact-map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
          </div>
        </div>
      </section>
      <!-- End Map Section --> --}}

      <style>

        .talent-card {
            transition: all 0.35s ease;
        }

        .talent-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0,0,0,0.12);
        }

        .animated-list li {
            list-style: none;
        }

      </style>

            <!-- Banner Section-->
            <section class="banner-section -type-15 fade-top"
                    style="
                        position: relative;
                        overflow: hidden;
                    "
                >

                    <!-- Background Video -->
                    <video
                        autoplay
                        muted
                        loop
                        playsinline
                        style="
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            min-width: 100%;
                            min-height: 100%;
                            width: auto;
                            height: auto;
                            transform: translate(-50%, -50%);
                            object-fit: cover;
                            z-index: 0;
                        "
                    >
                        <source src="/onboarding/video/reg.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <!-- Black Fade Overlay -->
                    <div
                        style="
                            position: absolute;
                            inset: 0;
                            background: linear-gradient(
                                to bottom,
                                rgba(0,0,0,0.8) 0%,
                                rgba(0,0,0,0.4) 40%,
                                rgba(0,0,0,0.05) 80%
                            );
                            z-index: 1;
                        "
                    ></div>

                    <!-- Content -->
                    <div style="" class="auto-container" style="position: relative; z-index: 2;">
                        <div class="cotnent-box">
                            <div style="margin:100px; color: white" class="title-box wow fadeInUp">
                                <h1 class="font-size: 24;">Your Career, Elevated.</h1>

                                <div style="font-size: 18px;" class="text-white">
                                    Work with global companies from the comfort of your home country —
                                    with structure, support, and opportunities to help you grow.
                                </div>

                                <div class="text-white mt-2">
                                    <strong>Made in Africa. Serving the World.</strong>
                                </div>

                                <a href="{{route('register', ['type' => 'candidate'])}}"
                                    style="
                                            display:inline-block;
                                            background-color:#E94E1B;
                                            color:black;
                                            font-weight:700;
                                            padding:15px 35px;
                                            border-radius:40px;
                                            text-decoration:none;
                                            transition:all 0.3s ease;
                                    "
                                    onmouseenter="
                                            this.style.backgroundColor='#ffffff';
                                            this.style.color='#E94E1B';
                                            this.style.transform='translateY(-3px)';
                                            this.style.boxShadow='0 12px 30px rgba(0,0,0,0.3)';
                                    "
                                    onmouseleave="
                                            this.style.backgroundColor='#E94E1B';
                                            this.style.color='black';
                                            this.style.transform='translateY(0)';
                                            this.style.boxShadow='none';
                                    "
                                    >
                                        JOIN TALENT NETWORK
                                    </a>
                            </div>
                        </div>
                    </div>

            </section>


            <section style="background:#000; padding:140px 0; position:relative; overflow:hidden;">

                <!-- Background Grid -->
                <div style="
                    position:absolute;
                    top:0; left:0;
                    width:100%; height:100%;
                    background:
                    linear-gradient(rgba(233,78,27,0.03) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(233,78,27,0.03) 1px, transparent 1px);
                    background-size:90px 90px;
                    opacity:.3;
                "></div>

                <div class="auto-container" style="position:relative; z-index:2;">

                    <div style="text-align:center; margin-bottom:100px;">
                        <h2 style="color:#fff; font-size:44px;">
                            What <span style="color:#E94E1B;">You</span> Get ?
                        </h2>
                        <p style="color:#bbb;">Work Globally. Grow Confidently.</p>
                        <p style="color:#bbb;">Build meaningful, long-term global careers — without relocation.</p>
                    </div>

                    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:50px;">

                        @foreach ([
                            ['icon' => 'fa-globe', 'text' => 'Premium global opportunities'],
                            ['icon' => 'fa-hand-holding-dollar', 'text' => 'Fair, transparent compensation'],
                            ['icon' => 'fa-diagram-project', 'text' => 'Structured onboarding & systems'],
                            ['icon' => 'fa-laptop-code', 'text' => 'Access to global-standard tools'],
                            ['icon' => 'fa-chart-line', 'text' => 'Career development & growth'],
                            ['icon' => 'fa-users', 'text' => 'A supportive talent community'],
                        ] as $item)

                        <div style="
                            background:#111;
                            padding:70px;
                            border-radius:20px;
                            border:1px solid rgba(255,255,255,.05);
                            transition:all .4s ease;
                            position:relative;
                        "
                        onmouseenter="
                            this.style.transform='translateY(-12px)';
                            this.style.boxShadow='0 40px 100px rgba(233,78,27,.25)';
                        "
                        onmouseleave="
                            this.style.transform='translateY(0)';
                            this.style.boxShadow='none';
                        ">

                            <div style="
                                    font-size:40px;
                                    color:#e94e1b;
                                    margin-bottom:25px;
                                ">
                                <i class="fa-solid {{ $item['icon'] }}"></i>
                            </div>

                            <h5 style="color:#fff;">{{ $item['text'] }}</h5>

                            <!-- Corner Accent -->
                            <div style="
                                position:absolute;
                                bottom:0; right:0;
                                width:80px; height:80px;
                                border-bottom:2px solid rgba(233,78,27,.4);
                                border-right:2px solid rgba(233,78,27,.4);
                            "></div>

                        </div>

                        @endforeach

                    </div>

                </div>
            </section>


            <section style="
                    background:#000;
                    padding:160px 20px;
                    position:relative;
                    overflow:hidden;
                ">

                <!-- LARGE HEXAGON -->
                <div style="
                    position:absolute;
                    bottom:-200px;
                    left:-200px;
                    width:600px;
                    height:600px;
                    border:1px solid rgba(233,78,27,0.15);
                    clip-path:polygon(25% 6%,75% 6%,100% 50%,75% 94%,25% 94%,0% 50%);
                    transform:rotate(25deg);
                    pointer-events:none;
                "></div>

                <!-- MEDIUM HEXAGON -->
                <div style="
                    position:absolute;
                    bottom:-120px;
                    left:-120px;
                    width:420px;
                    height:420px;
                    border:1px solid rgba(233,78,27,0.12);
                    clip-path:polygon(25% 6%,75% 6%,100% 50%,75% 94%,25% 94%,0% 50%);
                    transform:rotate(-15deg);
                    pointer-events:none;
                "></div>

                <!-- SMALL HEXAGON -->
                <div style="
                    position:absolute;
                    bottom:-60px;
                    left:-60px;
                    width:260px;
                    height:260px;
                    border:1px solid rgba(233,78,27,0.18);
                    clip-path:polygon(25% 6%,75% 6%,100% 50%,75% 94%,25% 94%,0% 50%);
                    transform:rotate(10deg);
                    pointer-events:none;
                "></div>

                <div class="build-grid" style="
                    max-width:1200px;
                    margin:auto;
                    display:grid;
                    grid-template-columns:1fr 1fr;
                    gap:100px;
                    align-items:center;
                    position:relative;
                    z-index:0;
                ">

                    <!-- LEFT SIDE -->
                    <div>

                        <h2 style="
                            font-size:48px;
                            font-weight:600;
                            color:#fff;
                            line-height:1.2;
                            margin-bottom:30px;
                            transition:.4s ease;
                        "
                        onmouseenter="this.style.color='#E94E1B'"
                        onmouseleave="this.style.color='#fff'">
                            We <span style="color:#E94E1B;">Build</span> With You,
                            <br> Not Around <span style="color:#E94E1B;">You</span>
                        </h2>

                        <p style="
                            color:#aaa;
                            font-size:20px;
                            line-height:1.8;
                            max-width:520px;
                        ">
                            We don’t see you as a CV. We see you as a professional
                            with potential — and we equip you with structure,
                            systems and support to thrive globally.
                        </p>

                    </div>

                    <!-- RIGHT SIDE -->
                    <div class="features-grid" style="
                        display:grid;
                        grid-template-columns:1fr 1fr;
                        gap:70px 60px;
                    ">

                        <!-- Feature Item Template -->
                        <div style="padding-left:25px;border-left:1px solid rgba(255,255,255,.1);transition:.4s ease;"
                        onmouseenter="this.style.borderLeft='1px solid #E94E1B';this.style.transform='translateX(8px)'"
                        onmouseleave="this.style.borderLeft='1px solid rgba(255,255,255,.1)';this.style.transform='translateX(0)'">

                            <div style="width:52px;height:52px;border-radius:14px;background:rgba(233,78,27,.12);display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                                <i class="fa-solid fa-bullseye" style="color:#E94E1B;"></i>
                            </div>

                            <h4 style="color:#fff;margin-bottom:10px;">Skills Development</h4>
                            <p style="color:#aaa;font-size:15px;line-height:1.7;">
                                Structured upskilling in high-demand global competencies.
                            </p>
                        </div>

                        <div style="padding-left:25px;border-left:1px solid rgba(255,255,255,.1);transition:.4s ease;"
                        onmouseenter="this.style.borderLeft='#E94E1B';this.style.transform='translateX(8px)'"
                        onmouseleave="this.style.borderLeft='1px solid rgba(255,255,255,.1)';this.style.transform='translateX(0)'">

                            <div style="width:52px;height:52px;border-radius:14px;background:rgba(233,78,27,.12);display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                                <i class="fa-solid fa-comments" style="color:#E94E1B;"></i>
                            </div>

                            <h4 style="color:#fff;">Communication Enhancement</h4>
                            <p style="color:#aaa;font-size:15px;line-height:1.7;">
                                Build clarity and cross-cultural confidence.
                            </p>
                        </div>

                        <div style="padding-left:25px;border-left:1px solid rgba(255,255,255,.1);transition:.4s ease;"
                        onmouseenter="this.style.borderLeft='#E94E1B';this.style.transform='translateX(8px)'"
                        onmouseleave="this.style.borderLeft='1px solid rgba(255,255,255,.1)';this.style.transform='translateX(0)'">

                            <div style="width:52px;height:52px;border-radius:14px;background:rgba(233,78,27,.12);display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                                <i class="fa-solid fa-briefcase" style="color:#E94E1B;"></i>
                            </div>

                            <h4 style="color:#fff;">Professional Alignment</h4>
                            <p style="color:#aaa;font-size:15px;line-height:1.7;">
                                Align strengths with real global opportunities.
                            </p>
                        </div>

                        <div style="padding-left:25px;border-left:1px solid rgba(255,255,255,.1);transition:.4s ease;"
                        onmouseenter="this.style.borderLeft='#E94E1B';this.style.transform='translateX(8px)'"
                        onmouseleave="this.style.borderLeft='1px solid rgba(255,255,255,.1)';this.style.transform='translateX(0)'">

                            <div style="width:52px;height:52px;border-radius:14px;background:rgba(233,78,27,.12);display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                                <i class="fa-solid fa-heart-pulse" style="color:#E94E1B;"></i>
                            </div>

                            <h4 style="color:#fff;">Well-being Support</h4>
                            <p style="color:#aaa;font-size:15px;line-height:1.7;">
                                Mental resilience systems for long-term success.
                            </p>
                        </div>

                        <div style="padding-left:25px;border-left:1px solid rgba(255,255,255,.1);transition:.4s ease;"
                        onmouseenter="this.style.borderLeft='#E94E1B';this.style.transform='translateX(8px)'"
                        onmouseleave="this.style.borderLeft='1px solid rgba(255,255,255,.1)';this.style.transform='translateX(0)'">

                            <div style="width:52px;height:52px;border-radius:14px;background:rgba(233,78,27,.12);display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                                <i class="fa-solid fa-chart-line" style="color:#E94E1B;"></i>
                            </div>

                            <h4 style="color:#fff;">Performance Coaching</h4>
                            <p style="color:#aaa;font-size:15px;line-height:1.7;">
                                Continuous feedback and measurable growth frameworks.
                            </p>
                        </div>

                    </div>

                </div>

            </section>

            <style>
            @media (max-width: 992px) {

                .build-grid {
                    grid-template-columns: 1fr !important;
                    gap: 60px !important;
                }

                .features-grid {
                    grid-template-columns: 1fr !important;
                }

            }
            </style>


            <section style="
                    background:#000;
                    padding:150px 0;
                    position:relative;
                    overflow:hidden;
                ">

                    <!-- Subtle Background Grid -->
                    <div style="
                        position:absolute;
                        inset:0;
                        background:
                        linear-gradient(rgba(233,78,27,0.03) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(233,78,27,0.03) 1px, transparent 1px);
                        background-size:100px 100px;
                        opacity:.3;
                        pointer-events:none;
                    "></div>

                    <div class="auto-container" style="position:relative; z-index:2;">

                        <!-- Section Title -->
                        <div style="text-align:center; margin-bottom:110px;">
                            <h2 style="
                                color:#fff;
                                font-size:44px;
                                font-weight:600;
                            ">
                                Who We’re <span style="color:#E94E1B;">Looking</span> For.
                            </h2>
                            <p style="color:#bbb; margin-top:15px;">
                                Professionals ready to thrive in global environments.
                            </p>
                        </div>

                        <!-- Grid Layout -->
                        <div style="
                            display:grid;
                            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
                            gap:80px;
                        ">

                            @foreach([
                                [
                                    'title' => 'Capability',
                                    'text'  => 'Skilled, reliable professionals with strong technical or domain expertise.'
                                ],
                                [
                                    'title' => 'Communication',
                                    'text'  => 'Clear communicators who collaborate confidently across global teams.'
                                ],
                                [
                                    'title' => 'Mindset',
                                    'text'  => 'Growth-oriented, structured, accountable, and ready for global exposure.'
                                ]
                            ] as $block)

                            <div style="
                                padding-left:40px;
                                border-left:2px solid rgba(233,78,27,0.4);
                                transition:.4s ease;
                            "
                            onmouseenter="
                                this.style.borderLeft='2px solid #E94E1B';
                                this.style.transform='translateX(10px)';
                            "
                            onmouseleave="
                                this.style.borderLeft='2px solid rgba(233,78,27,0.4)';
                                this.style.transform='translateX(0)';
                            ">

                                <h4 style="
                                    color:#fff;
                                    font-size:22px;
                                    margin-bottom:20px;
                                    font-weight:600;
                                ">
                                    {{ $block['title'] }}
                                </h4>

                                <p style="
                                    color:#bbb;
                                    font-size:18px;
                                    line-height:1.8;
                                ">
                                    {{ $block['text'] }}
                                </p>

                            </div>

                            @endforeach

                        </div>

                    </div>

            </section>


            <section style="
    background:#000;
    padding:160px 0;
    position:relative;
    overflow:hidden;
">

    <!-- Subtle Grid Background -->
    <div style="
        position:absolute;
        inset:0;
        background:
        linear-gradient(rgba(233,78,27,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(233,78,27,0.03) 1px, transparent 1px);
        background-size:100px 100px;
        opacity:.3;
        pointer-events:none;
    "></div>

    <div class="auto-container" style="position:relative; z-index:2;">

        <!-- Main Flex Layout -->
        <div style="
            display:flex;
            align-items:center;
            justify-content:space-between;
            position:relative;
            gap:60px;
        ">

            <!-- LEFT CONTENT -->
            <div style="max-width:520px;">

                <h2 style="
                    color:#fff;
                    font-size:46px;
                    font-weight:600;
                    line-height:1.2;
                    margin-bottom:25px;
                ">
                    Built for <span style="color:#E94E1B;">Global</span> Teams.
                </h2>

                <p style="
                    color:#bbb;
                    font-size:18px;
                    line-height:1.8;
                    margin-bottom:40px;
                ">
                    We connect structured, growth-ready professionals to global companies 
                    through transparent systems and measurable productivity.
                </p>

                <div style="
                    display:flex;
                    gap:30px;
                ">
                    <div>
                        <h4 style="color:#fff; font-size:22px; margin-bottom:10px;">Structured</h4>
                        <p style="color:#888;">Clear workflows and accountability systems.</p>
                    </div>

                    <div>
                        <h4 style="color:#fff; font-size:22px; margin-bottom:10px;">Measured</h4>
                        <p style="color:#888;">Performance insights that drive results.</p>
                    </div>
                </div>

            </div>


            <!-- RIGHT VISUAL BLOCK -->
            <div style="
                position:relative;
                width:600px;
                height:650px;
                border-radius:40px;
                background:linear-gradient(180deg,#E94E1B,#8c2b0f);
                display:flex;
                align-items:flex-end;
                justify-content:center;
            ">

                <!-- IMAGE -->
                <img src="/onboarding/images/peeps.png" alt="Monitor"
                     style="
                        height:720px;
                        position:absolute;
                        bottom:0;
                        object-fit:contain;
                     ">

                <!-- TOP LEFT FLOATING CARD -->
                <div style="
                    position:absolute;
                    top:-60px;
                    left:-80px;
                    background:#111;
                    border-radius:20px;
                    padding:25px;
                    width:280px;
                    box-shadow:0 30px 60px rgba(0,0,0,.5);
                ">

                    <h4 style="color:#fff; margin-bottom:15px;">Marketing</h4>

                    <div style="
                        height:6px;
                        background:#222;
                        border-radius:10px;
                        overflow:hidden;
                        margin-bottom:10px;
                    ">
                        <div style="
                            width:48%;
                            height:100%;
                            background:#E94E1B;
                        "></div>
                    </div>

                    <p style="color:#aaa; font-size:14px;">18 hrs • 48%</p>
                </div>


                <!-- BOTTOM RIGHT FLOATING CARD -->
                <div style="
                    position:absolute;
                    bottom:-50px;
                    right:-80px;
                    background:#111;
                    border-radius:20px;
                    padding:25px;
                    width:300px;
                    box-shadow:0 30px 60px rgba(0,0,0,.5);
                ">

                    <h4 style="color:#fff; margin-bottom:20px;">Weekly Limit</h4>

                    <div style="
                        height:8px;
                        background:#222;
                        border-radius:20px;
                        overflow:hidden;
                        margin-bottom:12px;
                    ">
                        <div style="
                            width:60%;
                            height:100%;
                            background:#E94E1B;
                        "></div>
                    </div>

                    <div style="display:flex; justify-content:space-between;">
                        <span style="color:#aaa;">40 hrs</span>
                        <span style="color:#fff;">60%</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


            <section style="background:#000; padding:140px 0;">

                <div class="auto-container">

                    <div style="text-align:center; margin-bottom:100px;">
                        <h2 style="color:#fff; font-size:44px;"><span style="color:#E94E1B;">How</span> It Works</h2>
                    </div>

                    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:60px;">

                        @foreach([
                            ['icon' => 'fa-user-plus', 'text' => 'Create your profile'],
                            ['icon' => 'fa-circle-check', 'text' => 'Get verified'],
                            ['icon' => 'fa-handshake', 'text' => 'Get matched'],
                            ['icon' => 'fa-rocket', 'text' => 'Deliver with confidence'],
                            ['icon' => 'fa-briefcase', 'text' => 'Work across projects'],
                        ] as $step => $item)

                        <div style="
                            background:#111;
                            padding:80px;
                            border-radius:20px;
                            border:1px solid rgba(255,255,255,.05);
                            position:relative;
                            transition:.4s ease;
                        "
                        onmouseenter="
                            this.style.transform='translateY(-12px)';
                            this.style.boxShadow='0 50px 120px rgba(233,78,27,.25)';
                        "
                        onmouseleave="
                            this.style.transform='translateY(0)';
                            this.style.boxShadow='none';
                        ">

                        <!-- Icon -->
                        <div style="
                            font-size:42px;
                            color:#e94e1b;
                            margin-bottom:25px;
                        ">
                            <i class="fa-solid {{ $item['icon'] }}"></i>
                        </div>

                            <h4 style="color:#E94E1B; margin-bottom:20px;">
                                Step {{ $step + 1 }}
                            </h4>

                            <p style="color:#fff;">{{ $item['text'] }}</p>

                        </div>

                        @endforeach


                        <!-- FINAL CTA CARD -->
                        <a href="{{route('register', ['type' => 'candidate'])}}"
                        style="
                                background:linear-gradient(135deg,#E94E1B,#ff8a4d);
                                padding:80px;
                                border-radius:20px;
                                text-decoration:none;
                                color:#000;
                                display:flex;
                                flex-direction:column;
                                justify-content:center;
                                align-items:center;
                                transition:.4s ease;
                        "
                        onmouseenter="
                                this.style.transform='translateY(-12px)';
                                this.style.boxShadow='0 60px 140px rgba(233,78,27,.35)';
                        "
                        onmouseleave="
                                this.style.transform='translateY(0)';
                                this.style.boxShadow='none';
                        ">

                            <div style="
                                width:70px;
                                height:70px;
                                border-radius:50%;
                                background:#000;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                margin-bottom:25px;
                            ">
                                <i class="fa-solid fa-arrow-up-right-from-square"
                                style="color:#E94E1B; font-size:24px;"></i>
                            </div>

                            <h4 style="
                                font-weight:700;
                                font-size:22px;
                                text-align:center;
                            ">
                                Join the Talent Network
                            </h4>

                            <!-- <p style="
                                margin-top:15px;
                                text-align:center;
                                font-weight:500;
                            ">
                                Start your global journey today.
                            </p> -->

                        </a>

                    </div>

                </div>

            </section>


            <!-- <section style="padding: 100px 0; background-color: #000;" class="layout-pt-100 layout-pb-120 ">
                <div class="auto-container text-center">

                    <div class="sec-title wow fadeInUp">
                        <h2 class="text-white">Impact</h2>
                        <h2 class="sub-title text-white">Your Growth, Our Priority</h2>
                    </div>

                    <p class="mt-4 wow fadeInUp text-white">
                        Our talents have contributed to impact-driven projects across Europe and Africa —
                        growing in confidence, skill, and global exposure.
                    </p>

                    <a href="#stories" class="btn btn btn-style-two text-white mt-4 wow fade-top" data-wow-delay="300ms">
                        → Read Talent Stories
                    </a>

                </div>
            </section> -->
       
    </x-slot>

</x-guest-layout>
