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
				<div class="col-lg-8 col-md-offset-1"> 
				
					<?php 	foreach ($post as $pos  ) 
						 
					  { 
					   

					   echo '<a href="#">'. '<h1>'. $pos->title .'</h1>' .'</a>' . 
					 	  $pos->date .
					 	  '<p class="post-meta">Posted by: ' . $pos->author .'</p>'.
					 	  '<a href="index.php?option=category">Category: ' . $pos->category_id  .'</a><br>'.
					 	   $pos->content ;  

					 	  
					 }
					 
					?>
				 
					
				</div>

				<!--category-->
				<div class="col-md-3"> 
				<a href="index.php?option=category">Category</a>
				<hr>
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
							   die("page not exists!")  ;
							}
 						 }
					?>

				 </div>
			</div>
	</div>

<?php
include('include/footer.php');
?>