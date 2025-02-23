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
        <div class="blog_wrapper pb-20">
          <!-- Show selected tag if set -->
          @if(isset($selectedTag))
            <h2 class="text-center mb-4">Showing blogs for tag: {{ $selectedTag }}</h2>
          @endif
          @if(isset($selectedKeyword))
            <h2 class="text-center mb-4">Showing blogs for keyword: {{ $selectedKeyword }}</h2>
          @endif
          <div class="row g-4">
          @foreach ($blogs as $blog)
            <div class="col-md-6">
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
        {{ $blogs->links('pagination::bootstrap-5') }}
      </div>

      <!-- Sidebar Section -->
      <div class="col-lg-4">
        <div class="sidebar">
          

          <div class="sidebar_widget">
            <h3 class="widget_title">Keywords</h3>
            <ul class="icon_list unordered_list_block">
              @foreach($allkeywords as $keyword)
                <li>
                  <a href="{{ route('blogs', ['keyword' => $keyword->keyword]) }}">
                    {{ $keyword->keyword }} ({{ $keyword->blogs_count }})
                  </a>
                </li>
              @endforeach
            </ul>
          </div>

          <div class="sidebar_widget">
            <h3 class="widget_title">Tags List</h3>
            <ul class="tags_list unordered_list">
              @foreach($alltags as $tag)
                <li><a href="{{ route('blogs', ['tag' => $tag->tag]) }}">{{ $tag->tag }}</a></li>
              @endforeach  
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
