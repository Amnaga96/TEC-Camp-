<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>you talk</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/homeStyle.css">
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>


</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
      data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="{{ url('/') }}">utalk</a></div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll">Home</a></li>
        <li><a href="#about-section" class="page-scroll">About</a></li>
        <li><a href="#services-section" class="page-scroll">Services</a></li>
        <li><a href="#works-section" class="page-scroll">Ourblog</a></li>
        <li><a href="#team-section" class="page-scroll">Team</a></li>
        <li><a href="#testimonials-section" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
        @auth
        <li><a href="{{ url('questions') }}">Questions</a></li>
        @endauth
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welcome to <span class="color">utalk</span></h1>
    <p> you talk we help ... we care about you </p>
    <div class="clearfix"></div>
    @guest
    <a href="{{  url('/login') }}" class="btn btn-default btn-lg page-scroll">log in</a>
    <a href="{{  url('/register') }}" class="btn btn-default btn-lg page-scroll">sign up</a> </div>
    @else
        Welcome <strong>{{ auth()->user()->name }}</strong>,

        <form action="{{ url('logout') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-link" value="Logout?">
        </form>
    @endguest
</header>

<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title">
      <h2><strong>About</strong> us</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-4"> <i class="fa fa-users"></i>
        <h4>Who We Are</h4>
        <p><br> we are surrounded in a world that has a lot of stress and problems  so,  a psychological therapist can help to tell us what to do and how we
           can go through psychological problems , and we are here to help you to connect with them .</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-check-square-o"></i>
        <h4>What We Do</h4>
        <p><br> we help our customers to get psychological help online and to find the available  therapists in the country.</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-send"></i>
        <h4>Why Choose Us</h4>
        <p><br> we provide you the best consulting experience , with complete privacy ,
          and we can make it easier for you to find psychology professionals in your country.</p>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services-section">
  <div class="container">
    <div class="section-title">
      <h2>Our <strong>Services</strong></h2>
      <hr>

      <div class="clearfix"></div>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-6 col-sm-6 service"> <!--<i class="fa fa-desktop"></i>-->
        <h4><a href="{{ url('/find') }}">find a thirapist</a></h4>
        <p> Here in health care we can help you to find the avilible therapists in the country. </p>
      </div>
      <div class="col-md-6 col-sm-6 service">  <!--<i class="fa fa-gears"></i>-->
        <h4><a href="{{ url('/ask') }}">git help</a></h4>
        <p> Ask a therapist for help. </p>
      </div>
     </div>
</div>
</div>

<!-- blog section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title">
      <a href="blog/blog.html"><h2>Our<strong>Blog</strong></h2></a>
      <hr>
      <div class="clearfix"></div>
    </div>
    {{--  <!-- <div class="categories"> -->
      <!-- <ul class="cat"> -->
        <!-- <li> -->
          <!-- <ol class="type"> -->
           <!-- <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">children</a></li>
            <li><a href="#" data-filter=".app">teens</a></li>
            <li><a href="#" data-filter=".branding">adults</a></li> -->
          <!-- </ol> -->
        <!-- </li> -->
      <!-- </ul> -->  --}}
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="blog/images/img-9.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Stress issues</h4>
                <a href="blog/One-Page-Artical/artical1.html"><small>read more</small></a>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i>
               </div>
              <img src="blog/images/img-9.jpg" class="img-responsive" alt="Stress issues"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="Blog/images/img_7.jpeg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>children</h4>
                <a href="blog/One-Page-Artical/artical1.html"><small>read more</small></a>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="Blog/images/img_7.jpeg" class="img-responsive" alt="Project Title"> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="Blog/images/img_1.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>adults</h4>
                <a href="blog/One-Page-Artical/artical1.html"><small>read more</small></a>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="Blog/images/img_1.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
       {{--  <!-- <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4></h4>
                <small></small>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4></h4>
                <small></small>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4></h4>
                <small></small>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4></h4>
                <small></small>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4></h4>
                <small></small>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/08.jpg" class="img-responsive" alt="Project Title"> </a> </div> -->  --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team-section">
  <div class="container">
    <div class="section-title">
      <h2>Meet the <strong>Team</strong></h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/01.png') }}" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>amna</h3>
            <p>control</p>
            <p>bla bla.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/02.png') }}" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>heba</h3>
            <p>software engineering</p>
            <p>bla bla.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/03.png') }}" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>asma</h3>
            <p>software ngineering</p>
            <p>bla bla</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/04.png') }}" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>soha</h3>
            <p>Project manager</p>
            <p>bla bla.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials-section">
  <div class="container">
    <div class="section-title">
      <h2>What our <strong>clients</strong> say</h2>
      <hr>
      <div class="clearfix"></div>
      <i class="fa fa-quote-left"></i> </div>
    <div class="row">
      <div class="col-md-8 ">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item">
            <p>bla bla.</p>
            <p><strong>someone</strong>, CEO, Company.</p>
          </div>
          <div class="item">
            <p>bla bla.</p>
            <p><strong>someone</strong>, CEO, Company.</p>
          </div>
          <div class="item">
            <p>bla bla.</p>
            <p><strong>someone</strong>, CEO, Company.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact-section">
  <div class="container">
    <div class="section-title center">
      <h2><strong>Contact</strong> us</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-4">
      <h3>Contact Info</h3>
      <div class="space"></div>
      <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>hai al andalus<br>
       tripoli, libya</p>
      <div class="space"></div>
      <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
      <div class="space"></div>
      <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+218 91 000000</p>
    </div>
    <div class="col-md-8">
      <h3>Leave us a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <!-- calculate text area -->
        <div class="form-group">
          <textarea name="message" id="message"
          class="form-control" rows="4"
          placeholder="Message" maxlength="300"
          required></textarea>
        <div class="message"></div>
          <p class="help-block text-danger"></p>
        </div>
      <div id="success"></div>
      <button onClick="sayDone()" type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>
<div id="social-section">
  <div class="container">
    <div class="social">
      <ul>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- scroll to top -->
<div id="scroll-up">
  <img id="sc" src="img/scrollup.png" alt="scroll up">
</div>
<!--footer-->
<div id="footer">
  <div class="container">
    <center><p>Copyright &copy; 2019 health care. Design by <a href="team" rel="nofollow">team</a></p></center>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
{{-- <script type="text/javascript" src="js/contact_me.js"></script> --}}
<script type="text/javascript" src="js/owl.carousel.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
<script src="js/homeScript.js" type="text/javascript" ></script>
</body>
</html>
