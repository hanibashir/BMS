 <?php include_once"includes/header.php"; 



 ?>
  <div class="container-fluid">
         <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li>
          <?php
             if (isset($_GET['cat'])) {
   echo $_GET['cat'];
 }
 ?>
          </li>
         </ol>
          <div class="col-lg-9 col-md-9 col-sm-9">
              
             <!-- category items -->
              <div class="row category-items">

                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                      <img src="http://placehold.it/250x250" />
                      </a>
                  </div>
                  
              </div>
              <!-- //category items -->
              
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Books Categories</h3>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item">Cras justo odio (No. of Books)</li>
                    <li class="list-group-item">Dapibus ac facilisis in (No. of Books)</li>
                    <li class="list-group-item">Morbi leo risus (No. of Books)</li>
                    <li class="list-group-item">Porta ac consectetur ac (No. of Books)</li>
                    <li class="list-group-item">Vestibulum at eros (No. of Books)</li>
                    <li class="list-group-item">Vestibulum at eros (No. of Books)</li>
                    <li class="list-group-item">Vestibulum at eros (No. of Books)</li>
                  </ul>
                </div>   
          </div>

  </div>

<?php include_once"includes/footer.php"; ?>
