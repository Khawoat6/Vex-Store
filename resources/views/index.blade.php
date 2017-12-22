<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <title>VEX</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <!-- Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
        
        <!-- CSS -->
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/themefisher-fonts.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">

        <script type="text/script.js"></script>
    </head>

    <body id="body">

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
                  <li id="active">
                    <a href="{{ route('index.index')}}">HOME</a>
                  </li>
                  <li id="passive">
                    <a href="{{ route('collection.collection')}}">COLLECTION</a>
                  </li>
                  <li id="">
                    <a href="{{ route('support.support')}}">SUPPORT</a>
                  </li>
                  <li id="">
                    <a href="{{ route('contact.contact')}}">CONTACT</a>
                  </li>
                  <!-- <li id="">
                    <a href="{{ url('login')}}">LOGIN</a>
                  </li> -->
                  <li>
                      
                    <div class="login" align="right">
            @if (Auth::guest())
            <a href="{{ url('login')}}">
                <button style="background-color: #4def4d;border-color: white;border-style: solid;border-radius: 5px"><span class="fa fa-fw fa-sign-in"></span>Sing In</button>
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
       
	    <section class="hero-area">
	        <div class="container">
	            <div class="row">
                    <div class="col-md-6 text-center">

                        <img src="https://i.giphy.com/media/13ytCcQqWYexos/source.gif" width="500" alt="">
                    </div>
	                <div class="col-md-6">
	                    <div class="block">
	                        <h1 class="">The centerpiece of your corporate wellness program.</h1>
	                        <p>From practicing mindfulness to reaching fitness goals, wellness keeps employees healthy and energized. Vex Watch is designed to work seamlessly with your corporate wellness program so employees stay active, healthy, and productive.</p>

                            @if (Auth::guest())
                                <a href="/logins" class="btn btn-main"  role="button">
                                  Buy Now With 14900B
                                </a>
                            @else
	                        <a class="btn btn-main" href="/order" role="button">Buy Now With 14900B</a>
                            @endif
	                    </div>
	                </div>
	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->


        <!-- 
        Feature start
        ==================== -->
        <section class="feature section">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Our Core Features</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="tf-ion-ios-email-outline"></i>
                            <h4>Message</h4>
                            <p>Out and about without your phone You can still send texts or share your location.</p>
                        </div>
                        <div class="feature-box">
                            <i class="tf-ion-ios-navigate-outline"></i>
                            <h4>Location</h4>
                            <p>The right apps can play an active role in reminding you to keep up with healthy.</p>
                        </div>
                        <div class="feature-box">
                            <i class="tf-ion-ios-telephone-outline"></i>
                            <h4>Telephone</h4>
                            <p>Cellular connectivity means you can quickly call for help using SOS.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://venturebeat.com/wp-content/uploads/2015/08/1_Outlook_GIF.gif?resize=680%2C680&strip=all" width="110%"  alt="">
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="tf-ion-ios-alarm-outline"></i>
                            <h4>Alarm</h4>
                            <p>There are a wide variety of third party apps to help manage your unique health needs.</p>
                        </div>
                        <div class="feature-box">
                            <i class="tf-ion-ios-calendar-outline"></i>
                            <h4>Calendar</h4>
                            <p>Messages and Calendar allow for critical business communications</p>
                        </div>
                        <div class="feature-box">
                            <i class="tf-ion-ios-mic-outline"></i>
                            <h4>Microphone</h4>
                            <p>Plus there are hundreds more available in the Vex Store.</p>
                        </div>
                    </div>
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->

        <section class="promo-details section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="https://cdn.dribbble.com/users/581144/screenshots/3755449/gif-apple-watch.gif" width="500" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="content mt-100">
                            <h2 class="subheading">A new approach to wellness</h2>
                            <p>Wellness is so much more than counting steps. It’s about empowering your employees to manage their fitness, health, and productivity without ever slowing them down. Now with Vex Watch, employees can stay productive and also monitor the small things that lead to an active, healthier lifestyle — a whole new and comprehensive <br>take on wellness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="feature-list section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Why Choose Vex Watch</h2>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img class="" src="https://media.giphy.com/media/Iq0KjCOsiMVLq/giphy.gif" width="400" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="content mt-100">
                            <h4 class="subheading">A holistic approach to fitness and activity tracking.</h4>
                            <p>When employees stay active, they’re not just healthier, they’re more engaged and more productive. Vex Watch comes with the Activity app and Workout app built-in. The Activity app tracks daily activity<br> while the Workout app supports dedicated workouts. <br>Plus there are hundreds more available in the Vex Store.</p>
                           <!--  <a href="" class="btn btn-main btn-main-sm">Check Features</a> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="content mt-100">
                            <h4 class="subheading">Focus on your overall health.</h4>
                            <p>With innovative apps that help monitor nutrition and mindfulness, <br>Vex Watch helps you focus on overall health and not just activity. <br>The Breathe app helps you stay centered and practice daily mindfulness. There are also a wide variety of third party apps <br>to help manage your unique health needs.</p> <br>

                            <p>Innovative apps that help monitor nutrition and mindfulness, <br>Vex Watch helps you focus on overall health and not just activity.<br> The Breathe app helps you stay centered and practice daily mindfulness. There are also a wide variety of third party apps<br> to help manage your unique health needs.</p>
                            <!-- <a href="" class="btn btn-main btn-main-sm">Check Features</a> -->
                        </div>
                    </div>


                    <div class="col-md-6 text-center">
                        <img class="img-responsive" src="https://venturebeat.com/wp-content/uploads/2015/08/3_Yammer_GIF.gif?resize=600%2C770&strip=all" width="80%" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Other Product</h2>
                        </div>

                        <div class="gallery-slider">
                            @foreach($products as $product)
                            <div class="block">
                                <div class="gallery-overlay">
                                    <a  href="{{ '/photo/'.$product->ImageName }}" class="image-popup gallery-popup">
                                        <i class="tf-ion-ios-search"></i>

                                            
                                    </a>
                                  <!--   <a class="btn btn-main" href="#" role="button" style="background-color: #08082e"><i class="tf-ion-ios-eye"></i>View</i></a> -->

                                    
                                    <br><br><br><br><br><br>
                                     @if (Auth::guest())
                                <a href="/logins" class="btn btn-main"  role="button">Buy Now {{$product->productPrice}}B
                                </a>
                                @else
                                   <a class="btn btn-main" href="#" role="button" style="background-color: red">Buy Now {{$product->productPrice}}B</a>
                                   @endif
                                </div>
                                
                                <img class="img-fluid" src="{{ '/photo/'.$product->ImageName }}" width="168" alt="">


                            </div>
                            @endforeach
   
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="call-to-action section bg-opacity bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow text-center">
                        <div class="block">
                            <h2 class="subheading">Get Product Updates</h2>
                            <p></p>
                            <div class="col-lg-6 offset-lg-3">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Your Email Address Here">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default btn-main" type="button">Subscribe</button>
                                  </span>
                                </div><!-- /input-group -->
                              </div><!-- /.col-lg-6 -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #call-to-action close -->


        <section class="testimonials section">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Watch Review</h2>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="testimonial-block">
                            <i class="tf-ion-quote"></i>
                            <p>
                                The Vex Watch program is an interactive way <br>to encourage healthy, active behavior and <br>The technology in Vex Watch is really something of the future
                            </p>
                            <div class="author-details">
                                <img src="images/avater.png" alt="">
                                <h4>Catherine Crow</h4>
                                <span>CEO, DaVita HealthCare Partners</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="testimonial-block">
                            <i class="tf-ion-quote"></i>
                            <p>
                                Building a healthier world starts with our own employees. We are excited to offer Vex Watch to our employees to make it easy for them to manage their health.
                            </p>
                            <div class="author-details">
                                <img src="images/oat.png" alt="">
                                <h4>Oat Phattaraphon</h4>
                                <span>Fouder Artificial Intelligence 0.6, ASITE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="testimonial-block">
                            <i class="tf-ion-quote"></i>
                            <p>
                                Vex Watch has become an ideal device to drive our wellness priorities. The response from our employees has been great. The response from our employees has been great.
                            </p>
                            <div class="author-details">
                                <img src="images/tiva.png" alt="">
                                <h4>Ice Tiva</h4>
                                <span>Director, @5A Corporation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-100">
                    <div class="col-md-12 text-center">
                        <a href="" class="btn btn-main">Back Up</a>
                    </div>
                </div>
            </div>
        </section>



        <footer>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <a href="" class="footer-logo">Vex</a>
                            <ul class="menu">
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
                            </ul>
                            <p class="copyright-text">Copyright &copy; <a href="https://www.facebook.com/phattaraphon.oat">OAT</a> <a href="https://www.facebook.com/tivaicewong">ICE</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


       <style type="text/css">

    a:link {
    text-decoration: none;
    color: black;
    }
    a:visited {
    text-decoration: none;
    }
    </style>

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
