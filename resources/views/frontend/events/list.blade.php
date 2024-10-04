@extends('layouts.frontend-dashboard')
@section('title')
Events List
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
                                                    <li class="active"><span> Event Management </span></li>
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
                                <h4>Event Management</h4>
                            </div>
                        </div>
                        <div class="btn-group mb-4" role="group" aria-label="Event Status Toggle">
                                <a 
                                    href="{{ route('events.list', ['status' => 'active']) }}" 
                                    class="btn btn-outline-primary {{ $status == 'active' ? 'active' : '' }}">
                                    Active Events
                                </a>
                                <a 
                                    href="{{ route('events.list', ['status' => 'inactive']) }}" 
                                    class="btn btn-outline-primary {{ $status == 'inactive' ? 'active' : '' }}">
                                    Inactive Events
                                </a>
                            </div>
                            <div class="">
                                    <form method="GET" action="{{ route('events.list') }}">
                                        <div class="form-row">
                                            <div class="col">
                                                <input type="date" class="form-control" name="start_date" value="{{ $start_date ?? '' }}" placeholder="Start Date">
                                            </div>
                                            <div class="col">
                                                <input type="date" class="form-control" name="end_date" value="{{ $end_date ?? '' }}" placeholder="End Date">
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                        </div>
                                        <!-- Pass along the status filter when applying the date filter -->
                                        <input type="hidden" name="status" value="{{ $status }}">
                                    </form>
                                </div>
                            </div>
                        <div class="card__header-dropdown">
                            <a href="{{route('events.create')}}" class="btn btn-sm btn-success" >
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
                                <th>Event Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$event->title}} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                    @if ($event->is_active)
                                    
                                    Active
                                @else
                                    Inactive
                                @endif
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{route('events.attendee-list', $event->id)}}" class="btn btn-sm btn-primary">List</a>
                                        <a href="{{route('events.show', $event->id)}}" class="btn btn-sm btn-primary">View</a>
                                        <a href="{{route('events.edit', $event->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Event?');">Delete</button>
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