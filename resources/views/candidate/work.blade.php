<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12 sm:col-span-10 sm:col-start-2">


                        {{-- Work info section --}}
                        <div style="margin-top: 40px; margin-bottom: 40px"
                            class="flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group active after:hidden before:hidden after:lg:block before:lg:block first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20 last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20 last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20 first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20">
                            <div class="flex items-center">
                                <div
                                    class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                                    <div class="flex h-10 w-10 items-center justify-center">
                                        3
                                    </div>
                                </div>
                                <div
                                    class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                                    Work Experience Setup
                                </div>
                            </div>
                        </div>
                        <form action="{{route('candidate.work.update')}}" enctype="multipart/form-data" method="POST">

                            @if ($errors->any())
                            <div class="p-4 mb-4 bg-red-100 rounded-lg text-red-700">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @csrf
                            <div id="experience-container">
                                <div class="experience p-7 border border-gray-300 rounded-md mb-4">
                                    <!-- Your content -->
                                    <div class="mt-5 block flex-col pt-5 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Company name</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    Enter the company name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <input name="company_name[]" type="text" placeholder="Julius Berger Plc"
                                                class="w-full text-sm border-slate-200 rounded-md">
                                        </div>
                                    </div>

                                    <!-- Role -->
                                    <div class="mt-5 block flex-col pt-5 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Role</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    Enter your role
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <input name="role[]" type="text" placeholder="Developer"
                                                class="w-full text-sm border-slate-200 rounded-md">
                                        </div>
                                    </div>

                                    <!-- Start/End Year -->
                                    <div class="mt-5 block flex-col pt-5 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Start/End year</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    Provide your start and end year.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center md:flex-row">
                                            <input type="date" name="work_start_yr[]"
                                                class="w-full text-sm border-slate-200 rounded-md">
                                            <input type="date" name="work_end_yr[]"
                                                class="w-full text-sm border-slate-200 rounded-md">
                                        </div>
                                    </div>

                                    <div
                                        class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Description</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="font-high text-danger">
                                                    Describe SHORTLY your role in the company.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <input name="job_description[]" type="text"
                                                placeholder="Short description of you role."
                                                class="w-full text-sm border-slate-200 rounded-md">
                                        </div>

                                    </div>

                                    <!-- Close Button -->
                                    <button style="color: red"
                                        class="mt-4 text-red-500 hover:text-red-700 remove-experience" type="button">
                                        Remove
                                    </button>
                                </div>
                            </div>

                            <!-- Add Button -->
                            <div>
                                <button id="add-experience" class="mt-4 text-blue-500 hover:text-blue-700"
                                    type="button">
                                    + Add Another Experience
                                </button>
                            </div>

                            <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                <a href="{{ route('candidate.education.view') }}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto">

                                    Back
                                </a>
                                <button data-tw-merge="" type="submit"
                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                        data-tw-merge="" data-lucide="pocket"
                                        class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                    Submit</button>

                                    @if (Auth::user()?->work && !Auth::user()->work->isEmpty)


                                        <a href="{{ route('candidate.media.view') }}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto">

                                            Next
                                        </a>

                                        @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>
