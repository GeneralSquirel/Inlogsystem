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
	<link rel="stylesheet" href="styles.css">
	<script src="javascript/password.js"></script>
	<title>signup</title>
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
					<a class="dropdown-item" href="signup.php">Signup</a>
					<a class="dropdown-item" href="login.php">Login</a>
				</div>
			</li>
		</ul>
	</nav>
	<!--signup form-->
	<div class="FormBox">
		<div class="login ">
			<form action="/action_page.php" class="was-validated">
				<div class="row">
					<!--firstname-->
					<div class="form-group col">
						<label for="fname">firstname:</label>
						<input type="text" class="form-control" id="fname" placeholder="Enter firstname" name="fname" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill in your firstname.</div>
					</div>
					<!--lastname-->
					<div class="form-group col">
						<label for="lname">Lastname:</label>
						<input type="text" class="form-control" id="lname" placeholder="Enter lastname" name="lname" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill in your Lastname.</div>
					</div>
				</div>
				<div class="row">
					<!--username-->
					<div class="form-group col">
						<label for="uname">Username:</label>
						<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill in your Username.</div>
					</div>
					<!-- email -->
					<div class="form-group col">
						<label for="email">E-mail:</label>
						<input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill in your E-mail.</div>
					</div>
				</div>
				<div class="row">
					<!--pasword -->
					<div class="form-group col">
						<label for="psw">Password:</label>
						<input type="password" class="form-control" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
						title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<div id="message" style="display:none;">
							<h3>Password must contain the following:</h3>
							<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
							<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
							<p id="number" class="invalid">A <b>number</b></p>
							<p id="length" class="invalid">Minimum <b>8 characters</b></p>
						</div>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill in your Password.</div>
					</div>
					<!--pasword check -->
					<div class="form-group col">
						<label for="Rpwd">Password Check:</label>
						<input type="password" class="form-control" id="Rpwd" placeholder="Enter password" name="Rpswd" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please repeat the password above.</div>
					</div>
				</div>
				<!-- birthday-->
				<div class="form-group">
					<label for="bday">Birthday:</label>
					<input type="date" name="bday" class="form-control" id="bday" min="2019-12-31" max="1950-12-31" required>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<footer class="Footer"></footer>
</body>
</html>
