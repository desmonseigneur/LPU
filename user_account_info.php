<?php
include 'process/user_account_functions.php';
include 'process/session_check.php';

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
		<title>User Account</title>
	</head>
	<body>
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
		<div class="flex-grow-4">
            <div class="container d-flex my-3">
            <div class="rounded bg-white overflow-hidden">
                    <form class="row my-2 py-4" method="post">
                        <div class="col-md-2 border-right">
                        </div>
                        <div class="col-md-3">
                            <div style="padding: 0 0;">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right fw-bold">User Account Info</h4>
                                </div>
                                <div class="col-md-8"><label class="labels">Username</label>
                                    <input type="text" class="form-control formdata" placeholder="Username" name='username' id='username' value=<?php echo $username; ?>>
                                </div> <br>
                                <div class="col-md-8"><label class="labels">Password</label>
                                    <input type="password" class="form-control formdata" placeholder="Password" name='password' id='password' value=<?php echo $password; ?>>
                                </div><br>
                                <div class="col-md-8"><label class="labels">Confirm Password</label>
                                    <input type="password" class="form-control formdata mb-2" placeholder="Confirm password" name='confirm_password' id='confirm_password' value=<?php echo $confirm_password; ?>>
                                    <span id='message'></span>
                                </div>
                                <div class="col-md-8 mb-2"><label class="labels">Privilege</label>
                                    <select class="form-control formdata form-select" name="Privilege" id="Privilege">
                                        <option value=''>Select Privilege</option>
                                        <option value="Administrator">1 Admin</option>
                                        <option value="Cashier">2 Cashier</option>
                                        <option value="Accounting">3 Accountant</option>
                                    </select>
                                </div>
                                <div class="mt-5">
                                    <button type="button" class="btn btn-primary" id='update' name='update'>Update</button>
                                    <button type="reset" class="btn btn-warning" id='delete' name='delete'>Delete</button>
                                    <button type="button" class="btn btn-light" id='cancel' name='cancel'>Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 border-right">
                        <div style="padding: 0 20px;">

                                <div class="d-flex justify-content-between align-items-center experience">
                                <h4 class="text-right fw-bold">Information</h4>
                                </div><br>

                                <div class="row mt-2">
                                    <div class="col-md-4"><label class="labels">Name</label>
                                        <input type="text" class="form-control" placeholder="" disabled name='fname' id='fname' value=<?php echo $fname; ?>>
                                    </div>
                                    <div class="col-md-4"><label class="labels">Middle Name</label>
                                        <input type="text" class="form-control" placeholder="" disabled name='mname' id='mname' value=<?php echo $mname; ?>>
                                    </div>
                                    <div class="col-md-4"><label class="labels">Surname</label>
                                        <input type="text" class="form-control" placeholder="" disabled name='lname' id='lname' value=<?php echo $lname; ?>>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-2"><label class="labels">Suffix</label>
                                        <input type="text" class="form-control" placeholder="" name='suffix' id='suffix' disabled value=<?php echo $suffix; ?>>
                                    </div>
                                    <div class="col-md-12 mb-2"><label class="labels">Department</label>
                                        <input type="text" class="form-control" placeholder="" name='department' id='department' disabled value=<?php echo $department; ?>>
                                    </div>
                                    <div class="col-md-12 mb-2"><label class="labels">Employee Number</label>
                                        <input type="text" class="form-control formdata" placeholder="" name='employee_no' id='employee_no' disabled value=<?php echo $employee_no; ?>>
                                    </div>
                                    <div class="col-md-12 mb-2"><label class="labels">Employee Status</label>
                                        <input type="text" class="form-control" placeholder="" name='employee_status' id='employee_status' disabled value=<?php echo $employee_status; ?>>
                                    </div>

                                    <div class="col-md-12 mb-2"><label class="labels">Designation</label>
                                        <input type="text" class="form-control" placeholder="" name='designation' disabled value=<?php echo $designation; ?>>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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