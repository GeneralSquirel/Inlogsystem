<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---bootstrap links--->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- custom links -->
	<link rel="stylesheet" href="styles.css">
	<script src="javascript/password.js" charset="utf-8"></script>
	<title>login</title>
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
<!---login form--->
	<div class="FormBox">
		<div class="login">
			<form action="" class="was-validated">
				<div class="form-group">
					<label for="uname">Username:</label>
					<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="remember" required> I agree to having an account
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Check this checkbox to continue.</div>
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<footer class="Footer"></footer>
</body>
</html>
