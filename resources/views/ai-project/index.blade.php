<x-ai-project.layout-component>

    <x-slot name="content">

        <main class="main">
            <section data-w-id="2aeafc65-933b-92a8-5f59-145ba1dbf2c4" class="section hero">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="hero-content-block">
                        <h1 data-w-id="05ebf71f-3feb-936f-86fe-1a0186ccd847" style="opacity:0" class="hero-heading">
                            Datei zum Konvertieren hochladen</h1>
                        {{-- <p data-w-id="d981cc41-6be7-25bc-6a78-20947d5b9d9c" style="opacity:0" class="hero-text">
                            Experience Unparalleled Speed and Accuracy in File Conversion.</p> --}}
                        <div data-w-id="d0d5dbb4-1084-0781-2ee1-aad2c13c988c" style="opacity:0" class="search-block">
                            <form enctype="multipart/form-data" action="{{route('ai.upload.file')}}" method="POST"
                                class="hero-search w-form">

                                @if ($errors->any())
                                <div class="error-messages">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div id="dropArea"
                                onclick="document.getElementById('fileInput').click()"
                                ondragover="event.preventDefault(); this.style.backgroundColor='#f0f0f0'"
                                ondragleave="this.style.backgroundColor='#fff'"
                                ondrop="handleDrop(event)"
                                style="border: 2px dashed #999; border-radius: 10px; padding: 40px; text-align: center; cursor: pointer; background-color: #fff;">

                                <input id="fileInput"
                                    name="files[]"
                                    multiple
                                    type="file"
                                    hidden
                                    onchange="handleFiles(this.files)" />

                                <div id="fileInfo" class="file-info" style="margin-bottom: 10px;"></div>

                                <div style="font-size: 40px;">📁</div>
                                <span style="font-size: 18px;">Ziehen Sie eine Datei per Drag & Drop an eine beliebige Stelle hier oder klicken Sie zum Hochladen</span>

                                <br>

                            <span style="color: red">
                                Dieses Tool kann Dateien im Wert von bis zu 10 MB verarbeiten.</span>
                            </div>


                                @csrf

                                <button
                                        style="margin-top: 20px; padding: 12px 24px; font-size: 16px; color: white; background-color: #000000FF; border: none; border-radius: 6px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                        Konvertieren
                                </button>

                            </form>
                        </div>
                        <div class="hero-content-bottom">
                            <div data-w-id="f8499955-2e94-0907-f9d2-20f70b7f6465" style="opacity:0"
                                class="hero-inner-text">
                                <div class="innter-text">
                                    Fügen Sie Dateien hinzu, die den Spezifikationen des Konvertierungstools entsprechen:</div>
                                <div class="sub-title">
                                    Dieses Tool liest und konvertiert Arbeitsdateien in bearbeitbare Blätter und PDFs zur Verwendung.</div>
                            </div>

                        </div>
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



<script>
    function handleDrop(event) {
      event.preventDefault();
      const files = event.dataTransfer.files;
      document.getElementById('fileInput').files = files;
      handleFiles(files);
    }

    function handleFiles(files) {
      const fileInfo = document.getElementById('fileInfo');
      fileInfo.innerHTML = "";
      for (let i = 0; i < files.length; i++) {
        fileInfo.innerHTML += `<div style="margin-top: 10px;">📄 ${files[i].name}</div>`;
      }
    }
  </script>
    </x-slot>

</x-ai-project.layout-component>
