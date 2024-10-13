@extends('layouts.frontend-dashboard')
@section('title')
Membership Details
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
                                                    <li class="active"><span> Membership Details </span></li>
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
                                <h4>Membership Details</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="attendant__wrapper mb-20">
                    <table>
                        <thead>
                            <tr>
                                <th>ID No</th>
                                <th>Plan Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Ends At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="attendant__serial"><span> #{{$subscription->id}}
                                        </span></div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{ $subscription->plan->name }} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>${{ $subscription->plan->price }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{ ucfirst($subscription->status) }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{ \Carbon\Carbon::parse($subscription->ends_at)->format('F d, Y') }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    @if($subscription->status == "active")
                                        <form action="{{ route('subscription.cancel', $subscription->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Cancel Subscription</button>
                                        </form>
                                    @endif

                                    @if($subscription->status != "active")
                                        <form action="{{ route('subscription.renew', $subscription->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Renew Subscription</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- {{ $subscription->links('pagination::bootstrap-5') }} -->
            </div>
        </div>
    </div>



@endsection