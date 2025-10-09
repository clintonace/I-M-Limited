<x-app-layout>

    @section('title')
    <h1>AI Admins</h1>
    @endsection

    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
            <div class="mt-16 px-5">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="col-span-12">
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


                            
                            <div class="mt-3.5 flex flex-col gap-5 sm:flex-row">

                                <div class="w-full pb-10 overflow-hidden">
                                    <div class="flex flex-col w-full box box--stacked">
                                        <div class="flex flex-col p-5 gap-y-2 sm:flex-row sm:items-center">


                                        </div>

                                        
                                        <div class="mt-0.5 px-5">

                                            <div>

                                            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                                <div class="text-base font-bold group-[.mode--light]:text-dark">
                                                    <h1>Create new User</h1>
                                                </div>

                                            </div>
                                                <form action="{{route('ai.create.admin')}}" method="POST">
                                                    @csrf

                                                    <div class="grid grid-cols-2 gap-4">

                                                        
                                                            <div class="mt-3">
                                                                <label data-tw-merge for="regular-form-6"
                                                                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                    Name
                                                                </label>
                                                                <input data-tw-merge id="regular-form-6" name="name" type="text"
                                                                    placeholder="Enter name"
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">

                                                            </div>
                                                       
                                                            <div class="mt-3">
                                                                <label data-tw-merge for="regular-form-6"
                                                                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                    Email
                                                                </label>
                                                                <input data-tw-merge id="regular-form-6" name="email" type="email"
                                                                    placeholder="Enter Email"
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">

                                                            </div>

                                                            <div class="mt-3">
                                                                <label data-tw-merge for="regular-form-6"
                                                                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                    Set a temporal Password
                                                                </label>
                                                                <input data-tw-merge id="regular-form-6" name="password" type="password"
                                                                    placeholder="Enter password"
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">

                                                            </div>

                                                            <div class="mt-3">
                                                                <label data-tw-merge for="regular-form-6"
                                                                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                    Assigne Role
                                                                </label>

                                                                <select name="role_id" 
                                                                 class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">

                                                                <option selected disabled> Choose a Role</option>
                                                                    @foreach($roles as $role)
                                                                        <option value="{{$role?->id}}">{{$role?->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                
                                                            </div>
                                                        
                                                    </div>

                                                    <div class="mt-3 flex flex-wrap gap-2">
                                                        <button data-tw-merge type="submit"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Create</button>
                                                    </div>
                                                </form>

                                                <div class="pt-4">
                                                    <div class="mt-2 sm:ml-auto sm:mt-0">
                                                        Note this will create a new user and a mail will be sent to the new user to set password and operate this AI Tool within the permissions assigned to them.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        
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
