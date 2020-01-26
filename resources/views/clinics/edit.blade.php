@extends('layouts.app_renamed')
@section('content')
 <div class="container">   <br><br> <div style="heigt:100% ; background-color:#86e2d5 ;" class="shareet"><h4 class="ml-5">add a new clinic!</h4> </div><br><br>
</div>

<div style="width:600px; height:100%;"  class="container">
<div >
        <ul >
        @foreach ($errors->all() as $error)
            <li class="alert alert-warning alert-danger">{{ $error }}</li>
        @endforeach
        </ul>
        </div>

<form action="{{ route('clinic.update',$clinic->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH') 
 clinic's name : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="name" value={{ $clinic->name }} > <br><br>
 phone number : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="phone_number" value={{ $clinic->phone_number }}> <br><br>
 area :<select class="form-control form-control-lg " style="border-color:#86e2d5 ;" name="area">
                                      <option>select area</option>
                                     
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                     

                                      </select></p>

<button style="background-color: #86e2d5; " class="mt-5 mb-5 btn btn-info " type="submit" value="send" >ADD!</button>

</form>

@endsection
<!--   scope="col" class="text-info" -->