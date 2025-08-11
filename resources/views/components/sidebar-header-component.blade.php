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
                <!-- BEGIN: First Child -->
                <li class="side-menu__divider">
                    DASHBOARDS
                </li>
                {{-- <li>
                    <a href="dagger-dashboard-overview-1.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="gauge-circle"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">E-Commerce</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> --}}
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
                {{-- <li>
                    <a href="dagger-dashboard-overview-3.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="album" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Hospital</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-dashboard-overview-4.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="book-marked"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Factory</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-dashboard-overview-5.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="hard-drive"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Banking</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-dashboard-overview-6.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="mouse-pointer-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Cafe</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-dashboard-overview-7.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="shield-half"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Crypto</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-dashboard-overview-8.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="building" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Hotel</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> --}}
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
                @endif

                @if (Auth::user() && Auth::user()->isAdmin())
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
                @endif

                @if (Auth::user() && Auth::user()->isAdmin())
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

                @endif

                @if (Auth::user() && Auth::user()->isAdmin())
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

                @endif

                @if (Auth::user() && Auth::user()->isAdmin())
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
                @endif

                @if (Auth::user() && Auth::user()->isEmployer())
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
                @endif
                @if (Auth::user() && Auth::user()->isEmployer())
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

                @endif


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

                {{-- <li>
                    <a href="dagger-inbox.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="gantt-chart-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Inbox</div>
                        <div class="side-menu__link__badge">
                            4
                        </div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> --}}

                {{-- @if (auth::user()->isAdmin())
                <li class="side-menu__divider">
                    Manage Candidates
                </li>

                <li>
                    <a href="#" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="gantt-chart-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">All Candidates</div>
                    </a>

                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                @endif --}}

                {{-- <li>
                    <a href="#" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="panel-right-inactive"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">File Manager List</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="#" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="panel-top-close"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">File Manager Grid</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="#" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="panel-top-inactive"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Point of Sale</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="#" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="mail-open"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Chat</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="#" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="calendar-range"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Calendar</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> --}}
                {{-- <li class="side-menu__divider">
                    UI WIDGETS
                </li>
                <li>
                    <a href="dagger-creative.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="album" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Creative</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-dynamic.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="activity-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Dynamic</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-interactive.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="keyboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Interactive</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    USER MANAGEMENT
                </li>
                <li>
                    <a href="dagger-users.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="user-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Users</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-departments.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="cake-slice"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Departments</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-add-user.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="package-plus"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Add User</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    PERSONAL DASHBOARD
                </li>
                <li>
                    <a href="dagger-profile-overview.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="presentation"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Profile Overview</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-profile-overview-events.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="calendar-range"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Events</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-profile-overview-achievements.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="medal" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Achievements</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-profile-overview-contacts.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="tablet-smartphone"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Contacts</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-profile-overview-default.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="snail" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Default</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    GENERAL SETTINGS
                </li>
                <li>
                    <a href="dagger-settings.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="briefcase"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Profile Info</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-email-settings.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="mail-check"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Email Settings</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-security.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="fingerprint"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Security</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-preferences.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="radar" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Preferences</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-two-factor-authentication.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="door-open"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Two-factor Authentication</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-device-history.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="keyboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Device History</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-notification-settings.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="ticket" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Notification Settings</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-connected-services.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="bus-front"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Connected Services</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-social-media-links.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="podcast" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Social Media Links</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-settings-account-deactivation.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="package-x"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Account Deactivation</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    ACCOUNT
                </li>
                <li>
                    <a href="dagger-billing.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="percent-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Billing</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-invoice.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="database-zap"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Invoice</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    E-COMMERCE
                </li>
                <li>
                    <a href="dagger-categories.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="book-marked"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Categories</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-add-product.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="compass" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Add Product</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="table2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Products</div>
                        <i data-tw-merge="" data-lucide="chevron-down"
                            class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="dagger-product-list.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="layout-panel-top"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Product List
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="dagger-product-grid.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="layout-panel-left"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Product Grid
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="sigma-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Transactions</div>
                        <i data-tw-merge="" data-lucide="chevron-down"
                            class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="dagger-transaction-list.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="divide-square"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Transaction List
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="dagger-transaction-detail.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="plus-square"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Transaction Detail
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="file-archive"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Sellers</div>
                        <i data-tw-merge="" data-lucide="chevron-down"
                            class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="dagger-seller-list.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="file-image"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Seller List
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="dagger-seller-detail.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="file-box"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Seller Detail
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-reviews.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="goal" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Reviews</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    AUTHENTICATIONS
                </li>
                <li>
                    <a href="dagger-login.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="book-key" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Login</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-register.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="book-lock"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Register</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    COMPONENTS
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="layout-panel-left"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Table</div>
                        <i data-tw-merge="" data-lucide="chevron-down"
                            class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="dagger-regular-table.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="flip-vertical"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Regular Table
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="dagger-tabulator.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="flip-horizontal"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Tabulator
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="memory-stick"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Overlay</div>
                        <i data-tw-merge="" data-lucide="chevron-down"
                            class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="dagger-modal.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="menu-square"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Modal
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="dagger-slideover.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="newspaper"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Slide Over
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="dagger-notification.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="panel-bottom"
                                    class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Notification
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-tab.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="package2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Tab</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-accordion.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="pocket" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Accordion</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-button.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="plus-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Button</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-alert.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="presentation"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Alert</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-progress-bar.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="shield-ellipsis"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Progress Bar</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-tooltip.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="clapperboard"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Tooltip</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-dropdown.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="flip-vertical"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Dropdown</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-typography.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="file-type2"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Typography</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-icon.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="aperture" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Icon</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-loading-icon.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="droplets" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Loading Icon</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-regular-form.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="gallery-horizontal-end"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Regular Form</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-datepicker.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="microwave"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Datepicker</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-tom-select.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="disc3" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Tom Select</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-file-upload.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="sandwich" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">File Upload</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-wysiwyg-editor.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="hop-off" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Wysiwyg Editor</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-validation.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="clipboard-type"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Validation</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-chart.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="pie-chart"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Chart</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-slider.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="kanban-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Slider</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="dagger-image-zoom.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="image" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Image Zoom</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
                <!-- END: First Child --> --}}
            </ul>
        </div>
    </div>
</div>
