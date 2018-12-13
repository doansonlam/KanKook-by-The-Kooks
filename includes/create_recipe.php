<?php
require("server.php");
require("errors.php");


if(isset($_POST['create_rec_req']))
{
 // variables for input data
	$recipeName = mysqli_real_escape_string($db, $_POST['recipe_name']);
	$authorName = mysqli_real_escape_string($db, $_POST['author_name']);
	$postDate = mysqli_real_escape_string($db, $_POST['post_date']);
	$level = mysqli_real_escape_string($db, $_POST['level']);
	$servings = mysqli_real_escape_string($db, $_POST['servings']);
	$coverImage = mysqli_real_escape_string($db, $_POST['cover_img']);
	$video = mysqli_real_escape_string($db, $_POST['video']);
	$directions = mysqli_real_escape_string($db, $_POST['directions']);



 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 
 // sql query for inserting data into database
 if (count($errors) == 0) {
        $sql_query = "INSERT INTO collection( collection_name) VALUES('$collectionname')";
		mysql_query($db,$sql_query);
 		echo "Collection ". $collectionname " created successfully.";}   
}
?>