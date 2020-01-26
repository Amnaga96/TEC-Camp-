@extends('layouts.app_renamed')
<html>
  <head>
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
  <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/articles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/articles/bootstrap-datepicker.css')}}">
    <script type="text/javascript" src="{{asset('js/articles/bootstrap.js')}}"></script>     
  <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/articles/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/articles/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/articles/icomoon/style.css')}}">

    <title>{{$article-> title}}</title>
  </head>
  <body>
  @section ('content')
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 article-block" >
            <figure>
              <img src="{{asset($article->image_link)}}" alt="{{$article->title }}" class="img-fluid  article-image">
            </figure>
              <h2 class="article-title"><strong>{{$article->title}}</strong></h2> <br>
            <footer>
              <small>
                By: {{$article-> editor_name }}
                | {{$article-> updated_at}} |
                <a href= "{{url('article/edit/'. $article-> id)}}" class="btn text-black"> Edit</a> | 
                <a href= "{{url('article/'. $article)}}" class="btn text-black">Delete</a> 
                {{-- <form action="{{url('article/'.$article)}}" method="post" style="display;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-group-sm">
                </form> --}} 
              </small>
            </footer>
            <br>
            <p>{{$article->body}}<hr></p>   
        </div>

        <div class=" col-4 mb-5 ml-auto">
          <div class="mb-5">    
            <h3 class="h5 text-black mb-3 sub_article"><strong>More articles </strong></h3>
            <ul class="list-unstyled">
              @foreach ( $otherArticles as $article)
                    <li class=" row mb-2">
                        <a href="{{route('show',['a_id'=>$article->id])}}">{{$article->title}}</a>
                    </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
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