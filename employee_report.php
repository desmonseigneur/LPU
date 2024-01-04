<?php
	include 'process/db_connection.php';
	include 'process/session_check.php';
	
	$conn = OpenCon();
	$sql = "SELECT * FROM `personal_infotbl`;";
	$result = $conn->query($sql);
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
	    $item_name = $_POST['search'];
	    $sql = "SELECT * FROM `personal_infotbl` WHERE employee_no = '$item_name' OR id = '$item_name';";
	    $result = $conn->query($sql);
	    if (!$item_name) {
	        $sql = "SELECT * FROM `personal_infotbl`;";
	        $result = $conn->query($sql);
	    }
	}
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
		<title>Employee Report</title>
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
			</div>
		</div>
		<!-- main content -->
		<div class="flex-grow-1 bg-white">
			<div class="px-5 bg-white">
				<h1 class="d-flex justify-content-center m-2" style="font-size:30px;">Aling Alaine Employee Report</h1>
				<form action="" method="post" class="input-group mb-3 mt-3" style="height: 2rem; width:250px">
					<input type="text" class="form-control" aria-describedby="button-addon2" placeholder="Search item name" name='search'>
					<button class="btn btn-outline-secondary" type="submit" id="search_button">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24" class="">
							<path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
						</svg>
					</button>
				</form>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Employee Number</th>
							<th scope="col">Employee Name</th>
							<th scope="col">Date of Birth</th>
							<th scope="col">Qual. Dependents</th>
							<th scope="col">Civil Status</th>
							<th scope="col">Department</th>
							<th scope="col">Designation</th>
							<th scope="col">Employee Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if ($result) {
							    while ($item = $result->fetch_assoc()) {
							        echo "
							        <tr class='clickable-row' style='cursor: pointer' data-href='employee_registration.php?id={$item['id']}'>
							            <td>$item[employee_no]</td>
							            <td>$item[fname] $item[mname] $item[lname]</td>
							            <td>$item[birth_date]</td>
							            <td>$item[qualified_dependent_status]</td>
							            <td>$item[civil_status]</td>
							            <td>$item[department]</td>
							            <td>$item[designation]</td>
							            <td>$item[employee_status]</td>
							        </tr>
							        ";
							    }
							}
							?>
					</tbody>
				</table>
			</div>
		</div>
		</div>
	</body>
	<script>
		$(document).ready(function() {
		        $(".clickable-row").click(function() {
		            window.location = $(this).data("href")
		        })
		    })
	</script>
</html>