@extends('layouts.frontend-dashboard')
@section('title')
Add Event
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
                                    <li><span><a href="{{route('events.list')}}">Events</a></span></li>
                                    <li class="active"><span>Create Events</span></li>
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
                                <h4 class="event__information-title">Event Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <a href="{{route('events.list')}}" class="btn btn-sm btn-primary" >
                                    <i class="fas fa-left-to-line"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="pt-25">
                            <form method="POST" action="{{route('events.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="create__input-wrapper row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Title</label>
                                            <input name="title" type="text" value="{{ old('title') }}"/>
                                            @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div>
                                            <label for="formFile" class="input__field-text">Add Image</label>
                                            <img src="" alt="" class="img-blog">
                                            <input class="form-control" type="file" name="image">
                                                @error('image')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Details</label>
                                            <textarea class="form-control" name="details" id="floatingTextarea" cols="30" rows="10"></textarea>
                                            <script>
                                                // Initialize CKEditor
                                                ClassicEditor
                                                    .create(document.querySelector('textarea'))
                                                    .then(editor => {
                                                        console.log('Editor was initialized', editor);
                                                    })
                                                    .catch(error => {
                                                        console.error('Error during initialization of the editor', error);
                                                    });
                                            </script>
                                            @error('details')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Date</label>
                                            <input name="date" type="date" value="{{ old('date') }}"/>
                                            @error('date')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Start Time</label>
                                            <input name="start_time" type="time" value="{{ old('start_time') }}" />
                                            @error('start_time')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">End Time</label>
                                            <input name="end_time" type="time" value="{{ old('last_name') }}" />
                                            @error('end_time')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Member Price</label>
                                            <input name="price_member" type="number" value="{{ old('price_member') }}" />
                                            @error('price_member')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Non Member Price</label>
                                            <input name="price_non_member" type="number" value="{{ old('price_non_member') }}" />
                                            @error('price_non_member')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Status</label>
                                            <input type="checkbox" name="is_active" checked value="1"> Active
                                            @error('is_active')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Members Only</label>
                                            <input type="checkbox" name="members_only" value="1"> Active
                                            @error('members_only')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                        <label for="formFile" class="input__field-text">Features</label>
                                        <select class="tom-select-multiple w-full" name="features[]" multiple>
                                            @foreach($features as $feature)
                                                <option value="{{ $feature->feature }}">{{ $feature->feature }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Address</label>
                                            <input name="address" type="text" value="{{ old('address') }}" />
                                            @error('address')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Country</label>
                                            <input name="country" type="text" value="{{ old('country') }}" />
                                            @error('country')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >State</label>
                                            <input name="state" type="text" value="{{ old('state') }}"/>
                                            @error('state')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >City</label>
                                            <input name="city" type="text" value="{{ old('city') }}"/>
                                            @error('city')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text" >Zip Code</label>
                                            <input name="pincode" type="text" value="{{ old('pincode') }}"/>
                                            @error('pincode')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="input__btn w-100"
                                        type="submit">Create Event</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection