@extends('layouts.frontend')
@section('title')
Gallery
@endsection

@section('body')


<section class="dark_light_class">
    <section class="page_banner text-center pt-90 pb-60">
        <div class="container decoration_wrap">
            <h1 class="page_title mb-15 text__highlight">Gallery</h1>
            <ul class="breadcrumb_nav unordered_list_center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </section>
    <section id="homeschedule" class="event__schedule-area dark_light_class pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
<div class="">
    @foreach($galleries->groupBy('title') as $title => $groupedImages)
    @php $num = 1; @endphp
    <h2 class="section__title mb-20">{{ $title }}</h2>


    <div class="d-flex mb-20">
        @foreach($groupedImages->take(5) as $image) <!-- Limit to 5 images -->
        <div class="column">
            <img class="demo-{{ $loop->parent->index }} cursor" src="{{ asset($image->image_path) }}" style="width:100%; height: auto;"
                onclick="openModal({{ $loop->parent->index }}); currentSlide({{$num++}}, {{ $loop->parent->index }})"
                alt="Nature and sunrise">
        </div>
        @endforeach
    </div>

    <div id="myModal-{{ $loop->index }}" class="modal">
        <span class="close cursor" onclick="closeModal({{ $loop->index }})">&times;</span>
        <div class="modal-content">
            @php $num = 1; @endphp
            @foreach($groupedImages as $image)
            <div class="mySlides-{{ $loop->parent->index }}">
                <img src="{{ asset($image->image_path) }}" style="width:100%">
            </div>
            @endforeach

            <a class="prev" onclick="plusSlides(-1, {{ $loop->index }})">&#10094;</a>
            <a class="next" onclick="plusSlides(1, {{ $loop->index }})">&#10095;</a>

            <div class="caption-container">
                <p id="caption-{{ $loop->index }}"></p>
            </div>

            @php $num = 1; @endphp
            <div class="d-flex">
                @foreach($groupedImages as $image)
                <div class="column">
                    <img class="demo-{{ $loop->parent->index }} cursor" src="{{ asset($image->image_path) }}"
                        style="width:100%" onclick="currentSlide({{ $num++ }}, {{ $loop->parent->index }})"
                        alt="Nature and sunrise">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
                </div>
            </div>
        </div>
    </section>
</section>





@endsection