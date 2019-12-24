@extends('layouts.app_renamed')


@section('content')
 <div class="container">   <br><br> <div style="heigt:100% ; background-color:#86e2d5 ;" class="shareet"><h4 class="ml-5">something!</h4> </div><br><br>
</div>
<div style="width:600px; height:100%;"  class="container">

<form action="{{ url('therapists') }}" method="get">
    name : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="name" > <br><br>
    city : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="city" > <br><br>
    clinics: <select class="form-control form-control-lg" style="border-color: #86e2d5;" name="clinic_id">

        <option value=""> select </option>
        @foreach ($clinics as $clinic)
            <option value="{{ $clinic->id }}">{{ $clinic->name }}</option>
        @endforeach
    </select>

            <button style="background-color: #86e2d5; " class="mt-5 mb-5 btn btn-info " type="submit" >FIND!</button>

</form>
@foreach ($therapists as $consulter)
    {{ $consulter->name }}
    <br>
    </div>
@endforeach



@endsection
