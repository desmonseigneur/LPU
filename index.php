<?php
	include 'process/db_connection.php';

	$conn = OpenCon();
	$sql = "SELECT * FROM `user_accounttbl`;";
	$result = $conn->query($sql);
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user = $_POST['user'];
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
			
			if($_SESSION['privilege'] == 1){
				header("Location: admin.php");
			}elseif($_SESSION['privilege'] == 2){
				header("Refresh:0; url=A_Kitchen.php");
			}elseif($_SESSION['privilege'] == 3){
				header("Refresh:0; url=payroll.php");
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
		<title>Login page</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<link rel="stylesheet" href="css/login_design.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/login_design.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	</head>
	<body style="background: url('uploads/BG.png'); background-size: cover; background-color: rgba(255, 255, 255, 0.5);">
		<div id="login-form-wrap">
			<h2>Login</h2>
			<form id="login-form" method="post">
				<div class="wrap-input100 validate-input" data-validate="Enter username">
					<input class="input100" type="text" name="user" placeholder="User name"><i class="validation"><span></span><span></span></i>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="Password"><i class="validation"><span></span><span></span></i>
				</div>
				<div class="container-login100-form-btn m-t-32">
					<button class="login100-form-btn" type="submit" >Login</button>
				</div>
			</form>
		</div>
	</body>
</html>