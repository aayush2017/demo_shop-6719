<?php require_once("controls/clsDatabase.php"); ?>
<?php require_once("controls/clsUserDetail.php"); ?>
<?php 
$objL = new userDetails();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php require_once("include/header.php"); ?>
</head>
<body>
<?php require_once("include/menuBar.php"); ?>

<br/><br/>
<br/><br/>
<br/><br/>
<div class="container">
<?php
if (isset($_POST['login'])) {
	$res = $objL->validateUser($_POST['username'], $_POST['password']);
	if ($res) {
		$nor = $res->num_rows;
		if ($nor > 0) {
			$row = $res->fetch_array();
			if ($row[1] == $_POST['username'] AND $row[2] == $_POST['password']) {
				echo "Login Sccessfull"; ?>
				<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Login Success!</strong></div>
				<?php $_SESSION['fullname'] = $row[3];
				$_SESSION['uid'] = $row[0];
				header("location: dashboard/dashboard.php");
			} else {
				echo "Please check your Username Or Password !";?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Failed !</strong> Please check your Username Or Password !</div>
				<?php
			}
		} else { ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Failed !</strong> Please check your Username Or Password !</div>
			<?php
		}
	}
}
?>
	<h2>Login Page</h2>
	<hr>
	<form method="post">
		<div class="form-group">
			<label class="control-label">Username</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="login" value="Login" class="btn btn-primary">
		</div>
	</form>
</div>
<?php require_once("include/footer.php"); ?>
</body>
</html>