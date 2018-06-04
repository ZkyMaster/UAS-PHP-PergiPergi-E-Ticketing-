<?php
session_start();
include('koneksi.php');
if(isset($_GET['buy_id'])){
	$id = $_GET['buy_id'];
}
if(isset($_GET['id'])){
	$id_transaksi = $_GET['id'];

}
if(isset($_GET['tgl'])){
	$tgl = $_GET['tgl'];
	
}


					$query = "SELECT * from penerbangan WHERE no = $id ";
          $select_by_id = mysqli_query($con,$query);

					while($row = mysqli_fetch_assoc($select_by_id)){

						$id=$row['no'];
						$id_flight=$row['id_flight'];
						$from = $row['fromm'];
						$from_time = $row['from_time'];
						$to = $row['too'];
						$to_time = $row['to_time'];
						$seat=$row['seat'];
						$price = $row['price'];

					}
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PergiPergi.com Booking Flight</title>
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
	<link rel="stylesheet" href="css/style_black.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation" >
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">PergiPergi</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<?php include('indexmenu.php')?>
						</div>
					</div>
				</div>
			</div>
		</nav>
	<!--	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="minislides">
			   	<li style="background-image: url(images/cover-img-3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Have a Question ?</h2>
				   					<h1>Contact us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside> -->

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3><center>	Payment Check Out</center>	</h3>
<br>
<br>


<div class="boxes">
						<form action="" method="post">

						<h4>Traveler Information</h4>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="fname">Name</label>
									<input type="text" id="name" name="nama" class="form-control" placeholder="Your Name as on ID card">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" name="email" id="email"  type="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Address</label>
									<input type="text" name="address" id="subject" class="form-control" placeholder="Please fill your address">
								</div>
							</div>
<br>
							<h4>Ticket Information</h4>

							<div class="row form-group">
											<div class="col-md-12">
												<div class="col-md-6">
													<label for="subject">ID Flight</label>
													<input value="<?php echo "{$id_flight}"; ?>" type="text" class="form-control" name="id_flight" readonly="readonly">
											</div>
											<div class="col-md-6">
												<label for="subject">Seat</label>
												<input value="<?php echo "{$seat}"; ?>" type="text" class="form-control" name="seat" readonly="readonly">
											</div>
										</div>

										<div class="col-md-12">
											<div class="col-md-6">
												<label for="subject">From</label>
												<input value="<?php echo "{$from}"; ?>" type="text" class="form-control" name="from" readonly="readonly">
										</div>
										<div class="col-md-6">
											<label for="subject">time</label>
											<input value="<?php echo "{$from_time}"; ?>" type="text" class="form-control" name="from_time"readonly="readonly">
										</div>
									</div>


									<div class="col-md-12">
										<div class="col-md-6">
											<label for="subject">To</label>
											<input value="<?php echo "{$to}"; ?>" type="text" class="form-control" name="to" readonly="readonly">
									</div>
									<div class="col-md-6">
										<label for="subject">time</label>
										<input value="<?php echo "{$to_time}"; ?>" type="text" class="form-control" name="to_time" readonly="readonly">
									</div>
								</div>

								<div class="col-md-12">
									<div class="col-md-6">
										
											<label for="subject">Flight Date</label>
											<input value="<?php echo "{$tgl}"; ?>" type="text" class="form-control" name="date" readonly="readonly">
									</div>
									<div class="col-md-6">
											<label for="subject">Price</label>
											<input value="Rp <?php echo $price; ?>" type="text" class="form-control" name="price" readonly="readonly">
									</div>

										
								</div>
						</div>
<br>
							<h4>Payment Information</h4>
							<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Name on card</label>
								<input type="text" name="nameoncard" id="subject" class="form-control" placeholder="Name on card">
							</div>

							<div class="col-md-12">
								<div class="col-md-6">
									<label for="subject">Card Number ( Credit Card )</label>
									<input class="number credit-card-number form-control" type="text" name="cardnumber" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required pattern="[0-9]{16}">
						  	</div>

								<div class="col-md-6">
									<label for="subject">cvv</label>
									<input class="security-code form-control" inputmode="numeric" type="text" name="cvv" placeholder="&#149;&#149;&#149;" required="">
								</div>
							</div>
</div>
							<div class="form-group text-center">
								<input type="submit" name="pay" value="Check Out Payment" class="btn btn-primary">
							</div>

						</form>
</div>

					<?php
					if(isset($_SESSION['loggedin'])){
						 $uuid = $_SESSION['email'];
				}
								require('koneksi.php');
								if(isset($_POST['pay'])){
									$nama= $_POST['nama'];
									$email = $_POST['email'];
									$address = $_POST['address'];
									$id_flight=$_POST['id_flight'];
									$seat=$_POST['seat'];
									$from = $_POST['from'];
									$from_time = $_POST['from_time'];
									$to = $_POST['to'];
									$to_time = $_POST['to_time'];
									$price = $_POST['price'];
									$nameoncard = $_POST['nameoncard'];
									$cardnumber = $_POST['cardnumber'];
							

									$id_booking = mt_rand(2502505,4504505);
									
									
									$status = "pending";

										$input_transaksi = "INSERT into transaksi (id_transaksi,nameoncard,cardnumber,status) values('$id_transaksi','$nameoncard','$cardnumber','$status')";
										$result1 = mysqli_query($con,$input_transaksi);
										$input_Booking = "INSERT into booking (id_booking,id_transaksi,Email_user,nama, email,address,id_flight,fromm,from_time,too,to_time,seat,price) values('$id_booking','$id_transaksi','$uuid','$nama','$email','$address','$id_flight','$from','$from_time','$to','$to_time','$seat','$price')";
										$result2 = mysqli_query($con,$input_Booking);
										if($result2){


										echo "<script>alert('Payment success!')</script>";
?>
										<script>window.location.href='ticket.php?transaksi_id=<?php echo $id_transaksi?>';</script>
<?php


									}
									else {
										echo "<script>alert('Payment failed')</script>";
									}
								}
							?>


<br>
					<div class="col-md-10 col-md-offset-1 animate-box">

						<br>
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
							</div>
						</div>
					</div>
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
