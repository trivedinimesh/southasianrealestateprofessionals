@extends('layouts.frontend-dashboard')
@section('title')
Add Gallery
@endsection

@section('body')

    <div class="app__slide-wrapper">
        <div class="breadcrumb__area">
            <div class="breadcrumb__wrapper mb-35">
                <div class="breadcrumb__main">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{route('gallery.list')}}">Gallery</a></span></li>
                                    <li class="active"><span>Create Gallery</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="create__event-area">
                    <div class="body__card-wrapper">
                        <div class="card__header-top">
                            <div class="card__title-inner">
                                <h4 class="event__information-title">Gallery</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('gallery.list')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>

                                <select class="tom-select-single form-control w-full" name="title" multiple>
                                    @foreach($events as $event)
                                        <option value="{{ $event->title }}">{{ $event->title }}</option>
                                    @endforeach
                                    @foreach($galleries as $gallery)
                                        <option value="{{ $gallery->title }}">{{ $gallery->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="images">Upload Images</label>
                                <input type="file" name="images[]" multiple>
                                @error('images.*')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                                    
                                    <button class="input__btn w-100" type="submit">Create Gallery</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection