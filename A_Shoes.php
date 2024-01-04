<?php
	include 'process/pos_functions.php';
	include 'process/session_check.php';
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    $productType = $_POST["productType"];
	    header("Location: $productType.php");
	    exit();
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
		<link rel="stylesheet" href="css/Design.css">
		<link rel="stylesheet" href="css/sidebar_design.css">
		<title>Shoes Section</title>
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
		<h1 class="title" style="font-size:70px; font-family:Algerian; color:black">Sapatos ni Aling Alaine</h1>
		<!-- Title -->
		<div class="container">
			<div style="float:center">
				<form id="productForm" method="post">
					<label for="productType">Product Type:</label><br>
					<select id="productType" name="productType">
						<option value="" selected disabled hidden>Choose Product</option>
						<option value="A_Kitchen">Kitchen Utensils</option>
						<option value="A_Lights">Lights</option>
						<option value="A_Bags">Local Bag Products</option>
						<option value="A_Perfumes">Perfumes</option>
						<option value="A_Shoes">Shoes</option>
					</select>
					<br> <!-- This is my dropdown contents -->
				</form>
				<div>
					<img class="product-image" src="uploads/Shoes/Black Boots.png" data-bs-toggle="tooltip" data-bs-html="true" title="Black Boots<br>Price: Php. 1,163.45" width="170" height="180" alt="Black Boots" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Black Boots', '1163.45')">
					<img class="product-image" src="uploads/Shoes/Brown Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="Brown Shoes<br>Price: Php.991.51" width="170" height="180" alt="Brown Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Brown Shoes', '991.51')">
					<img class="product-image" src="uploads/Shoes/Combat Boots.png" data-bs-toggle="tooltip" data-bs-html="true" title="Combat Boots<br>Price: Php.2,068.78" width="170" height="180" alt="Combat Boots" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Combat Boots', '2068.78')">
					<img class="product-image" src="uploads/Shoes/Cowboy Boots.png" data-bs-toggle="tooltip" data-bs-html="true" title="Cowboy Boots<br>Price: Php.4,585.40" width="170" height="180" alt="Cowboy Boots" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Cowboy Boots', '4585.40')">
					<img class="product-image" src="uploads/Shoes/Crocs.png" data-bs-toggle="tooltip" data-bs-html="true" title="Crocs<br>Price: Php.2,044.61" width="170" height="180" alt="Crocs" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Crocs', '2044.61')">
					<img class="product-image" src="uploads/Shoes/Flip Flops.png" data-bs-toggle="tooltip" data-bs-html="true" title="Flip Flops<br>Price: Php.60.99" width="170" height="180" alt="Flip Flops" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Flip Flops', '60.99')">
					<img class="product-image" src="uploads/Shoes/High Heels.png" data-bs-toggle="tooltip" data-bs-html="true" title="High Heels<br>Price: Php.2,529.06" width="170" height="180" alt="High Heels" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('High Heels', '2529.06')">
					<img class="product-image" src="uploads/Shoes/Hiker Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="Hiker Shoes<br>Price: Php.4,795.30" width="170" height="180" alt="Hiker Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Hiker Shoes', '4795.30')">
					<img class="product-image" src="uploads/Shoes/Leather Boots.png" data-bs-toggle="tooltip" data-bs-html="true" title="Leather Boots<br>Price: Php.5,222.52" width="170" height="180" alt="Leather Boots" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Leather Boots', '5222.52')">
					<img class="product-image" src="uploads/Shoes/Leather Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="Leather Shoes<br>Price: Php.1,923.55" width="170" height="180" alt="Leather Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Leather Shoes', '1923.55')">
					<img class="product-image" src="uploads/Shoes/Lowcut Skate Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="Low-cut Skate Shoes<br>Price: Php.3,631.64" width="170" height="180" alt="Low-cut Skate Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Low-cut Skate Shoes', '3631.64')">
					<img class="product-image" src="uploads/Shoes/Rain Boots.png" data-bs-toggle="tooltip" data-bs-html="true" title="Rain Boots<br>Price: Php.500.99" width="170" height="180" alt="Rain Boots" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Rain Boots', '500.99')">
					<img class="product-image" src="uploads/Shoes/Running Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="Running Shoes<br>Price: Php.23,76.09" width="170" height="180" alt="Running Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Running Shoes', '2376.09')">
					<img class="product-image" src="uploads/Shoes/Sandals.png" data-bs-toggle="tooltip" data-bs-html="true" title="Sandals<br>Price: Php.2,071.12" width="170" height="180" alt="Sandals" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Sandals', '2071.12')">
					<img class="product-image" src="uploads/Shoes/Skate Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="Skate Shoes<br>Price: Php.1,440.61" width="170" height="180" alt="Skate Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Skate Shoes', '1440.61')">
					<img class="product-image" src="uploads/Shoes/Sneakers.png" data-bs-toggle="tooltip" data-bs-html="true" title="Sneakers<br>Price: Php.4,332.74" width="170" height="180" alt="Sneakers" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Sneakers', '4332.74')">
					<img class="product-image" src="uploads/Shoes/Snow Boots.png" data-bs-toggle="tooltip" data-bs-html="true" title="Snow Boots<br>Price: Php.5,008.15" width="170" height="180" alt="Snow Boots" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Snow Boots', '5008.15')">
					<img class="product-image" src="uploads/Shoes/Sport Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="Sport Shoes<br>Price: Php.2,082.59" width="170" height="180" alt="Sport Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Sport Shoes', '2082.59')">
					<img class="product-image" src="uploads/Shoes/Timberland Boots.png" data-bs-toggle="tooltip" data-bs-html="true" title="Timberland Boots<br>Price: Php.4,000.99" width="170" height="180" alt="Timberland Boots" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Timberland Boots', '4000.99')">
					<img class="product-image" src="uploads/Shoes/White Shoes.png" data-bs-toggle="tooltip" data-bs-html="true" title="White Shoes<br>Price: Php.4,719.89" width="170" height="180" alt="White Shoes" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('White Shoes', '4719.89')">
					<!-- These are 20 items, carefully modified -->
				</div>
				<!-- inputs -->
				<div class="row">
					<div class="col-6 d-flex">
						<ul class="list-group">
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6" style="white-space:nowrap;">
										Name of an Item:
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name='item_name' value='<?php echo $item_name ?>' aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										Quantity:
									</div>
									<div class="col-md-6">
										<input type="number" class="form-control" name='quantity' value='<?php echo $quantity ?>' aria-label="Amount (to the nearest dollar)" id="Quantity" min="1">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										Price:
									</div>
									<div class="col-md-6">
										<input type="number" class="form-control" name='Itemprice' value='<?php echo $Itemprice ?>' aria-label="Amount (to the nearest dollar)" disabled id="ItemPrice">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6" style="white-space:nowrap;">
										Discount Amount:
									</div>
									<div class="col-md-6">
										<input type="number" class="form-control" name='discount_amount' value='<?php echo $discount_amount ?>' aria-label="Amount (to the nearest dollar)" disabled id="Discount">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										Discounted Amount:
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name='discounted_amount' value='<?php echo $discounted_amount ?>' aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
									</div>
								</div>
							</li>
						</ul>
						<ul class="list-group">
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										Total Quantity:
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name='total_quantity' value='<?php echo $total_quantity ?>' aria-label="Amount (to the nearest dollar)" disabled id="totalQuantity">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6" style="white-space:nowrap;">
										Total Discount Given:
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name='total_discount_given' value='<?php echo $total_discount_given ?>' aria-label="Amount (to the nearest dollar)" disabled id="totalDiscount">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										Total Discounted Amount:
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name='total_discounted_amount' value='<?php echo $total_discounted_amount ?>' aria-label="Amount (to the nearest dollar)" disabled id="totalDiscounted">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										Cash Given:
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name='cash_given' value='<?php echo $cash_given ?>' aria-label="Amount (to the nearest dollar)" id="Cash">
									</div>
								</div>
							</li>
							<li class="list-group-item border-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										Change:
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name='customer_change' value='<?php echo $customer_change ?>' aria-label="Amount (to the nearest dollar)" disabled id="Change">
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- calculator -->
					<div class="col-6">
						<!-- radio -->
						<div>
							<ul class="list-group list-group-horizontal gap-5">
								<li class="" style="list-style-type: none;">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="senior" value='Senior Citizen' onclick="handleDiscounts(0.30)">
									<label class="form-check-label" for="flexRadioDefault1">
									Senior Citizen
									</label>
								</li>
								<li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" value='Discount Card' id="discountCard" onclick="handleDiscounts(0.20)">
									<label class="form-check-label" for="flexRadioDefault1">
									With Disc. Card
									</label>
								</li>
								<li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" value='Employee Discount' id="employee" onclick="handleDiscounts(0.15)">
									<label class="form-check-label" for="flexRadioDefault1">
									Employee Disc.
									</label>
								</li>
								<li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" value='No discount' id="noDiscount" onclick="handleDiscounts(0)">
									<label class="form-check-label" for="flexRadioDefault1">
									No Disc.
									</label>
								</li>
							</ul>
						</div>
						<!-- buttons -->
						<div class="my-3 w-100">
							<div class="row row-cols-4 mb-3">
								<div class="col">
									<button type="button" class="btn btn-primary " style="white-space:nowrap" onclick="handleChange()">Calculate Change</button>
								</div>
								<div class="col">
									<button type="button" class="btn btn-danger w-100" onclick="handleNew()">New</button>
								</div>
								<div class="col">
									<button type="button" class="btn btn-warning w-100" id='save'>Save</button>
								</div>
								<div class="col">
									<button type="button" class="btn btn-dark w-100" id='update'>Update</button>
								</div>
								<div class="col">
									<input type="text" class="form-control d-none" name='employee_no' value='<?php echo $user_employee_name ?>' aria-label="Amount (to the nearest dollar)" disabled id="employee_no">
								</div>
							</div>
							<div class="row row-cols-5">
								<div class="col-3">
									<button type="button" class="btn btn-primary h-100 w-100" onclick="handleCalculator()">Enter</button>
								</div>
								<div class="col-9">
									<div class="row row-cols-3">
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '/'">/</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '*'">*</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '-'">-</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '+'">+</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '9'">9</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '8'">8</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '7'">7</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '6'">6</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '5'">5</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '4'">4</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '3'">3</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '2'">2</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '1'">1</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '0'">0</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '.'">.</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</main>
		</div>
		</div>
		<script>
			totalQuantity = 0
			totalDiscount = 0
			totalDiscounted = 0
		</script>
		<script src="js/pos_calculator.js" defer></script>
		<script src="js/pos_change.js" defer></script>
		<script src="js/pos_new.js" defer></script>
		<script src="js/pos_discounts.js" defer></script>
		<script src="js/pos_fill.js" defer></script>
		<script src="js/pos_save.js"></script>
		<script src="js/pos_dropdown.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>