<?php
session_start();


   include "config.php";
   if (isset($_POST['register'])) {
   	 $username            = strip_tags($_POST['username']);
   	 $email               = $_POST['email'];
   	 $password            = $_POST['password'];
   	 $confirm_password    = $_POST['confirm_password'];

   	 if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
   	 	echo "<div class='alert alert-danger'>All fields are required</div>";
   	 	
   	 }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Validate email
   	 	echo "<div class='alert alert-danger'>Please enter a valid email</div>";
   	 }elseif ($password != $confirm_password) {
   	 	echo "<div class='alert alert-danger'>The passwords don\'t match</div>";
   	 }else{
   	 	$query = mysqli_query($bs_connect, "SELECT `u_email` FROM `users` WHERE `u_email`='$email'");
   	 	$rows  = mysqli_num_rows($query);
   	 	if ($rows > 0) { //Check if the email registered
   	 		echo "<div class='alert alert-danger'>E-Mail already registered! <a href='#'>Forgot your password?</a></div>";
   	 	}else{
   	 		$password = md5(md5($password)); //Hash password
   	 		$reg_date = date('Y-m-d H:s:i');

   	 		$insert_user = mysqli_query($bs_connect,"INSERT INTO `users`
   	 			                                                 (`u_id`,
   	 			                                                  `u_name`,
   	 			                                                  `u_email`,
   	 			                                                  `u_pass`, 
   	 			                                                  `u_gender`, 
   	 			                                                  `u_avatar`, 
   	 			                                                  `u_about`, 
   	 			                                                  `u_facebook`, 
   	 			                                                  `u_twitter`, 
   	 			                                                  `reg_date`, 
   	 			                                                  `u_level`) 
   	 			                                                  VALUES
   	 			                                                  (NULL,
   	 			                                                   '$username',
   	 			                                                   '$email',
   	 			                                                   '$password',
   	 			                                                    NULL,
   	 			                                                    NULL,
   	 			                                                    NULL,
   	 			                                                    NULL,
   	 			                                                    NULL,
   	 			                                                    '$reg_date',
   	 			                                                    0) ");
   	 		if ($insert_user) {

   	 			echo "<div class='alert alert-success'>Successfully Registered Please <a href='login.php'>login</a> to continue</a></div>";
   	 			//echo "<meta http-equiv='refresh' content='3; url=./' /> ";
               echo '<script>setTimeout(function(){location.href="login.php"} , 2000);</script>';
   	 		}
   	 	}
   	 }

   }

?>
