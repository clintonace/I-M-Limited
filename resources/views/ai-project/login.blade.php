<x-ai-project.layout-component>

    <x-slot name="content">

        <main class="main">
            <section data-w-id="2aeafc65-933b-92a8-5f59-145ba1dbf2c4" class="section hero">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="hero-content-block">
                        {{-- <h1 data-w-id="05ebf71f-3feb-936f-86fe-1a0186ccd847" style="opacity:0" class="hero-heading">
                            Login(translate)</h1> --}}
                        {{-- <p data-w-id="d981cc41-6be7-25bc-6a78-20947d5b9d9c" style="opacity:0" class="hero-text">
                            Experience Unparalleled Speed and Accuracy in File Conversion.</p> --}}
                        <div data-w-id="d0d5dbb4-1084-0781-2ee1-aad2c13c988c" style="opacity:0" class="search-block">

                            <div style="max-width: 400px; margin: 50px auto; border: 1px solid #000000; border-radius: 10px; padding: 30px; font-family: Arial, sans-serif; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
                                <h2 style="text-align: center; margin-bottom: 25px; color: #333;">
                                    <img src="/onboarding/IandM-no-white-bg-logo-.png"
                                            style="height: 50px; width: 50px; background-color: #FFFFFFB7; border-radius:50%; padding: 10px"
                                     alt="">
                                </h2>

                                <form action="{{route('ai-login-action')}}" method="POST">

                                    @csrf

                                    @if ($errors->any())
                                        <div style="margin-bottom: 20px; color: red; font-size: 14px;">
                                            <ul style="list-style-type: none; padding: 0;">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <!-- Email -->
                                    <div style="margin-bottom: 20px;">
                                        <label for="email" style="display: block; text-align: left; margin-bottom: 8px; font-size: 14px; color: #000000;">Email Address</label>
                                        <input type="email" id="email" name="email" required
                                            style="width: 100%; padding: 10px 12px; border: 1px solid #ffffff; border-radius: 5px; font-size: 14px;">
                                    </div>

                                    <!-- Password -->
                                    <div style="margin-bottom: 25px;">
                                        <label for="password" style="display: block; text-align: left; margin-bottom: 8px; font-size: 14px; color: #000000;">Password</label>
                                        <input type="password" id="password" name="password" required
                                            style="width: 100%; padding: 10px 12px; border: 1px solid #ffffff; border-radius: 5px; font-size: 14px;">
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit"
                                        style="width: 100%; padding: 12px; background-color: #000000FF; color: white; border: none; border-radius: 5px; font-size: 15px; cursor: pointer;">
                                        Login
                                    </button>
                                </form>
                            </div>


                        </div>
                        {{-- <div class="hero-content-bottom">
                            <div data-w-id="f8499955-2e94-0907-f9d2-20f70b7f6465" style="opacity:0"
                                class="hero-inner-text">
                                <div class="innter-text">Need inspiration? Try these:</div>
                                <div class="sub-title">The future with flying cars and robotic life</div>
                            </div>
                            <div data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ea" style="opacity:0"
                                class="reviews-holder">
                                <div class="reviewer-image-group"><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ed" alt="Avatar"
                                        src="/ai-project/images/reviewer-1.avif" loading="lazy"
                                        class="reviewer-avatar" /><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ee" alt="Avatar"
                                        src="/ai-project/images/reviewer-2.avif" loading="lazy"
                                        class="reviewer-avatar" /><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ef" alt="Avatar"
                                        src="/ai-project/images/reviewer-3.avif" loading="lazy"
                                        class="reviewer-avatar" /><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358f0" alt="Avatar"
                                        src="/ai-project/images/reviewer-4.avif" loading="lazy"
                                        class="reviewer-avatar" /></div>
                                <div class="vertical-line"></div>
                                <div class="review-content"><img loading="lazy" src="/ai-project/images/review-star.svg"
                                        alt="Star Icon" />
                                    <div class="hero-review-text">Rated 5.0/5.0 by users</div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="hero-thumbnail-block"><img src="/ai-project/images/hero-left-two.avif" loading="lazy"
                        alt="Hero Image" class="hero-image bottom-left" /><img
                        src="/ai-project/images/hero-left-one.avif" loading="lazy" alt="Hero Image"
                        class="hero-image top-left" /><img src="/ai-project/images/hero-right-one.avif" loading="lazy"
                        alt="Hero Image" class="hero-image right-top" /><img
                        src="/ai-project/images/hero-right-two.avif" loading="lazy" alt="Hero Image"
                        class="hero-image right-bottom" /></div> --}}
            </section>
        </main>
    </x-slot>

</x-ai-project.layout-component>
