@extends('layouts.frontend-dashboard')
@section('title')
View Booking
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
                                                    <li class="active"><span> View Booking </span></li>
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
                                <h4>View Booking</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="attendant__wrapper mb-20">
                    <table>
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Event Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($attendees as $attendee)
                            <tr>
                                <td>
                                    <div class="attendant__serial"><span> {{$attendee->booking_id}}
                                        </span></div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$attendee->event->title}} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{ \Carbon\Carbon::parse($attendee->event->date)->format('F d, Y') }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{ \Carbon\Carbon::parse($attendee->event->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($attendee->event->end_time)->format('g:i A') }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                    @if ($attendee->is_attended)
                                    
                                    Attended
                                @else
                                    Not Attended
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