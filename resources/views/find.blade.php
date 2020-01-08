


@extends('layouts.app_renamed')


@section('content')
            <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

              <div id="showcase " style="background: url('../img/LocationMap7.jpg') no-repeat center center/cover ; width:100%; height:650px; " >

<div  style="width:600px;" class="container ">
                  <div  class="showcase-content">
                      <h2 >FIND A THIRAPIST!</h2>
                      <p>Here in Utalk we can help you to find the avilible therapists in the country.</p>
  
  <form  action="{{ route('find.index') }}"  method="post">
  @csrf
                                 <select class="form-control form-control-lg " style="border-color:#86e2d5 ;" name="area_id">
                                      <option>select a place</option>                                    
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach                                   
                                      </select>
                                      <br>

                                      <select class="form-control form-control-lg" style="border-color: #86e2d5;" name="specialization">
                                      <option>select a type</option>                                 
                                       @foreach ($specialization as $specialization) 
                                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                        @endforeach  
                                      </select>
        <button style="background-color: #86e2d5; margin-top: 20px;" class="btn btn-info " type="submit" >FIND!</button>
        </form>

</div> 
                      
                    </div>                     
            </div>

 
         

            <div class=" mb-5 text-center ">
    <div class="reponsive-table">
        <table style="margin-Top:20px ;" class="table table-sm">
            <tr style="background-color: #86e2d5;"  class=" text-center ">
                <td>number </td>
                <td>clinic's name</td>
                <td>clinic's therapists</td>
                <td></td>
                <td></td>
                <td>clinic's phone number</td>
            </tr>          
               @foreach ($clinics as $clinic )
                <tr class="text-center">
                    <td scope="col" class="text-info">{{$loop->index +1}}</td>
                    <td scope="col" class="text-info">{{$clinic->name}}</td>
                    <td scope="col" class="text-info">@foreach ($clinic->doctors as $doctor ){{$doctor->name}}@endforeach </td>
                    <td scope="col" class="text-info"></td>
                    <td scope="col" class="text-info"> {{$clinic->phone_number}} </td>
                </tr>
               @endforeach
        </table>
    </div>
    </div>

    <div style="height:300px"></div>
@endsection

