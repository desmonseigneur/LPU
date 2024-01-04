<?php
	include 'process/db_connection.php';
	$conn = OpenCon();
	$sql = "SELECT * FROM `user_accounttbl`;";
	$result = $conn->query($sql);
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$sql = "SELECT COUNT(*) AS count
	    FROM user_accounttbl
	    WHERE username = '$user' AND password = '$pass';
	    ";
		$result = mysqli_fetch_assoc($conn->query($sql));
	
		if ($result['count'] > 0 && $user != "" && $pass != "") {
			$sql = "SELECT * FROM user_accounttbl WHERE username = '$user' AND password = '$pass';";
			$result = mysqli_fetch_assoc($conn->query($sql));
			session_start();
			$_SESSION['privilege'] = $result['privilege'];
			$_SESSION['username'] = $result['username'];
			$_SESSION['employee_no'] = $result['employee_no'];
	
			if ($_SESSION['privilege'] == 1) {
				header("Refresh:0; url=Admin_page.php");
			} elseif ($_SESSION['privilege'] == 2) {
				header("Refresh:0; url=Payroll_page.php");
			} elseif ($_SESSION['privilege'] == 3) {
				header("Refresh:0; url=Shop.php");
			}
	
			exit();
		} else {
			echo "<script>";
			echo "alert('Invalid credentials!');";
			echo "</script>";
		}
	}
	?>
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
				<p>
				<div data-validate="Enter username"><input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i></div>
				</p>
				<p>
				<div data-validate="Enter password"><input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i></div>
				</p>
				<p> <input type="submit" id="login" value="Login"></p>
			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>