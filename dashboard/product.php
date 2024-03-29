<?php require_once("../controls/clsDatabase.php"); ?>
<?php require_once("../controls/clsProductDetail.php"); ?>
<?php  
$objP = new prodDetails();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
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
	<h2>Product Page</h2>
	<a href="newproduct.php" class="btn btn-primary">New Product</a>
	<hr>
	<table class="table table-hover">
		<thead>
			<th>S.No.</th>
			<th>Product Name</th>
			<th>Product Modal</th>
			<th>Product Price</th>
			<th>Product Specification</th>
			<th>Action</th>
		</thead>
<?php
	$res = $objP->showAllProduct();

	while ($rows = $res->fetch_array()) {
?>
		<tbody>
			<tr>
				<td><?php echo $rows[0] ?></td>
				<td><?php echo $rows[1] ?></td>
				<td><?php echo $rows[3] ?></td>
				<td><?php echo $rows[2] ?></td>
				<td><?php echo $rows[4] ?></td>
				<td><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
				<td><a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
		</tbody>
<?php } ?>
	</table>
</div>
<?php require_once("include/footer.php"); ?>
</body>
</html>