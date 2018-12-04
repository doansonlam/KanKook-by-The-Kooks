<?php
   

$dbServer = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbName = "kankook";

$db = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);
if ($db->connect_errno)
{
	echo "Database connection failed: " . $db->connect_error;
	exit();
}
?>