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
                                    @foreach ($department as $d)

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
                                    <div class="text">Showing <strong>1-{{$department->count()}}</strong> of <strong>all</strong> Sectors 
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


                            <section class="job-categories border-bottom-0 pt-0">
                                <div class="auto-container">
                                    <div class="d-flex align-items-center justify-content-between wow fadeInUp">
                                        <div class="sec-title">
                                            <h2>All Sector Featured</h2>
                                            <div class="text">2025 Sectors updated - over 200 added today.</div>
                                        </div>
                                        {{-- <a href="{{route('sectors.list')}}" class="text ud-btn2">View All Sectors<i class="fal fa-long-arrow-right"></i></a> --}}
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

                                        @foreach ($department as $d)

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
