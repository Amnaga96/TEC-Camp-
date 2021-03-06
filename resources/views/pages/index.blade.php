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
      <a  class="navbar-brand" href="{{ url('/') }}">utalk</a></div>

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

        @if (auth()->user()->user_type != 'admin')
        <li><a href="{{ url('questions') }}">Questions</a></li>
        @endif
             @if (auth()->user()->user_type == 'admin')
                    <li><a href="{{ url('/admin/home')}}">your profile</a></li>
                    <li><a href="{{ url('/create-article')}}">create articles</a></li>
                   @endif
        @endauth
        @guest
                  <li class="nav-item">
                      <a  class="page-scroll" href="{{  url('/login') }}">Log in</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="page-scroll" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
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
        <h6 style="font-size: 20.5px;">Welcome <strong>{{ auth()->user()->name }}</strong></h6>

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
        <h4><a style="font-size:32px; color:#86e2d5;" href="{{ url('/find') }}">find a therapist</a></h4>
        <p style="text-decoration: underline font-size:15px;"> Here in health care we can help you to find the avilible therapists in the country. </p>
      </div>
      <div class="col-md-6 col-sm-6 service">  <!--<i class="fa fa-gears"></i>-->
        <h4><a style="font-size:32px; color:#86e2d5;" href="{{ url('/ask') }}">get help</a></h4>
        <p style="font-size:15px;"> Ask a therapist for help. </p>
      </div>
     </div>
</div>
</div>

<!-- blog section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title">
      <a href="articles/blog/"><h2>Our<strong>Blog</strong></h2></a>
      <hr>
      <div class="clearfix"></div>
    </div>

      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Stress issues</h4>
                <a href="articles/article/3"><small>read more</small></a>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i>
               </div>
              <img src="{{asset('img/blog1.jpg')}}" width="600" height="400" class="img-responsive" alt="Stress issue"> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4>children</h4>
                <a href="articles/article/1"><small>read more</small></a>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="{{asset('img/blog4.jpg')}}" width="600" height="400" class="img-responsive" alt="Project Title"> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4>adults</h4>
                <a href="articles/article/2"><small>read more</small></a>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="{{asset('img/blog2.jpg')}}" width="600" height="400" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
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
            <h3>Amna</h3>
            <p>control</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/02.png') }}" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Heba</h3>
            <p>software engineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/03.png') }}" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Asma</h3>
            <p>software ngineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/04.png') }}" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Soha</h3>
            <p>Project manager</p>
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
            <p>We are very fortunate to have formed excellent partnerships with many of our clients. And we’ve formed more than just working relationships with them; we have formed true friendships. Here’s what they’re saying about us.</p>
            <p><strong>someone</strong>, CEO, Company.</p>
          </div>
          <div class="item">
            <p><strong>someone</strong>, CEO, Company.</p>
          </div>
          <div class="item">
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
        <div class="alert alert-warning">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
      <h3>Leave us a message</h3>
      {{--  contact form  --}}
       <form  action="{{ route('contactus') }}" method="post" name="sentMessage" id="contactForm" novalidate>
       @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
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
      <button onClick="sayDone()" type="submit" value="Send"class="btn btn-default">Send Message</button>
      </form>
      {{--  end of contact form  --}}
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
    <center><p>Copyright &copy; 2019 health care. Design by <a href="#team-section" rel="nofollow">team</a></p></center>
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
