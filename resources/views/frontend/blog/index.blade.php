@extends('layouts.frontend')
@section('title')
Blogs
@endsection

@section('body')
<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15 text__highlight">Blogs</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Blogs</li>
      </ul>
    </div>
  </section>
</section>
<section class="blog_section dark_light_class section_space_lg">
  <div class="container">
    <div class="blog_grouped row justify-content-center">
      <div class="blog_responsive col-lg-8">
        <div class="blog_wrapper">
          <div class="row g-4">
          @foreach ($blogs as $blog)
            <div class="col-md-6">
              <div class="blog_item">
                <a class="item_image" href="{{route('blog-detail', $blog->id)}}"
                  ><img
                    src="{{ asset('images/blogs/'.$blog->image)}}"
                    alt="Blog Image"
                    style="height: 100%; width: 100%"
                /></a>
                <div class="item_content">
                  <div class="flex_wrap">
                    <ul class="category_list unordered_list">
                    <li>
                        @foreach($blog->tags as $tag)
                            <a href="{{ route('blog-detail', $blog->id) }}">{{ $tag->tag }}</a>
                        @endforeach
                    </li>
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
                      >{{$blog->created_at}}</span
                    >
                  </div>
                  <h3 class="item_title">
                    <a class="text-black" href="{{route('blog-detail', $blog->id)}}"
                      >{{$blog->title}}</a
                    >
                  </h3>
                  <div class="header__btn">
                    <a class="blog_custome_btn" href="{{route('blog-detail', $blog->id)}}"
                      >Read More<i class="fa-regular fa-angle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-xxl-12">
            <div
              class="pagination mt-40 ex-mmb-60 d-flex justify-content-center"
            >
              <nav>
                <ul>
                  <li><span class="current">01</span></li>
                  <li><a href="#">02</a></li>
                  <li><a href="#">03</a></li>
                  <li class="next">
                    <a href="#"><i class="fa-light fa-arrow-right-long"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div> -->
      </div>
      <div class="col col-lg-4">
        <div class="sidebar">
          <div class="sidebar_widget">
            <h3 class="widget_title">Search</h3>
            <div class="form-group kyeword_search_form mb-0">
              <input
                class="form-control"
                type="search"
                name="search"
                placeholder="Enter Kyeword"
              /><button type="submit">
                <img
                  src="{{ URL::asset('build/media/icon_search_white.9feab2ec.svg') }}"
                  style="height: auto; width: auto"
                  alt="Search Icon"
                />
              </button>
            </div>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Categories</h3>
            <ul class="icon_list unordered_list_block">
              <li><a href="blog">Marketing (03)</a></li>
              <li><a href="blog">Digital Agency (04)</a></li>
              <li><a href="blog">Real Estate Agency (06)</a></li>
              <li><a href="blog">Business Consulting (03)</a></li>
            </ul>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Recent Post</h3>
            <ul class="recent_post_list unordered_list_block">
              @foreach ($blogs as $blog)
                <li>
                  <div class="recent_post_item">
                    <a class="item_image" href="{{route('blog-detail', $blog->id)}}"
                      ><img
                        src="{{ asset('images/blogs/'.$blog->image)}}"
                        style="height: auto; width: 100%"
                        alt="Paradox Blog Image"
                    /></a>
                    <div class="item_content">
                      <ul class="meta_list unordered_list">
                      <li>
                          @foreach($blog->tags as $tag)
                              <a href="{{ route('blog-detail', $blog->id) }}">{{ $tag->tag }}</a>
                          @endforeach
                      </li>
                        <li><span>{{$blog->created_at}}</span></li>
                      </ul>
                      <h3 class="item_title">
                        <a href="{{route('blog-detail', $blog->id)}}"
                          >{{$blog->title}}</a
                        >
                      </h3>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Tags List</h3>
            <ul class="tags_list unordered_list">
              <li><a href="blog">Business</a></li>
              <li><a href="blog">Real Estate</a></li>
              <li><a href="blog">Events</a></li>
              <li><a href="blog">Social</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection