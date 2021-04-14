@extends('front.layouts.master')
@section('body')

    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>{{ __('Reset Password') }}</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('Reset Password') }}</li>
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
                    <!-- Reset Password box -->
                    <div class="reset-box">
                        <form class="form-style-1 shadow p-30" method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <p>Please enter your email in the box above. We will send you a link to access further instructions.</p>
                            {{--              input token--}}
                            <input type="hidden" name="token" value="{{ $token }}">
                            {{--              input email--}}
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{--              input password--}}
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{--              retype password--}}
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                            <button type="submit" class="btn-style-1 w-100">{{ __('Reset Password') }}</button>
                        </form>
                    </div>
                    <!-- Reset Password box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Reset Password page end ================ -->
@endsection
