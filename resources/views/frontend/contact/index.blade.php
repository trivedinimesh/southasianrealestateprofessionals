@extends('layouts.frontend')
@section('title')
Contact
@endsection

@section('body')

<section class="dark_light_class">
  <section class="page_banner text-center pt-90 pb-60">
    <div class="container decoration_wrap">
      <h1 class="page_title mb-15 text__highlight">Contact Us</h1>
      <ul class="breadcrumb_nav unordered_list_center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </section>
</section>
<section class="contact_section dark_light_class section_space_lg">
  <div class="container">
    <div class="section_heading">
      <h3 class="heading_title mb-0">
        Feel Free<span class="text__highlight ml-15"
          >Contact Us<svg
            class="title-underline"
            width="328"
            height="31"
            viewBox="0 0 328 31"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M2 29C110 8.62517 326 -19.8996 326 29"
              stroke="url(#paint0_linear_47_128)"
              stroke-width="4"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></path>
            <defs>
              <linearGradient
                id="paint0_linear_47_128"
                x1="2.50784"
                y1="22.0412"
                x2="322.486"
                y2="65.0473"
                gradientUnits="userSpaceOnUse"
              >
                <stop offset="1" stop-color="#F7426F"></stop>
                <stop offset="1" stop-color="#F87A58"></stop>
              </linearGradient>
            </defs></svg></span>
      </h3>
    </div>
    <div class="row g-4">
      <div class="col-12 col-lg-6">
        <div class="contact_form">
          <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-12 col-md-6 contact_div">
                <div class="form-group m-0">
                  <input
                    class="form-control"
                    type="text"
                    name="first_name"
                    placeholder="First Name"
                    value="{{ old('first_name') }}"
                  />
                </div>
              </div>
              <div class="col-12 col-md-6 contact_div">
                <div class="form-group m-0">
                  <input
                    class="form-control"
                    type="text"
                    name="last_name"
                    placeholder="Last Name"
                    value="{{ old('last_name') }}"
                  />
                </div>
              </div>
              <div class="col-12 col-md-6 contact_div">
                <div class="form-group m-0">
                  <input
                    class="form-control"
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    value="{{ old('email') }}"
                  />
                </div>
              </div>
              <div class="row">
                  <div class="col-3 col-md-3 contact_div">
                    <div class="form-group m-0">
                      <input
                        class="form-control"
                        type="text"
                        name="isd_code"
                        placeholder="ISD Code"
                        value="{{ old('isd_code') }}"
                      />
                    </div>
                    @if ($errors->has('isd_code'))
                                    <span class="text-danger">{{ $errors->first('isd_code') }}</span>
                                @endif
                               
                  </div>
                  <div class="col-9 col-md-9 contact_div">
                    <div class="form-group m-0">
                      <input
                        class="form-control"
                        type="text"
                        name="phone_number"
                        placeholder="Phone Number"
                         value="{{ old('phone_number') }}"
                      />
                    </div>
                    @if ($errors->has('phone_number'))
                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                            @endif
                               
                  </div>

              </div>
         
              <div class="col contact_div">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    placeholder="Write your Message"
                  ></textarea>
                </div>
                <div class="header__btn">
                  <button type="submit" class="blog_custome_btn">
                    Send Message
                    <i class="fa-regular fa-angle-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <ul class="contact_info_list style_2 ps-lg-4 unordered_list_block">
          <li>
            <strong>Loaction:</strong
            ><span>Houston, Texas</span>
          </li>
          <li><strong>Phone:</strong><span>832 723 5294</span></li>
          <li><strong>Email:</strong><span>sarephouseton@gmail.com</span></li>
          <li>
            <strong>Opening:</strong><span>9am - 5pm, Saturday and Sunday Close</span>
          </li>
          <li>
            <strong>Follow Us:</strong>
            <div class="social_icon unordered_list">
              <div class="footer__social">
                <a href="https://www.facebook.com/"
                  ><i class="fa-brands fa-facebook"></i></a
                ><a href="https://twitter.com/"
                  ><i class="fa-brands fa-twitter"></i></a
                ><a href="https://bd.linkedin.com/"
                  ><i class="fa-brands fa-linkedin"></i></a
                ><a href="https://www.youtube.com/"
                  ><i class="fa-brands fa-youtube"></i
                ></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>



@endsection