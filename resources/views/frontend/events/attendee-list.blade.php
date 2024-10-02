@extends('layouts.frontend-dashboard')
@section('title')
    Event Attendee List
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
                                            <li><span><a href="{{route('events.list')}}" > {{ $event->title}} </a> </span></li>
                                            <li class="active"><span> Event Attendee List </span></li>
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
                            <h4>Event Attendee List</h4>
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
                            <th>Booking ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($attendees as $attendee)
                        <tr>
                            <td>
                                <div class="attendant__serial"><span> {{$attendee->booking_id}} </span></div>
                            </td>
                            <td>
                                <div class="attendant__user-item">
                                    <div class="attendant__user-title">
                                        <span> {{$attendee->user->first_name}} {{$attendee->user->last_name}} </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="attendant__user-item">
                                    <div class="attendant__user-title"><span>{{$attendee->user->email}}</span></div>
                                </div>
                            </td>
                            <td>
                                <div class="attendant__user-item">
                                    <div class="attendant__user-title">
                                        <span>{{$attendee->user->isd_code ?? ''}}-{{$attendee->user->phone_number ?? '-'}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>
                                    @if ($attendee->is_attended)
                                    
                                        Verified
                                    @else
                                    <a href="{{ route('events.verifyBooking', ['bookingId' => $attendee->booking_id, 'user' => $attendee->user->id]) }}" class="btn btn-sm btn-primary">
                                        Verify
                                    </a>
                                    @endif
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
                            <li><a href="#"><i class="fa-regular fa-arrow-right-long"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
