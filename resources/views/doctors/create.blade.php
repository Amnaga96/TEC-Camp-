@extends('layouts.app_renamed')

@section('content')
 <div class="container">   <br><br> <div style="heigt:100% ; background-color:#86e2d5 ;" class="shareet"><h4 class="ml-5">add a therapist!</h4> </div><br><br>
</div>

<div style="width:600px; height:100%;"  class="container">

<form action="{{ route('doctor.store') }}" method="post">
    @csrf
 doctor's name : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="name" > <br><br>
 
                                  <select name="specialization">
                                      <option>select specialization</option>
                                     
                                        @foreach ($specializations as $specialization)
                                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                        @endforeach
                                     

                                      </select></p>

<button style="background-color: #86e2d5; " class="mt-5 mb-5 btn btn-info " type="submit" value="send" >ADD!</button>

</form>

@endsection