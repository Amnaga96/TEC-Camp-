<style>
/* showcase */
#showcase {
    background: url('../img/LocationMap.jpg')
no-repeat center center/cover;
height: 670px; 
width: 100%;
}


  </style>
@extends('layouts.app_renamed')


@section('content')
              <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

              <div id="showcase ">

<div style="width:600px;" class="container ">
                  <div class="showcase-content">
                      <h2>FIND A THIRAPIST!</h2>
                      <p>Here in Utalk we can help you to find the avilible therapists in the country.</p>
  
  <form action="{{ route('find.index') }}"  method="post">
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

 
           
@endsection

