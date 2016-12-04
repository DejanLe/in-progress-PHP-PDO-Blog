<?php 
include('include/header.php');
 
?>
  <!--jumbotron-->
  <div class="overlay">
	  <div class="jumbotron">
	  	<div class="container text-center">
	  		<h1>Welcome to my blog</h1> 
	  		<a href="insert.php"><button type="submit" class="btn btn-default">Insert new Post</button></a>  
	  	</div>
	  </div>
  </div>
     <div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<?php
					//kreiranje dinamicke funkcionalnosti stranice
					if (isset($_GET['opcija'])) { 
					$option = $_GET['option'];
					$file = $option .".php";
						if (file_exists($file)) 
							{
							  include_once($file);

							}

							else{
							   echo ("blogs.php");
							}
 						 }
					?>
				</div> 
			</div>
		</div>

		 <div class="about">
		   <div class="container text-center">
			   <div class="row">  
				 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				 <h2>About me</h2>
				 <p>will determine the outcome of the conditional before making a decision of what to skip over. See the next example. Using structures with conditions </p>
				 </div>
				</div>
			</div>
	 	</div>

	 	 <div class="services">
		   <div class="container text-center">
			   <div class="row">  
				 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				 <h2>Services</h2>
				  <div class="row">
				  	<div class="col-md-4">
				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  	</div>
				  	<div class="col-md-4">
				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  	</div>
				  	<div class="col-md-4">
				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  	</div>
				  </div>
				 </div>
				</div>
			</div>
	 	</div>

<?php
include('include/footer.php');
?>