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
		<title>Utensils Section</title>
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
		<h1 class="title" style="font-size:70px; font-family:Algerian; color:black">Kusina ni Aling Alaine</h1>
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
					<img class="product-image" src="uploads/Utensils/Boning Knife.png" data-bs-toggle="tooltip" data-bs-html="true" title="Boning Knife<br>Price: Php.1,909.1" width="170" height="180" alt="Boning Knife" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Boning Knife', '1909.1')">
					<img class="product-image" src="uploads/Utensils/Bread Knife.png" data-bs-toggle="tooltip" data-bs-html="true" title="Bread Knife<br>Price: Php.2,456.44" width="170" height="180" alt="Bread Knife" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Bread Knife', '2456.44')">
					<img class="product-image" src="uploads/Utensils/Can Opener.png" data-bs-toggle="tooltip" data-bs-html="true" title="Can Opener<br>Price: Php.2,005.99" width="170" height="180" alt="Can Opener" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Can Opener', '2005.99')">
					<img class="product-image" src="uploads/Utensils/Cutting Board.png" data-bs-toggle="tooltip" data-bs-html="true" title="Cutting Board<br>Price: Php.1,864.05" width="170" height="180" alt="Cutting Board" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Cutting Board', '1864.05')">
					<img class="product-image" src="uploads/Utensils/Garlic Press.png" data-bs-toggle="tooltip" data-bs-html="true" title="Garlic Press<br>Price: Php.2,598.26" width="170" height="180" alt="Garlic Press" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Garlic Press', '2598.26')">
					<img class="product-image" src="uploads/Utensils/Grater.png" data-bs-toggle="tooltip" data-bs-html="true" title="Grater<br>Price: Php.3,208.77" width="170" height="180" alt="Grater" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Grater', '3208.77')">
					<img class="product-image" src="uploads/Utensils/Ice Cream Scooper.png" data-bs-toggle="tooltip" data-bs-html="true" title="Ice Cream Scooper<br>Price: Php.1,577.82" width="170" height="180" alt="Ice Cream Scooper" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Ice Cream Scooper', '1577.82')">
					<img class="product-image" src="uploads/Utensils/Kitchen Knife.png" data-bs-toggle="tooltip" data-bs-html="true" title="Kitchen Knife<br>Price: Php.1,910.52" width="170" height="180" alt="Kitchen Knife" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Kitchen Knife', '1910.52')">
					<img class="product-image" src="uploads/Utensils/Kitchen Spoon.png" data-bs-toggle="tooltip" data-bs-html="true" title="Kitchen Spoon<br>Price: Php.1,691.29" width="170" height="180" alt="Kitchen Spoon" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Kitchen Spoon', '1691.29')">
					<img class="product-image" src="uploads/Utensils/Mallet.png" data-bs-toggle="tooltip" data-bs-html="true" title="Mallet<br>Price: Php.1,983.27" width="170" height="180" alt="Mallet" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Mallet', '1983.27')">
					<img class="product-image" src="uploads/Utensils/Nut Cracker.png" data-bs-toggle="tooltip" data-bs-html="true" title="Nut Cracker<br>Price: Php.3,046.96" width="170" height="180" alt="Nut Cracker" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Nut Cracker', '3046.96')">
					<img class="product-image" src="uploads/Utensils/Pairing Knife.png" data-bs-toggle="tooltip" data-bs-html="true" title="Pairing Knife<br>Price: Php.2,442.12" width="170" height="180" alt="Pairing Knife" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Pairing Knife', '2442.12')">
					<img class="product-image" src="uploads/Utensils/Pasta Ladle.png" data-bs-toggle="tooltip" data-bs-html="true" title="Pasta Ladle<br>Price: Php.2,918.67" width="170" height="180" alt="Pasta Ladle" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Pasta Ladle', '2918.67')">
					<img class="product-image" src="uploads/Utensils/Peeler.png" data-bs-toggle="tooltip" data-bs-html="true" title="Peeler<br>Price: Php.3,451.97" width="170" height="180" alt="Peeler" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Peeler', '3451.97')">
					<img class="product-image" src="uploads/Utensils/Potato Masher.png" data-bs-toggle="tooltip" data-bs-html="true" title="Potato Masher<br>Price: Php.2,549.27" width="170" height="180" alt="Potato Masher" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Potato Masher', '2549.27')">
					<img class="product-image" src="uploads/Utensils/Serrated Knife.png" data-bs-toggle="tooltip" data-bs-html="true" title="Serrated Knife<br>Price: Php.2,902.36" width="170" height="180" alt="Serrated Knife" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Serrated Knife', '2902.36')">
					<img class="product-image" src="uploads/Utensils/Soup Ladle.png" data-bs-toggle="tooltip" data-bs-html="true" title="Soup Ladle<br>Price: Php.916.82" width="170" height="180" alt="Soup Ladle" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Soup Ladle', '916.82')">
					<img class="product-image" src="uploads/Utensils/Spatula.png" data-bs-toggle="tooltip" data-bs-html="true" title="Spatula<br>Price: Php.2,781.35" width="170" height="180" alt="Spatula" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Spatula', '2781.35')">
					<img class="product-image" src="uploads/Utensils/Tongs.png" data-bs-toggle="tooltip" data-bs-html="true" title="Tongs<br>Price: Php.916.82" width="170" height="180" alt="Tongs" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Soup Ladle', '916.82')">
					<img class="product-image" src="uploads/Utensils/Whisk.png" data-bs-toggle="tooltip" data-bs-html="true" title="Whisk<br>Price: Php.2,781.35" width="170" height="180" alt="Whisk" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Spatula', '2781.35')">
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