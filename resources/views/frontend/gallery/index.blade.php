@extends('layouts.frontend')
@section('title')
Gallery
@endsection

@section('body')

<div class="mt-100">
    @foreach($galleries->groupBy('title') as $title => $groupedImages)
    @php $num = 1; @endphp
    <h2>{{ $title }}</h2>


    <div class="d-flex">
        @foreach($groupedImages as $image)
        <div class="column">
            <img class="demo-{{ $loop->parent->index }} cursor" src="{{ asset($image->image_path) }}" style="width:100%"
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

@endsection