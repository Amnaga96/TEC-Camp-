@extends('admin.layouts.admin')

@section('content')

<form action="{{ route('store') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
     <select name="user_type">
     <option value="admin">Admin</option>
     <option value="therapist">Therapist</option>
     <option value="patient">Patient</option>
     </select>
    <input type="submit" value="save">
</form>

@stop
