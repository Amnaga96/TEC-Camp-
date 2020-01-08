

@extends('layouts.app_renamed')


@section('content')

 <div class="container">   <br><br> <div style="heigt:100% ; background-color:#86e2d5 ;" class="shareet"><h4 class="ml-5">Add a new area</h4> </div><br><br>
</div>
<div style="width:600px; height:100%;"  class="container">

<form action="{{ route('area.store') }}" method="post">
    @csrf   
    Area : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="name" > <br><br>


    <button style="background-color: #86e2d5;" class="btn btn-info mt-5 mb-5 " type="submit">add!</button>

</form>
</div>



             
@endsection