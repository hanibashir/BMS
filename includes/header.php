<?php 
session_start();
include_once 'config.php';
error_reporting(0);
ini_set('display_errors', 0);
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bookstore</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/slider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/category.css">
    <link rel="stylesheet" type="text/css" href="assets/css/default.css">
  </head>
  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">Bookstore</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <?php
             $cats = mysqli_query($bs_connect, "SELECT * FROM `category`");
             while ($cat_header = mysqli_fetch_assoc($cats)) {
              echo "<li><a href='category.php?cat=".$cat_header['cat_name']."'>".$cat_header['cat_name']."</a></li>";
             }


             ?>

          </ul>
        </li>

        <?php 
           
           if ($_SESSION['id'] == "") {
             echo "<li><a href='login.php'>Login</a></li>
                  <li><a href='register.php'>Register</a></li>";
           }elseif ($_SESSION['role'] == "1") {
                   echo '
                   <li><a href="admin/index.php">CPanel</a></li>
                   <li><a href="logout.php?id='.$_SESSION['id'].'">Log out</a></li>';
           }else{
                echo '<!-- settings  -->
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="profile.php">Profile</a></li>
                        
                        <li><a href="add_book">Add books</a></li>
                        <li><a href="book_list">Your books</a></li>
                        <li><a href="logout.php?id='.$_SESSION['id'].'">Log out</a></li>
                      </ul>
                     </li>
                     ';
           }

        ?> 

      </ul>

      <form class="navbar-form navbar-right">
        <div class="form-group">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- //Navbar -->




 