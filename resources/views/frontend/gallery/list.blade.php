@extends('layouts.frontend-dashboard')
@section('title')
Gallery
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
                                                    <li class="active"><span> Gallery Management </span></li>
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
                                <h4>Gallery Management</h4>
                            </div>
                        </div>
                        <form action="{{ route('gallery') }}" class="app__herader-input p-relative" method="GET">
                                <input type="search" name="search" value="{{ request('search') }}" placeholder="Search Here . . ." />
                                <button type="submit">
                                    <i class="flaticon-loupe"></i>
                                </button>
                            </form>
                        <div class="card__header-dropdown">
                            <a href="{{route('gallery.create')}}" class="btn btn-sm btn-success" >
                                <i class="fas fa-plus"></i> Add New
                            </a>
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
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$gallery->title}} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <img class="" style="max-width:60px;" src="{{ asset($gallery->image_path)}}" alt="">
                                </td>
                                
                                
                                <td>
                                    <div>
                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Image?');">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
                {{ $galleries->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

@endsection