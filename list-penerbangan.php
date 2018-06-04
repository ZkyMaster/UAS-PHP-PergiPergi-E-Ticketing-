<?php session_start();
	?>
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

	<link rel="stylesheet" href="css/table.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>



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
						<div class="col-xs-10 text-right menu-1" id="mypage">
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
			   	<li style="background-image: url(images/disp_listflight.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Successful Flights</h2>
				   					<h1>Around the World</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
				</li>
					<!-- slideimage 2 -->
				<li style="background-image: url(images/disp_listflight_1.jpg);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
									<h2>With The Touch Of Your Hands</h2>
									<h1>Reveal The World Best Treasure</h1>
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
						</div>
						<!-- box pemesanan -->
						<div class="tab-content" id="booking">
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



					</div>
				</div>
			</div>
</div>

<!-- table-->

			<div class="container">
				<br>
				<br>
				<h2>Available Flights</h2>

				<table class="points_table">
					<thead>
						<tr>
							<th class="col-xs-2">Airlines</th>
							<th class="col-xs-2">From</th>
							<th class="col-xs-2">To</th>
							<th class="col-xs-2">Class</th>
							<th class="col-xs-2">Price</th>
						</tr>
					</thead>

					<tbody class="points_table_scrollbar">
						<?php
							require('koneksi.php');

								if(isset($_POST['submit'])){
								$from = $_POST['from'];
								$to = $_POST['to'];
								$tgl= $_POST['date'];



								$input_search = "SELECT no,id_flight,fromm ,from_time, too,to_time, seat ,price FROM penerbangan WHERE fromm='$from' AND too='$to'";
								$result = mysqli_query($con,$input_search)	or die(mysqli_error());
								?>

							<?php	if(mysqli_num_rows($result)==0 ){ ?>

									<tr class = "odd">
										<td class="col-xs-10"> <?php echo "Data tidak di temukan!"; ?> </td>
									</tr>

							<?php	}
									  else{
											while($row = mysqli_fetch_array($result)){
											$id=$row[0];
											if ($row[0] %2 != 0){
										?>
												<tr class="odd">
													<td class="col-xs-2"> <?php echo $row[1] ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[2] ," (",$row[3],")" ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[4], " (",$row[5] ,")"; ?> </td>
													<td class="col-xs-2"> <?php echo $row[6]; ?></td>
													<td class="col-xs-2"> <?php echo "Rp ", $row[7] ; ?> </td>
													<td class="col-xs-2"> 
													<?php 
													if(isset($_SESSION['loggedin'])){
													?>
														<a href='formpayment.php?buy_id=<?php echo $id ?>&id=<?php echo mt_rand(590590590,999999999); ?>&tgl=<?php echo $tgl?>'>Buy Ticket </a></td>
													<?php }
													else{ 
														?>
														<a href='/tour/user/login.php'>Buy Ticket </a></td>;
													<?php } ?>	
												</tr>

										<?php
											}
											else
												{ ?>
												<tr class="even">
													<td class="col-xs-2"> <?php echo $row[1] ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[2] ," (",$row[3],")" ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[4], " (",$row[5] ,")"; ?> </td>
													<td class="col-xs-2"> <?php echo $row[6]; ?></td>
													<td class="col-xs-2"> <?php echo "Rp ", $row[7] ; ?> </td>
													<td class="col-xs-2"> 
													<?php 
													if(isset($_SESSION['loggedin'])){
													?>
														<a href='formpayment.php?buy_id=<?php echo $id ?>&id=<?php echo mt_rand(590590590,999999999); ?>&tgl=<?php echo $tgl?>'>Buy Ticket </a></td>
													<?php }
													else{ 
														?>
														<a href='/tour/user/login.php'>Buy Ticket </a></td>;
													<?php } ?>		
												</tr>
											<?php }	}?>
								<?php } } ?>

						<?php

							if(isset($_GET['from']) AND isset($_GET['to']) AND isset($_GET['date']) ) {
								$from = $_GET['from'];
								$to = $_GET['to'];
								$tgl = $_GET['date'];



								$input_search = "SELECT no,id_flight,fromm ,from_time, too,to_time, seat ,price FROM penerbangan WHERE fromm='$from' AND too='$to'";
								$result = mysqli_query($con,$input_search)	or die(mysqli_error());
								?>

							<?php	if(mysqli_num_rows($result)==0 ){ ?>

									<tr class = "odd">
										<td class="col-xs-10"> <?php echo "Data tidak di temukan!"; ?> </td>
									</tr>

							<?php	}
									  else{
											while($row = mysqli_fetch_array($result)){
											$id=$row[0];
											if ($row[0] %2 != 0){
										?>
												<tr class="odd">
													<td class="col-xs-2"> <?php echo $row[1] ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[2] ," (",$row[3],")" ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[4], " (",$row[5] ,")"; ?> </td>
													<td class="col-xs-2"> <?php echo $row[6]; ?></td>
													<td class="col-xs-2"> <?php echo "Rp ", $row[7] ; ?> </td>
													<td class="col-xs-2"> 
													<?php 
													if(isset($_SESSION['loggedin'])){
													?>
														<a href='formpayment.php?buy_id=<?php echo $id ?>&id=<?php echo  mt_rand(590590590,999999999); ?>&tgl=<?php echo $tgl?>'>Buy Ticket </a></td>
													<?php } 
													else{ 
														?>
														<a href='/tour/user/login.php'>Buy Ticket </a></td>;
													<?php } ?>		
												</tr>

										<?php
											}
											else
												{ ?>
												<tr class="even">
													<td class="col-xs-2"> <?php echo $row[1] ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[2] ," (",$row[3],")" ; ?> </td>
													<td class="col-xs-2"> <?php echo $row[4], " (",$row[5] ,")"; ?> </td>
													<td class="col-xs-2"> <?php echo $row[6]; ?></td>
													<td class="col-xs-2"> <?php echo "Rp ", $row[7] ; ?> </td>
													<td class="col-xs-2"> 
													<?php 
													if(isset($_SESSION['loggedin'])){
													?>
														<a href='formpayment.php?buy_id=<?php echo $id ?>&id=<?php echo mt_rand(590590590,999999999); ?>&tgl=<?php echo $tgl?>'>Buy Ticket </a></td>
													<?php }
													else{ 
														?>
														<a href='/tour/user/login.php'>Buy Ticket </a></td>;
													<?php } ?>	
												</tr>
											<?php }
										}
									}?>

						<?php	}?>
					</tbody>
				</table>
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
