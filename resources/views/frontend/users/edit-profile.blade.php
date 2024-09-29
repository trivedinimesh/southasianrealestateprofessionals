@extends('layouts.frontend-dashboard')
@section('title')
Edit Profile
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
                                    <li><span><a href="{{route('profile')}}">Profile</a></span></li>
                                    <li class="active"><span>Edit Profile</span></li>
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
                                <h4 class="event__information-title">User Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <form method="POST" action="{{route('profile-update', $current_user->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="create__input-wrapper row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">

                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text" >First Name</label>
                                                <input name="first_name" type="text" value="{{$current_user->first_name}}" />
                                                @error('first_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">

                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Last Name</label>
                                                <input name="last_name" type="text" value="{{$current_user->last_name}}"/>
                                                @error('last_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">

                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Email</label>
                                                <input name="email" type="text" value="{{$current_user->email}}"/>
                                                @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">

                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Phone Number</label>
                                                <input name="phone_number" type="text" value="{{$current_user->phone_number}}"/>
                                                @error('phone_number')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <button class="input__btn w-100" type="submit">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection