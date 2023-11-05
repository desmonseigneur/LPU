<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/user_design.css">
		<link rel="stylesheet" href="css/sidebar_design.css">
		<title>User Account Information</title>
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
				<ul class="nav sidebar-nav">
					<div class="sidebar-header">
						<div class="sidebar-brand">
							<a href="admin.php">Tindahan</a>
						</div>
					</div>
					<li><a href="admin.php">Home</a></li>
					<li><a href="employee_registration.php">Employee Registration</a></li>
					<li><a href="employee_report.php">Employee Report</a></li>
					<li><a href="payroll.php">Payroll</a></li>
					<li><a href="payroll_report.php">Payroll Report </a></li>
					<li><a href="A_Kitchen.php">POS</a></li>
					<li><a href="A_report.php">POS Report</a></li>
					<li><a href="user_account_info.php">User Account</a></li>
					<li><a href="login.php">Log Out</a></li>
				</ul>
			</nav>
			<div id="page-content-wrapper">
				<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
				<span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
				</button>
			</div>
		</div>
		<div class="container">
			<div class="page_border">
				<form id="pic-upload" class="a-form" enctype="multipart/form-data"method="post" width='840'>
					<h1><b>User Account Information</b></h1>
					<div class="a-form-group mt-3" style="float:left; clear:block; width:20%;" >
						<div id="pic-box" style='width:170px; height:150px; overflow:hidden; margin-top:7px; margin-left:35px; background:none; border:thin solid #d3d3d3'>
							<img src="uploads/Picture.png" alt="Picture" style="width: 100%; height:auto;">
						</div>
					</div>
				</form>
				<form id="form_employee_registration_save" class="a-form" action=""method="post" width='840'>
					<div class="a-form-group mt-3" width='480'>
						<div class="a-fields-group mt-0">
							<div class="form-row">
								<div class="form-group col">
									<label for="fname" class="mb-0 control-label">First Name</label>
									<input type="text" class="form-control mt-0"name="fname" id="fname" value="" readonly>
								</div>
								<div class="form-group col-3">
									<label for="mname" class="mb-0">Middle Name</label>
									<input type="text" class="form-control mt-0"name="mname" id="mname" readonly>
								</div>
								<div class="form-group col">
									<label for="lname" class="mb-0 control-label">Last Name</label>
									<input type="text" class="form-control mt-0"name="lname" id="lname" value="" readonly>
								</div>
								<div class="form-group col-2">
									<label for="suffix" class="mb-0">Suffix</label>
									<input type="text" class="form-control mt-0"name="suffix" id="suffix" readonly>
								</div>
								<div class="form-group col-2">
									<label for="suffix" class="mb-0">Department</label>
									<input type="text" class="form-control mt-0"name="suffix" id="suffix" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<label for="fname" class="mb-0 control-label">Designation</label>
									<input type="text" class="form-control mt-0"name="fname" id="fname" value="" readonly>
								</div>
								<div class="form-group col-3">
									<label for="mname" class="mb-0">Username</label>
									<input type="text" class="form-control mt-0"name="mname" id="mname">
								</div>
								<div class="form-group col">
									<label for="lname" class="mb-0 control-label">Password</label>
									<input type="text" class="form-control mt-0"name="lname" id="lname" value="">
								</div>
							</div>
							<br>
							<div class="form-row">
								<div class="form-group col">
									<label for="fname" class="mb-0 control-label">Confirm Password</label>
									<input type="text" class="form-control mt-0"name="fname" id="fname" value="">
								</div>
								<div class="form-group col-3">
									<label for="mname" class="mb-0">User Type</label>
									<input type="text" class="form-control mt-0"name="mname" id="mname">
								</div>
								<div class="form-group col">
									<label for="lname" class="mb-0 control-label">User Status</label>
									<input type="text" class="form-control mt-0"name="lname" id="lname" value="">
								</div>
								<div class="form-group col-2">
									<label for="suffix" class="mb-0">Employee Number</label>
									<input type="text" class="form-control mt-0"name="suffix" id="suffix">
								</div>
							</div>
							<button id= "update" type="update">Update</button>
							<button id= "delete" type="delete">Delete</button>
							<button id= "cancel" type="cancel">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
		<script  src="js/script.js"></script>
	</body>
</html>