@extends('layouts.frontend')
@section('title')
Membership
@endsection

@section('body')

<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15 text__highlight">Membership</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Membership</li>
      </ul>
    </div>
  </section>
</section>
<section class="pricing__area dark_light_class pt-90 pb-120">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xxl-7 col-xl-7 col-lg-7">
        <div class="section__title-wrapper is-left mb-105">
          <span class="section__subtitle">REGISTRATION NOW</span>
          <h2 class="section__title">
            Get
            <span class="text__highlight">
              Membership
              <svg
                width="164"
                height="32"
                viewBox="0 0 164 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M1.99971 28.2805C55.3778 8.30722 162.042 -19.4147 161.673 29.4835"
                  stroke="url(#paint0_linear_83_347)"
                  stroke-width="4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <defs>
                  <linearGradient
                    id="paint0_linear_83_347"
                    x1="2.30241"
                    y1="21.3238"
                    x2="162.062"
                    y2="33.1155"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="1" stop-color="#F7426F"></stop>
                    <stop offset="1" stop-color="#F87A58"></stop>
                  </linearGradient>
                </defs></svg></span>
            Now
          </h2>
        </div>
      </div>
      <div class="col-xxl-5 col-xl-5 col-lg-5">
        <div
          class="price__short-details d-lg-flex justify-content-center mb-105"
        >
          <p>
          Unique opport͏unities, great resources, and unmatched c͏onnections awa͏it SA͏REP members.͏ For $100 ͏per year, take your rea͏l͏ estat͏e career to͏ th͏e nex͏t l͏evel and thrive in͏ an open environment.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
    @foreach($plans as $plan)
      <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
        <div class="pricing__item mb-30">
          <div class="pricing__item-header">
            <div>
              <span class="pricing__item-title">${{ $plan->price }}</span>
            </div>
            <div class="pricing__item-lable">
              <span class="pricing__item-label">{{ $plan->name }}</span
              ><svg
                class="lable-border"
                width="97"
                height="54"
                viewBox="0 0 97 54"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M1.55449 2.53125L0.518162 0.84375L0.944232 0.582093L0.893817 0.5H1.01039V0H3.03123V0.5H5.05206V0H7.0729V0.5H9.09373V0H11.1146V0.5H13.1354V0H15.1562V0.5H17.1771V0H19.1979V0.5H21.2188V0H23.2396V0.5H25.2604V0H27.2813V0.5H29.3021V0H31.3229V0.5H33.3438V0H35.3646V0.5H37.3854V0H39.4063V0.5H41.4271V0H43.4479V0.5H45.4688V0H47.4896V0.5H49.5104V0H51.5313V0.5H53.5521V0H55.5729V0.5H57.5938V0H59.6146V0.5H61.6354V0H63.6562V0.5H65.6771V0H67.6979V0.5H69.7188V0H71.7396V0.5H73.7604V0H75.7812V0.5H77.8021V0H79.8229V0.5H81.8438V0H83.8646V0.5H85.8854V0H87.9062V0.5H89.9271V0H91.9479V0.5H93.9688V0H95.9896V0.5H96.5V0.964301H97V2.89287H96.5V4.82144H97V6.75001H96.5V8.67858H97V10.6072H96.5V12.5357H97V14.4643H96.5V16.3929H97V18.3214H96.5V20.25H97V22.1786H96.5V24.1071H97V26.0357H96.5V27.9643H97V29.8929H96.5V31.8214H97V33.75H96.5V35.6786H97V37.6071H96.5V39.5357H97V41.4643H96.5V43.3929H97V45.3214H96.5V47.25H97V49.1786H96.5V51.1071H97V53.0357H96.5V53.5H95.9896V54H93.9688V53.5H91.9479V54H89.9271V53.5H87.9063V54H85.8854V53.5H83.8646V54H81.8438V53.5H79.8229V54H77.8021V53.5H75.7812V54H73.7604V53.5H71.7396V54H69.7187V53.5H67.6979V54H65.6771V53.5H63.6562V54H61.6354V53.5H59.6146V54H57.5937V53.5H55.5729V54H53.5521V53.5H51.5312V54H49.5104V53.5H47.4896V54H45.4687V53.5H43.4479V54H41.4271V53.5H39.4062V54H37.3854V53.5H35.3646V54H33.3438V53.5H31.3229V54H29.3021V53.5H27.2813V54H25.2604V53.5H23.2396V54H21.2188V53.5H19.1979V54H17.1771V53.5H15.1562V54H13.1354V53.5H11.1146V54H9.09375V53.5H7.07292V54H5.05208V53.5H3.03125V54H1.01042V53.5H0.893817L0.944236 53.4179L0.518167 53.1562L1.55449 51.4688L1.98056 51.7304L3.01688 50.0429L2.59082 49.7812L3.62714 48.0938L4.05321 48.3554L5.08953 46.6679L4.66346 46.4062L5.69979 44.7188L6.12586 44.9804L7.16218 43.2929L6.73611 43.0312L7.77244 41.3438L8.19851 41.6054L9.23483 39.9179L8.80876 39.6562L9.84509 37.9688L10.2712 38.2304L11.3075 36.5429L10.8814 36.2812L11.9177 34.5938L12.3438 34.8554L13.3801 33.1679L12.9541 32.9062L13.9904 31.2188L14.4165 31.4804L15.4528 29.7929L15.0267 29.5313L16.063 27.8438L16.4891 28.1054L17.0073 27.2617L17.168 27L17.0073 26.7383L16.4891 25.8946L16.063 26.1562L15.0267 24.4687L15.4528 24.2071L14.4165 22.5196L13.9904 22.7812L12.9541 21.0937L13.3801 20.8321L12.3438 19.1446L11.9177 19.4062L10.8814 17.7188L11.3075 17.4571L10.2712 15.7696L9.84508 16.0312L8.80876 14.3438L9.23483 14.0821L8.19851 12.3946L7.77244 12.6562L6.73611 10.9688L7.16218 10.7071L6.12586 9.01959L5.69979 9.28125L4.66346 7.59375L5.08953 7.33209L4.05321 5.64459L3.62714 5.90625L2.59081 4.21875L3.01688 3.95709L1.98056 2.26959L1.55449 2.53125Z"
                  stroke="#1EA9F8"
                  stroke-dasharray="2 2"
                ></path>
              </svg>
            </div>
          </div>
          <div class="pricing__item-content">
            <ul>
              <li>
                <i class="flaticon-comment"></i>
                Everything from ALL Access
              </li>
              <li>
                <i class="flaticon-comment"></i>
                Cocktail Hour
              </li>
              <li>
                <i class="flaticon-comment"></i>
                Premium Seating
              </li>
              <li>
                <i class="flaticon-comment"></i>
                Speaker Meet &amp; Greets
              </li>
              <li>
                <i class="flaticon-comment"></i>
                Duration: {{ $plan->duration }} days
              </li>
            </ul>
          </div>
          <form action="{{ route('subscribe', $plan->id) }}" method="POST">
              @csrf
              <div class="pricing__btn-wrap">
                  <button type="submit" class="pricing__btn">Subscribe</button>
              </div>
          </form>
        </div>
      </div>
    @endforeach
    @if (session('error'))
        <span class="text-danger">{{ session('error') }}</span>
    @endif
    </div>
  </div>
</section>



@endsection