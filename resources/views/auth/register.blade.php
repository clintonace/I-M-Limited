<x-guest-layout>

    <x-slot name="body">
        <!-- Info Section -->
        <div class="login-section">
            <!-- <div class="image-layerr" style="background-image: url(/onboarding/images/background/shake.jpg);">
                
            </div> -->

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

            <div class="outer-box">
                <!-- Login Form -->
                <div class="login-form default-form">


                    <div class="form-inner">
                        <h3 class='text-white'>Create Account</h3>

                        @if ($errors->any())
                        <div class="p-4 mb-4 bg-red-100 rounded-lg text-red-700">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li class='text-white'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Form Selector Buttons -->
                        <div class="form-group">
                            <div class="btn-box row">
                                <div class="col-lg-6 col-md-12">
                                    <button
                                            id="candidateBtn"
                                            class="theme-btn btn-style-two {{ $type === 'candidate' ? 'active' : '' }}">
                                            <i class="la la-user"></i> Candidate
                                    </button>
                                    <!-- <button id="candidateBtn" class="theme-btn btn-style-three active"><i class="la la-user"></i> Candidate</button> -->
                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <button
                                        id="employerBtn"
                                        class="theme-btn btn-style-two {{ $type === 'employer' ? 'active' : '' }}">
                                        <i class="la la-briefcase"></i> Employer
                                    </button>
                                    <!-- <button id="employerBtn" class="theme-btn btn-style-three"><i class="la la-briefcase"></i> Employer</button> -->
                                </div>
                            </div>
                        </div>

                        <!-- Candidate Form -->
                        <div id="candidateForm" class="form-section">
                            <form method="post" action="{{route('clint_reg')}}">
                                @csrf
                                <div class="form-group">
                                    <label class='text-white'>Name</label>
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <input type="hidden" name="code" value="3188">

                                <div class="form-group">
                                    <label class='text-white'>Email Address</label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <input type="hidden" name="who" value="candidate">

                                <div class="form-group">
                                    <label class='text-white'>Password</label>
                                    <input id="password-field" type="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class='text-white'>Confirm Password</label>
                                    <input id="password-field" type="password" name="password_confirmation" value="" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label class='text-white'>Bot check</label>
                                    <select name="rob" id="">
                                        <option selected disabled>Please choose yes. </option>
                                        <option value="clinton">Yes</option>
                                        <option value="notclinton">No</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-two fade-top text-white" type="submit" name="Register">Register</button>
                                </div>
                            </form>
                        </div>

                        <!-- Employer Form -->
                        <div id="employerForm" class="form-section" style="display: none;">
                            <form method="post" action="{{route('clint_reg')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="text-white">Company Name</label>
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <input type="hidden" name="code" value="3189">
                                <div class="form-group">
                                    <label class="text-white">Company Email</label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <input type="hidden" name="who" value="employer">
                                <div class="form-group">
                                    <label class="text-white">Password</label>
                                    <input id="password-field" type="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Confirm Password</label>
                                    <input id="password-field" type="password" name="password_confirmation" value="" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Bot check</label>
                                    <select name="rob" id="">
                                        <option selected disabled>Please choose yes. </option>
                                        <option value="clinton">Yes</option>
                                        <option value="notclinton">No</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-two fade-top text-white" type="submit" name="Register">Register</button>
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
