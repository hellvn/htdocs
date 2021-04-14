@extends('front.layouts.master')
@section('body')

    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>{{ __('Confirm Password') }}</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('Confirm Password') }}</li>
                    </ol>
                    <!-- breadcrumb end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Reset Password page ================ -->
    <div class="login-register-page pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <!-- Confirm Password box -->
                    <div class="confirm-box">
                        <form class="form-style-1 shadow p-30" method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <p>{{ __('Please confirm your password before continue.') }}</p>
                            {{--              input password--}}
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn-style-1 w-100">{{ __('Confirm Password') }}</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                    <!-- confirm Password box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Reset Password page end ================ -->
@endsection
