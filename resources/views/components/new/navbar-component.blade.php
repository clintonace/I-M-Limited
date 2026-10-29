{{-- Header --}}


<style>
    /* Hide Google's default translation UI */
    .goog-te-banner-frame,
    .goog-te-balloon-frame,
    #goog-gt-tt,
    .goog-tooltip {
        display: none !important;
    }

    body {
        top: 0 !important;
    }

    /* Hide Google Translate branding text */
    .goog-logo-link,
    .goog-te-gadget span {
        display: none !important;
    }

    .goog-te-gadget {
        font-size: 0 !important;
    }

    /* Language dropdown */
    .language-switcher {
        position: relative;
    }

    .language-dropdown {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        min-width: 140px;
        background: #111;
        border: 1px solid #333;
        border-radius: 6px;
        z-index: 9999;
        padding: 6px 0;
    }

    .language-dropdown.show {
        display: block;
    }

    .language-dropdown a {
        display: block;
        padding: 10px 14px;
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .language-dropdown a:hover {
        background: #E94E1B;
        color: #fff;
    }


/* Hide the Google Translate top banner */
iframe.goog-te-banner-frame,
.goog-te-banner-frame,
.goog-te-banner-frame.skiptranslate,
.VIpgJd-ZVi9od-ORHb-OEVmcd,
.VIpgJd-ZVi9od-aZ2wEe-wOHmyf,
body > .skiptranslate {
    display: none !important;
    visibility: hidden !important;
    height: 0 !important;
}

/* Remove the space Google adds above the page */
html,
body {
    top: 0 !important;
    margin-top: 0 !important;
    position: static !important;
}

/* Hide Google's tooltip and branding */
#goog-gt-tt,
.goog-tooltip,
.goog-tooltip:hover,
.goog-logo-link,
.goog-te-gadget span {
    display: none !important;
}

/* Highlight the menu link for the current page, same as its hover state */
.ui-menu-div .ui-menu-text-link.w--current {
    color: var(--color--orange);
    background-position: 0%;
    padding-left: 30px;
}

/* Keep your custom language selector visible */
#google_translate_element {
    display: none !important;
}

</style>
<div data-w-id="cf061741-f82a-bb9f-9da3-562405bfe518" data-animation="default" data-collapse="all" data-duration="400"
    data-easing="ease" data-easing2="ease" role="banner" class="ui-header w-nav">
    <div class="ui-container w-container">
        <div class="ui-header-wrapper">

            <a href="{{route('welcome')}}" aria-current="page" class="ui-nav-logo-link w-nav-brand w--current"
                style="padding: 5px 10px; display: flex; align-items: center;">
                <img src="/newonboarding/logos/white.png" loading="lazy" alt="Logo" class="ui-logo"
                    style="width: 100px; height: auto; max-height: 40px; object-fit: contain;" />
            </a>

            <div class="ui-header-menu-wrapper">

                <div class="ui-header-button-div">
                    <div class="language-switcher">
                        <button type="button" class="ui-button w-inline-block" id="languageToggle">
                            <span id="currentLanguage">EN</span>
                            <span class="ui-button-icon">▼</span>
                        </button>

                        <div class="language-dropdown" id="languageDropdown">
                            <a href="#" onclick="changeLanguage('en'); return false;">
                                English
                            </a>
                            
                            <a href="#" onclick="changeLanguage('de'); return false;">
                                Deutsch
                            </a>

                            <a href="#" onclick="changeLanguage('es'); return false;">
                                Español
                            </a>

                            <a href="#" onclick="changeLanguage('fr'); return false;">
                                Français
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Google Translate element -->
                <div id="google_translate_element" style="display:none;"></div>

                <div class="ui-header-button-div"><a data-wf--ui-button--variant="base" href="{{ route('new.book_a_call') }}" target="_blank"
                        class="ui-button w-inline-block">
                        <div>BOOK A CALL</div>
                        <div class="ui-button-icon w-embed">
                            <svg viewBox="0 0 18 18" fill="currentcolor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.10203 13.102L12.1423 5.06249H6.1875C6.03832 5.06249 5.89524 5.00323 5.78975 4.89774C5.68426 4.79225 5.625 4.64918 5.625 4.49999C5.625 4.35081 5.68426 4.20773 5.78975 4.10224C5.89524 3.99675 6.03832 3.93749 6.1875 3.93749H13.5C13.6492 3.93749 13.7923 3.99675 13.8977 4.10224C14.0032 4.20773 14.0625 4.35081 14.0625 4.49999V11.8125C14.0625 11.9617 14.0032 12.1048 13.8977 12.2102C13.7923 12.3157 13.6492 12.375 13.5 12.375C13.3508 12.375 13.2077 12.3157 13.1023 12.2102C12.9968 12.1048 12.9375 11.9617 12.9375 11.8125V5.85773L4.89797 13.898C4.84571 13.9502 4.78366 13.9917 4.71538 14.02C4.6471 14.0482 4.57391 14.0628 4.5 14.0628C4.42609 14.0628 4.3529 14.0482 4.28462 14.02C4.21634 13.9917 4.15429 13.9502 4.10203 13.898C4.04977 13.8457 4.00831 13.7837 3.98003 13.7154C3.95175 13.6471 3.93719 13.5739 3.93719 13.5C3.93719 13.4261 3.95175 13.3529 3.98003 13.2846C4.00831 13.2163 4.04977 13.1543 4.10203 13.102Z"
                                    fill="currentcolor" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div data-hover="false" data-delay="400" data-w-id="cf061741-f82a-bb9f-9da3-562405bfe521"
                    class="w-dropdown">
                    <div class="ui-menu-toggle-button w-dropdown-toggle">
                        <div class="ui-menu-toggle-div">
                            <div>MENU</div>
                            <div data-is-ix2-target="1" class="ui-menu-toggle"
                                data-w-id="cf061741-f82a-bb9f-9da3-562405bfe526" data-animation-type="lottie"
                                data-src="/newonboarding/js/menu-toggle.json" data-loop="0" data-direction="1"
                                data-autoplay="0" data-renderer="svg" data-default-duration="0"
                                data-duration="2.3333333333333335" data-loading="eager"></div>
                        </div>
                    </div>
                    <nav class="ui-menu-list-div w-dropdown-list">
                        <div class="ui-menu-div">
                            
                            @php
                                $menuLinks = [
                                    'welcome' => 'Home',
                                    'new.aboutus' => 'About us',
                                    'new.services' => 'Featured services',
                                    'new.faqs' => 'FAQs',
                                    'new.how-it-works' => 'How it Works',
                                    'register' => 'Talent Register',
                                    'login' => 'Talent Login',
                                ];
                            @endphp

                            @foreach ($menuLinks as $routeName => $label)
                                <a href="{{ route($routeName) }}"
                                    @if (request()->routeIs($routeName)) aria-current="page" @endif
                                    @class([
                                        'ui-menu-text-link w-dropdown-link',
                                        'w--current' => request()->routeIs($routeName),
                                    ])>{{ $label }}</a>
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
