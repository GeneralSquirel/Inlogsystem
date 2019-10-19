<?php

session_start();

//init variables
$username = "";
$email = "";

$errors = array();

//database connection
$db = mysqli_connect('localhost','root','','login_system') or die("no db connection");

//register users
$username = mysqli_real_escape_string($db,$_POST['username']);
$email = mysqli_real_escape_string($db,$_POST['email']);

$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
$surname = mysqli_real_escape_string($db,$_POST['surname']);

$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
//FORM VALIDATION
if (empty($username)) {array_push($errors,"username is required");}
if (empty($firstname)) {array_push($errors,"firstname is required");}
if (empty($surname)) {array_push($errors,"surname is required");}
if (empty($email)) {array_push($errors,"email is required");}
if (empty($password_1)) {array_push($errors,"password is required");}
if ($password_1 != $password_2) {array_push($errors,"passwords must match");}

//check db for copy emails and username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email'LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {
  if ($user['username'] === $username) {array_push($errors,"username already exists.");}
  if ($user['email'] === $email) {array_push($errors,"user with that email already exists.");}
}

//register user if no errors

 if (count($errors) === 0 ) {
   $password = md5($password_1);//password ecrption
   $query = "INSERT INTO user (username, firstname, surname, email, password )";

   mysqli_query($db,$query);
   $_SESSION['username'] = $username;
   $_SESSION['success'] = "you are logged in";

   header('location: index.php');
 }

 ?>
