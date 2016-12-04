<?php
 
try{
	$connection = new PDO('mysql:host=localhost; dbname=blog', 'root', '');
 	$connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch  
	(PDOException $e){
		echo $e->getMessage(); 
		die(); 
	}
$query = $connection->query('SELECT * FROM `post`');
$post = $query->fetchAll(PDO::FETCH_OBJ);