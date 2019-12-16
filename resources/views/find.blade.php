

@extends('layouts.app_renamed')


@section('content')
              <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

              <div id="showcase">

<div style="width:600px;" class="container">
                  <div class="showcase-content">
                      <h2>FIND A THIRAPIST!</h2>
                      <p>Here in health care we can help you to find the avilible therapists in the country.</p>

  <form action="">

                                 <select class="form-control form-control-lg " style="border-color:#86e2d5 ;">
                                      <option>select a place</option>
                                      <option >Janzour</option>
                                      <option >Seyahia</option>
                                      <option >hai al-andalus</option>

                                      </select></p>
                                      <br>
                                      <select class="form-control form-control-lg" style="border-color: #86e2d5;">
                                      <option>select a type</option>
                                      <option>children</option>
                                      <option >adult</option>
                                      <option >teenagers</option>

                                      </select></form>


                              <button style="background-color: #86e2d5; margin-top: 20px;" class="btn btn-info " type="button" >FIND!</button>
</div>

                    </div>
            </div>
@endsection
