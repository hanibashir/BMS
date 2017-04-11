<?php include_once"includes/header.php"; ?>

  <div class="container-fluid">

         <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Book Category</a></li>
          <li class="active">Book Title</li>
         </ol>

         
         <div class="col-md-8">
         <div class="book-post">  
            <div class="book-post-img">
            	<a href="#">
            		<img src="http://placehold.it/250x280">
            	</a>
            </div>  
            <div class="book-post-info">
            	<h1 class="book-title">Book Title</h1>
            	<h2 class="book-author">By Hani Bashir</h2>
            
            <ul style="list-style: none;margin-left: -40px;">
            	<li>Release Date: </li>
            	<li><b>Genre:</b> </li>
            	<li><b>Pages:</b> </li>
            </ul> 
            </div>
            <div class="book-post-icons">
            	<a href="#" target="_blank" style="margin-right: 10px;" class="btn btn-raised btn-primary">Read</a>
            	<a href="#" target="_blank" style="margin-right: 10px;" class="btn btn-raised btn-success">Download</a>

            </div>  
            <div class="book-post-desc">
            	<h3>Book Description</h3>
            	<hr />
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
         </div> 
             
                            
          </div>
          

          <!-- book page sidebar -->
          <div class="col-md-4">
            <div class="book-sidebar">
               <div class="book-sidebar-box">
               	 <h3>More Books</h3>
               	 <ul class="book-sidebar-list">
                    <li class="book-sidebar-item">
                      <div class="book-sidebar-img">
                        <a href="#"><img src="http://placehold.it/67x100"></a>
                      </div>
                      <div class="book-sidebar-info">
                      	<h3>
                      	  <a href="#">Book Title</a>
                      	</h3>
                      	<h4>Hani Bashir</h4>
                      	
                      </div>
                    </li>
                    <!--  -->
                    <li class="book-sidebar-item">
                      <div class="book-sidebar-img">
                        <a href="#"><img src="http://placehold.it/67x100"></a>
                      </div>
                      <div class="book-sidebar-info">
                      	<h3>
                      	  <a href="#">Book Title</a>
                      	</h3>
                      	<h4>Hani Bashir</h4>
                      	
                      </div>
                    </li>
                    <!--  -->
                    <li class="book-sidebar-item">
                      <div class="book-sidebar-img">
                        <a href="#"><img src="http://placehold.it/67x100"></a>
                      </div>
                      <div class="book-sidebar-info">
                      	<h3>
                      	  <a href="#">Book Title</a>
                      	</h3>
                      	<h4>Hani Bashir</h4>
                      	
                      </div>
                    </li>
                  </ul>
               </div>
            </div>       
          </div>
          <!-- //book page sidebar -->
           
          <!-- Comments -->
          <div class="col-md-8">

	          <div class="panel panel-default comment-panel">
	          <div class="comments"><i class="fa fa-comments" aria-hidden="true"></i> Comments</div>
	          <hr>
	          	<div class="comment col-md-12">
	          		<div class="comment-img">
	          			<img src="http://placehold.it/50x50">
	          		</div>
	          		<div class="comment-info">
	          		<b><i class="fa fa-user" aria-hidden="true"></i> Hani Bashir</b> | 
	          		<b><i class="fa fa-clock-o" aria-hidden="true"></i> 09-04-2017</b>
	          		</div>
	          		<hr />
	          		<div class="comment-text">
	          			any comment<br/>comment<br/>comment<br/>comment<br/>comment
	          		</div>
	          	</div>

          <!-- ####### -->

	          	<div class="comment col-md-12">
	          		<div class="comment-img">
	          			<img src="http://placehold.it/50x50">
	          		</div>
	          		<div class="comment-info">
	          		<b><i class="fa fa-user" aria-hidden="true"></i> Hani Bashir</b> | 
	          		<b><i class="fa fa-clock-o" aria-hidden="true"></i> 09-04-2017</b>
	          		</div>
	          		<hr />
	          		<div class="comment-content">
	          			any comment<br/>comment<br/>comment<br/>comment<br/>comment
	          		</div>
	          	</div>
	          </div>
          </div>
          <!-- //Comments -->


          <!-- Comment form -->
          <div class="col-md-8">
             <div class="panel panel-default comment-panel">
                <div class="panel-heading"><h4><i class="fa fa-comment" aria-hidden="true"></i> Add comment</h4></div>
				  <div class="panel-body">
					    <form class="form-horizontal">
						  <div class="form-group">
						    <label for="name" class="col-sm-2 control-label">Full Name</label>
						    <div class="col-sm-5">
						      <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="email" class="col-sm-2 control-label">E-Mail</label>
						    <div class="col-sm-5">
						      <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="comment" class="col-sm-2 control-label">Comment</label>
						    <div class="col-sm-10">
						      <textarea class="form-control" id="comment" name="comment" rows="4">Type your comment here</textarea>
						    </div>
						  </div>
						  
						  <div class="form-group pull-right">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">Submit</button>
						    </div>
						  </div>
					</form> 
          	
				  </div>
				</div>
			</div>

          <!-- //Comment form -->
  </div>

<?php include_once"includes/footer.php"; ?>
