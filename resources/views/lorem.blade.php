<x-guest-layout>

    <x-slot name="body">

        <style>
            .company-card {
                transition: all 0.35s ease;
            }

            .company-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 45px rgba(0,0,0,0.12);
            }

            .animated-list li {
                list-style: none;
            }
        </style>

        <!-- Banner Section -->
        <section class="banner-section -type-15 fade-top" style="position: relative; overflow: hidden;">

            <!-- Background Video -->
            <video autoplay muted loop playsinline
                style="position:absolute; top:50%; left:50%; min-width:100%; min-height:100%;
                       transform:translate(-50%,-50%); object-fit:cover; z-index:0;">
                <source src="/onboarding/video/vid5.mp4" type="video/mp4">
            </video>

            <!-- Overlay -->
            <div style="position:absolute; inset:0;
                        background:linear-gradient(to bottom,
                        rgba(0,0,0,.8) 0%,
                        rgba(0,0,0,.4) 40%,
                        rgba(0,0,0,.05) 80%);
                        z-index:1;"></div>

            <!-- Content -->
            <div class="auto-container" style="position:relative; z-index:2;">
                <div class="title-box wow fadeInUp" style="margin:100px; color:white;">
                    <h1>Build Your Global Team With Confidence.</h1>

                    <div class="text-white" style="font-size:18px;">
                        Access exceptional African talent supported by systems, structure,
                        and supervision — for full-time roles or complete project delivery.
                    </div>

                    <div class="text-white mt-2">
                        <strong>Made in Africa. Serving the World.</strong>
                    </div>

                    <a href="#build-with-us"
                       class="btn btn-style-two mt-4 wow fadeInUp fade-top text-white"
                       data-wow-delay="300ms">
                        → Build With I&M
                    </a>
                </div>
            </div>
        </section>

        

    </x-slot>

</x-guest-layout>
