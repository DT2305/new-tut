@extends('layouts.master')
@section('title','Xác thực email')
@section('content')
@section('breadcrumb_1','Xác thực Email')
@section('breadcrumb_2','Xác thực Email')
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="form-wrap">
                    <h2 class="mb-5">{{ __('content.Verify Your Email Address') }}</h2>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('content.A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('content.Before proceeding, please check your email for a verification link.') }}
                    {{ __('content.If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('content.click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    {{--    --}}
@endsection

