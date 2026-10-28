<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
            <div class="mt-16 px-5">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="col-span-12">


                            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                <div class="text-base font-medium group-[.mode--light]:text-dark">
                                    Edit Free Time
                                </div>

                            </div>
                            {{-- <div class="mt-3.5 flex flex-col gap-5 sm:flex-row">

                                <div class="w-full pb-10 overflow-hidden">
                                    <div class="flex flex-col w-full box box--stacked">
                                        <div class="flex flex-col p-5 gap-y-2 sm:flex-row sm:items-center">


                                        </div>
                                        <div class="mt-0.5 px-5">

                                            <div>

                                                <form action="{{ route('admin.mk.freetime') }}" method="POST">
                                                    @csrf

                                                    <!-- Day of Week -->
                                                    <div class="mt-3">
                                                        <label for="day_of_week" class="inline-block mb-2">
                                                            Day of Week
                                                        </label>

                                                        <select id="day_of_week" name="day_of_week" required
                                                            class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                            <option value="">Choose a day</option>
                                                            <option value="1">Monday</option>
                                                            <option value="2">Tuesday</option>
                                                            <option value="3">Wednesday</option>
                                                            <option value="4">Thursday</option>
                                                            <option value="5">Friday</option>
                                                            <option value="6">Saturday</option>
                                                            <option value="7">Sunday</option>
                                                        </select>
                                                    </div>

                                                    <!-- Start Time -->
                                                    <div class="mt-3">
                                                        <label for="start_time" class="inline-block mb-2">
                                                            Start Time
                                                        </label>


                                                        <select id="start_time" name="start_time" required
                                                            class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                            <option value="">Choose a time</option>
                                                            <option value="01:00">1:00 AM</option>
                                                            <option value="02:00">2:00 AM</option>
                                                            <option value="03:00">3:00 AM</option>
                                                            <option value="04:00">4:00 AM</option>
                                                            <option value="05:00">5:00 AM</option>
                                                            <option value="06:00">6:00 AM</option>
                                                            <option value="07:00">7:00 AM</option>
                                                            <option value="08:00">8:00 AM</option>
                                                            <option value="09:00">9:00 AM</option>
                                                            <option value="10:00">10:00 AM</option>
                                                            <option value="11:00">11:00 AM</option>
                                                            <option value="12:00">12:00 PM</option>
                                                            <option value="13:00">1:00 PM</option>
                                                            <option value="14:00">2:00 PM</option>
                                                            <option value="15:00">3:00 PM</option>
                                                            <option value="16:00">4:00 PM</option>
                                                            <option value="17:00">5:00 PM</option>
                                                            <option value="18:00">6:00 PM</option>
                                                            <option value="19:00">7:00 PM</option>
                                                            <option value="20:00">8:00 PM</option>
                                                            <option value="21:00">9:00 PM</option>
                                                            <option value="22:00">10:00 PM</option>
                                                            <option value="23:00">11:00 PM</option>
                                                            <option value="24:00">12:00 AM</option>
                                                        </select>


                                                    </div>

                                                    <!-- End Time -->
                                                    <div class="mt-3">
                                                        <label for="end_time" class="inline-block mb-2">
                                                            End Time
                                                        </label>

                                                        <select id="end_time" name="end_time" required
                                                            class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                            <option value="">Choose an end time</option>
                                                        </select>
                                                    </div>

                                                    <!-- Slot Duration -->
                                                    <div class="mt-3">
                                                        <label for="duration_minutes" class="inline-block mb-2">
                                                            Slot Duration
                                                        </label>

                                                        <select id="duration_minutes" name="duration_minutes" required
                                                            class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                            <option value="30">30 minutes</option>
                                                            <option value="60" selected>60 minutes</option>
                                                            <option value="90">90 minutes</option>
                                                            <option value="120">120 minutes</option>
                                                        </select>
                                                    </div>

                                                    <!-- Active Status -->
                                                    <div class="mt-3">
                                                        <label for="is_active" class="inline-block mb-2">
                                                            Status
                                                        </label>

                                                        <select id="is_active" name="is_active" required
                                                            class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                            <option value="1" selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>

                                                    <!-- Submit -->
                                                    <div class="mt-3 flex flex-wrap gap-2">
                                                        <button type="submit"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer bg-primary border-primary text-white w-24">
                                                            Create
                                                        </button>
                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                        <div
                                            class="flex flex-col items-center p-5 text-center text-slate-500/80 sm:flex-row sm:text-left">

                                            <div class="mt-2 sm:ml-auto sm:mt-0">
                                                Note this will create a new free time that clients can work with.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div> --}}

                            <div class="mt-3.5 flex flex-col gap-8">

                                <div class="box box--stacked flex flex-col">
                                    <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="relative">
                                                {{-- <i data-tw-merge="" data-lucide="search"
                                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i> --}}
                                                <h1>Edit time in whole number eg. 12:00.</h1>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                            {{-- <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto"><i data-tw-merge="" data-lucide="download" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                Export
                                                <i data-tw-merge="" data-lucide="chevron-down" class="ml-2 h-4 w-4 stroke-[1.3]"></i></button>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-bar-chart" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        PDF</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-bar-chart" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        CSV</a>
                                                </div>
                                            </div>
                                            </div> --}}

                                        </div>
                                    </div>

                                    <div class="overflow-auto xl:overflow-visible">
                                        <table class="w-full text-left border-b border-slate-200/60">
                                            <thead>
                                                <tr>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        No.
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Day
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Start Time
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        End Time
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Duration
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                        Slots
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                        Slots Taken
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                        Status
                                                    </td>
                                                    {{-- <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Created Date
                                                    </td> --}}

                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Actions
                                                    </td>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($freetimes as $freetime)
                                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-darkmode-700">

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ $loop->iteration }}
                                                        </td>



                                                        <!-- Clickable Day -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <a href="{{ route('admin.this.freetime', ['freetime' => $freetime?->id]) }}"
                                                                {{-- onclick="event.preventDefault(); alert('Selected day: {{ $freetime->day_name }}');" --}}
                                                                class="font-medium text-success hover:underline">
                                                                {{ $freetime->day_name }}
                                                            </a>
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ \Carbon\Carbon::parse($freetime->start_time)->format('g:i A') }}
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ \Carbon\Carbon::parse($freetime->end_time)->format('g:i A') }}
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ $freetime->duration_minutes }} minutes
                                                        </td>

                                                        <!-- Dummy Slots: Red -->
                                                        <td class="px-5 border-b border-dashed py-4 text-center">
                                                            @php
                                                                $start = \Carbon\Carbon::parse($freetime->start_time);
                                                                $end = \Carbon\Carbon::parse($freetime->end_time);
                                                                $duration = (int) $freetime->duration_minutes;

                                                                $totalSlots =
                                                                    $duration > 0 && $end->gt($start)
                                                                        ? (int) floor(
                                                                            $start->diffInMinutes($end) / $duration,
                                                                        )
                                                                        : 0;
                                                            @endphp

                                                            <span
                                                                class="inline-flex items-center justify-center min-w-9 text-danger rounded-md bg-red-100 px-3 py-1 font-semibold text-red-700">
                                                                {{ $totalSlots }}
                                                            </span>
                                                        </td>

                                                        <!-- Dummy Slots Taken: Green -->
                                                        <td class="px-5 border-b border-dashed py-4 text-center">
                                                            <span
                                                                class="inline-flex text-success items-center justify-center min-w-9 rounded-md bg-green-100 px-3 py-1 font-semibold text-green-700">
                                                                {{ $freetime->slots_taken }}
                                                            </span>
                                                        </td>

                                                        <!-- Active Status -->
                                                        <td class="px-5 border-b border-dashed py-4 text-center">
                                                            @if ($freetime->is_active)
                                                                <span
                                                                    class="inline-flex items-center text-success rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                                                                    Active
                                                                </span>
                                                            @else
                                                                <span
                                                                    class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                                                    Inactive
                                                                </span>
                                                            @endif
                                                        </td>

                                                        {{-- <td class="px-5 border-b border-dashed py-4">
                                                            <div class="font-medium">
                                                                {{ $freetime->created_at?->format('d M Y') ?? 'N/A' }}
                                                            </div>
                                                            <div class="mt-0.5 text-xs text-slate-500">
                                                                {{ $freetime->created_at?->diffForHumans() ?? '' }}
                                                            </div>
                                                        </td> --}}

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <button type="button" data-tw-toggle="modal"
                                                                data-tw-target="#free-time-modal-{{ $freetime->id }}"
                                                                class="text-primary hover:underline">
                                                                Edit
                                                            </button>
                                                        </td>

                                                    </tr>

                                                    <!-- The Modal -->
                                                    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                                                        id="free-time-modal-{{ $freetime->id }}"
                                                        class="modal p-4 group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 z-[9999] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">

                                                        <div
                                                            class="w-[50%] max-w-[100px] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 sm:w-[560px] p-8"
                                                            style= "padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                                                            <div class="flex items-center justify-between mb-6">
                                                                <h4 class="text-lg font-semibold text-slate-800">
                                                                    Edit Free Time
                                                                </h4>

                                                                <button type="button" data-tw-dismiss="modal"
                                                                    aria-label="Close"
                                                                    class="text-2xl text-slate-500 hover:text-slate-800">
                                                                    &times;
                                                                </button>
                                                            </div>

                                                            <form
                                                                action="{{ route('new.edit.freetime', ['id' => $freetime->id]) }}"
                                                                method="POST" class="space-y-5">

                                                                @csrf

                                                                <div class="text-left">
                                                                    <label class="inline-block mb-2">Day</label>
                                                                    <select name="day_of_week" required
                                                                        class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                                        @foreach ([
                                                                                        1 => 'Monday',
                                                                                        2 => 'Tuesday',
                                                                                        3 => 'Wednesday',
                                                                                        4 => 'Thursday',
                                                                                        5 => 'Friday',
                                                                                        6 => 'Saturday',
                                                                                        7 => 'Sunday',
                                                                                    ] as $day => $name)
                                                                            <option value="{{ $day }}"
                                                                                {{ $freetime->day_of_week == $day ? 'selected' : '' }}>
                                                                                {{ $name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="text-left">
                                                                    <label class="inline-block mb-2">Start Time</label>
                                                                    <input type="time" name="start_time"
                                                                        value="{{ substr($freetime->start_time, 0, 5) }}"
                                                                        required
                                                                        class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                                </div>

                                                                <div class="text-left">
                                                                    <label class="inline-block mb-2">End Time</label>
                                                                    <input type="time" name="end_time"
                                                                        value="{{ substr($freetime->end_time, 0, 5) }}"
                                                                        required
                                                                        class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                                </div>

                                                                <div class="text-left">
                                                                    <label class="inline-block mb-2">Duration
                                                                        (minutes)</label>
                                                                    <input type="number" name="duration_minutes"
                                                                        value="{{ $freetime->duration_minutes }}"
                                                                        min="1" required
                                                                        class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                                </div>

                                                                <div class="text-left">
                                                                    <label class="inline-block mb-2">Status</label>
                                                                    <select name="is_active"
                                                                        class="transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent">
                                                                        <option value="1"
                                                                            {{ $freetime->is_active ? 'selected' : '' }}>
                                                                            Active
                                                                        </option>
                                                                        <option value="0"
                                                                            {{ !$freetime->is_active ? 'selected' : '' }}>
                                                                            Inactive
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                                <div class="flex justify-end gap-3 pt-2">
                                                                    <button type="button" data-tw-dismiss="modal"
                                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-4 rounded-md font-medium cursor-pointer">
                                                                        Cancel
                                                                    </button>

                                                                    <button type="submit"
                                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-4 rounded-md font-medium cursor-pointer bg-primary border-primary text-white">
                                                                        Save Changes
                                                                    </button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                   

                                                    {{-- @endforeach --}}
                                                @empty
                                                    <tr>
                                                        <td colspan="9"
                                                            class="px-5 py-8 text-center text-slate-500">
                                                            No free times have been created yet.
                                                        </td>
                                                    </tr>

                                                    <!-- Edit Button -->

                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>



                                    <div
                                        class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                                        <nav class="mr-auto w-full flex-1 sm:w-auto">
                                            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevrons-left"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevron-left"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevron-right"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevrons-right"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <select data-tw-merge=""
                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @section('script')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Add click event to all Edit buttons
                document.querySelectorAll(".toggle-edit").forEach(function(button) {
                    button.addEventListener("click", function() {
                        const id = this.getAttribute("data-id"); // Get the unique ID for the row
                        const showElement = document.getElementById(`show-${id}`);
                        const hideElement = document.getElementById(`hide-${id}`);

                        // Toggle visibility
                        if (showElement.style.display === "none") {
                            showElement.style.display = "";
                            hideElement.style.display = "none";
                        } else {
                            showElement.style.display = "none";
                            hideElement.style.display = "";
                        }
                    });
                });
            });
        </script>



        <script>
            const startTime = document.getElementById('start_time');
            const endTime = document.getElementById('end_time');

            function getTimeLabel(hour) {
                const displayHour = hour % 12 || 12;
                const period = hour >= 12 ? 'PM' : 'AM';

                return `${displayHour}:00 ${period}`;
            }

            function getTimeValue(hour) {
                return `${String(hour % 24).padStart(2, '0')}:00`;
            }

            startTime.addEventListener('change', function() {
                endTime.innerHTML =
                    '<option value="">Choose an end time</option>';

                if (!this.value) return;

                const [startHour, startMinute] = this.value.split(':').map(Number);
                const startMinutes = startHour * 60 + startMinute;

                for (let hour = 0; hour < 24; hour++) {
                    const endMinutes = hour * 60;

                    if (endMinutes <= startMinutes) continue;

                    const value = getTimeValue(hour);
                    endTime.add(new Option(getTimeLabel(hour), value));
                }
            });
        </script>


        <script>
            function openFreeTimeModal(modalId) {
                const modal = document.getElementById(modalId);

                if (modal) {
                    modal.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeFreeTimeModal(modalId) {
                const modal = document.getElementById(modalId);

                if (modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = '';
                }
            }

            // Close when clicking the dark background
            document.querySelectorAll('.free-time-modal').forEach(function(modal) {
                modal.addEventListener('click', function(event) {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                        document.body.style.overflow = '';
                    }
                });
            });

            // Close when pressing Escape
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    document.querySelectorAll('.free-time-modal').forEach(function(modal) {
                        modal.style.display = 'none';
                    });

                    document.body.style.overflow = '';
                }
            });
        </script>
    @endsection

</x-app-layout>
