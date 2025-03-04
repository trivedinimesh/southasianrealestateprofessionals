@extends('layouts.frontend-dashboard')
@section('title')
    Change Password
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
                                <li><span><a href="{{ route('profile') }}"> User Profile </a></span></li>
                                <li class="active"><span> Change Password </span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <div class="form-group">
                        <label for="current_password">Current Password <span class="text-danger">*</span></label>
                        <input type="password" name="current_password" class="form-control" required oninput="this.value = this.value.trim()">
                        @if ($errors->has('current_password'))
                            <span class="text-danger">{{ $errors->first('current_password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password <span class="text-danger">*</span></label>
                        <input type="password" name="new_password" class="form-control" required oninput="this.value = this.value.trim()">
                        @if ($errors->has('new_password'))
                            <span class="text-danger">{{ $errors->first('new_password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="new_password_confirmation">Confirm New Password <span class="text-danger">*</span></label>
                        <input type="password" name="new_password_confirmation" class="form-control" required oninput="this.value = this.value.trim()">
                        @if ($errors->has('new_password_confirmation'))
                            <span class="text-danger">{{ $errors->first('new_password_confirmation') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>


        </div>
    </div>
</div>

@endsection
