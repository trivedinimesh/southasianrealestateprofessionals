@extends('layouts.frontend-dashboard')
@section('title')
Add User
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
                                    <li><span><a href="{{route('users.index')}}">Users</a></span></li>
                                    <li class="active"><span>Create Users</span></li>
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
                                <a href="{{route('users.index')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <form method="POST" action="{{route('users.store')}}">
                                @csrf
                                <div class="create__input-wrapper row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text" >First Name<span class="text-danger">*</span></label>
                                                <input name="first_name" type="text" required value="{{ old('first_name') }}" />
                                                @error('first_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Last Name<span class="text-danger">*</span></label>
                                                <input name="last_name" type="text" required  value="{{ old('last_name') }}" />
                                                @error('last_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                                class="input__field-text">Email<span class="text-danger">*</span></label>
                                                <input name="email" type="email" required  value="{{ old('email') }}"/>
                                                @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 row">
                                        <div class="col-sm-3 singel__input-field mb-15"><label
                                            class="input__field-text">ISD Code<span class="text-danger">*</span></label>
                                            <input name="isd_code" type="text" required  value="{{ old('isd_code') }}"/>
                                            @error('isd_code')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-9 singel__input-field mb-15"><label
                                            class="input__field-text">Phone Number<span class="text-danger">*</span></label>
                                            <input name="phone_number" type="text" required  value="{{ old('phone_number') }}"/>
                                            @error('phone_number')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Role<span class="text-danger">*</span></label>
                                            <div class="contact__select">
                                                <select name="role">
                                                @foreach ($roles as $role)
                                                    <option class="capitalize" value="{{$role->name}}">{{$role->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15"><label
                                            class="input__field-text">Password<span class="text-danger">*</span></label>
                                            <input type="password" name="password" required  />
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <button class="input__btn w-100" type="submit">Create User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection