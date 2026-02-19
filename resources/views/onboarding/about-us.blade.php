<x-guest-layout>

    <x-slot name="body">

      <section style="position:relative; height:100vh; overflow:hidden;">

            <!-- IMAGE 1 -->
            <div class="hero-slide"
                style="background:url('/onboarding/images/woleft.png') center center / cover no-repeat;
                    position:absolute; top:100px; left:150px; width:100%; height:250%;
                    z-index:1; opacity:1; transition:opacity 1s ease;">
            </div>

            <!-- IMAGE 2 -->
            <div class="hero-slide"
                style="background:url('/onboarding/images/brown-ma.png') center center / cover no-repeat;
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
                                <span  style="color: #E94E1B; text-transform: uppercase;">Powered by African Talent</span>
                        </h1>

                        <p style="color:white; font-size:20px; margin-bottom:5px;">
                            I&amp;M Limited: Redefining how global organizations discover, build, and work with exceptional talent across borders.
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

      

      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-box modern-about text-left">
                <h4 style="color:#fff; margin-top:10px;">
                 <span style="color:#E94E1B">Who</span> we are.
                    </h4>
                <!-- <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span> -->
                <!-- <h6 style="color: #ffffff;">The Principles That Guide Everything We Do</h6> -->
            </div>
            

                <div style="
                    max-width:900px;
                    margin:auto;
                " class="mt-5">

               

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

                </div>
           
        </div>
      </section>
      
      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-box modern-about text-left">
                <h4 style="color:#fff; margin-top:10px;">
                        Our  <span style="color:#E94E1B">Story</span>.
                    </h4>
                <!-- <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span> -->
                <!-- <h6 style="color: #ffffff;">The Principles That Guide Everything We Do</h6> -->
            </div>
            

                <div style="
                    max-width:900px;
                    margin:auto;
                " class="mt-5">

               

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

                       <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                             Some companies are born from theoretical market analysis. I&M Limited was born from lived experience. 

                            Founded by Akim Ismael, whose journey from Nigeria to Europe as a refugee revealed the transformative power of structure and access, I&M exists to address a simple truth: African talent has never lacked capability, only consistent access to opportunity and systems that support long-term growth. 

                            Rather than exporting people, we focus on building systems. We work directly with locally based professionals to create and manage stable, compliant, and reliable operational frameworks that allow talent to perform consistently in global environments. 

                            Today, I&M operates through an impact-driven model, helping companies build through teams in Africa that are not just hired, but supported and built to last; bridging the global talent gap between continents. 
                        </p>
                    </div>

                </div>
           
        </div>
      </section>

      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-box modern-about text-left">
                <h4 style="color:#fff; margin-top:10px;">
                        Our  <span style="color:#E94E1B">Footprint</span>.
                    </h4>
                <!-- <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span> -->
                <!-- <h6 style="color: #ffffff;">The Principles That Guide Everything We Do</h6> -->
            </div>
            

                <div style="
                    max-width:900px;
                    margin:auto;
                " class="mt-5">

               

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

                       <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                             Nigeria is Africa’s most populous nation, home to over 200 million people and one of the youngest populations in the world. Lagos, where I&M operates from, is the country’s commercial centre, contributing approximately 30% of Nigeria’s GDP and serving as a gateway to international trade and innovation. 

                            We operate at the intersection of this demographic strength and global workforce demand. 
                        </p>
                    </div>

                </div>
           
        </div>
      </section>

      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-box modern-about text-left">
                <h4 style="color:#fff; margin-top:10px;">
                        Our  <span style="color:#E94E1B">Purpose</span>.
                    </h4>
                <!-- <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span> -->
                <!-- <h6 style="color: #ffffff;">The Principles That Guide Everything We Do</h6> -->
            </div>
            

                <div style="
                    max-width:900px;
                    margin:auto;
                " class="mt-5">

               

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

                       <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                            To unlock global opportunities for African professionals and deliver workforce solutions that reimagine business growth beyond borders.   
                        </p>
                    </div>

                </div>
           
        </div>
      </section>

      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-box modern-about text-left">
                <h4 style="color:#fff; margin-top:10px;">
                        Our  <span style="color:#E94E1B">Vision</span>.
                    </h4>
                <!-- <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span> -->
                <!-- <h6 style="color: #ffffff;">The Principles That Guide Everything We Do</h6> -->
            </div>
            

                <div style="
                    max-width:900px;
                    margin:auto;
                " class="mt-5">

               

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

                       <p style="color:#fff; font-size:18px; line-height:1.6; margin-top:20px;">
                            We see Africa as an established global hub for exceptional talent — advancing the future of work through innovation, inclusion, and integrity.
                        </p>

                    </div>

                </div>
           
        </div>
      </section>

      

      <section style="background-color: #000;" class="about-section-three">
        <div class="auto-container">

            <div class="sec-title text-box modern-about text-left">
                <h4 style="color:#fff; margin-top:10px;">
                        Our  <span style="color:#E94E1B">Values</span>.
                    </h4>
                <!-- <span style="color: #ffffff; font-weight: bold; font-size: 24px;"  class="sub-title">Our Values <span style="color:#E94E1B">.</span></span> -->
                <!-- <h6 style="color: #ffffff;">The Principles That Guide Everything We Do</h6> -->
            </div>
            

                <div style="
                    max-width:900px;
                    margin:auto;
                " class="mt-5">

               

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
                                <span style="color:#E94E1B;">Excellence:</span>
                                World-class standards, integrity, precision,
                                and accountability in everything we deliver.
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
                                <span style="color:#E94E1B;">Growth:</span>
                                Curiosity, adaptability, continuous learning,
                                and innovation — for people and businesses.
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
                                <span style="color:#E94E1B;">Impact:</span>
                                Collaboration with purpose — creating real value
                                for talent, clients, and communities.
                            </li>

                           

                        </ul>

                    </div>

                </div>
           
        </div>
      </section>

      

    </x-slot>

</x-guest-layout>
