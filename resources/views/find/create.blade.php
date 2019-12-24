

@extends('layouts.app_renamed')


@section('content')
 <div class="container">   <br><br> <div style="heigt:100% ; background-color:#86e2d5 ;" class="shareet"><h4 class="ml-5">Add to find a therapist database:</h4> </div><br><br>
</div>
<div style="width:600px; height:100%;"  class="container">
<form action="{{ url('find/store') }}" method="post">
    @csrf   
    clinic's name : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="clinic_name" > <br><br>
    clinc's phone number : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="clinic_phone_number"> <br><br>
    clini's area : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="area"> <br><br>
    doctor's name : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="doctor_name"> <br><br>
    doctor's specialization : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="doctor_specialization"> 


    <button style="background-color: #86e2d5;" class="btn btn-info mt-5 mb-5 " type="submit">add!</button>

</form>
</div>



             
@endsection