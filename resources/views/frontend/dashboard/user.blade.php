@extends('layouts.frontend-dashboard')
@section('title')
Dashboard
@endsection

@section('body')

                    <div class="app__slide-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb__wrapper mb-35">
                                    <div class="breadcrumb__inner">
                                        <div class="breadcrumb__icon"><i class="flaticon-home"></i></div>
                                        <div class="breadcrumb__menu">
                                            <nav>
                                                <ul>
                                                    <li><span><a href="{{ route('dashboard') }}"> Home </a></span></li>
                                                    <li class="active"><span> Dashboard </span></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="row g-20">
                <div class="col-xxl-6">
                        <div class="card__wrapper">
                            <div class="card__header">
                                <div class="card__header-top">
                                    <div class="card__title-inner">
                                        <div class="card__header-icon"><svg width="18" height="14"
                                                viewBox="0 0 18 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.3563 4.5C17.4625 4.48414 17.5599 4.4318 17.6317 4.35197C17.7036 4.27214 17.7454 4.1698 17.75 4.0625V1.65C17.75 1.53181 17.7267 1.41478 17.6815 1.30559C17.6363 1.19639 17.57 1.09718 17.4864 1.0136C17.4029 0.930031 17.3036 0.863738 17.1944 0.818508C17.0853 0.773279 16.9682 0.75 16.85 0.75H1.15003C1.03184 0.75 0.914806 0.773279 0.805613 0.818508C0.69642 0.863738 0.597205 0.930031 0.513632 1.0136C0.43006 1.09718 0.363766 1.19639 0.318537 1.30559C0.273308 1.41478 0.250029 1.53181 0.250029 1.65V4.0625C0.248789 4.17413 0.287969 4.28244 0.360338 4.36745C0.432707 4.45245 0.53338 4.50841 0.643779 4.525C1.24436 4.60497 1.79546 4.90033 2.19461 5.35616C2.59375 5.81198 2.81378 6.39724 2.81378 7.00312C2.81378 7.60901 2.59375 8.19427 2.19461 8.65009C1.79546 9.10592 1.24436 9.40127 0.643779 9.48125C0.534448 9.49768 0.434622 9.55274 0.362389 9.63644C0.290155 9.72014 0.250294 9.82694 0.250029 9.9375V12.35C0.250029 12.5887 0.34485 12.8176 0.513632 12.9864C0.682415 13.1552 0.911334 13.25 1.15003 13.25H16.85C17.0887 13.25 17.3176 13.1552 17.4864 12.9864C17.6552 12.8176 17.75 12.5887 17.75 12.35V9.9375C17.7513 9.82587 17.7121 9.71756 17.6397 9.63255C17.5674 9.54755 17.4667 9.49159 17.3563 9.475C16.7557 9.39502 16.2046 9.09967 15.8055 8.64384C15.4063 8.18802 15.1863 7.60276 15.1863 6.99687C15.1863 6.39099 15.4063 5.80573 15.8055 5.34991C16.2046 4.89408 16.7557 4.59872 17.3563 4.51875V4.5ZM9.00003 10.0875C8.87642 10.0875 8.75558 10.0508 8.6528 9.98217C8.55002 9.91349 8.46991 9.81588 8.4226 9.70168C8.3753 9.58747 8.36292 9.46181 8.38704 9.34057C8.41115 9.21933 8.47068 9.10797 8.55809 9.02056C8.64549 8.93315 8.75686 8.87362 8.8781 8.84951C8.99934 8.82539 9.125 8.83777 9.23921 8.88508C9.35341 8.93238 9.45102 9.01249 9.5197 9.11527C9.58837 9.21805 9.62503 9.33889 9.62503 9.4625C9.62503 9.62826 9.55918 9.78723 9.44197 9.90444C9.32476 10.0217 9.16579 10.0875 9.00003 10.0875ZM9.00003 7.66875C8.87642 7.66875 8.75558 7.63209 8.6528 7.56342C8.55002 7.49474 8.46991 7.39713 8.4226 7.28293C8.3753 7.16872 8.36292 7.04306 8.38704 6.92182C8.41115 6.80058 8.47068 6.68922 8.55809 6.60181C8.64549 6.5144 8.75686 6.45487 8.8781 6.43076C8.99934 6.40664 9.125 6.41902 9.23921 6.46632C9.35341 6.51363 9.45102 6.59374 9.5197 6.69652C9.58837 6.7993 9.62503 6.92014 9.62503 7.04375C9.62338 7.20842 9.55681 7.3658 9.43978 7.48166C9.32274 7.59752 9.16471 7.66251 9.00003 7.6625V7.66875ZM9.00003 5.16875C8.87642 5.16875 8.75558 5.13209 8.6528 5.06342C8.55002 4.99474 8.46991 4.89713 8.4226 4.78293C8.3753 4.66872 8.36292 4.54306 8.38704 4.42182C8.41115 4.30058 8.47068 4.18922 8.55809 4.10181C8.64549 4.0144 8.75686 3.95487 8.8781 3.93076C8.99934 3.90664 9.125 3.91902 9.23921 3.96633C9.35341 4.01363 9.45102 4.09374 9.5197 4.19652C9.58837 4.2993 9.62503 4.42014 9.62503 4.54375C9.62338 4.70842 9.55681 4.8658 9.43978 4.98166C9.32274 5.09752 9.16471 5.16251 9.00003 5.1625V5.16875Z"
                                                    fill="#ADADAD"></path>
                                            </svg></div>
                                        <div class="card__header-title">
                                            <h4>Scheduled Event Booking</h4>
                                        </div>
                                    </div>
                                    <div class="card__header-right">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-w-2 card__scroll">
                                <div class="card__inner">
                                    @foreach ($events as $event)
                                        <div class="tricket__sold-item">
                                            <div class="news__item-inner bb-0">
                                                <div class="news__content">
                                                    <h4 class="news__title">{{ $event->title }}</h4>
                                                    <div class="news__meta">
                                                        <div class="news__meta-status"><span>
                                                            <i class="flaticon-calendar"></i></span><span>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span></div>
                                                        <div class="news__meta-status"><span>
                                                            <i class="flaticon-clock"></i></span><span>{{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</span></div>
                                                            <div class="news__meta-status d-flex justify-content-between align-items-center"><span>
                                                                    <i class="flaticon-placeholder-1"></i></span><span>{{$event->city}}, {{$event->state}}, {{$event->country}}, {{$event->pincode}}</span></div>
                                                                    @if($event->members_only)
                                                                        <span class="badge bg-primary ms-2">Members Only</span>
                                                                    @endif
                                                        </div>
                                                </div>
                                            </div>
                                            
                                                
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6">
                        <div class="card__wrapper">
                            <div class="card__header">
                                <div class="card__header-top">
                                    <div class="card__title-inner">
                                        <div class="card__header-icon"><i class="flaticon-reminder"></i></div>
                                        <div class="card__header-title">
                                            <h4>Recent Membership</h4>
                                        </div>
                                    </div>
                                    <div class="card__header-dropdown">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-w-1 card__scroll">
                                <div class="card__inner">
                                    <div class="card-body">

                                        @foreach ($subscriptions as $subscription)
                                        <div class="news__item">
                                            <div class="news__item-inner">
                                                <div class="news__content">
                                                    <h4 class="news__title">
                                                    {{ $subscription->user->first_name}} {{ $subscription->user->last_name}}</h4>
                                                    <div class="news__meta">
                                                        <div class="news__meta-status"><span><i
                                                                    class="flaticon-calendar"></i></span><span>{{ \Carbon\Carbon::parse($subscription->starts_at)->format('F d, Y') }} - {{ \Carbon\Carbon::parse($subscription->ends_at)->format('F d, Y') }}</span></div>
                                                        <div class="news__meta-status"><span><i
                                                                    class="flaticon-trophy"></i></span><span>{{ $subscription->plan->name }}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="card__header">
                                <div class="card__header-top mb-5">
                                    <div class="card__title-inner">
                                        <div class="card__header-icon"><i class="flaticon-ticket-1"></i></div>
                                        <div class="card__header-title">
                                            <h4>Event Registration User List</h4>
                                        </div>
                                    </div>
                                    <div class="card__header-dropdown">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="attendant__wrapper mb-20">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Event</th>
                                            <th>Time</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td>
                                                    <div class="attendant__user-item">
                                                        
                                                        <div class="attendant__user-title">{{ $booking->user->first_name }} {{ $booking->user->last_name }}<span></span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="attendant__seminer"><span><a href="event-details">
                                                    {{ $booking->event->title }}</a></span></div>
                                                </td>
                                                <td>
                                                    <div class="attendant__time"><span>{{ \Carbon\Carbon::parse($booking->event->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($booking->event->end_time)->format('g:i A') }}</span></div>
                                                </td>
                                                <td>
                                                    <div class="attendant__date"><span>{{ \Carbon\Carbon::parse($booking->event->date)->format('F d, Y') }}</span></div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

@endsection