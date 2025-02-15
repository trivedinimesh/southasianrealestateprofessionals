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
                                    <form action="{{ route('membership-upselling') }}" method="GET">
    <button type="submit">Upgrade Membership</button>
</form>

<form action="{{ route('event-reminder') }}" method="GET">
    <button type="submit">Event Reminder</button>
</form>
<form action="{{ route('subscription.checkExpired') }}" method="POST">
    @csrf
    <button type="submit">Check Expiry</button>
</form>
<form action="{{ route('send-feedback') }}" method="GET">
    @csrf
    <button type="submit">Send Feedback Form</button>
</form>
                                </div>
                            </div>
                        </div>
                        <div class="row g-20">
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">{{ $usersCount }}</h3><span
                                            class="expovent__count-text">Total Users</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-group"></i></div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">{{ $membersCount }}</h3><span
                                            class="expovent__count-text">Total Members</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-speaker"></i></div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">{{ $eventsCount }}</h3><span class="expovent__count-text">Scheduled Events</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-reminder"></i></div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">{{ $bookingsCount }}</h3><span
                                            class="expovent__count-text">Total Bookings</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-ticket-1"></i></div>
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
                                                        <div class="flex justify-end">
                                                                <h4 class="news__title">
                                                                   {{ $event->title }}
                                                                   
                                                                </h4>
                                                            </div>
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
                                                    
                                                    <div class="justify-self-end"><i
                                                    class="flaticon-ticket mr-10"></i><span class="active">{{ $event->bookings_count }}</span>
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
                                                    <th>Action</th>
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
                                                        
                                                        <td>
                                                            <div class="attendant__action">
                                                                
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('create.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit">Submit</button>
                        </form>
                        <!-- <div class="row">
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><svg width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M6.80934 2.08671C7.75913 0.359774 10.2406 0.359765 11.1904 2.08671L17.5383 13.6283C18.4547 15.2945 17.2493 17.3331 15.3478 17.3331H2.652C0.750492 17.3331 -0.454914 15.2945 0.461459 13.6283L6.80934 2.08671ZM8.99988 5.66648C9.46013 5.66648 9.83322 6.03958 9.83322 6.49982V9.83315C9.83322 10.2934 9.46013 10.6665 8.99988 10.6665C8.53963 10.6665 8.16655 10.2934 8.16655 9.83315V6.49982C8.16655 6.03958 8.53963 5.66648 8.99988 5.66648ZM8.99988 13.9998C9.46013 13.9998 9.83322 13.6267 9.83322 13.1665C9.83322 12.7062 9.46013 12.3331 8.99988 12.3331C8.53963 12.3331 8.16655 12.7062 8.16655 13.1665C8.16655 13.6267 8.53963 13.9998 8.99988 13.9998Z"
                                                            fill="#F87A58"></path>
                                                    </svg></div>
                                                <div class="card__header-title">
                                                    <h4>Notice Board</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-dropdown">
                                                <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                            height="4" viewBox="0 0 14 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                fill="white"></path>
                                                        </svg></button>
                                                    <div class="dropdown-list" style="display:none"><button
                                                            class="dropdown__item">Edit</button><button
                                                            class="dropdown__item">Delete</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notice__wrapper">
                                        <div class="notice__item">
                                            <div class="notice__meta">
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-user"></i></span><span> Andru
                                                        Hebo </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-clock"></i></span><span> 9:00am-
                                                        5:00 pm </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-placeholder-1"></i></span><span>
                                                        California(CA), 92677 </span></div>
                                            </div>
                                            <div class="notice__title">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout.</p>
                                            </div>
                                        </div>
                                        <div class="notice__item">
                                            <div class="notice__meta">
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-user"></i></span><span> Andru
                                                        Hebo </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-clock"></i></span><span> 9:00am-
                                                        5:00 pm </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-placeholder-1"></i></span><span>
                                                        California(CA), 92677 </span></div>
                                            </div>
                                            <div class="notice__title">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout.</p>
                                            </div>
                                        </div>
                                        <div class="notice__item">
                                            <div class="notice__meta">
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-user"></i></span><span> Andru
                                                        Hebo </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-clock"></i></span><span> 9:00am-
                                                        5:00 pm </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-placeholder-1"></i></span><span>
                                                        California(CA), 92677 </span></div>
                                            </div>
                                            <div class="notice__title">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-calendar-3"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Upcoming Events</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-right">
                                                <div class="card__btn"><a href="event-details">view all Event</a></div>
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                                height="4" viewBox="0 0 14 4" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg></button>
                                                        <div class="dropdown-list" style="display:none"><button
                                                                class="dropdown__item">Edit</button><button
                                                                class="dropdown__item">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="scroll-w-4 card__scroll">
                                            <div class="card__inner">
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d"><img
                                                                    src="_next/static/media/01.b5f50ead.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d">
                                                                     Digital Business Summit - 2023 </a>
                                                            </h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-2"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-2">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Tom Cruse </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-3"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-3">
                                                                    Digital Product Design &amp; Interaction
                                                                    Seminar -2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-4"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-4">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        B. Parker </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-5"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-5">
                                                                    Digital Business Summit - 2023 </a>
                                                            </h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-6"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-6">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Mica Alex </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-7"><img
                                                                    src="_next/static/media/01.b5f50ead.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-7">
                                                                    Digital Business Summit - 2023 </a>
                                                            </h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Mariya Luica </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-8"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-8">
                                                                    Digital Product Design &amp; Interaction
                                                                    Seminar -2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-9"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-9">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Kabir shing </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>


@endsection