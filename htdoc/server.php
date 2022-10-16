<?php

session_start();

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: account.php");
}

$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

$db = mysqli_connect('localhost', 'root', '', 'swe');
  
// Registration code
if (isset($_POST['reg_user'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    echo count($errors);
    
    if (count($errors) == 0) {
         echo $username, $email, $password;
        $password = md5($password);
         
        $query = "INSERT INTO users (username, email, password)
                  VALUES('$username', '$email', '$password')";
         
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
         
        $_SESSION['success'] = "You have logged in";
         
        header('location: index.html');
    }
}
  
// User login
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
         
        $query = "SELECT * FROM users WHERE username=
                '$username' AND password='$password'";
        $results = mysqli_query($db, $query);
  
        if (mysqli_num_rows($results) == 1) {
             
            $_SESSION['username'] = $username;
             
            $_SESSION['success'] = "You have logged in!";
             
            header('location: index.html');
        }
        else {
             
            array_push($errors, "Username or password incorrect");
        }
    }
}
  
?>