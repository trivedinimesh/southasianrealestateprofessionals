@extends('layouts.frontend-dashboard')
@section('title')
Edit Website Setting
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
                                    <li><span><a href="{{route('websiteSetting.edit')}}">Website Setting</a></span></li>
                                    <li class="active"><span>Edit Website Setting</span></li>
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
                                <h4 class="event__information-title">Website Setting Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('websiteSetting.edit')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <div class="create__input-wrapper">
                            <form method="POST" action="{{route('websiteSetting.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="create__input-wrapper row">
                                    
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div>
                                            <label for="formFile" class="input__field-textlabel">Header Image <span class="text-danger">*</span></label><br/>
                                            <!-- Show the previous image if available -->
                                            @if($websiteSetting->header_image)
                                                <img src="{{ asset('images/header/' . $websiteSetting->header_image) }}" alt="Header Image" class="img-blog" width="200">
                                            @endif

                                            <input class="form-control" type="file" name="header_image">
                                            @error('header_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Header Title <span class="text-danger">*</span></label>
                                            <input name="header_title" type="text" value="{{$websiteSetting->header_title}}" required/>
                                            @error('header_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Contact Form Email <span class="text-danger">*</span></label>
                                            <input name="contact_form_email" type="email" value="{{$websiteSetting->contact_form_email}}" required/>
                                            @error('contact_form_email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Feedback Form Email <span class="text-danger">*</span></label>
                                            <input name="feedback_form_email" type="email" value="{{$websiteSetting->feedback_form_email}}" required/>
                                            @error('feedback_form_email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <button class="input__btn w-100" type="submit">Update</button>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection