<?php include_once"includes/header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
     <?php
     if(isset($_SESSION['id']) && $_SESSION['id'] != "") {
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
        <h3 class="panel-title">Register</h3>
      </div>
      <div class="panel-body">
        <form accept-charset="UTF-8" role="form" id="register" method="POST" action="includes/check.php">
          <fieldset>
            <div class="form-group">
              <!-- <img src="images/avatar.png" width="70" style="margin-left: 125px;"/> -->
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Choose Username" name="username" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Enter Password" name="password" type="password">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password">
            </div>
            <!--  <div class="form-group col-md-6" style="margin-left:-15px; ">
            <select class="form-control">
              <option value="">Gender</option>
              <option value="">Male</option>
              <option value="">Female</option>
              <option value="">Other</option>
            </select>
          </div>
          <div class="form-group">
            <div class="col-md-12"><label for="avatar" class="control-label">Profile Photo</label></div>
            <input id="avatar" name="avatar" type="file">
          </div> -->
          
          <div class="text-center" id="reg_loading"></div>
          
          <input class="btn btn-lg btn-primary btn-block" name="register" type="submit" value="Register">
        </fieldset>
      </form>
      <!--  <hr/>
      <center><h4>OR</h4></center>
      <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Register via facebook">
      <input class="btn btn-lg btn-google btn-block" type="submit" value="Register via google"> -->
    </div>
    <div class="panel-footer">You have account? <a href="login.php">Login here</a></div>
  </div>
  ';

}

?>
</div>
</div>
</div>

<?php include_once"includes/footer.php"; ?>

