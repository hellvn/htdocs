@extends('front.layout.master')
@section('title', 'Blog')
@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Blog</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Blog page ================ -->
<div class="blog-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-30">
            <!-- blog box -->
            <div class="blog-box shadow">
              <div class="blog_img mb-20"><img src="front/img/blog/blog-1.jpg" alt=""></div>
              <div class="blog-des">
                <h6 class="blog_date font-weight-normal text-muted"><span>business</span> January 01, 2020</h6>
                <h5 class="mt-10 mb-6"><a href="#" class="text-dark">The Most Advance Business Plan</a></h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur ipiscing elit amet consectetur piscing elit consectetur adipiscing elit sed et eletum.</p>
                <div class="read_more">
                  <div class="blog_border"></div>
                  <a href="blog-single.html" class="text-dark text-uppercase"> Read More</a> </div>
              </div>
            </div>
            <!-- blog box end -->
          </div>
          <div class="col-lg-6 col-md-6 mb-30">
            <!-- blog box -->
            <div class="blog-box shadow">
              <div class="blog_img mb-20"><img src="front/img/blog/blog-2.jpg" alt=""></div>
              <div class="blog-des">
                <h6 class="blog_date font-weight-normal text-muted"><span>business</span> January 01, 2020</h6>
                <h5 class="mt-10 mb-6"><a href="#" class="text-dark">Beautiful Home Page</a></h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur ipiscing elit amet consectetur piscing elit consectetur adipiscing elit sed et eletum.</p>
                <div class="read_more">
                  <div class="blog_border"></div>
                  <a href="#" class="text-dark text-uppercase"> Read More</a> </div>
              </div>
            </div>
            <!-- blog box end -->
          </div>
          <div class="col-lg-6 col-md-6 mb-30">
            <!-- blog box -->
            <div class="blog-box shadow">
              <div class="blog_img mb-20"><img src="front/img/blog/blog-3.jpg" alt=""></div>
              <div class="blog-des">
                <h6 class="blog_date font-weight-normal text-muted"><span>business</span> January 01, 2020</h6>
                <h5 class="mt-10 mb-6"><a href="#" class="text-dark">Modern Design Concept</a></h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur ipiscing elit amet consectetur piscing elit consectetur adipiscing elit sed et eletum.</p>
                <div class="read_more">
                  <div class="blog_border"></div>
                  <a href="#" class="text-dark text-uppercase"> Read More</a> </div>
              </div>
            </div>
            <!-- blog box end -->
          </div>
          <div class="col-lg-6 col-md-6 mb-30">
            <!-- blog box -->
            <div class="blog-box shadow">
              <div class="blog_img mb-20"><img src="front/img/blog/blog-4.jpg" alt=""></div>
              <div class="blog-des">
                <h6 class="blog_date font-weight-normal text-muted"><span>business</span> January 01, 2020</h6>
                <h5 class="mt-10 mb-6"><a href="#" class="text-dark">Smart Flexible Visiting Card</a></h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur ipiscing elit amet consectetur piscing elit consectetur adipiscing elit sed et eletum.</p>
                <div class="read_more">
                  <div class="blog_border"></div>
                  <a href="#" class="text-dark text-uppercase"> Read More</a> </div>
              </div>
            </div>
            <!-- blog box end -->
          </div>
          <div class="col-lg-6 col-md-6 mb-30">
            <!-- blog box -->
            <div class="blog-box shadow">
              <div class="blog_img mb-20"><img src="front/img/blog/blog-5.jpg" alt=""></div>
              <div class="blog-des">
                <h6 class="blog_date font-weight-normal text-muted"><span>business</span> January 01, 2020</h6>
                <h5 class="mt-10 mb-6"><a href="#" class="text-dark">Investment Planning</a></h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur ipiscing elit amet consectetur piscing elit consectetur adipiscing elit sed et eletum.</p>
                <div class="read_more">
                  <div class="blog_border"></div>
                  <a href="#" class="text-dark text-uppercase"> Read More</a> </div>
              </div>
            </div>
            <!-- blog box end -->
          </div>
          <div class="col-lg-6 col-md-6 mb-30">
            <!-- blog box -->
            <div class="blog-box shadow">
              <div class="blog_img mb-20"><img src="front/img/blog/blog-6.jpg" alt=""></div>
              <div class="blog-des">
                <h6 class="blog_date font-weight-normal text-muted"><span>business</span> January 01, 2020</h6>
                <h5 class="mt-10 mb-6"><a href="#" class="text-dark">Why you Should Always First</a></h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur ipiscing elit amet consectetur piscing elit consectetur adipiscing elit sed et eletum.</p>
                <div class="read_more">
                  <div class="blog_border"></div>
                  <a href="#" class="text-dark text-uppercase"> Read More</a> </div>
              </div>
            </div>
            <!-- blog box end -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- aside -->
        <aside>
          <!-- search form -->
          <form class="search-form mb-50">
            <input type="text" class="form-control" placeholder="Search" value="">
            <button class="search-submit"><i class="fas fa-search"></i></button>
          </form>
          <!-- search form end -->
          <!-- widget -->
          <div class="widget mb-50">
            <!-- widget title -->
            <h3 class="widget-title">Categories</h3>
            <!-- widget title end -->
            <!-- categories -->
            <ul class="blog-categorie">
              <li><a href="#"><i class="far fa-dot-circle"></i> Business</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Traveling</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Developement</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Motion Designer</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Content Writing</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Web Developement</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Business Strategy</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Risk Management</a></li>
            </ul>
            <!-- categories end -->
          </div>
          <!-- widget end -->
          <!-- widget -->
          <div class="widget mb-50">
            <!-- widget title -->
            <h3 class="widget-title">Recent Post</h3>
            <!-- widget title end -->
            <!-- recent post -->
            <div class="blog-recent-post">
              <!-- recent single post -->
              <div class="recent-single-post mb-20">
                <div class="post-img"> <a href="#"><img src="front/img/blog/recent-post/recent-post-1.jpg" alt=""></a> </div>
                <div class="pst-content">
                  <p><a href="#">Lorem ipsum rem ipsumsd dolorit amet consectetur ipiscing.</a></p>
                  <span class="date-type">01 Jan / 2020</span> </div>
              </div>
              <!-- recent single post end -->
              <!-- recent single post -->
              <div class="recent-single-post mb-20">
                <div class="post-img"> <a href="#"><img src="front/img/blog/recent-post/recent-post-2.jpg" alt=""></a> </div>
                <div class="pst-content">
                  <p><a href="#">Lorem ipsum rem ipsumsd dolorit amet consectetur ipiscing.</a></p>
                  <span class="date-type">01 Jan / 2020</span> </div>
              </div>
              <!-- recent single post end -->
              <!-- recent single post -->
              <div class="recent-single-post">
                <div class="post-img"> <a href="#"><img src="front/img/blog/recent-post/recent-post-3.jpg" alt=""></a> </div>
                <div class="pst-content">
                  <p><a href="#">Lorem ipsum rem ipsumsd dolorit amet consectetur ipiscing.</a></p>
                  <span class="date-type">01 Jan / 2020</span> </div>
              </div>
              <!-- recent single post end -->
            </div>
            <!-- recent post end -->
          </div>
          <!-- widget end -->
          <!-- widget -->
          <div class="widget mb-30">
            <!-- widget title -->
            <h3 class="widget-title">Tags</h3>
            <!-- widget title end -->
            <!-- tags -->
            <div class="blog-tags"> <a href="#">Business</a> <a href="#">Traveling</a> <a href="#">Developement</a> <a href="#">Motion</a> <a href="#">Writing</a> <a href="#">Strategy</a> <a href="#">Management</a> </div>
            <!-- tags end -->
          </div>
          <!-- widget end -->
        </aside>
        <!-- aside end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Blog page end ================ -->
@endsection

