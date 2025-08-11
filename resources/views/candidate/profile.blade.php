<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <div class="box box--stacked flex flex-col p-1.5">
                            <div
                                class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                                <div
                                    class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]">
                                </div>
                                <div class="absolute inset-x-0 top-0 mx-auto mt-24 h-32 w-32">
                                    <div
                                        class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                                        <img src="{{$user?->info?->image}}" alt="codeBrown">
                                    </div>
                                    @if ($user?->info?->is_active == 1)

                                    <div
                                        class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                                    </div>

                                    @else

                                    <div
                                        class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-danger">
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
                                <div class="flex items-center justify-center text-xl font-medium">
                                    {{$user?->info?->first_name}} {{$user?->info?->last_name}}
                                    <i data-tw-merge="" data-lucide="badge-check"
                                        class="stroke-[1] w-5 h-5 ml-2 fill-blue-500/30 text-blue-500"></i>
                                </div>
                                <div
                                    class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
                                    <div class="flex items-center text-slate-500">
                                        <i data-tw-merge="" data-lucide="briefcase"
                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                        {{$user?->info?->department}}
                                    </div>
                                    <div class="flex items-center text-slate-500">
                                        <i data-tw-merge="" data-lucide="mountain-snow"
                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                        <a href="#">{{$user?->info?->country ? $user?->info?->country : "Not added
                                            yet"}}</a>
                                    </div>
                                    <div class="flex items-center text-slate-500">
                                        <i data-tw-merge="" data-lucide="signal"
                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                        {{$user?->info?->phone}}
                                    </div>
                                    <div class="text-right flex items-center text-slate-500">

                                        <a href="{{route('candidate.edit.profile.view', $user?->info?->id)}}"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                                <ul data-tw-merge="" role="tablist"
                                    class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">
                                    <li id="example-1-tab" data-tw-merge="" role="presentation"
                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                        <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Profile</button>
                                    </li>
                                </ul>

                            </div>

                            <div class="tab-content">
                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1"
                                    role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7">


                                        <div class="col-span-12 xl:col-span-8">
                                            <div class="flex flex-col gap-y-7">
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div
                                                        class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-large">
                                                        Work Experience
                                                    </div>
                                                    @foreach ($works as $work)

                                                    <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                                        <button data-tw-toggle="modal" data-tw-target="#work-{{$work->id}}"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                                                data-tw-merge="" data-lucide="edit"
                                                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                            Edit</button>
                                                    </div>
                                                    <div class="-my-3">
                                                        <div
                                                            class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        {{$work?->company_name ? $work?->company_name :
                                                                        "Not Added Yet."}}
                                                                    </a>

                                                                    <div class="container mt-4 mb-4">

                                                                        <span class="text-success">
                                                                            <h3>Job Description:</h3>
                                                                        </span>

                                                                        <br>

                                                                        <span
                                                                            class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                                            <span class="-mt-px truncate">
                                                                                {{ $work?->job_description ?
                                                                                $work?->job_description : "Not Added
                                                                                Yet."}}
                                                                            </span>
                                                                        </span>
                                                                    </div>

                                                                    <div
                                                                        class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">

                                                                        {{-- <div class="container">

                                                                            <span></span>
                                                                        </div> --}}

                                                                        Role:
                                                                        <span
                                                                            class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                            {{-- <span
                                                                                class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                            --}}
                                                                            <span class="-mt-px">
                                                                                {{$work?->role ? $work?->role : "Not
                                                                                Added Yet."}}
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex">


                                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                                            Start date:
                                                                            {{$work?->work_start_yr ?
                                                                            $work?->work_start_yr : "Not Added Yet."}}
                                                                        </div>


                                                                        <div
                                                                            class="mt-1.5 text-xs text-slate-500 ml-2 mr-2">
                                                                            -To-
                                                                        </div>


                                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                                            End date:
                                                                            {{$work?->work_end_yr ? $work?->work_end_yr
                                                                            :
                                                                            "Not Added Yet."}}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="m-5">
                                                        <hr>
                                                    </div>

                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-span-12 xl:col-span-8">
                                            <div class="flex flex-col gap-y-7">
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div
                                                        class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                        Educational Experience
                                                    </div>

                                                    @foreach ($eds as $ed)
                                                    <div class="-my-3">



                                                            <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                                                <button data-tw-toggle="modal" data-tw-target="#ed-{{$ed->id}}"
                                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                                                        data-tw-merge="" data-lucide="edit"
                                                                        class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                                    Edit</button>
                                                            </div>
                                                        <div class="-my-3">
                                                            <div
                                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                                <div
                                                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                    <div
                                                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                        <a class="font-medium text-primary" href="#">
                                                                            {{$ed?->school ? $ed?->school: "Not Added
                                                                            Yet."}}
                                                                        </a>
                                                                        <div
                                                                            class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">

                                                                            {{$ed?->educational_description ?
                                                                            $ed?->educational_description: "Not Added
                                                                            Yet."}}
                                                                            <span
                                                                                class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                                <span
                                                                                    class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                                <span class="-mt-px">
                                                                                    Educational Description
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                                            {{$ed?->education_start_yr}} to
                                                                            {{$ed?->education_end_yr}}
                                                                        </div>

                                                                        <div
                                                                            class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">

                                                                            {{$ed?->degree ? $ed?->degree: "Not Added
                                                                            Yet."}}
                                                                            <span
                                                                                class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                                <span
                                                                                    class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                                <span class="-mt-px">
                                                                                    Degree obtained
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                    <div
                                                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                        <a class="font-medium text-primary" href="#">
                                                                            Uploaded Proof file
                                                                        </a>

                                                                        <div style="display: flex">
                                                                            Click File to view

                                                                            <a target="blank"
                                                                                href="{{$ed?->degree_upload}}">

                                                                                <i data-tw-merge="" data-lucide="image"
                                                                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="m-5">
                                                            <hr>
                                                        </div>
                                                        @endforeach
                                                    </div>



                                                </div>
                                            </div>

                                            <div class="col-span-12 xl:col-span-8">
                                                <div class="flex flex-col gap-y-7">
                                                    <div class="box box--stacked flex flex-col p-5">
                                                        <div
                                                            class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                            Projects/Media Files
                                                        </div>
                                                        <div class="-my-3">
                                                            <div
                                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                                <div
                                                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                    <div
                                                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                        <a class="font-medium text-primary" href="#">
                                                                            Uploaded presentations
                                                                        </a>

                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                    <div
                                                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                        <a class="font-medium text-primary" href="#">
                                                                            Project Files
                                                                        </a>

                                                                        <div
                                                                            class="my-3.5 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-1/2">
                                                                            <div
                                                                                class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-12">
                                                                                @foreach ($medias?->where('title', "!=",
                                                                                null) as $media)

                                                                                {{-- <div
                                                                                    style="cursor: pointer;"
                                                                                    class="text-right text-primary">
                                                                                    Edit</div> --}}

                                                                                    <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                                                                        <button data-tw-merge="" data-tw-toggle="modal"
                                                                                                    data-tw-target="#media-upload-{{$media->id}}"
                                                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                                                                                data-tw-merge="" data-lucide="edit"
                                                                                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                                                            Edit</button>
                                                                                    </div>


                                                                                <a href="{{$media?->media_upload}}">
                                                                                    <label
                                                                                        for="">{{$media?->title}}</label>

                                                                                    <div
                                                                                        class="image-fit h-24 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                                        <img data-action="zoom"
                                                                                            src="{{$media?->media_upload}}"
                                                                                            alt="pdf">
                                                                                    </div>
                                                                                </a>
                                                                                @endforeach

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                    <div
                                                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                        <a class="font-medium text-primary" href="#">
                                                                            Uploaded intro video
                                                                        </a>

                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                    <div
                                                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                        <a class="font-medium text-primary" href="#">
                                                                            Intro video
                                                                        </a>

                                                                        <div
                                                                            class="my-3.5 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-1/2">
                                                                            @foreach ($medias?->where('title',
                                                                                null)->where('intro_video', "!=", null) as $media)
                                                                            <div
                                                                                class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-12">
                                                                                {{-- <div class="text-right">test</div> --}}



                                                                                    <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                                                                        <button data-tw-toggle="modal"
                                                                                            data-tw-target="#intro-video-{{$media->id}}"
                                                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                                                                                data-tw-merge="" data-lucide="edit"
                                                                                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                                                            Edit</button>
                                                                                    </div>
                                                                                <a href="{{$media?->intro_video}}"
                                                                                    target="blank">
                                                                                    {{-- <label
                                                                                        for="">{{$media->title}}</label>
                                                                                    --}}

                                                                                    <div
                                                                                        class="image-fit h-200 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                                        <video
                                                                                            src="{{$media?->intro_video}}"></video>

                                                                                    </div>
                                                                                </a>

                                                                            </div>

                                                                            @endforeach


                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div
                                                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                    <div
                                                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                        <a class="font-medium text-primary" href="#">
                                                                            Uploaded CV
                                                                        </a>

                                                                        {{-- <div>
                                                                            <div>



                                                                                <a href="{{$media->cv_upload}}"
                                                                                    target="blank">
                                                                                    Click to view this CV
                                                                                </a>

                                                                            </div>
                                                                        </div> --}}


                                                                        <div class="grid grid-cols-12 gap-3 sm:gap-3.5">

                                                                            @foreach ($medias?->where('cv_upload',"!=",
                                                                            null) as $media)

                                                                                {{-- <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end"> --}}
                                                                                    <button data-tw-toggle="modal"
                                                                                        data-tw-target="#cv-upload-{{$media->id}}"
                                                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                                                                            data-tw-merge="" data-lucide="edit"
                                                                                            class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                                                        Edit</button>
                                                                                {{-- </div> --}}

                                                                            <a href="{{$media?->cv_upload}}"
                                                                                target="_blank"
                                                                                rel="noopener noreferrer">
                                                                                <div
                                                                                    class="col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                                                                                    <div
                                                                                        class="relative cursor-pointer rounded-[0.6rem] border border-slate-200/80 px-3 pb-5 pt-8 shadow-sm transition hover:bg-slate-50 sm:px-5">

                                                                                        <div class="mx-auto w-2/4">
                                                                                            <div
                                                                                                class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-empty-directory">
                                                                                            </div>
                                                                                        </div>
                                                                                        <a class="mt-4 block truncate text-center font-medium capitalize"
                                                                                            href="#">
                                                                                            Cv file
                                                                                        </a>
                                                                                        <div
                                                                                            class="mt-1 text-center text-xs text-slate-500">
                                                                                            Click to view file
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </a>



                                                                            @endforeach


                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="relative col-span-12 row-start-1 xl:col-span-4 xl:col-start-9">
                                                <div class="sticky top-[6.2rem] flex flex-col gap-y-7">
                                                    {{-- <div class="box box--stacked flex flex-col p-5">
                                                        <div>Profile Completion progress (83%)</div>
                                                        <div class="mt-3.5 flex h-2">
                                                            <div
                                                                class="h-full w-[25%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                                                            </div>
                                                            <div
                                                                class="h-full w-[100%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r">
                                                            </div>
                                                        </div>
                                                        <a href="#" data-tw-merge=""
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary mt-5 w-full border-primary/20 bg-white text-primary hover:bg-primary/20"><i
                                                                data-tw-merge="" data-lucide="inbox"
                                                                class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                            Profile Settings</a>
                                                    </div> --}}
                                                    <div class="box box--stacked flex flex-col p-5">
                                                        <div
                                                            class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                            Profile
                                                        </div>
                                                        <div class="flex flex-col gap-8">
                                                            <div>
                                                                <div class="text-xs uppercase text-slate-500">
                                                                    Personal Data
                                                                </div>
                                                                <div class="mt-3.5">
                                                                    <div class="flex items-center">
                                                                        <i data-tw-merge="" data-lucide="clipboard"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Department: {{$user?->info?->department}}
                                                                    </div>
                                                                    <div class="mt-3 flex items-center">
                                                                        <i data-tw-merge="" data-lucide="landmark"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Location: {{$user?->info?->location ?
                                                                        $user?->info->location : "Not Added Yet."}}
                                                                    </div>
                                                                    <div class="mt-3 flex items-center">
                                                                        <i data-tw-merge="" data-lucide="clock"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Is active:
                                                                        @if ($user?->info?->is_active == 1)

                                                                        <div
                                                                            class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                                            <span class="-mt-px">

                                                                                Active

                                                                            </span>
                                                                        </div>
                                                                        @else
                                                                        <div
                                                                            class="ml-1 flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs font-medium text-danger">
                                                                            <span class="-mt-px">

                                                                                Inactive

                                                                            </span>
                                                                        </div>
                                                                        @endif

                                                                    </div>
                                                                    <div class="mt-3 flex items-center text-capitalize">
                                                                        <i data-tw-merge="" data-lucide="user"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Gender: {{$user?->info?->gender }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-xs uppercase text-slate-500">
                                                                    Contacts
                                                                </div>
                                                                <div class="mt-3.5">
                                                                    <div class="flex items-center">
                                                                        <i data-tw-merge="" data-lucide="clipboard"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Email:
                                                                        <a class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                            href="#">
                                                                            {{$user?->email}}
                                                                        </a>
                                                                    </div>
                                                                    <div class="mt-3 flex items-center">
                                                                        <i data-tw-merge="" data-lucide="calendar"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Phone Number:
                                                                        <a class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                            href="#">
                                                                            {{$user?->info?->phone}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-xs uppercase text-slate-500">
                                                                    Statistics
                                                                </div>
                                                                <div class="mt-3.5">
                                                                    <div class="mt-3 flex items-center">
                                                                        <i data-tw-merge="" data-lucide="clock"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Events:
                                                                        <div
                                                                            class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                                            <span class="-mt-px">5 events</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3 flex items-center">
                                                                        <i data-tw-merge="" data-lucide="map"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Request:
                                                                        <a class="ml-1 underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                            href="#">
                                                                            10
                                                                        </a>
                                                                    </div>
                                                                    <div class="mt-3 flex items-center">
                                                                        <i data-tw-merge="" data-lucide="pointer"
                                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                        Engagements:
                                                                        <a class="ml-1 underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                            href="#">
                                                                            2
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @foreach ($works as $work)

            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="work-{{$work?->id}}"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <form action="{{route('candidate.work.edit', $work?->id)}}" method="POST">
                    @csrf


                    <div data-tw-merge=""
                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px] p-10 text-center">


                        <div class="flex flex-col items-center md:flex-row">
                            Edit Work Experience

                        </div>
                        <input type="text" name="company_name" value="{{$work?->company_name}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="text" name="role" value="{{$work?->role}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="text" name="job_description" value="{{$work?->job_description}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="date" name="work_start_yr" value="{{$work?->work_start_yr}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="date" name="work_end_yr" value="{{$work?->work_end_yr}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                        <button type="submit" class="mt-4 text-blue-500 hover:text-blue-700"> Edit</button>
                    </div>
                </form>
            </div>
            @endforeach

            @foreach ($eds as $ed)

            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="ed-{{$ed?->id}}"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <form action="{{route('candidate.education.edit', $ed?->id)}}" enctype="multipart/form-data"
                    method="POST">
                    @csrf

                    <div data-tw-merge=""
                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px] p-10 text-center">


                        <div class="flex flex-col items-center md:flex-row">
                            Edit Educational Experience

                        </div>
                        <input type="text" name="school" value="{{$ed?->school}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="text" name="educational_description" value="{{$ed?->educational_description}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="text" name="degree" value="{{$ed?->degree}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="date" name="education_start_yr" value="{{$ed?->education_start_yr}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                        <input type="date" name="education_end_yr" value="{{$ed?->education_end_yr}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                        <div style="display: flex" class="mb-3">
                            Click File to view, edit the image below if you wish to change needed.

                            <a target="blank" href="{{$ed?->degree_upload}}">

                                <i data-tw-merge="" data-lucide="image"
                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>

                            </a>
                        </div>


                        <input type="file" name="degree_upload" accept="image/*" value="{{$ed?->degree_upload}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                        <button type="submit" class="mt-4 text-blue-500 hover:text-blue-700"> Edit</button>
                    </div>
                </form>
            </div>
            @endforeach

            @foreach ($medias?->where('title', "!=", null) as $media)
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="media-upload-{{$media?->id}}"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <form action="{{route('candidate.media-upload.edit', $media?->id)}}" enctype="multipart/form-data"
                    method="POST">
                    @csrf

                    <div data-tw-merge=""
                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px] p-10 text-center">


                        <div class="flex flex-col items-center md:flex-row">
                            Edit Project Display

                        </div>
                        <input type="text" name="title" value="{{$media?->title}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                        {{-- <div style="display: flex" class="mb-3">
                            Click File to view, edit the image below if you wish to change.

                            <a target="blank" href="{{$media?->media_upload}}">

                                <i data-tw-merge="" data-lucide="image"
                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>

                            </a>
                        </div> --}}

                        <a href="{{$media?->media_upload}}">
                            <label
                                for="">{{$media?->title}}</label>

                            <div
                                class="image-fit h-24 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                <img data-action="zoom"
                                    src="{{$media?->media_upload}}"
                                    alt="pdf">
                            </div>
                        </a>


                        <input type="file" name="media_upload" accept="image/*" value="{{$media?->media_upload}}"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                        <button type="submit" class="mt-4 text-blue-500 hover:text-blue-700"> Edit</button>
                    </div>
                </form>
            </div>
            @endforeach

            {{-- @foreach ($medias?->where('title', null)->where('intro_video', "!=", null) as $media)
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="intro-video-{{$media?->id}}"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <form action="{{route('candidate.intro-video.edit', $media?->id)}}" enctype="multipart/form-data"
                    method="POST">
                    @csrf

                    <div data-tw-merge=""
                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px] p-10 text-center">


                        <div class="flex flex-col items-center md:flex-row">
                            Edit Intro Video Display

                        </div>


                        <a href="{{$media?->intro_video}}"
                            target="blank">
                            <div
                                class="image-fit h-200 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                <video
                                    src="{{$media?->intro_video}}"></video>

                            </div>
                        </a>


                        <input type="file" name="intro_video" accept="video/*"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">


                        <button type="submit" class="mt-4 text-blue-500 hover:text-blue-700"> Edit</button>
                    </div>
                </form>
            </div>
            @endforeach --}}


            {{-- for intro video --}}
            @foreach ($medias?->where('title', null)->where('intro_video', "!=", null) as $media)
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="intro-video-{{$media?->id}}"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <form action="{{route('candidate.intro-video.edit', $media?->id)}}" enctype="multipart/form-data"
                    method="POST">
                    @csrf

                    <div data-tw-merge=""
                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px] p-10 text-center">


                        <div class="flex flex-col items-center md:flex-row">
                            Edit Intro Video Display

                        </div>


                        <a href="{{$media?->intro_video}}"
                            target="blank">
                            <div
                                class="image-fit h-200 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                <video
                                    src="{{$media?->intro_video}}"></video>

                            </div>
                        </a>


                        <input type="file" name="intro_video" accept="video/*"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">



                        <button type="submit" class="m-5 text-blue-500 hover:text-blue-700"> Edit</button>
                        <div class="px-5 pb-8 text-center">
                            <button data-tw-merge="" data-tw-dismiss="modal"
                                type="button"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24">Close</button>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach


            {{-- for cv --}}
            @foreach ($medias?->where('cv_upload',"!=",
            null) as $media)
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="cv-upload-{{$media?->id}}"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <form action="{{route('candidate.cv-upload.edit', $media?->id)}}" enctype="multipart/form-data"
                    method="POST">
                    @csrf

                    <div data-tw-merge=""
                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px] p-10 text-center">
                        <div class="flex flex-col items-center md:flex-row">
                            Edit CV
                        </div>

                        <div style="display: flex" class="mb-3">
                            Click File to view, edit the image below if you wish to change needed.

                            <a target="blank" href="{{$media?->cv_upload}}">

                                <i data-tw-merge="" data-lucide="image"
                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>

                            </a>
                        </div>

                        <input type="file" name="cv_upload"
                            class=" mb-3 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">


                        <button type="submit" class="mt-4 text-blue-500 hover:text-blue-700"> Edit</button>
                    </div>
                </form>
            </div>
            @endforeach


            </div>
</div>

    </x-slot>

    @section('script')



    <script>



        function handleFileUpload(event) {
        const file = event.target.files[0];
        const previeww = document.getElementById('previeww');
        const placeholderIconn = document.getElementById('placeholder-iconn');

        if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            previeww.src = e.target.result;
            previeww.classList.remove('hidden');
            placeholderIconn.classList.add('hidden');
        };

        reader.readAsDataURL(file);
        }
        }
        </script>

    @endsection

</x-app-layout>
