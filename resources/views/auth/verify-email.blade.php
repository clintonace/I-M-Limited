<x-guest-layout>


    <x-slot name="body">
        <!-- Info Section -->
        <div class="login-section">
            <div class="image-layer" style="background-image: url(/onboarding/images/background/pixelcut-export.jpeg);">
            </div>
            <div class="outer-box">
                <!-- Login Form -->
                <div class="login-form default-form">
                    <div class="form-inner">
                        <h3>Email verification</h3>
                        <!--Login Form-->

                        <div>
                            <p>
                                Thanks for signing up! Before getting started, could you verify your email address by
                                clicking on the link we just emailed to you? If you didn\'t receive the email, we will
                                gladly send you another.
                            </p>
                        </div>

                        <br>
                        <br>
                        

                        @if (session('status') == 'verification-link-sent')
                        <div>
                            <p>
                                A new verification link has been sent to the email address you provided during registration.
                            </p>
                        </div>
                        @endif

                        <br>
                        <br>

                        <div class="form-group">
                                <div class="field-outer">

                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf

                                         <button style="color: white;" class="theme-btn btn-style-two w-full fade-top">Logout</button>
                                    </form>
                                </div>
                        </div>

                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <button style="color: white;" class="theme-btn btn-style-two w-full fade-top">
                                    {{ __('Resend Verification Email') }}
                                </button>
                            </div>
                        </form>

                        <div class="form-group">
                            <div class="field-outer">

                                <a href="{{ route('login') }}" style="color: white;" class="theme-btn btn-style-two w-full fade-top">Login</a>
                                 <p class="p-3 text-center text-sm text-gray-600">
                                    Please login after verification to access your dashboard.
                                </p>
                            </div>                          
                        </div>
                    </div>
                </div>
                <!--End Login Form -->
            </div>
        </div>
        <!-- End Info Section -->
    </x-slot>

</x-guest-layout>

