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


      <!-- About Section Three -->
      <section class="about-section-three">
        <div class="auto-container">
          <div class="images-box">
            <div class="row">
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <figure class="image"><img src="/onboarding/images/resource/about-img-1.jpg" alt=""></figure>
              </div>
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <figure class="image"><img src="/onboarding/images/resource/about-img-2.jpg" alt=""></figure>
                <figure class="image"><img src="/onboarding/images/resource/about-img-3.jpg" alt=""></figure>
              </div>
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <figure class="image"><img src="/onboarding/images/resource/about-img-4.jpg" alt=""></figure>
                <figure class="image"><img src="/onboarding/images/resource/about-img-5.jpg" alt=""></figure>
              </div>
              <div class="column col-lg-3 col-md-6 col-sm-6">
                <figure class="image"><img src="/onboarding/images/resource/about-img-6.jpg" alt=""></figure>
              </div>
            </div>
          </div>

          <!-- Fun Fact Section -->
          <div class="fun-fact-section">
            <div class="row">
              <!--Column-->
              <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="150">0</span>+</div>
                <h4 class="counter-title">European Clients Served.</h4>
              </div>

              <!--Column-->
              <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="80">0</span>%</div>
                <h4 class="counter-title">Satisfactory ratings, 80% upwards.</h4>
              </div>

              <!--Column-->
              <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="2">0</span>+</div>
                <h4 class="counter-title">Years Client Engagement</h4>
              </div>
            </div>
          </div>
          <!-- Fun Fact Section -->

          <div class="text-box modern-about">

            <span class="sub-title">About I&amp;M Limited</span>

            <h3>
                The Future of Work — <br>
                Powered by African Talent
            </h3>

            <p class="lead">
                I&amp;M Limited is redefining how global organizations discover,
                build, and work with exceptional talent across borders.
            </p>

            <div class="divider"></div>

            <h4>Who We Are</h4>

            <p>
                We are a talent and workforce operations company connecting
                Africa’s brightest professionals with forward-thinking global companies.
            </p>

            <p>
                Beyond hiring, we provide the systems, physical infrastructure,
                and on-ground support teams need to perform, grow, and succeed.
            </p>

            <p>
                Our approach blends structured operations, human-centered management,
                and long-term workforce development.
            </p>

            <p>
                We don’t just staff teams — we build, manage, and deploy them
                for long-term roles or on-demand project delivery.
            </p>

          </div>

        </div>
      </section>
      <!-- End About Section Three -->

     
      <div class="section-divider wave-divider">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path
                d="M0,30 C120,10 240,50 360,40 480,30 600,10 720,20 840,30 960,50 1080,40 1200,30 1320,15 1440,20 L1440,60 L0,60 Z"
                fill="url(#waveGradient)"
            ></path>

            <defs>
                <linearGradient id="waveGradient" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#fe681c" stop-opacity="0.9" />
                    <stop offset="50%" stop-color="#fe681c" stop-opacity="0.35" />
                    <stop offset="100%" stop-color="#fe681c" stop-opacity="0.05" />
                </linearGradient>
            </defs>
        </svg>
      </div>

      <!-- Testimonial Section Two -->
      <section class="testimonial-section-two">
        <div class="container-fluid">
          <div class="testimonial-left"><img src="/onboarding/images/resource/testimonial-left.png" alt=""></div>
          <div class="testimonial-right"><img src="/onboarding/images/resource/testimonial-right.png" alt=""></div>
          <!-- Sec Title -->
          <div class="sec-title text-center">
            <h2>Testimonials From Our Customers</h2>
            <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
          </div>

          <div class="carousel-outer">
            <!-- Testimonial Carousel -->
            <div class="testimonial-carousel owl-carousel owl-theme">

              <!--Testimonial Block -->
              <div class="testimonial-block-two">
                <div class="inner-box">
                  <div class="thumb"><img src="/onboarding/images/resource/testi-thumb-1.png" alt=""></div>
                  <h4 class="title">Great quality!</h4>
                  <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                  <div class="info-box">
                    <h4 class="name">Adebayo Kunle</h4>
                    <span class="designation">Web Developer</span>
                  </div>
                </div>
              </div>

              <!--Testimonial Block -->
              <div class="testimonial-block-two">
                <div class="inner-box">
                  <div class="thumb"><img src="/onboarding/images/resource/testi-thumb-1.png" alt=""></div>
                  <h4 class="title">Great quality!</h4>
                  <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                  <div class="info-box">
                    <h4 class="name">Emmanual Kenneth</h4>
                    <span class="designation">Web Developer</span>
                  </div>
                </div>
              </div>

              <!--Testimonial Block -->
              <div class="testimonial-block-two">
                <div class="inner-box">
                  <div class="thumb"><img src="/onboarding/images/resource/testi-thumb-1.png" alt=""></div>
                  <h4 class="title">Great quality!</h4>
                  <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                  <div class="info-box">
                    <h4 class="name">Andrew Robinson</h4>
                    <span class="designation">Web Developer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonial Section -->

      <div class="section-divider wave-divider">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path
                d="M0,30 C120,10 240,50 360,40 480,30 600,10 720,20 840,30 960,50 1080,40 1200,30 1320,15 1440,20 L1440,60 L0,60 Z"
                fill="url(#waveGradient)"
            ></path>

            <defs>
                <linearGradient id="waveGradient" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#fe681c" stop-opacity="0.9" />
                    <stop offset="50%" stop-color="#fe681c" stop-opacity="0.35" />
                    <stop offset="100%" stop-color="#fe681c" stop-opacity="0.05" />
                </linearGradient>
            </defs>
        </svg>
      </div>

    <section class=" layout-pb-100">
      <div class="auto-container">
          <div class="row justify-content-center">

              <div class="col-lg-10 text-center">
                  <div class="sec-title">
                      <span style="color: #fe681c; font-weight: bold; font-size: 24px;" class="sub-title">Our Purpose</span>
                      <h2>Building Opportunity Beyond Borders</h2>
                  </div>
              </div>

              <div class="row mt-5">

                  <div class="col-lg-6 col-md-12">
                      <div class="feature-block-two p-5">
                          <div class="inner-box">
                              <h4>Our Mission</h4>
                              <p>
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
                              <p>
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


    <div class="section-divider wave-divider">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path
                d="M0,30 C120,10 240,50 360,40 480,30 600,10 720,20 840,30 960,50 1080,40 1200,30 1320,15 1440,20 L1440,60 L0,60 Z"
                fill="url(#waveGradient)"
            ></path>

            <defs>
                <linearGradient id="waveGradient" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#fe681c" stop-opacity="0.9" />
                    <stop offset="50%" stop-color="#fe681c" stop-opacity="0.35" />
                    <stop offset="100%" stop-color="#fe681c" stop-opacity="0.05" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <section class="layout-pt-100 layout-pb-100">
        <div class="auto-container">

            <div class="sec-title text-center">
                <span style="color: #fe681c; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values</span>
                <h2>The Principles That Guide Everything We Do</h2>
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


    <div class="section-divider wave-divider">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path
                d="M0,30 C120,10 240,50 360,40 480,30 600,10 720,20 840,30 960,50 1080,40 1200,30 1320,15 1440,20 L1440,60 L0,60 Z"
                fill="url(#waveGradient)"
            ></path>

            <defs>
                <linearGradient id="waveGradient" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#fe681c" stop-opacity="0.9" />
                    <stop offset="50%" stop-color="#fe681c" stop-opacity="0.35" />
                    <stop offset="100%" stop-color="#fe681c" stop-opacity="0.05" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <section class=" layout-pb-100">
        <div class="auto-container">

            <div class="sec-title text-center">
                <span style="color: #fe681c; font-weight: bold; font-size: 24px;"  class="sub-title">What Makes Us Different</span>
                <h2>A Complete Ecosystem — Not Just Recruitment</h2>
                <div class="text mt-3">
                    We don’t just place talent. We build the structure
                    that makes global work reliable.
                </div>
            </div>

            <div class="row mt-5">

                <!-- <div class="col-lg-8  justify-content-center gap-4"> -->
                    <div class="col-lg-6">
                      <ul class="list-style-one animated-list">
                          <li class="wow fadeInUp">A vetted, high-quality talent pipeline</li>
                          <li class="wow fadeInUp" data-wow-delay="100ms">Full-time staffing & project-based team outsourcing</li>
                          <li class="wow fadeInUp" data-wow-delay="200ms">Local onboarding & workforce supervision</li>
                      </ul>
                  </div>

                  <div class="col-lg-6">
                      <ul class="list-style-one">
                          <li>Secure workspaces for sensitive systems</li>
                          <li>Compliance, reporting & structured documentation</li>
                          <li>Tech-enabled processes with human-centered leadership</li>
                      </ul>
                  </div>
                <!-- </div> -->

            </div>

            <div class="text-center mt-4">
                <p>
                    We create certainty in cross-border workflows.
                    <br>
                    <strong>Talent + Structure = Reliability.</strong>
                </p>
            </div>

        </div>
    </section>


    <div class="section-divider wave-divider">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path
                d="M0,30 C120,10 240,50 360,40 480,30 600,10 720,20 840,30 960,50 1080,40 1200,30 1320,15 1440,20 L1440,60 L0,60 Z"
                fill="url(#waveGradient)"
            ></path>

            <defs>
                <linearGradient id="waveGradient" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#fe681c" stop-opacity="0.9" />
                    <stop offset="50%" stop-color="#fe681c" stop-opacity="0.35" />
                    <stop offset="100%" stop-color="#fe681c" stop-opacity="0.05" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <section class="layout-pb-100 ">
        <div class="auto-container">

            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="sec-title text-center">
                        <span style="color: #fe681c; font-weight: bold; font-size: 24px;" class="sub-title">Our Story</span>
                        <h2>From Insight to Impact</h2>
                    </div>

                    <div class="text mt-4">
                        <p>
                            I&amp;M began with a simple truth:
                            Africa is full of brilliant professionals.
                            What they often lack is access, structure, and opportunity.
                        </p>

                        <p>
                            We built the system that solves that — for talent and
                            companies alike.
                        </p>

                        <p>
                            Today, we operate as a bridge between global work
                            and African potential, creating value that grows
                            businesses and strengthens economies.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <div class="section-divider wave-divider">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path
                d="M0,30 C120,10 240,50 360,40 480,30 600,10 720,20 840,30 960,50 1080,40 1200,30 1320,15 1440,20 L1440,60 L0,60 Z"
                fill="url(#waveGradient)"
            ></path>

            <defs>
                <linearGradient id="waveGradient" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#fe681c" stop-opacity="0.9" />
                    <stop offset="50%" stop-color="#fe681c" stop-opacity="0.35" />
                    <stop offset="100%" stop-color="#fe681c" stop-opacity="0.05" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <section class="layout-pb-100">
        <div class="auto-container">

            <div class="sec-title text-center">
                <span style="color: #fe681c; font-weight: bold; font-size: 24px;" class="sub-title">Our Operations</span>
                <h2>Built for Security, Scale, and Oversight</h2>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 text-center">
                    <p>
                        I&amp;M Limited maintains physical operational bases in Africa,
                        enabling secure workforce management, monitored delivery,
                        and reliable compliance for global organizations.
                    </p>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4 col-md-6">
                    <div class="feature-block-two p-5">
                        <div class="inner-box">
                            <h5>Secure Systems</h5>
                            <p>Controlled installations for sensitive tools and platforms.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-block-two p-5">
                        <div class="inner-box">
                            <h5>Monitored Environments</h5>
                            <p>Structured, supervised workspaces that ensure performance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-block-two p-5">
                        <div class="inner-box">
                            <h5>Compliance & Oversight</h5>
                            <p>Reliable governance, reporting, and operational control.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    </x-slot>

</x-guest-layout>
