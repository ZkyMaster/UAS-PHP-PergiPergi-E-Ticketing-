<?php
   include("koneksi.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

        $query = "SELECT * FROM `users` WHERE Email_user='$email' and Password='$password";
    		$result = mysqli_query($con,$query) or die(mysql_error());
    		$rows = mysqli_num_rows($result);
          if($rows==1){
    			   session_register("Email_user");
             $_SESSION['login_user'] = $email;
             header("location: ./user/signup.php");
          }
          else {
            $error = "Your Login Name or Password is invalid";
          }
    }
?>
