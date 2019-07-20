<?php require_once("../controls/clsDatabase.php"); ?>
<?php require_once("../controls/clsUserDetail.php"); ?>
<?php require_once("../controls/clsProductDetail.php"); ?>
<?php  
$objP = new prodDetails();
$objL = new UserDetails();
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
	<h1>Dashboard</h1>	
</div>
<div class="container">
	<button class="btn btn-info">Total Product <span class="badge"><?php echo $objP->countProduct();  ?></span></button>
	<button class="btn btn-primary">Total User <span class="badge"><?php echo $objL->countUser();  ?></span></button>
</div>
<?php require_once("include/footer.php"); ?>
</body>
</html>