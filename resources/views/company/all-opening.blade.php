<x-app-layout>

    @section('title')
    <h1>Openings</h1>
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
                                        Active Openings
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

                                        @if ($openings != null)

                                        @foreach ($openings as $o)
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg cursor-pointer">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                 Openings Posted - {{$o?->created_at->format('d M, Y')}}
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Opening Title - {{$o?->title}}
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5">
                                                <button class="dropdown-toggle w-10 h-10 rounded-full bg-slate-200 dark:bg-darkmode-400 flex items-center justify-center overflow-hidden">
                                                    <img src="https://via.placeholder.com/50" alt="Profile" class="w-full h-full object-cover rounded-full" />
                                                </button>
                                               
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">

                                                <div class="flex items-center">
                                                    <div class="text-slate-500"> Status:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$o?->status}} 
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Salary:</div>
                                                    <div class="ml-auto text-slate-500">
                                                         {{$o?->currency}}, {{$o?->salary}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Open date:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$o?->open_date}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Application Deadline:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$o?->application_deadline}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Applicants:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$o?->applicants}}
                                                    </div>
                                                </div>
                                                

                                               

                                                <form action="#" method="post">

                                                  @csrf
                                                    <div class="w-full flex justify-center pt-4">
                                                        

                                                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary text-white rounded hover:opacity-90"
                                                        role="button" aria-label="Make request">

                                                            <button type="submit" class="inline-flex items-center justify-center gap-2">
                                                                <i data-lucide="send" class="w-4 h-4"></i>
                                                                Edit Opening
                                                            </button>
                                                         
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                No Openings Posted yet
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
