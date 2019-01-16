<?php
require("server.php");
require("errors.php");


if(isset($_POST['create_col']))
{
 // variables for input data
	$collectionName = mysqli_real_escape_string($db, $_POST['collection_name']);
 // variables for input data
 if (empty($collectionName)) { array_push($errors, "Collection name is required"); }
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO (first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
 mysql_query($sql_query);
        
        // sql query for inserting data into database
 
}
?>