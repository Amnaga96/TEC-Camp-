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
<div class="container">
    <div class="text-center shadow-lg p-3 mb-5 bd-with  bg-white rounded mx-auto d-block text-center bg-img">
        <div class="row justify-content-center">
            <div class="col-md-8 text-info mt-3 mr-2 pt-3 bg-img">
                <div class="card brod">
                    <div class="card-header">{{ $user->name }}</div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
