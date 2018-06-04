<?php
session_start();
include('koneksi.php');
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
<link rel="stylesheet" href="css/tabelprofil.css">
	<!-- Modernizr JS -->

	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link href="netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
.panel .panel-default{
	padding-left:150px ;
	padding-right: 150px ;
}
.modal {
  text-align: center;
}

@media screen and (min-width: 768px) {
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
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


<?php
 	if(isset($_SESSION['loggedin'])){
	   $id = $_SESSION['email'];
}
	 $query = "SELECT Nama_user,NoHp_user from user WHERE Email_user = '$id' ";
	 $select_by_id = mysqli_query($con,$query);

	 while($row = mysqli_fetch_assoc($select_by_id)){

	 	$nama =$row['Nama_user'];
	 	$phone =$row['NoHp_user'];


	 }

?>



		<div id="colorlib-contact">
			<div class="container">
                      <div class="panel panel-default">
                      <div class="panel-heading">
												<h4 >User Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-6 col-xs-12 col-sm-2 col-lg-4">
                       <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
                      </div>
                      <div class="col-lg-6 col-xs-12 col-sm-4 col-lg-6" >
                          <div class="container" >
                            <h2><?php echo $nama?></h2>
                          </div>
                           <hr>
                          <ul class="container details" style="padding-left:40px;">
														<li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $id?></p></li>
                            <li><p><span class="glyphicon glyphicon-phone" style="width:50px;"></span><?php echo $phone?></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " ></div>
										  <div class="col-lg-6 col-xs-12 col-sm-4 col-lg-6" >
											</div>
					            </div>

					            </div>
					            </div>



		<div class="container">
 <div class="mail-box">
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>History</h3>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">


                               <table class="table table-inbox table-hover">


<?php
$query = "SELECT * from booking WHERE Email_user = '$id' ";
$select_by_id = mysqli_query($con,$query);


?>
                            <tbody>
                              <tr class="unread">
                                  <td class="view-message  dont-show">ID Transaction</td>
                                  <td class="view-message">ID Flight</td>
                                  <td></td>
																	<td class="view-message text-left">From</td>
																	<td class="view-message text-left">To</td>
                                  <td>
                                        <span>Status
                                            <div>
                                                <span class="label label-success pull-left"> </span>
                                                <span class="label label-info pull-left"> </span>
                                                <span class="label label-warning pull-left"> </span>
                                                <span class="label label-danger pull-left"> </span>
                                            </div>
                                        </span>
                                  </td>

                              </tr>
															<?php	if(mysqli_num_rows($select_by_id )==0 ){ ?>

																	<tr class = "">
																		<td></td>
																		<td></td>
																		<td class="view-message"> <?php echo "Data tidak di temukan!"; ?> </td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>

															<?php	}
																	  else{
																			while($row = mysqli_fetch_assoc($select_by_id)){

																				$id_transaksi=$row['id_transaksi'];
																				$id_flight=$row['id_flight'];
																				$from = $row['fromm'];
																				$to = $row['too'];	

																		?>
																		<tr class="">
																				<td class="view-message  dont-show"><?php echo $id_transaksi ?></td>
																				<td colspan="2" class="view-message"><?php echo $id_flight ?></td>
																				<td class="view-message  text-left"><?php echo $from ?></td>
																				<td class="view-message  text-left"><?php echo $to ?></td>
																				<td><span class="label label-success">Success</span></td>
																		</tr>
																<?php		}}?>




                          </tbody>
                          </table>
                      </div>
										</div>

                  </aside>



			</div>
		</div>
		</div>
		</div>


	<?php include "footer.php" ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Change Password</h4>
					</div>
					<div class="modal-body">
								<form action="" method="post">

									<div class="row form-group">
										<div class="col-md-12">
											<label for="subject">New Password</label>
											<input type="password" name="subject" id="newpass" class="form-control" placeholder="">
										</div>
									</div>

									<div class="form-group text-center">
										<input type="submit" name="sendmessage" value="Change Password" class="btn btn-primary">
									</div>
								</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
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
