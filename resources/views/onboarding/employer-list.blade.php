<x-guest-layout>

    <x-slot name="body">

        <section style="background-color: #f6ad3e" class="page-title style-two at-slv7">
            <div class="auto-container">

                <!-- Job Search Form -->
                <div class="row">
                    <div style="margin-top: 100px " class="col-lg-12 ">
                        <div class="text-start mb25">
                            <h2 class="clv7-title">Look through our array of employers</h2>
                            <p class="text">Discover your next career move, freelance gig, or internship</p>
                        </div>
                    </div>
                </div>
                <div class="job-search-form">
                    <form method="GET" action="{{route('onboarding.search.company')}}">

                        @csrf
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <span class="icon flaticon-search-1"></span>
                                <input type="text" name="company_name" placeholder="keywords, or company name">
                            </div>

                            <!-- Form Group -->
                            {{-- <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                                <span class="icon flaticon-map-locator"></span>
                                <input type="text" name="field_name" placeholder="City or postcode">
                            </div> --}}

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                                <span class="icon flaticon-briefcase"></span>
                                <select class="chosen-select" name="department">
                                    <option selected>All Departments</option>
                                    @foreach ($depts as $d)

                                    <option value="{{$d?->name}}">{{$d?->name}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                                <button type="submit" class="theme-btn btn-style-three">Find Employers</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Job Search Form -->


                {{-- <div class="top-filters">
                    <div class="form-group">
                        <select class="chosen-select">
                            <option>Company Size</option>
                            <option>New Jobs</option>
                            <option>Freelance</option>
                            <option>Full Time</option>
                            <option>Internship</option>
                            <option>Part Time</option>
                            <option>Temporary</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="chosen-select">
                            <option>Founded Date</option>
                            <option>New Jobs</option>
                            <option>Freelance</option>
                            <option>Full Time</option>
                            <option>Internship</option>
                            <option>Part Time</option>
                            <option>Temporary</option>
                        </select>
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
                    <div class="content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="ls-outer">
                            <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                            <!-- ls Switcher -->
                            <div class="ls-switcher">
                                <div class="showing-result">
                                    <div class="text">Showing <strong>1-60</strong> of <strong>all</strong> employers
                                    </div>
                                </div>
                                {{-- <div class="sort-by">
                                    <select class="chosen-select">
                                        <option>New Jobs</option>
                                        <option>Freelance</option>
                                        <option>Full Time</option>
                                        <option>Internship</option>
                                        <option>Part Time</option>
                                        <option>Temporary</option>
                                    </select>

                                    <select class="chosen-select">
                                        <option>Show 10</option>
                                        <option>Show 20</option>
                                        <option>Show 30</option>
                                        <option>Show 40</option>
                                        <option>Show 50</option>
                                        <option>Show 60</option>
                                    </select>
                                </div> --}}
                            </div>


                            <div class="row">
                                <!-- Company Block Four -->
                                @if ($companies->isEmpty())



                                @else

                                @foreach ($companies as $company)

                                <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        <span class="featured">Featured</span>
                                        <span class="company-logo"><img style="height: 100px; width: 100px;" src="{{$company?->company_logo}}" alt=""></span>
                                        <h4><a href="#">{{$company?->company_name}}</a></h4>
                                        <ul class="job-info">
                                            <li><span class="icon flaticon-briefcase"></span> {{$company?->company_sector}} sector</li>
                                            <br>
                                            <li><span class="icon flaticon-map-locator"></span> Country: {{$company?->country}}</li>
                                            <li><span class="icon flaticon-clock-3"></span>Joined: {{$company?->created_at->diffForHumans()}}</li>

                                        </ul>
                                        {{-- <div class="job-type">Open Jobs – 2</div> --}}
                                    </div>
                                </div>
                                @endforeach
                                @endif



                            </div>

                            <!-- Pagination -->
                            {{-- <nav class="ls-pagination">
                                <ul>
                                    <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="current-page">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Listing Page Section -->

    </x-slot>

</x-guest-layout>
