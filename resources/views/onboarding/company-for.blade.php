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
                        <source src="/onboarding/video/vid6.mp4" type="video/mp4">
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

                                <a style="color: white" href="#join-network"
                                class="btn btn-style-two mt-4 wow fadeInUp fade-top"
                                data-wow-delay="300ms">
                                    → Build With I&M
                                </a>
                            </div>
                        </div>
                    </div>

            </section>


            <!-- WHAT YOU GET -->
            <section class="layout-pt-120 layout-pb-100">
                <div class="auto-container">

                    <div class="sec-title text-center wow fadeInUp">
                        <h2>What You Get</h2>
                        <h2 class="sub-title text-black">
                            Talent You Can Trust. Systems You Can Count On.
                        </h2>
                        <div class="text mt-3">
                            We help international companies build reliable results
                            without the risks of cross-border hiring.
                        </div>
                    </div>

                    <div class="row mt-5">
                        @foreach ([
                            'Pre-vetted, high-performing professionals',
                            'Project teams for on-demand work',
                            'Secure & compliant work environments',
                            'Local onboarding & workforce supervision',
                            'Performance monitoring & reporting',
                            'Seamless integration with your processes'
                        ] as $i => $item)

                        <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="{{ $i * 100 }}ms">
                            <div class="feature-block-two company-card">
                                <div class="inner-box">
                                    <h5>{{ $item }}</h5>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    <div class="text-center mt-4 wow fadeInUp">
                        <strong><h2>You choose the model. We provide the structure.</h2></strong>
                    </div>

                </div>
            </section>

            <!-- OUR MODELS -->
            <section style="padding: 100px 0;" class="layout-pt-100 layout-pb-100 bg-light">
                <div class="auto-container">

                    <div class="sec-title text-center wow fadeInUp">
                        <h2>Our Models</h2>
                        <h2 class="sub-title text-black">Two Ways to Build With I&M</h2>
                    </div>

                    <div class="row mt-5">

                        <!-- Dedicated Talent -->
                        <div class="col-lg-6 wow fadeInLeft">
                            <div class="feature-block-two company-card">
                                <div class="inner-box p-5">
                                    <h4>Dedicated Talent (Staffing)</h4>
                                    <p class="mt-2">
                                        Full-time professionals assigned exclusively to your organization —
                                        ideal for long-term roles and stable team growth.
                                    </p>

                                    <ul class="list-style-one animated-list mt-3">
                                        <li>Vetted talent</li>
                                        <li>Performance oversight</li>
                                        <li>Local supervision</li>
                                        <li>Compliance & reporting</li>
                                        <li>Secure systems setup</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Outsourced Teams -->
                        <div class="col-lg-6 wow fadeInRight">
                            <div class="feature-block-two company-card">
                                <div class="inner-box p-5">
                                    <h4>Outsourced Project Teams (Managed Services)</h4>
                                    <p class="mt-2">
                                        I&M-managed teams delivering complete projects on your behalf —
                                        without internal overhead.
                                    </p>

                                    <ul class="list-style-one animated-list mt-3">
                                        <li>Multidisciplinary teams</li>
                                        <li>Scalable workforce</li>
                                        <li>Continual monitoring</li>
                                        <li>Quality-controlled delivery</li>
                                        <li>No internal overhead</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <!-- WHY US -->
            <section class="layout-pt-120 layout-pb-100">
                <div class="auto-container">

                    <div class="sec-title text-center wow fadeInUp">
                        <h2>Why I&M</h2>
                        <h2 class="sub-title text-black">
                            More Than Recruitment — A Talent Operations Partner
                        </h2>
                    </div>

                    <div class="row mt-4 justify-content-center">
                        <div class="col-lg-8">
                            <ul class="list-style-one animated-list text-center">
                                <li class="wow fadeInUp">Secure physical office infrastructure</li>
                                <li class="wow fadeInUp" data-wow-delay="100ms">Monitored delivery & productivity</li>
                                <li class="wow fadeInUp" data-wow-delay="200ms">Cultural alignment & communication structure</li>
                                <li class="wow fadeInUp" data-wow-delay="300ms">Compliance & documentation handling</li>
                                <li class="wow fadeInUp" data-wow-delay="400ms">Long-term workforce development</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

            <!-- IMPACT -->
            <section style="padding: 100px 0;" class="layout-pt-100 layout-pb-120 bg-light">
                <div class="auto-container text-center">

                    <div class="sec-title wow fadeInUp">
                        <h2>Impact</h2>
                        <h2 class="sub-title text-black">Trusted Across Industries</h2>
                    </div>

                    <p class="mt-4 wow fadeInUp">
                        Our teams have delivered solutions across engineering, operations,
                        technology, and digital transformation throughout Europe and Africa.
                    </p>

                    <a href="#impact-stories"
                    class="btn btn-style-two text-white mt-4 wow fade-top"
                    data-wow-delay="300ms">
                        → View Impact Stories
                    </a>

                </div>
            </section>
       
    </x-slot>

</x-guest-layout>
