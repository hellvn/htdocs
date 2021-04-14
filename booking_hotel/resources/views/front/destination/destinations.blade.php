@extends('front.layout.master')
@section('title','Popular Destination')
@section('body')
<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Destinations</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Destinations</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Popular destinations ================ -->
<div class="popular-destinations pt-70 pb-40 position-relative">
  <div class="container">
    <div class="row">
        @foreach($destinations as $destination)
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
            <!-- popular destination box -->
            <div class="popular-destination-box">
              <div class="img-holder-overlay">
                <div class="img-holder"><img src="front/img/popular-destination/{{ $destination->image_path }}" alt=""></div>
                <div class="overlay"><a href="./destinations/{{$destination->id}}"><i class="fas fa-share"></i></a></div>
              </div>
              <div class="title">
                <h3><a href="./listhotel/{{ $destination->id }}">{{ $destination->name }}</a></h3>
              </div>
            </div>
            <!-- popular destination box end -->
          </div>
        @endforeach
    </div>
  </div>
</div>
<!-- ================ Popular destinations end ================ -->
@endsection
