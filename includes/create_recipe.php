<?php
require("server.php");
require("errors.php");


if(isset($_POST['create_col']))
{
 // variables for input data
	$collectionname = mysqli_real_escape_string($db, $_POST['collection_name']);
 // variables for input data
 if (empty($collectionname)) { array_push($errors, "Collection name is required"); }
 // sql query for inserting data into database
 if (count($errors) == 0) {
        $sql_query = "INSERT INTO collection( collection_name) VALUES('$collectionname')";
		mysql_query($db,$sql_query);
 		echo "Collection ". $collectionname " created successfully.";}   
}
?>