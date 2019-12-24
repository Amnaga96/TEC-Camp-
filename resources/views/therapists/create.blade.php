@extends('layouts.app_renamed')

@section('content')
<div class="container">
<div class="mt-3 mb-3 text-center">
<h1 class="text-info mt-3 mr-2">New therapists</h1>
<br>
<form action="{{ url('therapists') }}" method="post">
    @csrf
    <div class="text-info mt-3 mr-2">Your name: <input type="text" name="name" style="border: 1px solid #86e2d5;"></div>
    <div class="text-info mt-3 ml-4">Email: <input type="email" name="email" style="border: 1px solid #86e2d5;"></div>
    <div class="text-info mt-3">password: <input type="password" name="password" style="border: 1px solid #86e2d5;"></div>
    <div class="text-info mt-3 mr-2"> <input style="border: 1px solid #86e2d5;" type="submit" value="send">
</form></div>
</div>
@endsection