
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pragyan InHoTT</title>		
		<!-- Meta Description -->
        <meta name="description" content="Pragyan 2018">
        <meta name="keywords" content="Pragyan, Delta Delta Force">
        <meta name="author" content="Delta Force">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'> -->
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/slit-slider.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

		<!-- Modernizer Script for old Browsers -->
        <script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
		<script>var base_url = "{{ url('/') }}";</script>
    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand" style="padding: 0;">
				<a href="{{url('/')}}"><img src="{{asset('img/pragyan20_white.png')}}" style="width:150px;"></a>
				</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body"><?php echo Session::get('user_name') ?></a></li>
                        <li><a href="{{ url('/logout')}}">Logout</a></li>
      <!--                   <li><a href="#portfolio">portfolio</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                        <li><a href="#price">price</a></li>
                        <li><a href="#contact">Contact</a></li> -->
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
			
			<!-- Contact section -->
			<section id="about" >
				<br>
				<div class="container">
					<div class="row">
						
						<div class="text-center wow animated fadeInDown">
							<!-- <br> -->
							<h2>REGISTER</h2>
					
						</div>
						
						<div class="col-md-6 col-md-offset-3 contact-form wow animated fadeInLeft">
							<form action="{{ url('/registered') }}" method="post">
								<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
								
								<label for="name">Name</label>
								<div class="input-field" id="name">
									<input type="text" name="name" class="form-control" placeholder="Your Name..." required>
								</div>

								<label for="name">Mobile Number</label>
								<div class="input-field" id="mobile">

									<input type="text" name="mobile" class="form-control" pattern="[56789][0-9]{9}" placeholder="Your Phone Number..." required>
								</div>


								<div class="form-group">
								<label for="hostel">Select Hostel</label>
									<select name="hostel" id="hostel" class="form-control" required>
										<option name="Agate">Agate</option>
										<option name="GarnetA">Garnet A</option>
										<option name="GarnetB">Garnet B</option>
										<option name="GarnetC">Garnet C</option>
										<option name="Opal">Opal</option>
									</select>
								</div>
								<div class="form-group">
									<label for="event">Choose events</label>
								</div>
								<div id="event" name="event">
										<div class="checkbox">
										<label>
										<input type="checkbox" name="electrolution" value="electrolution" >Electrolution<br>
										</label>
										</div>

										<div class="checkbox">
										<label><input type="checkbox" name="icudk" value="icudk" >In Case you didn't know!</label>
										</div>


										<div class="checkbox">
										<label>
										<input type="checkbox" name="backstabber" value="backstabber">BackStabber<br>
										</label>
										</div>

										<div class="checkbox">
										<label>
										<input type="checkbox" name="reversecoding" value="reversecoding">Reverse Coding
										</label>
										</div>
										
										<div class="checkbox">
										<label>
										<input type="checkbox" name="fundamental" value="fundamental">Fundamental<br>
										</label>
										</div>
										
										<div class="checkbox">
										<label>
										<input type="checkbox" name="dribbletrouble" value="dribbletrouble" >Dribble Trouble<br>
										</label>
										</div>
										
									</div>
						       	<center>
						       	<button type="submit" id="submit" style="font-size:1.5em"class="btn btn-blue btn-effect">Register</button>
						       	</center>
							</form>
							@if (Session::has('message'))
							<div class="alert alert-info">
								<ul>
										<li>{{ Session::get('message') }}</li>
								</ul>
							</div>
							@endif
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>Let's Celebrate Technology</p>
						</div>
					<!-- 	<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane fa-lg"></i>
								</button>
							</div>
						</form> -->
						<div class="footer-social">
							<ul>
<!-- 								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
 -->							</ul>
						</div>
						
						<p>Made with &hearts; by <a href="http://delta.nitt.edu">Delta Force</a> </p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
		<!-- Twitter Bootstrap -->
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<!-- Single Page Nav 
        <script src="{{ asset('/js/jquery.singlePageNav.min.js') }}"></script>
		-->
		<!-- jquery.fancybox.pack -->
        <script src="{{ asset('/js/jquery.fancybox.pack.js') }}"></script>
		<!-- Owl Carousel -->
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <!-- jquery easing -->
        <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
        <!-- Fullscreen slider -->
        <script src="{{ asset('/js/jquery.slitslider.js') }}"></script>
        <script src="{{ asset('/js/jquery.ba-cond.min.js') }}"></script>
		<!-- onscroll animation -->
        <script src="{{ asset('/js/wow.min.js') }}"></script>
		<!-- Custom Functions -->
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>
