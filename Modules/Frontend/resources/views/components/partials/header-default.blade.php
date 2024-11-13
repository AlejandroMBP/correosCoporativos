<header class="header-center-home header-default header-sticky">
    <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
        <div class="container-fluid navbar-inner">
            <div class="d-flex align-items-center justify-content-between w-100 landing-header">
                <div class="d-flex gap-3 gap-xl-0 align-items-center">
                    <div>
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar_main"
                            aria-controls="navbar_main"
                            class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 toggle-rounded-btn">
                            <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                            </svg>
                        </button>
                    </div>
                    @include('frontend::components.brand.logo')
                </div>
                <nav id="navbar_main"
                    class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav py-xl-0 {{ isset($IS_MEGA) && $IS_MEGA ? 'mega-menu-content' : '' }}">
                    <div class="container-fluid p-lg-2">
                        <div class="offcanvas-header px-0">
                            <div class="navbar-brand ms-3">
                                @include('frontend::components.brand.logo')
                            </div>
                            <button type="button" class="btn-close float-end px-3" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav iq-nav-menu list-unstyled" id="header-menu">
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white text-uppercase"
                                    href="{{ route('register') }}" role="button" aria-expanded="false"
                                    aria-controls="shop">
                                    Registrarse
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="true" aria-expanded="false"
                                    style="color: inherit !important;">
                                    <i class="fa-solid fa-globe me-1"></i>{{ strtoupper(App::getLocale()) }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">

                                    @foreach (config('app.available_locales') as $locale => $title)
                                        <a class="dropdown-item" href="{{ route('language.switch', $locale) }}">
                                            {{ $title }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- container-fluid.// -->
                </nav>
                <div class="right-panel">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-btn">
                            <span class="navbar-toggler-icon"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center ms-auto mb-2 mb-xl-0">
                            @if (auth()->user())
                                <li class="nav-item dropdown" id="itemdropdown1">
                                    <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="btn-icon rounded-pill user-icons">
                                            <span class="btn-inner">
                                                <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                    <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-user border-0 p-0 m-0"
                                        aria-labelledby="navbarDropdown">
                                        <li class="user-info d-flex align-items-center gap-3 mb-3">
                                            <img src="{{ asset('/frontend/images/user/user1.webp') }}" class="img-fluid"
                                                alt="" loading="lazy" />
                                            <span
                                                class="font-size-14 fw-500 text-capitalize text-white">{{ __('frontendheader.welcome', ['usuario' => auth()->user()->first_name . '  ' . auth()->user()->last_name]) }}</span>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard') }}"
                                                class="iq-sub-card d-flex align-items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 22" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.84455 20.6621C4.15273 20.6621 1 20.0876 1 17.7868C1 15.486 4.13273 13.3621 7.84455 13.3621C11.5364 13.3621 14.6891 15.4654 14.6891 17.7662C14.6891 20.066 11.5564 20.6621 7.84455 20.6621Z"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.83725 10.1738C10.26 10.1738 12.2236 8.21015 12.2236 5.78742C12.2236 3.36469 10.26 1.40015 7.83725 1.40015C5.41452 1.40015 3.44998 3.36469 3.44998 5.78742C3.4418 8.20196 5.3918 10.1656 7.80634 10.1738C7.81725 10.1738 7.82725 10.1738 7.83725 10.1738Z"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <h6 class="mb-0 font-size-14 fw-normal">
                                                    Regrasar al Menu
                                                </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                class="iq-sub-card iq-logout-2 mt-1 d-flex justify-content-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <path
                                                        d="M1.82209 15.9999C1.46654 15.9999 1.16283 15.874 0.910981 15.6221C0.659129 15.3703 0.533203 15.0666 0.533203 14.711V1.73322C0.533203 1.37767 0.659129 1.07397 0.910981 0.822114C1.16283 0.570262 1.46654 0.444336 1.82209 0.444336H7.95543V1.44434H1.82209C1.74802 1.44434 1.68135 1.47397 1.62209 1.53322C1.56283 1.59248 1.5332 1.65915 1.5332 1.73322V14.711C1.5332 14.7851 1.56283 14.8517 1.62209 14.911C1.68135 14.9703 1.74802 14.9999 1.82209 14.9999H7.95543V15.9999H1.82209ZM12.0888 11.5999L11.3554 10.8888L13.5332 8.73322H5.68876V7.711H13.511L11.3332 5.55545L12.0665 4.82211L15.4665 8.24434L12.0888 11.5999Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <h6 class="mb-0 font-size-14 fw-normal">
                                                    {{ __('frontendheader.logout') }}</h6>
                                            </a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;"> @csrf </form>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item dropdown" id="itemdropdown1">
                                    <a href="{{ route('login') }}"
                                        class="nav-link">{{ __('frontendheader.login') }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
