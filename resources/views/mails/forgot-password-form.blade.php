@extends('layouts.frontend')
@section('title')
Sign
@endsection

@section('body')

@php
            $data = \DB::table('password_reset_tokens')->where('token', $token)->first();
//                dd($data);
            $email = $data->email;
        @endphp


        <form class="card mt-5 p-5 md:p-10" action="{{route('reset.password.post')}}" method="POST" id="forgotpassword">
            @csrf
            <div class="mb-5 mt-5">
                <label class="label block mb-2" for="email">Email</label>
                <input id="email" type="text" class="form-control bg-gray-100" value="{{$email}}" name="email" disabled>
            </div>
            <input type="hidden" name="email" value="{{$email}}">
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-5">
                <label class="label block mb-2" for="password">Password</label>
                    <input id="new_password" type="password" class="form-control border-none" name="new_password">
                    <span class="flex items-center ltr:pr-4 rtl:pl-4">
                            <button type="button"
                                    class="btn btn-link text-gray-600 dark:text-gray-600 la la-eye text-xl leading-none"
                                    data-toggle="password-visibility"></button>
                        </span>
            </div>
            <div class="mb-5">
                <label class="label block mb-2" for="password">Confirm Password</label>
                    <input id="confirm_password" type="password" class="form-control border-none"
                           name="confirm_password">
                    <span class="flex items-center ltr:pr-4 rtl:pl-4">
                            <button type="button"
                                    class="btn btn-link text-gray-600 dark:text-gray-600 la la-eye text-xl leading-none"
                                    data-toggle="password-visibility"></button>
                        </span>
            </div>
            <div class="flex items-center">
                <button type="submit" class="btn input__btn uppercase">Change</button>
            </div>
        </form>

@endsection
