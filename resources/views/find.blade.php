

@extends('layouts.app')


@section('content')
              <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
             
              <div id="showcase">                
                     
                  <div class="showcase-content">
                      <h2>FIND A THIRAPIST!</h2>
                      <p>Here in health care we can help you to find the avilible therapists in the country.</p>

                      <div class="dropdown">

                          <button style="background-color: #86e2d5;" class="btn btn-info " type="button" data-toggle="dropdown">
                            CHOOSE A PLACE
                              <span class="caret"></span></button>

                              <ul class="dropdown-menu">
                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                                <li><a href="#">JANZOUR</a></li>
                                <li><a href="#">SEYAHYA</a></li>
                                <li><a href="#">HAI AL-ANDALUS</a></li>
                                
                              </ul>
                              <div style="margin-top: 20px;" class="dropdown">
  
                                  <button style="background-color: #86e2d5;" class="btn btn-info " type="button" data-toggle="dropdown">
                                    CHOOSE A TYPE
                                      <span class="caret"></span></button>
        
                                      <ul class="dropdown-menu">
                                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                                        <li><a href="#">KIDS</a></li>
                                        <li><a href="#">TEEN</a></li>
                                        <li><a href="#">ADULT</a></li>
                                        
                                      </ul>
                                    

        
                              </div>
                              <button style="background-color: #86e2d5; margin-top: 20px;" class="btn btn-info " type="button" >FIND!</button>

                      </div>
                    </div> 
                      
            </div>
@endsection