<?php
session_start();
require('koneksi.php');
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

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>

</style>

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
							<?php
								include('indexmenu.php');
							?>
						</div>
					</div>
				</div>
			</div>
		</nav>


<div id="colorlib-contact">
<br>
<?php
if(isset($_GET['transaksi_id'])){
	$id = $_GET['transaksi_id'];

}

					$query = "SELECT * from booking WHERE id_transaksi= $id ";
					$select_by_id = mysqli_query($con,$query);

					while($row = mysqli_fetch_assoc($select_by_id)){
						$id_booking= $row['id_booking'];
						$nama= $row['nama'];
						$email = $row['email'];
						$address = $row['address'];
						$id_flight=$row['id_flight'];
						$seat=$row['seat'];
						$from = $row['fromm'];
						$from_time = $row['from_time'];
						$to = $row['too'];
						$to_time = $row['to_time'];
						$price = $row['price'];

					}
						$ddate = date('d M Y');
?>
    <div class="container">
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <address>
                            <strong>PergiPergi</strong>
                            <br>
                            Cyber Tower 77th floor
                            <br>
                            Indonesia
                            <br>
                            <abbr title="Phone">P:</abbr> (021) 484-6829
                        </address>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <p>
                            <em><?php echo $ddate?></em>
                        </p>
                        <p>
                            <em>Transaction Receipt #: <?php echo $id?></em>
                        </p>
                        <p>
                            <em>Booking ID #: <?php echo $id_booking?></em>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <h1>Receipt</h1>
                    </div>
                    </span>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID Flight</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Time</th>
                                <th>Seat</th>
                                <th class="text-center">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-2"><?php echo $id_flight ?></td>
                                <td class="col-md-2"><?php echo $from ?></td>
                                <td class="col-md-2"><?php echo $to ?></td>
                                <td class="col-md-2"><?php echo $from_time ?> -  <?php echo $to_time   ?></td>
                                <td class="col-md-2"><?php echo $seat ?></td>
                                <td class="col-md-2 text-center"><?php echo $price  ?></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-left">
                                <p>
                                    <strong>Name :</strong>
                                </p>
                                <p>
                                    <strong>Email :</strong>
                                </p></td>
                                <td class="text-left">
                                <p>
                                    <strong><?php echo $nama?></strong>
                                </p>
                                <p>
                                    <strong><?php echo $email?></strong>
                                </p></td>
                            </tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-center text-danger"><h5><strong><?php echo $price ?></strong></h5></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



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
