<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>I&M Limited</title>
    <meta name="description" content="Connecting top remote talent with companies worldwide. Find skilled professionals for roles like developers, designers, and support experts tailored to your needs." />


    <meta property="og:title" content="Connect with Top Nigerian Remote Talent" />
    <meta property="og:description"
        content="Helping global companies discover skilled Nigerian professionals ready to excel remotely. Find top talent in tech, customer support, design, and more." />
    <meta property="og:image" content="https://iandmlimited.com/logos/IandM-no-white-bg-logo-.png" />
    <meta property="og:url" content="https://iandmlimited.com" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="t-LZsEXUGJN1fsfkAALqn5VatLkolFDlMIPP4i6HedU" />

    <meta content="Connect with Top Nigerian Remote Talent" property="twitter:title" />
    <meta content="Connecting top remote talent with forward-thinking companies worldwide, we specialize in simplifying the recruitment process for remote positions. Our platform brings you highly skilled professionals
        tailored to meet your business needs, whether you're looking for developers, designers, customer support experts,
        or other specialized remote roles. With a commitment to quality, efficiency, and global reach,
        we make it easy for companies to find their perfect remote match—anywhere in the world."
        property="twitter:description" />

    <meta content="https://iandmlimited.com/logos/IandM-no-white-bg-logo-.png" property="twitter:image" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

    <link href="/onboarding/css/bootstrap.css" rel="stylesheet">
    <link href="/onboarding/css/style.css" rel="stylesheet">
    <link href="/onboarding/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="/onboarding/IandM-no-white-bg-logo-.png" type="image/x-icon">
    <link rel="icon" href="/onboarding/IandM-no-white-bg-logo-.png" type="image/x-icon">

    {{--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> --}}

    <script>
            var csrf = "{{ csrf_token() }}";
    </script>


    <style>

      .help-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 16px;
            border: 1px solid #eee;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .help-option:hover {
            border-color: #fe681c;
            background: rgba(254,104,28,0.05);
        }

        .help-option input {
            accent-color: #fe681c;
        }

        .wave-divider {
                width: 100%;
                height: 50px; /* thin */
                margin: 80px 0;
                overflow: hidden;
                opacity: 0;
                transform: translateY(20px);
                animation: waveFadeIn 1.2s ease forwards;
            }

            .wave-divider svg {
                width: 100%;
                height: 100%;
                display: block;
            }

            @keyframes waveFadeIn {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }




        .about-section-three .image img,
        .banner-style-home22 .image img,
        .testimonial-block-two .thumb img {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .about-section-three .image:hover img {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }


        /* Feature cards motion */
        .feature-block-two,
        .work-block.-type-4 {
            transition: all 0.35s ease;
            position: relative;
        }

        .feature-block-two:hover,
        .work-block.-type-4:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0,0,0,0.12);
        }


        /* Floating CTA container */
        .floating-cta {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 320px;
            background: #ffffff;
            border-radius: 16px;
            padding: 24px 22px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            z-index: 9999;
            transition: all 0.35s ease;
        }

        /* CTA content */
        .floating-cta h4 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .floating-cta p {
            font-size: 15px;
            margin-bottom: 18px;
            color: #555;
        }

        /* Close button */
        .cta-close {
            position: absolute;
            top: 12px;
            right: 14px;
            background: transparent;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        /* Minified CTA */
        .cta-minified {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 54px;
            height: 54px;
            background: var(--theme-color);
            color: #fff;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            z-index: 9999;
        }

        /* Hidden state */
        .floating-cta.closed {
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
        }


        /* Video hero container */
        .hero-video-section {
            position: relative;
            overflow: hidden;
            min-height: 90vh;
        }

        /* Fullscreen background video */
        .hero-bg-video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        /* Dark overlay for readability */
        .hero-video-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 2;
        }

        /* Ensure content stays on top */
        .hero-video-section .auto-container {
            position: relative;
            z-index: 3;
        }

        .hero-bg-video {
            filter: brightness(0.9) contrast(1.05);
        }

        @media (max-width: 768px) {
            .hero-video-section {
                min-height: 75vh;
            }
        }


        .icon-box {
            font-size: 42px;
            margin-bottom: 15px;
            color: #fe681c;
        }




        .theme-btn.active {
            background-color: #fe681c;
            color: white;
        }

        .form-section {
            transition: all 0.3s ease-in-out;
        }

        /* Container to center the circle */
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40vh;
        }

        /* Circle with animated border */
        .animated-circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: #000000;
            /* Inner background color */
            position: relative;
            padding: 50px
        }

        /* Border animation */
        .animated-circle::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 50%;
            border: 5px solid transparent;
            background-image: conic-gradient(from 0deg, rgba(246, 173, 62, 0.2), rgba(246, 173, 62, 1), rgba(246, 173, 62, 0.2));
            background-size: 200% 200%;
            animation: rotate-border 4s linear infinite;
            z-index: -1;
        }

        /* Keyframes for smooth rotation */
        @keyframes rotate-border {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .woww {
            display: flex;
            align-items: center;
            background: #fe681c;
            padding: 20px;
            border-radius: 10px;
            overflow: hidden;
            /* Ensures smooth scroll within container */
        }

        .t {
            display: inline-block;
            white-space: nowrap;
            /* Keeps text on a single line */
            animation: scroll-text 60s linear infinite;
        }

        /* Keyframes for the scrolling animation */
        @keyframes scroll-text {
            0% {
                transform: translateX(100%);
                /* Start from outside the right edge */
            }


            100% {
                transform: translateX(-100%);
                /* Move outside the left edge */
            }
        }


        /* Full-page container for static background */
        .background-container {
            height: 50vh;

            /* Replace with your image URL */
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            /* Makes the background image static */
            display: flex;
            align-items: center;
            justify-content: left;
            color: #fff;
            text-align: left;
            border-radius: 10px;
        }

        /* Styling for the centered text */
        .centered-text {
            font-size: 1em;
            font-weight: bold;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background for contrast */
            border-radius: 10px;
        }

        /* Content below the static background */
        .content {
            padding: 50px;
            font-size: 1.2em;
        }


        /* Universal top fade overlay */
        .fade-top {
            position: relative;
            overflow: hidden;
        }

        .fade-top::before {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;

            background: linear-gradient(
                to bottom,
                rgba(0,0,0,0.75) 0%,
                rgba(0,0,0,0.45) 35%,
                rgba(0,0,0,0.15) 65%,
                rgba(0,0,0,0.00) 85%
            );

            z-index: 1;
        }

        /* Ensure content stays above fade */
        .fade-top > * {
            position: relative;
            z-index: 2;
        }

    </style>
</head>

<body data-anm=".anm">

    @include('sweetalert::alert')


    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
        </div>

        @if (Route::currentRouteName()!= 'register')
        @if (Route::currentRouteName()!= 'login')

        <x-headerlayout />

        @endif
        @endif

        {{$body}}

        <x-footerlayout />


    </div><!-- End Page Wrapper -->


    <script src="/onboarding/js/jquery.js"></script>
    <script src="/onboarding/js/popper.min.js"></script>
    <script src="/onboarding/js/chosen.min.js"></script>
    <script src="/onboarding/js/bootstrap.min.js"></script>
    <script src="/onboarding/js/jquery.fancybox.js"></script>
    <script src="/onboarding/js/jquery.modal.min.js"></script>
    <script src="/onboarding/js/mmenu.polyfills.js"></script>
    <script src="/onboarding/js/mmenu.js"></script>
    <script src="/onboarding/js/appear.js"></script>
    <script src="/onboarding/js/anm.min.js"></script>
    <script src="/onboarding/js/ScrollMagic.min.js"></script>
    <script src="/onboarding/js/rellax.min.js"></script>
    <script src="/onboarding/js/owl.js"></script>
    <script src="/onboarding/js/wow.js"></script>
    <script src="/onboarding/js/script.js"></script>
    <script defer src="/onboarding/js/basics.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const candidateBtn = document.getElementById('candidateBtn');
            const employerBtn = document.getElementById('employerBtn');
            const candidateForm = document.getElementById('candidateForm');
            const employerForm = document.getElementById('employerForm');

            candidateBtn.addEventListener('click', function () {
                candidateForm.style.display = 'block';
                employerForm.style.display = 'none';
                candidateBtn.classList.add('active');
                employerBtn.classList.remove('active');
            });

            employerBtn.addEventListener('click', function () {
                employerForm.style.display = 'block';
                candidateForm.style.display = 'none';
                employerBtn.classList.add('active');
                candidateBtn.classList.remove('active');
            });
        });

        
    </script>


    <script>
        function toggleCta(open) {
            const cta = document.getElementById('floatingCta');
            const minified = document.getElementById('ctaMinified');

            if (open) {
                cta.classList.remove('closed');
                minified.style.display = 'none';
            } else {
                cta.classList.add('closed');
                minified.style.display = 'flex';
            }
        }
    </script>


<script>
          $('.values-carousel').owlCarousel({
              loop: true,
              margin: 20,
              autoplay: true,
              autoplayTimeout: 4000,
              responsive:{
                  0:{ items:1 },
                  768:{ items:2 },
                  1024:{ items:3 }
              }
          });
          </script>




    <!-- Floating CTA -->
    <div id="floatingCta" class="floating-cta open">

        <!-- Close Button -->
        <button class="cta-close" onclick="toggleCta(false)">
            ✕
        </button>

        <h4>Ready to Build with Us?</h4>
        <p>
            Let’s create work that transforms<br>
            people and businesses.
        </p>

        <a href="#get-started" class="theme-btn btn-style-two text-white">
            → Get Started Asap
        </a>
    </div>

    <!-- Minified CTA Icon -->
    <div id="ctaMinified" class="cta-minified" onclick="toggleCta(true)">
        🚀
    </div>




</body>


</html>
