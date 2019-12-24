<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Our Blog</title>        
      <!-- Stylesheet -->     
         <link rel="stylesheet" href="{{asset('css/articles/style.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/style.css.map')}}"> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/blog_style.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/mediaelementplayer.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/fl-bigmug-line.css')}}">
        <link rel="stylesheet" type="{{asset('css/text/css" href="css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles.css')}}">
      <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>     
      <!-- Font Icon -->
        <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
  </head>

  <body>

    <!-- Navigation bar -->
      <div class="container">
        <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-light ">
          <a class="navbar-brand" href="#"><strong>Mental Health Care</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" >
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ourblog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Testimonial</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
                                 
    <!-- Article blocks-->
    <!-- Slide pics block -->
      <div class="container">
        <div class="site-section">
          <div class="container">
              <div class="row">
                  <div id="carouselExampleCaptions" class="carousel slide col-12 " data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">                           
                              <a href="..\single_article.blade.php">
                                <img src="images/img-9.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <strong><h3>{International Mental Health Day}</h3></strong>
                                  <p>We deserve a break!</p>
                                </div>                            
                              </a>
                            </div>
                            <div class="carousel-item"> 
                              <a href="..\single_article.blade.php">
                                <img src="images/img4.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <strong><h3>Stress Dominates the List of the Most Common Psychiatric Issues</h3></strong>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                              </a>
                            </div>
                            <div class="carousel-item">               
                              <a href="single.html">
                                <img src="images/img_6.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <strong><h3>Mental Health Issues Among Entrepreneurs</h3></strong>
                                  <p>Taking a Look at Fact.</p>
                                </div>
                              </a>
                            </div>
                          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a id="slide" class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                          </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    <!-- Articles -->
        <h1 class="blog_header">Mental ealth articles : </h1>
        <hr>
    <!--The 1st Row-->
      <div class="container">
       @foreach($articles as $article)
        <div class="row">
          <!--THE COL 1-->
            <div class="col-md-3 profile box" >
              <aside>
                <img src="images/hero_bg_3.jpg"  width="300px" alt="" class="img-circle">
                  <span class="editor_label">{{$article->editor_name}}</span>

                <hr>
                <div class="social-login">
                  <span class="social-label">Share with</span>
                  <ul class="socials">
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                  </ul>
                </div>
              </aside>
            </div>
          <!--THE COL 2-->
          <div class="col-md-8 box" >    
                      <article>
              <header>
                <a href="{{route('show',['a_id'=> $article->id])}}"><h2>{{ $article->title }}</h2></a>
              </header>
              <footer><small>{{ $article->created_at }}</small></footer>
              <div class="lead">{{$article->body }}
              </div>
              <footer>
                <span class="badge badge-success">psychology</span>
                <span class="badge badge-success">stress</span>
                <span class="badge badge-success">Sefl_development</span>
                <span class="badge badge-success"></span>
              </footer>
                <br><br>
                <hr>
            </article>          
          </div>
        </div>
       @endforeach
      </div>
    
        <!-- End of articles blockes -->
        
        <!--footer-->
        <div class="footer">
            <p>Copyright &copy; 2019 health care. Design by <a href="team" rel="nofollow">team</a></p>
          </div>

        <!-- JQuery, js, and Bootstrap Plugins -->
          <!-- Native javascript --> 
            <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script> 
            <script src="{{asset('articles/js/mediaelement-and-player.min.js')}}"></script>
            <script src="{{asset('articles/js/jquery-migrate-3.0.1.min.js')}}"></script>  
            <script src="{{asset('articles/js/circleaudioplayer.js')}}"></script>
            <script src="{{asset('articles/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('articles/js/popper.min.js')}}"></script> 
            <script src="{{asset('js/main.js')}}"></script>
            <script src="{{asset('articles/js/aos.js')}}"></script>
          <!-- JQuery script -->   
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
            <script type="{{asset('text/javascript" src="articles/js/jquery.1.11.1.js')}}"></script> 
            <script src="{{asset('articles/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('articles/js/jquery.countdown.min.js')}}"></script>
            <script src="{{asset('articles/js/jquery.stellar.min.js')}}"></script>
            <script src="{{asset('articles/js/jquery-3.3.1.min.js')}}"></script>
            <script src="{{asset('articles/js/jquery-ui.js')}}"></script>
          <!-- Bootstrap script -->
            <script type="{{asset('text/javascript" src="articles/js/bootstrap.js')}}"></script> 
            <script src="{{asset('articles/js/bootstrap-datepicker.min.js')}}"></script>
            <script src="{{asset('articles/js/bootstrap.min.js')}}"></script>
    </body>
</html>