<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/article1.css')}}">
    
  </head>

  <body>

    <nav  style="background-color: #86e2d5;" class="navbar  navbar-light  fixed-top text-white  navbar-expand-lg ">
        <a style="color: rgb(83, 81, 81);" class="navbar-brand " href="#">HEALTH CARE</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div id="myNav" class="collapse navbar-collapse" >



        <!--kmfklermfkmes gf-->


    <ul style="margin-left: 260px;" class="navbar-nav mr-auto ">


        <li class="ml-3 mr-2 nav-item">
          <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
        </li>
       


        <li class=" ml-3 mr-2 nav-item">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
        

        <li class="ml-3 mr-2 nav-item">
          <a class="nav-link" href="#">SERVICES</a>
        </li>
        

        <li class="ml-3 mr-2 nav-item">
            <a class="nav-link" href="#">OURBLOG</a>
          </li>
          

          <li class="ml-3 mr-2 nav-item">
            <a class="nav-link" href="#">CONTACT US</a>
          </li>
          

          <li class="ml-3 mr-2 nav-item">
            <a class="nav-link" href="#">LOG IN</a>
          </li>   </ul>    </div> 
        </nav>

      

      <!--PUT YOUR CONTENT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

  <!--the CONTAINER-->
  <div class="container">
    <!--the row container-->
    <div class="row">
      <div class="col-md-8" >
        <!--THE COL 1-->
           <div style="margin-bottom: 50px; margin-top: 50px;" class="col-md-3 profile box" >
           <aside>
             <img src="../One-Page-Artical/Artical-Images/stress.jpeg"  width="300px" alt="" class="img-circle">
        <h4 style="margin-top: 10px;" >Stress</h4>
        <p>Name of editor: {{$a_id->editor_name}} </p>
        <hr>
           </aside>
          </div>
        
        <!--THE COL 2-->
               
           <article>
             <header>
               <h2>{{$a_id->title }}</h2>
             </header>
             <footer><small>{{$a_id->craeted_at}}/small></footer>
             <br>
             <div class="lead">{{$a_id->body}} <div>
             <footer>
                  <span style=" margin-bottom: 20px; background-color: #86e2d5; margin-top: 30px;" class="badge badge-success">psychology</span>
                  <span style="margin-bottom: 20px; background-color: #86e2d5; margin-top: 30px;"  class="badge badge-success">stress</span>
    
                  <span class="badge badge-success"></span>
                  <hr>
                  <p>share this page :</p>
                  <ul>
                    <li style="margin-right: 20px;"><img src="../One-Page-Artical/Artical-Images/facebook.png" alt=""> </li>
                    <li style="margin-right: 20px;"><img src="../One-Page-Artical/Artical-Images/instagram.png" alt=""> </li>
                    <li style="margin-right: 20px;"><img src="../One-Page-Artical/Artical-Images/twitter.png" alt=""> </li>
                    </ul>
             </footer>
             <br>
             <hr>
             
      
                </article>
           <div class="col-md-4 box" > 
    
    
           </div>   
          
    </div>
    
    <div style=" margin-top: 70px;" class="col-md-3 ml-auto">
      <div class="mb-5">
          <h3 class="h5 text-black mb-3 sub_article">Articals about children</h3>
          <ul class="list-unstyled">
              <li class="mb-2"><a href="‏‏Artical2.html">bla bla bla bla bla</a></li>
              <li class="mb-2"><a href="‏‏Artical3.html">Another trend article</a></li>
              <li class="mb-2"><a href="‏‏Artical4.html">NEW cool article</a></li>
          </ul>
      </div>
    
      <div class="mb-5">
          <h3 class="h5 text-black mb-3 sub_article">Articals about pirsonalities</h3>
          <ul class="list-unstyled">
              <li class="mb-2"><a href="‏‏Artical5.html">bla bla bla bla bla</a></li>
              <li class="mb-2"><a href="‏‏Artical6.html">Another trend article</a></li>
              <li class="mb-2"><a href="‏‏Artical7.html">NEW cool article</a></li>
          </ul>
      </div> 
      <div class="mb-5">
              <h3 class="h5 text-black mb-3 sub_article">Articals about teens</h3>
              <ul class="list-unstyled">
                  <li class="mb-2"><a href="‏‏Artical8.html">bla bla bla bla bla</a></li>
                  <li class="mb-2"><a href="‏‏Artical9.html">Another trend article</a></li>
              </ul>
          </div>
    
          
       </div>
    
     </div>       
    
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

          <center><p>Copyright &copy;  health care. <br> 2019 Design by <a style="color: #86e2d5;" href="team" rel="nofollow">OUR TEAM</a></p></center>        
       </div>
<!--END OF FOOTER-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>