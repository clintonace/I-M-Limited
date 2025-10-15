<x-app-layout>

    @section('title')
    <h1>AI Admins</h1>
    @endsection


    <x-slot name="content">

        @if (Auth::user()->is_ai == 1)

            <div
                    class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                    <div class="container">
                        <div class="grid grid-cols-12 gap-x-6 gap-y-10">

                            <div class="col-span-12 flex flex-col gap-y-10 2xl:col-span-9">

                         
                                
                                <div>
                                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                        <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                                            Quick Links
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
                                                <div class="mt-3 text-slate-500">Ai Work Area</div>
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

                                {{-- Latest Admins--}}

                                <div class="mt-3.5 flex flex-col gap-8">

                                    <div class="box box--stacked flex flex-col">
                                        <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                            <div>
                                                <div class="relative">
                                                    <i data-tw-merge="" data-lucide="search" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <input data-tw-merge="" type="text" placeholder="Search admins..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64">
                                                </div>

                                                
                                            </div>
                                            <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                            </div>
                                            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                                <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                                                    <!-- Admins & Sub-admins  -->

                                                    <a href="{{route('ai.create-view')}}" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger w-full text-left"
                                                            target="_blank" rel="noopener noreferrer">
                                                        <i data-tw-merge="" data-lucide="plus" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Create User
                                                    </a>
                                                    <!-- <button type="submit" >
                                                                                    
                                                                                    Create user
                                                    </button>  -->
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table data-tw-merge="" class="min-w-full text-center border-b border-slate-200/60">
                                                <thead>
                                                    <tr>
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                            No.
                                                        </td>
                                                    
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                             Name
                                                        </td>
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                            Email
                                                        </td>
                                                    
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                            Role
                                                        </td>
                                                       
                                                        <td class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500 w-28">
                                                            Action
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($admins as $admin)
                                                    @if ($admin != null)

                                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                            {{$loop->index += 1}}
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                            {{$admin?->name}}
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                            {{$admin?->email}}
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                            <ul>
                                                                @foreach ($admin?->roles as $role)
                                                                <li>
                                                                    <span class="badge badge-primary mr-1 mb-1">{{$role?->name}}</span>
                                                                </li>
                                                                @endforeach 
                                                            </ul>
                                                        </td>

                                                   
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                            <div class="flex items-center justify-center">
                                                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                    </button>
                                                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                        <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                        
                                                                            <form action="{{route('ai.delete.converted')}}" method="post" onsubmit="return confirm('Are you sure you want to delete this file?');">
                                                                                @csrf
                                                                                <input type="hidden" name="id" value="{{$admin?->id}}">
                                                                                <button type="submit" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger w-full text-left">
                                                                                    <i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Assign Role
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

                                                    <div>No admin yet!</div>
                                                    @endif

                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>

                                        <div class="mt-3.5 px-5 pb-5">
                                                {{$admins->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        @endif

        
    </x-slot>

</x-app-layout>
