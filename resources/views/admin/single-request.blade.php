<x-app-layout>


    <x-slot name="content">


        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">

                        <div class="mt-10">
                            <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                                <ul data-tw-merge="" role="tablist"
                                    class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">
                                    <li id="example-1-tab" data-tw-merge="" role="presentation"
                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                        <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Request</button>
                                    </li>

                                </ul>
                                <div class="flex items-center gap-3 2xl:ml-auto">
                                    <div data-tw-merge="" data-tw-placement="bottom-end"
                                        class="dropdown relative mr-auto 2xl:mr-0"><button data-tw-merge=""
                                            data-tw-toggle="dropdown" aria-expanded="false"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 rounded-[0.6rem] bg-white py-3"><i
                                                data-tw-merge="" data-lucide="download"
                                                class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            <a href="#" target="_blank" rel="noopener noreferrer">

                                                <span class="max-w-[3.8rem] truncate sm:max-w-none">
                                                    Download request
                                                </span>
                                            </a>
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
                                            {{-- <div data-tw-merge=""
                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-48">
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="linkedin"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Copy
                                                    Linkedin</a>

                                            </div> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-content">


                                {{-- Events --}}

                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2"
                                    role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane active">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-12 xl:col-span-12">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Company Request
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Description: {{$request->request_message}}
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                {{-- <div data-transition="" data-selector=".show"
                                                    data-enter="transition-all ease-linear duration-150"
                                                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                    data-leave="transition-all ease-linear duration-150"
                                                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                    class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge=""
                                                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Company:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">{{$request->company_name}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Company Email:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">{{$request->company_email}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/company-retreat
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

    </x-slot>



    <div data-transition="" data-selector=".active"
        data-enter="transition-[visibility,opacity] ease-linear duration-150"
        data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
        data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100"
        data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1" role="tabpanel"
        aria-labelledby="example-1-tab" class="tab-pane active">

        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
            <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                <a class="text-[0.94rem] font-medium text-primary" href="#">
                    Company Retreat
                </a>
                <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                    Team retreat in a scenic location
                </div>
                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown absolute right-0 top-0 mr-5 mt-5">
                    <button data-tw-toggle="dropdown" aria-expanded="false"
                        class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical"
                            class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                    </button>
                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                        class="dropdown-menu absolute z-[9999] hidden">
                        <div data-tw-merge=""
                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                            <a
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                    data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Copy
                                Link</a>
                            <a
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                    data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Delete</a>
                        </div>
                    </div>
                </div>
                <div class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                    <div class="flex items-center">
                        <div class="text-slate-500">Organizer:</div>
                        <div class="ml-auto">
                            <div
                                class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                <span class="-mt-px">Left4code</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Available Seats:</div>
                        <div class="ml-auto">
                            <div class="flex items-center">
                                <i data-tw-merge="" data-lucide="armchair"
                                    class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                <i data-tw-merge="" data-lucide="armchair"
                                    class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                <i data-tw-merge="" data-lucide="armchair"
                                    class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                <i data-tw-merge="" data-lucide="armchair"
                                    class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                <i data-tw-merge="" data-lucide="armchair"
                                    class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Time:</div>
                        <div class="ml-auto text-slate-500">
                            All Day
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Attendees:</div>
                        <div class="ml-auto">
                            <div class="flex items-center justify-center">
                                <div class="image-fit zoom-in h-6 w-6">
                                    <img data-placement="top" title="Uploaded atMeryl Streep"
                                        src="dist/images/users/user2-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full border-2 border-white">
                                </div>
                                <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                    <img data-placement="top" title="Uploaded atCate Blanchett"
                                        src="dist/images/users/user8-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full border-2 border-white">
                                </div>
                                <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                    <img data-placement="top" title="Uploaded atAngelina Jolie"
                                        src="dist/images/users/user4-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full border-2 border-white">
                                </div>
                                <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                    <img data-placement="top" title="Uploaded atLeonardo DiCaprio"
                                        src="dist/images/users/user3-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full border-2 border-white">
                                </div>
                                <div class="ml-1 text-slate-500">
                                    (76+)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Registration Link:</div>
                        <div class="ml-auto">
                            <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                href="#">
                                https://left4code.com/company-retreat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
