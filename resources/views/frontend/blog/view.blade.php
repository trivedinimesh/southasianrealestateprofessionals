@extends('layouts.frontend')
@section('title')
Blog Details
@endsection

@section('body')
<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15 text__highlight">{{$blog->title}}</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blogs') }}">Blogs</a></li>
        <li>{{$blog->title}}</li>
      </ul>
    </div>
  </section>
</section>
<section class="details_section dark_light_class blog_details section_space_lg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="blog_responsive col col-lg-8">
        <div class="details_image">
          <img
            src="{{ asset('images/'.$blog->image)}}"
            width="1170"
            height="751"
            alt="Paradox Blog Details Image"
            style="height: 100%"
          />
        </div>
        <div class="details_content">
          <div class="blog_post_meta">
            <ul class="category_list unordered_list">
              <li><a href="#">{{$blog->tags}}</a></li>
            </ul>
            <span class="post_date">{{$blog->created_at}}</span>
          </div>
          
          {!! $blog->body !!}
          
          <div class="social_actions">
            <ul class="tags_list unordered_list">
              <li><a href="#">{{$blog->tags}}</a></li>
            </ul>
            <div class="footer__social">
              <a href="https://www.facebook.com/"
                ><i class="fa-brands fa-facebook"></i></a
              ><a href="https://twitter.com/"
                ><i class="fa-brands fa-twitter"></i></a
              ><a href="https://bd.linkedin.com/"
                ><i class="fa-brands fa-linkedin"></i></a
              ><a href="https://www.youtube.com/"
                ><i class="fa-brands fa-youtube"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="post_admin">
          <div class="admin_image">
            <img
              src="{{ URL::asset('build/media/chat-1.b476fa36.png') }}"
              alt="Paradox Blog Post Admin Image"
              style="width: auto; height: auto"
            />
          </div>
          <div class="admin_content">
            <h3 class="admin_name">{{$blog->created_by}}</h3>
          </div>
        </div>
        
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
                  alt="Search Icon"
                  style="height: auto; width: auto"
                />
              </button>
            </div>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Categories</h3>
            <ul class="icon_list unordered_list_block">
              <li><a href="#">Marketing (03)</a></li>
              <li><a href="#">Digital Agency (04)</a></li>
              <li><a href="#">Real Estate Agency (06)</a></li>
              <li><a href="#">Business Consulting (03)</a></li>
            </ul>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Recent Post</h3>
            <ul class="recent_post_list unordered_list_block">
            @foreach ($blogs as $blog)
              <li>
                <div class="recent_post_item">
                  <a class="item_image" href="{{route('blogs.show', $blog->id)}}"
                    ><img
                      src="{{ asset('images/'.$blog->image) }}"
                      style="height: auto; width: 100%"
                      alt="Paradox Blog Image"
                  /></a>
                  <div class="item_content">
                    <ul class="meta_list unordered_list">
                      <li><a href="#">{{$blog->tags}}</a></li>
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
              <li><a href="#">Business</a></li>
              <li><a href="#">Real Estate</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Social</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection