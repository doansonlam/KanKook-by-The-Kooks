<?php
   session_start();
   include_once("server.php");
   $_SESSION['success'] = "";
   $errors = array(); 

  if (isset($_POST['login_req'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Checking whether they have entered the username and password or not.
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
     array_push($errors, "Password is required");
    }

    // Proceed to verify and validate user's input.
    if (count($errors) == 0) {
      $query = "SELECT * FROM users WHERE username='$username'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) 
      {
        $row = mysqli_fetch_assoc($results);
          if(password_verify($password,$row['password'])){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Access Granted";
            echo "Welcome " . $username; 
          }
            else{
              echo $errors. " Wrong username/password combination";
            }
      }
    else {
      array_push($errors, "Wrong username/password combination");
    }
    }  
  }
?>


