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
                                    <li id="example-2-tab" data-tw-merge="" role="presentation"
                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                        <button data-tw-merge="" data-tw-target="#example-2" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Events
                                        </button>
                                    </li>

                                    <li id="example-4-tab" data-tw-merge="" role="presentation"
                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                        <button data-tw-merge="" data-tw-target="#example-4" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Requests
                                        </button>
                                    </li>

                                </ul>
                                <div class="flex items-center gap-3 2xl:ml-auto">
                                    {{-- <div data-tw-merge="" data-tw-placement="bottom-end"
                                        class="dropdown relative mr-auto 2xl:mr-0"><button data-tw-merge=""
                                            data-tw-toggle="dropdown" aria-expanded="false"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 rounded-[0.6rem] bg-white py-3"><i
                                                data-tw-merge="" data-lucide="download"
                                                class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            <span class="max-w-[3.8rem] truncate sm:max-w-none">
                                                Copy Linkedin
                                            </span>
                                            <i data-tw-merge="" data-lucide="chevron-down"
                                                class="ml-2 h-4 w-4 stroke-[1.3]"></i></button>
                                        <div data-transition="" data-selector=".show"
                                            data-enter="transition-all ease-linear duration-150"
                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave="transition-all ease-linear duration-150"
                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge=""
                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-48">
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="linkedin"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Copy
                                                    Linkedin</a>

                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div data-tw-merge="" data-tw-placement="bottom-end"
                                        class="dropdown relative inline-block"><button data-tw-merge=""
                                            data-tw-toggle="dropdown" aria-expanded="false"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 rounded-[0.6rem] bg-white py-3"><i
                                                data-tw-merge="" data-lucide="arrow-down-wide-narrow"
                                                class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            Teams
                                            <span
                                                class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium">
                                                42
                                            </span></button>
                                        <div data-transition="" data-selector=".show"
                                            data-enter="transition-all ease-linear duration-150"
                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave="transition-all ease-linear duration-150"
                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge=""
                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600">
                                                <div class="p-2">
                                                    <div>
                                                        <div class="text-left">Invite by Email</div>
                                                        <input data-tw-merge="" type="text"
                                                            placeholder="tom.hanks@left4code.com"
                                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 mt-2 flex-1">
                                                    </div>
                                                    <div class="mt-4 flex items-center">
                                                        <button data-tw-merge=""
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 ml-auto w-32">Close</button>
                                                        <button data-tw-merge=""
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-2 w-32">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative">
                                        <button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 rounded-[0.6rem] bg-white py-3 text-[0.94rem]"><span
                                                class="flex h-5 w-5 items-center justify-center">
                                                <i data-tw-merge="" data-lucide="more-vertical"
                                                    class="h-4 w-4 stroke-[1.3]"></i>
                                            </span></button>
                                        <div data-transition="" data-selector=".show"
                                            data-enter="transition-all ease-linear duration-150"
                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave="transition-all ease-linear duration-150"
                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge=""
                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-44">
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="settings"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Settings</a>
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="contact"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Contacts</a>
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                                                        data-tw-merge="" data-lucide="lock"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Lock Account</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
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

                                                    <div class="-my-3">
                                                        <div
                                                            class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        {{$work?->company_name ? $work->company_name :
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
                                                                                $work->job_description : "Not Added
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
                                                                                {{$work?->role ? $work->role : "Not
                                                                                Added Yet."}}
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex">


                                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                                            Start date:
                                                                            {{$work?->work_start_yr ?
                                                                            $work->work_start_yr : "Not Added Yet."}}
                                                                        </div>


                                                                        <div
                                                                            class="mt-1.5 text-xs text-slate-500 ml-2 mr-2">
                                                                            -To-
                                                                        </div>


                                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                                            End date:
                                                                            {{$work?->work_end_yr ? $work->work_end_yr :
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


                                                                            <a href="{{$media->media_upload}}">
                                                                                <label for="">{{$media->title}}</label>

                                                                                <div
                                                                                    class="image-fit h-24 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                                    <img data-action="zoom"
                                                                                        src="{{$media->media_upload}}"
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
                                                                        <div
                                                                            class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-12">
                                                                            @foreach ($medias?->where('title',
                                                                            null) as $media)


                                                                            <a href="{{$media->intro_video}}"
                                                                                target="blank">
                                                                                {{-- <label
                                                                                    for="">{{$media->title}}</label>
                                                                                --}}

                                                                                <div
                                                                                    class="image-fit h-200 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                                    <video
                                                                                        src="{{$media->intro_video}}"></video>
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
                                                                        <a href="{{$media->cv_upload}}" target="_blank"
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
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div>Profile Completion progress
                                                        ({{$user?->info?->profile_completion_percentage ?
                                                        $user?->info?->profile_completion_percentage : 0}}%)</div>
                                                    <div class="mt-3.5 flex h-2">
                                                        <div
                                                            class="h-full w-[{{$user?->info?->profile_completion_percentage ? $user?->info?->profile_completion_percentage : 0}}%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                                                        </div>
                                                        <div
                                                            class="h-full w-[%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r">
                                                        </div>
                                                    </div>
                                                    {{-- <a href="#" data-tw-merge=""
                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary mt-5 w-full border-primary/20 bg-white text-primary hover:bg-primary/20"><i
                                                            data-tw-merge="" data-lucide="inbox"
                                                            class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                        Profile Settings</a> --}}
                                                </div>
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

                                                        <div class="mt-3">
                                                            <label>Activate user</label>
                                                            <div class="mt-2">
                                                                <div data-tw-merge class="flex items-center"><input
                                                                        data-tw-merge type="checkbox"
                                                                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary [&amp;[type='radio']]:checked:border-primary [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary [&amp;[type='checkbox']]:checked:border-primary [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50 w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white"
                                                                        id="checkbox-switch-7">
                                                                    <label data-tw-merge for="checkbox-switch-7"
                                                                        class="cursor-pointer ml-2">Activate this user,
                                                                        The
                                                                        deatils of this user will displayed for
                                                                        companies to
                                                                        see.</label>
                                                                </div>

                                                                <form
                                                                    action="{{route('admin.activate.user', $user?->info?->id)}}">

                                                                    @csrf

                                                                    <div class="mt-5 flex flex-wrap items-center gap-2">
                                                                        <button type="submit" data-tw-merge
                                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-success border-success text-slate-900 dark:border-success rounded-full shadow-md w-24 w-24">Apply</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Events --}}

                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2"
                                    role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">

                                        @if ($bookings != null)

                                        @foreach ($bookings as $booking)

                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Booked Event
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                {{$booking?->details}}
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show"
                                                    data-enter="transition-all ease-linear duration-150"
                                                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                    data-leave="transition-all ease-linear duration-150"
                                                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                    class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge=""
                                                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a href="{{route('admin.remake.event', $booking?->id)}}"
                                                            target="blank"
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="refresh-ccw"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Reschedule</a>

                                                        <form action="{{route('admin.cancel.event', $booking?->id)}}"
                                                            method="POST">
                                                            @csrf

                                                            <button type="submit" onclick="confirmation(event)"
                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                    data-tw-merge="" data-lucide="trash"
                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                Cancel</button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">IandM Management</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Company Email:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">{{$booking?->company_email}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Candidate Email:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">{{$booking?->candidate_email}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Participants:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            {{$booking?->participants}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Start Date:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$booking?->start_date}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">End Date:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$booking?->end_date}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Start Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{-- {{$booking?->start_time}} --}}
                                                        {{ date('h:i A', strtotime($booking?->start_time)) }}

                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">End Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{-- {{$booking?->end_time}} --}}
                                                        {{ date('h:i A', strtotime($booking?->end_time)) }}

                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Meeting Created At:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$booking?->created_at?->diffForHumans()}}
                                                    </div>
                                                </div>

                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Meeting Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            {{$booking?->link}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                No event booked Yet.
                                            </a>
                                        </div>
                                        @endif

                                    </div>
                                </div>

                                {{-- Request --}}

                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-4"
                                    role="tabpanel" aria-labelledby="example-4-tab" class="tab-pane">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">


                                        @if ($user?->requests != null)

                                        @foreach ($user?->requests as $req)

                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Request
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                {{$req?->request_message}}
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show"
                                                    data-enter="transition-all ease-linear duration-150"
                                                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                    data-leave="transition-all ease-linear duration-150"
                                                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                    class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge=""
                                                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a href="{{route('admin.respond.request', $req?->id)}}"
                                                            target="blank"
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="message-circle"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Respond</a>



                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">

                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Company Name:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">{{$req?->company_name}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Company Email:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">{{$req?->company_email}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Response:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">{{$req?->response}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Request Created At:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$req?->created_at->diffForHumans()}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                No Request yet.
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @section('cancelScript')

    <script>
        function confirmation(ev) {
            ev.preventDefault(); // Prevent the default form submission

            swal({
                title: "Are you sure you want to cancel this event?",
                text: "A mail will be sent to the company and the candidate to notify them of this cancellation. You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    // Submit the parent form if confirmed
                    ev.target.closest('form').submit();
                }
            });
        }

    </script>
    @endsection

</x-app-layout>
