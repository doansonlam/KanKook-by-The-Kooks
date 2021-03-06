<?php
  $username = $firstname = $lastname = $password_1 = $password_2 = "";
  $error_message = array(); 
  
  if(isset($_POST['register_req'])) {
    session_start();

    include("DB_connect.php");
   

    $username = check_input($_POST['username']);
    if (!preg_match ("/[^a-zA-Z0-9._-]/",$username))
    { array_push ($error_message,"Username is not valid"); }
    $firstname = check_input($_POST['firstname']);
    if (!preg_match ("/[^a-zA-Z]/",$firstname))
    { array_push ($error_message,"Firstname is not valid"); }
    $lastname = check_input($_POST['lastname']);
    if (!preg_match ("/[^a-zA-Z]/",$lastname))
    { array_push ($error_message,"Lastname is not valid"); }
    $email    = check_input($_POST['email']);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
    { array_push ($error_message,"E-mail address not valid");}
    




  // check_unput removes extra line, space, tabs, slashes 
  function check_input($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
  }
  // receive all input values from the Register.php
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  /* Empty() to validate whether the user have entered to required fields
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");} */


  // first check the database to make sure the accont does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' AND email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // Retrive query result and verify with 
  if ($user) {
    if ($user['username'] === $username) {
      array_push($error_message, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($error_message, "email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = password_hash($password_1,PASSWORD_DEFAULT);//encrypt the password before saving in the database

    $query = "INSERT INTO users (username, firstname, lastname, email, password) 
          VALUES('$username', '$firstName', '$lastName', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
  	$_SESSION['success'] = "Access Granted";
  }
  else {
    header("Location: ../register.php");
  }
}
?>

