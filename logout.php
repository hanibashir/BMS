<?php include "includes/header.php"; 
session_start();
?>

<div class="container">

<?php
    
   $id = intval($_GET['id']);
  if (isset($_GET['id']) && $_GET['id'] != 0) {
  	session_destroy();
  	echo "<meta http-equiv='refresh' content='0.25; url=./'/>";
  }else{
  	echo "<meta http-equiv='refresh' content='0.25; url=./'/>";
  }

?>


</div>

<?php include "includes/footer.php"; ?>