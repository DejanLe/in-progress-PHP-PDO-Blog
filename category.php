<?php
//kreiranje upita za rad sa PDO
 $query = "SELECT * FROM `category`";
 $category = $connection->query($query);
 $allcategory = $category->fetchAll(PDO::FETCH_OBJ);

  foreach ($allcategory as $allcat) {
 	echo $allcat->title, "<br>";
 }
 