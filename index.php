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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body onload="disclaimer()">
		<script>
			function disclaimer() {
			    alert("This Website is for Education Only. Everything in This website is not for use and in purpose to pass our final exam ");
			}
		</script>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">PergiPergi</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1" id="menu">
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
					<!-- slideimage 1 -->
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Successful Flights</h2>
				   					<h1>Around The World</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>

					<!-- slideimage 2 -->
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Never Been Easier</h2>
				   					<h1>Booking For Flights</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>

					<!-- slideimage 3 -->
					<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Work with The Best</h2>
				   					<h1>Airline Agencies</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>

					<!-- slideimage 4 -->
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience And Enjoy</h2>
				   					<h1>The Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>


		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
<!-- 							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>

							</ul> -->
						</div>
						<!-- box pemesanan -->
						<section id="booking">
						<div class="tab-content" >
							<h1 align="center" style="color:white">Book Your Flight Now</h1>
							<div id="flight" class="tab-pane fade in active">
								<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">From:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location" name="from" required="">
				                    </div>
				                  </div>
				              	 </div>
												 <div class="col-md-3">
												 <div class="form-group">
													 <label for="date">To:</label>
													 <div class="form-field">
														 <input type="text" id="location" class="form-control" placeholder="Search Location" name="to" required="">
													 </div>
												 </div>
												</div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Departure:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date" name="date" required="">
				                    </div>
				                  </div>
				                </div>


						  <div class="col-md-3">
				                  <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>

										<?php
												require('koneksi.php');
												if(isset($_POST['submit']) && isset($_POST['from']) && isset($_POST['to']) && isset($_POST['date'])){
														$from = $_POST['from'];
														$to = $_POST['to'];
														$date=$_POST['date'];

														echo "<script>alert('jalan')</script>"	 ;

														$input_search = "SELECT no,id_flight,fromm ,from_time, too,to_time, seat ,price FROM penerbangan WHERE fromm='$from' AND too='$to'";
														$result = mysqli_query($con,$input_search)	or die(mysqli_error());
														if($result){
										?>
													<script>window.location.href='list-penerbangan.php?from=<?php echo $from?>&to=<?php echo $to?>&date=<?php echo $date?>';</script>
										<?php
														}
													}
										?>

					</div>
				</section>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center ">
						<div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3>Amazing Travels</h3>
							<p>Visit The Most Exotic and Wonderful Places Around The World And Learn The Beauty Of The Earth</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-plane"></i>
							</span>
							<h3>Our Airlines</h3>
							<p>Years Of Experience Has Brought The Best Airlines Into Our Companion, to Serve Your Needs of Exploration </p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-landmark"></i>
							</span>
							<h3>Book Your Trip</h3>
							<p>With The Touch Of Your Hand, Choose The Flights, Decide The Date, And Explore The World</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-postcard"></i>
							</span>
							<h3>Nice Support</h3>
							<p>Our Teams Will Always Support You And Fulfill Any Of Your Needs To Ensure Your Travel Experiences</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<!-- popular destination-->
		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destination</h2>
						<p>These Are The World Best Treasure, That Wait To be Unfold by You.</p>
					</div>
				</div>
			</div>



			<div class="tour-wrap">
				<a href="#" class="tour-entry animate-box">
					<?php
					require('koneksi.php');
								$queryz= "SELECT * from destination WHERE id_destination = '1' ";
								$select_by_idz = mysqli_query($con,$queryz);

								while($row = mysqli_fetch_assoc($select_by_idz)){


									$des_id = $row['id_destination'];
									$des_titles = $row['judul'];
									$ntempats = $row['nama_tempat'];
									$nnegaras = $row['nama_negara'];
									$images = $row['image'];
}
					?>
				<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

				<span class="desc">

						<h2><?php echo $des_titles ?></h2>
						<span class="city"><?php echo $ntempats?></span>
						<span class="price"><?php echo $nnegaras ?> </span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<?php
					require('koneksi.php');
								$queryz= "SELECT * from destination WHERE id_destination = '2' ";
								$select_by_idz = mysqli_query($con,$queryz);

								while($row = mysqli_fetch_assoc($select_by_idz)){


									$des_id = $row['id_destination'];
									$des_titles = $row['judul'];
									$ntempats = $row['nama_tempat'];
									$nnegaras = $row['nama_negara'];
									$images = $row['image'];
}
					?>
				<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

				<span class="desc">

							<h2><?php echo $des_titles ?></h2>
						<span class="city"><?php echo $ntempats?></span>
						<span class="price"><?php echo $nnegaras ?> </span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
						<?php
						require('koneksi.php');
									$queryz= "SELECT * from destination WHERE id_destination = '3' ";
									$select_by_idz = mysqli_query($con,$queryz);

									while($row = mysqli_fetch_assoc($select_by_idz)){


										$des_id = $row['id_destination'];
										$des_titles = $row['judul'];
										$ntempats = $row['nama_tempat'];
										$nnegaras = $row['nama_negara'];
										$images = $row['image'];
	}
						?>
					<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

					<span class="desc">

							<h2><?php echo $des_titles ?></h2>
							<span class="city"><?php echo $ntempats?></span>
							<span class="price"><?php echo $nnegaras ?> </span>
						</span>
					</a>
				<a href="#" class="tour-entry animate-box">
					<?php
					require('koneksi.php');
								$queryz= "SELECT * from destination WHERE id_destination = '4' ";
								$select_by_idz = mysqli_query($con,$queryz);

								while($row = mysqli_fetch_assoc($select_by_idz)){


									$des_id = $row['id_destination'];
									$des_titles = $row['judul'];
									$ntempats = $row['nama_tempat'];
									$nnegaras = $row['nama_negara'];
									$images = $row['image'];
}
					?>
				<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

				<span class="desc">

						<h2><?php echo $des_titles ?></h2>
						<span class="city"><?php echo $ntempats?></span>
						<span class="price"><?php echo $nnegaras ?> </span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<?php
					require('koneksi.php');
								$queryz= "SELECT * from destination WHERE id_destination = '5' ";
								$select_by_idz = mysqli_query($con,$queryz);

								while($row = mysqli_fetch_assoc($select_by_idz)){


									$des_id = $row['id_destination'];
									$des_titles = $row['judul'];
									$ntempats = $row['nama_tempat'];
									$nnegaras = $row['nama_negara'];
									$images = $row['image'];
}
					?>
				<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

				<span class="desc">

						<h2><?php echo $des_titles ?></h2>
						<span class="city"><?php echo $ntempats?></span>
						<span class="price"><?php echo $nnegaras ?> </span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<?php
					require('koneksi.php');
								$queryz= "SELECT * from destination WHERE id_destination = '6' ";
								$select_by_idz = mysqli_query($con,$queryz);

								while($row = mysqli_fetch_assoc($select_by_idz)){


									$des_id = $row['id_destination'];
									$des_titles = $row['judul'];
									$ntempats = $row['nama_tempat'];
									$nnegaras = $row['nama_negara'];
									$images = $row['image'];
}
					?>
				<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

				<span class="desc">

						<h2><?php echo $des_titles ?></h2>
						<span class="city"><?php echo $ntempats?></span>
						<span class="price"><?php echo $nnegaras ?> </span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<?php
					require('koneksi.php');
								$queryz= "SELECT * from destination WHERE id_destination = '7' ";
								$select_by_idz = mysqli_query($con,$queryz);

								while($row = mysqli_fetch_assoc($select_by_idz)){


									$des_id = $row['id_destination'];
									$des_titles = $row['judul'];
									$ntempats = $row['nama_tempat'];
									$nnegaras = $row['nama_negara'];

									$images = $row['image'];
}
					?>
				<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

					<span class="desc">

						<h2><?php echo $des_titles ?></h2>
						<span class="city"><?php echo $ntempats?></span>
						<span class="price"><?php echo $nnegaras ?> </span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<?php
					require('koneksi.php');
								$queryz= "SELECT * from destination WHERE id_destination = '8' ";
								$select_by_idz = mysqli_query($con,$queryz);

								while($row = mysqli_fetch_assoc($select_by_idz)){


									$des_id = $row['id_destination'];
									$des_titles = $row['judul'];
									$ntempats = $row['nama_tempat'];
									$nnegaras = $row['nama_negara'];
									$images = $row['image'];
}
					?>
				<?php echo"	<div class='tour-img' style='background-image: url(image_upload/$images);'></div> "?>

					<span class="desc">

						<h2><?php echo $des_titles ?></h2>
						<span class="city"><?php echo $ntempats?></span>
						<span class="price"><?php echo $nnegaras ?> </span>
					</span>
				</a>
			</div>
		</div>


		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Our Satisfied Customers</h2>
						<p>Let's Hear Their Opinion About PergiPergi</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">
						<div class="owl-carousel2">
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person1.jpg);"></span>
									<span class="user">Alysha Myers</span>
									<small>Miami Florida, USA</small>
									<blockquote>
										<p>" This is what i called as Perfection. Just think, the world is a treasure, in your hand, you just need the key to open it. PergiPergi is the only key that can reveal the treasure..</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person2.jpg);"></span>
									<span class="user">James Fisher</span>
									<small>Tokyo, Japan</small>
									<blockquote>
										<p>Learning about other countries culture is one of my dream, and PergiPergi has made it come true</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person3.jpg);"></span>
									<span class="user">Isabella Thompson</span>
									<small>Athens, Greece</small>
									<blockquote>
										<p>Travelling never been so easier for me. Actually, i don't like travelling at all, but PergiPergi is adding a new hobby to my Bucket List ;)</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



<!-- subscribe-->
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe" action = "" method = "post">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" name="email" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" name="sendsubscribe" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>

					</div>

					<?php
					require('koneksi.php');
								if(isset($_POST['sendsubscribe'])){
									$email = $_POST['email'];

									$input = "insert into subscribe (email) values('$email')";
									$result = mysqli_query($con,$input);
									if($result){
										echo "<script>alert('Subscribe is successful !')</script>";

									}
								}
					?>

				</div>
			</div>
		</div>

<?php include "footer.php" ?>

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
