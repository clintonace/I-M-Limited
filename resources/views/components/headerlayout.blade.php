<!-- Main Header-->
<header

style="
                background-image:
                    linear-gradient(
                        to bottom,
                        rgba(0,0,0,0.75),
                        rgba(0,0,0,0.35),
                        rgba(0,0,0,0.00)
                    );
               
                background-repeat: no-repeat;
                background-size: cover;
            " 

class="main-header header-style-two">
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

                    {{-- 

                        <li>
                            <span>
                                <a style="color: white" href="{{route('portfolio.colors')}}">
                                    Portfolio
                                </a>
                            </span>

                        </li>

                
                
                        <li class="dropdown has-mega-menu" id="has-mega-menu">
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


                        </li> 
                        
                --}}



                        {{-- <li><a href="{{route('candidates.list')}}">Candidates List</a></li> --}}

                        <li>
                            <a href="{{route('about.us')}}">
                                <span>About us</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('for.company')}}">
                                <span>For Companies</span>
                            </a>
                        </li> 

                        <li>
                            <a href="{{route('for.talent')}}">
                                <span>For Talents</span>
                            </a>
                        </li>
                            
                        <li>
                            <a href="#">
                                <span>Case Studies / Success Stories </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span>Blog</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{route('contact.us')}}">
                                <span>Contact us</span>
                            </a>
                        </li>
                        {{--<li>
                            <a href="{{route('testimony')}}">
                                <span>Testimonials</span>
                            </a>
                        </li>--}}


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

    <!-- Wavy Bottom Divider -->
<div
    style="
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        line-height: 0;
        overflow: hidden;
        z-index: 5;
    "
>
    <svg
        viewBox="0 0 1440 80"
        preserveAspectRatio="none"
        style="width:100%; height:15px; display:block;"
    >
        <path
            d="M0,40 C120,60 240,20 360,30 480,40 600,70 720,60 840,50 960,20 1080,30 1200,40 1320,55 1440,40"
            fill="none"
            stroke="#fe681c"
            stroke-width="6"
        >
            <!-- Wave motion -->
            <!-- <animateTransform
                attributeName="transform"
                type="translate"
                from="1200 0"
                to="0 0"
                dur="6s"
                repeatCount="indefinite" -->

                <animateTransform
                    attributeName="transform"
                    type="translate"
                    values="0 0; 1200 120; 0 0"
                    keyTimes="0; 0.5; 1"
                    dur="8s"
                    repeatCount="indefinite"
                    calcMode="spline"
                    keySplines="
                        0.42 0 0.58 1;
                        0.42 0 0.58 1
                    "

            />
        </path>
    </svg>
</div>


</header>
<!--End Main Header -->
