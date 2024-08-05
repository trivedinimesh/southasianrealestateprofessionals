@extends('layouts.frontend')
@section('title')
Blog
@endsection

@section('body')

<section class="page_banner text-center pt-150 pb-60">
  <div class="container decoration_wrap">
    <h1 class="page_title mb-15">Blog Details</h1>
    <ul class="breadcrumb_nav unordered_list_center">
      <li><a href="/">Home</a></li>
      <li>Blog Details</li>
    </ul>
  </div>
</section>
<section class="details_section dark_light_class blog_details section_space_lg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="blog_responsive col col-lg-8">
        <div class="details_image">
          <img
            src="{{ URL::asset('build/media/blog-1.00bb18f1.jpg') }}"
            width="1170"
            height="751"
            alt="Paradox Blog Details Image"
            style="height: 100%"
          />
        </div>
        <div class="details_content">
          <div class="blog_post_meta">
            <ul class="category_list unordered_list">
              <li><a href="/blog">UI/UX</a></li>
            </ul>
            <span class="post_date">25 Sep, 2023</span>
          </div>
          <h2 class="details_item_title">
            Event Security: Ensuring Safety and Peace of Mind
          </h2>
          <p>
            Some mistakenly believe that because you’re offering a certification
            it must be generalized and meant to give anyone a wide range of
            digital skills. But the benefits of continuous This is also a
            flexible form of learning. You may have a suite of microlearning
            courses. employees who feel that their skills are not being put to
            good use in their current job Choose which ones are important for
            any specific role within your company. For example, marketers may
            need social media training so they can use.
          </p>
          <p>
            Investing in offering those paths early on can help you retain staff
            instead of letting them go. After all, this is the era of hybrid and
            remote working so flexibility and career advancement. employees who
            feel that their skills are not being put to good use in their
            current job
          </p>
          <blockquote cite="/blog">
            <h3 class="blockquote_content">
              “You have to be burning with an idea, or a problem, or a wrong
              that you want to right. If you’re not passionate enough from the
              start,never stick it out.”
            </h3>
            <span class="author_name">Steve Jobs</span>
          </blockquote>
          <p>
            Some of the employees in your workforce are already digitally-savvy
            and actively pursue new training and in-demand skills on their own.
            These employees are valuable, but research demonstrates that you may
            lose them if you don’t allow them the opportunity to improve their
            skills further. Should be possible as long as the training is
            available to upskill employees in the required skills.
          </p>
          <h3 class="details_item_info_title">
            Update Your Experts Marketing Tools
          </h3>
          <p>
            Reskilling and digital upskilling While you may be focusing on
            updating employees who are behind, your HR or L&amp;D team needs to
            make sure to nurture your most expert staff as well. This will help
            boost loyalty and sharpen skills for any specific role.
          </p>
          <p>
            Skills are not being put to good use in their current job Choose
            which ones are important for any specific role within your company.
            For example, marketers may need social media training so they can
            use.
          </p>
          <ul class="icon_list unordered_list_block">
            <li>
              <span class="list_item_icon"><i class="fas fa-check"></i></span
              ><span class="list_item_text"
                >The company’s training initiatives reached 210,000 employees in
                2023</span
              >
            </li>
            <li>
              <span class="list_item_icon"><i class="fas fa-check"></i></span
              ><span class="list_item_text"
                >Created a culture of continuous learning and skills
                development</span
              >
            </li>
            <li>
              <span class="list_item_icon"><i class="fas fa-check"></i></span
              ><span class="list_item_text"
                >Mature digital organization is essential in
                today’stechnologically driven world.</span
              >
            </li>
          </ul>
          <div class="row mb-4">
            <div class="col col-lg-6">
              <div class="video_widget">
                <img
                  src="{{ URL::asset('build/media/blog_details_image_2.fee735e5.jpg') }}"
                  alt="Paradox Video Poster Image"
                  style="width: 100%; height: 100%"
                /><button type="submit" class="video_play_icon popup_video">
                  <span class="icon_wrap" data-magnetic="true"
                    ><i class="fas fa-play"></i
                  ></span>
                </button>
              </div>
            </div>
            <div class="col col-lg-6">
              <div class="image_wrap">
                <img
                  src="{{ URL::asset('build/media/blog_details_image_3.456699d0.jpg') }}"
                  alt="Paradox Blog Details Image"
                  style="width: 100%; height: 100%"
                />
              </div>
            </div>
          </div>
          <h3 class="details_item_info_title">workforce to drive loyalty</h3>
          <p>
            10 times more likely to be looking for a new job than those who feel
            that their skills are being put to good use. This shows how
            important valuing your staff is to drive retention and keep talent
            within your business. The same report found that the top three focus
            areas of learning and development (L&amp;D) programs in 2022 are
            leadership and development, upskilling.
          </p>
          <p>
            Reskilling and digital upskilling While you may be focusing on
            updating employees who are behind, your HR or L&amp;D team needs to
            make sure to nurture your most expert staff as well. This will help
            boost loyalty and sharpen skills.
          </p>
          <div class="social_actions">
            <ul class="tags_list unordered_list">
              <li><a href="/blog">UI/UX</a></li>
              <li><a href="/blog">Development</a></li>
              <li><a href="/blog">Design</a></li>
            </ul>
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
        </div>
        <div class="post_admin">
          <div class="admin_image">
            <img
              src="{{ URL::asset('build/media/chat-1.b476fa36.png') }}"
              alt="Paradox Blog Post Admin Image"
              style="width: auto; height: auto"
            />
          </div>
          <div class="admin_content">
            <h3 class="admin_name">Karen L. Head</h3>
            <span class="admin_designation">Digital Marketer</span>
            <p class="mb-0">
              A Content Writer is a professional who writes informative and
              engaging articles to help brands showcase their products.
            </p>
          </div>
        </div>
        <h3 class="details_item_title">Leave a comment</h3>
        <div class="contact_form ex-mmb-60">
          <form action="#">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input
                    class="form-control"
                    type="text"
                    name="firstname"
                    placeholder="First Name"
                  />
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input
                    class="form-control"
                    type="text"
                    name="lastname"
                    placeholder="Last Name"
                  />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="comment"
                    placeholder="Write your Comment"
                  ></textarea>
                </div>
                <div class="header__btn d-xl-block">
                  <a class="fill__btn blog_custome_btn" href="/"
                    >Leave comment<i class="fa-regular fa-angle-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col col-lg-4">
        <div class="sidebar">
          <div class="sidebar_widget">
            <h3 class="widget_title">Search</h3>
            <div class="form-group kyeword_search_form mb-0">
              <input
                class="form-control"
                type="search"
                name="search"
                placeholder="Enter Kyeword"
              /><button type="submit">
                <img
                  src="{{ URL::asset('build/media/icon_search_white.9feab2ec.svg') }}"
                  alt="Search Icon"
                  style="height: auto; width: auto"
                />
              </button>
            </div>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Categories</h3>
            <ul class="icon_list unordered_list_block">
              <li><a href="/blog">Marketing (03)</a></li>
              <li><a href="/blog">Digital Agency (04)</a></li>
              <li><a href="/blog">Creative Agency (06)</a></li>
              <li><a href="/blog">Business Consulting (03)</a></li>
              <li><a href="/blog">IT Solution (02)</a></li>
            </ul>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Recent Post</h3>
            <ul class="recent_post_list unordered_list_block">
              <li>
                <div class="recent_post_item">
                  <a class="item_image" href="/blog-details/5"
                    ><img
                      src="{{ URL::asset('build/media/blog-5.48df76c3.jpg') }}"
                      alt="Paradox Blog Image"
                      style="height: auto; width: 100%"
                  /></a>
                  <div class="item_content">
                    <ul class="meta_list unordered_list">
                      <li><a href="/blog-details">App Developer</a></li>
                      <li><span>10 Oct, 2023</span></li>
                    </ul>
                    <h3 class="item_title">
                      <a href="/blog-details/5"
                        >Event Budgeting 101: How to Plan and Con ...</a
                      >
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class="recent_post_item">
                  <a class="item_image" href="/blog-details/6"
                    ><img
                      src="{{ URL::asset('build/media/blog-6.8949210b.jpg') }}"
                      alt="Paradox Blog Image"
                      style="height: auto; width: 100%"
                  /></a>
                  <div class="item_content">
                    <ul class="meta_list unordered_list">
                      <li><a href="/blog-details">Business</a></li>
                      <li><span>12 Oct, 2023</span></li>
                    </ul>
                    <h3 class="item_title">
                      <a href="/blog-details/6"
                        >Harnessing Technology for Successful Eve ...</a
                      >
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class="recent_post_item">
                  <a class="item_image" href="/blog-details/7"
                    ><img
                      src="{{ URL::asset('build/media/blog-7.bc4ed395.jpg') }}"
                      alt="Paradox Blog Image"
                      style="height: auto; width: 100%"
                  /></a>
                  <div class="item_content">
                    <ul class="meta_list unordered_list">
                      <li><a href="/blog-details">UI/UX</a></li>
                      <li><span>30 Sep, 2023</span></li>
                    </ul>
                    <h3 class="item_title">
                      <a href="/blog-details/7"
                        >The Role of Social Media in Event Promot ...</a
                      >
                    </h3>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="sidebar_widget">
            <h3 class="widget_title">Tags List</h3>
            <ul class="tags_list unordered_list">
              <li><a href="/blog">Business</a></li>
              <li><a href="/blog">UI/UX</a></li>
              <li><a href="/blog">Development</a></li>
              <li><a href="/blog">Design</a></li>
              <li><a href="/blog">Programing</a></li>
              <li><a href="/blog">Social</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection