<div class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-6 gap-y-10">
            <div class="col-span-12">
                <div>
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                             Dashboard
                        </div>
                        <ul data-tw-merge="" role="tablist" class="p-0.5 border dark:border-darkmode-400 flex box w-auto rounded-[0.6rem] border-slate-200 bg-white group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] md:ml-auto">
                            <li id="example-1-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]">
                                <button data-tw-merge="" data-tw-target="#example-1" role="tab" class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24">Stats</button>
                            </li>
                            <li id="example-2-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]">
                                <button data-tw-merge="" data-tw-target="#example-2" role="tab" class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24">Notifications</button>
                            </li>
                            {{-- <li id="example-3-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]">
                                <button data-tw-merge="" data-tw-target="#example-3" role="tab" class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24">Yearly</button>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="tab-content box box--stacked mt-3.5">
                        <div data-transition="" data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1" role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active flex flex-col gap-2 p-1.5 leading-relaxed xl:flex-row">
                            <div class="grid w-full grid-cols-1 gap-2">
                                {{-- <div class="box relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border-0 border-slate-200/60 bg-slate-50 bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] p-5 before:absolute before:right-0 before:top-0 before:-mr-[62%] before:h-[130%] before:w-full before:rotate-45 before:bg-gradient-to-b before:from-black/[0.15] before:to-transparent before:content-[''] sm:col-span-2 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/10">
                                        <i data-tw-merge="" data-lucide="database" class="stroke-[1] h-6 w-6 fill-white/10 text-white"></i>
                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium text-white">
                                            {{$companies?->count()}}
                                        </div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/50 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            {{$companies?->count()/0.1}}%
                                            <i data-tw-merge="" data-lucide="chevron-up" class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-white/70">
                                        Total companies
                                    </div>

                                </div> --}}
                                {{-- <div class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                        <i data-tw-merge="" data-lucide="app-window" class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium">{{$requests?->count()}}</div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            {{$requests?->count()/0.1}}%
                                            <i data-tw-merge="" data-lucide="chevron-down" class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Total request
                                    </div>

                                </div>
                                <div class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                                        <i data-tw-merge="" data-lucide="box" class="stroke-[1] h-6 w-6 fill-info/10 text-info"></i>
                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium">{{$events?->count()}}</div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            {{$events?->count()/0.1}}%
                                            <i data-tw-merge="" data-lucide="chevron-up" class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Total Events
                                    </div>

                                </div> --}}
                                <div class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                        <i data-tw-merge="" data-lucide="layout" class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium">{{$users?->count()}}</div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            {{$users?->count()/0.1}}%
                                            <i data-tw-merge="" data-lucide="chevron-up" class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Total Candidates
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div data-transition="" data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2" role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane p-5 leading-relaxed"></div>
                        <div data-transition="" data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-3" role="tabpanel" aria-labelledby="example-3-tab" class="tab-pane p-5 leading-relaxed"></div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
                <div>
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium">Lead Company</div>
                    </div>
                    <div class="box box--stacked mt-3.5 p-5">
                        <div class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
                            <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                <img src="{{$user?->company?->company_logo}}" alt="Tailwise - Admin Dashboard Template">
                            </div>
                            <div class="text-center sm:ml-4 sm:text-left">
                                <div class="text-base font-medium">
                                    {{}}
                                </div>
                                <div class="mt-0.5 text-slate-500">
                                   Engineering
                                </div>
                            </div>
                            <div class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
                                <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50"></div>
                                High priority
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-3 text-center sm:flex-row">
                            <div class="flex-1 border-dashed last:border-0 sm:border-r">
                                <div class="text-slate-500">Request Generated</div>
                                <div class="mt-1 flex items-center justify-center">
                                    <div class="text-base font-medium">0</div>
                                    <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                        0%
                                        <i data-tw-merge="" data-lucide="chevron-up" class="stroke-[1] ml-px h-4 w-4"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 border-dashed last:border-0 sm:border-r">
                                <div class="text-slate-500">Deals Closed</div>
                                <div class="mt-1 flex items-center justify-center">
                                    <div class="text-base font-medium">0</div>
                                    <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                        0%
                                        <i data-tw-merge="" data-lucide="chevron-up" class="stroke-[1] ml-px h-4 w-4"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 border-dashed last:border-0 sm:border-r">
                                <div class="text-slate-500">Meetings Scheduled</div>
                                <div class="mt-1 flex items-center justify-center">
                                    <div class="text-base font-medium">0</div>
                                    <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                        0%
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] ml-px h-4 w-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium">Recently added Companies</div>
                    </div>
                    <div class="box box--stacked mt-3.5 p-5">

                        <div class="mb-5 flex flex-col gap-5 border-b border-dashed border-slate-300/70 pb-5">
                            <div class="flex items-center gap-3.5">
                                <div>
                                    <div class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                        <img src="/dash/dist/images/users/user2-50x50.jpg" alt="Logo">
                                    </div>
                                </div>
                                <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                    <div>
                                        <div class="font-medium">Meryl Streep</div>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
                <div>
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium">Latest Projects</div>
                    </div>
                    <div class="box box--stacked mt-3.5 p-5">
                        <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                            <div>Collaboration progress report</div>
                            <div class="mt-3 flex w-full items-center rounded-lg border border-success/10 bg-success/10 px-3 py-3 text-success">
                                <i data-tw-merge="" data-lucide="clock" class="stroke-[1] w-5 h-5 mr-2"></i>
                                Project kick-off date:
                                <div class="ml-2">Thu Mar 2022</div>
                            </div>
                            <div class="mt-5 flex flex-col gap-4">
                                <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                    <div class="text-slate-500 sm:w-36">Project Name</div>
                                    <div class="flex items-center font-medium sm:ml-5 sm:h-7">
                                        Web Odyssey: Redesigning the Future - 2043
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                    <div class="text-slate-500 sm:w-36">Project Company</div>
                                    <div class="flex h-5 items-center sm:ml-5">
                                        <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                            <img src="/dash/dist/images/users/user9-50x50.jpg" alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                        <div class="ml-2.5 underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                            Julius Berger
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="flex w-full items-center rounded-lg border bg-slate-50 px-3 py-3 font-medium text-slate-500">
                                <i data-tw-merge="" data-lucide="kanban-square" class="w-5 h-5 mr-2 stroke-[1.3]"></i>
                                Project Details for Team Members
                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-auto"><a data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;" class="cursor-pointer"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-500/70 stroke-slate-500/70"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="mt-3 flex flex-col gap-3">
                                <div class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row">

                                    <div>
                                        <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                                            <img class="rounded-md saturate-[0.7]" src="/dash/dist/images/projects/project8-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </div>
                                    <div class="-mt-1">
                                        <a class="block text-center font-medium sm:text-left" href="#">
                                            Project Brochures
                                        </a>
                                        <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                                            <i data-tw-merge="" data-lucide="link" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                                            <a class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]" href="#">
                                            Link </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
