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


      <!-- Banner Section-->
    <section class="banner-section -type-15"
    
    style="
        background-image:
            linear-gradient(
                to bottom,
                rgba(0,0,0,0.75),
                rgba(0,0,0,0.35),
                rgba(0,0,0,0.05)
            ),
            url(/onboarding/images/index-15/header/bg.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    "

    style="background-image: url(/onboarding/images/index-15/header/bg.png);">
        <div class="auto-container">
            <div class="cotnent-box">
                <div style="margin: 100px" class="title-box wow fadeInUp" data-wow-delay="300ms">
                    <h2 style="color: #fff;">Let’s Work Together</h2>
                    <div class="text-white">
                        Whether you’re building a team, exploring outsourcing,
                        or joining our talent network — we’re here to help you take the next step.
                    </div>
                    <div class="text-white mt-2">
                        <strong>Made in Africa. Serving the World.</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- End Banner Section-->

      <!-- Contact Section -->
      <section style="background-color: #000" class="contact-section">
        <div class="auto-container">
          <div class="upper-box">


          <div class="contact-helper mb-5">
              <h3 class="mb-3">How can we help?</h3>
              <p class="mb-4">Choose what best applies to you.</p>

              <!-- <div class="row">

                  <div class="col-lg-4 col-md-6 mb-3">
                      <label class="help-option">
                          <input type="radio" name="inquiry_type" value="Hiring Talent">
                          <span>I’m a company looking to hire talent</span>
                      </label>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-3">
                      <label class="help-option">
                          <input type="radio" name="inquiry_type" value="Outsourcing / Managed Teams">
                          <span>I’m exploring outsourcing or managed teams</span>
                      </label>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-3">
                      <label class="help-option">
                          <input type="radio" name="inquiry_type" value="Market Expansion">
                          <span>I want to expand into the African region</span>
                      </label>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-3">
                      <label class="help-option">
                          <input type="radio" name="inquiry_type" value="Join Talent Network">
                          <span>I’m a professional joining the I&amp;M talent network</span>
                      </label>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-3">
                      <label class="help-option">
                          <input type="radio" name="inquiry_type" value="General Inquiry">
                          <span>I have a general inquiry</span>
                      </label>
                  </div>

              </div> -->
          </div>

          <div class="row">
              <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <span class="icon"><i style="color: #E94E1B" class="fa fa-map-marker-alt"></i></span>
                  <h4>Address</h4>
                  <p style="color: #000">
                      33, Windsor Estate,<br>
                      Conservation Road,<br>
                      Lekki, Lagos, Nigeria.
                  </p>
                </div>
              </div>
              <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon"><i style="color: #E94E1B" class="fa fa-phone "></i></span>

                  <h4>Call Us</h4>
                  <p><a href="#" style="color: #000" class="">+234 913 4019 930</a></p>
                </div>
              </div>
              <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span  class="icon"><i style="color: #E94E1B" class="fa fa-message "></i></span>

                  <h4>Email</h4>
                  <p><a style="color: #000" href="mailto:info@iandmlimited.com">info@iandmlimited.com</a></p>
                </div>
              </div>
            </div>
          </div>


          <!-- Contact Form -->
          <div class="contact-form default-form">
            <h3 class="text-white">Leave A Message</h3>
            <!--Contact Form-->
            <form method="post" action="{{ route('contact.mail') }}">
                @csrf

                
                <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <div class="response"></div>
                    </div>

                    <input type="text" name="website" style="display:none">

                    <div class="col-lg-6 col-md-12 col-sm-12 form-group ">
                        <label class="text-white">Your Name</label>
                        <input type="text" name="name" class="username" placeholder="Your Name*" required>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <label class="text-white">Your Email</label>
                        <input type="email" name="email" class="email" placeholder="Your Email*" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label class="text-white">Subject</label>
                        <!-- <input type="text" name="subject" class="subject" placeholder="Subject *" required> -->

                        <select name="subject" id="">
                            <option selected disabled>Select Subject</option>
                            <option value="Hiring Talent">I’m a company looking to hire talent</option>
                            <option value="Outsourcing / Managed Teams">I’m exploring outsourcing or managed teams</option>
                            <option value="Market Expansion">I want to expand into the African region</option>
                            <option value="Join Talent Network">I’m a professional joining the IM talent network</option>
                            <option value="General Inquiry">I have a general inquiry</option>

                        </select>
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>

                    <!-- <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <label>Company Name (Optional)</label>
                        <input type="text" name="company" placeholder="Company name">
                    </div> -->

                    <!-- <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <label>Role / Title (Optional)</label>
                        <input type="text" name="role" placeholder="Your role">
                    </div> -->


                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label class="text-white">Your Message</label>
                        <textarea name="message" placeholder="Write your message..." required></textarea>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <button class="theme-btn btn-style-three" type="submit" id="submit" name="submit-form">Send Message</button>
                    </div>
                </div>
            </form>
          </div>
          <!--End Contact Form -->
        </div>
      </section>
      <!-- Contact Section -->
       
    </x-slot>

</x-guest-layout>
