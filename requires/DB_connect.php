<?php

# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
const DB_HOST = 'localhost:3306';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'kankook';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno)
{
  echo "Database connection failed: " . $db->connect_error;
  exit();
}
?>
