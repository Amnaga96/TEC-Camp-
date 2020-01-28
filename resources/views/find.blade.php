


@extends('layouts.app_renamed')


@section('content')
            <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

              <div id="showcase " style="background: url('../img/LocationMap7.jpg') no-repeat center center/cover ; width:100%; height:630px; " >

<div  style="width:600px;" class="container ">
                  <div  class="showcase-content">
                      <h2 >FIND A THIRAPIST!</h2>
                      <p>Here in Utalk we can help you to find the avilible therapists in the country.</p>
  
  <form  action="{{ route('find.index') }}"  method="post">
  @csrf
                                 <select class="form-control form-control-lg " style="border-color:#86e2d5 ;" name="area_id">
                                      <option>select a place</option>                                    
                                        @foreach ($areas as $area_object)
                                            <option value="{{ $area_object->id }}" {{ ($area_object->id == $area)? 'selected': '' }}>{{ $area_object->name }}</option>
                                        @endforeach                                   
                                      </select>
                                      <br>

                                      <select class="form-control form-control-lg" style="border-color: #86e2d5;" name="specialization">
                                      <option>select a specialization</option>                                 
                                       @foreach ($specializations as $specialization_object) 
                                       @dd($specialization_object);
                                            <option value="{{ $specialization_object->id }}" {{ ($specialization_object->id == $specialization)? 'selected': '' }}>{{ $specialization_object->name }}</option>
                                        @endforeach  
                                      </select>
        <button style="background-color: #86e2d5; margin-top: 20px;" class="btn btn-info " type="submit" >FIND!</button>
        </form>

</div>
                      
                    </div>                     
            </div>


               @foreach ($clinics as $clinic )

         <div class="mt-5 mb-5 container">

          <div class="row">
            <!--THE COL 1-->
            <div class="col-md-4 profile box" >
              <aside>
                <img src="{{ asset ('storage/'.$clinic->image_link) }}"  width="200px"  >
               
              </aside>
            </div>
            <!--THE COL 2-->
            <div class="col-md-8 box" >    
              <header>
                <h2>{{$clinic->name}}</h2>
              </header>
              <div class="lead"> 
                  <ul >
                    @foreach($clinic->doctors as $doctor )<li> {{$doctor->name}}</li>@endforeach
                  </ul>
              </div>
              <footer>
                <span style="background-color: #86e2d5;" class="badge  badge-lg">phone number : {{$clinic->phone_number}} </span>
              </footer>
                <br><br>
                
            </div>
          </div>

        </div> <hr>
                        @endforeach


            
    <div style="height:300px"></div>
@endsection

