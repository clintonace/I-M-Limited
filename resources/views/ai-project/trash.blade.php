<x-app-layout>

    @section('title')
    <h1>Dashboard</h1>
    @endsection


    <x-slot name="content">



        @if (Auth::user()->is_ai == 1)

            <div
                    class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                    <div class="container">
                        <div class="grid grid-cols-12 gap-x-6 gap-y-10">

                            <div class="col-span-12 flex flex-col gap-y-10 2xl:col-span-9">

                            <!-- @if (Auth::user()->email != 'iandm.admin@gmail.com')

                                <x-admin-stats-component /> 

                            @endif -->
                                
                                <div>
                                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                        <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                                            Direktlinks
                                        </div>
                                    </div>
                                    <div class="box box--stacked mt-3.5">
                                        <div
                                            class="grid grid-cols-2 gap-y-5 border-b px-5 py-10 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7">
                                            <a class="flex flex-col items-center" target="blank" href="{{route('ai-project')}}">
                                                <div
                                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                                    <i data-tw-merge="" data-lucide="credit-card"
                                                        class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                                                </div>
                                                <div class="mt-3 text-slate-500">Ai Arbeitsbereich</div>
                                            </a>
                                            
                                            
                                        
                                        
                                            <a class="flex flex-col items-center" target="blank" href="{{route('ai.dashboard')}}">
                                                <div
                                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                                    <i data-tw-merge="" data-lucide="box"
                                                        class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                                                </div>
                                                <div class="mt-3 text-slate-500">Dashboard</div>
                                            </a>

                                        </div>
                                    
                                    </div>
                                </div>

                                {{-- Latest Files--}}

                                <div class="mt-3.5 flex flex-col gap-8">

                                    <div class="box box--stacked flex flex-col">
                                        <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                            <div>
                                                <div class="relative">

                                                    <form action="{{route('ai.mass.trash')}}" method="POST" >
                                                        @csrf
<!-- 
                                                        <input type="hidden" name="type" value="ai_files">
                                                        
                                                        <input data-tw-merge="" type="text" name="search" placeholder="Dateien suchen..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64"> -->

                                                        <button type="submit" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-success"
                                                        >
                                                        <i data-tw-merge="" data-lucide="trash"></i>
                                                            Mass delete
                                                        </button>
                                                        
                                                    </form>
                                                </div>

                                                
                                            </div>
                                            <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                            </div>
                                            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                                <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                                                    Neueste konvertierte Dateien
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table data-tw-merge="" class="min-w-full w-full text-center border-b border-slate-200/60">
                                                <thead>
                                                    <tr>
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                            Nummer
                                                        </td>
                                                    
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                            Ursprünglicher Name
                                                        </td>
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                            Txt
                                                        </td>
                                                    
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                            Status
                                                        </td>
                                                        
                                                            <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500 w-28">
                                                                Aktion
                                                            </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($results as $r)
                                                    @if ($r != null)

                                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">

                                                            {{$loop->index += 1}}
                                                        </td>

                                                    @php
                                                            $path = 'public/uploads/' . $r->file_name;
                                                            $url = asset('public/uploads/app/'.$r->file_name);
                                                    @endphp 

                                                    
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">

                                                        
                                                            @if($r?->status == 'deleted')
                                                                <span class="text-danger">File Deleted</span>
                                                            @else

                                                                <a class="whitespace-nowrap font-medium" target="_blank" href="{{route('ai.see.uploads', ['path' => $r?->file_name])}}">
                                                                    {{$r?->original_name}}
                                                                </a>
                                                        
                                                            @endif
                                                                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                        {{$r?->file_name}}
                                                                    </div>
                                                        </td>

                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">

                                                            @if($r?->status == 'deleted')
                                                                <span class="text-danger">File Deleted</span>
                                                            @else
                                                            <a href="{{route('ai.see.converted', ['path' => $r?->txt])}}" target="_blank" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-success"><i data-tw-merge="" data-lucide="eye" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                View</a>
                                                            @endif
                                                        </td>

                                                        
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                            @if ($r?->status == 'converted')

                                                            <div class="flex items-center justify-center text-success">
                                                                <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                                <div class="ml-1.5 whitespace-nowrap">
                                                                    Converted
                                                                </div>

                                                            </div>


                                                            @else
                                                            <div class="flex items-center justify-center text-danger">
                                                                <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                                <div class="ml-1.5 whitespace-nowrap">
                                                                    Not Converted
                                                                </div>

                                                            </div>

                                                            @endif
                                                        </td>
                                                        
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                            <div class="flex items-center justify-center">
                                                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                    </button>
                                                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                        <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                        
                                                                            <form action="{{route('ai.delete.converted')}}" method="post" onsubmit="return confirm('Are you sure you want to delete this file?');">
                                                                                @csrf
                                                                                <input type="hidden" name="id" value="{{$r?->id}}">
                                                                                <button type="submit" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger w-full text-left">
                                                                                    <i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete
                                                                                </button> 
                                                                            </form>
                                                                        {{--<a href=" " class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-success"><i data-tw-merge="" data-lucide="eye" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                View</a> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    @else

                                                    <div>No Converted Files yet!</div>
                                                    @endif

                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>

                                        <div class="mt-3.5 px-5 pb-5">
                                                {{$results->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        

        @else

        <x-body-header-component/>

        @endif

    </x-slot>

</x-app-layout>
