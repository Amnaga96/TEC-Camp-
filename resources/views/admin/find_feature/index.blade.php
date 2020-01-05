@extends('admin.layouts.admin')

@section('content')

    <a style="background-color:#86e2d5;" class="btn btn-lg" href="{{ url('admin/clinic/page') }}">Clinics</a>
    <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/area/page') }}">Areas</a>
    <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/specialization/page') }}">Specializations</a>
    <a style="background-color:#86e2d5;" class="btn btn-lg " href="{{ url('admin/doctor/page') }}">Doctors</a>
 


{{-- list all clinics in a table --}}

@endsection