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

        <div style="margin-top: 100px;" class="main">
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

                       
                       
                       
                    <div style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
                         <a href="{{route('ai-project')}}" class="button w-button">
                            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Go Back
                        </a>
                        <a href="{{route('download.txt', $results?->first()->batch)}}" class="button w-button">Download Txt Datei batch</a>
                        <!-- <a href="{{route('download.pdf', $results?->first()->batch)}}" class="button w-button">Download Pdf Datei Batch</a> -->


                        <h5 style="margin-top: 50px" data-w-id="2750b49e-f3a5-41af-730f-5a77f295728e" style="opacity:1"
                                class="heading-title">Converted Result(s)</h5>


                        <div style="margin-top:50px; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">


                            <div style="width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch;">
                                <table style="min-width: 600px; width: 100%; border-collapse: separate; border-spacing: 0 10px; font-family: 'Segoe UI', Arial, sans-serif; font-size: 15px; color: #333;">
                                    <thead>
                                        <tr style="background-color: #000000ff; color: #fff;">
                                            <th style="padding: 14px 12px; text-align: left; border-top-left-radius: 10px;">No.</th>
                                            <th style="padding: 14px 12px; text-align: left;">Datei Type</th>
                                            <th style="padding: 14px 12px; text-align: left;">Original Name</th>
                                            <th style="padding: 14px 12px; text-align: left; border-top-right-radius: 10px;">Aktionen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($results as $r)
                                        <tr style="background-color: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                                            <td style="padding: 14px 12px; border-top-left-radius: 10px;">{{ $loop->iteration }}.</td>
                                            <td style="padding: 14px 12px;">Text Datei</td>
                                            <td style="padding: 14px 12px; font-weight: 500; color: #111827;">{{ $r?->original_name }}</td>
                                            <td style="padding: 14px 12px; border-top-right-radius: 10px; min-width: 180px;">
                                                
                                                <!-- @if(!is_null($r->txt))
                                                    <div style="display: flex; align-items: center; gap: 15px; flex-wrap: wrap;">
                                                        <a href="{{ route('ai.see.converted', $r?->txt) }}" 
                                                        target="_blank" 
                                                        title="View Text Rollo.txt"
                                                        style="text-decoration: none; color: #000000ff; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                                                            Rollo.txt
                                                            <i class="fas fa-eye" style="font-size: 18px; color: #000000ff;"></i>
                                                        </a>

                                                        <a href="{{ route('download.file', $r?->txt) }}" 
                                                        title="Download Text"
                                                        style="text-decoration: none; color: #6d6d6d; display: inline-flex; align-items: center; gap: 6px;">
                                                            <i class="fas fa-download" style="font-size: 18px;"></i>
                                                        </a>
                                                    </div>
                                                @endif


                                                @if(!is_null($r->txtb))
                                                <div style="display: flex; align-items: center; gap: 15px; flex-wrap: wrap; margin-top: 8px;">
                                                    <a href="{{ route('ai.see.converted', $r->txtb) }}" 
                                                    target="_blank" 
                                                    title="View Text Raffstore.txt"
                                                    style="text-decoration: none; color: #000000ff; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                                                        Raffstore.txt
                                                        <i class="fas fa-eye" style="font-size: 18px; color: #000000ff;"></i>
                                                    </a>

                                                    <a href="{{ route('download.file', $r?->txtb) }}" 
                                                    title="Download Text"
                                                    style="text-decoration: none; color: #6d6d6d; display: inline-flex; align-items: center; gap: 6px;">
                                                        <i class="fas fa-download" style="font-size: 18px;"></i>
                                                    </a>
                                                </div>
                                                @endif -->
                                                @php
                                                    $textFiles = [
                                                        'txt' => 'Rollo.txt',
                                                        'txtb' => 'Raffstore.txt',
                                                        'txtc' => 'Rollo_schallschutz.txt',
                                                        'txtd' => 'Raffstore_schallschutz.txt',
                                                    ];
                                                @endphp

                                                @foreach($textFiles as $field => $label)
                                                    @if(!is_null($r->$field) && !empty($r->$field))
                                                        <div style="display: flex; align-items: center; gap: 15px; flex-wrap: wrap; margin-top: {{ $loop->first ? '0' : '8px' }};">
                                                            <a href="{{ route('ai.see.converted', $r->$field) }}" 
                                                            target="_blank" 
                                                            title="View Text {{ $label }}"
                                                            style="text-decoration: none; color: #000000ff; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                                                                {{ $label }}
                                                                <i class="fas fa-eye" style="font-size: 18px; color: #000000ff;"></i>
                                                            </a>

                                                            <a href="{{ route('download.file', $r->$field) }}" 
                                                            title="Download Text"
                                                            style="text-decoration: none; color: #6d6d6d; display: inline-flex; align-items: center; gap: 6px;">
                                                                <i class="fas fa-download" style="font-size: 18px;"></i>
                                                            </a>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>



                        </div>
                     </div>
                    </div>
                </div>
            </section>
        </div>
    </x-slot>

</x-ai-project.layout-component>
