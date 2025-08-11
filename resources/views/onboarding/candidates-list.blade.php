<x-guest-layout>

    <x-slot name="body">

         <!--Page Title-->
    <section style="background-color: #f6ad3e" class="page-title style-two at-slv7">
        <div class="auto-container">

          <!-- Job Search Form -->
          <div class="row">
            <div style="margin-top: 100px " class="col-lg-12 ">
              <div class="text-start mb25">
                <h2 class="clv7-title">Hire people for your business</h2>
                <p class="text">Discover your next career move, freelance gig, or internship</p>
              </div>
            </div>
          </div>
          <div class="job-search-form">
            <form method="GET" action="{{route('onboarding.search.candidates')}}">
                @csrf
              <div class="row">
                <!-- Form Group -->
                {{-- <div class="form-group col-lg-4">
                  <span class="icon flaticon-search-1"></span>
                  <input type="text" name="name" placeholder="Candidate name, keywords">
                </div> --}}

                {{-- <!-- Form Group -->
                <div class="form-group col-lg-3 location">
                  <span class="icon flaticon-map-locator"></span>
                  <input type="text" id="" name="country" placeholder="Nigeria">
                </div> --}}

                <!-- Form Group -->
                <div class="form-group col-lg-6 location">
                  <span class="icon flaticon-briefcase"></span>
                  <select class="chosen-select" name="department">
                        <option selected>All Department</option>
                        @foreach ($depts as $dp)
                        <option value="{{$dp?->name}}">{{$dp?->name}}</option>
                        @endforeach
                  </select>
                </div>

                <!-- Form Group -->
                <div class="form-group col-lg-2 text-right">
                  <button type="submit" class="theme-btn btn-style-three">Search</button>
                </div>
              </div>
            </form>
          </div>
          <!-- Job Search Form -->
          {{-- <div class="row">
            <div class="col-xl-7">
                <!-- ls Switcher -->
                <div class="ls-switcher at-slv7-main-list">
                  <div class="showing-result">
                    <div class="top-filters justify-content-start">
                      <div class="form-group ms-0 mb-2 mb-md-0">
                        <select class="chosen-select  ">
                          <option class="text-warning">Date Posted</option>
                          <option>New Jobs</option>
                          <option>Freelance</option>
                          <option>Full Time</option>
                          <option>Internship</option>
                          <option>Part Time</option>
                          <option>Temporary</option>
                        </select>
                      </div>
                      <div class="form-group ms-0 mb-2 mb-md-0">
                        <select class="chosen-select ">
                          <option class="text-warning">Experience</option>
                          <option>New Jobs</option>
                          <option>Freelance</option>
                          <option>Full Time</option>
                          <option>Internship</option>
                          <option>Part Time</option>
                          <option>Temporary</option>
                        </select>
                      </div>
                      <div class="form-group ms-0 mb-2 mb-md-0">
                        <select class="chosen-select ">
                          <option class="text-warning">Level</option>
                          <option>New Jobs</option>
                          <option>Freelance</option>
                          <option>Full Time</option>
                          <option>Internship</option>
                          <option>Part Time</option>
                          <option>Temporary</option>
                        </select>
                      </div>
                      <div class="form-group ms-0 mb-2 mb-md-0">
                        <select class="chosen-select ">
                          <option class="text-warning">Gender</option>
                          <option>Male</option>
                          <option>Female</option>
                          <option>other</option>
                        </select>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
          </div> --}}
        </div>
      </section>
      <!--End Page Title-->

      <!-- Listing Section -->
      <section class="ls-section">
        <div class="auto-container">
          <div class="filters-backdrop"></div>

          <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-12">
              <div class="ls-outer">
                <!-- ls Switcher -->
                <div class="ls-switcher at-slv7">
                  <div class="showing-result">
                    <div class="text">Showing <strong>1-60</strong> of <strong>all</strong> candidates</div>
                  </div>
                  {{-- <div class="sort-by">
                    <select class="chosen-select">
                      <option>Newest</option>
                      <option>New Jobs</option>
                      <option>Freelance</option>
                      <option>Full Time</option>
                      <option>Internship</option>
                      <option>Part Time</option>
                      <option>Temporary</option>
                    </select>
                  </div> --}}
                </div>

                <div class="row">
                  <!-- Candidate block Four -->

                  @foreach ($infos as $info)
                  <div class="candidate-block-four at-v7 col-lg-4 col-md-6">
                    <div class="inner-box text-start">
                      <div class="d-flex align-items-center">
                        <span class="thumb mx-0"><img src="{{$info?->image}}" alt=""></span>
                        <div class="ml15">
                          <h3 class="name"><a href="#">{{$info?->first_name}} {{$info?->last_name}}</a></h3>
                          <span class="cat">{{$info?->department}}</span>
                        </div>
                      </div>
                      <ul class="job-info justify-content-start at-clv7 mt-2">
                        <li class="ms-0"><span class="icon fal fa-location-dot"></span>{{$info?->country}}</li>

                      </ul>
                      <p class="text">Hi, I am {{$info?->first_name}} {{$info?->last_name}}. Click below to view my profile. Place a booking on me for interviews and we can work together.</p>
                      <ul class="post-tags justify-content-start mt20">
                        <li class="ms-0"><a href="#">{{$info?->department}}</a></li>
                        {{-- <li><a href="#">Enginer</a></li>
                        <li><a href="#">Expert</a></li> --}}
                      </ul>
                      <div class="d-grid">
                        <div class="d-grid">
                        <a href="{{route('onboarding.candidate.details', $info?->email)}}" class="ud-btn-border-theme text-warning">View Profile <i class="fal fa-long-arrow-right"></i></a>
                      </div>
                      </div>
                    </div>
                  </div>
                  @endforeach


                </div>

                <!-- Listing Show More -->
                {{-- <div class="ls-show-more">
                  <p>Showing 36 of 497 Jobs</p>
                  <div class="bar"><span class="bar-inner" style="width: 20%"></span></div>
                  <button class="show-more">Show More</button>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Listing Page Section -->

    </x-slot>

</x-guest-layout>
