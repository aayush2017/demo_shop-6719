<?php
session_start();
unset($_SESSION['fullname']);
session_destroy();
header("location: ../login.php");
?>