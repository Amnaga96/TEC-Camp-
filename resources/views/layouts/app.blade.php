<html>
 
<head>
    <style>
    nav .black{

background: #000;
}


    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="laravel template.css">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>


  <nav class=" black sticky-top" >
    <nav class="sticky-top navbar mb-5 navbar-expand-lg navbar-light  pull-right"  > 
<div class="container">
        <a style="color: silver; margin-top: 3px;" class="navbar-brand" href="#"><h4>You Talk</h4> </a>

        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">           
          <ul   class=" nav  justify-content-end   ml-auto">

            <li class="nav-item ">
              <a style= "font-size: 14.5px; color: silver;" class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li  class="nav-item">
              <a style="font-size: 14.5px; color: silver;"  class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 14.5px; color: silver;" class="nav-link" href="#">Services</a>
              </li>            
              <li  class="nav-item">
                  <a style="font-size: 14.5px; color: silver;" class="nav-link" href="blog.html">Our blog</a>
                </li>               
                <li class="nav-item">
                    <a style=" font-size: 14.5px; color: silver;" class="nav-link" href="#">Contact us</a>
                  </li>
                  <li class="nav-item">
                      <a style=" font-size: 14.5px; color: silver;" class="nav-link" href="singin.html">Sign in</a>
                    </li>
                   </ul>         
                      </div></div>
                           </nav>
</nav>




      <div class="container">
      <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

        @yield('content') 
        </div>



     
 <!--FOOTER-->
 <div style=" position: fixed;
 left: 0;
 bottom: 0;
 width: 100%;
 background-color: black;
 color: white;
 text-align: center;
 height: 50px;
 width: 100%;"   
 
  class="footerr">

     <center><p class="footer" style="font-size: 13.5px; color: rgb(169, 166, 166); margin-top: 10px;">Copyright &copy; 2019  health care.   Design by <a style=" color: #86e2d5;" href="team" rel="nofollow">TEAM</a></p></center>        
  </div>
<!--END OF FOOTER-->


<script type="text/javascript">
$(window).on("scroll",function() {
if( $(window).scrollTop() > 50 ) { 
  $('nav').addClass('black');
}
else {  $('nav').removeClass('black');
}
})
</script>


    
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>



</html>