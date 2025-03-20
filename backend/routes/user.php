<?php 
session_start();


include($_SERVER['DOCUMENT_ROOT'] . '/WIKI_OJT_PROJECT/backend/config/dbconnection.php');

$db = mysqli_connect('localhost', 'root', '', 'wiki');

$username = "";
$email = ""; 
$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
    }
  
    // Password validation using regular expression
    if (strlen($password_1) < 6) {
      array_push($errors, "Password must be at least 6 characters long");
    }
    if (!preg_match('/[A-Za-z]/', $password_1)) {
      array_push($errors, "Password must contain at least one letter");
    }
    if (!preg_match('/[0-9]/', $password_1)) {
      array_push($errors, "Password must contain at least one number");
    }
    if (!preg_match('/[!$@%&_]/', $password_1)) {
      array_push($errors, "Password must contain at least one special character (!$@%&_)");
    }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1); //encrypt the password before saving in the database
  
      $query = "INSERT INTO user (username, email, password) VALUES('$username', '$email', '$password')";
      $result = mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: /WIKI_OJT_PROJECT/frontend/client/home/home.php');
;
    }
  }

  //LOGIN USER 
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      $rowCount = mysqli_num_rows($results); // Save the result for reuse
  
      switch ($rowCount) {
          case 1: // Successful login
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: /WIKI_OJT_PROJECT/frontend/client/home/home.php');
              exit();
  
          default: // Any other case, handle as an error
              array_push($errors, "Wrong username/password combination");
              break;
      }
  }

  // If there are errors, store them in session and redirect back
  if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('location: /WIKI_OJT_PROJECT/frontend/client/home/home.php');
    exit();
    
  }
}
  

?>