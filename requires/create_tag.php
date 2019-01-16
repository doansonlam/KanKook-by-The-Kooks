<?php
include_once("server.php");
include_once("errors.php");

$query = "INSERT INTO tags ( tag_name) VALUES('cat')";
mysqli_query($db, $query);
?>