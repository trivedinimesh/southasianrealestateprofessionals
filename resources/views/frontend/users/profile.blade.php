@extends('layouts.frontend-dashboard')
@section('title')
Profile
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
                                    <li><span><a href="{{ route('dashboard') }}"> Home </a></span></li>
                                    <li class="active"><span> User Profile </span></li>
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
                                <h4 class="event__information-title">User Profile</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('edit-profile', $current_user->id)}}" class="btn btn-sm btn-success" >
                                    <i class="fas fa-left-to-line"></i> Edit
                                </a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                                <div class="create__input-wrapper row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="profile__user-item">
                                            <div class="profile__user-tiitle">
                                                <span>First Name:</span>
                                            </div>
                                            <div class="profile__user-info">
                                                <span>{{$current_user->first_name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="profile__user-item">
                                            <div class="profile__user-tiitle">
                                                <span>Last Name:</span>
                                            </div>
                                            <div class="profile__user-info">
                                                <span>{{$current_user->last_name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="profile__user-item">
                                            <div class="profile__user-tiitle">
                                                <span>Email:</span>
                                            </div>
                                            <div class="profile__user-info">
                                                <span>{{$current_user->email}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="profile__user-item">
                                            <div class="profile__user-tiitle">
                                                <span>Phone Number</span>
                                            </div>
                                            <div class="profile__user-info">
                                                <span>{{$current_user->isd_code}}-{{$current_user->phone_number}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 form-search">
                                        
                                            <a href="{{route('password.change')}}" class="btn btn-sm btn-success" >
                                                <i class="fas fa-left-to-line"></i> Change Password
                                            </a>
                                        
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection