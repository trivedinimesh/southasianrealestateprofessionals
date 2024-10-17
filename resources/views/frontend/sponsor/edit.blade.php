@extends('layouts.frontend-dashboard')
@section('title')
Edit Sponsor
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
                                    <li><span><a href="{{route('sponsor.index')}}">Sponsor</a></span></li>
                                    <li class="active"><span>Edit Sponsor</span></li>
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
                                <h4 class="event__information-title">Sponsor Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('sponsor.index')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <div class="create__input-wrapper">
                                <form method="POST" action="{{route('sponsor.update', $sponsor->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                    <div class="create__input-wrapper row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                            <div class="singel__input-field mb-15"><label
                                                    class="input__field-text" >Name</label>
                                                    <input name="name" type="text" value="{{$sponsor->name}}"/>
                                                    @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6  mb-20">
                                            <label for="formFile" class="input__field-text">Category</label>
                                            <select class="tom-select-single w-full" name="category">
                                            @foreach($categories as $category)
                                                <option value="{{ $category }}" 
                                                    @if($sponsor->category == $category) selected @endif>
                                                    {{ $category }}
                                                </option>
                                            @endforeach
                                            </select>
                                            @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6  mb-20">
                                            @if($sponsor->image)
                                                    <img src="{{ asset('images/sponsors/' . $sponsor->image) }}" alt="sponsor Image" class="img-blog w-100">
                                                @endif
                                           
                                                <!-- <label for="formFile" class="input__field-textlabel">Add Image</label> -->
                                               
                                                <input class="form-control" type="file" name="image">
                                                    @error('image')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                         
                                        </div>
                                        <button class="input__btn w-100" type="submit">Update Sponsor</button>
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