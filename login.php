<?php include('server.php') ?>
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
	<title>login</title>
</head>
<body>
	<div class="Banner"></div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand/logo -->
		<a class="navbar-brand" href="index.php"><img src="image/logo.png" alt="logo" style="width:40px;"></a>
		<!-- nav Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
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
  <h2>Login</h2>
	<!--register form-->
	<form method="post" action="login.php">
		<!--username-->
		<div class="form-group">
			<label>Username:</label>
			<input type="text" name="username" class="form-control">
		</div>
		<!--password-->
		<div class="form-group">
			<label>password</label>
			<input type="password" name="password_1" class="form-control">
		</div>


		<input type="submit" name="login_user" class="btn btn-primary">
		<p>not a user? <a href="register.php"><b>register</b></a></p>

</form>

<footer class="Footer"></footer>
</body>
</html>
