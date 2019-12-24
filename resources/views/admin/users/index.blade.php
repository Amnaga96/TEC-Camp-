

@extends('admin.layouts.admin')


@section('content')
    <a class="btn btn-primary" href="{{ url('admin/users/create') }}">Add new User</a>
    {{--  table to list users  --}}
@stop
