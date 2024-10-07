@extends('layouts.frontend')
@section('title')
Gallery
@endsection

@section('body')

<h1>Gallery</h1>

@foreach($galleries->groupBy('title') as $title => $groupedImages)
<h2>{{ $title }}</h2>
<div class="gallery-group">
    @foreach($groupedImages as $image)
        <div class="gallery-item">
            <img src="{{ asset($image->image_path) }}" alt="Image">
        </div>
    @endforeach
</div>
@endforeach

    


@endsection