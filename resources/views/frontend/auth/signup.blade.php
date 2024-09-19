@extends('layouts.frontend')
@section('title')
Signup
@endsection

@section('body')

<section class="signin__area">
    <div class="sign__main-wrapper">
        <div class="sign__left">
            <div class="sign__header">
                <div class="sign__logo"><a href="index.html"><img class="logo-black"
                            src="_next/static/media/color-logo.845aa965.svg" alt="image not found" /><img
                            class="logo-white" src="_next/static/media/color-logo-white.a79fee47.svg"
                            alt="image not found" /></a></div>
                <div class="sign__link custome_link"><a href="signin">Sign in</a><a href="signup">Sign
                        Up</a></div>
            </div>
            <div class="sign__center-wrapper text-center mt-80">
                <div class="sign__title-wrapper mb-40">
                    <h3 class="sign__title">Create An Account</h3>
                    <p>The faster you fill up. the faster you get a ticket</p>
                </div>
                <div class="sign__input-form text-center">
                    <form action="{{ route('signup.action') }}" method="POST">
                            @csrf
                        <div class="sign__input"><input type="text" name="first_name" placeholder="First Name" /><span><i
                                    class="flaticon-user-2"></i></span></div>
                                    @if ($errors->has('first_name'))
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    @endif
                        <div class="sign__input"><input type="text" name="last_name" placeholder="Last Name" /><span><i
                                    class="flaticon-user-2"></i></span></div>
                                    @if ($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    @endif
                        <div class="sign__input"><input type="email" name="email" placeholder="Email Address" /><span><i
                                    class="flaticon-user-2"></i></span></div>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                        <div class="sign__input"><input type="password" name="password"
                                placeholder="Enter Password" /><span><i
                                    class="flaticon-password"></i></span></div>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                        <!-- <div class="sign__input"><input type="password"
                                placeholder="Confirm Password" /><span><i
                                    class="flaticon-password"></i></span></div> -->
                        <div class="sing__button mb-20"><button class="input__btn w-100 mb-20"
                                type="submit">Sign Up</button><button class="gamil__sign-btn w-100"
                                type="submit"><span><svg width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_322_540)">
                                            <path
                                                d="M4.43242 12.0863L3.73625 14.6852L1.19176 14.739C0.431328 13.3286 0 11.7149 0 10C0 8.34179 0.403281 6.77804 1.11812 5.40112H1.11867L3.38398 5.81644L4.37633 8.06815C4.16863 8.67366 4.05543 9.32366 4.05543 10C4.05551 10.7341 4.18848 11.4374 4.43242 12.0863Z"
                                                fill="#FBBB00"></path>
                                            <path
                                                d="M19.8252 8.13184C19.94 8.73676 19.9999 9.36148 19.9999 9.99996C19.9999 10.7159 19.9246 11.4143 19.7812 12.0879C19.2944 14.3802 18.0224 16.3818 16.2604 17.7983L16.2598 17.7978L13.4065 17.6522L13.0027 15.1313C14.1719 14.4456 15.0857 13.3725 15.567 12.0879H10.2197V8.13184H15.645H19.8252Z"
                                                fill="#518EF8"></path>
                                            <path
                                                d="M16.2595 17.7977L16.2601 17.7983C14.5464 19.1757 12.3694 19.9999 9.99965 19.9999C6.19141 19.9999 2.88043 17.8713 1.19141 14.7389L4.43207 12.0862C5.27656 14.34 7.45074 15.9444 9.99965 15.9444C11.0952 15.9444 12.1216 15.6483 13.0024 15.1312L16.2595 17.7977Z"
                                                fill="#28B446"></path>
                                            <path
                                                d="M16.383 2.30219L13.1434 4.95437C12.2319 4.38461 11.1544 4.05547 10 4.05547C7.39344 4.05547 5.17859 5.73348 4.37641 8.06812L1.11871 5.40109H1.11816C2.78246 2.1923 6.1352 0 10 0C12.4264 0 14.6511 0.864297 16.383 2.30219Z"
                                                fill="#F14336"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_322_540">
                                                <rect width="20" height="20" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></span>Sign Up With Google</button></div>
                    </form>
                    <div class="if__account mt-90">
                        <p>Already have an account?<a href="{{ route('signin') }}">Sign in</a></p>
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