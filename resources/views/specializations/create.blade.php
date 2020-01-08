@extends('layouts.app_renamed')

@section('content')
 <div class="container">   <br><br> <div style="heigt:100% ; background-color:#86e2d5 ;" class="shareet"><h4 class="ml-5">add a new specialization!</h4> </div><br><br>
</div>

<div style="width:600px; height:100%;"  class="container">
<div >
        <ul >
        @foreach ($errors->all() as $error)
            <li class="alert alert-warning alert-danger">{{ $error }}</li>
        @endforeach
        </ul>
        </div>
<form action="{{ route('specialization.store') }}" method="post">
    @csrf
 specialization : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="name" > <br><br>
 
                                    

<button style="background-color: #86e2d5; " class="mt-5 mb-5 btn btn-info " type="submit" value="send" >ADD!</button>

</form>
</div>
@endsection