<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12 sm:col-span-10 sm:col-start-2">


                        {{-- Media info section --}}
                        <div style="margin-top: 40px; margin-bottom: 40px"
                            class="flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group active after:hidden before:hidden after:lg:block before:lg:block first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20 last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20 last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20 first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20">
                            <div class="flex items-center">
                                <div
                                    class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                                    <div class="flex h-10 w-10 items-center justify-center">
                                        4
                                    </div>
                                </div>
                                <div
                                    class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                                    Media display Setup
                                </div>
                            </div>
                        </div>
                        <form action="{{route('candidate.media.update')}}" enctype="multipart/form-data"
                            method="POST">


                            @csrf
                            <div id="media-container">


                                @if ($errors->any())
                                <div class="p-4 mb-4 bg-red-100 rounded-lg text-red-700">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div class=" p-7 border border-gray-300 rounded-md mb-4">
                                    <div
                                        class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Upload CV</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    Upload your CV here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center md:flex-row">


                                            <input data-tw-merge="" type="file"  name="cv_upload" class="disabled:bg-slate-100 disabled:cursor-not-allowed
                                                    dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent
                                                    [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed
                                                    [&[readonly]]:dark:bg-darkmode-800/50
                                                    [&[readonly]]:dark:border-transparent transition duration-200
                                                    ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md
                                                    placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary
                                                    focus:ring-opacity-20 focus:border-primary focus:border-opacity-40
                                                    dark:bg-darkmode-800 dark:border-transparent
                                                    dark:focus:ring-slate-700 dark:focus:ring-opacity-50
                                                    dark:placeholder:text-slate-500/80 [&[type='file' ]]:border
                                                    file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0
                                                    file:border-r-[1px] file:border-slate-100/10 file:text-sm
                                                    file:font-semibold file:bg-slate-100 file:text-slate-500/70
                                                    hover:file:bg-200 group-[.form-inline]:flex-1
                                                    group-[.input-group]:rounded-none
                                                    group-[.input-group]:[&:not(:first-child)]:border-l-transparent
                                                    group-[.input-group]:first:rounded-l
                                                    group-[.input-group]:last:rounded-r group-[.input-group]:z-10
                                                    first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10
                                                    first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px
                                                    last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md
                                                    [&:not(:first-child):not(:last-child)]:-mt-px
                                                    [&:not(:first-child):not(:last-child)]:rounded-none
                                                    [&:not(:first-child):not(:last-child)]:md:-ml-px
                                                    [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>

                                    </div>
                                    <div
                                        class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Upload Intro Video</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    Upload Intro Video of less than 5mb. Ensure to be centered while shooting the video, be professional.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center md:flex-row">


                                            <input data-tw-merge="" type="file" accept="video/*" name="intro_video" class="disabled:bg-slate-100 disabled:cursor-not-allowed
                                                    dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent
                                                    [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed
                                                    [&[readonly]]:dark:bg-darkmode-800/50
                                                    [&[readonly]]:dark:border-transparent transition duration-200
                                                    ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md
                                                    placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary
                                                    focus:ring-opacity-20 focus:border-primary focus:border-opacity-40
                                                    dark:bg-darkmode-800 dark:border-transparent
                                                    dark:focus:ring-slate-700 dark:focus:ring-opacity-50
                                                    dark:placeholder:text-slate-500/80 [&[type='file' ]]:border
                                                    file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0
                                                    file:border-r-[1px] file:border-slate-100/10 file:text-sm
                                                    file:font-semibold file:bg-slate-100 file:text-slate-500/70
                                                    hover:file:bg-200 group-[.form-inline]:flex-1
                                                    group-[.input-group]:rounded-none
                                                    group-[.input-group]:[&:not(:first-child)]:border-l-transparent
                                                    group-[.input-group]:first:rounded-l
                                                    group-[.input-group]:last:rounded-r group-[.input-group]:z-10
                                                    first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10
                                                    first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px
                                                    last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md
                                                    [&:not(:first-child):not(:last-child)]:-mt-px
                                                    [&:not(:first-child):not(:last-child)]:rounded-none
                                                    [&:not(:first-child):not(:last-child)]:md:-ml-px
                                                    [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>

                                    </div>
                                </div>

                                <div class="media p-7 border border-gray-300 rounded-md mb-4">
                                    <!-- Your content -->



                                    <div
                                        class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Title</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    Enter the title of the file you wish to upload.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center md:flex-row">
                                            <input data-tw-merge="" type="text" name="title[]"
                                                placeholder="Enter the title of the file you wish to upload."
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                                        </div>

                                    </div>


                                    <div
                                        class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Upload Recent Projects</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Optional
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    You can upload a picture of your recent projects for users to
                                                    see.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center md:flex-row">
                                            <input data-tw-merge="" type="file" accept="image/*" name="media_upload[]"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed
                                                    dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent
                                                    [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed
                                                    [&[readonly]]:dark:bg-darkmode-800/50
                                                    [&[readonly]]:dark:border-transparent transition duration-200
                                                    ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md
                                                    placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary
                                                    focus:ring-opacity-20 focus:border-primary focus:border-opacity-40
                                                    dark:bg-darkmode-800 dark:border-transparent
                                                    dark:focus:ring-slate-700 dark:focus:ring-opacity-50
                                                    dark:placeholder:text-slate-500/80 [&[type='file' ]]:border
                                                    file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0
                                                    file:border-r-[1px] file:border-slate-100/10 file:text-sm
                                                    file:font-semibold file:bg-slate-100 file:text-slate-500/70
                                                    hover:file:bg-200 group-[.form-inline]:flex-1
                                                    group-[.input-group]:rounded-none
                                                    group-[.input-group]:[&:not(:first-child)]:border-l-transparent
                                                    group-[.input-group]:first:rounded-l
                                                    group-[.input-group]:last:rounded-r group-[.input-group]:z-10
                                                    first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10
                                                    first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px
                                                    last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md
                                                    [&:not(:first-child):not(:last-child)]:-mt-px
                                                    [&:not(:first-child):not(:last-child)]:rounded-none
                                                    [&:not(:first-child):not(:last-child)]:md:-ml-px
                                                    [&:not(:first-child):not(:last-child)]:md:mt-0">


                                        </div>

                                        <!-- Close Button -->
                                        <button style="color: red"
                                            class="mt-4 text-red-500 hover:text-red-700 remove-media" type="button">
                                            Remove
                                        </button>

                                    </div>

                                </div>



                            </div>

                            <!-- Add Button -->
                            <div>
                                <button id="add-media" class="mt-4 text-blue-500 hover:text-blue-700" type="button">
                                    + Add Another Media To display
                                </button>
                            </div>

                            <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                <a href="{{ route('candidate.work.view') }}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto">

                                    Back
                                </a>
                                <button data-tw-merge="" type="submit"
                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                        data-tw-merge="" data-lucide="pocket"
                                        class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                    Submit</button>





                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>
