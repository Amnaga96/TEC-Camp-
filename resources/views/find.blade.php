

@extends('layouts.app_renamed')


@section('content')
              <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

              <div id="showcase">

<div style="width:600px;" class="container">
                  <div class="showcase-content">
                      <h2>FIND A THIRAPIST!</h2>
                      <p>Here in health care we can help you to find the avilible therapists in the country.</p>
  
  <form action="{{ route('find_result') }}" method="POST">
  @csrf
                                 <select class="form-control form-control-lg " style="border-color:#86e2d5 ;" name="address">
                                      <option>select a place</option>
                                      @foreach($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                      @endforeach

                                      </select></p>
                                      <br>
                                      <select class="form-control form-control-lg" style="border-color: #86e2d5;" name="specialization">
                                      <option>select a type</option>
                                      @foreach($specializations as $specializaion)
                                        <option value="{{ $specializaion->id }}">{{ $specializaion->name }}</option>
                                      @endforeach

                                      </select>
        <button style="background-color: #86e2d5; margin-top: 20px;" class="btn btn-info " type="submit" >FIND!</button>
        </form>

                    
</div> 
                      
                    </div>                     
            </div>

            {{-- @foreach($result as $value)
                <p> {{ $value->name }} </p>
                <p> {{ $value->clinic->name }} </p>
            @endforeach --}}
@endsection
