 <li class="side-menu__divider">
                    DASHBOARDS
                </li>
                <li>
                    <a href="dagger-dashboard-overview-1.html" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="gauge-circle"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Converted Files</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li> 
                <li>    
                    <a href="{{route('dashboard')}}"
                        class="side-menu__link  {{Route::currentRouteName()== 'dashboard' ? 'side-menu__link--active': ''}}">
                        <i data-tw-merge="" data-lucide="activity-square"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Uploaded Files</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>