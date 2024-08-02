@extends('layouts.frontend')
@section('title')
Home
@endsection

@section('body')

<section
    id="homeindex"
    class="banner__area banner__area-1 banner__height-1 d-flex align-items-center"
    style="background-image: url('{{ URL::asset('build/media/banner.84002f4b.png') }}"
    >
    <div class="spotlight"></div>
    <div class="banner__meta-title"><span>Meet Up 2023</span></div>
    <div class="banner__shape">
    <img
        class="banner__shape-1 parallaxed"
        src="{{ URL::asset('build/media/shape-1.511a9d33.png') }}"
        alt="imge not found"
        /><img
        class="banner__shape-2"
        src="{{ URL::asset('build/media/shape-2.c0ab6f45.png') }}"
        alt="imge not found"
        /><img
        class="banner__shape-3"
        src="{{ URL::asset('build/media/shape-3.37295c70.png') }}"
        alt="imge not found"
        /><img
        class="banner__shape-4 parallaxed"
        src="{{ URL::asset('build/media/shape-4.194446d7.png') }}"
        alt="imge not found"
        /><img
        class="banner__shape-5"
        src="{{ URL::asset('build/media/shape-5.7d57ae36.png') }}"
        alt="imge not found"
        /><img
        class="banner__shape-6 parallaxed"
        src="{{ URL::asset('build/media/shape-6.a42cb8c1.png') }}"
        alt="imge not found"
        />
    <div class="banner-all-line">
        <div class="banner__line banner__line-1"></div>
        <div class="banner__line banner__line-2"></div>
    </div>
    <div class="container-fluid">
        <div class="row align-items-xl-end">
        <div class="col-xxl-7 col-xl-8 col-lg-6">
            <div class="banner__content">
            <h2 class="banner__title">
                Digital Thinkers<!-- -->
                <span class="text__highlight"> Conference </span>
            </h2>
            <div class="slider__btdn">
                <a class="fill__btn" href="signup"
                >Register Now<i class="fa-regular fa-angle-right"></i
                ></a>
            </div>
            </div>
        </div>
        <div class="col-xxl-5 col-xl-4 col-lg-6">
            <div
            class="banner__right-content d-flex justify-content-lg-end"
            >
            <div class="banner__card-wrapper">
                <div class="banner__card-inner">
                <span class="card__icon"></span
                    >
                <span class="shape"
                    >
                    <svg
                    width="146"
                    height="227"
                    viewBox="0 0 146 227"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M124 1H139C142.314 1 145 3.68629 145 7V220C145 223.314 142.314 226 139 226H7C3.68629 226 1 223.314 1 220V166.194"
                        stroke="#F87A58"
                        ></path>
                    </svg>
                </span>
                <div class="banner__card-info">
                    <span>WHEN AND WHERE</span>
                    <h4>
                    November 9–10 <br />
                    The Midway SF
                    </h4>
                </div>
                <div class="pluse__status">
                    <span class="dot"></span
                    ><span class="text">Online</span>
                </div>
                </div>
                <div class="banner__time">
                <div class="count-down"><span>Day</span></div>
                <div class="count-down"><span>Hour</span></div>
                <div class="count-down"><span>Min</span></div>
                <div class="count-down"><span>Sec</span></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<section
    id="homeabout"
    class="about__area p-relative pt-150 dark_light_class pb-90"
    >
    <div class="about__shape-1">
    <img src="{{ URL::asset('build/media/shape/about-1.png') }}" alt="image not found" />
    </div>
    <div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="about__content-wrapper mb-60">
            <div class="section__title-wrapper mb-80">
            <span class="section__back-title">A</span
                ><span class="section__subtitle">ABOUT THIS EVENT</span>
            <h2 class="section__title">
                EXPERIENCE A TRUE DIGITAL
                <span class="text__highlight"
                >
                CONFERENCE
                <svg
                    class="title-underline"
                    width="328"
                    height="31"
                    viewBox="0 0 328 31"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                    d="M2 29C110 8.62517 326 -19.8996 326 29"
                    stroke="url(#paint0_linear_47_128)"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    ></path>
                    <defs>
                    <linearGradient
                        id="paint0_linear_47_128"
                        x1="2.50784"
                        y1="22.0412"
                        x2="322.486"
                        y2="65.0473"
                        gradientUnits="userSpaceOnUse"
                        >
                        <stop offset="1" stop-color="#F7426F"></stop>
                        <stop offset="1" stop-color="#F87A58"></stop>
                    </linearGradient>
                    </defs>
                </svg>
                </span>
            </h2>
            </div>
            <div class="about__content">
            <div class="about__text">
                <h4>
                How you transform your business as technology, consumer
                habits industry dynamic
                </h4>
                <p class="mb-30">
                Velit auctor aliquet. Aenean sollicitudin, lorem quis
                bibendum auctor, nisi elit consequat ipsum, nec sagittis
                sem nibh.
                </p>
                <p>
                Lorem ipsum proin gravida nibh vel velit auctor aliquet.
                Aeneansollicitudin, lorem quis bibendum auctonisi elit
                consequat ipsum nec sagittis sem nibh id elit. Duis sed
                odio sit amet nibh vulputate cursusa sit amet mauris.
                Morbi accumsan ipsum velit.” Nam nec tellus a odio
                tincidunt.
                </p>
            </div>
            <div class="about__location-info mb-80">
                <div class="about__location-inner">
                <div class="about__location-icon">
                    <a href="#"
                    ><i class="fa-solid fa-location-dot"></i
                    ></a>
                </div>
                <div class="about__location-address">
                    <h5>WHEN AND WHERE</h5>
                    <span>November 9–10 <br />The Midway SF, Zoom</span>
                </div>
                </div>
                <div class="pluse__status">
                <span class="dot"></span
                    ><span class="text">Online</span>
                </div>
            </div>
            </div>
            <a class="fill__btn" href="event-list-two"
            >Join Now<i class="fa-regular fa-angle-right"></i
            ></a>
        </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="about__thumb-wrapper mb-60 p-relative">
            <div class="about__thumb-1 text-end w-img">
            <img
                src="{{ URL::asset('build/media/about/img1.jpg') }}"
                alt="image not found"
                />
            <div class="panel wow"></div>
            </div>
            <div class="about__thumb-2 w-img">
            <img
                src="{{ URL::asset('build/media/about/img2.jpg') }}"
                alt="image not found"
                />
            <div class="panel wow"></div>
            </div>
            <span class="about__play-btn"
            ><button type="button" class="video__play-btn popup-video">
            <i class="fa-solid fa-play"></i>PLAY TRAILER
            </button></span
            >
        </div>
        </div>
    </div>
    </div>
</section>
<section
    class="join__area p-relative z-index-1 fix"
    style="background-image: url('{{ URL::asset('build/media/joinbg.e1b1d152.jpg') }}"
    >
    <div class="join__all-shape p-relative">
    <img
        class="join__shape-1"
        src="{{ URL::asset('build/media/shape/join-shape-1.png') }}"
        alt="image not found"
        /><img
        class="join__shape-2"
        src="{{ URL::asset('build/media/shape/join-shape-2.png') }}"
        alt="image not found"
        />
    <div class="container">
        <div class="join__main-wrapper pt-150 pb-90">
        <div class="row align-items-sm-start">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="join__features-wrapper mb-60">
                <div class="join__features-grid">
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-network"></i></span>
                    </div>
                    <h3 class="join__features-title">Build Networking</h3>
                </div>
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-teamwork"></i></span>
                    </div>
                    <h3 class="join__features-title">Meet New People</h3>
                </div>
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-speech"></i></span>
                    </div>
                    <h3 class="join__features-title">
                    Experience Speakers
                    </h3>
                </div>
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-confetti"></i></span>
                    </div>
                    <h3 class="join__features-title">Lot’s Of Fun</h3>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="join__content-wrapper mb-60">
                <div class="section__title-wrapper is-white mb-40">
                <span class="section__back-title">w</span
                    ><span class="section__subtitle">WHY JOIN EVENT</span>
                <h2 class="section__title">
                    WHY YOU SHOULD
                    <span class="text__highlight">
                    JOIN THIS
                    <svg
                        width="164"
                        height="32"
                        viewBox="0 0 164 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                        d="M1.99971 28.2805C55.3778 8.30722 162.042 -19.4147 161.673 29.4835"
                        stroke="url(#paint0_linear_83_347)"
                        stroke-width="4"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        ></path>
                        <defs>
                        <linearGradient
                            id="paint0_linear_83_347"
                            x1="2.30241"
                            y1="21.3238"
                            x2="162.062"
                            y2="33.1155"
                            gradientUnits="userSpaceOnUse"
                            >
                            <stop offset="1" stop-color="#F7426F"></stop>
                            <stop offset="1" stop-color="#F87A58"></stop>
                        </linearGradient>
                        </defs>
                    </svg>
                    </span>
                    EVENT
                </h2>
                </div>
                <div class="join__content mb-70">
                <p>
                    Velit auctor aliquet. Aenean sollicitudin, lorem quis
                    bibendum auctor, nisi elit consequat ipsum, nec
                    sagittis sem nibh.
                </p>
                <p class="mt-30">
                    Lorem ipsum proin gravida nibh vel velit auctor
                    aliquet. Aeneansollicitudin, lorem quis bibendum
                    auctonisi elit consequat ipsum nec sagittis sem nibh
                    id elit. Duis sed odio sit amet nibh vulputate cursusa
                    sit amet mauris. Morbi accumsan ipsum velit.” Nam nec
                    tellus a odio tincidunt.
                </p>
                </div>
                <a class="fill__btn fill_btn_new" href="event-list-two"
                >Join Now<i class="fa-regular fa-angle-right"></i
                ></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<section
    class="counter__area include__bg pt-150 pb-120 counter__overlay fix"
    style="
    background-image: url('{{ URL::asset('build/media/cunter-bg.8a8fac26.jpg') }};
    "
    >
    <div class="counter__shape">
    <img src="{{ URL::asset('build/media/shape/counter-shape.png') }}" alt="" />
    </div>
    <div class="container">
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item text-center mb-60">
            <div class="counter__icon"><i class="flaticon-team"></i></div>
            <div class="counter__content">
            <div class="counter__number">
                <span class="counter"></span>
            </div>
            <div class="counter__title">
                <h3>Participants</h3>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item text-center mb-60">
            <div class="counter__icon"><i class="flaticon-team"></i></div>
            <div class="counter__content">
            <div class="counter__number">
                <span class="counter"></span>
            </div>
            <div class="counter__title">
                <h3>Speakers</h3>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item text-center mb-60">
            <div class="counter__icon"><i class="flaticon-team"></i></div>
            <div class="counter__content">
            <div class="counter__number">
                <span class="counter"></span>
            </div>
            <div class="counter__title">
                <h3>Workshop</h3>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item text-center mb-60">
            <div class="counter__icon"><i class="flaticon-team"></i></div>
            <div class="counter__content">
            <div class="counter__number">
                <span class="counter"></span>
            </div>
            <div class="counter__title">
                <h3>Awards Win</h3>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<section class="pricing__area dark_light_class pt-185 pb-120">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-5 col-xl-6 col-lg-6">
        <div class="section__title-wrapper is-left mb-105">
            <span class="section__back-title">R</span
            ><span class="section__subtitle">REGISTRATION NOW</span>
            <h2 class="section__title">
            Get
            <span class="text__highlight">
                Ticket
                <svg
                width="164"
                height="32"
                viewBox="0 0 164 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M1.99971 28.2805C55.3778 8.30722 162.042 -19.4147 161.673 29.4835"
                    stroke="url(#paint0_linear_83_347)"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    ></path>
                <defs>
                    <linearGradient
                    id="paint0_linear_83_347"
                    x1="2.30241"
                    y1="21.3238"
                    x2="162.062"
                    y2="33.1155"
                    gradientUnits="userSpaceOnUse"
                    >
                    <stop offset="1" stop-color="#F7426F"></stop>
                    <stop offset="1" stop-color="#F87A58"></stop>
                    </linearGradient>
                </defs>
                </svg>
            </span>
            Now
            </h2>
        </div>
        </div>
        <div class="col-xxl-7 col-xl-6 col-lg-6">
        <div
            class="price__short-details d-lg-flex justify-content-center mb-105"
            >
            <p>
            Velit auctor aliquet. Aenean sollicitudin, lorem quis
            bibendum auctor, nisi <br />elit consequat ipsum, nec
            sagittis sem nibh.
            </p>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
        <div class="pricing__item mb-30">
            <div class="pricing__item-header">
            <div>
                <span class="pricing__item-title">
                <!-- -->$599<!-- -->
                </span>
            </div>
            <div class="pricing__item-lable">
                <span class="pricing__item-label">
                <!-- -->CIP
                </span
                >
                <svg
                class="lable-border"
                width="97"
                height="54"
                viewBox="0 0 97 54"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M1.55449 2.53125L0.518162 0.84375L0.944232 0.582093L0.893817 0.5H1.01039V0H3.03123V0.5H5.05206V0H7.0729V0.5H9.09373V0H11.1146V0.5H13.1354V0H15.1562V0.5H17.1771V0H19.1979V0.5H21.2188V0H23.2396V0.5H25.2604V0H27.2813V0.5H29.3021V0H31.3229V0.5H33.3438V0H35.3646V0.5H37.3854V0H39.4063V0.5H41.4271V0H43.4479V0.5H45.4688V0H47.4896V0.5H49.5104V0H51.5313V0.5H53.5521V0H55.5729V0.5H57.5938V0H59.6146V0.5H61.6354V0H63.6562V0.5H65.6771V0H67.6979V0.5H69.7188V0H71.7396V0.5H73.7604V0H75.7812V0.5H77.8021V0H79.8229V0.5H81.8438V0H83.8646V0.5H85.8854V0H87.9062V0.5H89.9271V0H91.9479V0.5H93.9688V0H95.9896V0.5H96.5V0.964301H97V2.89287H96.5V4.82144H97V6.75001H96.5V8.67858H97V10.6072H96.5V12.5357H97V14.4643H96.5V16.3929H97V18.3214H96.5V20.25H97V22.1786H96.5V24.1071H97V26.0357H96.5V27.9643H97V29.8929H96.5V31.8214H97V33.75H96.5V35.6786H97V37.6071H96.5V39.5357H97V41.4643H96.5V43.3929H97V45.3214H96.5V47.25H97V49.1786H96.5V51.1071H97V53.0357H96.5V53.5H95.9896V54H93.9688V53.5H91.9479V54H89.9271V53.5H87.9063V54H85.8854V53.5H83.8646V54H81.8438V53.5H79.8229V54H77.8021V53.5H75.7812V54H73.7604V53.5H71.7396V54H69.7187V53.5H67.6979V54H65.6771V53.5H63.6562V54H61.6354V53.5H59.6146V54H57.5937V53.5H55.5729V54H53.5521V53.5H51.5312V54H49.5104V53.5H47.4896V54H45.4687V53.5H43.4479V54H41.4271V53.5H39.4062V54H37.3854V53.5H35.3646V54H33.3438V53.5H31.3229V54H29.3021V53.5H27.2813V54H25.2604V53.5H23.2396V54H21.2188V53.5H19.1979V54H17.1771V53.5H15.1562V54H13.1354V53.5H11.1146V54H9.09375V53.5H7.07292V54H5.05208V53.5H3.03125V54H1.01042V53.5H0.893817L0.944236 53.4179L0.518167 53.1562L1.55449 51.4688L1.98056 51.7304L3.01688 50.0429L2.59082 49.7812L3.62714 48.0938L4.05321 48.3554L5.08953 46.6679L4.66346 46.4062L5.69979 44.7188L6.12586 44.9804L7.16218 43.2929L6.73611 43.0312L7.77244 41.3438L8.19851 41.6054L9.23483 39.9179L8.80876 39.6562L9.84509 37.9688L10.2712 38.2304L11.3075 36.5429L10.8814 36.2812L11.9177 34.5938L12.3438 34.8554L13.3801 33.1679L12.9541 32.9062L13.9904 31.2188L14.4165 31.4804L15.4528 29.7929L15.0267 29.5313L16.063 27.8438L16.4891 28.1054L17.0073 27.2617L17.168 27L17.0073 26.7383L16.4891 25.8946L16.063 26.1562L15.0267 24.4687L15.4528 24.2071L14.4165 22.5196L13.9904 22.7812L12.9541 21.0937L13.3801 20.8321L12.3438 19.1446L11.9177 19.4062L10.8814 17.7188L11.3075 17.4571L10.2712 15.7696L9.84508 16.0312L8.80876 14.3438L9.23483 14.0821L8.19851 12.3946L7.77244 12.6562L6.73611 10.9688L7.16218 10.7071L6.12586 9.01959L5.69979 9.28125L4.66346 7.59375L5.08953 7.33209L4.05321 5.64459L3.62714 5.90625L2.59081 4.21875L3.01688 3.95709L1.98056 2.26959L1.55449 2.53125Z"
                    stroke="#1EA9F8"
                    stroke-dasharray="2 2"
                    ></path>
                </svg>
            </div>
            </div>
            <div class="pricing__item-content">
            <ul>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Everything from ALL Access
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Cocktail Hour
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Premium Seating
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Speaker Meet &amp; Greets
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Signed Books
                </li>
            </ul>
            </div>
            <div class="pricing__btn-wrap">
            <button type="button" class="pricing__btn">
            Buy Ticket
            </button>
            </div>
        </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
        <div class="pricing__item mb-30">
            <div class="pricing__item-header">
            <div>
                <span class="pricing__item-title">
                <!-- -->$799<!-- -->
                </span>
            </div>
            <div class="pricing__item-lable">
                <span
                class="pricing__item-label pricing__item-label-color1"
                >
                <!-- -->VIP
                </span
                >
                <svg
                class="lable-border"
                width="97"
                height="54"
                viewBox="0 0 97 54"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M1.55449 2.53125L0.518162 0.84375L0.944232 0.582093L0.893817 0.5H1.01039V0H3.03123V0.5H5.05206V0H7.0729V0.5H9.09373V0H11.1146V0.5H13.1354V0H15.1562V0.5H17.1771V0H19.1979V0.5H21.2188V0H23.2396V0.5H25.2604V0H27.2813V0.5H29.3021V0H31.3229V0.5H33.3438V0H35.3646V0.5H37.3854V0H39.4063V0.5H41.4271V0H43.4479V0.5H45.4688V0H47.4896V0.5H49.5104V0H51.5313V0.5H53.5521V0H55.5729V0.5H57.5938V0H59.6146V0.5H61.6354V0H63.6562V0.5H65.6771V0H67.6979V0.5H69.7188V0H71.7396V0.5H73.7604V0H75.7812V0.5H77.8021V0H79.8229V0.5H81.8438V0H83.8646V0.5H85.8854V0H87.9062V0.5H89.9271V0H91.9479V0.5H93.9688V0H95.9896V0.5H96.5V0.964301H97V2.89287H96.5V4.82144H97V6.75001H96.5V8.67858H97V10.6072H96.5V12.5357H97V14.4643H96.5V16.3929H97V18.3214H96.5V20.25H97V22.1786H96.5V24.1071H97V26.0357H96.5V27.9643H97V29.8929H96.5V31.8214H97V33.75H96.5V35.6786H97V37.6071H96.5V39.5357H97V41.4643H96.5V43.3929H97V45.3214H96.5V47.25H97V49.1786H96.5V51.1071H97V53.0357H96.5V53.5H95.9896V54H93.9688V53.5H91.9479V54H89.9271V53.5H87.9063V54H85.8854V53.5H83.8646V54H81.8438V53.5H79.8229V54H77.8021V53.5H75.7812V54H73.7604V53.5H71.7396V54H69.7187V53.5H67.6979V54H65.6771V53.5H63.6562V54H61.6354V53.5H59.6146V54H57.5937V53.5H55.5729V54H53.5521V53.5H51.5312V54H49.5104V53.5H47.4896V54H45.4687V53.5H43.4479V54H41.4271V53.5H39.4062V54H37.3854V53.5H35.3646V54H33.3438V53.5H31.3229V54H29.3021V53.5H27.2813V54H25.2604V53.5H23.2396V54H21.2188V53.5H19.1979V54H17.1771V53.5H15.1562V54H13.1354V53.5H11.1146V54H9.09375V53.5H7.07292V54H5.05208V53.5H3.03125V54H1.01042V53.5H0.893817L0.944236 53.4179L0.518167 53.1562L1.55449 51.4688L1.98056 51.7304L3.01688 50.0429L2.59082 49.7812L3.62714 48.0938L4.05321 48.3554L5.08953 46.6679L4.66346 46.4062L5.69979 44.7188L6.12586 44.9804L7.16218 43.2929L6.73611 43.0312L7.77244 41.3438L8.19851 41.6054L9.23483 39.9179L8.80876 39.6562L9.84509 37.9688L10.2712 38.2304L11.3075 36.5429L10.8814 36.2812L11.9177 34.5938L12.3438 34.8554L13.3801 33.1679L12.9541 32.9062L13.9904 31.2188L14.4165 31.4804L15.4528 29.7929L15.0267 29.5313L16.063 27.8438L16.4891 28.1054L17.0073 27.2617L17.168 27L17.0073 26.7383L16.4891 25.8946L16.063 26.1562L15.0267 24.4687L15.4528 24.2071L14.4165 22.5196L13.9904 22.7812L12.9541 21.0937L13.3801 20.8321L12.3438 19.1446L11.9177 19.4062L10.8814 17.7188L11.3075 17.4571L10.2712 15.7696L9.84508 16.0312L8.80876 14.3438L9.23483 14.0821L8.19851 12.3946L7.77244 12.6562L6.73611 10.9688L7.16218 10.7071L6.12586 9.01959L5.69979 9.28125L4.66346 7.59375L5.08953 7.33209L4.05321 5.64459L3.62714 5.90625L2.59081 4.21875L3.01688 3.95709L1.98056 2.26959L1.55449 2.53125Z"
                    stroke="#1EA9F8"
                    stroke-dasharray="2 2"
                    ></path>
                </svg>
            </div>
            </div>
            <div class="pricing__item-content">
            <ul>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Everything from ALL Access
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Cocktail Hour
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Premium Seating
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Speaker Meet &amp; Greets
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Signed Books
                </li>
            </ul>
            </div>
            <div class="pricing__btn-wrap">
            <button type="button" class="pricing__btn">
            Buy Ticket
            </button>
            </div>
        </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
        <div class="pricing__item mb-30">
            <div class="pricing__item-header">
            <div>
                <span class="pricing__item-title">
                <!-- -->$999<!-- -->
                </span>
            </div>
            <div class="pricing__item-lable">
                <span
                class="pricing__item-label pricing__item-label-color2"
                >
                <!-- -->VVIP
                </span
                >
                <svg
                class="lable-border"
                width="97"
                height="54"
                viewBox="0 0 97 54"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M1.55449 2.53125L0.518162 0.84375L0.944232 0.582093L0.893817 0.5H1.01039V0H3.03123V0.5H5.05206V0H7.0729V0.5H9.09373V0H11.1146V0.5H13.1354V0H15.1562V0.5H17.1771V0H19.1979V0.5H21.2188V0H23.2396V0.5H25.2604V0H27.2813V0.5H29.3021V0H31.3229V0.5H33.3438V0H35.3646V0.5H37.3854V0H39.4063V0.5H41.4271V0H43.4479V0.5H45.4688V0H47.4896V0.5H49.5104V0H51.5313V0.5H53.5521V0H55.5729V0.5H57.5938V0H59.6146V0.5H61.6354V0H63.6562V0.5H65.6771V0H67.6979V0.5H69.7188V0H71.7396V0.5H73.7604V0H75.7812V0.5H77.8021V0H79.8229V0.5H81.8438V0H83.8646V0.5H85.8854V0H87.9062V0.5H89.9271V0H91.9479V0.5H93.9688V0H95.9896V0.5H96.5V0.964301H97V2.89287H96.5V4.82144H97V6.75001H96.5V8.67858H97V10.6072H96.5V12.5357H97V14.4643H96.5V16.3929H97V18.3214H96.5V20.25H97V22.1786H96.5V24.1071H97V26.0357H96.5V27.9643H97V29.8929H96.5V31.8214H97V33.75H96.5V35.6786H97V37.6071H96.5V39.5357H97V41.4643H96.5V43.3929H97V45.3214H96.5V47.25H97V49.1786H96.5V51.1071H97V53.0357H96.5V53.5H95.9896V54H93.9688V53.5H91.9479V54H89.9271V53.5H87.9063V54H85.8854V53.5H83.8646V54H81.8438V53.5H79.8229V54H77.8021V53.5H75.7812V54H73.7604V53.5H71.7396V54H69.7187V53.5H67.6979V54H65.6771V53.5H63.6562V54H61.6354V53.5H59.6146V54H57.5937V53.5H55.5729V54H53.5521V53.5H51.5312V54H49.5104V53.5H47.4896V54H45.4687V53.5H43.4479V54H41.4271V53.5H39.4062V54H37.3854V53.5H35.3646V54H33.3438V53.5H31.3229V54H29.3021V53.5H27.2813V54H25.2604V53.5H23.2396V54H21.2188V53.5H19.1979V54H17.1771V53.5H15.1562V54H13.1354V53.5H11.1146V54H9.09375V53.5H7.07292V54H5.05208V53.5H3.03125V54H1.01042V53.5H0.893817L0.944236 53.4179L0.518167 53.1562L1.55449 51.4688L1.98056 51.7304L3.01688 50.0429L2.59082 49.7812L3.62714 48.0938L4.05321 48.3554L5.08953 46.6679L4.66346 46.4062L5.69979 44.7188L6.12586 44.9804L7.16218 43.2929L6.73611 43.0312L7.77244 41.3438L8.19851 41.6054L9.23483 39.9179L8.80876 39.6562L9.84509 37.9688L10.2712 38.2304L11.3075 36.5429L10.8814 36.2812L11.9177 34.5938L12.3438 34.8554L13.3801 33.1679L12.9541 32.9062L13.9904 31.2188L14.4165 31.4804L15.4528 29.7929L15.0267 29.5313L16.063 27.8438L16.4891 28.1054L17.0073 27.2617L17.168 27L17.0073 26.7383L16.4891 25.8946L16.063 26.1562L15.0267 24.4687L15.4528 24.2071L14.4165 22.5196L13.9904 22.7812L12.9541 21.0937L13.3801 20.8321L12.3438 19.1446L11.9177 19.4062L10.8814 17.7188L11.3075 17.4571L10.2712 15.7696L9.84508 16.0312L8.80876 14.3438L9.23483 14.0821L8.19851 12.3946L7.77244 12.6562L6.73611 10.9688L7.16218 10.7071L6.12586 9.01959L5.69979 9.28125L4.66346 7.59375L5.08953 7.33209L4.05321 5.64459L3.62714 5.90625L2.59081 4.21875L3.01688 3.95709L1.98056 2.26959L1.55449 2.53125Z"
                    stroke="#1EA9F8"
                    stroke-dasharray="2 2"
                    ></path>
                </svg>
            </div>
            </div>
            <div class="pricing__item-content">
            <ul>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Everything from ALL Access
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Cocktail Hour
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Premium Seating
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Speaker Meet &amp; Greets
                </li>
                <li>
                <i class="flaticon-comment"></i>
                <!-- -->Signed Books
                </li>
            </ul>
            </div>
            <div class="pricing__btn-wrap">
            <button type="button" class="pricing__btn">
            Buy Ticket
            </button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<div class="partner__area grey-bg pt-175 pb-150">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-6">
        <div
            class="section__title-wrapper is-center text-center mb-110"
            >
            <span class="section__back-title">P</span
            ><span class="section__subtitle">EVENT SPONSORS</span>
            <h2 class="section__title">
            Organize
            <span class="text__highlight">
                Partner
                <svg
                class="title-underline"
                width="328"
                height="31"
                viewBox="0 0 328 31"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M2 29C110 8.62517 326 -19.8996 326 29"
                    stroke="url(#paint0_linear_47_128)"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    ></path>
                <defs>
                    <linearGradient
                    id="paint0_linear_47_128"
                    x1="2.50784"
                    y1="22.0412"
                    x2="322.486"
                    y2="65.0473"
                    gradientUnits="userSpaceOnUse"
                    >
                    <stop offset="1" stop-color="#F7426F"></stop>
                    <stop offset="1" stop-color="#F87A58"></stop>
                    </linearGradient>
                </defs>
                </svg>
            </span>
            </h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="partner__grid-wrapper">
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/01.990cfaac.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/02.26220d5e.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/03.1fec9324.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/04.1d6fe294.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/05.656d6b91.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/06.dbe6d30e.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/07.b7f2f87e.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/08.fd1ffc44.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/09.2e24a739.png') }}"
                alt="image not found"
                />
            </div>
            </div>
            <div class="partner__item">
            <div class="partner__thumb">
                <img
                src="{{ URL::asset('build/media/10.ced8e199.png') }}"
                alt="image not found"
                />
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="trailer__area dark_light_class pt-60">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="trailer__wrapper p-relative">
            <div
            class="trailer__thumb include__bg"
            style="
            background-image: url('{{ URL::asset('build/media/trailer.2c9a7750.jpg') }};
            "
            >
            <div class="trailer__play-btn">
                <button type="button" class="video__play-btn popup-video">
                <i class="fa-solid fa-play"></i> PLAY TRAILER
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection