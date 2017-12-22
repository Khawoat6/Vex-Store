<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <title>VEX | Support</title>
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
        

        <link rel="stylesheet" href="css/themefisher-fonts.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/style_support.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">

       
    </head>

	
	<body>

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
 

            <section id="feature" class="padding-top-bottom-120 bg-image-fit-50" style="background:url(images/1_back.png)" width="50%" >
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="feature-wiget">
                      <div class="icon-wraper">
                        <i class="ion-settings"></i>
                      </div>
                      <div class="content">
                        <h4 class="bottom-line">Capture every moment</h4>
                        <p>From simple selfies to extraordinary landscapes, you can capture every memory. Then make it perfect.</p>
                      </div>
                    </div>
                    <div class="feature-wiget">
                      <div class="icon-wraper">
                        <i class="ion-calendar"></i>
                      </div>
                      <div class="content">
                        <h4 class="bottom-line">Get the most out of your new Watch</h4>
                        <p>Discover all the features of your new Vex Watch that let you do more than ever.</p>
                      </div>
                    </div>
                    <div class="feature-wiget">
                      <div class="icon-wraper">
                        <i class="ion-ipad"></i>
                      </div>
                      <div class="content">
                        <h4 class="bottom-line">Let’s get that fixed</h4>
                        <p>If your Vex device needs repairs, you can go to an Vex Store, visit an Authorized Service Provider, or mail in your device. Whatever you choose, we’ll make sure your device works the way it should.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="services" class="padding-top-90">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <img class="img-responsive sm-display-none" src="https://media2.giphy.com/media/Ww6QvJAyoeGBi/giphy.gif" width="100%" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="heading-wraper text-center margin-bottom-80">
                          <h2>Watch And learn</h2>
                          <hr class="heading-devider gradient-orange">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <h5 class="service-title"><b>Learn something new every day with @VexSupport</b></h5>
                        <p class="services-content margin-bottom-25">We're here to help you get the most from your Vex product. Tweet us your question to get support or follow us for helpful tips and videos.</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <h5 class="service-title"><b>Have a question? Ask everyone.</b></h5><br>
                        <p class="services-content margin-bottom-25">The members of our Vex Support Community can help answer your question. Or, if someone’s already asked, you can search for the best answer.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <h5 class="service-title"><b>Join us for Today at Vex sessions.</b></h5>
                        <p class="services-content margin-bottom-25">Explore how to capture photos Learn to sketch  And do more of what you love every day at Vex.</p>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <h5 class="service-title"><b>Want to talk with someone?</b></h5>
                        <p class="services-content margin-bottom-25">Get help by phone, chat, or email, set up a repair, or make a Genius Bar reservation.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>


		
		    <hr aria-hidden="true" >
		
			
			<div class="column3_div"></div>
			<div>
				<h2 align="center"><b>Beware of counterfeit parts</b></h2><br>
				<p align="center">Some counterfeit and thir d party power adapters and batteries may not be designed properly
				and could result <br>in safety issues.To ensure you receive a genuine Vex battery during a battery replacement,
				we recommend visiting an Vex Store <br>or Vex Authorized Service Provider.If you need a replacement adapter to charge your Vex device,
				we recommend getting <br>an Vex power adapter.Also non-genuine replacement displays may have compromised visual quality
				<br>and may fail to work correctly. Vex-certified screen repairs are performed by trusted experts who use genuine Vex parts.</p>				
			</div><br><br><br>

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








	</body>
</html>