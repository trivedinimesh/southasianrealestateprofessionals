@extends('layouts.frontend')
@section('title')
Sign
@endsection

@section('body')

<section class="login__area">
    <div class="sign__main-wrapper">
        <div class="sign__left">
            <div class="sign__center-wrapper text-center mt-90">
                <div class="sign__title-wrapper mb-40">
                    <h3 class="sign__title">Welcome To SAREP</h3>
                    <p>The faster you fill up, the faster you get a ticket</p>
                </div>
                <div class="sign__input-form text-center">
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <div class="sign__input">
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
                            <span><i class="flaticon-user-2"></i></span>
                        </div>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif

                        <div class="sign__input">
                            <input type="password" placeholder="Password" name="password" />
                            <span><i class="flaticon-password"></i></span>
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                        <div class="sign__action">
                            <div class="sign__forget">
                                <span><a href="{{ route('forgot.password') }}">Forget Password?</a></span>
                            </div>
                        </div>

                        <div class="sing__button mb-20">
                            <button class="input__btn w-100 mb-20" type="submit">Login</button>
                        </div>
                    </form>

                    <div class="if__account mt-85">
                        <p>Don’t Have An Account?<a href="{{ route('signup') }}"> Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="sign__right">
            <div class="sign__input-thumb"
                style="background-image:url(_next/static/media/login.3bcc7c81.jpg)"></div>
        </div>
    </div>
</section>

@endsection
