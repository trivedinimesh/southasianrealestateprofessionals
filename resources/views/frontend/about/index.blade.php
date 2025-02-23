@extends('layouts.frontend')
@section('title')
About
@endsection

@section('body')

<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15 text__highlight">About Us</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li>
          <a href="{{ route('home') }}">Home</a>
        </li>
        <li>About Us</li>
      </ul>
    </div>
  </section>
</section>
<section id="homeabout" class="about__area p-relative pt-90 dark_light_class pb-80">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="about__content-wrapper mb-60">
          <div class="section__title-wrapper mb-80">
            <span class="section__subtitle">ABOUT SARP</span>
            <h2 class="section__title"> EXPERIENCE A TRUE DIGITAL <span class="text__highlight">CONFERENCE <svg class="title-underline" width="328" height="31" viewBox="0 0 328 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 29C110 8.62517 326 -19.8996 326 29" stroke="url(#paint0_linear_47_128)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                  <defs>
                    <linearGradient id="paint0_linear_47_128" x1="2.50784" y1="22.0412" x2="322.486" y2="65.0473" gradientUnits="userSpaceOnUse">
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
              <p class="mb-35">Think of SAREP as the toolbox that equips you with the right tools to build your success in real estate. From first-time agents to seasoned veterans, everyone finds something to boost their career here.</p>
              <h3 class="mb-25">
              What We Offer
              </h3>
              <ul>
                <li class="d-flex align-items-center mb-25">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-map-marker-alt"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <h4>Networking Goldmine</h4>
                    <p>Meet industry pioneers, form lasting partnerships, and expand your reach within the South Asian real estate community.</p>
                  </div>
                </li>
                <li class="d-flex align-items-center mb-25">
                  <div class="offcanvas__contact-icon mr-15">
                  <i class="fal fa-map-marker-alt"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <h4>Learn from the Best</h4>
                    <p>Access cutting-edge workshops, expert webinars, and mentorship from top real estate professionals. No more wondering where to get reliable information—SAREP is your one-stop learning hub.</p>
                  </div>
                </li>
                <li class="d-flex align-items-center mb-25">
                  <div class="offcanvas__contact-icon mr-15">
                  <i class="fal fa-map-marker-alt"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <h4>Grow Your Business</h4>
                    <p>Our members d͏on͏’t just close d͏e͏al͏s—they build lasti͏ng re͏lationships and achieve͏ su͏stain͏able g͏rowth. With SAREP, you get the ͏tools and guidance͏ to͏ turn potential int͏o p͏rofit.</p>
                  </div>
                </li>
              </ul>

              </div>
          </div>
          <a class="fill__btn" href="{{ route('membership') }}">Join Now <i class="fa-regular fa-angle-right"></i>
          </a>
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
          <h2 class="section__title">OUR <span class="text__highlight"> BOARD OF DIRECTORS <svg class="title-underline" width="328" height="31" viewBox="0 0 328 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 29C110 8.62517 326 -19.8996 326 29" stroke="url(#paint0_linear_47_128)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_47_128" x1="2.50784" y1="22.0412" x2="322.486" y2="65.0473" gradientUnits="userSpaceOnUse">
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
    <div class="row ">
      @foreach ($bods as $bod)
        <div class=" col-md-3">
          <div class="speaker__list-item p-0 mb-30 ">
            <div class="speaker__list-thumb">
              <a href="#">
                <img src="{{ asset('images/bods/'.$bod->image)}}" alt="image not found">
              </a>
            </div>
            <div class="speaker__list-content-inner">
              <div class="speaker__list-content">
                <h5 class="speaker__author-title">
                  <a href="#">{{$bod->first_name}} {{$bod->last_name}}</a>
                </h5>
                <span class="speaker__author-info">{{$bod->designation}}</span>
              </div>
              <div class="speaker__list-social">
                <a href="{{$bod->fb_id}}">
                  <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="{{$bod->twitter_id}}">
                  <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="{{$bod->linkedin_id}}">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  
</div>
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
          
        </div>
      </div>
    </div>
    <div class="blog_grouped row justify-content-center">
      <div class="blog_responsive col-lg-12">
        <div class="blog_wrapper">
          <div class="row g-4">
          @foreach ($blogs as $blog)
            <div class="col-md-4">
              <div class="blog_item">
                <a class="item_image" href="{{ route('blog-detail', $blog->id) }}">
                  <img src="{{ asset('images/blogs/'.$blog->image)}}" alt="Blog Image" style="height: 100%; width: 100%">
                </a>
                <div class="item_content">
                  <div class="flex_wrap">
                    <ul class="category_list unordered_list">
                      <li>
                        @foreach($blog->keywords as $keyword)
                          <a href="{{ route('blogs', ['keyword' => $keyword->keyword]) }}">
                    {{ $keyword->keyword }} 
                  </a>
                        @endforeach
                      </li>
                    </ul>
                  </div>
                  <h3 class="item_title">
                    <a class="text-black" href="{{ route('blog-detail', $blog->id) }}">
                      {{$blog->title}}
                    </a>
                  </h3>
                  <div class="header__btn">
                    <a class="blog_custome_btn" href="{{ route('blog-detail', $blog->id) }}">
                      Read More<i class="fa-regular fa-angle-right"></i>
                    </a>
                    <span class="post_date" style="margin-left: 50px;">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- SVG icon -->
                      </svg>
                      <span style="margin-left: 20px">
                        {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
                      </span>
                    </span>
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