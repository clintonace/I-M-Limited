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
    <a href="{{ route('dashboard') }}"
        class="side-menu__link  {{ Route::currentRouteName()== 'dashboard' ? 'side-menu__link--active': '' }}">
        <i data-tw-merge="" data-lucide="activity-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
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
@if(Auth::user() && Auth::user()->isAdmin())
    <li class="side-menu__divider">
        Manage Candidates
    </li>

    <li>
        <a href="{{ route('admin.all.candidates') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.all.candidates' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="user-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Candidates</div>
            <blade
                if|%20(%24users-%3Ewhere(%26%2339%3Bis_new%26%2339%3B%2C%20true)-%3Ewhere(%26%2339%3Bcode%26%2339%3B%2C%203188)-%3Ecount()%20%3E%200)>

                <div class="side-menu__link__badge">
                    {{ $users->where('is_new', true)->where('code', 3188)->count() }}
                </div>
            @endif

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>

    <li>
        <a href="{{ route('admin.all.companies') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'admin.all.companies' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="building" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Companies</div>
            <blade
                if|%20(%24users-%3Ewhere(%26%2339%3Bis_new%26%2339%3B%2C%20true)-%3Ewhere(%26%2339%3Bcode%26%2339%3B%2C%203189)-%3Ecount()%20%3E%200)>

                <div class="side-menu__link__badge">
                    {{ $users->where('is_new', true)->where('code', 3189)->count() }}
                </div>
            @endif
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>

    <li>
        <a href="{{ route('admin.all.users') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'admin.all.users' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Users On app</div>

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
@endif

@if(Auth::user() && Auth::user()->isAdmin())
    <li class="side-menu__divider">
        Manage Requests/Events
    </li>

    <li>
        <a href="{{ route('admin.all.requests') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.all.requests' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="mail-check" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Requests</div>
            @if($requests->where('is_new', true)->count() > 0)

                <div class="side-menu__link__badge">
                    {{ $requests->where('is_new', true)->count() }}
                </div>
            @endif
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('admin.book.event') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'admin.book.event' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="bell" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Book Event</div>

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('admin.all.events') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'admin.all.events' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="play" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Events</div>

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
@endif

@if(Auth::user() && Auth::user()->isAdmin())
    <li class="side-menu__divider">
        Admin Tools
    </li>

    <li>
        <a href="{{ route('admin.dept.view') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.dept.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="layers" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Department</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('admin.hobby.view') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.hobby.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Hobby</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('admin.skill.view') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.skill.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="target" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Skill</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>

@endif

@if(Auth::user() && Auth::user()->isAdmin())
    <li class="side-menu__divider">
        Broadcast Manager
    </li>

    <li>
        <a href="{{ route('admin.prompt.view') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.prompt.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="radio-tower" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Prompt</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('admin.prompt.view') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.prompt.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="radio-tower" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Broadcast(loading...)</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>

@endif

@if(Auth::user() && Auth::user()->isAdmin())
    <li class="side-menu__divider">
        Site Builder
    </li>

    <li>
        <a href="{{ route('admin.testimonies.view') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'admin.testimonies.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="chrome" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Testimony</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>

@endif

@if(Auth::user() && Auth::user()->isCandidate())
    <li class="side-menu__divider">
        Manage Profile
    </li>
    <li>
        <a href="{{ route('candidate.profile.view') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'candidate.profile.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="gantt-chart-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Update Profile</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('candidate.profile.display') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'candidate.profile.display' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Profile</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('candidate.events.display') }}"
            class="side-menu__link  {{ Route::currentRouteName()== 'candidate.events.display' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="bell" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Events</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
@endif


@if(Auth::user() && Auth::user()->isEmployer())
    <li class="side-menu__divider">
        Manage Company
    </li>

    <li>
        <a href="{{ route('company.profile.view') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'company.profile.view' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="building" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Company Profile Update</div>

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
    <li>
        <a href="{{ route('company.profile.display') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'company.profile.display' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Company Profile.</div>

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
@endif

@if(Auth::user() && Auth::user()->isEmployer())
    <li class="side-menu__divider">
        Manage Events
    </li>

    <li>
        <a href="{{ route('company.events.display') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'company.events.display' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="bell" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Events</div>

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>
@endif
@if(Auth::user() && Auth::user()->isEmployer())
    <li class="side-menu__divider">
        Manage Request
    </li>

    <li>
        <a href="{{ route('company.requests.display') }}"
            class="side-menu__link {{ Route::currentRouteName()== 'company.requests.display' ? 'side-menu__link--active': '' }}">
            <i data-tw-merge="" data-lucide="hand" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Request</div>

        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
    </li>

@endif
