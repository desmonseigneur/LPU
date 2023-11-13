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
		<title>Perfumes Section</title>
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
		<h1 class="title" style="font-size:70px; font-family:Algerian; color:black">Pabango ni Aling Alaine</h1>
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
					<img class="product-image" src="uploads/Perfumes/Belle.png" data-bs-toggle="tooltip" data-bs-html="true" title="Belle<br>Price: Php.3,908.52" width="170" height="180" alt="Belle" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Belle', '3908.52')">
					<img class="product-image" src="uploads/Perfumes/Blend Oud.png" data-bs-toggle="tooltip" data-bs-html="true" title="Blend Oud<br>Price: Php.4,002.98" width="170" height="180" alt="Blend Oud" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Blend Oud', '4002.98')">
					<img class="product-image" src="uploads/Perfumes/Bleu De Chanel.png" data-bs-toggle="tooltip" data-bs-html="true" title="Bleu De Chanel<br>Price: Php.4,046.47" width="170" height="180" alt="Bleu De Chanel" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Bleu De Chanel', '4046.47')">
					<img class="product-image" src="uploads/Perfumes/Bombshell.png" data-bs-toggle="tooltip" data-bs-html="true" title="Bombshell<br>Price: Php.4,103.13" width="170" height="180" alt="Bombshell" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Bombshell', '4103.13')">
					<img class="product-image" src="uploads/Perfumes/Chanel.png" data-bs-toggle="tooltip" data-bs-html="true" title="Chanel<br>Price: Php.4,951.15" width="170" height="180" alt="Chanel" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Chanel', '4951.15')">
					<img class="product-image" src="uploads/Perfumes/Coco Noir.png" data-bs-toggle="tooltip" data-bs-html="true" title="Coco Noir<br>Price: Php.5,039.09" width="170" height="180" alt="Coco Noir" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Coco Noir', '5039.09')">
					<img class="product-image" src="uploads/Perfumes/Daisy.png" data-bs-toggle="tooltip" data-bs-html="true" title="Daisy<br>Price: Php.5,272.44" width="170" height="180" alt="Daisy" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Daisy', '5272.44')">
					<img class="product-image" src="uploads/Perfumes/Eight.png" data-bs-toggle="tooltip" data-bs-html="true" title="Eight & Bob<br>Price: Php.5,506.83" width="170" height="180" alt="Eight & Bob" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Eight & Bob', '5506.83')">
					<img class="product-image" src="uploads/Perfumes/Eternal Magic.png" data-bs-toggle="tooltip" data-bs-html="true" title="Eternal Magic<br>Price: Php.4,192.02" width="170" height="180" alt="Eternal Magic" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Eternal Magic', '4192.02')">
					<img class="product-image" src="uploads/Perfumes/Fahrenheit.png" data-bs-toggle="tooltip" data-bs-html="true" title="Fahrenheit<br>Price: Php.7,963.54" width="170" height="180" alt="Fahrenheit" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Fahrenheit', '7963.54')">
					<img class="product-image" src="uploads/Perfumes/Goldea.png" data-bs-toggle="tooltip" data-bs-html="true" title="Goldea<br>Price: Php.4,624.69" width="170" height="180" alt="Goldea" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Goldea', '4624.69')">
					<img class="product-image" src="uploads/Perfumes/Guerlain.png" data-bs-toggle="tooltip" data-bs-html="true" title="Guerlain<br>Price: Php.5,841.94" width="170" height="180" alt="Guerlain" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Guerlain', '5841.94')">
					<img class="product-image" src="uploads/Perfumes/Herrera.png" data-bs-toggle="tooltip" data-bs-html="true" title="Herrera<br>Price: Php.6,225.68" width="170" height="180" alt="Herrera" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Herrera', '6225.68')">
					<img class="product-image" src="uploads/Perfumes/Jasmin Noir.png" data-bs-toggle="tooltip" data-bs-html="true" title="Jasmin Noir<br>Price: Php.7,599.12" width="170" height="180" alt="Jasmin Noir" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px " onclick="handleItems('Jasmin Noir', '7599.12')">
					<img class="product-image" src="uploads/Perfumes/Limmensite.png" data-bs-toggle="tooltip" data-bs-html="true" title="L'immensité<br>Price: Php.8,154.68" width="170" height="180" alt="L'immensité" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('L\'immensité', '8154.68')">
					<img class="product-image" src="uploads/Perfumes/Miss Dior.png" data-bs-toggle="tooltip" data-bs-html="true" title="Miss Dior<br>Price: Php.4,916.87" width="170" height="180" alt="Miss Dior" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Miss Dior', '4916.87')">
					<img class="product-image" src="uploads/Perfumes/PNG.png" data-bs-toggle="tooltip" data-bs-html="true" title="PNG<br>Price: Php.5,124.46" width="170" height="180" alt="PNG" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('PNG', '5124.46')">
					<img class="product-image" src="uploads/Perfumes/Prada.png" data-bs-toggle="tooltip" data-bs-html="true" title="Prada<br>Price: Php.6,297.22" width="170" height="180" alt="Prada" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Prada', '6297.22')">
					<img class="product-image" src="uploads/Perfumes/Roberto Cavalli.png" data-bs-toggle="tooltip" data-bs-html="true" title="Roberto Cavalli<br>Price: Php.8,339.71" width="170" height="180" alt="Roberto Cavalli" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Roberto Cavalli', '8339.71')">
					<img class="product-image" src="uploads/Perfumes/Shalimar.png" data-bs-toggle="tooltip" data-bs-html="true" title="Shalimar<br>Price: Php.6,919.28" width="170" height="180" alt="Shalimar" style="margin-top:30px; border:10px solid white; overflow:auto; box-shadow: 0 0 5px; margin-bottom:30px; margin-right:10px " onclick="handleItems('Shalimar', '6919.28')">
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