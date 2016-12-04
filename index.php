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
				  		<div class="panel panel-body">
				  			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
							<path d="M32 18.451l-16-12.42-16 12.42v-5.064l16-12.42 16 12.42zM28 18v12h-8v-8h-8v8h-8v-12l12-9z"></path>
							</svg>
					  		<h3>The point of using Lorem Ipsum </h3>
					  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  		</div>
				   </div>
				  	
				  	<div class="col-md-4">
				  		<div class="panel panel-body">
				  	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
						<path d="M30 0h2v23c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-11.501l-16 3.556v15.444c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-19.501l18-4z"></path>
						</svg>

				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  		</div>
				  	</div>
				  	<div class="col-md-4">
				  	<div class="panel panel-body">
				  	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
						<path d="M12 9c0-2.761 2.239-5 5-5s5 2.239 5 5c0 2.761-2.239 5-5 5s-5-2.239-5-5zM0 9c0-2.761 2.239-5 5-5s5 2.239 5 5c0 2.761-2.239 5-5 5s-5-2.239-5-5zM24 19v-3c0-1.1-0.9-2-2-2h-20c-1.1 0-2 0.9-2 2v10c0 1.1 0.9 2 2 2h20c1.1 0 2-0.9 2-2v-3l8 5v-14l-8 5zM20 24h-16v-6h16v6z"></path>
						</svg>
				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  		</div>
				  	</div>
				  </div>
				 </div>
				</div>
			</div>
	 	</div>

	 	 <div class="portfolio">
		   <div class="container text-center">
			   <div class="row">  
				 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				 <h2 class="text-center">Portfolio</h2>
				  <div class="row">
				  	<div class="col-md-12">
				  		<div class="panel panel-body">
				  	<svg  fill="#1F535F" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 32 32">
						<path d="M32 18.451l-16-12.42-16 12.42v-5.064l16-12.42 16 12.42zM28 18v12h-8v-8h-8v8h-8v-12l12-9z"></path>
						</svg>
				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  		</div>
				  	</div>
				  		<div class="col-md-12">
				  			<div class="panel panel-body">
				  	<svg fill="#1F535F" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 32 32">
						<path d="M30 0h2v23c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-11.501l-16 3.556v15.444c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-19.501l18-4z"></path>
				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  		</svg>
				  	</div>
				  		<div class="col-md-12">
				  			<div class="panel panel-body">
				  	<svg fill="#1F535F" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 32 32">
						<path d="M12 9c0-2.761 2.239-5 5-5s5 2.239 5 5c0 2.761-2.239 5-5 5s-5-2.239-5-5zM0 9c0-2.761 2.239-5 5-5s5 2.239 5 5c0 2.761-2.239 5-5 5s-5-2.239-5-5zM24 19v-3c0-1.1-0.9-2-2-2h-20c-1.1 0-2 0.9-2 2v10c0 1.1 0.9 2 2 2h20c1.1 0 2-0.9 2-2v-3l8 5v-14l-8 5zM20 24h-16v-6h16v6z"></path>
						</svg>
				  		<h3>The point of using Lorem Ipsum </h3>
				  		<p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				  		</div>
				  	</div>
				 </div>
			</div>
		</div>
	</div>
	</div>
</div>


<?php
include('include/footer.php');
?>