@extends('layouts.frontend')
@section('title')
About
@endsection

@section('body')

<section class="dark_light_class">
  <section class="page_banner text-center pt-150 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15">About Us</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>About Us</li>
      </ul>
    </div>
  </section>
  <section
    id="homeabout"
    class="about__area p-relative pt-150 dark_light_class pb-80"
  >
    <div class="about__shape-1">
      <img src="{{ URL::asset('build/media/about-1.png') }}" alt="image not found" />
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
                  >CONFERENCE<svg
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
                    </defs></svg></span>
              </h2>
            </div>
            <div class="about__content">
              <div class="about__text">
                <h4>
                  How you transform your business as technology, consumer habits
                  industry dynamic
                </h4>
                <p class="mb-30">
                  Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                  auctor, nisi elit consequat ipsum, nec sagittis sem nibh.
                </p>
                <p>
                  Lorem ipsum proin gravida nibh vel velit auctor aliquet.
                  Aeneansollicitudin, lorem quis bibendum auctonisi elit
                  consequat ipsum nec sagittis sem nibh id elit. Duis sed odio
                  sit amet nibh vulputate cursusa sit amet mauris. Morbi
                  accumsan ipsum velit.” Nam nec tellus a odio tincidunt.
                </p>
              </div>
              <div class="about__location-info mb-80">
                <div class="about__location-inner">
                  <div class="about__location-icon">
                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                  </div>
                  <div class="about__location-address">
                    <h5>WHEN AND WHERE</h5>
                    <span>November 9–10 <br />The Midway SF, Zoom</span>
                  </div>
                </div>
                <div class="pluse__status">
                  <span class="dot"></span><span class="text">Online</span>
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
              <img src="{{ URL::asset('build/media/about/img1.jpg') }}" alt="image not found" />
              <div class="panel wow"></div>
            </div>
            <div class="about__thumb-2 w-img">
              <img src="{{ URL::asset('build/media/about/img2.jpg') }}" alt="image not found" />
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
</section>

@endsection