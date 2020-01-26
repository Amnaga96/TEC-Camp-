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
 
<form action="{{ route('clinic.store') }}" method="post" enctype="multipart/form-data">
    @csrf
 clinic's name : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="name" > <br><br>
 phone number : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="phone_number" > <br><br>
 area :<select class="form-control form-control-lg " style="border-color:#86e2d5 ;" name="area">
                                      <option>select area</option>
                                     
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                     

                                      </select></p>
                                       <div class="form-group row">
                         <br>
                       image : <input type="file" name="image_link" class="form-control col-5" placeholder="upload image" >
                    </div>

<button style="background-color: #86e2d5; " class="mt-5 mb-5 btn btn-info " type="submit" value="send" >ADD!</button>

</form>

@endsection