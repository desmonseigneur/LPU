<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    $productType = $_POST["productType"];
	    header("Location: $productType.php");
	    exit();
	} ?>
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
		<title>Bags Section</title>
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
		<h1 class="title" style="font-size:70px; font-family:Algerian; color:black">Bayong ni Aling Alaine</h1>
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
					<img class="product-image" src="uploads/Bags/Bayong.png" data-bs-toggle="tooltip" data-bs-html="true" title="Bayong<br>Price: Php.250.00" width="170" height="180" alt="Bayong" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px" onclick="handleItems('Bayong', '250.00')">
					<img class="product-image" src="uploads/Bags/Bogg Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Bogg Bag<br>Price: Php.1,876.93" width="170" height="180" alt="Bogg Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Bogg Bag', '1876.93')">
					<img class="product-image" src="uploads/Bags/Cornhole Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Cornhole Bag<br>Price: Php.2,805.09" width="170" height="180" alt="Cornhole Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Cornhole Bag', '2805.09')">
					<img class="product-image" src="uploads/Bags/Crossbody Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Cross-body Bag<br>Price: Php.1,722.76" width="170" height="180" alt="Cross-body Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Cross-body Bag', '1722.76')">
					<img class="product-image" src="uploads/Bags/Duffel Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Duffel Bag<br>Price: Php.3,384.47" width="170" height="180" alt="Duffel Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Duffel Bag', '3384.47')">
					<img class="product-image" src="uploads/Bags/Fashion Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Fashion Bag<br>Price: Php.5,147.37" width="170" height="180" alt="Fashion Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Fashion Bag', '5147.37')">
					<img class="product-image" src="uploads/Bags/Hand Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Hand Bag<br>Price: Php.1,840.73" width="170" height="180" alt="Hand Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Hand Bag', '1840.73')">
					<img class="product-image" src="uploads/Bags/Laptop Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Laptop Bag<br>Price: Php.3,848.36" width="170" height="180" alt="Laptop Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Laptop Bag', '3848.36')">
					<img class="product-image" src="uploads/Bags/Leather Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Leather Bag<br>Price: Php.2,487.79" width="170" height="180" alt="Leather Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Leather Bag', '2487.79')">
					<img class="product-image" src="uploads/Bags/Luxurious Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Luxurious Bag<br>Price: Php.5,678.99" width="170" height="180" alt="Luxurious Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Luxurious Bag', '5678.99')">
					<img class="product-image" src="uploads/Bags/Mesh Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Mesh Bag<br>Price: Php.2,069.79" width="170" height="180" alt="Mesh Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Mesh Bag', '2069.79')">
					<img class="product-image" src="uploads/Bags/Oundle Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Oundle Bag<br>Price: Php.2,630.94" width="170" height="180" alt="Oundle Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Oundle Bag', '2630.94')">
					<img class="product-image" src="uploads/Bags/Paper Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Paper Bag<br>Price: Php.10.50" width="170" height="180" alt="Paper Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Paper Bag', '10.50')">
					<img class="product-image" src="uploads/Bags/Reusable Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Reusable Bag<br>Price: Php.50.50" width="170" height="180" alt="Reusable Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Reusable Bag', '50.50')">
					<img class="product-image" src="uploads/Bags/Saddle Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Saddle Bag<br>Price: Php.2,846.24" width="170" height="180" alt="Saddle Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Saddle Bag', '2846.24')">
					<img class="product-image" src="uploads/Bags/Shopping Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Shopping Bag<br>Price: Php.1,173.76" width="170" height="180" alt="Shopping Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Shopping Bag', '1173.76')">
					<img class="product-image" src="uploads/Bags/Shoulder Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Shoulder Bag<br>Price: Php.3,203.65" width="170" height="180" alt="Shoulder Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Shoulder Bag', '3203.65')">
					<img class="product-image" src="uploads/Bags/Smart Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Smart Bag<br>Price: Php.4,883.73" width="170" height="180" alt="Smart Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Smart Bag', '4883.73')">
					<img class="product-image" src="uploads/Bags/String Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="String Bag<br>Price: Php.100.00" width="170" height="180" alt="String Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('String Bag', '100.00')">
					<img class="product-image" src="uploads/Bags/Tote Bag.png" data-bs-toggle="tooltip" data-bs-html="true" title="Tote Bag<br>Price: Php.140.00" width="170" height="180" alt="Tote Bag" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Tote Bag', '140.00')">
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
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6">
											Quantity:
										</div>
										<div class="col-md-6">
											<input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="Quantity" min="1">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6">
											Price:
										</div>
										<div class="col-md-6">
											<input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemPrice">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6" style="white-space:nowrap;">
											Discount Amount:
										</div>
										<div class="col-md-6">
											<input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discount">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6">
											Discounted Amount:
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
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
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalQuantity">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6" style="white-space:nowrap;">
											Total Discount Given:
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalDiscount">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6">
											Total Discounted Amount:
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalDiscounted">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6">
											Cash Given:
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="Cash">
										</div>
									</div>
								</li>
								<li class="list-group-item border-0">
									<div class="row align-items-center">
										<div class="col-md-6">
											Change:
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Change">
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
										<button type="button" class="btn btn-dark w-100">Update</button>
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