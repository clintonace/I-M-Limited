<x-guest-layout>

    <x-slot name="body">


    <!--Page Title-->
    <!-- <section   class="page-title">
        <div class="auto-container">
          <div style="margin-top: 100px" class="title-outer">
            <h1>About Us</h1>
            <ul class="page-breadcrumb">
              <li><a href="{{route('welcome')}}">Home</a></li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
    </section> -->

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


    <section style="position:relative; height:100vh; overflow:hidden;">

    <!-- IMAGE 1 -->
    <div class="hero-slide"
        style="background:url('/onboarding/images/suited.png') center center / cover no-repeat;
               position:absolute; top:100px; left:0; width:100%; height:100%;
               z-index:1; opacity:1; transition:opacity 1s ease;">
    </div>

    <!-- IMAGE 2 -->
    <div class="hero-slide"
        style="background:url('/onboarding/images/woleft.png') center center / cover no-repeat;
               position:absolute; top:105px; left:150px; width:100%; height:170%;
               z-index:1; opacity:0; transition:opacity 1s ease;">
    </div>

    <!-- IMAGE 3 -->
    <div class="hero-slide"
        style="background:url('/onboarding/images/dreads.png') center center / cover no-repeat;
               position:absolute; top:90px; left:150px; width:100%; height:170%;
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
                    The Future of Work 
                </h2>

                <h1 style="color:#E94E1B; font-size:40px;
                           font-weight:500; line-height:1.1; margin-bottom:25px;">
                           <span  style="color: #E94E1B; text-transform: uppercase;">—Powered by African Talent</span>
                </h1>

                <p style="color:white; font-size:20px; margin-bottom:5px;">
                    About I&amp;M Limited: Redefining how global organizations discover, build, and work with exceptional talent across borders.
                </p>

                <!-- <p style="color:white; font-size:20px; margin-bottom:35px;">
                    Built and supported from Africa. Serving the World.
                </p> -->

                <!-- CTA -->
                <!-- <a href="{{route('register', ['type' => 'candidate'])}}"
                   style="display:inline-block;
                          background-color:#E94E1B;
                          color:black;
                          font-weight:700;
                          padding:15px 35px;
                          border-radius:40px;
                          text-decoration:none;">
                    JOIN TALENT NETWORK
                </a> -->

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

      <!--End Page Title-->

      <section  style="background-color: #000;" class="about-section-three">
        <div class="auto-container">
          <div class="images-box">
            <div class="row">
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <figure class="image"><img src="/onboarding/images/workers.png" alt=""></figure>
              </div>
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <figure class="image"><img src="/onboarding/images/wo3.png" alt=""></figure>
                <!-- <figure class="image"><img src="/onboarding/images/wo2.png" alt=""></figure> -->
              </div>
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <!-- <figure class="image"><img src="/onboarding/images/wo3.png" alt=""></figure> -->
                <figure class="image"><img src="/onboarding/images/wo4.png" alt=""></figure>
              </div>
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <figure class="image"><img src="/onboarding/images/wo5.png" alt=""></figure>
              </div>
            </div>
          </div>

          <!-- Fun Fact Section -->
          <div class="fun-fact-section">
            <div class="row">
              <!--Column-->
              <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                <div class="count-box" style="color:#E94E1B"><span style="color:#E94E1B" class="count-text" data-speed="3000" data-stop="150">0</span>+</div>
                <h4 style="color:#fff" class="counter-title">European Clients Served.</h4>
              </div>

              <!--Column-->
              <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="count-box" style="color:#E94E1B"><span style="color:#E94E1B" class="count-text" data-speed="3000" data-stop="80">0</span>%</div>
                <h4 style="color:#fff" class="counter-title">Satisfactory ratings, 80% upwards.</h4>
              </div>

              <!--Column-->
              <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="count-box" style="color:#E94E1B"><span style="color:#E94E1B" class="count-text" data-speed="3000" data-stop="2">0</span>+</div>
                <h4 style="color:#fff" class="counter-title">Years Client Engagement</h4>
              </div>
            </div>
          </div>
          <!-- Fun Fact Section -->

        <div class="text-box modern-about"
              style="position:relative; overflow:hidden;"

                onmouseenter="
                  const logo = document.getElementById('aboutLogo');
                  const container = logo.parentElement;
                  const move = (container.offsetWidth - logo.offsetWidth) / 2;
                  logo.style.transform = 'translateX(' + move + 'px)';
                "
                onmouseleave="
                  const logo = document.getElementById('aboutLogo');
                  logo.style.transform = 'translateX(0)';
                "

          >

            <div style="margin-bottom:25px;">
                <img id="aboutLogo"
                    src="/onboarding/images/logo.png"
                    alt="I&M Limited Logo"
                    style="
                        width:150px;
                        height:auto;
                        transition:transform 0.8s ease;
                        display:block;
                    ">
            </div>

            <span style="font-style: italic; color:#fff;">
                About I&amp;M <span style="color:#E94E1B">Limited</span>
            </span>

            <h4 style="color:#fff; margin-top:10px;">
                Company Bio <span style="color:#E94E1B">.</span>
            </h4>

            <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                I&M Limited is a global virtual workforce company connecting top Nigerian talent with businesses around the world through remote work opportunities. We specialize in hiring, training, and managing highly skilled virtual employees who operate seamlessly from Nigeria to support international companies. We bridge the global skills gap by giving organizations access to dependable, high-performing professionals regardless of location while helping companies scale faster and more cost-effectively across borders. From startups to established enterprises, we enable businesses to grow internationally with confidence. Our mission is to empower Nigerian professionals with international roles that allow them to thrive globally while working locally. By combining world-class talent, structured operations, and remote workforce expertise, we create virtual teams that drive productivity, innovation, and long-term growth. At I&M Limited, we don’t just hire virtual employees we build global teams, support international expansion, and connect Nigeria to the world of work.
            </p>

        </div>

      </section>

      <section class=" about-section-two" style="background-color: #000;">
        <div class="auto-container">
            <div class="row justify-content-center">

                <div class="col-lg-10 text-center">
                    <div class="sec-title">
                        <span style="color: #fff; font-weight: bold; font-size: 24px;" class="sub-title">Our Purpose <span style="color:#E94E1B">.</span></span>
                        <h4 style="color: #fff;">Building Opportunity Beyond Borders</h4>
                    </div>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-6 col-md-12">
                        <div class="feature-block-two p-5">
                            <div class="inner-box">
                                <h4>Our Mission</h4>
                                <p style="color: #fff; font-size: 18px; line-height: 1.6;">
                                    To unlock global opportunities for African professionals
                                    and deliver workforce solutions that reimagine business
                                    growth beyond borders.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="feature-block-two p-5">
                            <div class="inner-box">
                                <h4>Our Vision</h4>
                                <p style="color: #fff; font-size: 18px; line-height: 1.6;">
                                    We see Africa as an established global hub for exceptional
                                    talent — advancing the future of work through innovation,
                                    inclusion, and integrity.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
      </section>

      <section  style="background-color: #000;" class="about-section-three">
        <div class="auto-container">


            <div class="text-box modern-about">

                <h4 style="color: #fff;">Who We Are<span style="color:#E94E1B">.</span></h4>

                <p style="color: #fff; font-size: 18px; line-height: 1.6;">
                    
                    We are a talent and workforce operations company connecting
                    Africa’s brightest professionals with forward-thinking global companies.
              
                    Beyond hiring, we provide the systems, physical infrastructure,
                    and on-ground support teams need to perform, grow, and succeed.
              
                    Our approach blends structured operations, human-centered management,
                    and long-term workforce development.
              
                    We don’t just staff teams — we build, manage, and deploy them
                    for long-term roles or on-demand project delivery.
                </p>

            </div>

        </div>
      </section>

      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-center">
                <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span>
                <h4 style="color: #ffffff;">The Principles That Guide Everything We Do</h4>
            </div>

            <div class="row mt-5 owl-carousel values-carousel">

                <div class="col-lg-12 col-md-6">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <h5>Excellence</h5>
                            <p>
                                World-class standards, integrity, precision,
                                and accountability in everything we deliver.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <h5>Growth</h5>
                            <p>
                                Curiosity, adaptability, continuous learning,
                                and innovation — for people and businesses.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="feature-block-two work-block -type-4">
                        <div class="inner-box">
                            <h5>Impact</h5>
                            <p>
                                Collaboration with purpose — creating real value
                                for talent, clients, and communities.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
      </section>

      <section  style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

        <div class="text-box modern-about"
              style="position:relative; overflow:hidden;"

                onmouseenter="
                  const logo = document.getElementById('aboutLogoo');
                  const container = logo.parentElement;
                  const move = (container.offsetWidth - logo.offsetWidth) / 2;
                  logo.style.transform = 'translateX(' + move + 'px)';
                "
                onmouseleave="
                  const logo = document.getElementById('aboutLogoo');
                  logo.style.transform = 'translateX(0)';
                "

          >

            <div style="margin-bottom:25px;">
                <img id="aboutLogoo"
                    src="/onboarding/images/logo.png"
                    alt="I&M Limited Logo"
                    style="
                        width:150px;
                        height:auto;
                        transition:transform 0.8s ease;
                        display:block;
                    ">
            </div>

            <!-- <span style="font-style: italic; color:#fff;">
                About I&amp;M <span style="color:#E94E1B">Limited</span>
            </span> -->

            <h4 style="color:#fff; margin-top:10px;">
                Historical Bio <span style="color:#E94E1B">.</span>
            </h4>

            <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                I&M Limited is a global virtual workforce company connecting top Nigerian talent with businesses around the world through remote work opportunities. We specialize in hiring, training, and managing highly skilled virtual employees who operate seamlessly from Nigeria to support international companies. We bridge the global skills gap by giving organizations access to dependable, high-performing professionals regardless of location while helping companies scale faster and more cost-effectively across borders. From startups to established enterprises, we enable businesses to grow internationally with confidence. Our mission is to empower Nigerian professionals with international roles that allow them to thrive globally while working locally. By combining world-class talent, structured operations, and remote workforce expertise, we create virtual teams that drive productivity, innovation, and long-term growth. At I&M Limited, we don’t just hire virtual employees we build global teams, support international expansion, and connect Nigeria to the world of work.
            </p>

        </div>

      </section>
      

    </x-slot>

</x-guest-layout>
