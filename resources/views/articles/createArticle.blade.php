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
    </head>
    <body>
        <section>
            <div class="container article_content">
                <h2 class="form-title">Writw an article</h2>
                <form action="create-article" method="POST" class="article-form" enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group">
                            <label for="a_title "><i class=" zmdi zmdi-format-subject"></i></label>
                            <input   type="text " name="title" class="form-control col-6" style="border: 1px solid"placeholder="Article title" id="a_title ">
                        </div>
                        <div class="form-group">
                            <label for="a_body"><i class="zmdi zmdi-collection-text"></i></label>
                            <textarea type="text" name="body" id="a_body" style="border: 1px solid " placeholder="Article text"></textarea>
                        </div>
                        <div>
                            <label class="form-group"><i class="zmdi zmdi-collection-image"></i></label>
                            <input type="file" name="image_link" class="form-control col-6" placeholder="upload image" >
                        </div>
                        <div class=" form-group">
                            <label for="editor_info "><i class="zmdi zmdi-edit material-icons-name"></i></label> 
                            <input  type="string" name="editor_name" class="form-control col-6 " style="border: 1px solid"placeholder="Editor Name" id="editor_info" >
                        </div>
                        <div class="form-group form-button">
                                <input type="submit" name="a_button" id="a_button" class="form-submit" value="Save it !"/>
                        </div>
                </form>
            </div>
        </section>
        <div id="footer" class="container">
            <p> Copyright © health care. <br> 2019 Design by <a style="color: #86e2d5;" href="#" rel="nofollow">OUR TEAM </a>
            </p>
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