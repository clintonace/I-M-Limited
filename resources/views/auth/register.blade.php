<x-guest-layout>

    <x-slot name="body">
        <!-- Info Section -->
        <div class="login-section">
            <div class="image-layerr" style="background-image: url(/onboarding/images/background/Black-men.jpg);"></div>
            <div class="outer-box">
                <!-- Login Form -->
                <div class="login-form default-form">


                    <div class="form-inner">
                        <h3>Create Account</h3>

                        @if ($errors->any())
                        <div class="p-4 mb-4 bg-red-100 rounded-lg text-red-700">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Form Selector Buttons -->
                        <div class="form-group">
                            <div class="btn-box row">
                                <div class="col-lg-6 col-md-12">
                                    <button id="candidateBtn" class="theme-btn btn-style-three active"><i class="la la-user"></i> Candidate</button>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <button id="employerBtn" class="theme-btn btn-style-three"><i class="la la-briefcase"></i> Employer</button>
                                </div>
                            </div>
                        </div>

                        <!-- Candidate Form -->
                        <div id="candidateForm" class="form-section">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <input type="hidden" name="who" value="candidate">

                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password-field" type="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-field" type="password" name="password_confirmation" value="" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="Register">Register</button>
                                </div>
                            </form>
                        </div>

                        <!-- Employer Form -->
                        <div id="employerForm" class="form-section" style="display: none;">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <input type="hidden" name="code" value="3189">
                                <div class="form-group">
                                    <label>Company Email</label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <input type="hidden" name="who" value="employer">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password-field" type="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-field" type="password" name="password_confirmation" value="" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="Register">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Login Form -->
            </div>
        </div>
        <!-- End Info Section -->

    </x-slot>

</x-guest-layout>
