<?php
require("server.php");
require("errors.php");


if(isset($_POST['create_rec']))
{
 // variables for input data
	 `recipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(255) COLLATE utf8_bin NOT NULL UNIQUE,
  `author_name` varchar(225) COLLATE utf8_bin NOT NULL,
  `post_date` datetime NOT NULL,
  `duration` time NOT NULL,
  `level` varchar(10) COLLATE utf8_bin NOT NULL,
  `servings` tinyint(30) NOT NULL,
  `cover_img` varchar(225) COLLATE utf8_bin NOT NULL,
  `video` varchar(225) COLLATE utf8_bin NOT NULL,
  `directions` varchar(1000) COLLATE utf8_bin NOT NULL,
	$recipeName = mysqli_real_escape_string($db, $_POST['recipe_name']);
	$authortName = mysqli_real_escape_string($db, $_POST['author_name']);
	$postDate = mysqli_real_escape_string($db, $_POST['post_date']);
	$level = mysqli_real_escape_string($db, $_POST['level']);
	$servings = mysqli_real_escape_string($db, $_POST['servings']);
	$coverImage = mysqli_real_escape_string($db, $_POST['cover_img']);
	$video = mysqli_real_escape_string($db, $_POST['video']);
	$directions = mysqli_real_escape_string($db, $_POST['directions']);



 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 // sql query for inserting data into database
 if (count($errors) == 0) {
        $sql_query = "INSERT INTO collection( collection_name) VALUES('$collectionname')";
		mysql_query($db,$sql_query);
 		echo "Collection ". $collectionname " created successfully.";}   
}
?>