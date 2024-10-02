@extends('layouts.frontend-dashboard')
@section('title')
Edit Blog
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
                                    <li><span><a href="{{route('blogs.list')}}">Blogs</a></span></li>
                                    <li class="active"><span>Edit Blogs</span></li>
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
                                <h4 class="event__information-title">Blog Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                            <a href="{{route('blogs.list')}}" class="btn btn-sm btn-primary" >
                                <i class="fas fa-left-to-line"></i> Back
                            </a>
                        </div>
                        </div>
                        <div class="pt-25">
                            <div class="create__input-wrapper">
                                <form method="POST" action="{{route('blogs.update', $blog->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text" >Title</label>
                                        <input name="title" type="text" value="{{$blog->title}}"/>
                                        @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="singel__input-field mb-15">
                                                        <label class="input__field-text">Content</label>
                                                        <textarea name="body" id="editor">{{ old('body', $blog->body) }}</textarea>
                                                        @error('body')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#editor'))
                                                            .then(editor => {
                                                                console.log('Editor was initialized', editor);
                                                            })
                                                            .catch(error => {
                                                                console.error('Error during initialization of the editor', error);
                                                            });
                                                    </script>
                                                
                                    <div class="singel__input-field mb-15">
                                    <label for="formFile" class="input__field-textlabel">Add Image</label><br/>
                                    
                                    <!-- Show the previous image if available -->
                                    @if($blog->image)
                                        <img src="{{ asset('images/blogs/' . $blog->image) }}" alt="Blog Image" class="img-blog" width="200">
                                    @endif

                                    <input class="form-control" type="file" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <label for="formFile" class="input__field-text">Keywords</label>
                                <select class="tom-select-multiple form-control w-full" name="keywords[]" multiple>
                                    @foreach($keywords as $keyword)
                                        <option value="{{ $keyword->keyword }}"
                                            @if(in_array($keyword->keyword, $blog->keywords->pluck('keyword')->toArray())) selected @endif>
                                            {{ $keyword->keyword }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="formFile" class="input__field-text">Tags</label>
                                <select class="tom-select-multiple form-control w-full" name="tags[]" multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->tag }}"
                                            @if(in_array($tag->tag, $blog->tags->pluck('tag')->toArray())) selected @endif>
                                            {{ $tag->tag }}
                                        </option>
                                    @endforeach
                                </select>
                                <button class="input__btn w-100"
                                    type="submit">Edit Blog</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection