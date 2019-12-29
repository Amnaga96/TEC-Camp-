<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Our Blog</title>        
      <!-- Stylesheet -->     
         <link rel="stylesheet" href="{{asset('css/articles/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/mediaelementplayer.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/fl-bigmug-line.css')}}">
        <link rel="stylesheet" type="{{asset('css/articles/text/css" href="css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles.css')}}">
      <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/articles/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/bootstrap-datepicker.css')}}">
        <script type="text/javascript" src="{{asset('js/articles/bootstrap.js')}}"></script>     
      <!-- Font Icon -->
        <link rel="stylesheet" href="{{asset('fonts/articles/material-icon/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/articles/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/articles/icomoon/style.css')}}">
  </head>

  <body>
                                 
    <!-- Article blocks-->
    <!-- Slide pics block -->
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
                              <a href="{{route('show',['a_id'=> $articles[0]->id])}}">
                                <img src="{{ $articles[0]->image_link }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <strong><h3>{{ $articles[0]->title }}</h3></strong>
                                  <p>We deserve a break!</p>
                                </div>                            
                              </a>
                            </div>
                            <div class="carousel-item"> 
                              <a href="{{route('show',['a_id'=> $articles[1]->id])}}">
                                <img src="{{ $articles[1]->image_link }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <strong><h3>{{ $articles[1]->title }}</h3></strong>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                              </a>
                            </div>
                            <div class="carousel-item">               
                              <a href="{{route('show',['a_id'=> $articles[0]->id])}}">
                                <img src="{{ $articles[0]->image_link }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <strong><h3>{{ $articles[0]->title }}</h3></strong>
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
     
    <!-- Articles -->
        <h1 class="blog_header">Our blog articles : </h1>
        <hr>
    <!--The 1st Row-->
      <div class="container">
       @foreach($articles as $article)
        <div class="row">
          <!--THE COL 1-->
            <div class="col-md-3 profile box" >
              <aside>
                <img src="{{asset($article->image_link)}}"  width="200px" alt="" class="img">
                  <span class="editor_label">Author: {{$article->editor_name}}</span>z
              </aside>
            </div>
          <!--THE COL 2-->
          <div class="col-md-8 box" >    
            <article>
              <header>
                <a href="{{route('show',['a_id'=> $article->id])}}"><h2>{{ $article->title }}</h2></a>
              </header>
              <footer><small>{{ $article->created_at }} br 
              <a href= "uri">
              </a>
              </small></footer>
              <div class="lead">{{$article->body }} </div>
                <br> <br> <hr>
            </article>          
          </div>
        </div>
       @endforeach
      </div>
    
        <!-- End of articles blockes -->
     

        <!-- JQuery, js, and Bootstrap Plugins -->
          <!-- Native javascript --> 
            <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script> 
            <script src="{{asset('js/articles/mediaelement-and-player.min.js')}}"></script>
            <script src="{{asset('js/articles/jquery-migrate-3.0.1.min.js')}}"></script>  
            <script src="{{asset('js/articles/circleaudioplayer.js')}}"></script>
            <script src="{{asset('js/articles/owl.carousel.min.js')}}"></script>
            <script src="{{asset('js/articles/popper.min.js')}}"></script> 
            <script src="{{asset('js/articles/main.js')}}"></script>
            <script src="{{asset('js/articles/aos.js')}}"></script>
          <!-- JQuery script -->   
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
            <script type="{{asset('text/javascript" src="articles/js/jquery.1.11.1.js')}}"></script> 
            <script src="{{asset('js/articles/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('js/articles/jquery.countdown.min.js')}}"></script>
            <script src="{{asset('js/articles/jquery.stellar.min.js')}}"></script>
            <script src="{{asset('js/articles/jquery-3.3.1.min.js')}}"></script>
            <script src="{{asset('js/articles/jquery-ui.js')}}"></script>
          <!-- Bootstrap script -->
            <script type="{{asset('text/javascript" src="articles/js/bootstrap.js')}}"></script> 
            <script src="{{asset('js/articles/bootstrap-datepicker.min.js')}}"></script>
            <script src="{{asset('js/articles/bootstrap.min.js')}}"></script>
    </body>
</html>