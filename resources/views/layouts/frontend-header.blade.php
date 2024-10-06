<div id="__next">
  <main class="body-area bd-theme-light">
    <div class="fix">
      <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
          <div class="offcanvas__content">
            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
              <div class="offcanvas__logo">
                <a href="{{ route('home') }}"><img src="{{ URL::asset('build/media/logo.png') }}"
                    alt="logo not found" /></a>
              </div>
              <div class="offcanvas__close">
                <button><i class="fal fa-times"></i></button>
              </div>
            </div>
            <div class="offcanvas__search mb-25">
              <form action="#">
                <input type="text" placeholder="" /><button type="submit">
                  <i class="far fa-search"></i>
                </button>
              </form>
            </div>
            <div class="mobile-menu fix mb-40 mean-container">
              <div class="mean-bar">
                <nav class="mean-nav">
                  <ul>
                    <li class=""><a href="{{ route('home') }}">Home</a></li>
                    <li class=""><a href="{{ route('aboutUs') }}">About</a></li>
                    <li class=""><a href="{{ route('events') }}">Events</a></li>
                    <li class=""><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li class=""><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li class=""><a href="{{ route('membership') }}">Membership</a></li>
                    <li class=""><a href="{{ route('contactUs') }}">Contact</a></li>
                  </ul>
                </nav>
                {!! !Auth::check()
                ? '<a class="fill__btn" href="' .
                                route('login') .
                                '">Login<i class="fa-regular fa-angle-right"></i></a>'
                : '<a class="fill__btn" href="' .
                                route('dashboard') .
                                '">' . Auth::user()->first_name . '<i class="fa-regular fa-angle-right"></i></a>' !!}
              </div>
            </div>

            <div class="offcanvas__contact mt-30 mb-20">
              <h4>Contact Info</h4>
              <ul>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-map-marker-alt"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a
                      href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Houston,
                      Texas</a>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="far fa-phone"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="tel:832 723 5294">832 723 5294</a>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="tel:832 723 5294"><span
                        class="mailto:sarephouseton@gmail.com">sarephouseton@gmail.com</span></a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="offcanvas__social pb-20">
              <ul>
                <li>
                  <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                </li>
                <li>
                  <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                  <a href="https://bd.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>

    <header>
      <div id="header-sticky" class="header__area header-1 header__transparent menu-sticky dark_light_class">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="mega__menu-wrapper p-relative">
                <div class="header__navigation d-flex align-items-center justify-content-between">
                  <div class="header__logo">
                    <a href="{{ route('home') }}"><img class="logo__white w-100-px"
                        src="{{ URL::asset('build/media/logo.png') }}" alt="logo not found" /><img
                        class="logo__dark w-100-px" src="{{ URL::asset('build/media/logo.png') }}"
                        alt="logo not found" /></a>
                  </div>
                  <div class="header__right">
                    <div class="main-menu smooth d-none d-none d-xl-block">
                      <nav id="mobile-menu">
                        <ul>
                          <li class=""><a href="{{ route('home') }}">Home</a></li>
                          <li class=""><a href="{{ route('aboutUs') }}">About</a></li>
                          <li class=""><a href="{{ route('events') }}">Events</a></li>
                          <li class=""><a href="{{ route('gallery') }}">Gallery</a></li>
                          <li class=""><a href="{{ route('blogs') }}">Blogs</a></li>
                          <li class=""><a href="{{ route('membership') }}">Membership</a></li>
                          <li class=""><a href="{{ route('contactUs') }}">Contact</a></li>
                        </ul>
                      </nav>
                    </div>
                    <div class="header__action-inner">
                      <div class="header__btn d-none d-xl-block">
                        {!! !Auth::check()
                        ? '<a class="fill__btn" href="' .
                          route('login') .
                          '">Login<i class="fa-regular fa-angle-right"></i></a>'
                        : '<a class="fill__btn" href="' .
                          route('dashboard') .
                          '">' . Auth::user()->first_name . '<i class="fa-regular fa-angle-right"></i></a>' !!}
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