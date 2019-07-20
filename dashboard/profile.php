<?php require_once("../controls/clsDatabase.php"); ?>
<?php require_once("../controls/clsUserDetail.php"); ?>
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
if (isset($_POST['update'])) {
	$res = $objL->updateUser($_POST['username'], $_POST['password'], $_POST['fullname'], $_POST['mobile'], $_POST['address'], $_SESSION['uid']);
	if ($res) { ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Success!</strong> User Update.
	</div>
	<?php }
}
?>
	<h2>Profile Page</h2>
	<hr>
	<?php
	$res = $objL->showUserByID($_SESSION['uid']);
	$row = $res->fetch_array();
	?>
	<form method="post">
		<div class="form-group">
			<label class="control-label">Fullname</label>
			<input type="text" name="fullname" class="form-control" value="<?php echo $row[3]; ?>">
		</div>
		<div class="form-group">
			<label class="control-label">Username</label>
			<input type="text" name="username" class="form-control"  value="<?php echo $row[1]; ?>">
		</div>
		<div class="form-group">
			<label class="control-label">Password</label>
			<input type="password" name="password" class="form-control"  value="<?php echo $row[2]; ?>">
		</div>
		<div class="form-group">
			<label class="control-label">Mobile</label>
			<input type="text" name="mobile" class="form-control"  value="<?php echo $row[4]; ?>">
		</div>
		<div class="form-group">
			<label class="control-label">Address</label>
			<textarea class="form-control" name="address"> <?php echo $row[5]; ?></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="update" value="Update" class="btn btn-success">
		</div>
	</form>
</div>
<?php require_once("include/footer.php"); ?>
</body>
</html>