<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---bootstrap links-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- custom links -->
	<link rel="stylesheet" href="styles.css">
	<script src="javascript/password.js" charset="utf-8"></script>
	<title>home</title>
</head>
<body>
	<div class="Banner"></div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand/logo -->
		<a class="navbar-brand" href="index.php">
			<img src="image/logo.png" alt="logo" style="width:40px;">
		</a>
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
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				account
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="signup.php">Signup</a>
				<a class="dropdown-item" href="login.php">Login</a>
			</div>
		</li>
	</nav>
	<div class="Contentbox"></div>
	<footer class="Footer"></footer>
</body>
</html>