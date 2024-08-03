@extends('layouts.frontend')
@section('title')
Contact
@endsection

@section('body')

<section class="page_banner text-center pt-150 pb-60">
  <div class="container decoration_wrap">
    <h1 class="page_title mb-15">Contact Us</h1>
    <ul class="breadcrumb_nav unordered_list_center">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li>Contact Us</li>
    </ul>
  </div>
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
          <form>
            <div class="row">
              <div class="col-12 col-md-6 contact_div">
                <div class="form-group m-0">
                  <input
                    class="form-control"
                    type="text"
                    name="firstname"
                    placeholder="First Name"
                  />
                </div>
              </div>
              <div class="col-12 col-md-6 contact_div">
                <div class="form-group m-0">
                  <input
                    class="form-control"
                    type="text"
                    name="lastname"
                    placeholder="Last Name"
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
                  />
                </div>
              </div>
              <div class="col-12 col-md-6 contact_div">
                <div class="select_option m-0">
                  <div class="nice-select false" role="button" tabindex="0">
                    <span class="current">Select Subject</span>
                    <ul class="list" role="menubar">
                      <li
                        data-value="Select Subject"
                        class="option selected focus"
                        role="menuitem"
                      >
                        Select Subject
                      </li>
                      <li
                        data-value="Website Development"
                        class="option false"
                        role="menuitem"
                      >
                        Website Development
                      </li>
                      <li
                        data-value="UX/UI Design"
                        class="option false"
                        role="menuitem"
                      >
                        UX/UI Design
                      </li>
                      <li
                        data-value="App Development"
                        class="option false"
                        role="menuitem"
                      >
                        App Development
                      </li>
                      <li
                        data-value="Video Editing"
                        class="option false"
                        role="menuitem"
                      >
                        Video Editing
                      </li>
                      <li
                        data-value="Programming &amp; Tech"
                        class="option false"
                        role="menuitem"
                      >
                        Programming &amp; Tech
                      </li>
                      <li
                        data-value="Business Consuting"
                        class="option false"
                        role="menuitem"
                      >
                        Business Consuting
                      </li>
                    </ul>
                  </div>
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
                  <button type="button" class="blog_custome_btn">
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
            ><span>1989 Timber Ridge Road Sacramento CA, California</span>
          </li>
          <li><strong>Phone:</strong><span>+1-202-555-0149</span></li>
          <li><strong>Email:</strong><span>contact@paradox.com</span></li>
          <li>
            <strong>Opening:</strong><span>10am - 6pm, Friday Close</span>
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
<div class="bd-theme-settings-area transition-3">
  <div class="bd-theme-wrapper bd-theme-dark">
    <div class="bd-theme-header text-center">
      <h4 class="bd-theme-header-title">Template Settings</h4>
    </div>
    <div class="bd-theme-toggle mb-20 d-block">
      <label class="bd-theme-toggle-main" for="bd-theme-toggler"
        ><span class="bd-theme-toggle-dark active"
          ><i class="fa-light fa-moon"></i> Dark</span
        ><input type="checkbox" id="bd-theme-toggler" checked="" /><i
          class="bd-theme-toggle-slide"
        ></i
        ><span class="bd-theme-toggle-light"
          ><i class="fa-light fa-sun-bright"></i> Light</span
        ></label
      >
    </div>
    <div class="bd-theme-settings">
      <div class="bd-theme-settings-wrapper">
        <div class="bd-theme-settings-open">
          <button class="bd-theme-settings-open-btn">
            <span class="bd-theme-settings-gear"
              ><i class="fa-light fa-gear"></i></span
            ><span class="bd-theme-settings-close"
              ><i class="fa-regular fa-xmark"></i
            ></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="progress-wrap active-progress">
  <button id="back_to_top" type="button" class="back-to-top-btn">
    <svg
      class="progress-circle svg-content"
      width="100%"
      height="100%"
      viewBox="-1 -1 102 102"
    >
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </button>
</div>



@endsection