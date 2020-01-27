<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/articles/Form CSS/style.css')}}">
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
        <title> Editing article</title>
    </head>
    <body>
        <section>
            <div class="container article_content">
                <form action="{{url('article/'.$article-> id)}}" method="POST" class="article-form" enctype="multipart/form-data" >
                    @csrf
                    @method('PATCH') 
                    <div class="row"> 
                        <h2 class="form-title"> Edit this article : </h2>
                    </div>
                    <div class="form-group row">
                        <h4>Title:</h4>
                        <input type="text " name="title" class="form-control col-6" style="border: 1px solid" id="a_title" value="{{$article-> title}}">
                    </div>
                    <div class="form-group row">
                        <h4>Article body:</h4>
                        <textarea type="text" name="body" id="a_body" class="form-control col-6" rows="5" style="border: 1px solid">{{$article-> body}}</textarea>
                    </div>
                    <div class="form-group row">
                        <h4>Slogan:</h4>
                        <input type="text " name="slogan" class="form-control col-6" style="border: 1px solid" id="a_slogan" value="{{$article-> slogan}}">
                    </div>
                    <div class="form-group row">
                        <h4>Article image:</h4>
                            <center>
                                @if ($article->image_link)
                                    <img src="{{ asset($article-> image_link) }}" alt="Article Image!" class="article-form-image m-b-5" style="border: 1px solid" width="350">
                                    <br><br>
                                @endif
                            </center>
                        <input type="file" name="image_link" class="form-control col-6 m-5" style="border: 1px solid">
                    </div>
                    <div class=" form-group row">
                        <h4 class=>Editor name :</h4> 
                        <input  type="string" name="editor_name" class="form-control col-6 " style="border: 1px solid" id="editor_info" value="{{$article-> editor_name}}" >
                    </div>
                    <div class="form-group form-button row">
                        <input type="submit" name="a_button" id="a_button" class="form-submit" value="Save edits !"/>
                    </div>
                    </div>
                </form>
            </div>
        </section>
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