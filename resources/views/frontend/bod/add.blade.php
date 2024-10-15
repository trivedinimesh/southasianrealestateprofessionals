@extends('layouts.frontend-dashboard')
@section('title')
Add Board of Director
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
                                    <li><span><a href="{{route('board-of-director.index')}}">Board of Director</a></span></li>
                                    <li class="active"><span>Create Board of Director</span></li>
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
                                <h4 class="event__information-title">Board of Director Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('board-of-director.index')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <form method="POST" action="{{route('board-of-director.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="create__input-wrapper row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text" >First Name</label>
                                                <input name="first_name" type="text" value="{{ old('first_name') }}"/>
                                                @error('first_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Last Name</label>
                                                <input name="last_name" type="text" value="{{ old('last_name') }}"/>
                                                @error('last_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div>
                                            <label for="formFile" class="input__field-text">Add Image</label>
                                            <img src="" alt="" class="img-blog">
                                            <input class="form-control" type="file" name="image">
                                                @error('image')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Designation</label>
                                                <input name="designation" type="text" value="{{ old('designation') }}"/>
                                                @error('designation')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Facebook ID</label>
                                                <input name="fb_id" type="text" value="{{ old('fb_id') }}"/>
                                                @error('fb_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Twitter ID</label>
                                                <input name="twitter_id" type="text" value="{{ old('twitter_id') }}"/>
                                                @error('twitter_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Linkedin ID</label>
                                                <input name="linkedin_id" type="text" value="{{ old('linkedin_id') }}"/>
                                                @error('linkedin_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    
                                    <button class="input__btn w-100" type="submit">Create BOD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection