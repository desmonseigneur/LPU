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
		<title>Lights Section</title>
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
		<h1 class="title" style="font-size:70px; font-family:Algerian; color:black">Ilaw-Ilaw ni Aling Alaine</h1>
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
					<img class="product-image" src="uploads/Lights/Batten Light.png" data-bs-toggle="tooltip" data-bs-html="true" title="Batten Light<br>Price: Php.1,942.81" width="170" height="180" alt="Batten Light" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Batten Light', '1942.81')">
					<img class="product-image" src="uploads/Lights/Cabinet Light.png" data-bs-toggle="tooltip" data-bs-html="true" title="Cabinet Light<br>Price: Php.2,447.67" width="170" height="180" alt="Cabinet Light" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Cabinet Light', '2447.67')">
					<img class="product-image" src="uploads/Lights/Ceiling Light.png" data-bs-toggle="tooltip" data-bs-html="true" title="Ceiling Light<br>Price: Php.1,849.75" width="170" height="180" alt="Ceiling Light" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Ceiling Light', '1849.75')">
					<img class="product-image" src="uploads/Lights/Classic Chandelier.png" data-bs-toggle="tooltip" data-bs-html="true" title="Classic Chandelier<br>Price: Php.6,009.52" width="170" height="180" alt="Classic Chandelier" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Classic Chandelier', '6009.52')">
					<img class="product-image" src="uploads/Lights/Corner Light.png" data-bs-toggle="tooltip" data-bs-html="true" title="Corner Light<br>Price: Php.1,133.20" width="170" height="180" alt="Corner Light" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Corner Light', '1133.20')">
					<img class="product-image" src="uploads/Lights/Floor Lamp.png" data-bs-toggle="tooltip" data-bs-html="true" title="Floor Lamp<br>Price: Php.2,203.84" width="170" height="180" alt="Floor Lamp" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Floor Lamp', '2203.84')">
					<img class="product-image" src="uploads/Lights/Floor Light.png" data-bs-toggle="tooltip" data-bs-html="true" title="Floor Light<br>Price: Php.2,465.41" width="170" height="180" alt="Floor Light" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Floor Light', '2465.41')">
					<img class="product-image" src="uploads/Lights/Futuristic Wall Lamp.png" data-bs-toggle="tooltip" data-bs-html="true" title="Futuristic Wall Lamp<br>Price: Php.3,338.39" width="170" height="180" alt="Futuristic Wall Lamp" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Futuristic Wall Lamp', '3338.39')">
					<img class="product-image" src="uploads/Lights/Hanging Lamp.png" data-bs-toggle="tooltip" data-bs-html="true" title="Hanging Lamp<br>Price: Php.2,349.81" width="170" height="180" alt="Hanging Lamp" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Hanging Lamp', '2349.81')">
					<img class="product-image" src="uploads/Lights/Incandescent Chandelier.png" data-bs-toggle="tooltip" data-bs-html="true" title="Incandescent Chandelier<br>Price: Php.6,610.07" width="170" height="180" alt="Incandescent Chandelier" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Incandescent Chandelier', '6610.07')">
					<img class="product-image" src="uploads/Lights/Lantern.png" data-bs-toggle="tooltip" data-bs-html="true" title="Lantern<br>Price: Php.688.99" width="170" height="180" alt="Lantern" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Lantern', '688.99')">
					<img class="product-image" src="uploads/Lights/Luxurious Wall Lamp.png" data-bs-toggle="tooltip" data-bs-html="true" title="Luxurious Wall Lamp<br>Price: Php.6,424.89" width="170" height="180" alt="Luxurious Wall Lamp" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Luxurious Wall Lamp', '6424.89')">
					<img class="product-image" src="uploads/Lights/Minimalist Chandelier.png" data-bs-toggle="tooltip" data-bs-html="true" title="Minimalist Chandelier<br>Price: Php.1,111.56" width="170" height="180" alt="Minimalist Chandelier" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Minimalist Chandelier', '1111.56')">
					<img class="product-image" src="uploads/Lights/Modern Chandelier.png" data-bs-toggle="tooltip" data-bs-html="true" title="Modern Chandelier<br>Price: Php.7,200.40" width="170" height="180" alt="Modern Chandelier" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Modern Chandelier', '7200.40')">
					<img class="product-image" src="uploads/Lights/Modern Wall Lamp.png" data-bs-toggle="tooltip" data-bs-html="true" title="Modern Wall Lamp<br>Price: Php.3,331.42" width="170" height="180" alt="Modern Wall Lamp" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Modern Wall Lamp', '3331.42')">
					<img class="product-image" src="uploads/Lights/Pendant Light.png" data-bs-toggle="tooltip" data-bs-html="true" title="Pendant Light<br>Price: Php.2,281.60" width="170" height="180" alt="Pendant Light" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Pendant Light', '2281.6')">
					<img class="product-image" src="uploads/Lights/Table Lamp.png" data-bs-toggle="tooltip" data-bs-html="true" title="Table Lamp<br>Price: Php.1,530.60" width="170" height="180" alt="Table Lamp" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Table Lamp', '1530.60')">
					<img class="product-image" src="uploads/Lights/Traditional Chandelier.png" data-bs-toggle="tooltip" data-bs-html="true" title="Traditional Chandelier<br>Price: Php.5,517.81" width="170" height="180" alt="Traditional Chandelier" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Traditional Chandelier', '5517.81')">
					<img class="product-image" src="uploads/Lights/Traditional Wall Lamp.png" data-bs-toggle="tooltip" data-bs-html="true" title="Traditional Wall Lamp<br>Price: Php.3,869.38" width="170" height="180" alt="Traditional Wall Lamp" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Traditional Wall Lamp', '3869.38')">
					<img class="product-image" src="uploads/Lights/Wall Lantern.png" data-bs-toggle="tooltip" data-bs-html="true" title="Wall Lantern<br>Price: Php.788.99" width="170" height="180" alt="Wall Lantern" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Wall Lantern', '788.99')">
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
							<ul class="list-group list-group-horizontal gap-5" id="discount_option">
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