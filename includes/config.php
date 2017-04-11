<?php
 $host = 'localhost';
 $username = 'root';
 $userpass = '';
 $db       = 'bookstore';


 $bs_connect = mysqli_connect($host,$username,$userpass,$db);

 mysqli_set_charset($bs_connect,'utf-8');

 if (!$bs_connect) {
 	echo 'Can\'t connect to the server!'.mysqli_connect_error().mysqli_connect_errno();
 }

 function closeDB(){
 	global $bs_connect;
 	mysqli_close($bs_connect);
 }

?>