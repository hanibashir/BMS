<?php 
include "config.php";
session_start();

if (isset($_POST['login'])) {
 $email     = stripslashes(mysqli_real_escape_string($bs_connect,$_POST['email']));
 $password  = md5(md5($_POST['password']));
 if (empty($email) || empty($_POST['password'])) {
   echo "<div class='alert alert-danger'>Please enter your E-Mmail <b>&</b> your password</div>";
 }else{

   $query = mysqli_query($bs_connect, "SELECT * FROM `users` WHERE `u_email`='$email' AND `u_pass`='$password'");

   if (mysqli_num_rows($query) != 1) {
    echo "<div class='alert alert-danger'>Wrong E-Mmail or password</div>";
  }else{
    $user  = mysqli_fetch_assoc($query);
    $_SESSION['id']        = $user['u_id'];
    $_SESSION['user']      = $user['u_name'];
    $_SESSION['email']     = $user['u_email'];
    $_SESSION['reg_date']  = $user['reg_date'];
    $_SESSION['role']      = $user['u_level'];


    // echo "<div class='alert alert-success'>Successfull Login</a></div>";
    //echo "<meta http-equiv='refresh' content='3; url=../index.php'/>";
    echo '<script>setTimeout(function(){location.href="./"});</script>';
  }
 }
}
?>
