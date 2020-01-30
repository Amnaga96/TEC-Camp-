
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
                    <div class="card-header shadow-lg bd-with  bg-white rounded mx-auto d-block">
                    <h1><strong>Find feature</strong></h1>
                    <h6>your name:<strong>{{ auth()->user()->name }}</strong></h6></div>
                        <div class="card-body p-5">

                            <a style="background-color:#86e2d5;" class="btn btn-lg" href="{{ url('admin/home') }}" style="color:black;">your profile</a>
                            <a style="background-color:#86e2d5;" class="btn btn-lg" href="{{ url('admin/clinic/page') }}">Clinics</a>
                            <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/area/page') }}">Areas</a>
                            <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/specialization/page') }}">Specializations</a>
                            <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/doctor/page') }}">Doctors</a>
    


{{-- list all clinics in a table --}}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
