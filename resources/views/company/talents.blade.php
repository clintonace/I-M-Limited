<x-app-layout>

    @section('title')
    <h1>Talents</h1>
    @endsection


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <div class="box box--stacked flex flex-col p-1.5">
                            <x-company-head-component />
                        </div>
                        <div class="mt-10">
                            <!-- <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center 2xl:justify-between">
                                <ul data-tw-merge="" role="tablist"
                                    class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">

                                    <li id="example-1-tab" data-tw-merge="" role="presentation"
                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                        <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Talent Pool</button>
                                    </li>
                                </ul>

                                <div class="mt-3 2xl:mt-0 flex flex-col gap-3 w-full 2xl:w-auto">
                                    <form method="GET" action="{{ url()->current() }}" class="flex items-center gap-2 w-full" role="search" aria-label="Search talents">
                                        <input type="search" name="q" value="{{ request('q') }}" placeholder="Search talents..." aria-label="Search talents"
                                            class="w-full 2xl:w-64 px-3 py-2 rounded border border-slate-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary" />
                                        <button type="submit"
                                            class="inline-flex items-center justify-center px-3 py-2 bg-primary text-white rounded hover:opacity-90">
                                            <i data-lucide="search" class="w-4 h-4 mr-2"></i>
                                            Search
                                        </button>
                                    </form>
                                    <div class="flex gap-2">
                                        <a href="?skill=php" class="px-3 py-2 rounded border border-slate-200 bg-white text-sm hover:bg-slate-50 {{ request('skill') === 'php' ? 'bg-primary text-white border-primary' : '' }}">PHP</a>
                                        <a href="?skill=javascript" class="px-3 py-2 rounded border border-slate-200 bg-white text-sm hover:bg-slate-50 {{ request('skill') === 'javascript' ? 'bg-primary text-white border-primary' : '' }}">JavaScript</a>
                                    </div>
                                </div>
                            </div> -->


                            <div class="flex flex-col gap-4 2xl:flex-row 2xl:items-center 2xl:justify-between">

                            <!-- Tabs -->
                            <ul role="tablist"
                                class="p-0.5 border w-full flex box mr-auto flex-col rounded-[0.6rem]
                                    border-slate-200 bg-white sm:flex-row 2xl:w-auto">

                                <li role="presentation"
                                    class="flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem]">
                                    <button
                                        class="active flex w-full items-center justify-center rounded-[0.6rem]
                                            h-10 px-4 text-sm font-medium text-slate-700 bg-white border border-slate-200 shadow-sm">
                                        Talent Pool
                                    </button>
                                </li>
                            </ul>

                            <!-- Search + Filters -->
                            <div class="flex flex-wrap items-center gap-2 w-full 2xl:w-auto">

                            <!-- Skill Filters -->
                                <div class="flex items-center gap-2">

                                    @foreach ($depts->take(4) as $d)

                                    <a href="?query={{$d?->name}}"
                                    class="h-10 inline-flex items-center px-4 rounded border text-sm
                                    {{ request('query') === $d?->name
                                            ? 'bg-primary text-white border-primary'
                                            : 'bg-white border-slate-200 hover:bg-slate-50' }}">
                                        {{$d?->name}}
                                    </a>

                                    @endforeach

                                    <div class="relative">
                                        <select name="depts" onchange="window.location.href='?query=' + this.value"
                                            class="h-10 px-4 rounded border border-slate-200 text-sm bg-white hover:bg-slate-50 cursor-pointer focus:ring-2 focus:ring-primary focus:outline-none">
                                            <option value="">All Departments</option>
                                            @foreach ($depts as $d)
                                                <option value="{{ $d?->name }}" {{ request('query') === $d?->name ? 'selected' : '' }}>
                                                    {{ $d?->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <!-- Search -->
                                <form method="GET" action="{{ url()->current() }}"
                                    class="flex items-center gap-2 w-full sm:w-auto">

                                    <input type="search" name="query" value="{{ request('query') }}"
                                        placeholder="Search talents..."
                                        class="h-10 w-full sm:w-64 px-3 rounded border border-slate-200
                                                text-sm focus:ring-2 focus:ring-primary focus:outline-none" />

                                    <button type="submit"
                                            class="h-10 inline-flex items-center gap-2 px-4
                                                bg-primary text-white rounded hover:opacity-90">
                                        <i data-lucide="search" class="w-4 h-4"></i>
                                        
                                    </button>
                                </form>

                                
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
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1"
                                    role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">

                                        @if ($talents != null)

                                        @foreach ($talents as $t)
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg cursor-pointer">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Verified Candidate
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Profile completion percentage - {{$t?->profile_completion_percentage}}%
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5">
                                                <button class="dropdown-toggle w-10 h-10 rounded-full bg-slate-200 dark:bg-darkmode-400 flex items-center justify-center overflow-hidden">
                                                    <img src="https://via.placeholder.com/50" alt="Profile" class="w-full h-full object-cover rounded-full" />
                                                </button>
                                                <!-- <div data-transition="" data-selector=".show"
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
                                                            Confirm</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Reschedule</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">

                                                <div class="flex items-center">
                                                    <div class="text-slate-500"> Name:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$t?->first_name}} {{$t?->last_name}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Skills:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$t?->professional_skills}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Languages:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$t?->languages}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Gender:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$t?->gender}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">DOB/AGE:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$t?->dob}}/{{$t?->age}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Years of Exp:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$t?->experience_yr}}
                                                    </div>
                                                </div>

                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Department:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$t?->department}}
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                No Talent yet.
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

</x-app-layout>
