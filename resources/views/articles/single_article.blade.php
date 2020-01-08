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
  <!--the CONTAINER-->
  <div class="container">
    <!--the row container-->
    <div class="row">
      <div class="col-md-8" >

        <!--THE COL 1-->
           <div style="margin-bottom: 50px; margin-top: 50px;" class="col-md-3 profile box" >
            <aside>
              <img src="{{asset($article->image_link)}}"  width="300px" alt="{{$article->title }}" class="img">
              <h4 style="margin-top: 10px;" >Stress</h4>
              <p>Author: {{$article->editor_name }} </p>
              <hr>
            </aside>
          </div>
        
        <!--THE COL 2-->
        <div style=" margin-top: 70px;" class="col-md-3 ml-auto">
             <header>
               <h2 class="article-title">{{$article->title}}</h2>
             </header>
             <footer><small>{{$article->updated_at}}</small></footer>
             <br>
             <div class="lead">{{$article->body}}<hr></div>   
        </div>
      </div>
    </div>
  </div>


      <div class="mb-5">
          <h3 class="h5 text-black mb-3 sub_article"><strong>You may also like to see</strong></h3>
          <ul class="list-unstyled">
            @foreach ( $otherArticles as $article)
                <li class="mb-2"><a href="{{url("article/$article->id")}}">{{$article->title}}</a></li> 
                {{-- {{route('show',['a_id'=>$article->id])}} --}}
            @endforeach
          </ul>
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
            <script src="{{asset('js/articles/bootstrap.min.js')}}"></script>  </body>
</html>