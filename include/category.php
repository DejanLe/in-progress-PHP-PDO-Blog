<?php
//kreiranje upita za rad sa PDO
 $query = "SELECT * FROM `category`";
 $category = $connection->query($query);
 $allcategory = $category->fetchAll(PDO::FETCH_OBJ);

  foreach ($allcategory as $allcat) {
  	$qblog = "SELECT * FROM `post` WHERE `category_id` = '".$allcat->id ."' ";
  	$blogs = $connection->query($qblog);
  	$countposts = $blogs->rowCount();
 	echo "<a href='index.php?option=category&id=". $category->id ."'>",  $allcat->title . "(".$countposts.")</a><br>";
 }
 