<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/login_design.css">
		<title>Log In</title>
	</head>
	<body>
		<div id="login-form-wrap">
			<h2>Login</h2>
			<form id="login-form">
				<p><input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i></p>
				<p><input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i></p>
				<p>  <input type="submit" id="login" value="Login"></p>
			</form>
			<div id="create-account-wrap">
				<p>Not a member? <a href="#">Create Account</a>
				<p>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>