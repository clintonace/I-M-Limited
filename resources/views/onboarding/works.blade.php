<x-guest-layout>

    <x-slot name="body">

        {{--
        <!-- Map Section -->
        <section class="map-section">
            <div class="map-outer">
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                    data-hue="#ffc400" data-title="Envato"
                    data-icon-path="/onboarding/images/icons/contact-map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </section>
        <!-- End Map Section --> --}}


        <!-- Banner Section-->
        <section class="banner-section -type-15"
            style="background-image: url(/onboarding/images/index-15/header/bg.png);">
            <div class="auto-container">
                <div class="cotnent-box">
                    <div style="margin: 100px" class="title-box wow fadeInUp" data-wow-delay='300ms'>
                        <h3>How it works</h3>
                        <div class="text">We follow these set of guidelines.</div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Banner Section-->

        <!-- TNC Section -->
        <section class="tnc-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>How it works</h2>
                    <div class="text">Home / How it works</div>
                </div>

                <div class="text-box">
                    <h3> Why Choose I&M Limited?</h3>
                </div>

                <div class="text-box">
                    <p>Access to global remote job opportunities.</p>
                    <p>Personalized support throughout the hiring process.</p>
                    <p>Transparent and user-friendly platform.</p>
                </div>

                <hr>

                <div class="text-box">
                    <h2>How to Register as a Candidate</h2>

                </div>
                <div class="text-box">
                    <h3>1. Sign Up and Create Your Profile</h3>
                    <p>Click the “Register as a Candidate” button.</p>
                    <p>Fill in your details, including your name, email, phone number, and password.</p>
                </div>

                <div class="text-box">
                    <h3>2. Complete Your Professional Profile</h3>
                    <p>Upload your CV/resume.</p>
                    <p>Provide details about your skills, experience, and qualifications.</p>
                    <p>Add a professional photo for a complete profile.</p>
                </div>


                <div class="text-box">
                    <h3>3. Browse and Apply for Jobs</h3>
                    <p>Use our job portal to explore available opportunities that match your skills.</p>
                    <p>Apply directly with your profile in a few clicks.</p>
                </div>

                <div class="text-box">
                    <h3>4. Get Matched with Top Employers</h3>
                    <p>Our team reviews your application and matches you with companies looking for your expertise.</p>
                    <p>Receive interview invites and updates via email.</p>
                </div>

                <div class="text-box">
                    <h3>5. Start Your Remote Career</h3>
                    <p>Once selected, begin your role with support from our team for onboarding and remote work tools.
                    </p>

                </div>


                <div class="text-box">
                    <h3>Ready to take the first step? <a href="{{route('register')}}" target="_blank" rel="noopener noreferrer">Register Now</a></h3>
                </div>

                <hr>
                {{-- Company side --}}

                <div class="text-box">
                    <h3> Why Choose I&M Limited?</h3>

                </div>

                <div class="text-box">
                    <p>Large talent pool of skilled professionals.</p>
                    <p>Fast and efficient candidate matching.</p>
                    <p>Compliance and support for international hiring.</p>
                </div>

                <hr>

                <div class="text-box">
                    <h2>How to Register as a Company</h2>

                </div>
                <div class="text-box">
                    <h3>1. Sign Up as a Client</h3>

                    <p>Click the “Register as a Company” button.</p>
                    <p>Provide your company details, including company name, contact person, email, and password.</p>

                </div>

                <div class="text-box">
                    <h3>2. Submit Your Requirements</h3>
                    <p>Fill out a job requisition form with details like the role, required skills, and contract
                        duration.</p>
                    <p>You can also upload detailed job descriptions.</p>
                </div>


                <div class="text-box">
                    <h3>3. Receive Matched Candidates</h3>

                    <p>Our team uses advanced algorithms and manual reviews to find the best candidates for your needs.
                    </p>
                    <p>Receive shortlisted profiles within a specified timeline.</p>
                </div>

                <div class="text-box">
                    <h3>4. Interview and Hire</h3>

                    <p>Schedule interviews with selected candidates directly through our platform.</p>
                    <p>Finalize your hire and sign contracts through our secure system.</p>
                </div>
                <div class="text-box">
                    <h3>5. Ongoing Support</h3>

                    <p>Get continuous support from our team to ensure a smooth working relationship with your remote
                        employees.</p>

                </div>
                <div class="text-box">
                    <h3>Looking for top talent? <a href="{{route('register')}}" target="_blank" rel="noopener noreferrer">Register Your Company</a></h3>
                </div>

            </div>
        </section>
        <!-- End TNC Section -->


    </x-slot>

</x-guest-layout>
