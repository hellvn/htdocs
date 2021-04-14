@extends('front.layout.master')

@section('title', 'About')

@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>About Us</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">About Us</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ About page ================ -->
<div class="about-page pt-70 pb-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-30">
        <!-- about text -->
        <div class="about-col">
          <h6>About us</h6>
          <h2>We <span>provide solutions</span> to grow your business</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
          <a class=" btn-style-1" href="#" role="button">Explore More <i class="fas fa-long-arrow-alt-right pl-6"></i></a> </div>
        <!-- about text end -->
      </div>
      <div class="col-lg-6 mb-30">
        <!-- about video -->
        <div class="about-video-img-box position-relative rounded"> <img src="front/img/about-us/about-video-img-1.jpg" alt="" class="img-fluid rounded">
          <div class="hoverlay d-flex flex-row align-items-center justify-content-center"> <a class="venobox d-inline" data-gall="gall-video" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=668nUCeBHyY&amp;t=28s"><i class="fab fa-google-play"></i></a> </div>
        </div>
        <!-- about video end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ About page end ================ -->

<!-- ================ Our features ================ -->
<div class="our-features pt-100 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-30">
        <!-- feature img -->
        <div class="feature-img"> <img src="front/img/about-us/feature-img-1.jpg" class="rounded" alt=""> </div>
        <!-- feature img end -->
      </div>
      <div class="col-lg-6 mb-30">
        <!-- feature text -->
        <div class="feature-text">
          <h2>Our <span>Features</span></h2>
          <!-- features tabs -->
          <div class="features-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><i class="far fa-gem"></i> Awesome Design</a> </li>
              <li class="nav-item"> <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><i class="fas fa-desktop"></i> Full Devices</a> </li>
              <li class="nav-item"> <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><i class="fas fa-users"></i> User Experince</a> </li>
            </ul>
            <div class="tab-content pt-20" id="myTabContent">
              <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
              </div>
              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit erat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
              </div>
              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam ermum sit amet.</p>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
              </div>
            </div>
          </div>
          <!-- features tabs end -->
        </div>
        <!-- feature text end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Our features end ================ -->

@endsection
