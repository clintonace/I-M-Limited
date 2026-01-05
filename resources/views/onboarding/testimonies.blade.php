<x-guest-layout>

    <x-slot name="body">
        
    <!-- Testimonial Section -->
<section class="testimonial-section style-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <h2>Testimonials From Our Customers</h2>
            <div class="text">Great reviews from our customers.</div>
        </div>

        <div class="carousel-outer wow fadeInUp">

            <!-- Testimonial Carousel -->
            <div class="testimonial-carousel-three owl-carousel owl-theme default-dots">

                <!--Testimonial Block -->
                @if ($testimonies->isEmpty())

                <div class="testimonial-block">
                    <div class="inner-box">
                        {{-- <h4 class="title">{{$t?->title}}</h4> --}}
                        <div class="text">No testimonies yet!</div>
                        <div class="info-box">
                            {{-- <div class="thumb"><img src="{{$t?->logo}}" alt="codeBrown"></div> --}}
                            {{-- <h4 class="name">{{$t?->name}}</h4> --}}

                        </div>
                    </div>
                </div>

                @else
                @foreach ($testimonies as $t)

                <div class="testimonial-block">
                    <div class="inner-box">
                        <h4 class="title">{{$t?->title}}</h4>
                        <div class="text">{{$t?->testimony}}</div>
                        <div class="info-box">
                            <div class="thumb"><img style="height: 71px; width: 71px; border-radius:50%;" src="{{$t?->logo}}" alt="codeBrown"></div>
                            <h4 class="name">{{$t?->name}}</h4>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->
    </x-slot>

</x-guest-layout>
