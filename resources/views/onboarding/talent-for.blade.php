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
                <source src="/onboarding/video/vid5.mp4" type="video/mp4">
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
                        <h2>Your Career, Elevated.</h2>

                        <div class="text-white">
                            Work with global companies from the comfort of your home country —
                            with structure, support, and opportunities to help you grow.
                        </div>

                        <div class="text-white mt-2">
                            <strong>Made in Africa. Serving the World.</strong>
                        </div>

                        <a style="color: white" href="#join-network"
                        class="btn btn-style-two mt-4 wow fadeInUp fade-top"
                        data-wow-delay="300ms">
                            → Join the Talent Network
                        </a>
                    </div>
                </div>
            </div>

    </section>


            <section class="layout-pt-120 layout-pb-100">
                <div class="auto-container">

                    <div class="sec-title text-center wow fadeInUp">
                        <h2 class="text-black">What You Get <span style="color: #fe681c;">?</span> </h2>
                        <h2  class="sub-title text-black">Work Globally. Grow Confidently.</h2>
                        <div class="text mt-3">
                            Build meaningful, long-term global careers — without relocation.
                        </div>
                    </div>

                    <div class="row mt-5">

                        @foreach ([
                            'Premium global opportunities',
                            'Fair, transparent compensation',
                            'Structured onboarding & systems',
                            'Access to global-standard tools',
                            'Career development & growth',
                            'A supportive talent community'
                        ] as $index => $item)

                        <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="{{ $index * 100 }}ms">
                            <div class="feature-block-two work-block -type-4 talent-card">
                                <div class="inner-box">
                                    <h5>{{ $item }}</h5>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    <div class="text-center mt-4 wow fadeInUp">
                        <strong><h2>When you win, we win.</h2></strong>
                    </div>

                </div>
            </section>


            <section style="padding: 100px 0;" class="layout-pt-100 layout-pb-100 bg-light">
                <div class="auto-container">

                    <div class="row align-items-center">

                        <div class="col-lg-6 wow fadeInLeft">
                            <h2>We Build With You, Not Around You</h2>
                            <p class="mt-3">
                                We don’t see you as a CV.
                                We see you as a professional with potential.
                            </p>
                        </div>

                        <div class="col-lg-6">
                            <ul class="list-style-one animated-list">
                                <li class="wow fadeInUp">Skills development</li>
                                <li class="wow fadeInUp" data-wow-delay="100ms">Communication enhancement</li>
                                <li class="wow fadeInUp" data-wow-delay="200ms">Professional alignment</li>
                                <li class="wow fadeInUp" data-wow-delay="300ms">Mental well-being support</li>
                                <li class="wow fadeInUp" data-wow-delay="400ms">Performance coaching</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </section>


            <section class="layout-pt-120 layout-pb-100">
                <div class="auto-container">

                    <div class="sec-title text-center wow fadeInUp">
                        <h2 class="">How It Works</h2>
                        <h2 class="sub-title text-black">A Simple Path to Global Work</h2>
                    </div>

                    <div class="row mt-5">

                        @foreach ([
                            'Create your profile',
                            'Get verified',
                            'Get matched',
                            'Deliver with confidence',
                            'Work across projects'
                        ] as $step => $text)

                        <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="{{ $step * 120 }}ms">
                            <div class="feature-block-two">
                                <div class="inner-box">
                                    <h5>Step {{ $step + 1 }}</h5>
                                    <p>{{ $text }}</p>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    <div class="text-center mt-4 wow fadeInUp">
                        <a href="#join-network" class="btn btn btn-style-two fade-top text-white" data-wow-delay="300ms">
                            → Join the Network
                        </a>
                    </div>

                </div>
            </section>


            <section style="padding: 100px 0;" class="layout-pt-100 layout-pb-100 bg-light">
                <div class="auto-container">

                    <div class="sec-title text-center wow fadeInUp">
                        <h2 class="">Who We’re Looking For</h2>
                        <h2 class="sub-title text-black">Professionals Ready for Global Work</h2>
                    </div>

                    <div class="row mt-4 justify-content-center">
                        <div class="col-lg-8">
                            <ul class="list-style-one animated-list text-center">
                                <li class="wow fadeInUp">Skilled & reliable</li>
                                <li class="wow fadeInUp" data-wow-delay="100ms">Clear communicators</li>
                                <li class="wow fadeInUp" data-wow-delay="200ms">Growth-oriented</li>
                                <li class="wow fadeInUp" data-wow-delay="300ms">Structured & accountable</li>
                                <li class="wow fadeInUp" data-wow-delay="400ms">Ready for global exposure</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>


            <section style="padding: 100px 0;" class="layout-pt-120 layout-pb-100">
                <div class="auto-container">

                    <div class="sec-title text-center wow fadeInUp">
                        <h2 class="">Disciplines</h2>
                        <h2 class="sub-title text-black">Find Your Place in Our Talent Community</h2>
                    </div>

                    <div class="row mt-5">

                        @foreach ([
                            'Engineering & STEM',
                            'Digital & Software',
                            'Operations & Admin',
                            'Business & Strategy',
                            'Finance & Accounting',
                            'Design & Product'
                        ] as $i => $discipline)

                        <div style="padding: 20px;" class="col-lg-4 col-md-6 mb-4 wow zoomIn" data-wow-delay="{{ $i * 100 }}ms">
                            <div class="feature-block-two talent-card">
                                <div class="inner-box pt-5 text-center">
                                    <h5>{{ $discipline }}</h5>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
            </section>


            <section style="padding: 100px 0;" class="layout-pt-100 layout-pb-120 bg-light">
                <div class="auto-container text-center">

                    <div class="sec-title wow fadeInUp">
                        <h2 class="">Impact</h2>
                        <h2 class="sub-title text-black">Your Growth, Our Priority</h2>
                    </div>

                    <p class="mt-4 wow fadeInUp">
                        Our talents have contributed to impact-driven projects across Europe and Africa —
                        growing in confidence, skill, and global exposure.
                    </p>

                    <a href="#stories" class="btn btn btn-style-two text-white mt-4 wow fade-top" data-wow-delay="300ms">
                        → Read Talent Stories
                    </a>

                </div>
            </section>
       
    </x-slot>

</x-guest-layout>
