
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
        </style>
@extends('layouts.app_renamed')

@section('content')
<div class="container">
<div class="bg-img">
<div class="mt-3 mb-3 text-center">
<form action="{{ url('therapists') }}" method="post">
    @csrf
    <h1 class="text-info mb-3 pt-3 mb-auto mr-2">New therapists</h1>
 <br>
    <div class="text-info mt-3 mr-2">Your name: <input type="text" name="name" style="border: 1px solid #22a391;"></div>
    <div class="text-info mt-3 ml-4">Email: <input type="email" name="email" style="border: 1px solid #22a391;"></div>
    <div class="text-info mt-3">password: <input type="password" name="password" style="border: 1px solid #22a391;"></div>
    <button style="border: 1px solid #22a391; border-radius: 4px; " class="btn button mt-3">Send</button>
</form></div></div>
</div>
@endsection