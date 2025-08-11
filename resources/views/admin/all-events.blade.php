<x-app-layout>

    @section('title')
    <h1>Events</h1>
    @endsection


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <div class="box box--stacked flex flex-col p-1.5">
                            {{--
                            <x-company-head-component /> --}}

                            <x-admin-stats-component />

                        </div>
                        <div class="mt-10">
                            <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                                <ul data-tw-merge="" role="tablist"
                                    class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">

                                    <li id="example-1-tab" data-tw-merge="" role="presentation"
                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                        <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Event</button>
                                    </li>

                                </ul>

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

                                        @if ($bookings != null)

                                        @foreach ($bookings as $booking)

                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Booked Event, Event ID #{{$booking?->id}}
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
                                                        {{$booking?->created_at->diffForHumans()}}
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
