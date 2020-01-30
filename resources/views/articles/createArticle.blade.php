{{-- @extends('layouts.app_renamed') --}}
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
                <link rel="stylesheet" href="{{asset('css/articles/Form CSS/style.css')}}">

      <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/articles/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/articles/bootstrap-datepicker.css')}}">
        <script type="text/javascript" src="{{asset('js/articles/bootstrap.js')}}"></script>     
      <!-- Font Icon -->
        <link rel="stylesheet" href="{{asset('fonts/artifcles/material-icon/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/articles/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/articles/icomoon/style.css')}}">
        <title>Write new article</title>
    </head>
    <body> 
       {{-- @section ('content')  --}}
       <div class="container"> 
       <div class="site-section">                         
        <section class="create-article-form">
            <div class="container article_content m-5 ">
                <form action="" method="POST" class="article-form row " enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <h2 class="form-title col-6 mx-auto"><strong> Write an article</strong></h2> 
                    </div>
                    <div class="form-group row">
                        <label for="a_title "><i class=" zmdi zmdi-format-subject col-2"></i></label> <br>
                        <input type="text " name="title" class="form-control col-5" style="border: 1px solid" placeholder="Article title" id="a_title ">
                    </div>
                    <div class="form-group row">
                        <label for="a_body"><i class="zmdi zmdi-collection-text col-1"></i></label> <br>
                        <textarea type="text" name="body" id="a_body" class="form-control col-5" rows="5" style="border: 1px solid " placeholder="Article text"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="a_slogan "><i class=" zmdi zmdi-format-subject col-2"></i></label> <br>
                        <input type="text " name="slogan" class="form-control col-5" style="border: 1px solid" placeholder="Article slogan" id="a_slogan ">
                    </div>
                    <div class="form-group row">
                        <label for="article_image"><i class="zmdi zmdi-collection-image"></i></label> <br>
                        <input type="file" name="image_link" class="form-control col-5" placeholder="upload image" >
                    </div>
                    <div class=" form-group row">
                        <label for="editor_info "><i class="zmdi zmdi-edit material-icons-name"></i></label> <br> 
                        <input  type="string" name="editor_name" class="form-control col-5 " style="border: 1px solid"placeholder="Editor Name" id="editor_info" >
                    </div>
                    <div class="form-group form-button row">
                        <input type="submit" name="a_button" id="a_button" class="form-submit mx-auto" value="Save it !"/>
                    </div>
                </form> 
            </div>
        </section>
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
      {{-- @endsection --}}
    </body>
</html>