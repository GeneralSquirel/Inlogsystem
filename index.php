<?php
session_start();

if (isset($_SESSION['username'])) {

  $_SESSION['msg'] = "You have to login to see this page";
  header("location: login.php");
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location:login.php");
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<!--bootstrap links-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 	<!-- custom links -->
 	<link rel="stylesheet" href="">
 	<script src=""></script>
 	<title>Register</title>
 </head>
 <body>
 	<div class="Banner"></div>
 	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 		<!-- Brand/logo -->
 		<a class="navbar-brand" href="index.php"><img src="image/logo.png" alt="logo" style="width:40px;"></a>
 		<!-- nav Links -->
 		<ul class="navbar-nav">
 			<li class="nav-item">
 				<a class="nav-link" href="home.php">Home</a>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" href="#">products</a>
 			</li>
 			<!-- nav Dropdown -->
 			<li class="nav-item dropdown">
 				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">account</a>
 				<div class="dropdown-menu">
 					<a class="dropdown-item" href="register.php">register</a>
 					<a class="dropdown-item" href="login.php">Login</a>
 				</div>
 			</li>
 		</ul>
 	</nav>

 	<!--register form-->
 	<h2>Registration</h2>

 <footer class="Footer"></footer>
 </body>
 </html>
