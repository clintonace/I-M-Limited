<x-guest-layout>

    <x-slot name="body">
        <!-- Info Section -->
        <div class="login-section">

        <div class="image-layerr"
                    style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        overflow: hidden;
                        z-index: 0;
                    ">

                    <video
                        autoplay
                        muted
                        loop
                        playsinline
                        style="
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        ">
                        <source src="/onboarding/video/vid7.mp4" type="video/mp4">
                    </video>

                    <!-- Optional dark overlay -->
                    <div
                        style="
                            position: absolute;
                            inset: 0;
                            background: rgba(0,0,0,0.4);
                        ">
                    </div>
        </div>
            <!-- <div class="image-layer" style="background-image: url(/onboarding/images/background/pixelcut-export.jpeg);"></div> -->
            <div class="outer-box">
                <!-- Login Form -->
                <div class="login-form default-form">
                    <div class="form-inner">
                        <h3 class="text-white">Login</h3>
                        <!--Login Form-->
                        <form method="post" action="{{route('login')}}">

                            @csrf
                            <div class="form-group">
                                <label class="text-white">Email</label>
                                <input type="email" name="email" placeholder="Enter email" required>
                            </div>

                            <div class="form-group">
                                <label class="text-white">Password</label>
                                <input id="password-field" type="password" name="password" value=""
                                    placeholder="Password">
                            </div>

                            <div class="form-group">
                                <div class="field-outer">
                                    <div class="input-group checkboxes square">
                                        <input type="checkbox" name="remember-me" value="" id="remember">
                                        <label for="remember" class="remember"><span class="custom-checkbox"></span>
                                            Remember me</label>
                                    </div>
                                    <a href="#" class="pwd text-white">Forgot password?</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-two fade-top text-white" type="submit" name="log-in">Log In</button>
                            </div>
                        </form>

                        <div class="bottom-box">
                            <div class="text text-white">Don't have an account? <a href="{{route('register')}}" class="text-white">Signup</a></div>
                            {{-- <div class="divider"><span>or</span></div>
                            <div class="btn-box row">
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two facebook-btn"><i
                                            class="fab fa-facebook-f"></i> Log In via Facebook</a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two google-btn"><i
                                            class="fab fa-google"></i> Log In via Gmail</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--End Login Form -->
            </div>
        </div>
        <!-- End Info Section -->
    </x-slot>
</x-guest-layout>
