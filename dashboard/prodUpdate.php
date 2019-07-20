<?php require_once("../controls/clsDatabase.php"); ?>
<?php require_once("../controls/clsProductDetail.php"); ?>
<?php  
$objProd = new prodDetails();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	<?php require_once("include/header.php"); ?>
</head>
<body>
<?php require_once("include/menuBar.php"); ?>

<div class="jumbotron">
	<div class="container">
		<h1>Welcome to Online Shop</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
<div class="container">
<?php
// echo $_GET['prodUID'];
if(isset($_POST['update'])) {
	$res = $objProd->updateProduct($_POST['prodName'], $_POST['prodPrice'], $_POST['prodModal'], $_POST['prodSpec'], $_GET['prodUID']);
	if ($res) { ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Success!</strong> Product Details Updated.
	</div> 
	<?php 
	}
}
?>
	<h2>Product Page</h2>
	<hr>
	<?php
		$res = $objProd->showProdByID($_GET['prodUID']);
		$row = $res->fetch_array();
	?>
	<form method="post">
		<div class="form-group">
			<label class="control-label">Product Fullname</label>
			<input type="text" name="prodName" class="form-control" value="<?php echo $row[1]; ?>">
		</div>
		<div class="form-group">
			<label class="control-label">Product Price</label>
			<input type="text" name="prodPrice" class="form-control" value="<?php echo $row[2]; ?>">
		</div>
		<div class="form-group">
			<label class="control-label">Product Modal Number</label>
			<input type="text" name="prodModal" class="form-control" value="<?php echo $row[3]; ?>">
		</div>
		<div class="form-group">
			<label class="control-label">Product Specification</label>
			<textarea class="form-control" name="prodSpec"><?php echo $row[4]; ?></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="update" value="Update" class="btn btn-info">
			<input type="button" value="Back" class="btn btn-primary" onclick="window.location='product.php'">
		</div>
	</form>
</div>
<?php require_once("include/footer.php"); ?>
</body>
</html>