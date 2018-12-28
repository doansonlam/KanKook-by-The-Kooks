<?php
 
  include_once("errors.php");
  include_once("server.php");


  if (isset($_POST['register_req'])) {
  // receive all input values from the Register.php
  $userName = mysqli_real_escape_string($db, $_POST['username']);
  $firstName = mysqli_real_escape_string($db,$_POST['firstname']);
  $lastName = mysqli_real_escape_string($db,$_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // Empty() to validate whether the user have entered to required fields
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure the accont does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' AND email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // Retrive query result and verify with 
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = password_hash($password_1,PASSWORD_DEFAULT);//encrypt the password before saving in the database

    $query = "INSERT INTO users (username, firstname, lastname, email, password) 
          VALUES('$username', '$firstName', '$lastName', '$email', '$password')";
    mysqli_query($db, $query);
    header("Location: ../index.php");
  }
}
?>
