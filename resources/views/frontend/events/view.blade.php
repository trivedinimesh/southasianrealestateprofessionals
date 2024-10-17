@extends('layouts.frontend')
@section('title')
{{$event->title}}
@endsection

@section('body')
<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15 text__highlight">{{$event->title}}</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('events') }}">Events</a></li>
        <li>{{$event->title}}</li>
      </ul>
    </div>
  </section>
</section>
<div class="event__details-area pt-90 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6">
        <div class="event__details-left">
          <div class="body__card-wrapper mb-20">
            <div class="review__main-wrapper">
                <div class="tab-content" id="nav-tabContent">
                    <div class="about__event-thumb w-img mt-40">
                      <img
                        src="{{ asset('images/events/'.$event->image)}}"
                        alt="image not found"
                      />
                    </div>
                    <div class="about__content mt-30">
                      <h4>About This Event</h4>
                      <p>
                      {!! $event->details !!}
                      </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6">
        <div class="event__details-right">
          <div class="body__card-wrapper mb-20">
            <div class="review__learn">
              <h4>What will you learn:</h4>
              <ul>
              @foreach($event->features as $index => $feature)
                <li>
                  <span
                    ><svg
                      width="16"
                      height="17"
                      viewBox="0 0 16 17"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g clip-path="url(#clip0_1082_8)">
                        <path
                          d="M8 0.5C6.41775 0.5 4.87104 0.969192 3.55544 1.84824C2.23985 2.72729 1.21447 3.97672 0.608967 5.43853C0.00346629 6.90034 -0.15496 8.50887 0.153721 10.0607C0.462403 11.6126 1.22433 13.038 2.34315 14.1569C3.46197 15.2757 4.88743 16.0376 6.43928 16.3463C7.99113 16.655 9.59966 16.4965 11.0615 15.891C12.5233 15.2855 13.7727 14.2602 14.6518 12.9446C15.5308 11.629 16 10.0822 16 8.5C16 6.37827 15.1571 4.34344 13.6569 2.84315C12.1566 1.34285 10.1217 0.5 8 0.5V0.5ZM12.5467 6.57L7.52667 12.2633C7.44566 12.3546 7.34742 12.429 7.23759 12.4822C7.12776 12.5354 7.00851 12.5663 6.88667 12.5733H6.82667C6.59929 12.5747 6.3795 12.4916 6.21 12.34L3.52334 9.95667C3.33857 9.79267 3.22652 9.562 3.21182 9.31539C3.19713 9.06878 3.28101 8.82643 3.445 8.64167C3.609 8.4569 3.83967 8.34484 4.08628 8.33015C4.33289 8.31546 4.57524 8.39934 4.76 8.56333L6.76 10.3267L11.1633 5.32667C11.3269 5.14146 11.5573 5.0288 11.8039 5.01349C12.0505 4.99817 12.2931 5.08145 12.4783 5.245C12.6635 5.40855 12.7762 5.63898 12.7915 5.88559C12.8068 6.1322 12.7236 6.37479 12.56 6.56L12.5467 6.57Z"
                          fill="#4CBC9A"
                        ></path>
                      </g>
                      <defs>
                        <clipPath id="clip031_1082_8">
                          <rect
                            width="16"
                            height="16"
                            fill="white"
                            transform="translate(0 0.5)"
                          ></rect>
                        </clipPath>
                      </defs></svg></span
                  ><span> {{$feature->feature}} </span>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="body__card-wrapper mb-20">
            <div class="event__meta-time">
              <ul>
                <li><span>Price : </span>${{$event->price_member}} / ${{$event->price_non_member}}</li>
                <li><span>Date : </span>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</li>
                <li><span>Time :</span>{{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</li>
                <li><span>Venue : </span>{{$event->address}}, {{$event->city}}, {{$event->state}}, {{$event->country}}, {{$event->pincode}}</li>
              </ul>
              <div class="ticket__purchase-btn mt-30 text-center pb-20">
                <a class="fill__btn" href="{{ route('membership') }}"
                  >BUY TICKETS <i class="fa-regular fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection