<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
            <div class="mt-16 px-5">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="col-span-12">
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

                            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                <div class="text-base font-medium group-[.mode--light]:text-dark">
                                    Create
                                </div>

                            </div>
                            <div class="mt-3.5 flex flex-col gap-5 sm:flex-row">

                                <div class="w-full pb-10 overflow-hidden">
                                    <div class="flex flex-col w-full box box--stacked">
                                        <div class="flex flex-col p-5 gap-y-2 sm:flex-row sm:items-center">


                                        </div>
                                        <div class="mt-0.5 px-5">

                                            <div>
                                                <form action="{{route('admin.dept.create')}}" method="POST">
                                                    @csrf

                                                    <div class="mt-3">
                                                        <label data-tw-merge for="regular-form-6"
                                                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                            Department Name
                                                        </label>
                                                        <input data-tw-merge id="regular-form-6" name="name" type="text"
                                                            placeholder="Department"
                                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">

                                                    </div>

                                                    <div class="mt-3 flex flex-wrap gap-2">
                                                        <button data-tw-merge type="submit"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Create</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        <div
                                            class="flex flex-col items-center p-5 text-center text-slate-500/80 sm:flex-row sm:text-left">

                                            <div class="mt-2 sm:ml-auto sm:mt-0">
                                                Note this will create a new sector that candidates can choose from.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="overflow-auto xl:overflow-visible">
                                <table data-tw-merge="" class="w-full text-left border-b border-slate-200/60">
                                    <thead data-tw-merge="" class="">
                                        <tr data-tw-merge="" class="">

                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                No.
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                Name
                                            </td>

                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                Created At
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                Action
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($department as $d)
                                        <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">

                                                {{$loop->index += 1}}
                                            </td>

                                            <td id="show-{{ $d?->id }}" data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium" href="#">
                                                    {{ $d?->name ? $d?->name : "Not added yet" }}
                                                </a>
                                                <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                    {{ $d?->name ? $d?->name : "Not added yet" }}
                                                </div>
                                            </td>


                                            <td id="hide-{{ $d?->id }}" style="display: none;" data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">

                                                <form action="{{route('admin.dept.edit')}}" method="post">
                                                    @csrf

                                                    <div class="whitespace-nowrap text-xs text-slate-500">
                                                        <input type="text" name="name" value="{{ $d?->name }}" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 shadow-sm rounded-md">
                                                        <input type="hidden" name="id" value="{{ $d?->id }}" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 shadow-sm rounded-md">

                                                        <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Edit</button>
                                                    </div>

                                                </form>


                                            </td>


                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="ml-3.5">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        {{$d?->created_at}}
                                                    </a>
                                                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                        {{$d?->created_at->diffForHumans()}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-merge="" data-tw-placement="bottom-end"
                                                        class="dropdown relative h-5"><button data-tw-toggle="dropdown"
                                                            aria-expanded="false"
                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                data-tw-merge="" data-lucide="more-vertical"
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

                                                                <a href="javascript:void(0)"
                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item toggle-edit"
                                                                    data-id="{{ $d?->id }}">
                                                                    <i data-tw-merge="" data-lucide="check-square"
                                                                        class="stroke-[1] mr-2 h-4 w-4"></i> Edit
                                                                </a>
                                                                {{-- <a
                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                                                                        data-tw-merge="" data-lucide="trash2"
                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Delete</a> --}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @section('script')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Add click event to all Edit buttons
            document.querySelectorAll(".toggle-edit").forEach(function (button) {
                button.addEventListener("click", function () {
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

    @endsection

</x-app-layout>
