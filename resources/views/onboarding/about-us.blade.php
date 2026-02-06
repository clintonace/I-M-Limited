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
      <section  style="background-color: #000;" class="about-section-three">
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

          <div>
            <img style="width: 150px; height: auto;" src="/onboarding/images/logo.png" alt="I&M Limited Logo">
          </div>

            <span style="font-style: italic; color: #fff;" class="sub-title">About I&amp;M <span style="color:#E94E1B">Limited</span></span>

            <!-- <h3>
                The Future of Work — <br>
                Powered by African Talent
            </h3>

            <p class="lead">
                I&amp;M Limited is redefining how global organizations discover,
                build, and work with exceptional talent across borders.
            </p>

            <div class="divider"></div> -->

            <h4 style="color: #fff;">Company Bio <span style="color:#E94E1B">.</span></h4>

            <p style="color: #fff; font-size: 18px; line-height: 1.6;">
                
                I&M Limited is a global virtual workforce company connecting top Nigerian talent with businesses around the world through
                remote work opportunities. We specialize in hiring, training, and managing highly skilled virtual employees who operate seamlessly
                from Nigeria to support international companies.
                We bridge the global skills gap by giving organizations access to dependable, high-performing professionals regardless of
                location while helping companies scale faster and more cost-effectively across borders. From startups to established enterprises,
                we enable businesses to grow internationally with confidence.
                Our mission is to empower Nigerian professionals with international roles that allow them to thrive globally while working
                locally. By combining world-class talent, structured operations, and remote workforce expertise, we create virtual teams that
                drive productivity, innovation, and long-term growth.
                At I&M Limited, we don’t just hire virtual employees we build global teams, support international expansion, and connect
                Nigeria to the world of work.
            </p>

           

          </div>

        </div>
      </section>
      <!-- End About Section Three -->

     
   


    

    </x-slot>

</x-guest-layout>
