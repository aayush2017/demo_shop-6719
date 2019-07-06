<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	<h2>Login Page</h2>
	<hr>
	<form>
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