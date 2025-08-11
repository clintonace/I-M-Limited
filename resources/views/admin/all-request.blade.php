<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
            <div class="mt-16 px-5">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="col-span-12">

                            <x-admin-stats-component />

                            {{-- <div class="flex flex-col mt-4 gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                                <div class="text-base font-medium group-[.mode--light]:text-white">
                                    Inbox
                                </div>
                                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">

                              <button data-tw-merge=""
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
                                            data-tw-merge="" data-lucide="mail-plus"
                                            class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                        Compose New Mail</button>
                                    <button data-tw-merge=""
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
                                            data-tw-merge="" data-lucide="cog" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                        Mail
                                        Settings</button>
                                </div>
                            </div> --}}

                            {{-- <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                <div class="text-base font-medium group-[.mode--light]:text-dark">
                                    Requests
                                </div>

                            </div> --}}
                            <div class="mt-3.5 flex flex-col gap-5 sm:flex-row">

                                <div class="w-full pb-10 overflow-hidden">
                                    <div class="flex flex-col w-full box box--stacked">
                                        <div class="flex flex-col p-5 gap-y-2 sm:flex-row sm:items-center">
                                            <div>
                                                <div class="relative">
                                                    <i data-tw-merge="" data-lucide="search"
                                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <input data-tw-merge="" type="text" placeholder="Search mails..."
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64">
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                                {{-- <div data-tw-merge="" data-tw-placement="bottom-end"
                                                    class="dropdown relative"><button data-tw-merge=""
                                                        data-tw-toggle="dropdown" aria-expanded="false"
                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto"><i
                                                            data-tw-merge="" data-lucide="download"
                                                            class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                        Export
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
                                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                            <a
                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                    data-tw-merge="" data-lucide="file-bar-chart"
                                                                    class="stroke-[1] w-4 h-4 mr-2"></i>
                                                                PDF</a>

                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>

                                            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                                <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                                                    All Request
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-0.5 px-5">

                                            <div>

                                                @foreach ($reqs as $item)


                                                <a target="blank" href="{{route('admin.single.request', $item->id)}}">
                                                    <div
                                                        class="overflow-x-auto rounded-[0.6rem] border border-slate-200/70 border-t-slate-200/60 shadow-sm sm:overflow-x-visible">
                                                        <div
                                                            class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block last:border-b-0 border-b border-slate-200/50 dark:border-darkmode-400 hover:relative hover:bg-slate-50 dark:text-slate-300 dark:bg-darkmode-600">
                                                            <div class="flex items-center px-5 py-3.5">
                                                                <div>
                                                                    <div class="relative w-5 h-5">
                                                                    {{$loop->index ++ }}
                                                                    </div>
                                                                </div>

                                                                <div class="flex items-center flex-none w-40 ml-8 mr-5">
                                                                    {{-- <div class="relative flex-none w-5 h-5 image-fit">
                                                                        <img class="rounded-full"
                                                                            src="/dash/dist/images/users/user2-50x50.jpg"
                                                                            alt="codeBrown">
                                                                    </div> --}}
                                                                    <div class="ml-2.5 truncate font-medium">
                                                                        {{$item->company_email}}
                                                                    </div>
                                                                </div>
                                                                <div class="flex items-center flex-none w-40 ml-8 mr-5">
                                                                    {{-- <div class="relative flex-none w-5 h-5 image-fit">
                                                                        <img class="rounded-full"
                                                                            src="/dash/dist/images/users/user2-50x50.jpg"
                                                                            alt="codeBrown">
                                                                    </div> --}}
                                                                    <div class="ml-2.5 truncate font-medium">
                                                                        {{$item->company_name}}
                                                                    </div>
                                                                </div>
                                                                <div class="max-w-2xl truncate">
                                                                    <span class="font-medium">
                                                                        Important Announcement
                                                                    </span>
                                                                    <span class="mx-0.5">-</span> {{$item->request_message}}
                                                                </div>
                                                                <div
                                                                    class="pl-10 ml-auto text-xs whitespace-nowrap text-slate-500/70">
                                                                   {{$item->created_at->diffForHumans()}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- <div
                                            class="flex flex-col items-center p-5 text-center text-slate-500/80 sm:flex-row sm:text-left">
                                            <div>4.41 GB (25%) of 17 GB used Manage</div>
                                            <div class="mt-2 sm:ml-auto sm:mt-0">
                                                Last request activity: 36 minutes ago
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>
