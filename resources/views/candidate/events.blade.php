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

                                                        <form title="Confirm your meeting." action="{{ route('candidate.confirm.meeting', [Auth::user()->id, $booking?->id]) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                <i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                Confirm
                                                            </button>
                                                        </form>

                                                        <form title="You can only reschedule 3 times." action="{{ route('candidate.reschedule.mail', [Auth::user()->id, $booking?->id]) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                <i data-tw-merge="" data-lucide="refresh-ccw"  class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                Reschedule
                                                            </button>
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
                                                    <div class="text-slate-500">Participants:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                                {{$booking?->participants}}
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Start Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$booking?->start_date}}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">End Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        {{$booking?->end_date}}
                                                    </div>
                                                </div>
                                                {{-- <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atMeryl Streep"
                                                                    src="/dash/dist/images/users/user2-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atCate Blanchett"
                                                                    src="/dash/dist/images/users/user8-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atAngelina Jolie"
                                                                    src="/dash/dist/images/users/user4-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atLeonardo DiCaprio"
                                                                    src="/dash/dist/images/users/user3-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (76+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Meeting Link:</div>
                                                    <div class="ml-auto">
                                                        <p id="meeting-link" style="cursor: copy" onclick="copyToClipboard()" title="copy" class="block w-40 whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="{{$booking?->link}}">
                                                            {{$booking?->link}}
                                                    </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- Request --}}
                                {{--
                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-4"
                                    role="tabpanel" aria-labelledby="example-4-tab" class="tab-pane">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user4-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Angelina Jolie
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        San Francisco, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        July 10, 2012
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Account Management
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Account Executive
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    73+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user1-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Tom Hanks
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        New York, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        January 15, 2010
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Sales Department
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Sales Manager
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    82+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user7-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Johnny Depp
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Denver, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        October 7, 2013
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Product Management
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Product Manager
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    54+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user5-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Brad Pitt
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Seattle, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        September 3, 2016
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Data Analytics
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Data Analyst
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    77+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user6-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Jennifer Lawrence
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Miami, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        February 18, 2019
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            CRM Team
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            CRM Administrator
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    66+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user10-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Julia Roberts
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Austin, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        August 9, 2014
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Engineering
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Software Engineer
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    22+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user3-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Leonardo DiCaprio
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Chicago, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        May 5, 2018
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Support Team
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Support Specialist
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    91+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user8-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Cate Blanchett
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Houston, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        June 12, 2017
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Project Management
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Project Manager
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    44+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
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
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user2-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Meryl Streep
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Los Angeles, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        March 22, 2015
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Marketing Department
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Marketing Coordinator
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    29+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>



</x-app-layout>
