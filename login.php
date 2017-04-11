<?php 
include "includes/header.php"; 
?>

<div class="container">
	<div class="row">
		
		<div class="col-md-4 col-md-offset-4">
			<?php
			if (isset($_SESSION['id'])  && $_SESSION['id'] != "") {
				echo "<div class='alert alert-danger text-center'>Your are logged in as <b>".$_SESSION['user']."</b>
				<br /> <a href='#'>Logout?</a><br /><b>OR<br></b>Go to 
				<a href='./'>Home</a>
			</div>
			<meta http-equiv='refresh' content='3; url=./' />

			";
		}else{
			echo '

			<div class="panel panel-default login-panel ">
				<div class="panel-heading">
					<h3 class="panel-title">Login</h3>
				</div>
				<div class="panel-body">
					
					<form accept-charset="UTF-8" role="form" id="login" method="POST" action="includes/check.php">
						<fieldset>
							<div class="form-group">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="text-center" id="log_loading"></div>
							<input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">
						</fieldset>
					</form>
					
				</div>
				<div class="panel-footer">You don\'t have account? <a href="register.php">Register here</a></div>
			</div>


			';
		}


		?>


		
	</div>    

	
</div>
</div>

<?php include "includes/footer.php"; ?>