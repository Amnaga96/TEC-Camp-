
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
<div class="btn button mb-3 pb-2 " style="border: 1px solid #22a391;"><a href="{{ url('admin/users') }}" class="text-info">Users</a></div>

<div class="bg-img">
<div class="mt-3 mb-3 text-center">
 @if ($errors->count())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{url('admin/'.$user->id) }}" method="post" enctype="multipart/form-data">
    @csrf
     @method('PATCH')
    <h2 class="text-info mb-3 pt-3 mb-auto mr-2">Edit Users</h2>
        <div class="text-info mt-3 mr-2 pt-3">User name: <input type="text" name="name" value="{{ $user->name }}" style="border: 1px solid #22a391;"></div>
            <div class="text-info mt-3 mr-2">User Email: <input type="email" name="email" value="{{ $user->email }}" style="border: 1px solid #22a391;"></div>
            <div class="text-info mt-3 mr-2">password: <input type="password" name="password" value="{{ $user->password}}" style="border: 1px solid #22a391;"></div>
                <select class="text-info mt-3 mr-2" name="user_type">
                        <option value="admin" {{ ($user->user_type  == "admin") ? 'selected' : null }}>Admin</option>
                        <option value="therapist" {{ ($user->user_type  == "therapist") ? 'selected' : null }}>Therapist</option>
                        <option value="patient" {{ ($user->user_type  == "patient") ? 'selected' : null}}>Patient</option>
                </select> 
                <div class="input-group container ">
                    <span class="input-group-btn rounded float-left">
                        <div class="text-info mt-3 mr-2">
                            <input style="border: 1px solid #22a391; border-radius: 4px; " class="btn button mt-3" type="submit" value="save">
                            <a href="{{ url('admin/users') }}" style="border: 1px solid #22a391; border-radius: 4px;" class="btn button mt-3">Cancel</a>
                        </div>
                    </span>
                </div>
</form>

@stop
