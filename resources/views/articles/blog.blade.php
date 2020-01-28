@extends('layouts.app_renamed')
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
        <link rel="stylesheet" href="{{asset('fonts/artifcles/material-icon/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/articles/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/articles/icomoon/style.css')}}">
  </head>

  <body>
    @section ('content')                           
    <!-- Article blocks-->
    <!-- Slide pics block -->
        <div class="site-section">
          <div class="row ">
            <div id="carouselExampleCaptions" class="carousel slide col-12 " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                  <a href="{{route('article.show',['a_id'=> $articles[2]->id])}}">                            
                    <img src="{{asset( $articles[2]->image_link)}}"  class="d-block" alt="Article image !" width="100%" height="400px">
                    <div class="carousel-caption d-none d-md-block">
                      <strong><h3>{{ $articles[2]->title }}</h3></strong>
                      <p>{{$articles[2]->slogan}}</p> <!-- Article slogan !-->
                    </div> 
                  </a>
                </div> 
                <div class="carousel-item active">
                  <a href="{{route('article.show',['a_id'=> $articles[1]->id])}}">                            
                    <img src="{{asset( $articles[1]->image_link)}}"  class="d-block" alt="Article image !" width="100%" height="400px">
                    <div class="carousel-caption d-none d-md-block">
                      <strong><h3>{{ $articles[1]->title }}</h3></strong>
                      <p>{{$articles[1]->slogan}}</p> <!-- Article slogan !-->
                    </div> 
                  </a>
                </div>
                <div class="carousel-item active">
                  <a href="{{route('article.show',['a_id'=> $articles[0]->id])}}">                            
                    <img src="{{asset( $articles[0]->image_link)}}"  class="d-block" alt="Article image !" width="100%" height="400px">
                    <div class="carousel-caption d-none d-md-block">
                      <strong><h3>{{ $articles[0]->title }}</h3></strong>
                      <p>{{$articles[0]->slogan}}</p> <!-- Article slogan !-->
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
    <!-- Articles -->
    <div>
      <h1 class="blog_header">Our Blog Articles : </h1><hr>
      <div class="container row">
        <div class="btn mx-auto">
          <a href="{{url('articles/create-article')}}">New Article</a> 
        </div>
      </div> 
    </div>
    <hr>

      <div class="container">
        @foreach($articles as $article)
        <div class="row">
      <!--THE COL 1-->
            <div class="col-md-3 profile box" >
              <aside>
                <a href="{{route('article.show',['a_id'=> $article-> id])}}" >
                  <img src="{{asset($article->image_link)}}" width="200px" alt="Article image!" class="img" title="{{$article->slogan}}"> <br>
                </a>
                <span class="editor_label">By: {{$article->editor_name}}</span>
              </aside>
            </div>
      <!--THE COL 2-->
            <div class="col-md-9 box" >    
              <article>
                <header>
                  <a href="{{route('article.show',['a_id'=> $article->id])}}">
                    <h2>{{$article->title}}</h2>
                  </a>
                </header>
                <footer>
                  {{$article->updated_at}} |
                    <a href= "{{url('articles/article/edit/'. $article-> id)}}" class="btn text-black"> Edit</a> | 
                    <a href= "{{route('article.destroy',[ 'a_id' =>$article->id])}}" class="btn text-black" >delete</a>
                <div class="lead">{{$article->slogan}}</div>
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
      @endsection
    </body>
</html>