@extends('admin.layouts.admin')

@section('content')

    <a class="btn btn-primary" href="{{ url('admin/clinic/create') }}">Add new Clinic</a>


{{-- list all clinics in a table --}}

@endsection