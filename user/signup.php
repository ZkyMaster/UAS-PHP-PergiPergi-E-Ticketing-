<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create an Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title p-b-26">
						Create an Account
					</span>
					<span class="login100-form-title p-b-48">
						PergiPergi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Name without Number or symbol">
						<input class="input100" type="text" name="nama" >
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: name@site.com">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid Name without Number or symbol">
						<input class="input100" type="text" name="nohp" >
						<span class="focus-input100" data-placeholder="Phone Number"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="konfirmasipass">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button onclick='/tour/user/login.php' class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="/tour/user/login.php">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/mainlogin.js"></script>

</body>
</html>

<?php
	require('koneksi.php');
    if (isset($_REQUEST['email'])){
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$nama = stripslashes($_REQUEST['nama']);
		$nama = mysqli_real_escape_string($con,$nama);
		$nohp = stripslashes($_REQUEST['nohp']);
		$nohp = mysqli_real_escape_string($con,$nohp);
		$password = stripslashes($_REQUEST['pass']);
		$password = mysqli_real_escape_string($con,$password);
		$cpassword = stripslashes($_REQUEST['konfirmasipass']);

		//cek username already exist
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$sql= "select * from user where Email_user='$email'";
			$row = mysqli_query($con,$sql);

			$sql_nohp = "select * from user where NoHp_user='$nohp'";
			$row_nohp = mysqli_query($con,$sql_nohp);

			if(mysqli_num_rows($row)==0 && mysqli_num_rows($row_nohp)==0 && $password == $cpassword ){
					$query = "INSERT into `user` (Nama_user, Email_user, NoHp_user, Password) VALUES ('$nama', '$email','$nohp','$password')";
					$result = mysqli_query($con,$query);
					echo "<script>alert('Registrasi berhasil. Silahkan Login Terlebih Dahulu')</script>";
					echo "<script>window.open('/tour/user/login.php','_self')</script>";
				}

			if(mysqli_num_rows($row)>0){
				echo "<script>alert('Registrasi gagal. Email Telah Digunakan!')</script>";
				echo "<script>window.location.refresh()</script>";
			}
			if(mysqli_num_rows($row_nohp)>0){
				echo "<script>alert('Registrasi gagal. No HP Telah Digunakan!')</script>";
				echo "<script>window.location.refresh()</script>";
			}

			if($password != $cpassword){
				echo "<script>alert('Registrasi gagal. Konfirmasi Password Tidak Sama!')</script>";
				echo "<script>window.location.refresh()</script>";
			}
			
    } }
?>
