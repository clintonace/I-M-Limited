<x-ai-project.layout-component>

    <x-slot name="content">


        <!-- {{-- <div class="breadcrumb">
            <div class="w-layout-blockcontainer container w-container">
                <div class="breadcrumb-content">
                    <div data-w-id="a689ed34-c533-8427-1144-dbf4c73d5020" class="breadcrumb-nav"><a href="/"
                            class="link">Home</a>
                        <div class="breadcrumb-nav-divider">/</div>
                        <div class="breadcrumb-nav-text">Work-Area</div>
                    </div>
                    <h1 data-w-id="a689ed34-c533-8427-1144-dbf4c73d5027" class="page-title">Let’s Build You files Together
                    </h1>
                </div>
            </div>
        </div> --}} -->
        <div class="main">
            <section class="section benefits">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="benefits-block">
                        <div class="heading-block is-benefits">
                            <h2 data-w-id="2750b49e-f3a5-41af-730f-5a77f295728e" style="opacity:1"
                                class="heading-title">Datei zum Konvertieren hochladen</h2>

                                <p style="color: #ffffff">Sie können Ihre Datei unten <strong style="color: #000000FF">ansehen</strong> oder <strong>herunterladen</strong>:</p>

                                {{-- <p data-w-id="2750b49e-f3a5-41af-730f-5a77f295728e" style="opacity:1"
                                class="heading-title">You can either <span style="color: #ffffff">view</span> or <span style="color: #16a34a">download</span> you results below.</p> --}}

                                <!-- <h5 style="margin-top: 10px" data-w-id="2750b49e-f3a5-41af-730f-5a77f295728e" style="opacity:1"
                                class="heading-title">Orignale Datei : original_name</h5> -->
                            {{-- <p data-w-id="f042040d-e630-37fb-d44b-001c6e4f062d" style="opacity:1" class="section-text">
                               </p> --}}
                        </div>

                        {{-- <div class="w-layout-grid benefit-grid">
                            <div data-w-id="c8856594-cce7-d6ad-05bb-d9856dd5958b" style="opacity:1"
                                class="benefit-card">
                                <div class="benefit-icon">
                                    <!-- <a href="/storage/converted/{{$ai->pdf}}" target="_blank" rel="noopener noreferrer">
                                        <i class=""></i>
                                    </a> -->
                                    </div>
                                <h3 class="benefit-title">Datei hochladen</h3>
                                <p>Klicken Sie auf die Datei, um diese zu Prüfen.</p>
                            </div>
                            <div data-w-id="c8856594-cce7-d6ad-05bb-d9856dd5958b" style="opacity:0"
                                class="benefit-card">
                                <div class="benefit-icon"><img src="/ai-project/images/choose-us-icon-1.svg" loading="lazy"
                                        alt="Innovative" /></div>
                                <h3 class="benefit-title">Innovative</h3>
                                <p>Make a tangible impact with your work. At AI Gen, you’re not just another employee.
                                </p>
                            </div>
                            <div data-w-id="2cd8e49f-9ee0-348e-e690-4eca1fa7ad4c" style="opacity:1"
                                class="benefit-card">
                                <div class="benefit-icon"><img src="/ai-project/images/efficiency-icon.svg" loading="lazy"
                                        alt="Career Growth" /></div>
                                <h3 class="benefit-title">Konvertierte Datei</h3>
                                <p>Klicken Sie auf die Datei, um diese zu Prüfen.</p>
                            </div>
                        </div> --}}

                        @foreach ($results as $r)

                        <h5 style="margin-top: 10px" data-w-id="2750b49e-f3a5-41af-730f-5a77f295728e" style="opacity:1"
                                class="heading-title">Orignale Datei : {{$r?->original_name}}</h5>

                        <div style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">

                                {{-- PDF Section --}}
                                <div style="background-color: #FFFFFFFF; border: 1px solid #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                    <h3 style="font-size: 18px; font-weight: bold; text-align: center; margin-bottom: 20px;">PDF datei</h3>
                                    <div style="display: flex; justify-content: center; gap: 30px;">
                                        <a href="/storage/converted/{{$r?->pdf}}" target="_blank" title="View PDF">
                                            <i class="fas fa-eye" style="font-size: 22px; color: #000000FF;"></i>
                                        </a>
                                        <a href="{{route('download.file', $r?->pdf)}}" title="Download PDF">
                                            <i class="fas fa-download" style="font-size: 22px; color: #6D6D6DFF;"></i>
                                        </a>
                                    </div>      
                                </div>

                                {{-- TXT Section --}}
                                <div style=" background-color: #FFFFFFFF; border: 1px solid #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                    <h3 style="font-size: 18px; font-weight: bold; text-align: center; margin-bottom: 20px;">Text datei</h3>
                                    <div style="display: flex; justify-content: center; gap: 30px;">
                                        <a href="/storage/converted/{{$r?->txt}}" target="_blank" title="View Text">
                                            <i class="fas fa-eye" style="font-size: 22px; color: #000000FF;"></i>
                                        </a>
                                        <a href="{route('download.file', $r?->txt)}}" title="Download Text">
                                            <i class="fas fa-download" style="font-size: 22px; color: #6D6D6DFF;"></i>
                                        </a>
                                    </div>
                                </div>

                                {{-- Original PDF Section --}}
                                <div style="background-color: #FFFFFFFF; border: 1px solid #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                    <h3 style="font-size: 18px; font-weight: bold; text-align: center; margin-bottom: 20px;">originale PDF</h3>
                                    <div style="display: flex; justify-content: center; gap: 30px;">
                                        <a href="/storage/converted/{{$r?->base_file}}" target="_blank" title="View Original">
                                            <i class="fas fa-eye" style="font-size: 22px; color: #000000FF;"></i>
                                        </a>
                                        {{-- <a href="" title="Download Original">
                                            <i class="fas fa-download" style="font-size: 22px; color: #6D6D6DFF;"></i>
                                        </a> --}}
                                    </div>
                                </div>

                            </div>
                        </div>

                        @endforeach

                        


                    </div>
                </div>
            </section>
        </div>

    </x-slot>

</x-ai-project.layout-component>
