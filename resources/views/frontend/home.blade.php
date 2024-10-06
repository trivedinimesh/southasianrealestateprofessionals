@extends('layouts.frontend')
@section('title')
Home
@endsection

@section('body')

<section
    id="homeindex"
    class="banner__area banner__area-1 banner__height-1 d-flex align-items-center"
    style="background-image: url('{{ URL::asset('build/media/banner.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;"
    >
    <div class="spotlight"></div>
    <div class="banner__shape">
  
    <div class="container-fluid">
        <div class="row align-items-xl-end">
        <div class="col-xxl-7 col-xl-8 col-lg-6">
            <div class="banner__content">
            <h2 class="banner__title">
                Digital Thinkers<!-- -->
                <span class="text__highlight"> Conference </span>
            </h2>
            <div class="slider__btdn">
                <a class="fill__btn" href="#"
                >View More<i class="fa-regular fa-angle-right"></i
                ></a>
            </div>
            </div>
        </div>
        @if(!empty($events) && count($events) > 0)
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
                    
                    <path
                        d="M124 1H139C142.314 1 145 3.68629 145 7V220C145 223.314 142.314 226 139 226H7C3.68629 226 1 223.314 1 220V166.194"
                        stroke="#F87A58"
                        ></path>
                    </svg>
                </span>
                <div class="banner__card-info">
                    <span>WHEN AND WHERE</span>
                    <h4>
                    {{ \Carbon\Carbon::parse($events[0]->date)->format('F d') }} <br />
                    {{$events[0]->city}}, {{$events[0]->state}} <br />
                    </h4>
                </div>
                <div class="pluse__status">
                    <span class="dot"></span
                    ><span class="text">Online</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        @endif
        </div>
    </div>
    </div>
</section>
<section
    id="homeabout"
    class="about__area p-relative pt-90 dark_light_class pb-90"
    >
    <div class="about__shape-1">
    <img src="{{ URL::asset('build/media/shape/about-1.png') }}" alt="image not found" />
    </div>
    <div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="about__content-wrapper mb-60">
            <div class="section__title-wrapper mb-80">
            
            <h2 class="section__title">
                Welcome to 
                <span class="text__highlight"
                >
                SAREP
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
                <p class="mb-30">
                We are confident that with our amazing panel of progressive, experienced & successful real estate professionals, SAREP will be a great place to network, learn & grow your Real Estate Business.
                </p>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchange.
                </p>
            </div>
            </div>
            <a class="fill__btn" href="{{ route('aboutUs') }}"
            >FIND OUT MORE<i class="fa-regular fa-angle-right"></i
            ></a>
        </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="about__thumb-wrapper mb-60 p-relative">
            <div class="about__thumb-1 text-end w-img">
            <img
                src="{{ URL::asset('build/media/about/welcome_back.png') }}"
                alt="image not found"
                />
            <div class="panel wow"></div>
            </div>
            <div class="about__thumb-2 w-img">
            <img
                src="{{ URL::asset('build/media/about/welcome_front.png') }}"
                alt="image not found"
                />
            <div class="panel wow"></div>
            </div>
           
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
    
    <div class="container">
        <div class="join__main-wrapper pt-90 pb-90">
        <div class="row align-items-sm-start">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="join__features-wrapper mb-60">
                <div class="join__features-grid">
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-network"></i></span>
                    </div>
                    <h5 class="join__features-title">Educate & empower real estate professionals who serve South Asian communities.                    </h5>
                </div>
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-teamwork"></i></span>
                    </div>
                    <h5 class="join__features-title">Strengthen relationships among real estate professionals and industry stakeholders.</h5>
                </div>
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-speech"></i></span>
                    </div>
                    <h5 class="join__features-title">
                    Promote sustainable homeownership in South Asian communities.
                    </h5>
                </div>
                <div class="join__features-item text-center">
                    <div class="join__features-icon">
                    <span><i class="flaticon-confetti"></i></span>
                    </div>
                    <h5 class="join__features-title">Empower members to serve in leadership positions within the real estate industry, government, and community.                    </h5>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="join__content-wrapper mb-60">
                <div class="section__title-wrapper is-white mb-40">
                
                <h2 class="section__title">
                What is 
                    <span class="text__highlight">
                    SAREP
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
                    ?
                </h2>
                </div>
                <div class="join__content mb-70">
                <p>
                We are confident that with our amazing panel of progressive, experienced & successful real estate professionals, SAREP will be a great place to network, learn & grow your Real Estate Business.
                </p>
                <p class="mt-30">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                </div>
                <a class="fill__btn fill_btn_new" href="{{ route('membership') }}"
                >I'M READY TO BE A MEMBER!  <i class="fa-regular fa-angle-right"></i
                ></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<section class="blog_section dark_light_class section_space_lg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="blog__intro-innner mb-80">
          <div class="section__title-wrapper is-left">
            <h2 class="section__title"> UPCOMING <span class="text__highlight"> EVENTS <svg width="228" height="32" viewBox="0 0 228 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.6296 28.2336C77.1701 8.41978 226.159 -18.9833 225.79 29.9149" stroke="url(#paint0_linear_85_33)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                  <defs>
                    <linearGradient id="paint0_linear_85_33" x1="3.0318" y1="21.2777" x2="225.342" y2="43.5485" gradientUnits="userSpaceOnUse">
                      <stop offset="1" stop-color="#F7426F"></stop>
                      <stop offset="1" stop-color="#F87A58"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </span>
            </h2>
          </div>
          <a class="blog_custome_btn" href="{{ route('events') }}">View More <i class="fa-regular fa-angle-right"></i>
            </a>
        </div>
      </div>
    </div>
    <div class="blog_grouped row justify-content-center">
      <div class="blog_responsive col-lg-12">
        <div class="blog_wrapper">
          <div class="row g-4">
          @foreach ($events as $event)
            <div class="col-md-4">
              <div class="blog_item upcoming-event ">
                <a class="item_image" href="{{ route('event-detail', $event->id) }}">
                  <img src="{{ asset('images/events/'.$event->image)}}" alt="Blog Image" style="height: 100%; width: 100%" />
                </a>
                <div class="item_content">
                  <h3 class="item_title">
                    <a class="text-black" href="{{ route('event-detail', $event->id) }}">{{$event->title}}</a>
                  </h3>
                  <div class="flex_wrap d-grid">
                    <span>
                      <i class="flaticon-placeholder-1"></i>
                      {{$event->city}}, {{$event->state}}, {{$event->country}}
                    </span>
                    <span class="post_date text-black">
                      <span style="margin-right: 10px">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clipcxcxc0_89_209)">
                            <path d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z" fill="#7C7C7C"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_8vcvc9_209">
                              <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span>
                  </div>
                  <div class="header__btn">
                    <a class="blog_custome_btn w-100 justify-content-center" href="{{ route('event-detail', $event->id) }}">View More <i class="fa-regular fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-xxl-12">
            <div class="pagination mt-40 ex-mmb-60 d-flex justify-content-center">
              <nav>
                <ul>
                  <li>
                    <span class="current">01</span>
                  </li>
                  <li>
                    <a href="#">02</a>
                  </li>
                  <li>
                    <a href="#">03</a>
                  </li>
                  <li class="next">
                    <a href="#">
                      <i class="fa-light fa-arrow-right-long"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>
<section>
  <div class="partner__area grey-bg pt-90 pb-90">
      <div class=" justify-content-center container">
          <div class="col-xxl-12 col-xl-12">
          <div
              class="section__title-wrapper is-center text-center mb-110"
              >
            
              <h2 class="section__title">
              SPECIAL SHOUT-OUTS & THANK YOU FOR OUR
              <span class="text__highlight">
              SPONSORS!
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
      <div class="">
          <div class="col-12">
          <div class="partner__grid-wrapper">
            @foreach ($sponsors as $sponsor)
            <div class="partner__item">
              <div class="partner__thumb">
                  <img class="w-90"
                  src="{{ asset('images/sponsors/'.$sponsor->image)}}"
                  alt="image not found"
                  />
              </div>
            </div>
            @endforeach
          </div>
          </div>
      </div>  
  </div>
</section>
<section class="blog_section dark_light_class section_space_lg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="blog__intro-innner mb-80">
          <div class="section__title-wrapper is-left">
            <h2 class="section__title"> LATEST <span class="text__highlight"> BLOGS <svg width="228" height="32" viewBox="0 0 228 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.6296 28.2336C77.1701 8.41978 226.159 -18.9833 225.79 29.9149" stroke="url(#paint0_linear_85_33)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                  <defs>
                    <linearGradient id="paint0_linear_85_33" x1="3.0318" y1="21.2777" x2="225.342" y2="43.5485" gradientUnits="userSpaceOnUse">
                      <stop offset="1" stop-color="#F7426F"></stop>
                      <stop offset="1" stop-color="#F87A58"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </span>
            </h2>
          </div>
          <a class="blog_custome_btn" href="{{ route('blogs') }}">View More <i class="fa-regular fa-angle-right"></i>
            </a>
        </div>
      </div>
    </div>
    <div class="blog_grouped row justify-content-center">
      <div class="blog_responsive col-lg-12">
        <div class="blog_wrapper">
          <div class="row g-4">
          @foreach ($blogs as $blog)
            <div class="col-md-4">
              <div class="blog_item about-blog">
                <a class="item_image" href="{{route('blog-detail', $blog->id)}}">
                  <img src="{{ asset('images/blogs/'.$blog->image)}}" alt="Blog Image" style="height: 100%; width: 100%" />
                </a>
                <div class="item_content">
                  <h3 class="item_title">
                    <a class="text-white" href="{{route('blog-detail', $blog->id)}}">{{$blog->title}}</a>
                  </h3>
                  <div class="flex_wrap">
                    <ul class="category_list unordered_list">
                      <li>
                        <a href="{{route('blog-detail', $blog->id)}}">{{$blog->tags}}</a>
                      </li>
                    </ul>
                    <span class="post_date text-white">
                      <span style="margin-right: 10px">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clipcxcxc0_89_209)">
                            <path d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z" fill="#7C7C7C"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_8vcvc9_209">
                              <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>{{$blog->created_at}}</span>
                  </div>
                  <div class="header__btn">
                    <a class="blog_custome_btn" href="{{route('blog-detail', $blog->id)}}">Read More <i class="fa-regular fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-xxl-12">
            <div class="pagination mt-40 ex-mmb-60 d-flex justify-content-center">
              <nav>
                <ul>
                  <li>
                    <span class="current">01</span>
                  </li>
                  <li>
                    <a href="#">02</a>
                  </li>
                  <li>
                    <a href="#">03</a>
                  </li>
                  <li class="next">
                    <a href="#">
                      <i class="fa-light fa-arrow-right-long"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>

@endsection