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
        <h3>Email Verification</h3>

        <div>
            <p>
                Thanks for signing up! Please enter the <strong>5-digit verification code</strong>
                we sent to your email address to complete your registration.
            </p>
        </div>

        <br>

        {{-- Success / Info Message --}}
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <br>

        <!-- Verification Code Form -->
        <form method="POST" action="{{ route('verification.code.verify') }}">
            @csrf

            <div class="form-group">
                <div class="field-outer">
                    <input
                        type="text"
                        name="code"
                        maxlength="5"
                        inputmode="numeric"
                        pattern="[0-9]{5}"
                        placeholder="Enter 5-digit code"
                        required
                        class="text-center"
                        style="letter-spacing: 8px; font-size: 22px;"
                    >
                </div>
            </div>

            <!-- <div class="form-group">
                <button style="color: white;"
                        class="theme-btn btn-style-two w-full fade-top">
                    Verify Email
                </button>
            </div> -->

            <button type="submit" name="log-in"
                style="display:inline-block;
                        background-color:#E94E1B;
                        color:black;
                        font-weight:700;
                        padding:15px 35px;
                        border-radius:40px;
                        text-decoration:none;">
                    Verify Email
            </button>
        </form>

        <br>

        <!-- Resend Code -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <!-- <button style="color: white;"
                        class="theme-btn btn-style-two w-full fade-top">
                    Resend Verification Code
                </button> -->
                <button type="submit" name="log-in"
                    style="display:inline-block;
                            background-color:#E94E1B;
                            color:black;
                            font-weight:700;
                            padding:15px 35px;
                            border-radius:40px;
                            text-decoration:none;">
                        Resend Verification Code
                </button>
            </div>
        </form>

        <br>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <!-- <div class="form-group">
                <button style="color: white;"
                        class="theme-btn btn-style-two w-full fade-top">
                    Logout
                </button>
            </div> -->

            <button type="submit" name="log-in"
                style="display:inline-block;
                        background-color:#E94E1B;
                        color:black;
                        font-weight:700;
                        padding:15px 35px;
                        border-radius:40px;
                        text-decoration:none;">
                    Logout
            </button>
        </form>

        <br>

        <!-- <div class="text-center">
            <p class="text-sm text-gray-600">
                Please verify your email before logging in to access your dashboard.
            </p>
            <a href="{{ route('login') }}" style="color: white;"
               class="theme-btn btn-style-two w-full fade-top">
                Login
            </a>
        </div> -->
    </div>
</div>

                <!--End Login Form -->
            </div>
        </div>
        <!-- End Info Section -->
    </x-slot>

</x-guest-layout>

