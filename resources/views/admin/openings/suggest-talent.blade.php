<x-app-layout>

    @section('title')
    <h1>Talents</h1>
    @endsection


    <x-slot name="content">

        <div class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <x-admin-stats-component />

                        <div class="mt-3.5 flex flex-col gap-8">

                        

                           

                            <div class="box box--stacked flex flex-col">
                                <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                    <div>
                                        <div class="relative">
                                            <i data-tw-merge="" data-lucide="search" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                            <input data-tw-merge="" type="text" placeholder="Search users..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64">
                                        </div>
                                    </div>
                                    <div class="mx-auto flex items-center justify-center">
                                        <div class="ml-1.5 whitespace-nowrap">

                                        Selected talents will be suggested for opening:
                                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-slate-100 dark:bg-darkmode-600 text-xxl text-slate-700 dark:text-slate-300">
                                                    {{$opening?->title}} 
                                                </span>
                                        Click "Suggest Selected Talents" to proceed.        
                                        </div>
                                    </div>
                                <form method="POST" action="{{route('admin.suggest.talents.to.company')}}" >

                                 <!-- hidden opening id -->
                                 <input type="hidden" name="opening_id" value="{{ $opening->id }}">

                                    <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                        <button type="submit"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 border-secondary text-slate-500 hover:bg-secondary/20 w-full sm:w-auto">
                                            <i data-lucide="send" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            Suggest Selected Talents
                                        </button>

                                    </div>
                                </div>
                                 @csrf
                                    <div class="overflow-auto xl:overflow-visible">
                                        <table data-tw-merge="" class="w-full text-left border-b border-slate-200/60">
                                            <thead data-tw-merge="" class="">
                                                <tr data-tw-merge="" class="">

                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                        Tick
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                        Name
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                        Position
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 w-52 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                        Profile Completeness
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                        Status
                                                    </td>
                                                    
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                        Joined Date
                                                    </td>
                                                    <!-- <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                        Action
                                                    </td> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)

                                                @php
                                                    $isSuggested = in_array($user->id, $suggestedUserIds);
                                                @endphp
                                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">

                                                        <div class="flex items-center justify-center text-danger">
                                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                            <div class="ml-1.5 whitespace-nowrap">
                                                                <span
                                                                    class="inline-flex items-center px-3 py-1 rounded-full bg-slate-100 dark:bg-darkmode-600 text-xs text-slate-700 dark:text-slate-300 select-label">
                                                                    {{ $isSuggested ? 'Deselect' : 'Select' }}
                                                                </span>
                                                            </div>
                                                            <label class="toggle-switch">
                                                                <input
                                                                        type="checkbox"
                                                                        name="users[]"
                                                                        value="{{ $user->id }}"
                                                                        {{ $isSuggested ? 'checked' : '' }}
                                                                        onchange="toggleLabel(this)"
                                                                    >
                                                                <span class="slider"></span>
                                                            </label> 
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                                        <div class="flex items-center">
                                                            <div class="image-fit zoom-in h-9 w-9">
                                                                <img data-placement="top" title="{{$user?->name}}" src="{{$user?->info?->image}}" alt="codeBrowns" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="ml-3.5">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    {{$user?->name}}
                                                                </a>
                                                                <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                    {{$user?->email}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                        <a class="whitespace-nowrap font-medium" href="#">
                                                            {{$user?->info?->department ? $user?->info?->department : "Not added yet" }}
                                                        </a>
                                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                            {{$user?->info?->department ? $user?->info?->department : "Not added yet" }}
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                        <div class="w-40">
                                                            <div class="text-xs text-slate-500">
                                                                {{$user?->info?->profile_completion_percentage ? $user?->info?->profile_completion_percentage : 0}}%
                                                            </div>
                                                            <div class="mt-1.5 flex h-1 rounded-sm border bg-slate-50">
                                                                <div class="first:rounded-l-sm last:rounded-r-sm border border-primary/20 -m-px bg-primary/90 w-[{{$user?->info?->profile_completion_percentage}}%]"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                        @if ($user?->info?->is_active == 1)

                                                        <div class="flex items-center justify-center text-success">
                                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                            <div class="ml-1.5 whitespace-nowrap">
                                                                Active
                                                            </div>
                                                            {{-- <label class="toggle-switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label> --}}
                                                        </div>


                                                        @else
                                                        <div class="flex items-center justify-center text-danger">
                                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                            <div class="ml-1.5 whitespace-nowrap">
                                                                Inactive
                                                            </div>
                                                            {{-- <label class="toggle-switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label> --}}
                                                        </div>

                                                        @endif
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                        <div class="ml-3.5">
                                                            <a class="whitespace-nowrap font-medium" href="#">
                                                                {{$user?->created_at}}
                                                            </a>
                                                            <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                {{$user?->created_at->diffForHumans()}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </form>


                                <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                                    <form action="{{route('admin.suggest.talents.to.company')}}" method="get">
                                        @csrf

                                        <button type="submit"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 border-secondary text-slate-500 hover:bg-secondary/20 w-full sm:w-auto">
                                            <i data-lucide="check" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            Confirm
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
    function toggleLabel(checkbox) {
        const label = checkbox
            .closest('div')
            .querySelector('.select-label');

        label.textContent = checkbox.checked ? 'Deselect' : 'Select';
    }
</script>

    </x-slot>

</x-app-layout>
