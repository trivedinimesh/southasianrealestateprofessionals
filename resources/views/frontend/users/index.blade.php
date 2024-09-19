@extends('layouts.frontend-dashboard')
@section('title')
Dashboard
@endsection

@section('body')

    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="card__header pt-70">
                    <div class="card__header-top mb-5">
                        <div class="card__title-inner">
                            <div class="card__header-icon"><i class="flaticon-ticket-1"></i></div>
                            <div class="card__header-title">
                                <h4>User Management</h4>
                            </div>
                        </div>
                        <div class="card__header-dropdown">
                            <a href="{{route('users.create')}}" class="btn btn-sm btn-success" >
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
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="attendant__serial"><span> #{{$user->id}}
                                        </span></div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$user->first_name}} {{$user->last_name}} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{$user->email}}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>Admin</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
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