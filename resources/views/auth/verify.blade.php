

<style>
* {
  box-sizing: border-box;
}
.bg-img {
  background-color:#9bc9c3;
  min-height: 380px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  border: 1px solid #22a391;
  border-radius: 9px;
}
.zoom {
        padding: 10px;
        transition: transform .2s;
        width: 80px;
        height: 80px;
    }
    .zoom:hover {
        transform: scale(1.5);
    }

    .button {
        background-color: #86e2d5;
    }

    .button:hover {
        background-color: #22a391;
        }
        .brod{
            border: 1px solid #22a391;
            border-radius: 4px; 
        } 


</style>


@extends('layouts.app_renamed')

@section('content')
<div class="container  bg-img p-5 shadow-lg bd-with rounded mx-auto d-block">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg bd-with  bg-white rounded mx-auto d-block" style="border: 1px solid #22a391;">
                <div class="card-header text-center shadow-lg rounded mx-auto d-block">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body p-5">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link align-baseline btn button mb-3 pb-2 mt-3" style="border: 1px solid #22a391;">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
