<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Profile &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
<meta name="author" content="freehtml5.co" />

<!-- 
//////////////////////////////////////////////////////

FREE HTML5 TEMPLATE 
DESIGNED & DEVELOPED by FreeHTML5.co
		
Website: 		http://freehtml5.co/
Email: 			info@freehtml5.co
Twitter: 		http://twitter.com/fh5co
Facebook: 		https://www.facebook.com/fh5co

//////////////////////////////////////////////////////
 -->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Theme style  -->
<link rel="stylesheet" href="css/style.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<div class="profile-thumb" style="background: url(images/user-3.jpg);"></div>
						<h1><span>Selamat Datang</span></h1>
                        <p>
                        @if (Route::has('login'))
                            <div class="mt-4">
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary ml-4">Login</a>

                                    @if (Route::has('register'))
							            <a href="{{ route('register') }}" class="btn btn-primary ml-4">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Easy PieChart -->
<script src="js/jquery.easypiechart.min.js"></script>
<!-- Google Map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script> -->
<script src="js/google_map.js"></script>

<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>
