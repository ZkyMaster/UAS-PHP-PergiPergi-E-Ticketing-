<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PergiPergi.com Flights Booking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,900,700,600,500,300,200,100,800);

h2 {
    color: #4C4C4C;
    word-spacing: 5px;
    font-size: 30px;
    font-weight: 700;
    margin-bottom:30px;
    font-family: 'Raleway', sans-serif;
}

.ion-minus{
    padding:0px 10px;
}

.team{
	background-color:#f6f6f6;
	padding:60px 0px;
    font-family: 'Raleway', sans-serif;
}

.team h4 {
    margin-top: 20px;
    color: #5db4c0;
}

.team .fa{
    color: #5db4c0;
    font-size: 18px;
    margin-top: 10px;
    padding: 3px;
}
</style>
	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
								<div id="colorlib-logo"><a href="index.php">PergiPergi</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<?php
								include('indexmenu.php');
							?>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/disp_aboutus.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
										<h2>Meet</h2>
				   					<h1>The Founder of PergiPergi</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>


		<div class="team">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
							<br>
                <h2><span class="ion-minus"></span>Our Team<span class="ion-minus"></span></h2>
                <p>Our team members take great pride in being a part of the Pergi Pergi family, advancing our dedication to making people's holiday planning better. This is your chance to meet them </p><br>
            </div>
        </div>

    	<div class="row text-center">

    		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

    				   	<img class="img-rounded" alt="team-photo" src="/tour/images/535150045.jpg" width="50%">

    				   	<div class="team-member">

    				   	<h4>Yoferen</h4>

    				   	<p>Computer Science Student</p>
    				   	<p>Tarumanagara University, Jakarta</p>

    				   	</div>

    				   	<p class="social">
    				   		<a href="#"><span class="fa fa-facebook-square"></span></a>
    				   		<a href="#"><span class="fa fa-twitter-square"></span></a>
    				   		<a href="#"><span class="fa fa-linkedin-square"></span></a>
    				   		<a href="#"><span class="fa fa-google-plus-square"></span></a>
    				   	</p>

    		 </div> <!--col-lg-4 -->

    		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

    				   	<img class="img-rounded" alt="team-photo" src="/tour/images/535150019.jpg" width="50%">

    				   	<div class="team-member">

    				   	<h4>Zakhayu Rian</h4>

    				   	<p>Computer Science Student</p>
    				   	<p>Tarumanagara University, Jakarta</p>

    				   	</div>

    				   	<p class="social">
    				   		<a href="#"><span class="fa fa-facebook-square"></span></a>
    				   		<a href="#"><span class="fa fa-twitter-square"></span></a>
    				   		<a href="#"><span class="fa fa-linkedin-square"></span></a>
    				   		<a href="#"><span class="fa fa-google-plus-square"></span></a>
    				   	</p>

    		 </div> <!--col-lg-4 -->

    		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

    				   	<img class="img-rounded" alt="team-photo" src="/tour/images/535150035.jpg" width="50%">

    				   	<div class="team-member">

    				   	<h4>Kevin Song M</h4>

    				   	<p>Computer Science Student</p>
    				   	<p>Tarumanagara University, Jakarta</p>

    				   	</div>

    				   	<p class="social">
    				   		<a href="#"><span class="fa fa-facebook-square"></span></a>
    				   		<a href="#"><span class="fa fa-twitter-square"></span></a>
    				   		<a href="#"><span class="fa fa-linkedin-square"></span></a>
    				   		<a href="#"><span class="fa fa-google-plus-square"></span></a>
    				   	</p>

    		    </div> <!-- col-lg-4 -->

    	</div>  <!-- row text-center -->

    </div>
</div>


<?php include('footer.php')?>
		
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
