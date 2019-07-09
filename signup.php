<?php require_once("controls/clsDatabase.php"); ?>
<?php require_once("controls/clsUserDetail.php"); ?>
<?php 
$objL = new userDetails();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<?php require_once("include/header.php"); ?>
</head>
<body>
<?php require_once("include/menuBar.php"); ?>

<div class="container">
<br/><br/>
<br/><br/>
<br/><br/>
<?php
if (isset($_POST['signup'])) {
	$res = $objL->createUser($_POST['username'], $_POST['password'], $_POST['fullname'], $_POST['mobile'], $_POST['address']);
	if ($res) {
		echo "User Created !";
	}
}
?>
	<h2>Signup Page</h2>
	<hr>
	<form method="post">
		<div class="form-group">
			<label class="control-label">Fullname</label>
			<input type="text" name="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Username</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Mobile</label>
			<input type="text" name="mobile" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Address</label>
			<textarea class="form-control" name="address"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="signup" value="SignUp" class="btn btn-success">
		</div>
	</form>
</div>
<?php require_once("include/footer.php"); ?>
</body>
</html>