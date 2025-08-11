<!-- Main Header-->
<header class="main-header header-style-two">
    <div class="auto-container">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="#"><img alt="" title="Our Logo"></a></div>
                    <div class="round-logo-container">

                        <img height="20px;" width="20px" src="/onboarding/IandM-white-logo.png" alt="">
                    </div>
                </div>

                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">
                        {{-- <li class="current">
                            <span>Home</span>
                        </li> --}}
                        {{-- <li class="current"> --}}

                        <li>
                            <a href="{{route('welcome')}}">
                                <span>Home</span>
                            </a>


                        </li>

                        <li>
                            <span>
                                <a style="color: white" href="{{route('portfolio.colors')}}">
                                    Portfolio
                                </a>
                            </span>

                        </li>

                        {{-- <li class="dropdown has-mega-menu" id="has-mega-menu">
                            <span>Find Jobs</span>
                            <div class="mega-menu">
                                <div class="mega-menu-bar row">
                                    <div class="column col-lg-3 col-md-3 col-sm-12">
                                        <h3>Jobs Listing</h3>
                                        <ul>
                                            <li><a href="{{route('job.list')}}">Engineering</a></li>
                                            <li><a href="{{route('job.list')}}">Health</a></li>
                                            <li><a href="{{route('job.list')}}">Construction</a></li>
                                            <li><a href="{{route('job.list')}}">IT</a></li>
                                            <li><a href="{{route('job.list')}}">Robotics</a></li>
                                            <li><a href="{{route('job.list')}}">Cyber Security</a></li>

                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <span>Companies</span>
                            <ul>
                                <li>
                                    <span><a href="{{route('employer.list')}}">Alcon Nig</a></span>
                                    <span><a href="{{route('employer.list')}}">NLNG</a></span>
                                    <span><a href="{{route('employer.list')}}">Dencove Ltd.</a></span>
                                    <span><a href="{{route('employer.list')}}">Acer Inc.</a></span>
                                    <span><a href="{{route('employer.list')}}">FFSD</a></span>
                                </li>
                                <li><a href="{{route('employer.list')}}">Employers List</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <span>Candidates</span>
                            <ul>
                                <li>
                                    <span>
                                        <a href="{{route('candidates.list')}}">Engineering</a>
                                    </span>
                                    <span>
                                        <a href="{{route('candidates.list')}}">Writers</a>
                                    </span>
                                    <span>
                                        <a href="{{route('candidates.list')}}">IT</a>
                                    </span>
                                    <span>
                                        <a href="{{route('candidates.list')}}">Project Managers</a>
                                    </span>
                                    <span>
                                        <a href="{{route('candidates.list')}}">Producers</a>
                                    </span>


                                </li>

                                <li><a href="{{route('candidates.list')}}">Candidates List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('contact.us')}}">
                                <span>Contact us</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{route('about.us')}}">
                                <span>Service</span>
                            </a>


                        </li> --}}



                        {{-- <li><a href="{{route('candidates.list')}}">Candidates List</a></li> --}}


                        <li>
                            <a href="{{route('candidates.list')}}">
                                <span>Candidate List</span>
                            </a>


                        </li>
                        {{-- <li>
                            <a href="{{route('employer.list')}}">
                                <span>Company List</span>
                            </a>


                        </li> --}}

                        {{-- <li>
                            <a href="{{route('contact.us')}}">
                                <span>Sustainability</span>
                            </a>

                        </li> --}}

                        {{-- <li>
                            <a href="{{route('about.us')}}">
                                <span>About us</span>
                            </a>


                        </li> --}}

                        <!-- Only for Mobile View -->
                        <li class="mm-add-listing">
                            <a href="{{route('login')}}" class="theme-btn btn-style-three">Login</a>

                        </li>
                    </ul>
                </nav>
                <!-- Main Menu End-->
            </div>

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="btn-box">

                    <a href="{{route('login')}}" class="theme-btn btn-style-six ">Login</a>
                    <a href="{{route('register')}}" class="theme-btn btn-style-six">Register</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo round-logo-container"><a href="#"><img src="/onboarding/IandM-white-logo.png" alt=""
                    title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="#" class="call-modal"><span><i class="fa fa-user"></i></span></a>
                </div>

                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span> <i
                            class="fa fa-bars"></i></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->
