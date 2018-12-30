<?php

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno)
{
  echo "Database connection failed: " . $db->connect_error;
  exit();
}
?>
