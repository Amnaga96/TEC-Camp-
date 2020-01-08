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
<div class="container html">
 
    <div class="text-center shadow-lg p-2 mb-5 mb-5 bd-with  bg-white rounded mx-auto d-block bg-img">
        <div class="row justify-content-center">
            <div class="col-md-8 text-info mt-3 mb-3 mr-2 pt-5 bg-img">
                <div class="card brod text-center shadow-lg p-2 mb-3 bd-with  bg-white rounded mx-auto d-block text-center">
                    <div class="card-header shadow-lg bd-with  bg-white rounded mx-auto d-block">{{ auth()->user()->name }}</div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <br>
                    <p class="text-size-2">your profile</p>
                     <div class="btn button mb-3 pb-2 mt-3" style="border: 1px solid #22a391;"><a href="{{ url('admin/users/create') }}" class="text-info">Add new User</a></div>
                     <div class="btn button mb-3 pb-2 mt-3" style="border: 1px solid #22a391;"><a href="{{ url('admin/users') }}" class="text-info">List Users</a></div>
                     <p>your email: {{ auth()->user()->email }} </p>
                     <p>your account:<a href="{{ route('user-edit',auth()->user()->id) }}" class="text-info">account</a></div></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
