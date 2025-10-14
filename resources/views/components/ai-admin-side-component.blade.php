                @if(Auth::user()->email_verified_at != null)

                 <li class="side-menu__divider">
                    DASHBOARDS
                </li>
                <li>
                    <a href="{{route('ai.dashboard')}}" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="gauge-circle"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Dashboard</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> 
                <li>
                    <a href="{{route('ai.users.management')}}" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="users"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Users Management</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> 
                <li>
                    <a href="#" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="key"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Roles and Permissions</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> 
                @endif
                