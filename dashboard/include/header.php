<?php
session_start();
if(!isset($_SESSION['fullname'])) {
    header("location: ../login.php");
}
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
