@extends('front.layout.master')
@section('title','Traveller Information')
@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Traveler Information</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Traveler Information</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Traveler Information page ================ -->
<div class="detail-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mb-30">
        <form class="form-style-1">
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label>Salutation<span class="text-danger">*</span></label>
                <select class="form-control">
                  <option value="0">- Select -</option>
                  <option value="MR">Mr.</option>
                  <option value="MRS">Mrs.</option>
                  <option value="MIS">Miss</option>
                  <option value="MS">Ms.</option>
                  <option value="MST">Master</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label>Gender<span class="text-danger">*</span></label>
                <select class="form-control">
                  <option value="0">- Select -</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Email Address<span class="text-danger">*</span></label>
                <input type="text" value="info@exampal.com" class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Date of Birth<span class="text-danger">*</span></label>
                <input type="text" id="datepickerdob" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Country Code<span class="text-danger">*</span></label>
                <select class="form-control">
                  <option value="0">- Select -</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Mobile Number<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="1234567899">
              </div>
            </div>
          </div>
          <a href="./payment" class="btn-style-1">Continue with payment</a>
        </form>
      </div>
      <div class="col-lg-4 col-md-4">
        <aside>
          <!-- help us -->
          <div class="help-us mb-30">
            <h3>How can we help you?</h3>
            <p>Lorem ipsum dolor sit ametdf consectetur adipiscing elitdgsh ametdf consectetur piscing.</p>
            <a class="view-detail-btn" href="#"><i class="fas fa-phone-alt"></i> Contact Us</a> </div>
          <!-- help us end -->
        </aside>
      </div>
    </div>
  </div>
</div>
<!-- ================ Traveler Information page end ================ -->
@endsection
