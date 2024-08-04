@extends('layouts.frontend') @section('title') Events @endsection
@section('body')

<section class="dark_light_class">
  <section class="page_banner text-center pt-150 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15">Events</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Events</li>
      </ul>
    </div>
  </section>
<section
    id="homeschedule"
    class="event__schedule-area dark_light_class pt-185 pb-150"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-xl-7 col-lg-6">
                <div class="section__title-wrapper is-left mb-110">
                    <span class="section__back-title">S</span
                    ><span class="section__subtitle">SCHEDULE OF EVENT</span>
                    <h2 class="section__title">
                        Conference
                        <span class="text__highlight">
                            Schedule<svg
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
                                        id="paint0_linear_47_1281"
                                        x1="2.50784"
                                        y1="22.0412"
                                        x2="322.486"
                                        y2="65.0473"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop
                                            offset="1"
                                            stop-color="#F7426F"
                                        ></stop>
                                        <stop
                                            offset="1"
                                            stop-color="#F87A58"
                                        ></stop>
                                    </linearGradient>
                                </defs></svg></span>
                    </h2>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-6">
                <div class="accordion__tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button
                                class="nav-link active"
                                id="nav-day-one-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-day-one"
                                type="button"
                                role="tab"
                                aria-controls="nav-day-one"
                                aria-selected="true"
                            >
                                day one</button
                            ><button
                                class="nav-link"
                                id="nav-day-tow-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-day-tow"
                                type="button"
                                role="tab"
                                aria-controls="nav-day-tow"
                                aria-selected="false"
                                tabindex="-1"
                            >
                                day two</button
                            ><button
                                class="nav-link"
                                id="nav-day-three-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-day-three"
                                type="button"
                                role="tab"
                                aria-controls="nav-day-three"
                                aria-selected="false"
                                tabindex="-1"
                            >
                                day three
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="schedule__accordion">
                    <div class="tab-content" id="nav-tabContent">
                        <div
                            class="tab-pane fade show active"
                            id="nav-day-one"
                            role="tabpanel"
                            aria-labelledby="nav-day-one-tab"
                            tabindex="0"
                        >
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="headingOne"
                                    >
                                        <span
                                            class="accordion-button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne"
                                            aria-expanded="true"
                                            aria-controls="collapseOne"
                                            ><span class="accordion__heading"
                                                ><span
                                                    class="accordion__meta accordion__meta-field"
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span
                                                            class="accordion__meta-contet-wrap"
                                                            ><span class="title"
                                                                >$75</span
                                                            ><button
                                                                type="button"
                                                                class="accordion__meta-contet-url"
                                                            >
                                                                Get Ticket Now
                                                            </button></span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__meta accordion-border"
                                                    ><span
                                                        class="accordion__meta-thumb"
                                                        ><img
                                                            src="{{ URL::asset('build/media/meta-01.png') }}"
                                                            alt="image not found" /></span
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span class="title"
                                                            >Fredric
                                                            Martin</span
                                                        ><span class="info"
                                                            >Digital
                                                            Marketer</span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__title_inner accordion-border"
                                                    ><span
                                                        class="accordion__title"
                                                        >BITPA Conference Dhaka
                                                        Meet up 2023</span
                                                    ></span
                                                ></span
                                            ></span
                                        >
                                    </h2>
                                    <div
                                        id="collapseOne"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <div class="accordiong__inner">
                                                <div
                                                    class="accordion__title-inner mb-25"
                                                >
                                                    <p>
                                                        Lorem ipsum, dolor sit
                                                        amet consectetur
                                                        adipisicing elit.
                                                        Quisquam, nulla.
                                                        Veritatis magnam esse
                                                        laboriosam aliquam sunt
                                                        voluptate sequi nesciunt
                                                        officia, sint culpa!
                                                        Numquam, soluta commodi.
                                                        Ex laborum natus iste
                                                        nihil?
                                                    </p>
                                                </div>
                                                <div
                                                    class="accordion__thumb w-img"
                                                >
                                                    <img
                                                        src="{{ URL::asset('build/media/schedule-thumb.jpg') }}"
                                                        alt="image not found"
                                                    />
                                                </div>
                                                <div class="accordiong__meta">
                                                    <span class="info"
                                                        ><i
                                                            class="fa-light fa-clock"
                                                        ></i>
                                                        3:00PM-4:30PM</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-calendar"
                                                        ></i
                                                        >November 09</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-placeholder-1"
                                                        ></i
                                                        >Sand diego,
                                                        Canada</span
                                                    >
                                                    <div class="header__btn">
                                                        <a class="blog_custome_btn" href="{{ route('event-detail') }}">Read More<i class="fa-regular fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-day-tow"
                            role="tabpanel"
                            aria-labelledby="nav-day-tow-tab"
                            tabindex="0"
                        >
                            <div class="accordion" id="accordionExample-p">
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="headingOne-p"
                                    >
                                        <span
                                            class="accordion-button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-p"
                                            aria-expanded="true"
                                            aria-controls="collapseOne-p"
                                            ><span class="accordion__heading"
                                                ><span
                                                    class="accordion__meta accordion__meta-field"
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span
                                                            class="accordion__meta-contet-wrap"
                                                            ><span class="title"
                                                                >$95</span
                                                            ><button
                                                                type="button"
                                                                class="accordion__meta-contet-url"
                                                            >
                                                                Get Ticket Now
                                                            </button></span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__meta accordion-border"
                                                    ><span
                                                        class="accordion__meta-thumb"
                                                        ><img
                                                            src="{{ URL::asset('build/media/meta-01.png') }}"
                                                            alt="image not found" /></span
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span class="title"
                                                            >Fredric
                                                            Martin</span
                                                        ><span class="info"
                                                            >Digital
                                                            Marketer</span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__title_inner accordion-border"
                                                    ><span
                                                        class="accordion__title"
                                                        >BITPA Conference Dhaka
                                                        Meet up 2023</span
                                                    ></span
                                                ></span
                                            ></span
                                        >
                                    </h2>
                                    <div
                                        id="collapseOne-p"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne-p"
                                        data-bs-parent="#accordionExample-p"
                                    >
                                        <div class="accordion-body">
                                            <div class="accordiong__inner">
                                                <div
                                                    class="accordion__title-inner mb-25"
                                                >
                                                    <p>
                                                        Lorem ipsum, dolor sit
                                                        amet consectetur
                                                        adipisicing elit.
                                                        Quisquam, nulla.
                                                        Veritatis magnam esse
                                                        laboriosam aliquam sunt
                                                        voluptate sequi nesciunt
                                                        officia, sint culpa!
                                                        Numquam, soluta commodi.
                                                        Ex laborum natus iste
                                                        nihil?
                                                    </p>
                                                </div>
                                                <div
                                                    class="accordion__thumb w-img"
                                                >
                                                    <img
                                                        src="{{ URL::asset('build/media/schedule-thumb.jpg') }}"
                                                        alt="image not found"
                                                    />
                                                </div>
                                                <div class="accordiong__meta">
                                                    <span class="info"
                                                        ><i
                                                            class="fa-light fa-clock"
                                                        ></i>
                                                        2:00PM-4:30PM</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-calendar"
                                                        ></i
                                                        >November 10</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-placeholder-1"
                                                        ></i
                                                        >Sand diego,
                                                        Canada</span
                                                    >
                                                    <div class="header__btn">
                                                        <a class="blog_custome_btn" href="{{ route('event-detail') }}">Read More<i class="fa-regular fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-day-three"
                            role="tabpanel"
                            aria-labelledby="nav-day-three-tab"
                            tabindex="0"
                        >
                            <div class="accordion" id="accordionExample-c">
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="headingOne-c"
                                    >
                                        <span
                                            class="accordion-button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-c"
                                            aria-expanded="true"
                                            aria-controls="collapseOne-c"
                                            ><span class="accordion__heading"
                                                ><span
                                                    class="accordion__meta accordion__meta-field"
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span
                                                            class="accordion__meta-contet-wrap"
                                                            ><span class="title"
                                                                >$85</span
                                                            ><button
                                                                type="button"
                                                                class="accordion__meta-contet-url"
                                                            >
                                                                Get Ticket Now
                                                            </button></span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__meta accordion-border"
                                                    ><span
                                                        class="accordion__meta-thumb"
                                                        ><img
                                                            src="{{ URL::asset('build/media/meta-01.png') }}"
                                                            alt="image not found" /></span
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span class="title"
                                                            >Fredric
                                                            Martin</span
                                                        ><span class="info"
                                                            >Digital
                                                            Marketer</span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__title_inner accordion-border"
                                                    ><span
                                                        class="accordion__title"
                                                        >BITPA Conference Dhaka
                                                        Meet up 2023</span
                                                    ></span
                                                ></span
                                            ></span
                                        >
                                    </h2>
                                    <div
                                        id="collapseOne-c"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne-c"
                                        data-bs-parent="#accordionExample-c"
                                    >
                                        <div class="accordion-body">
                                            <div class="accordiong__inner">
                                                <div
                                                    class="accordion__title-inner mb-25"
                                                >
                                                    <p>
                                                        Lorem ipsum, dolor sit
                                                        amet consectetur
                                                        adipisicing elit.
                                                        Quisquam, nulla.
                                                        Veritatis magnam esse
                                                        laboriosam aliquam sunt
                                                        voluptate sequi nesciunt
                                                        officia, sint culpa!
                                                        Numquam, soluta commodi.
                                                        Ex laborum natus iste
                                                        nihil?
                                                    </p>
                                                </div>
                                                <div
                                                    class="accordion__thumb w-img"
                                                >
                                                    <img
                                                        src="{{ URL::asset('build/media/schedule-thumb.jpg') }}"
                                                        alt="image not found"
                                                    />
                                                </div>
                                                <div class="accordiong__meta">
                                                    <span class="info"
                                                        ><i
                                                            class="fa-light fa-clock"
                                                        ></i>
                                                        2:00PM-4:30PM</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-calendar"
                                                        ></i
                                                        >November 11</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-placeholder-1"
                                                        ></i
                                                        >Sand diego,
                                                        Canada</span
                                                    >
                                                    <div class="header__btn">
                                                        <a class="blog_custome_btn" href="{{ route('event-detail') }}">Read More<i class="fa-regular fa-angle-right"></i></a>
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
            </div>
        </div>
    </div>
</section>
</section>

@endsection
