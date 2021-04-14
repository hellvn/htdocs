@extends('front.layouts.master')

@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Sign In</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">{{ __('Login') }}</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Login page ================ -->
<div class="login-register-page pt-70 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <!-- login box -->
        <div class="login-box">
          <form class="form-style-1 shadow p-30" method="POST" action="{{ route('login') }}">
              @csrf
            <p>Enter your e-mail and password below to log in to your account and use the benefits of our website.</p>
{{--              email input--}}
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
{{--              Password input--}}
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label font-size-14" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="forgot-password text-right">
                    @if (Route::has('password.request'))
                        <a class="text-danger" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif


                </div>
              </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-style-1 w-100">{{ __('Login') }}</button>
            </div>
            <p class="mb-0">Don't have account? <a href="{{ route('register') }}">Signup!</a></p>
          </form>
        </div>
        <!-- login box end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Login page end ================ -->
@endsection
