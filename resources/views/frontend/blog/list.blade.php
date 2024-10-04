@extends('layouts.frontend-dashboard')
@section('title')
Dashboard
@endsection

@section('body')

    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="card__header pt-70">
                <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb__wrapper mb-35">
                                    <div class="breadcrumb__inner">
                                        <div class="breadcrumb__icon"><i class="flaticon-home"></i></div>
                                        <div class="breadcrumb__menu">
                                            <nav>
                                                <ul>
                                                    <li><span><a href="{{ route('dashboard') }}"> Home </a></span></li>
                                                    <li class="active"><span> Blog Management </span></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="card__header-top mb-5">
                        <div class="card__title-inner">
                            <div class="card__header-icon"><i class="flaticon-ticket-1"></i></div>
                            <div class="card__header-title">
                                <h4>Blog Management</h4>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <form action="{{ route('blogs') }}" method="GET">
                                <div class="singel__input-field mb-15">
                                    <label class="input__field-text">Keywords</label>
                                    <div class="contact__select">
                                        <select class="tom-select-multiple-search form-control w-full" name="keywords[]" multiple>
                                            <option value="" disabled>Select Keyword</option>
                                            @foreach ($keywords as $keyword)
                                                <option value="{{ $keyword->keyword }}" >
                                                    {{ $keyword->keyword }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- Search button -->
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </form>
                            <div class="card__header-dropdown">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Add New
                                </a>
                            </div>
                        </div>
                      
                    </div>
                    @if (session('success'))
                        <span class="text-success">{{ session('success') }}</span>
                    @endif
                </div>
                
                <div class="attendant__wrapper mb-20">
                    <table>
                        <thead>
                            <tr>
                                <th>ID No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    <div class="attendant__serial"><span> #{{$blog->id}}
                                        </span></div>
                                </td>
                                <td>
                                    <img class="" style="max-width:60px;" src="{{ asset('images/blogs/'.$blog->image)}}" alt="">
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$blog->title}} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title">
                                            @foreach(json_decode($blog->keywords) as $keyword)
                                                <span>{{ $keyword->keyword }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{route('blogs.show', $blog->id)}}" class="btn btn-sm btn-primary">View</a>
                                        <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="pagination__wrapper">
                    <div class="basic__pagination d-flex align-items-center justify-content-end">
                        <nav>
                            <ul>
                                <li><span class="current">1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa-regular fa-arrow-right-long"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection