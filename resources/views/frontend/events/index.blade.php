@extends('layouts.frontend') @section('title') Events @endsection
@section('body')

<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15 text__highlight">Events</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Events</li>
      </ul>
    </div>
  </section>
<section
    id="homeschedule"
    class="event__schedule-area dark_light_class pt-90 pb-90"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-xl-7 col-lg-6">
                <div class="section__title-wrapper is-left mb-110">
                    <span class="section__subtitle">SCHEDULE OF EVENT</span>
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
            <!-- <div class="col-xxl-5 col-xl-5 col-lg-6">
                <div class="accordion__tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button
                                class="nav-link active"
                                id="nav-june-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-june"
                                type="button"
                                role="tab"
                                aria-controls="nav-june"
                                aria-selected="true"
                            >
                                June</button
                            ><button
                                class="nav-link"
                                id="nav-july-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-july"
                                type="button"
                                role="tab"
                                aria-controls="nav-july"
                                aria-selected="false"
                                tabindex="-1"
                            >
                                July</button
                            ><button
                                class="nav-link"
                                id="nav-august-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-august"
                                type="button"
                                role="tab"
                                aria-controls="nav-august"
                                aria-selected="false"
                                tabindex="-1"
                            >
                                August
                            </button>
                        </div>
                    </nav>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="schedule__accordion">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- <div
                        class="tab-pane fade show active"
                        id="nav-june"
                        role="tabpanel"
                        aria-labelledby="nav-june-tab"
                        tabindex="0"> -->
                        @foreach ($events as $event)
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
                                            >
                                            <span class="accordion__heading">
                                                <span class="accordion__meta accordion__meta-field">
                                                    <span class="accordion__meta-contet  d-flex column-gap-lg-5">
                                                        <span class="accordion__meta-contet-wrap">
                                                            <span class="title">
                                                                ${{$event->price_member}}
                                                            </span>
                                                            <button type="button" class="accordion__meta-contet-url">
                                                                Members
                                                            </button>
                                                        </span>
                                                        <span class="accordion__meta-contet-wrap">
                                                            <span class="title">
                                                                ${{$event->price_non_member}}
                                                            </span>
                                                            <button type="button" class="accordion__meta-contet-url">
                                                                Non-Members
                                                            </button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span
                                                    class="accordion__meta accordion-border"
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span class="title"
                                                            >{{$event->title}}</span
                                                        ><span class="info"
                                                            >{{$event->address}}, {{$event->city}}, {{$event->state}}, {{$event->country}}, {{$event->pincode}}</span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__title_inner"
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
                                                    {!! $event->details !!}
                                                    </p>
                                                </div>
                                                <div
                                                    class="accordion__thumb w-img"
                                                >
                                                    <img
                                                        src="{{ asset('images/events/'.$event->image)}}"
                                                        alt="image not found"
                                                    />
                                                </div>
                                                <div class="accordiong__meta">
                                                    <span class="info"
                                                        ><i
                                                            class="fa-light fa-clock"
                                                        ></i>
                                                        {{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-calendar"
                                                        ></i
                                                        >{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-placeholder-1"
                                                        ></i
                                                        >{{$event->city}}, {{$event->state}}, {{$event->country}}</span
                                                    >
                                                    <div class="header__btn">
                                                        <a class="blog_custome_btn" href="{{route('event-detail', $event->id)}}">Read More<i class="fa-regular fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- </div> -->
                        <!-- <div
                            class="tab-pane fade"
                            id="nav-july"
                            role="tabpanel"
                            aria-labelledby="nav-july-tab"
                            tabindex="0">
                            <div class="accordion" id="accordionExample-p">
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
                                            >
                                            <span class="accordion__heading">
                                                <span class="accordion__meta accordion__meta-field">
                                                    <span class="accordion__meta-contet  d-flex column-gap-lg-5">
                                                        <span class="accordion__meta-contet-wrap">
                                                            <span class="title">
                                                                $85
                                                            </span>
                                                            <button type="button" class="accordion__meta-contet-url">
                                                                Members
                                                            </button>
                                                        </span>
                                                        <span class="accordion__meta-contet-wrap">
                                                            <span class="title">
                                                                $95
                                                            </span>
                                                            <button type="button" class="accordion__meta-contet-url">
                                                                Non-Members
                                                            </button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span
                                                    class="accordion__meta accordion-border"
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span class="title"
                                                            >Annual Gala - Milano Event Center</span
                                                        ><span class="info"
                                                            >16555 Creekbend Dr; Sugarland, TX 77478</span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__title_inner"
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
                                                        Join us for an evening filled with networking, industry updates, delicious food, drinks, exiting casino entertainment, a silent auction, and much more!
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
                                                        6:00PM-9.00PM</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-calendar"
                                                        ></i
                                                        >July 24</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-placeholder-1"
                                                        ></i
                                                        >Sugarland, Texas</span
                                                    >
                                                    <div class="header__btn">
                                                        <a class="blog_custome_btn" href="#">Read More<i class="fa-regular fa-angle-right"></i></a>
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
                            id="nav-august"
                            role="tabpanel"
                            aria-labelledby="nav-august-tab"
                            tabindex="0">
                            <div class="accordion" id="accordionExample-c">
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
                                            >
                                            <span class="accordion__heading">
                                                <span class="accordion__meta accordion__meta-field">
                                                    <span class="accordion__meta-contet  d-flex column-gap-lg-5">
                                                        <span class="accordion__meta-contet-wrap">
                                                            <span class="title">
                                                                $85
                                                            </span>
                                                            <button type="button" class="accordion__meta-contet-url">
                                                                Members
                                                            </button>
                                                        </span>
                                                        <span class="accordion__meta-contet-wrap">
                                                            <span class="title">
                                                                $95
                                                            </span>
                                                            <button type="button" class="accordion__meta-contet-url">
                                                                Non-Members
                                                            </button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span
                                                    class="accordion__meta accordion-border"
                                                    ><span
                                                        class="accordion__meta-contet"
                                                        ><span class="title"
                                                            >Annual Gala - Milano Event Center</span
                                                        ><span class="info"
                                                            >16555 Creekbend Dr; Sugarland, TX 77478</span
                                                        ></span
                                                    ></span
                                                ><span
                                                    class="accordion__title_inner"
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
                                                        Join us for an evening filled with networking, industry updates, delicious food, drinks, exiting casino entertainment, a silent auction, and much more!
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
                                                        6:00PM-9.00PM</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-calendar"
                                                        ></i
                                                        >August 24</span
                                                    ><span
                                                        ><i
                                                            class="flaticon-placeholder-1"
                                                        ></i
                                                        >Sugarland, Texas</span
                                                    >
                                                    <div class="header__btn">
                                                        <a class="blog_custome_btn" href="#">Read More<i class="fa-regular fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>

@endsection
