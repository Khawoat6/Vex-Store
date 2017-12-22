<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <title>VEX | Order</title>
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
                    <a href="{{ route('collection.collection')}}">COLLECTION</a>
                  </li>
                  <li class="">
                    <a href="{{ route('support.support')}}">SUPPORT</a>
                  </li>
                  <li class="">
                    <a href="{{ route('contact.contact')}}">CONTACT</a>
                  </li>
                  <li>
                      
                    <div class="login" align="right">
            @if (Auth::guest())
            <a href="{{ url('login')}}">
                <button style="background-color: #4def4d;border-color: white;border-style: solid;border-radius: 5px"><span class="fa fa-fw fa-sign-in"></span>Sign In</button>
            </a>
            @else
            
            @if(Auth::user()->status == 1)
                <a href="/admin/dashboard" style="color: black">
                        <button style="background-color: #89bbf7;border-color: blue;border-style: solid;border-radius: 5px"><span class="fa fa-fw fa-user-secret"></span>Admin System</button>
                </a>
                <a style="color: black" type = "button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                           <button style="background-color: #fd8d31;border-color: #fd8d31;border-style: solid;border-radius: 5px"><span class="fa fa-fw fa-sign-out"></span>Logout</button>
                                                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                @else
                <button style="color: white;background-color: #c71345;border-color: #c71345;border-style: solid;border-radius: 5px" disabled>Welcome {{ Auth::user()->firstName }}</button>
                       <!--  <a href="#">
                        <button style="background-color: white;border-color: white;border-radius: 5px;border-style: solid;"><span class="fa fa-fw fa-key"></span>Change Password</button></a> -->
                    <a href="/orderStatus">
                        <button style="background-color: white;border-color: white;border-radius: 5px;border-style: solid;"><span class="fa fa-fw fa-key"></span>My Order<span class="badge" style="background-color: red"></span></button></a>
                        
                    <a type = "button" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                <button style="background-color: white;border-color: white;border-radius: 5px;border-style: solid;"><span class="fa fa-fw fa-sign-out"></span>Logout</button>
                                                </a>
                                                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                @endif
            @endif

        </div>

                  </li>
                </ul>
              </div>
            </nav>
        </div>

        <div class="form">
              
              <ul class="tab-group" >
                <li class="tab active" ><a href="#signup" style="background-color: #fa4b1a">ORDER</a></li>
                <li class="tab active"></li>
              </ul>
              
              <div class="tab-content">
                <div id="signup">   
                  <h1><b>Product Detail</b></h1>
                  
                  <form action="/order" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="top-row">
                     <div class="field-wrap">
                    <h4 style="color: white">Product Name</h4>
                    <input type="text" class="form-control" name="name" id="name" value="Vex Watch" autocomplete="off"/>
                  </div>
                     <div class="field-wrap">
                    <h4 style="color: white">Product Code</h4>
                     <input type="text" class="form-control" name="Code" id="Code" value="xxxx" />
                    </div>

                    <div class="field-wrap">
                       <h4 style="color: white">Price</h4>
                  
                      <input type="text" class="form-control" name="price" id="price" value="14900" />

                    </div>
                
                   


                  </div>
                  <h1><b>Customer</b></h1>
                 <div class="field-wrap">
                    <h4 style="color: white">First Name</h4>
                     <input type="text" class="form-control" name="firstName" id="firstName" 
                     value="{{ Auth::user()->firstName }}" required="" />
                    </div>

                    <div class="field-wrap">
                       <h4 style="color: white">Last Name</h4>
                  
                      <input type="text" class="form-control" name="lastName" id="lastName" 
                      value="{{ Auth::user()->lastName }}" required="" />

                    </div>
                    <div class="field-wrap">
                       <h4 style="color: white">Address</h4>
                  
                      <input type="text" class="form-control"  name="address" id="address"  required="" />

                    </div>
                    <div class="field-wrap">
                       <h4 style="color: white">E-mail</h4>
                  
                      <input type="email" class="form-control" name="email" id="email"  required="" />

                    </div>
                    <div class="field-wrap">
                       <h4 style="color: white">phone</h4>
                  
                      <input type="text" class="form-control" maxlength="10" name="phone" id="phone"  required="" />

                    </div>

                      <button class="button button-block" style="background-color: #fa4b1a" />CONFIRM</button>

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