<x-guest-layout>

    <x-slot name="body">

 <script>
document.addEventListener("DOMContentLoaded", function () {

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
        if (slides.length === 0) return;
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    setInterval(autoSlide, 6000);

});
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
          <div class="fun-fact-section" style="margin-bottom:80px;">
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
                            width:50px;
                            height:auto;
                            transition:transform 0.8s ease;
                            display:block;
                        ">
                </div>

                <span style="font-style: italic; color:#fff;">
                    About I&amp;M <span style="color:#E94E1B">Limited</span>
                </span>

                <h4 style="color:#fff; margin-top:10px;">
                    Who we are <span style="color:#E94E1B">.</span>
                </h4>

                <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                    

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

            <!-- <div style="margin-bottom:25px;">
                <img id="aboutLogoo"
                    src="/onboarding/images/logo.png"
                    alt="I&M Limited Logo"
                    style="
                        width:50px;
                        height:auto;
                        transition:transform 0.8s ease;
                        display:block;
                    ">
            </div> -->

            <h4 style="color:#fff; margin-top:10px;">
                Our story <span style="color:#E94E1B">.</span>
            </h4>

            <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">

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

      </section>

       <section  style="background-color: #000;" class="about-section-three">
            <div class="auto-container">

                <div class="text-box modern-about text-center">

                    <h4 style="color:#fff; margin-top:10px;">
                        Our Purpose <span style="color:#E94E1B">.</span>
                    </h4>
                    

                    <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                            To unlock global opportunities for African professionals
                                            and deliver workforce solutions that reimagine business
                                            growth beyond borders.
                    </p>

                </div>
            </div>
      </section>

      <section  style="background-color: #000;" class="about-section-three">
            <div class="auto-container">

                <div class="text-box modern-about text-center">

                    <h4 style="color:#fff; margin-top:10px;">
                        Our Vision <span style="color:#E94E1B">.</span>
                    </h4>
                    

                    <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                              We see Africa as an established global hub for exceptional
                                    talent — advancing the future of work through innovation,
                                    inclusion, and integrity.
                    </p>

                </div>
            </div>
      </section>

      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-box modern-about ">
                <h4 style="color:#fff; margin-top:10px;">
                        Our Values <span style="color:#E94E1B">.</span>
                    </h4>
                <!-- <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span> -->
                <!-- <h6 style="color: #ffffff;">The Principles That Guide Everything We Do</h6> -->
            </div>

            <div class="row mt-5 owl-carousel values-carousel">

    <!-- Excellence -->
    <div class="col-lg-12 col-md-6">
        <div class="feature-block-two work-block -type-4">
            <div class="inner-box" 
                 style="
                    background: linear-gradient(135deg, #E94E1B, #B93712);
                    color: #fff;
                    padding: 40px 30px;
                    border-radius: 20px;
                    position: relative;
                    overflow: hidden;
                 ">
                 
                <div style="
                    position:absolute;
                    top:-50px;
                    right:-50px;
                    width:160px;
                    height:160px;
                    background:rgba(255,255,255,0.08);
                    border-radius:50%;
                 "></div>

                <h5 style="font-weight:bold;">Excellence</h5>
                <p class="text-black">
                    World-class standards, integrity, precision,
                    and accountability in everything we deliver.
                </p>
            </div>
        </div>
    </div>

    <!-- Growth -->
    <div class="col-lg-12 col-md-6">
        <div class="feature-block-two work-block -type-4">
            <div class="inner-box" 
                 style="
                    background: linear-gradient(135deg, #FF6A3D, #E94E1B);
                    color: #fff;
                    padding: 40px 30px;
                    border-radius: 20px;
                    position: relative;
                    overflow: hidden;
                 ">

                <div style="
                    position:absolute;
                    bottom:-70px;
                    left:-70px;
                    width:220px;
                    height:220px;
                    background:rgba(255,255,255,0.1);
                    transform:rotate(45deg);
                 "></div>

                <h5 style="font-weight:bold;">Growth</h5>
                <p class="text-black">
                    Curiosity, adaptability, continuous learning,
                    and innovation — for people and businesses.
                </p>
            </div>
        </div>
    </div>

    <!-- Impact -->
    <div class="col-lg-12 col-md-6">
        <div class="feature-block-two work-block -type-4">
            <div class="inner-box" 
                 style="
                    background: linear-gradient(135deg, #C73E15, #E94E1B, #FF7B4D);
                    color: #fff;
                    padding: 40px 30px;
                    border-radius: 20px;
                    position: relative;
                    overflow: hidden;
                 ">

                <div style="
                    position:absolute;
                    top:0;
                    left:0;
                    width:100%;
                    height:100%;
                    background: radial-gradient(circle at bottom right, rgba(255,255,255,0.12), transparent 60%);
                 "></div>

                <h5 style="font-weight:bold; position:relative;">Impact</h5>
                <p style="position:relative;" class="text-black">
                    Collaboration with purpose — creating real value
                    for talent, clients, and communities.
                </p>
            </div>
        </div>
    </div>

</div>


        </div>
      </section>

    </x-slot>

</x-guest-layout>
