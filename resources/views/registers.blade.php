<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <title>VEX | Sign Up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Fonts -->
        <!-- Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
        
        <!-- CSS -->

        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/themefisher-fonts.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">
        <script type="script.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

          
        <link rel="stylesheet" href="css/style1.css">

    </head>
<body>

    	<div id="preloader-wrapper">
    		<div class="pre-loader"></div>
    	</div>

	    <!-- 
	    Header start
	    ==================== -->
        <div class="container">
            <nav class="navbar navigation " id="top-nav">
                <a class="navbar-brand logo" href="{{ route('index.index')}}">
                    <h1>Vex</h1>
                </a>

              <button class="navbar-toggler hidden-lg-up float-lg-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
                  <i class="tf-ion-android-menu"></i>
              </button>
              <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <ul class="nav navbar-nav menu float-lg-right" id="top-nav">
                  <li class=" active">
                    <a href="{{ route('index.index')}}">HOME</a>
                  </li>
                  <li class="">
                    <a href="{{ route('collection.collection')}}">ABOUT</a>
                  </li>
                  <li class="">
                    <a href="{{ route('support.support')}}">SUPPORT</a>
                  </li>
                  <li class="">
                    <a href="{{ route('contact.contact')}}">CONTACT</a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>

        <div class="form">
              
              <ul class="tab-group">
                <li class="tab active"><a href="#signup">Sing Up</a></li>
                <li class="tab active"></li>
              </ul>
              
              <div class="tab-content">
                <div id="signup">   
                  <h1>Sign Up for Free</h1>
                  
                  <form action="/registers" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="top-row">
                    <div class="field-wrap">
                      <label>
                        First Name<span class="req">*</span>
                      </label>
                      <input type="text" name="firstName" id="firstName" required autocomplete="off" />
                    </div>
                
                    <div class="field-wrap">
                      <label>
                        Last Name<span class="req">*</span>
                      </label>
                      <input type="text"required name="lastName" id="lastName" autocomplete="off"/>
                    </div>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required name="email" id="email" autocomplete="off"/>
                  </div>
                  
                  <div class="field-wrap">
                    <label>
                      Set A Password<span class="req">*</span>
                    </label>
                    <input type="password"required name="password" id="password" autocomplete="off"/>
                  </div>
                  
                  <button type="submit" class="button button-block"/>Get Started</button>
                  
                  </form>

                </div>
                
                <div id="login">   
                  <h1>Welcome Back!</h1>
                  
                  <form action="/" method="post">
                  
                    <div class="field-wrap">
                    <label>
                      Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                  </div>
                  
                  <div class="field-wrap">
                    <label>
                      Password<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                  </div>
                  
                  <p class="forgot"><a href="#">Forgot Password?</a></p>
                  
                  <button class="button button-block"/>Log In</button>
                  
                  </form>

                </div>
                
              </div><!-- tab-content -->
              
        </div> <!-- /form -->
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            <script  src="js/index.js"></script>




        <footer>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <a href="" class="footer-logo">Vex</a>
                            <ul class="menu">
                                <li class=" active">
                                    <a href="#">HOME</a>
                                </li>
                                <li class="">
                                    <a href="#about">ABOUT</a>
                                </li>
                                <li class="">
                                    <a href="#service">SERVICES</a>
                                </li>
                                <li class="">
                                    <a href="#contact">CONTACT</a>
                                </li>
                            </ul>
                            <p class="copyright-text">Copyright &copy; <a href="https://www.facebook.com/phattaraphon.oat">OAT</a> <a href="https://www.facebook.com/tivaicewong">ICE</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="js/vendor/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>

</body>
</html>