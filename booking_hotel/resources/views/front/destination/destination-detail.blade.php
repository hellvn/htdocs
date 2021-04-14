@extends('front.layout.master')
@section('title','Destination-Detail')
@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Destination Detail</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Destination Detail</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Destination detail page ================ -->
<div class="destination-detail-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mb-30">
          <h3 class="mb-5">{{ $destinationDetail->name }}</h3>
        <div class="destination-detail-img mb-15"><img src="front/img/popular-destination/{{ $destinationDetail->image_path }}" alt=""></div>
        <p>{!! $destinationDetail->description !!}</p>
      </div>
      <div class="col-lg-4 col-md-4">
        <aside>
          <!-- help us -->
          <div class="help-us mb-30">
            <h3>How can we help you?</h3>
            <p>Lorem ipsum dolor sit ametdf consectetur adipiscing elitdgsh ametdf consectetur piscing.</p>
            <a class="view-detail-btn" href="#"><i class="fas fa-phone-alt"></i> Contact Us</a> </div>
          <!-- help us end -->
          <!-- side about -->
          <div class="side-about mb-30">
            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
          </div>
          <!-- side about end -->
        </aside>
      </div>
    </div>
  </div>
</div>
<!-- ================ Destination detail page end ================ -->

@endsection
