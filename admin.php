<?php
	include 'process/db_connection.php';
	include 'process/session_check.php';
	
	$conn = OpenCon();
	$sql = "SELECT * FROM `salestbl` ORDER BY id DESC LIMIT 5;";
	$result = $conn->query($sql);

	$sql2 = "SELECT id FROM `personal_infotbl`;";
	$result2 = mysqli_fetch_all($conn->query($sql2));
	
	$sql3 = "SELECT COUNT(privilege) AS privilege_count FROM user_accounttbl WHERE privilege != 0 GROUP BY privilege WITH ROLLUP;";
	$result3 = mysqli_fetch_all($conn->query($sql3));
	?>
	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Latest jQuery -->
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
		<!-- Latest Popper.js -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
		<!-- Latest Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Latest Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/sidebar_design.css">
		<script src="js/script.js"></script>
		<title>Home</title>
	</head>
	<body style="background: url('uploads/BG.png'); background-size:cover;">
		<div id="wrapper">
			<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
				<ul class="nav sidebar-nav">
					<div class="sidebar-header">
						<div class="sidebar-brand">
							<a href="admin.php" class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">Tindahan</a>
							<a href="#" class="<?php echo $user_privilege == 2 ? '' : 'd-none' ?>">Tindahan</a>
							<a href="#" class="<?php echo $user_privilege == 3 ? '' : 'd-none' ?>">Tindahan</a>
						</div>
					</div>
					<li><a href="admin.php" class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">Home</a></li>
					<li><a href="employee_registration.php" class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">Employee Registration</a></li>
					<li><a href="employee_report.php" class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">Employee Report</a></li>
					<li><a href="payroll.php" class="<?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">Payroll</a></li>
					<li><a href="payroll_report.php" class="<?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">Payroll Report </a></li>
					<li><a href="A_Kitchen.php"class="<?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>">POS</a></li>
					<li><a href="A_report.php"class="<?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>">POS Report</a></li>
					<li><a href="user_account_info.php" class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">User Account</a></li>
					<li><a href="user_account_report.php" class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">Account Report</a></li>
					<li><a href="index.php">Log Out</a></li>
				</ul>
			</nav>
			<div id="page-content-wrapper">
				<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
				<span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
				</button>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2" style="margin: auto; background: #fff">
							<header class="intro">
								<h1>Tindahan ni Aling Alaine</h1>
								<p>She got these, ALL. FOR. YOU.</p>
							</header>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>