@extends('admin.layouts.admin')

@section('content')

<form action="{{ url('admin/users') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">

    <input type="submit">
</form>

@stop
