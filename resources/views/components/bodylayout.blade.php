<!-- Banner Section-->
<section class="banner-section-two">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInUp">
                    <div class="title-box">
                        <h6 id="typingText"></h6>
                        <div class="text text-white">Find Candidates, Employment & Career Opportunities</div>
                    </div>

                    <!-- Job Search Form -->
                    <div class="job-search-form">
                        <form action="{{route('onboarding.search.candidates')}}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-7 col-md-12 col-sm-12">
                                    <span class="icon flaticon-search-1"></span>
                                    <input type="text" name="department" placeholder="Department of candidate">
                                </div>
                                <!-- Form Group -->

                                <!-- Form Group -->
                                <div class="form-group col-lg-4 col-md-12 col-sm-12 text-left">
                                    <button type="submit" class="theme-btn btn-style-two"><span class="text-white">Find
                                            Candidates by department</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Job Search Form -->

                    {{-- <input type="color"> --}}
                    <!-- Popular Search -->
                    <div class="popular-searches">
                        <span class="title">Popular Searches : </span>
                        <a href="#">Designer</a>,
                        <a href="#">Developer</a>,
                        <a href="#">Web</a>,
                        <a href="#">IOS</a>,
                        <a href="#">PHP</a>,
                        <a href="#">Senior</a>,
                        <a href="#">Engineer</a>,
                    </div>
                    <!-- End Popular Search -->

                    <div class="bottom-box">
                        <div class="count-employers">
                            <span class="title">10k+ Candidates</span>
                            <img src="/onboarding/images/resource/multi-peoples.png" alt="">
                        </div>
                        <a href="#" class="upload-cv"><span class="icon flaticon-file"></span> Upload your CV</a>
                    </div>
                </div>
            </div>

            <div class="image-column col-lg-4 col-md-12">
                <div class="image-box">
                    <figure class="main-image anm" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2"><img
                            src="/onboarding/images/index-14/images/2.png" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Section-->

<!-- Work Section -->
<section class="layout-pt-120 layout-pb-120">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>How It Works</h2>
            <div class="text">Streamline your hiring or job search journey with our simple and efficient process tailored to your needs.</div>
        </div>

        <div class="row grid-base pt-50 wow fadeInUp">

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4">
                    <div class="icon-wrap">
                        <span class="icon icon-drawing"></span>
                    </div>

                    <h5 class="title">Register With Us</h5>
                    <p class="text">Sign up to access a global network of talented professionals and employers.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4">
                    <div class="icon-wrap">
                        <span class="icon icon-process"></span>
                    </div>

                    <h5 class="title">Create Your Profile</h5>
                    <p class="text">Showcase your skills, experience, or company needs to stand out to the right audience.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4">
                    <div class="icon-wrap">
                        <span class="icon icon-task"></span>
                    </div>

                    <h5 class="title">Upload Your Resume</h5>
                    <p class="text">Upload your resume or job details to simplify connections with the perfect candidates or roles.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="work-block -type-4">
                    <div class="icon-wrap">
                        <span class="icon icon-one-finger-click"></span>
                    </div>

                    <h5 class="title">Now Take a Rest</h5>
                    <p class="text">Leave the rest to us! Sit back as we match talent and opportunities seamlessly.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Work Section -->

<!-- Job Categories -->
<section class="job-categories border-bottom-0 pt-0">
    <div class="auto-container">
        <div class="d-flex align-items-center justify-content-between wow fadeInUp">
            <div class="sec-title">
                <h2>Popular Candidates Sector</h2>
                <div class="text">2025 Candidates live - 200 added today.</div>
            </div>
            <a href="{{route('sectors.list')}}" class="text ud-btn2">View All Sectors<i class="fal fa-long-arrow-right"></i></a>
        </div>
        <div class="row wow fadeInUp">
            @if ($department->isEmpty())

            <!-- Category Block -->
            <div class="category-block-two at-home22 col-xl-3 col-sm-6">
                <div class="inner-box text-start">
                    <div class="content justify-content-start d-block">

                        <p class="text">No Sector added yet!</p>
                    </div>
                </div>
            </div>
            @else

            @foreach ($department->take(4) as $d)

            <!-- Category Block -->
            <div class="category-block-two at-home22 col-xl-3 col-sm-6">
                <div class="inner-box text-start">
                    <div class="content justify-content-start d-block">
                        <span class="icon flaticon-money justify-content-start-1"></span>

                        <h4><a href="#">{{$d->name}}</a></h4>

                    </div>
                </div>
            </div>
            @endforeach

            @endif

        </div>
    </div>
</section>
<!-- End Job Categories -->

<!-- Job Section -->
<section class="job-section-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Featured Companies</h2>
            <div class="text-white">Know your worth and find the candidates that qualify to work for you.</div>
        </div>

        <div class="row wow fadeInUp">
            <!-- Job Block-two -->

            @if ($companies->isEmpty())


            <div class="job-block-two col-lg-12">
                <div class="inner-box">
                    <div class="content">

                        <h4><a href="#">No Company Yet !</a></h4>

                    </div>

                </div>
            </div>

            @else

            @foreach ($companies as $c)

            <div class="job-block-two col-lg-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img style="height: 20px; width: 20px;" src="{{$c?->company_logo}}"
                                alt=""></span>
                        <h4><a href="#">{{$c?->company_name}}</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> {{$c?->company_sector}}</li>
                            <li><span class="icon flaticon-map-locator"></span> Country: {{$c?->country}}</li>
                            <li><span class="icon flaticon-clock-3"></span>Joined: {{$c?->created_at->diffForHumans()}}</li>

                        </ul>
                    </div>

                </div>
            </div>
            @endforeach
            @endif

        </div>
        <div class="btn-box">
            <a href="{{route('employer.list')}}" class="theme-btn btn-style-three bg-blue"><span class="btn-title">Load More Listing</span></a>
        </div>
    </div>
</section>
<!-- End Job Section -->

<!-- Registeration Banners -->
<section class="layout-pt-60 layout-pb-60">
    <div class="auto-container">
        <div class="row wow fadeInUp">
            <!-- Banner Style One -->
            <div class="banner-style-home22 at-home22 mb30 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <h3 class="title">Employers</h3>
                        <p class="text">Discover top-tier talent tailored <br class="d-none d-lg-block"> to your business needs. <br class="d-none d-lg-block"> Post your job for free and connect with skilled <br class="d-none d-lg-block"> professionals ready to drive your success. </p>
                        <a href="{{route('register')}}" class="theme-btn btn-style-three bdrs12">Post Your Job For Free <i
                                class="fal fa-long-arrow-right ms-3"></i></a>
                    </div>
                    <figure class="image d-none d-xl-block"><img src="/onboarding/images/index-22/home22-banner-1.png"
                            alt="">
                    </figure>
                </div>
            </div>

            <!-- Banner Style Two -->
            <div class="banner-style-home22 at-home22 mb30 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <h3 class="title">Candidate</h3>
                        <p class="text">Make the next step in your career.<br class="d-none d-lg-block">  Upload your CV and get matched with exciting <br class="d-none d-lg-block"> opportunities at leading companies worldwide.</p>
                        <a href="{{route('register')}}" class="theme-btn btn-style-three bdrs12">Upload Your CV <i
                                class="fal fa-long-arrow-right ms-3"></i></a>
                    </div>
                    <figure class="image d-none d-xl-block"><img src="/onboarding/images/index-22/home22-banner-2.png"
                            alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Registeration Banners -->

<!-- Candidates Section -->
<section class="candidates-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Featured Candidates</h2>
            <div class="text">Meet top-tier professionals actively seeking new opportunities. Handpicked candidates with proven field expertise, ready to drive your business forward.</div>
        </div>



        <div class="carousel-outer wow fadeInUp">
            <div class="candidates-carousel owl-carousel owl-theme default-dots">
                <!-- Candidate Block -->
                @foreach ($infos as $info)
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure><img style="border-radius: 10px; height: 200px; width: 200px" src="{{$info?->image}}"
                                alt="{{$info?->image}}"></figure>
                        <h4 class="name">{{$info?->first_name}} {{$info?->last_name}}</h4>
                        <span class="designation">{{$info?->department}}</span>
                        <div class="location"><i class="flaticon-map-locator"></i> {{$info?->country}}</div>
                        <a href="{{route('onboarding.candidate.details', $info?->email)}}"
                            class="theme-btn btn-style-three"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>
</section>
<!-- End Candidates Section -->

<!-- Testimonial Section -->
<section class="testimonial-section style-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <h2>Testimonials From Our Customers</h2>
            <div class="text">Great reviews from our customers.</div>
        </div>

        <div class="carousel-outer wow fadeInUp">

            <!-- Testimonial Carousel -->
            <div class="testimonial-carousel-three owl-carousel owl-theme default-dots">

                <!--Testimonial Block -->
                @if ($testimonies->isEmpty())

                <div class="testimonial-block">
                    <div class="inner-box">
                        {{-- <h4 class="title">{{$t?->title}}</h4> --}}
                        <div class="text">No testimonies yet!</div>
                        <div class="info-box">
                            {{-- <div class="thumb"><img src="{{$t?->logo}}" alt="codeBrown"></div> --}}
                            {{-- <h4 class="name">{{$t?->name}}</h4> --}}

                        </div>
                    </div>
                </div>

                @else
                @foreach ($testimonies as $t)

                <div class="testimonial-block">
                    <div class="inner-box">
                        <h4 class="title">{{$t?->title}}</h4>
                        <div class="text">{{$t?->testimony}}</div>
                        <div class="info-box">
                            <div class="thumb"><img style="height: 71px; width: 71px; border-radius:50%;" src="{{$t?->logo}}" alt="codeBrown"></div>
                            <h4 class="name">{{$t?->name}}</h4>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->


<!-- Call To Action Two -->
<section class="call-to-action-two" style="background-color:black;">
    <div class="auto-container wow fadeInUp">
        <div class="sec-title light text-center">
            <h2>Your Dream Jobs Are Waiting</h2>
            <div class="text text-white">Over 1 million interactions, 50,000 success stories Make yours now.</div>
        </div>

        <div class="btn-box">
            {{-- <a href="{{route('candidates.list')}}" class="theme-btn btn-style-three">Search Candidate</a> --}}
            <a href="{{route('candidates.list')}}" class="theme-btn btn-style-three">Request For a Candidate</a>
        </div>
    </div>
</section>
<!-- End Call To Action -->

<!-- Call To Action Three -->
<section class="call-to-action-three">
    <div class="auto-container">
        <div class="outer-box">
            <div class="sec-title">
                <h2>Let employers find you</h2>
                <div class="text">Advertise your Portfolio to millions of monthly users and be among 15.8 million search in our
                    database.</div>
            </div>

            <div class="btn-box">
                <a href="{{route('candidates.list')}}" class="theme-btn btn-style-two bg-black"><span class="text-white">Search Employees</span></a>
            </div>
        </div>
    </div>
</section>
<!-- End Call To Action -->
