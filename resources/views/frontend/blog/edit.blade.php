@extends('layouts.frontend-dashboard')
@section('title')
Add Blog
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
                                    <li><span><a href="{{route('blogs.list')}}">Blogs</a></span></li>
                                    <li class="active"><span>Edit Blogs</span></li>
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
                                <h4 class="event__information-title">Blog Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                            <a href="{{route('blogs.list')}}" class="btn btn-sm btn-primary" >
                                <i class="fas fa-left-to-line"></i> Back
                            </a>
                        </div>
                        </div>
                        <div class="pt-25">
                            <div class="create__input-wrapper">
                                <form method="POST" action="{{route('blogs.store')}}">
                                @csrf
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text" >Title</label>
                                        <input name="title" type="text" />
                                        @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text" >Content</label>
                                        <textarea class="form-control" name="body" id="floatingTextarea" cols="30" rows="10"></textarea>
                                        <input name="body" type="text" />
                                        @error('body')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label for="formFile" class="input__field-textlabel">Add Image</label>
                                        <img src="" alt="" class="img-blog">
                                        <input class="form-control" type="file" name="image">
                                            @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text">keywords</label>
                                        <input name="keywords" type="text" />
                                        @error('keywords')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text">tags</label>
                                        <input name="tags" type="text" />
                                        @error('tags')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <button class="input__btn w-100"
                                        type="submit">Edit Blog</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection