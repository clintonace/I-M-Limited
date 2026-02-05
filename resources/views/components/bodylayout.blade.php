<!-- Banner Section-->
<!-- <section class="banner-section-two hero-video-section">


    <video
        class="hero-bg-video"
        autoplay
        muted
        loop
        playsinline
    >
        <source src="/onboarding/video/vid2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>


    <div class="hero-video-overlay"></div>


    <div class="auto-container">
        <div class="row items-center">

     
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInUp">

                    <div class="title-box">
                        <h1 class="text-white font-bold leading-tight">
                            Building the Future with <br>
                            <span id="typingText" style="color: #E94E1B;"></span>
                        </h1>

                        <p style="font-size: 1.2rem;" class="text-white mt-3 ">
                            Managed locally. Impacting globally.
                        </p>

                        <p style="font-size: 1.2rem;"  class="text-white mt-2 opacity-90 max-w-xl">
                            Your global team, built and supported from Africa.
                            <strong>Made in Africa. Serving the World.</strong>
                        </p>
                    </div>

                     <div style="padding-top: 5px; padding-bottom: 10px;">
                       

                        <div class="row">
                       
                        <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                            <div style="color: #E94E1B; font-size: 50px; font-weight: bold" class="count-box"><span class="count-text" data-speed="10000" data-stop="150">0</span>+</div>
                            <h6 class="counter-title text-white pt-5 pb-5">European Clients Served.</h6>
                        </div>

                       
                        <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div style="color: #E94E1B; font-size: 50px; font-weight: bold" class="count-box"><span class="count-text" data-speed="10000" data-stop="80">0</span>%</div>
                            <h6 class="counter-title text-white pt-5 pb-5">Satisfactory ratings, 80% upwards.</h6>
                        </div>

                       
                        <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div style="color: #E94E1B; font-size: 50px; font-weight: bold" class="count-box"><span class="count-text" data-speed="3000" data-stop="2">0</span>+</div>
                            <h6 class="counter-title text-white pt-5">Years Client Engagement</h6>
                        </div>
                        </div>

                    </div>

                    <div class="job-search-form ">
                        <form action="{{ route('onboarding.search.candidates') }}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-7 col-md-12">
                                    <span class="icon flaticon-search-1"></span>
                                    <input
                                        type="text"
                                        name="department"
                                        placeholder="Search talent by role or department">
                                </div>

                                <div class="form-group col-lg-5 col-md-12">
                                    <button type="submit" class="theme-btn btn-style-two w-full fade-top">
                                        <span style="position: relative; z-index: 10; font-weight: 700;" class="text-white">Find World-Class Talent</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="flex gap-4 mt-6 flex-wrap">
                        <a href="{{route('register', ['type' => 'employer'])}}" class="theme-btn btn-style-three mb-2">
                            → Work with World-Class Talent
                        </a>
                        <a href="{{route('register', ['type' => 'candidate'])}}" class="theme-btn btn-style-three">
                            → Join the I&amp;M Talent Network
                        </a>
                    </div>

                    <div class="popular-searches mt-5">
                        <span class="title text-white">Popular Roles:</span>
                        <a href="#">Software Engineer</a>,
                        <a href="#">Product Designer</a>,
                        <a href="#">Frontend Developer</a>,
                        <a href="#">Backend Engineer</a>,
                        <a href="#">DevOps</a>,
                        <a href="#">Mobile Developer</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section> -->


<section style="position:relative; height:100vh; overflow:hidden;">

    <!-- IMAGE 1 -->
    <div class="hero-slide"
        style="background:url('/onboarding/images/pic1.png') center center / cover no-repeat;
               position:absolute; top:0; left:0; width:100%; height:100%;
               z-index:1; opacity:1; transition:opacity 1s ease;">
    </div>

    <!-- IMAGE 2 -->
    <div class="hero-slide"
        style="background:url('/onboarding/images/pic2.png') center center / cover no-repeat;
               position:absolute; top:0; left:0; width:100%; height:100%;
               z-index:1; opacity:0; transition:opacity 1s ease;">
    </div>

    <!-- IMAGE 3 -->
    <div class="hero-slide"
        style="background:url('/onboarding/images/pic3.png') center center / cover no-repeat;
               position:absolute; top:0; left:0; width:100%; height:100%;
               z-index:1; opacity:0; transition:opacity 1s ease;">
    </div>

    <!-- Dark Overlay -->
    <div style="position:absolute; top:0; left:0; width:100%; height:100%;
                background:rgba(0,0,0,0.65); z-index:2;"></div>

    <!-- Content -->
    <div style="position:relative; z-index:3; height:100%;
                display:flex; align-items:center;">
        <div class="auto-container">

            <div style="max-width:700px; font-family:'Montserrat', 'Helvetica Neue', sans-serif;">

                <h2 style="color:white; font-size:48px;
                           font-weight:300; font-style:italic; text-transform: uppercase; margin-bottom:10px;">
                    Building the Future
                </h2>

                <h1 style="color:#E94E1B; font-size:40px;
                           font-weight:500; line-height:1.1; margin-bottom:25px;">
                           <span id="typingText" style="color: #E94E1B; text-transform: uppercase;"></span>
                </h1>

                <p style="color:white; font-size:20px; margin-bottom:5px;">
                    Managed locally. Impacting globally.
                </p>

                <p style="color:white; font-size:20px; margin-bottom:35px;">
                    Built and supported from Africa. Serving the World.
                </p>

                <!-- CTA -->
                <a href="{{route('register', ['type' => 'candidate'])}}"
                   style="display:inline-block;
                          background-color:#E94E1B;
                          color:black;
                          font-weight:700;
                          padding:15px 35px;
                          border-radius:40px;
                          text-decoration:none;">
                    JOIN TALENT NETWORK
                </a>

                <!-- SLIDER DOTS -->
                <div style="margin-top:25px; display:flex; gap:12px;">
                    <span onclick="showSlide(0)" class="dot"
                        style="width:14px; height:14px; border-radius:50%;
                               background:#E94E1B; cursor:pointer;"></span>
                    <span onclick="showSlide(1)" class="dot"
                        style="width:14px; height:14px; border-radius:50%;
                               background:white; opacity:0.5; cursor:pointer;"></span>
                    <span onclick="showSlide(2)" class="dot"
                        style="width:14px; height:14px; border-radius:50%;
                               background:white; opacity:0.5; cursor:pointer;"></span>
                </div>

            </div>

        </div>
    </div>

</section>

<script>
    let current = 0;
    const slides = document.querySelectorAll(".hero-slide");
    const dots = document.querySelectorAll(".dot");

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? "1" : "0";
        });

        dots.forEach((dot, i) => {
            dot.style.background = i === index ? "#E94E1B" : "white";
            dot.style.opacity = i === index ? "1" : "0.5";
        });

        current = index;
    }

    function autoSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    setInterval(autoSlide, 6000);
</script>


<!-- End Banner Section-->

<!-- What we do Section -->
<!-- <section class="layout-pt-120 layout-pb-100">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>What We Do.</h2>
            <div class="text"> We Connect, Build, and Manage Global Teams from Africa. </div>

            <div class="text">
                <p>
                        I&amp;M Limited helps international organizations access exceptional African
                        professionals while we provide the local structures that support
                        performance, compliance, and long-term success.
                    </p> 
            </div>

        </div>

        <div class="row grid-base pt-10 wow fadeInUp">

            <div class="row mt-5">

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block-two work-block -type-4">
                            <div class="inner-box ">
                                <h5>Talent Acquisition</h5>
                                <p>
                                    We identify, vet, and place high-performing African professionals
                                    tailored to your business needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block-two work-block -type-4">
                            <div class="inner-box">
                                <h5>Workforce Deployment</h5>
                                <p>
                                    From onboarding to payroll and HR operations, we deploy teams
                                    seamlessly across borders.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block-two work-block -type-4">
                            <div class="inner-box">
                                <h5>Outsourced Project Teams</h5>
                                <p>
                                    Dedicated, managed teams for product development, operations,
                                    and specialized projects.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block-two work-block -type-4">
                            <div class="inner-box">
                                <h5>On-Ground Management</h5>
                                <p>
                                    Local leadership ensures productivity, engagement,
                                    accountability, and performance excellence.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block-two work-block -type-4">
                            <div class="inner-box">
                                <h5>Secure &amp; Compliant Operations</h5>
                                <p>
                                    Fully compliant employment, legal, and operational structures
                                    that protect your business.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block-two work-block -type-4">
                            <div class="inner-box text-center">
                                <h5>All in One Ecosystem</h5>
                                <p>
                                    Talent, operations, management, and compliance —
                                    unified under one trusted partner.
                                </p>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
    </div>
</section> -->





<section 
    style="
        padding:140px 0;
        overflow:hidden;
        position:relative;
        background: linear-gradient(to right, 
            #000000 0%, 
            #000000 50%, 
            #000000 50%, 
            #E94E1B 100%);
        background-size:200% 100%;
        background-position:left center;
        transition:background-position 1.2s ease;
    "
    onmouseenter="
        this.style.backgroundPosition='right center';
        document.getElementById('hoverMan').style.opacity='1';
        document.getElementById('hoverMan').style.transform='translateX(0)';
    "
    onmouseleave="
        this.style.backgroundPosition='left center';
        document.getElementById('hoverMan').style.opacity='0';
        document.getElementById('hoverMan').style.transform='translateX(60px)';
    "
>

    <!-- IMAGE LAYER -->
    <div id="hoverMan"
         style="
            position:absolute;
            bottom:0;
            right:8%;
            height:90%;
            display:flex;
            align-items:flex-end;
            opacity:0;
            transform:translateX(60px);
            transition:all 1.2s ease;
            z-index:1;
         ">
        <img src='/onboarding/images/suited.png'
             style="height:100%; object-fit:contain;">
    </div>

    <img id="mobileMan"
     src="/onboarding/images/man.png"
     style="
        display:none;
        position:absolute;
        bottom:0;
        left:50%;
        transform:translateX(-50%);
        width:90%;
        max-width:500px;
        z-index:0;
        pointer-events:none;
     ">


    <!-- ORANGE OPACITY OVERLAY -->
    <div style="
        position:absolute;
        top:0;
        right:0;
        width:50%;
        height:100%;
        background:black;
        opacity:0.2;
        pointer-events:none;
        z-index:0;
    "></div>

    <!-- YOUR EXISTING CONTENT -->
    <div style="position:relative; z-index:2;">
        <!-- Keep all your cards and content here -->
    </div>

    <div style="text-align:center; margin-bottom:80px; color:white;">
        <h2 style="font-size:48px; font-weight:800;">What We Do <span style="color:#E94E1B;">.</span></h2>
        <p style="max-width:800px; color:white; margin:20px auto; opacity:0.8;">
            We Connect, Build, and Manage Global Teams from Africa.
        </p>
        <p style="color:white; font-size:20px; margin-top:10px; opacity:0.9; font-style:italic;">
                        I&amp;M Limited helps international organizations access exceptional African
                        professionals while we provide the local structures that support
                        performance, compliance, and long-term success.
                    </p> 
    </div>

    <div style="width:100%; overflow:hidden;">

        <div id="cardTrack"
             style="display:flex; gap:50px; width:max-content;">

            <!-- CARDS (WILL BE DUPLICATED BY JS FOR TRUE LOOP) -->

            <!-- CARD -->
            <div class="dock-card"
                 style="min-width:420px; padding:60px; border-radius:25px;
                        background:black; color:white;
                        position:relative; overflow:hidden;
                        transition:transform 0.35s ease;">

                <!-- Orange Shape -->
                <div style="position:absolute; top:-60px; right:-60px;
                            width:220px; height:220px;
                            background:#E94E1B; border-radius:50%;
                            opacity:0.5;"></div>

                <!-- ICON -->
                <div style="font-size:40px; margin-bottom:25px;"> <i class="fas fa-globe" style="color:#E94E1B;"></i></div>

                <h4 style="font-size:26px; font-weight:700; margin-bottom:20px;">
                    Talent Acquisition
                </h4>

                <p style="opacity:0.8; font-size:24px; font-style:italic; color:white;">
                    <span style="color:#E94E1B;">"</span>We identify, vet, and place high-performing African professionals tailored to your needs. <span style="color:#E94E1B;">"</span>
                </p>
            </div>

            <div class="dock-card"
                 style="min-width:420px; padding:60px; border-radius:25px;
                        background:black; color:white;
                        position:relative; overflow:hidden;
                        transition:transform 0.35s ease;">

                <div style="position:absolute; bottom:-80px; right:-80px;
                            width:250px; height:250px;
                            background:#E94E1B;
                            clip-path: polygon(0 50%, 100% 0, 0 100%);
                            opacity:0.5;"></div>

                <div style="font-size:40px; margin-bottom:25px;"> <i class="fas fa-users" style="color:#E94E1B;"></i></div>

                <h4 style="font-size:26px; font-weight:700; margin-bottom:20px;">
                    Workforce Deployment
                </h4>

                <p style="opacity:0.8; font-size:24px; font-style:italic; color:white;">
                    <span style="color:#E94E1B;">"</span>Seamless onboarding, payroll, HR operations across borders.<span style="color:#E94E1B;">"</span>
                </p>
            </div>

            <div class="dock-card"
                 style="min-width:420px; padding:60px; border-radius:25px;
                        background:black; color:white;
                        position:relative; overflow:hidden;
                        transition:transform 0.35s ease;">

                <div style="position:absolute; top:0; left:0;
                            width:100%; height:6px;
                            background:#E94E1B;
                            clip-path: polygon(0 0, 100% 0, 0 100%);
                            opacity:0.5;"></div>

                <div style="font-size:40px; margin-bottom:25px;"> <i class="fas fa-shield-alt" style="color:#E94E1B;"></i></div>

                <h4 style="font-size:26px; font-weight:700; margin-bottom:20px;">
                    Secure & Compliant Operations
                </h4>

                <p style="opacity:0.8; font-size:24px; font-style:italic; color:white;">
                    <span style="color:#E94E1B;">"</span>Fully compliant employment and legal structures.<span style="color:#E94E1B;">"</span>
                </p>
            </div>

        </div>
    </div>

</section>


<!-- End Work Section -->

<!-- Work Section -->
<section 
        style="
            padding:140px 0;
            color:white;
            overflow:hidden;
            position:relative;
            background: linear-gradient(to right, 
                #000000 0%, 
                #000000 50%, 
                #000000 50%, 
                #E94E1B 100%);
            background-size:200% 100%;
            background-position:left center;
            transition:background-position 1.2s ease;
        "
        
    
    >


    <div class="auto-container">
        <div class="sec-title text-center ">
            <h2 style="color:white;" >How It Works</h2>
            <div  style="color:white; margin:20px">Streamline your hiring or job search journey with our simple and efficient process tailored to your needs.</div>
        </div>

        <div class="row grid-base pt-50 wow fadeInUp">

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4 p-5">
                    <div class="icon-wrap">
                        <span class="icon icon-drawing"></span>
                    </div>

                    <h5 class="title" style="color:white;">Register With Us</h5>
                    <p  style="color:white;">Sign up to access a global network of talented professionals and employers.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4 p-5">
                    <div class="icon-wrap">
                        <span class="icon icon-process"></span>
                    </div>

                    <h5 class="title" style="color:white;">Create Your Profile</h5>
                    <p  style="color:white;">Showcase your skills, experience, or company needs to stand out to the right audience.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4 p-5">
                    <div class="icon-wrap">
                        <span class="icon icon-task"></span>
                    </div>

                    <h5 class="title" style="color:white;">Upload Your Resume</h5>
                    <p  style="color:white;">Upload your resume or job details to simplify connections with the perfect candidates or roles.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4 p-5">
                    <div class="icon-wrap">
                        <span class="icon icon-one-finger-click"></span>
                    </div>

                    <h5 class="title" style="color:white;">Now Take a Rest</h5>
                    <p  style="color:white;">Leave the rest to us! Sit back as we match talent and opportunities seamlessly.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Work Section -->

    <!-- <section  style="
                padding:140px 0;
                color:white;
                overflow:hidden;
                position:relative;
                background: linear-gradient(to right, 
                    #000000 0%, 
                    #000000 50%, 
                    #000000 50%, 
                    #E94E1B 100%);
                background-size:200% 100%;
                background-position:left center;
                transition:background-position 1.2s ease;
            "
            
        
        >
        <div class="auto-container">

            <div class="sec-title text-center">

            <h2>Why I&amp;M <span style="color: #E94E1B; font-weight: bold; font-size: 1.2em;">?</span></h2>
                <div class="text"> Reliable Talent. Reliable Systems.</div>

                <div class="text mt-3">
                    <p>
                        Great teams don’t run on talent alone.
                        They run on structure, support, and systems that actually work.
                    </p>
                </div>
            </div>

            <div class="row mt-5 wow fadeInUp">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-user"></span>
                            </div>
                            <h5>Pre-Vetted Professionals</h5>
                            <p>
                                No guesswork. We handpick and vet high-performing African
                                professionals who are ready to deliver from day one.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-briefcase"></span>
                            </div>
                            <h5>Fully Managed Teams</h5>
                            <p>
                                Need a full project team? We assemble, manage, and support
                                teams so you can focus on results — not admin.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-settings"></span>
                            </div>
                            <h5>Structured Onboarding</h5>
                            <p>
                                Clear processes, defined expectations, and active supervision
                                ensure every hire hits the ground running.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-shield"></span>
                            </div>
                            <h5>Secure Physical Workspaces</h5>
                            <p>
                                Sensitive tools and workflows stay protected with our
                                secure, on-ground operational environments.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-tick"></span>
                            </div>
                            <h5>Compliance &amp; Transparency</h5>
                            <p>
                                Employment, payroll, and operations handled correctly —
                                with full visibility and peace of mind.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="feature-block-two work-block -type-4 bg-white">
                        <div class="inner-box text-center">
                            <div class="icon-box">
                                <span class="icon flaticon-layers"></span>
                            </div>
                            <h5>One Ecosystem. Zero Headaches.</h5>
                            <p>
                                Whether you’re hiring long-term talent or outsourcing projects,
                                we manage the teams behind your success — end to end.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> -->


   





<section style="
        padding:160px 0;
        background:#000000;
        color:white;
        position:relative;
        overflow:hidden;
    ">

    <!-- LEFT IMAGE -->
    <img src="/onboarding/images/woup.png"
         style="
            position:absolute;
            bottom:0;
            left:0;
            height:90%;
            object-fit:contain;
            opacity:2;
            z-index:1;
            pointer-events:none;
         ">

    <!-- RIGHT IMAGE -->
    <img src="/onboarding/images/maup.png"
         style="
            position:absolute;
            bottom:0;
            right:0;
            height:90%;
            object-fit:contain;
            opacity:2;
            z-index:1;
            pointer-events:none;
         ">

    <!-- Dark Overlay -->
    <div style="
        position:absolute;
        inset:0;
        background:rgba(0, 0, 0, 0);
        z-index:2;
    "></div>

    <div class="auto-container" style="position:relative; z-index:3;">

        <!-- Section Title -->
        <div style="text-align:center; max-width:850px; margin:0 auto 100px auto;">

            <h2 style="font-size:50px; font-weight:800; margin-bottom:20px;">
                Why I&amp;M <span style="color:#E94E1B;">?</span>
            </h2>

            <p style="font-size:20px; opacity:0.85; margin-bottom:20px; color:white;">
                Reliable Talent. Reliable Systems.
            </p>

            <p style="font-size:18px; opacity:0.65; line-height:1.8; font-style:italic; color:white; padding:0 150px 0 150px;">
                <span style="color:#E94BE9;">"</span>Great teams don’t run on talent alone.
                They run on structure, support, and systems that actually work.<span style="color:#E94BE9;">"</span>
            </p>
        </div>

        <!-- Cards Grid -->
        <div style="
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap:40px;
        ">

            <!-- CARD 1 -->
            <div style="
                background:#111111;
                padding:50px 40px;
                border-radius:18px;
                border:1px solid rgba(255,255,255,0.06);
                transition:all 0.4s ease;
            "
            onmouseenter="
                this.style.transform='translateY(-10px)';
                this.style.borderColor='#E94E1B';
            "
            onmouseleave="
                this.style.transform='translateY(0)';
                this.style.borderColor='rgba(255,255,255,0.06)';
            ">

                <div style="font-size:32px; color:#E94E1B; margin-bottom:25px;">
                    <i class="fas fa-user"></i>
                </div>

                <h5 style="font-size:22px; font-weight:700; margin-bottom:15px;">
                    Pre-Vetted Professionals
                </h5>

                <p style="opacity:0.7; line-height:1.7; font-style:italic; color:white;">
                     No guesswork.
                    We handpick and vet high-performing African professionals ready to deliver from day one.
                </p>
            </div>

            <!-- CARD 2 -->
            <div style="background:#111111; padding:50px 40px; border-radius:18px; border:1px solid rgba(255,255,255,0.06); transition:all 0.4s ease;"
            onmouseenter="this.style.transform='translateY(-10px)'; this.style.borderColor='#E94E1B';"
            onmouseleave="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.06)';">

                <div style="font-size:32px; color:#E94E1B; margin-bottom:25px;">
                    <i class="fas fa-briefcase"></i>
                </div>

                <h5 style="font-size:22px; font-weight:700; margin-bottom:15px;">
                    Fully Managed Teams
                </h5>

                <p style="opacity:0.7; line-height:1.7; font-style:italic; color:white;">
                    We assemble, manage, and support teams so you can focus on results — not admin.
                </p>
            </div>

            <!-- CARD 3 -->
            <div style="background:#111111; padding:50px 40px; border-radius:18px; border:1px solid rgba(255,255,255,0.06); transition:all 0.4s ease;"
            onmouseenter="this.style.transform='translateY(-10px)'; this.style.borderColor='#E94E1B';"
            onmouseleave="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.06)';">

                <div style="font-size:32px; color:#E94E1B; margin-bottom:25px;">
                    <i class="fas fa-cogs"></i>
                </div>

                <h5 style="font-size:22px; font-weight:700; margin-bottom:15px;">
                    Structured Onboarding
                </h5>

                <p style="opacity:0.7; line-height:1.7; font-style:italic; color:white;">
                    Clear processes, defined expectations, and supervision ensure every hire hits the ground running.
                </p>
            </div>

            <!-- CARD 4 -->
            <div style="background:#111111; padding:50px 40px; border-radius:18px; border:1px solid rgba(255,255,255,0.06); transition:all 0.4s ease;"
            onmouseenter="this.style.transform='translateY(-10px)'; this.style.borderColor='#E94E1B';"
            onmouseleave="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.06)';">

                <div style="font-size:32px; color:#E94E1B; margin-bottom:25px;">
                    <i class="fas fa-shield-alt"></i>
                </div>

                <h5 style="font-size:22px; font-weight:700; margin-bottom:15px;">
                    Secure Physical Workspaces
                </h5>

                <p style="opacity:0.7; line-height:1.7; font-style:italic; color:white;">
                    Sensitive tools and workflows stay protected in secure operational environments.
                </p>
            </div>

            <!-- CARD 5 -->
            <div style="background:#111111; padding:50px 40px; border-radius:18px; border:1px solid rgba(255,255,255,0.06); transition:all 0.4s ease;"
            onmouseenter="this.style.transform='translateY(-10px)'; this.style.borderColor='#E94E1B';"
            onmouseleave="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.06)';">

                <div style="font-size:32px; color:#E94E1B; margin-bottom:25px;">
                    <i class="fas fa-check-circle"></i>
                </div>

                <h5 style="font-size:22px; font-weight:700; margin-bottom:15px;">
                    Compliance & Transparency
                </h5>

                <p style="opacity:0.7; line-height:1.7; font-style:italic; color:white;">
                    Employment, payroll, and operations handled correctly with full visibility.
                </p>
            </div>

            <!-- CARD 6 -->
            <div style="background:#111111; padding:50px 40px; border-radius:18px; border:1px solid rgba(255,255,255,0.06); transition:all 0.4s ease;"
            onmouseenter="this.style.transform='translateY(-10px)'; this.style.borderColor='#E94E1B';"
            onmouseleave="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.06)';">

                <div style="font-size:32px; color:#E94E1B; margin-bottom:25px;">
                    <i class="fas fa-layer-group"></i>
                </div>

                <h5 style="font-size:22px; font-weight:700; margin-bottom:15px;">
                    One Ecosystem. Zero Headaches.
                </h5>

                <p style="opacity:0.7; line-height:1.7; font-style:italic; color:white;">
                    We manage the teams behind your success — end to end.
                </p>
            </div>

        </div>

    </div>
</section>





      



<!-- Job Categories -->
<!-- <section class="job-categories border-bottom-0 pt-0">
    <div class="auto-container">
        <div class="d-flex align-items-center justify-content-between wow fadeInUp">
            <div class="sec-title">
                <h2>Popular Candidates Sector</h2>
                <div class="text">2025 Candidates live - 200 added today.</div>
            </div>
            <a href="{{route('sectors.list')}}" class="text ud-btn2">View All Sectors<i class="fal fa-long-arrow-right"></i></a>
        </div>
        <div class="row wow fadeInUp">
            @if ($department->isEmpty())

            
            <div class="category-block-two at-home22 col-xl-3 col-sm-6">
                <div class="inner-box text-start">
                    <div class="content justify-content-start d-block">

                        <p class="text">No Sector added yet!</p>
                    </div>
                </div>
            </div>
            @else

            @foreach ($department->take(4) as $d)

            
            <div class="category-block-two at-home22 col-xl-3 col-sm-6">
                <div class="inner-box text-start">
                    <div class="content justify-content-start d-block">
                        <span class="icon flaticon-money justify-content-start-1"></span>

                        <h4><a href="#">{{$d->name}}</a></h4>

                    </div>
                </div>
            </div>
            @endforeach

            @endif

        </div>
    </div>
</section> -->
<!-- End Job Categories -->

<!-- HOW IT WORKS -->
<!-- <section class=" layout-pb-60">
    <div class="auto-container">

    <div class="sec-title text-center">
            <h2>We handle both</h2>
            <div class="text-white">Built for Companies. Empowering for Talent.</div>
        </div>

        

        <div class="row wow fadeInUp">

            <div class="banner-style-home22 at-home22 mb30 col-md-6 col-sm-12">
                <div class="">
                    <div class="content">
                        <h3 class="title">For Companies</h3>

                        <p class="text">
                            <strong>Build with confidence.</strong><br class="d-none d-lg-block">
                            Access exceptional African professionals supported by
                            clear processes, on-ground monitoring, and seamless delivery.
                        </p>

                        <div class="mt-4 d-flex flex-wrap gap-3">
                           <a href="{{ route('for.talent') }}"
                            class="theme-btn btn-style-two bdrs12 me-3 fade-top text-white"
                            style="position: relative;">
                                
                                <span style="position: relative; z-index: 10; font-weight: 700;">
                                    Explore Talent
                                    <i class="fal fa-long-arrow-right ms-2" style="position: relative; z-index: 10;"></i>
                                </span>

                            </a>

                            <a href="{{route('login')}}" class="theme-btn btn-style-two bdrs12 fade-top text-white">
                                <span style="position: relative; z-index: 10; font-weight: 700;">
                                    Request a Project Team
                                    <i class="fal fa-long-arrow-right ms-2" style="position: relative; z-index: 10;"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <figure class="image d-none d-xl-block">
                        <img src="/onboarding/images/index-22/home22-banner-1.png" alt="For Companies">
                    </figure>
                </div>
            </div>

            <div class="banner-style-home22 at-home22 mb30 col-md-6 col-sm-12">
                <div class="">
                    <div class="content">
                        <h3 class="title">For Talent</h3>

                        <p class="text">
                            <strong>Your career, elevated.</strong><br class="d-none d-lg-block">
                            Work with global companies from your home country —
                            with structure, support, and long-term growth.
                        </p>

                        <a href="{{route('register')}}" class="theme-btn btn-style-two bdrs12 mt-3 fade-top text-white">
                            <span style="position: relative; z-index: 10; font-weight: 700;">
                                   Join the Talent Network
                                <i class="fal fa-long-arrow-right ms-2" style="position: relative; z-index: 10;"></i>
                            </span>
                        </a>
                    </div>

                    <figure class="image d-none d-xl-block">
                        <img src="/onboarding/images/index-22/home22-banner-2.png" alt="For Talent">
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- END HOW IT WORKS -->

<!-- Candidates Section -->
<!-- <section class="candidates-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Featured Candidates</h2>
            <div class="text">Meet top-tier professionals actively seeking new opportunities. Handpicked candidates with proven field expertise, ready to drive your business forward.</div>
        </div>

        <div class="carousel-outer wow fadeInUp">
            <div class="candidates-carousel owl-carousel owl-theme default-dots">
                @foreach ($infos as $info)
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure><img style="border-radius: 10px; height: 200px; width: 200px" src="{{$info?->image}}"
                                alt="{{$info?->image}}"></figure>
                        <h4 class="name">{{$info?->first_name}} {{$info?->last_name}}</h4>
                        <span class="designation">{{$info?->department}}</span>
                        <div class="location"><i class="flaticon-map-locator"></i> {{$info?->country}}</div>
                        <a href="{{route('onboarding.candidate.details', $info?->email)}}"
                            class="theme-btn btn-style-two fade-top text-white">
                            <span style="position: relative; z-index: 10; font-weight: 700;" class="btn-title">View Profile</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> -->
<!-- End Candidates Section -->

<!-- Testimonial Section -->
<!-- <section class="testimonial-section style-two">
    <div class="auto-container">

    <div class="sec-title text-center">
            <h2>Testimonials From Our Customers</h2>
            <div class="text">Great reviews from our customers.</div>
        </div>

        <div class="carousel-outer wow fadeInUp">

            <div class="testimonial-carousel-three owl-carousel owl-theme default-dots">

                @if ($testimonies->isEmpty())

                <div class="testimonial-block">
                    <div class="inner-box">
                        {{-- <h4 class="title">{{$t?->title}}</h4> --}}
                        <div class="text">No testimonies yet!</div>
                        <div class="info-box">
                            {{-- <div class="thumb"><img src="{{$t?->logo}}" alt="codeBrown"></div> --}}
                            {{-- <h4 class="name">{{$t?->name}}</h4> --}}

                        </div>
                    </div>
                </div>

                @else
                @foreach ($testimonies as $t)

                <div class="testimonial-block">
                    <div class="inner-box">
                        <h4 class="title">{{$t?->title}}</h4>
                        <div class="text">{{$t?->testimony}}</div>
                        <div class="info-box">
                            <div class="thumb"><img style="height: 71px; width: 71px; border-radius:50%;" src="{{$t?->logo}}" alt="codeBrown"></div>
                            <h4 class="name">{{$t?->name}}</h4>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
    </div>
</section> -->
<!-- End Testimonial Section -->


<!-- Call To Action Two -->
<!-- <section class="call-to-action-two" style="background-color:black;">
    <div class="auto-container wow fadeInUp">
        <div class="sec-title light text-center">
            <h2>Your Dream Jobs Are Waiting</h2>
            <div class="text text-white">Over 1 million interactions, 50,000 success stories Make yours now.</div>
        </div>

        <div class="btn-box">
            {{-- <a href="{{route('candidates.list')}}" class="theme-btn btn-style-three">Search Candidate</a> --}}
            <a href="{{route('candidates.list')}}" class="theme-btn btn-style-three">Request For a Candidate</a>
        </div>
    </div>
</section> -->
<!-- End Call To Action -->

<!-- Call To Action Three -->
<!-- <section class="call-to-action-three">
    <div class="auto-container">
        <div class="outer-box">
            <div class="sec-title">
                <h2>Let employers find you</h2>
                <div class="text">Advertise your Portfolio to millions of monthly users and be among 15.8 million search in our
                    database.</div>
            </div>

            <div class="btn-box">
                <a href="{{route('candidates.list')}}" class="theme-btn btn-style-two bg-black"><span class="text-white">Search Employees</span></a>
            </div>
        </div>
    </div>
</section> -->
<!-- End Call To Action -->
