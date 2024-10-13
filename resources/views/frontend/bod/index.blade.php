@extends('layouts.frontend-dashboard')
@section('title')
Board of Directors
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
                                                    <li class="active"><span> Board of Directors Management </span></li>
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
                                <h4>Board of Directors Management</h4>
                            </div>
                        </div>
                        <form action="{{ route('board-of-director.index') }}" class="app__herader-input p-relative" method="GET">
                                <input type="search" name="search" value="{{ request('search') }}" placeholder="Search Here . . ." />
                                <button type="submit">
                                    <i class="flaticon-loupe"></i>
                                </button>
                            </form>
                        <div class="card__header-dropdown">
                            <a href="{{route('board-of-director.create')}}" class="btn btn-sm btn-success" >
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
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Designation</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Linkedin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp

                        @foreach ($bods as $bod)
                            <tr>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> #{{$i++}}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$bod->first_name}} {{$bod->last_name}} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <img class="" style="max-width:60px;" src="{{ asset('images/bods/'.$bod->image)}}" alt="">
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{$bod->designation}}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{$bod->fb_id}}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{$bod->twitter_id}}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{$bod->linkedin_id}}</span></div>
                                    </div>
                                </td>
                                
                                <td>
                                    <div>
                                        <a href="{{route('board-of-director.edit', $bod->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('board-of-director.destroy', $bod->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this BOD?');">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
                {{ $bods->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

@endsection