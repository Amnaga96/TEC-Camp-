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
                <div class="card-header text-center shadow-lg bd-with  bg-white rounded mx-auto d-block">{{ __('Confirm Password') }}</div>

                <div class="card-body p-5">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="border: 1px solid #22a391;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn button mb-3 pb-2 mt-3" style="border: 1px solid #22a391;">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
