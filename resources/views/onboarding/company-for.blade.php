<x-guest-layout>

    <x-slot name="body">

     <!-- <section class="map-section">
        <div class="map-outer">
          <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="/onboarding/images/icons/contact-map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
          </div>
        </div>
      </section> -->

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
                    <source src="/onboarding/video/shake.mp4" type="video/mp4">
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
                            <h1 class="font-size: 24;">Build Your Global Team With Confidence.</h1>

                            <div style="font-size: 18px;" class="text-white">
                                Access exceptional African talent supported by systems, structure,
                                and supervision — for full-time roles or complete project delivery.
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
                                    Build With I&M
                                </a>

                        </div>
                    </div>
                </div>

        </section>

        <section 
                style="
                    background:#000;
                    padding:120px 0;
                    color:white;
                    transition:all 0.5s ease;
                "
                onmouseenter="
                    document.getElementById('whatImage').src='/onboarding/images/wo3.png';
                "
                onmouseleave="
                    document.getElementById('whatImage').src='/onboarding/images/wo5.png';
                "
            >

            <div class="auto-container">

                <h2 style="
                    text-align:center;
                    font-size:42px;
                    font-weight:600;
                    margin-bottom:80px;
                    letter-spacing:1px;
                ">
                    What <span style="color:#E94E1B;">You</span> Get .
                </h2>

                <div style="
                    display:flex;
                    align-items:center;
                    gap:80px;
                ">

                    <!-- Image -->
                    <div style="flex:1;">
                        <img 
                            id="whatImage"
                            src="/onboarding/images/wo3.png"
                            style="
                                width:100%;
                                border-radius:25px;
                                transition:all 0.6s ease;
                                box-shadow:0 40px 80px rgba(0,0,0,0.4);
                            "
                        >
                    </div>

                    <!-- Content -->
                    <div class="text-box" style="flex:1;">

                        <ul style="
                            list-style:none;
                            padding:0;
                            font-size:20px;
                            line-height:2.2;
                        ">

                            <li style="
                                padding:15px 0;
                                border-bottom:1px solid rgba(255,255,255,0.08);
                                transition:all 0.4s ease;
                            "
                            onmouseenter="this.style.paddingLeft='25px'; this.style.color='#E94E1B';"
                            onmouseleave="this.style.paddingLeft='0'; this.style.color='white';">
                                Pre-vetted, high-performing professionals
                            </li>

                            <li style="
                                padding:15px 0;
                                border-bottom:1px solid rgba(255,255,255,0.08);
                                transition:all 0.4s ease;
                            "
                            onmouseenter="this.style.paddingLeft='25px'; this.style.color='#E94E1B';"
                            onmouseleave="this.style.paddingLeft='0'; this.style.color='white';">
                                Project teams for on-demand work
                            </li>

                            <li style="
                                padding:15px 0;
                                border-bottom:1px solid rgba(255,255,255,0.08);
                                transition:all 0.4s ease;
                            "
                            onmouseenter="this.style.paddingLeft='25px'; this.style.color='#E94E1B';"
                            onmouseleave="this.style.paddingLeft='0'; this.style.color='white';">
                                Secure & compliant work environments
                            </li>

                            <li style="
                                padding:15px 0;
                                border-bottom:1px solid rgba(255,255,255,0.08);
                                transition:all 0.4s ease;
                            "
                            onmouseenter="this.style.paddingLeft='25px'; this.style.color='#E94E1B';"
                            onmouseleave="this.style.paddingLeft='0'; this.style.color='white';">
                                Performance monitoring & reporting
                            </li>

                            <li style="
                                padding:15px 0;
                                transition:all 0.4s ease;
                            "
                            onmouseenter="this.style.paddingLeft='25px'; this.style.color='#E94E1B';"
                            onmouseleave="this.style.paddingLeft='0'; this.style.color='white';">
                                Seamless integration with your processes
                            </li>

                        </ul>

                    </div>

                </div>

            </div>
        </section>

        <section style="
            background:#000;
            padding:50px 0;
            position:relative;
            overflow:hidden;
            ">

            <!-- Global Background Geometry -->
            <div style="
                position:absolute;
                top:-200px;
                left:-200px;
                width:500px;
                height:500px;
                border:1px solid rgba(233,78,27,0.12);
                transform:rotate(45deg);
            "></div>

            <div style="
                position:absolute;
                bottom:-250px;
                right:-250px;
                width:600px;
                height:600px;
                border:1px solid rgba(233,78,27,0.08);
                transform:rotate(30deg);
            "></div>

            <div style="
                position:absolute;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:
                    linear-gradient(rgba(233,78,27,0.03) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(233,78,27,0.03) 1px, transparent 1px);
                background-size:80px 80px;
                opacity:0.4;
                pointer-events:none;
            "></div>

            <div class="auto-container" style="position:relative; z-index:2;">

                <h2 style="
                    text-align:center;
                    font-size:44px;
                    margin-bottom:80px;
                    color:#fff;
                    font-weight:600;
                ">
                    <span style="color:#E94E1B;">Our</span> Models.
                </h2>

                <div style="
                    display:grid;
                    grid-template-columns:repeat(auto-fit, minmax(360px, 1fr));
                    gap:70px;
                ">

                    <!-- Dedicated Talent -->
                    <div style="
                        background:#111;
                        padding:80px;
                        border-radius:18px;
                        position:relative;
                        overflow:hidden;
                        transition:all 0.4s ease;
                        border:1px solid rgba(255,255,255,0.05);
                    "
                    onmouseenter="
                        this.style.transform='translateY(-14px)';
                        this.style.boxShadow='0 50px 120px rgba(233,78,27,0.25)';
                    "
                    onmouseleave="
                        this.style.transform='translateY(0)';
                        this.style.boxShadow='none';
                    ">

                        <!-- Vertical Accent Lines -->
                        <div style="
                            position:absolute;
                            top:0;
                            left:40px;
                            width:1px;
                            height:100%;
                            background:rgba(233,78,27,0.15);
                        "></div>

                        <div style="
                            position:absolute;
                            top:0;
                            right:40px;
                            width:1px;
                            height:100%;
                            background:rgba(233,78,27,0.1);
                        "></div>

                        <!-- Diagonal Block -->
                        <div style="
                            position:absolute;
                            bottom:-100px;
                            right:-100px;
                            width:300px;
                            height:300px;
                            background:linear-gradient(135deg, rgba(233,78,27,0.08), transparent);
                            transform:rotate(45deg);
                        "></div>

                        <!-- Corner Frame -->
                        <div style="
                            position:absolute;
                            top:0;
                            left:0;
                            width:120px;
                            height:120px;
                            border-top:2px solid rgba(233,78,27,0.4);
                            border-left:2px solid rgba(233,78,27,0.4);
                        "></div>

                        <div style="
                            font-size:13px;
                            letter-spacing:2px;
                            text-transform:uppercase;
                            color:#E94E1B;
                            margin-bottom:35px;
                        ">
                            Staffing Model
                        </div>

                        <h3 style="
                            font-size:30px;
                            margin-bottom:30px;
                            color:#fff;
                            font-weight:600;
                        ">
                            Dedicated Talent
                        </h3>

                        <ul style="
                            list-style:none;
                            padding:0;
                            line-height:2.2;
                            color:#bbb;
                            font-size:17px;
                        ">
                            <li>Vetted professionals assigned exclusively to you</li>
                            <li>Performance oversight & structured reporting</li>
                            <li>Local supervision & compliance management</li>
                            <li>Secure systems & monitored work environment</li>
                        </ul>

                    </div>


                    <!-- Outsourced Teams -->
                    <div style="
                        background:#111;
                        padding:80px;
                        border-radius:18px;
                        position:relative;
                        overflow:hidden;
                        transition:all 0.4s ease;
                        border:1px solid rgba(255,255,255,0.05);
                    "
                    onmouseenter="
                        this.style.transform='translateY(-14px)';
                        this.style.boxShadow='0 50px 120px rgba(233,78,27,0.25)';
                    "
                    onmouseleave="
                        this.style.transform='translateY(0)';
                        this.style.boxShadow='none';
                    ">

                        <!-- Layered Rectangles -->
                        <div style="
                            position:absolute;
                            top:-60px;
                            left:-60px;
                            width:220px;
                            height:220px;
                            border:1px solid rgba(233,78,27,0.15);
                            transform:rotate(25deg);
                        "></div>

                        <div style="
                            position:absolute;
                            bottom:-120px;
                            right:-120px;
                            width:350px;
                            height:350px;
                            border:1px solid rgba(233,78,27,0.08);
                            transform:rotate(-20deg);
                        "></div>

                        <div style="
                            position:absolute;
                            top:50%;
                            left:0;
                            width:100%;
                            height:1px;
                            background:rgba(233,78,27,0.08);
                        "></div>

                        <div style="
                            font-size:13px;
                            letter-spacing:2px;
                            text-transform:uppercase;
                            color:#E94E1B;
                            margin-bottom:35px;
                        ">
                            Managed Services
                        </div>

                        <h3 style="
                            font-size:30px;
                            margin-bottom:30px;
                            color:#fff;
                            font-weight:600;
                        ">
                            Outsourced Project Teams
                        </h3>

                        <ul style="
                            list-style:none;
                            padding:0;
                            line-height:2.2;
                            color:#bbb;
                            font-size:17px;
                        ">
                            <li>Multidisciplinary delivery teams</li>
                            <li>Scalable workforce capacity</li>
                            <li>Continuous monitoring & QA control</li>
                            <li>End-to-end structured project delivery</li>
                        </ul>

                    </div>

                </div>

            </div>

        </section>

        <section style="
                background:#000;
                padding:100px 0;
                position:relative;
                overflow:hidden;
            ">

            <!-- Global Background Geometry -->
            <div style="
                position:absolute;
                top:-200px;
                left:-200px;
                width:600px;
                height:600px;
                border:1px solid rgba(233,78,27,0.08);
                transform:rotate(35deg);
            "></div>

            <div style="
                position:absolute;
                bottom:-250px;
                right:-250px;
                width:700px;
                height:700px;
                border:1px solid rgba(233,78,27,0.05);
                transform:rotate(-25deg);
            "></div>

            <div class="auto-container" style="position:relative; z-index:2;">

                <h2 style="
                    text-align:center;
                    font-size:44px;
                    margin-bottom:80px;
                    color:#fff;
                    font-weight:600;
                ">
                    Why Clients Engange <span style="color:#E94E1B;">I&M</span>
                </h2>

                <div style="
                    max-width:900px;
                    margin:auto;
                ">

                    <!-- Card -->
                    <div style="
                        background:#111;
                        padding:90px;
                        border-radius:20px;
                        position:relative;
                        overflow:hidden;
                        border:1px solid rgba(255,255,255,0.05);
                        transition:all 0.4s ease;
                    "
                    onmouseenter="
                        this.style.transform='translateY(-15px)';
                        this.style.boxShadow='0 60px 140px rgba(233,78,27,0.25)';
                    "
                    onmouseleave="
                        this.style.transform='translateY(0)';
                        this.style.boxShadow='none';
                    ">

                        <!-- Decorative Line Geometry -->
                        <div style="
                            position:absolute;
                            top:0;
                            left:0;
                            width:140px;
                            height:140px;
                            border-top:2px solid rgba(233,78,27,0.4);
                            border-left:2px solid rgba(233,78,27,0.4);
                        "></div>

                        <div style="
                            position:absolute;
                            bottom:-120px;
                            right:-120px;
                            width:350px;
                            height:350px;
                            border:1px solid rgba(233,78,27,0.08);
                            transform:rotate(25deg);
                        "></div>

                        <div style="
                            position:absolute;
                            top:50%;
                            left:0;
                            width:100%;
                            height:1px;
                            background:rgba(233,78,27,0.05);
                        "></div>

                        <!-- Content -->
                        <ul style="
                            list-style:none;
                            padding:0;
                            margin:0;
                            font-size:18px;
                            line-height:2.4;
                            color:#bbb;
                        ">

                            <li style="display:flex; align-items:flex-start; gap:15px; transition:all 0.3s ease;"
                                onmouseenter="this.style.color='#fff';"
                                onmouseleave="this.style.color='#bbb';">
                                <span style="
                                    width:10px;
                                    height:10px;
                                    background:#E94E1B;
                                    border-radius:50%;
                                    margin-top:10px;
                                    flex-shrink:0;
                                "></span>
                                Secure physical office infrastructure
                            </li>

                            <li style="display:flex; align-items:flex-start; gap:15px; transition:all 0.3s ease;"
                                onmouseenter="this.style.color='#fff';"
                                onmouseleave="this.style.color='#bbb';">
                                <span style="
                                    width:10px;
                                    height:10px;
                                    background:#E94E1B;
                                    border-radius:50%;
                                    margin-top:10px;
                                    flex-shrink:0;
                                "></span>
                                Monitored delivery & structured productivity systems
                            </li>

                            <li style="display:flex; align-items:flex-start; gap:15px; transition:all 0.3s ease;"
                                onmouseenter="this.style.color='#fff';"
                                onmouseleave="this.style.color='#bbb';">
                                <span style="
                                    width:10px;
                                    height:10px;
                                    background:#E94E1B;
                                    border-radius:50%;
                                    margin-top:10px;
                                    flex-shrink:0;
                                "></span>
                                Cultural alignment & communication frameworks
                            </li>

                            <li style="display:flex; align-items:flex-start; gap:15px; transition:all 0.3s ease;"
                                onmouseenter="this.style.color='#fff';"
                                onmouseleave="this.style.color='#bbb';">
                                <span style="
                                    width:10px;
                                    height:10px;
                                    background:#E94E1B;
                                    border-radius:50%;
                                    margin-top:10px;
                                    flex-shrink:0;
                                "></span>
                                Compliance, documentation & workforce governance
                            </li>

                            <li style="display:flex; align-items:flex-start; gap:15px; transition:all 0.3s ease;"
                                onmouseenter="this.style.color='#fff';"
                                onmouseleave="this.style.color='#bbb';">
                                <span style="
                                    width:10px;
                                    height:10px;
                                    background:#E94E1B;
                                    border-radius:50%;
                                    margin-top:10px;
                                    flex-shrink:0;
                                "></span>
                                Long-term workforce development & retention systems
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>


    </x-slot>

</x-guest-layout>
