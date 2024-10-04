@extends('layouts.frontend')
@section('title')
{{$blog->title}}
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
            src="{{ asset('images/blogs/'.$blog->image)}}"
            width="1170"
            height="751"
            alt="Paradox Blog Details Image"
            style="height: 100%"
          />
        </div>
        <div class="details_content">
          <div class="blog_post_meta">
            <ul class="category_list unordered_list">
            <li>
                @foreach($blog->keywords as $index => $keyword)
                  <a href="{{ route('blogs', ['keyword' => $keyword->keyword]) }}">
                    {{ $keyword->keyword }} 
                  </a>
                @endforeach
            </li>
            </ul>
            <span class="post_date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
          </div>
          
          {!! $blog->body !!}
          
          <div class="social_actions">
            <ul class="tags_list unordered_list">
            <li>
                @foreach($blog->tags as $index => $tag)
                <li><a href="{{ route('blogs', ['tag' => $tag->tag]) }}">{{ $tag->tag }}</a></li>
                @endforeach
            </li>
            </ul>
            <div class="footer__social">
              <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog-detail', $blog->id)) }}" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog-detail', $blog->id)) }}" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-twitter"></i>
              </a>
              <a href="https://bd.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blog-detail', $blog->id)) }}" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-linkedin"></i>
              </a>
              <a href="javascript:void(0)" onclick="copyLink('{{ route('blog-detail', $blog->id) }}')">
        <i class="fa-solid fa-copy"></i> <!-- Copy icon -->
    </a>
    <script>
                function copyLink(url) {
                    navigator.clipboard.writeText(url).then(function() {
                        alert('Blog link copied to clipboard!'); // Alert for confirmation
                    }, function(err) {
                        console.error('Could not copy text: ', err);
                    });
                }
            </script>

           
          </div>
          </div>
        </div>
        
        
      </div>
      <div class="col col-lg-4">
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
            <h3 class="widget_title">Recent Post</h3>
            <ul class="recent_post_list unordered_list_block">
            @foreach ($blogs as $blog)
              <li>
                <div class="recent_post_item">
                  <a class="item_image" href="{{route('blog-detail', $blog->id)}}"
                    ><img
                      src="{{ asset('images/blogs/'.$blog->image) }}"
                      style="height: auto; width: 100%"
                      alt="Paradox Blog Image"
                  /></a>
                  <div class="item_content">
                    <ul class="meta_list unordered_list">
                    <li>
                        @foreach($blog->tags as $index => $tag)
                            <a href="#">{{ $tag->tag }}</a>{{ $index < $blog->tags->count() - 1 ? ',' : '' }}
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