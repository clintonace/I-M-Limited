<!-- Main Header-->
<header

style="
                background-color: #0a0a0a;
                background-repeat: no-repeat;
                background-size: cover;
            " 

class="main-header header-style-two">
    <div class="auto-container">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <!-- <div class="logo-box"> -->

                <div>
                   
                    <!-- <div class="logo"><a href="{{route('welcome')}}"><img alt="" title="Our Logo"></a></div> -->
                        <div class="round-logo-container">

                            <a href="{{route('welcome')}}">
                                <img height="20px;" width="20px" src="/onboarding/images/logo.png" alt="">
                            </a>
                        </div>
                </div>

                <nav  class="nav main-menu">
                    <ul  class="navigation" id="navbar">
                       

                        <li  class="{{ request()->routeIs('welcome') ? 'current' : '' }}">
                            <a href="{{route('welcome')}}">
                                <span>Home</span>
                            </a>
                        </li>

                        <li  class="{{request()->routeIs('about.us') ? 'current' : ''}}">
                            <a href="{{route('about.us')}}">
                                <span>About</span>
                            </a>
                        </li>

                        <li class="{{request()->routeIs('for.company') ? 'current' : ''}}">
                            <a href="{{route('for.company')}}">
                                <span>Companies</span>
                            </a>
                        </li> 

                        <li class="{{request()->routeIs('for.talent') ? 'current' : ''}}">
                            <a href="{{route('for.talent')}}">
                                <span>Talents</span>
                            </a>
                        </li>
                            
                        <li class="#">
                            <a href="#">
                                <span>Resources</span>
                            </a>
                        </li>
                       
                        <li class="{{request()->routeIs('contact.us') ? 'current' : ''}}">
                            <a href="{{route('contact.us')}}">
                                <span>Contact</span>
                            </a>
                        </li>
                      
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

                    <a href="{{route('login')}}" class="theme-btn btn-style-six ">LOG IN</a>
                    <a href="{{route('register')}}" class="theme-btn btn-style-six">REGISTER</a>
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
            stroke="#E94E1B"
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
