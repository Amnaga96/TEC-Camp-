
@extends('layouts.app_renamed')
@section('content')
    <div class="btn button mb-3 pb-2 " style="border: 1px solid #86e2d5;"><a href="{{ url('admin/home') }}" style="color:black;">your profile</a></div>
    <a style="background-color:#86e2d5;" class="btn btn-lg" href="{{ url('admin/clinic/page') }}">Clinics</a>
    <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/area/page') }}">Areas</a>
    <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/specialization/page') }}">Specializations</a>
    <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/doctor/page') }}">Doctors</a>
 


{{-- list all clinics in a table --}}

@endsection