<?php 
$mysqli=new mysqli("localhost","root", "","shop"); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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


<!-- PHP work start here-->



<div class="container">
<div class="row">



<?php
$sql = "SELECT * FROM `product`";
$res = $mysqli->query($sql);

while ($rows = $res->fetch_array()) {
?>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="..." alt="...">
				<div class="caption">
					<h3><?php echo $rows[1] ?></h3>
					<h3><?php echo $rows[3] ?></h3>
					<h3>RS <?php echo $rows[2] ?></h3>
					<p><a href="#" class="btn btn-primary" role="button">View Product</a></p>
				</div>
			</div>
		</div>
<?php } ?>











</div>
</div>
</div>










<?php require_once("include/footer.php"); ?>
</body>
</html>