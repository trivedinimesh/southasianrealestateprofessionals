@extends('layouts.frontend-dashboard')
@section('title')
Add Sponser
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
                                    <li><span><a href="{{route('sponser.index')}}">Sponser</a></span></li>
                                    <li class="active"><span>Create Sponser</span></li>
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
                                <h4 class="event__information-title">Sponser Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('sponser.index')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <form method="POST" action="{{route('sponser.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="create__input-wrapper row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text" >Name</label>
                                                <input name="name" type="text" />
                                                @error('name')
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
                                    <button class="input__btn w-100" type="submit">Create Sponser</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection