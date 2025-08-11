<x-guest-layout>

    <x-slot name="body">


        <!-- Candidate Detail Section -->
        <section class="candidate-detail-section">
            <!-- Upper Box -->
            <div class="upper-box ub1-v4">
                <div class="auto-container">
                    <!-- Candidate block Five -->
                    <div class="candidate-block-five at-v5">
                        <div class="inner-box d-block d-lg-flex">
                            <div class="content mb-3 mb-xl-0">
                                <figure><img style="border-radius: 80px; height: 300px; width: 300px" src="{{$information?->image}}" alt=""></figure>
                                <h4 class="name"><a href="#">{{$information?->first_name}}
                                        {{$information?->last_name}}</a></h4>
                                <ul class="candidate-info at-sv5">
                                    <li class="designation">{{$information?->department}}</li>
                                    <li>Location: {{$information?->country}}</li>
                                    {{-- <li><span class="icon dark-color fal fa-circle-dollar"></span> $294 / hour</li>
                                    --}}
                                    {{-- <li><span class="fas fa-star review-color"></span> 4.5 (8 Reviews)</li> --}}
                                </ul>

                                @php
                                $professionalSkillsArray = explode(', ', $information?->professional_skills);
                                @endphp
                                <ul class="post-tags at-sv5">

                                    @foreach ($professionalSkillsArray as $skills)
                                    <li class="mb-2 mb-xl-0"><a href="#"> {{$skills}}</a></li>
                                    @endforeach
                                </ul>

                                {{-- <div class=" mt-3 btn-box d-block d-sm-flex">

                                    <a href="{{$information?->medias?->first()?->cv_upload}}"
                                        class="theme-btn btn-style-three">Download CV <i
                                            class="fal fa-long-arrow-right text-white d-block ml15"></i></a>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="candidate-detail-outer">
                <div class="auto-container">
                    <div class="row">
                        <div class="content-column col-lg-8">
                            <div class="job-detail at-v5 pe-0">
                                <h3 class="fz30 fw500 mb-4">About me</h3>
                                <p class="text">{!!$information?->bio!!}</p>
                                <hr class="opacity-100">
                                <!-- Resume / Education -->
                                <div class="resume-outer">
                                    <div class="upper-title">
                                        <h3 class="fz30 fw500 mb-4">Education</h3>
                                    </div>

                                    @foreach ($information?->educationalExperiences()?->get() as $item)

                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name">E</span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>{{$item?->degree}}</h3>
                                                    <span>{{$item?->school}}</span>
                                                </div>
                                                <div class="edit-box">
                                                    <span class="year">{{$item?->education_start_yr}} -
                                                        {{$item?->education_end_yr}}</span>
                                                </div>
                                            </div>
                                            <div class="text">{{$item?->educational_description}}</div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <hr class="opacity-100">
                                <!-- Resume / Work & Experience -->
                                <div class="resume-outer theme-blue">
                                    <div class="upper-title">
                                        <h3 class="fz30 fw500 mb-4">Work & Experience</h3>
                                    </div>
                                    @foreach ($information?->workExperiences()?->get() as $item)

                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name">W</span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>{{$item?->role}}</h3>
                                                    <span>{{$item?->company_name}}</span>
                                                </div>
                                                <div class="edit-box">
                                                    <span class="year">{{$item?->work_start_yr}} -
                                                        {{$item?->work_end_yr}}</span>
                                                </div>
                                            </div>
                                            <div class="text">{{$item?->job_description}}</div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>


                                <hr class="opacity-100">
                                <!-- Portfolio -->
                                <div class="portfolio-outer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="upper-title">
                                                <h3 class="fz30 fw500 mb-4">Projects</h3>
                                            </div>
                                        </div>
                                        @foreach ($information?->medias()?->get() as $item)
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <figure class="image">
                                                    <a href="{{$item?->media_upload }}" class="lightbox-image"><img
                                                            src="{{ $item?->media_upload }}" alt=""></a>
                                                    <span class="icon flaticon-plus"></span>
                                                </figure>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <!-- Video Box -->
                                <div class="video-outer">
                                    <h3 class="fz30 fw500 mb-4">Introduction Video</h3>
                                    <div class="video-box">

                                        @foreach ($information?->medias()?->where('intro_video',"!=", null)->get() as $item)

                                        {{-- <figure class="image">
                                            <a href="{{$item->intro_video}}" class="play-now"
                                                data-fancybox="gallery" data-caption="">

                                                <img src="{{$item->intro_video}}" alt="">
                                                <i class="icon flaticon-play-button-3" aria-hidden="true"></i>
                                            </a>
                                        </figure> --}}

                                        <video controls autoplay muted loop poster="poster-image.jpg" width="640" height="360">
                                            {{-- <i class="icon flaticon-play-button-3" aria-hidden="true"></i> --}}
                                            <source src="{{$item?->intro_video}}" type="video/mp4">
                                            {{-- <source src="video.ogg" type="video/ogg"> --}}
                                            Your browser does not support the video tag.
                                        </video>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-column col-lg-4">
                            <aside class="sidebar">
                                <div class="sidebar-widget">
                                    <h4 class="widget-title">Information</h4>
                                    <div class="widget-content">
                                        <ul class="job-overview at-sv5">

                                            {{-- @php
                                                use Illuminate\Support\Str;
                                            @endphp --}}
                                            <li>
                                                <i class="icon flaticon-title"></i>
                                                <div class="ml15">
                                                    <h5>Experience Time</h5>
                                                    <span>{{ $information?->experience_yr }} {{ Str::plural('Year', $information?->experience_yr) }}</span>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <i class="icon far fa-mars"></i>
                                                <div class="ml15">
                                                    <h5>Gender</h5>
                                                    <span>{{$information?->gender}}</span>
                                                </div>
                                            </li> --}}

                                            <li>
                                                <i class="icon flaticon-exercise"></i>
                                                <div class="ml15">
                                                    <h5>Qualification</h5>
                                                    <span>{{$information?->educationalExperiences()?->first()?->degree}}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon fal fa-language"></i>
                                                <div class="ml15">
                                                    <h5>Language:</h5>
                                                    <span>{{$information?->languages}}</span>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <i class="icon flaticon-email-3"></i>
                                                <div class="ml15">
                                                    <h5>Email</h5>
                                                    <span>{{$information?->email}}</span>
                                                </div>
                                            </li> --}}
                                            {{-- <li>
                                                <i class="icon flaticon-telephone-1"></i>
                                                <div class="ml15">
                                                    <h5>Phone Number</h5>
                                                    <span>{{$information?->phone}}</span>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    {{-- <div class="d-grid mb15">
                                        <a style="color: black" href="#" class="ud-btn-transparent">Send Message</a>
                                    </div>
                                    <div class="text-center">
                                        <div class="social-link-style1">
                                            <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="p-0 mb40">
                                    <!-- Job Skills -->
                                    <h4 class="widget-title fz18 mb25 fw500">Location</h4>
                                    <div class="widget-content">
                                        <div class="map-outer">
                                            <div class="map-canvas at-sv5" data-zoom="12" data-lat="-37.817085"
                                                data-lng="144.955631" data-type="roadmap" data-hue="#ffc400"
                                                data-title="Envato" data-icon-path="images/icons/contact-map-marker.png"
                                                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="sidebar-widget contact-widget">
                                    <h4 class="widget-title">Book Candidate</h4>
                                    <em>Note we set your email using the email you registered with us.</em>
                                    <div class="widget-content">
                                        <!-- Comment Form -->
                                        <div class="default-form">
                                            <!--Comment Form-->
                                            <form
                                                action="{{route('candidate.engagement.notification', $information?->user_id)}}"
                                                method="POST">
                                                @csrf
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <input type="text" name="company_name" placeholder="Company Name"
                                                            required>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <input type="email" name="company_email" value="{{Auth::user()?->email}}" placeholder="Company Email"
                                                            required readonly>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <textarea class="darma" name="message"
                                                            placeholder="What you want."></textarea>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <button class="theme-btn btn-style-three" type="submit"
                                                            name="submit-form">Book</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-0">
                                    <!-- Job Skills -->
                                    <h4 class="widget-title fz18 mb25 fw500">Professional Skills</h4>
                                    <div class="widget-content">
                                        <div class="job-skills-style1">

                                            @foreach ($professionalSkillsArray as $skills)

                                            <a href="#">{{$skills}}</a>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End candidate Detail Section -->

    </x-slot>

</x-guest-layout>
