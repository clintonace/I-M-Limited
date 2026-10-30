{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
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
                            <div data-w-id="54e15092-f59e-a7ab-09a2-0ea5bc4a1a5d" class="ui-small-paragraph"> Reset password
                            </div>
                            <h1 data-w-id="54e15092-f59e-a7ab-09a2-0ea5bc4a1a5f" class="ui-cta-heading">Welcome back! Choose a new password to get logged in.</h1>
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
                                    <h2 class="ui-contact-heading">RESET PASSWORD <i class="fa fa-arrow-right"></i></h2>
                                </div>
                            </div>
                        </div>
                        <div class="ui-contact-div">
                            <div data-w-id="1345066b-4c5a-d231-9ea4-b9133ae6e27c" style="opacity:0"
                                class="ui-contact-form-wrapper">
                                <div class="ui-contact-form-block w-form">

                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form id="wf-form-Contact-Form" action="{{ route('password.store') }}" name="wf-form-Contact-Form" data-name="Contact Form"
                                        method="POST" class="ui-form" data-wf-page-id="693310ec12ccb07495272b21"
                                        data-wf-element-id="a02f20df-07e7-5b07-3e5a-fea7f7633cff">
                                        <div class="w-layout-grid ui-form-grid">

                                            @csrf

                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                            <input
                                                class="ui-input w-node-b0aedaf5-67c9-7632-abdb-f20367399d2b-95272b21 w-input"
                                                name="email" placeholder="Enter email" type="email"
                                                value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                            <input
                                                class="ui-input w-node-b0aedaf5-67c9-7632-abdb-f20367399d2b-95272b21 w-input"
                                                name="password" placeholder="New password" type="password"
                                                required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                            <input
                                                class="ui-input w-node-b0aedaf5-67c9-7632-abdb-f20367399d2b-95272b21 w-input"
                                                name="password_confirmation" placeholder="Confirm new password" type="password"
                                                required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                        </div>

                                        <button type="submit"
                                            style="width: 100%; height: 48px; margin-top: 24px; border: none; border-radius: 8px; background: #cf4c00; color: #000; font-size: 13px; font-weight: 700; letter-spacing: 1px; cursor: pointer;">
                                            Reset Password <span style="margin-left: 8px;">&#8594;</span>
                                        </button>

                                        <div class="ui-small-paragraph" style="text-align:center; margin-top:20px;">
                                            Remember your password?
                                            <a href="{{ route('login') }}"
                                                style="color:#cf4c00; text-decoration:none;">
                                                Login
                                            </a>
                                        </div>

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
