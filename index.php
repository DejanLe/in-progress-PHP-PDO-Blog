<?php 
include('header.php');
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
					 	 

					 	   $pos->content .

					 	   '<p class="post-meta">Posted by: ' . $pos->author .'</p>'.

					 	   $pos->date;
					 }
					?>
				</div>

				<div class="col-md-3">
				<strong><i>Tags</i></strong>  <br>

				<?php 	foreach ($post as $pos  ) 
 
						echo '<a class="btn btn-success" href="#">'. $pos->tags .'</a>' ;  
				 ?>
				</div>
			</div>
	</div>

<?php
include('footer.php');
?>