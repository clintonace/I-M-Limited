<div class="side-menu__content absolute inset-y-0 z-10 xl:top-[65px] xl:z-0">
    <div
        class="box xl:ml-0 border-y-0 border-l-0 rounded-none w-[275px] duration-300 transition-[width,margin] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] relative overflow-hidden h-full flex flex-col after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:z-[-1] after:xl:hidden group-[.side-menu--mobile-menu-open]:ml-0 group-[.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
        <div
            class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden [&.close-mobile-menu--mobile-menu-open]:flex hidden">
            <a class="ml-5 mt-5" href="#">
                <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8 text-white"></i>
            </a>
        </div>
        <div
            class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
            <ul class="scrollable">

                @if (Auth::user()->is_ai == '1')

                    <x-ai-admin-side-component/>

                    <li class="side-menu__divider">
                        Shutdown
                    </li>
                
                    <li>

                        <form action="{{route('ai-logout-action')}}" method="POST">

                            @csrf

                            <button class="side-menu__link" type="submit"> <i data-tw-merge="" data-lucide="power"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Logout</div>
                            </button>
                        </form>

                    </li>

                @endif

                @if (Auth::user()->is_ai != '1')
                    <!-- BEGIN: First Child -->
                    <li class="side-menu__divider">
                        DASHBOARDS
                    </li>
                    
                    <li>
                        <a href="{{route('dashboard')}}"
                            class="side-menu__link  {{Route::currentRouteName()== 'dashboard' ? 'side-menu__link--active': ''}}">
                            <i data-tw-merge="" data-lucide="activity-square"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">Dashboard</div>
                        </a>
                        <!-- BEGIN: Second Child -->
                        <!-- END: Second Child -->
                    </li>
                
                    @if (Auth::user() && Auth::user()->isAdmin())
                        <li class="side-menu__divider">
                            Manage Candidates
                        </li>

                        <li>
                            <a href="{{route('admin.all.candidates')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.all.candidates' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="user-square"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Candidates</div>
                                @if ($users->where('is_new', true)->where('code', 3188)->count() > 0)

                                <div class="side-menu__link__badge">
                                    {{$users->where('is_new', true)->where('code', 3188)->count()}}
                                </div>
                                @endif

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>

                        <li>
                            <a href="{{route('admin.all.companies')}}"
                                class="side-menu__link {{Route::currentRouteName()== 'admin.all.companies' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="building" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Companies</div>
                                @if ($users->where('is_new', true)->where('code', 3189)->count() > 0)

                                <div class="side-menu__link__badge">
                                    {{$users->where('is_new', true)->where('code', 3189)->count()}}
                                </div>
                                @endif
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>

                        <li>
                            <a href="{{route('admin.all.users')}}"
                                class="side-menu__link {{Route::currentRouteName()== 'admin.all.users' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Users On app</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                    
                        <li class="side-menu__divider">
                            Manage Requests/Events
                        </li>

                        <li>
                            <a href="{{route('admin.all.requests')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.all.requests' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="mail-check"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Requests</div>
                                @if ($requests->where('is_new', true)->count() > 0)

                                <div class="side-menu__link__badge">
                                    {{$requests->where('is_new', true)->count()}}
                                </div>
                                @endif
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('admin.book.event')}}" class="side-menu__link {{Route::currentRouteName()== 'admin.book.event' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="bell" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Book Event</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('admin.all.events')}}" class="side-menu__link {{Route::currentRouteName()== 'admin.all.events' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="play" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Events</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                
                        <li class="side-menu__divider">
                            Admin Tools
                        </li>

                        <li>
                            <a href="{{route('admin.dept.view')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.dept.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="layers"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Department</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('admin.hobby.view')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.hobby.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="zap"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Hobby</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('admin.skill.view')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.skill.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="target"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Skill</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>

                        <li class="side-menu__divider">
                            Broadcast Manager
                        </li>

                        <li>
                            <a href="{{route('admin.prompt.view')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.prompt.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="radio-tower"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Prompt</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('admin.prompt.view')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.prompt.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="radio-tower"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Broadcast(loading...)</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>

                        <li class="side-menu__divider">
                            Site Builder
                        </li>

                        <li>
                            <a href="{{route('admin.testimonies.view')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'admin.testimonies.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="chrome"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Testimony</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li class="side-menu__divider">
                            Shutdown
                        </li>
                

                        <li>

                            <form action="{{route('logout')}}" method="POST">

                                @csrf

                                <button class="side-menu__link" type="submit"> <i data-tw-merge="" data-lucide="power"
                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">
                                        Logout</div>
                                </button>
                            </form>

                        </li>

                    @endif

                    @if (Auth::user() && Auth::user()->isCandidate())
                        <li class="side-menu__divider">
                            Manage Profile
                        </li>
                        <li>
                            <a href="{{route('candidate.profile.view')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'candidate.profile.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="gantt-chart-square"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Update Profile</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('candidate.profile.display')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'candidate.profile.display' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Profile</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('candidate.events.display')}}"
                                class="side-menu__link  {{Route::currentRouteName()== 'candidate.events.display' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="bell" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Events</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li class="side-menu__divider">
                            Shutdown
                        </li>
                        <li>

                            <form action="{{route('logout')}}" method="POST">

                                @csrf

                                <button class="side-menu__link" type="submit"> <i data-tw-merge="" data-lucide="power"
                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">
                                        Logout</div>
                                </button>
                            </form>

                        </li>
                    @endif

                    @if (Auth::user() && Auth::user()->isEmployer())
                        <li class="side-menu__divider">
                            Manage Company
                        </li>

                        <li>
                            <a href="{{route('company.profile.view')}}"
                                class="side-menu__link {{Route::currentRouteName()== 'company.profile.view' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="building" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Company Profile Update</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                        <li>
                            <a href="{{route('company.profile.display')}}"
                                class="side-menu__link {{Route::currentRouteName()== 'company.profile.display' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Company Profile.</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                    
                        <li class="side-menu__divider">
                            Manage Events
                        </li>

                        <li>
                            <a href="{{route('company.events.display')}}"
                                class="side-menu__link {{Route::currentRouteName()== 'company.events.display' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="bell" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Events</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>
                    
                        <li class="side-menu__divider">
                            Manage Request
                        </li>

                        <li>
                            <a href="{{route('company.requests.display')}}"
                                class="side-menu__link {{Route::currentRouteName()== 'company.requests.display' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="hand" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Request</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>

                         <li class="side-menu__divider">
                            Manage Talents
                        </li>

                        <li>
                            <a href="{{route('company.talents.display')}}"
                                class="side-menu__link {{Route::currentRouteName()== 'company.talents.display' ? 'side-menu__link--active': ''}}">
                                <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Talents</div>

                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>

                        <li class="side-menu__divider">
                            Shutdown
                        </li>

                        <li>

                        <form action="{{route('logout')}}" method="POST">

                            @csrf

                            <button class="side-menu__link" type="submit"> <i data-tw-merge="" data-lucide="power"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Logout</div>
                            </button>
                        </form>

                        </li>

                    @endif

                @endif


                
            </ul>
        </div>
    </div>
</div>