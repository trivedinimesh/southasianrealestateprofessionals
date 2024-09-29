@extends('layouts.frontend-dashboard')
@section('title')
Sponser
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
                                                    <li><span><a href="dashboard"> Home </a></span></li>
                                                    <li class="active"><span> Sponser Management </span></li>
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
                                <h4>Sponser Management</h4>
                            </div>
                        </div>
                        <div class="card__header-dropdown">
                            <a href="{{route('sponser.create')}}" class="btn btn-sm btn-success" >
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
                                <th>ID No</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($sponsers as $sponser)
                            <tr>
                                <td>
                                    <div class="attendant__serial"><span> #{{$sponser->id}}
                                        </span></div>
                                </td>
                                <td>
                                    <img class="" style="max-width:60px;" src="{{ asset('images/sponsers/'.$sponser->image)}}" alt="">
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$sponser->name}}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{route('sponser.edit', $sponser->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('sponser.destroy', $sponser->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Sponser?');">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- <div class="pagination__wrapper">
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
                </div> -->
            </div>
        </div>
    </div>

@endsection