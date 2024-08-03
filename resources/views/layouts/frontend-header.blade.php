<header>
    <div
    id="header-sticky"
    class="header__area header-1 header__transparent menu-sticky dark_light_class"
    >
    <div class="container">
        <div class="row align-items-center">
        <div class="col-12">
            <div class="mega__menu-wrapper p-relative">
            <div
                class="header__navigation d-flex align-items-center justify-content-between"
                >
                <div class="header__logo">
                <a href="index.html"
                    ><img
                    class="logo__white"
                    src="{{ URL::asset('build/media/logo.6dd2592f.svg') }}"
                    alt="logo not found" /><img
                    class="logo__dark"
                    src="{{ URL::asset('build/media/logo-dark.f5dee282.svg') }}"
                    alt="logo not found"
                    /></a>
                </div>
                <div class="header__right">
                <div class="main-menu smooth d-none d-none d-xl-block">
                    <nav id="mobile-menu">
                    <ul>
                        <li class=""><a href="{{ route('home') }}">Home</a></li>
                        <li class=""><a href="{{ route('aboutUs') }}">About</a></li>
                        <li class=""><a href="{{ route('events') }}">Events</a></li>
                        <li class=""><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('membership') }}">Membership</a></li>
                        <li class=""><a href="{{ route('contactUs') }}">Contact</a></li>
                    </ul>
                    </nav>
                </div>
                <div class="header__action-inner">
                    <div class="header__btn d-none d-xl-block">
                    <a class="fill__btn" href="signin"
                        >SignIn<i class="fa-regular fa-angle-right"></i
                        ></a>
                    </div>
                    <div class="header__hamburger">
                    <div class="sidebar__toggle">
                        <button type="button" class="bar-icon">
                        <span></span><span></span><span></span>
                        </button>
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
</header>