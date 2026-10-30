{{-- <x-guest-layout>


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

        <!-- Success / Info Message -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Error Message -->
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
    </div>
</div>

                <!--End Login Form -->
            </div>
        </div>
        <!-- End Info Section -->
    </x-slot>

</x-guest-layout> --}}



<x-new.layout-component>
    <x-slot name="body">

        <main>

            <section class="ui-main-section ui-cta-login">

                <div data-w-id="b9ff7d8e-3357-e943-2a1f-73b06a66319f" style="width:50%" class="ui-hero-animation-div">
                </div>
                <div data-w-id="22626249-b95c-1fb7-8e33-4c7e52b5e13c" style="width:50%"
                    class="ui-hero-animation-div ui-right">
                </div>

                <div style="padding-top:100px" class="w-layout-blockcontainer ui-container w-container">
                    <div class="ui-cta-wrapper">
                        <div class="ui-common-div">
                            <div data-w-id="54e15092-f59e-a7ab-09a2-0ea5bc4a1a5d" class="ui-small-paragraph"> Verify email
                            </div>
                            <h1 data-w-id="54e15092-f59e-a7ab-09a2-0ea5bc4a1a5f" class="ui-cta-heading">Thanks for signing up! Enter the code we sent to finish registering.</h1>
                            <p data-w-id="54e15092-f59e-a7ab-09a2-0ea5bc4a1a61"
                                class="ui-small-paragraph ui-cta-paragraph">
                                I&M Limited: Redefining how global organizations discover, build, and work with
                                exceptional talent across borders..</p>
                        </div>

                    </div>
                </div>
            </section>

            <section id="contact" class="ui-main-section">
                <div class="w-layout-blockcontainer ui-container w-container">
                    <div class="w-layout-grid ui-contact-grid">
                        <div class="ui-contact-div">
                            <div class="ui-contact-wrapper-div">
                                <div data-w-id="0618073a-11e3-4c98-ced6-4d6913b06b90" style="opacity:0"
                                    class="ui-common-div">
                                    <div class="ui-small-paragraph ui-orange-color-text">Welcome!</div>
                                    <h2 class="ui-contact-heading">VERIFY EMAIL <i class="fa fa-arrow-right"></i></h2>
                                </div>
                            </div>
                        </div>
                        <div class="ui-contact-div">
                            <div data-w-id="1345066b-4c5a-d231-9ea4-b9133ae6e27c" style="opacity:0"
                                class="ui-contact-form-wrapper">
                                <div class="ui-contact-form-block w-form">

                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form id="wf-form-Contact-Form" action="{{ route('verification.code.verify') }}" name="wf-form-Contact-Form" data-name="Contact Form"
                                        method="POST" class="ui-form" data-wf-page-id="693310ec12ccb07495272b21"
                                        data-wf-element-id="a02f20df-07e7-5b07-3e5a-fea7f7633cff">
                                        <div class="w-layout-grid ui-form-grid">

                                            @csrf

                                            <input
                                                class="ui-input w-node-b0aedaf5-67c9-7632-abdb-f20367399d2b-95272b21 w-input"
                                                type="text" name="code" maxlength="5" inputmode="numeric" pattern="[0-9]{5}"
                                                placeholder="Enter 5-digit code" required autofocus
                                                style="text-align:center; letter-spacing:8px; font-size:22px;" />
                                            <x-input-error :messages="$errors->all()" class="mt-2" />

                                        </div>
                                        <div class="ui-small-paragraph">Enter the 5-digit verification code we sent to your email address.
                                        </div>

                                        <button type="submit"
                                            style="width: 100%; height: 48px; margin-top: 24px; border: none; border-radius: 8px; background: #cf4c00; color: #000; font-size: 13px; font-weight: 700; letter-spacing: 1px; cursor: pointer;">
                                            Verify Email <span style="margin-left: 8px;">&#8594;</span>
                                        </button>

                                    </form>

                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf

                                        <button type="submit"
                                            style="width: 100%; height: 48px; margin-top: 16px; border: 1px solid #cf4c00; border-radius: 8px; background: transparent; color: #cf4c00; font-size: 13px; font-weight: 700; letter-spacing: 1px; cursor: pointer;">
                                            Resend Verification Code
                                        </button>
                                    </form>

                                    <form method="POST" action="{{ route('logout') }}" class="ui-small-paragraph"
                                        style="text-align:center; margin-top:20px;">
                                        @csrf

                                        Wrong account?
                                        <button type="submit"
                                            style="background:none; border:none; padding:0; color:#cf4c00; cursor:pointer;">
                                            Logout
                                        </button>
                                    </form>

                                    <div class="ui-success-message w-form-done">
                                        <div class="ui-paragraph">Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </x-slot>

</x-new.layout-component>
