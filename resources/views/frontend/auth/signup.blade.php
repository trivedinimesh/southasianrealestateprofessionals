@extends('layouts.frontend')
@section('title')
Signup
@endsection

@section('body')

<section class="login__area">
    <div class="sign__main-wrapper">
        <div class="sign__left">
            <div class="sign__center-wrapper text-center mt-80">
                <div class="sign__title-wrapper mb-40">
                    <h3 class="sign__title">Create An Account</h3>
                    <p>The faster you fill up, the faster you get a ticket</p>
                </div>
                <div class="sign__input-form text-center">
                    <form action="{{ route('signup.action') }}" method="POST">
                        @csrf
                        <div class="sign__input">
                            <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" />
                            <span><i class="flaticon-user-2"></i></span>
                        </div>
                        @if ($errors->has('first_name'))
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        @endif

                        <div class="sign__input">
                            <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" />
                            <span><i class="flaticon-user-2"></i></span>
                        </div>
                        @if ($errors->has('last_name'))
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif

                        <div class="sign__input">
                            <input type="text" name="isd_code" placeholder="ISD Code" value="{{ old('isd_code') }}" />
                            <span><i class="flaticon-user-2"></i></span>
                        </div>
                        @if ($errors->has('isd_code'))
                            <span class="text-danger">{{ $errors->first('isd_code') }}</span>
                        @endif

                        <div class="sign__input">
                            <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" />
                            <span><i class="flaticon-user-2"></i></span>
                        </div>
                        @if ($errors->has('phone_number'))
                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                        @endif

                        <div class="sign__input">
                            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" />
                            <span><i class="flaticon-user-2"></i></span>
                        </div>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif

                        <div class="sign__input">
                            <input type="password" name="password" placeholder="Enter Password" />
                            <span><i class="flaticon-password"></i></span>
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                        <!-- Password Confirmation Field -->
                        <div class="sign__input">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                            <span><i class="flaticon-password"></i></span>
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif


                        <div class="sing__button mb-20">
                            <button class="input__btn w-100 mb-20" type="submit">Sign Up</button>
                        </div>
                    </form>

                    <div class="if__account mt-90">
                        <p>Already have an account?<a href="{{ route('login') }}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="sign__right">
            <div class="sign__input-thumb include__bg w-img"
                style="background-image:url(_next/static/media/signup.080b8d66.jpg)"></div>
        </div>
    </div>
</section>

@endsection
