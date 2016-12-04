<?php 
include('header.php');
include('jumbotron.php');
?>

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

				<!--category-->
				<div class="col-md-3"> 
				<a href="index.php?option=category">Category</a>
				<hr>
					<?php
					//kreiranje dinamicke funkcionalnosti stranice
					$option = $_GET['option'];
					$file = $option .".php";
						if (file_exists($file)) 
							{
							  include_once($file);

							}

							else{
							   die("page not exists!")  ;
							}
 						 
					?>

				 </div>
			</div>
	</div>

<?php
include('footer.php');
?>