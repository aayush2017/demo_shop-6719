<?php
session_start();
if (isset($_SESSION['uid'])) {
	header("location: dashboard/dashboard.php");
}
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">