@extends('layouts.frontend')
@section('title')
About
@endsection

@section('body')

<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
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
    class="about__area p-relative pt-90 dark_light_class pb-80"
  >
   
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
  <div class="speaker__area pb-60 pt-90 dark_light_class speaker-bg-white">
    <div class="schedule__content container-fluid">
        <div class="row justify-content-center">
            <div class="col-xxl-6">
                <div class="section__title-wrapper is-center text-center mb-110">
                    <h2 class="section__title">TALENTED <span class="text__highlight"> SPEAKERS <svg
                                class="title-underline" width="328" height="31" viewBox="0 0 328 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 29C110 8.62517 326 -19.8996 326 29" stroke="url(#paint0_linear_47_128)"
                                    stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_47_128" x1="2.50784" y1="22.0412" x2="322.486"
                                        y2="65.0473" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#F7426F"></stop>
                                        <stop offset="1" stop-color="#F87A58"></stop>
                                    </linearGradient>
                                </defs>
                            </svg></span></h2>
                </div>
            </div>
        </div>
        <div class="row ">
        <div class=" col-md-3">
    <div class="speaker__list-item p-0 mb-30 ">
        <div class="speaker__list-thumb"><a href="/speaker-details-two/3"><img
                    src="{{ URL::asset('build/media/03.7d6f5423.jpg') }}" alt="image not found"></a></div>
        <div class="speaker__list-content-inner">
            <div class="speaker__list-content">
                <h5 class="speaker__author-title"><a href="/speaker-details-two/3">Bruce S. Smith</a></h5><span
                    class="speaker__author-info">Digital Marketer</span>
            </div>
            <div class="speaker__list-social"><a href="https://www.facebook.com/"><i
                        class="fa-brands fa-facebook"></i></a><a href="https://twitter.com/"><i
                        class="fa-brands fa-twitter"></i></a><a href="https://bd.linkedin.com/"><i
                        class="fa-brands fa-linkedin"></i></a><a href="https://www.youtube.com/"><i
                        class="fa-brands fa-youtube"></i></a></div>
        </div>
    </div>

</div>
<div class=" col-md-3">
    <div class="speaker__list-item p-0 mb-30 ">
        <div class="speaker__list-thumb"><a href="/speaker-details-two/3"><img
                    src="{{ URL::asset('build/media/03.7d6f5423.jpg') }}" alt="image not found"></a></div>
        <div class="speaker__list-content-inner">
            <div class="speaker__list-content">
                <h5 class="speaker__author-title"><a href="/speaker-details-two/3">Bruce S. Smith</a></h5><span
                    class="speaker__author-info">Digital Marketer</span>
            </div>
            <div class="speaker__list-social"><a href="https://www.facebook.com/"><i
                        class="fa-brands fa-facebook"></i></a><a href="https://twitter.com/"><i
                        class="fa-brands fa-twitter"></i></a><a href="https://bd.linkedin.com/"><i
                        class="fa-brands fa-linkedin"></i></a><a href="https://www.youtube.com/"><i
                        class="fa-brands fa-youtube"></i></a></div>
        </div>
    </div>

</div>
<div class=" col-md-3">
    <div class="speaker__list-item p-0 mb-30 ">
        <div class="speaker__list-thumb"><a href="/speaker-details-two/3"><img
                    src="{{ URL::asset('build/media/03.7d6f5423.jpg') }}" alt="image not found"></a></div>
        <div class="speaker__list-content-inner">
            <div class="speaker__list-content">
                <h5 class="speaker__author-title"><a href="/speaker-details-two/3">Bruce S. Smith</a></h5><span
                    class="speaker__author-info">Digital Marketer</span>
            </div>
            <div class="speaker__list-social"><a href="https://www.facebook.com/"><i
                        class="fa-brands fa-facebook"></i></a><a href="https://twitter.com/"><i
                        class="fa-brands fa-twitter"></i></a><a href="https://bd.linkedin.com/"><i
                        class="fa-brands fa-linkedin"></i></a><a href="https://www.youtube.com/"><i
                        class="fa-brands fa-youtube"></i></a></div>
        </div>
    </div>

</div>
<div class=" col-md-3">
    <div class="speaker__list-item p-0 mb-30 ">
        <div class="speaker__list-thumb"><a href="/speaker-details-two/3"><img
                    src="{{ URL::asset('build/media/03.7d6f5423.jpg') }}" alt="image not found"></a></div>
        <div class="speaker__list-content-inner">
            <div class="speaker__list-content">
                <h5 class="speaker__author-title"><a href="/speaker-details-two/3">Bruce S. Smith</a></h5><span
                    class="speaker__author-info">Digital Marketer</span>
            </div>
            <div class="speaker__list-social"><a href="https://www.facebook.com/"><i
                        class="fa-brands fa-facebook"></i></a><a href="https://twitter.com/"><i
                        class="fa-brands fa-twitter"></i></a><a href="https://bd.linkedin.com/"><i
                        class="fa-brands fa-linkedin"></i></a><a href="https://www.youtube.com/"><i
                        class="fa-brands fa-youtube"></i></a></div>
        </div>
    </div>

</div>
</div>
</div>
  <section class="blog_section dark_light_class section_space_lg">
  <div class="container">
  <div class="row align-items-center">
      <div class="col-12">
        <div class="blog__intro-innner mb-80">
          <div class="section__title-wrapper is-left">
            
            <h2 class="section__title">
              EXPOVENT 
              <span class="text__highlight">
              INSIGHTS
                <svg
                  width="228"
                  height="32"
                  viewBox="0 0 228 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2.6296 28.2336C77.1701 8.41978 226.159 -18.9833 225.79 29.9149"
                    stroke="url(#paint0_linear_85_33)"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <defs>
                    <linearGradient
                      id="paint0_linear_85_33"
                      x1="3.0318"
                      y1="21.2777"
                      x2="225.342"
                      y2="43.5485"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop offset="1" stop-color="#F7426F"></stop>
                      <stop offset="1" stop-color="#F87A58"></stop>
                    </linearGradient>
                  </defs></svg></span>
            </h2>
          </div>
          <div class="blog__pagination">
            <div
              class="testimonial-slider-dot bd-swiper-dot swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"
            >
              <span
                class="swiper-pagination-bullet swiper-pagination-bullet-active"
              ></span
              ><span class="swiper-pagination-bullet"></span
              ><span class="swiper-pagination-bullet"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog_grouped row justify-content-center">
      <div class="blog_responsive col-lg-12">
        <div class="blog_wrapper">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="blog_item">
                <a class="item_image" href="{{ route('blog-detail') }}"
                  ><img
                    src="{{ URL::asset('build/media/blog-1.00bb18f1.jpg') }}"
                    alt="Blog Image"
                    style="height: 100%; width: 100%"
                /></a>
                <div class="item_content">
                  
                  <h3 class="item_title">
                    <a href="{{ route('blog-detail') }}"
                      >Event Security: Ensuring Safety and Peace of Mind</a
                    >
                  </h3>
                  <div class="flex_wrap">
                    <ul class="category_list unordered_list">
                      <li><a href="{{ route('blog-detail') }}">UI/UX</a></li>
                    </ul>
                    <span class="post_date"
                      ><span style="margin-right: 10px"
                        ><svg
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g clip-path="url(#clipcxcxc0_89_209)">
                            <path
                              d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z"
                              fill="#7C7C7C"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_8vcvc9_209">
                              <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                          </defs></svg></span
                      >25 Sep, 2023</span
                    >
                  </div>
                  <div class="header__btn">
                    <a class="blog_custome_btn" href="{{ route('blog-detail') }}"
                      >Read More<i class="fa-regular fa-angle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog_item">
                <a class="item_image" href="{{ route('blog-detail') }}"
                  ><img
                    src="{{ URL::asset('build/media/blog-1.00bb18f1.jpg') }}"
                    alt="Blog Image"
                    style="height: 100%; width: 100%"
                /></a>
                <div class="item_content">
                  
                  <h3 class="item_title">
                    <a href="{{ route('blog-detail') }}"
                      >Event Security: Ensuring Safety and Peace of Mind</a
                    >
                  </h3>
                  <div class="flex_wrap">
                    <ul class="category_list unordered_list">
                      <li><a href="{{ route('blog-detail') }}">UI/UX</a></li>
                    </ul>
                    <span class="post_date"
                      ><span style="margin-right: 10px"
                        ><svg
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g clip-path="url(#clipcxcxc0_89_209)">
                            <path
                              d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z"
                              fill="#7C7C7C"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_8vcvc9_209">
                              <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                          </defs></svg></span
                      >25 Sep, 2023</span
                    >
                  </div>
                  <div class="header__btn">
                    <a class="blog_custome_btn" href="{{ route('blog-detail') }}"
                      >Read More<i class="fa-regular fa-angle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog_item">
                <a class="item_image" href="{{ route('blog-detail') }}"
                  ><img
                    src="{{ URL::asset('build/media/blog-1.00bb18f1.jpg') }}"
                    alt="Blog Image"
                    style="height: 100%; width: 100%"
                /></a>
                <div class="item_content">
                  
                  <h3 class="item_title">
                    <a href="{{ route('blog-detail') }}"
                      >Event Security: Ensuring Safety and Peace of Mind</a
                    >
                  </h3>
                  <div class="flex_wrap">
                    <ul class="category_list unordered_list">
                      <li><a href="{{ route('blog-detail') }}">UI/UX</a></li>
                    </ul>
                    <span class="post_date"
                      ><span style="margin-right: 10px"
                        ><svg
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g clip-path="url(#clipcxcxc0_89_209)">
                            <path
                              d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z"
                              fill="#7C7C7C"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_8vcvc9_209">
                              <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                          </defs></svg></span
                      >25 Sep, 2023</span
                    >
                  </div>
                  <div class="header__btn">
                    <a class="blog_custome_btn" href="{{ route('blog-detail') }}"
                      >Read More<i class="fa-regular fa-angle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xxl-12">
            <div
              class="pagination mt-40 ex-mmb-60 d-flex justify-content-center"
            >
              <nav>
                <ul>
                  <li><a href="#">01</a></li>
                  <li><span class="current">02</span></li>
                  <li><a href="#">03</a></li>
                  <li class="next">
                    <a href="#"><i class="fa-light fa-arrow-right-long"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</section>

@endsection