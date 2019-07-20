<?php
/**
* User Related Function
*/
class userDetails 
{
	public function createUser($username, $password, $fullname, $mobile, $address) {
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "INSERT INTO `signup`(`username`, `password`, `fullname`, `mobile`, `address`) VALUES ('$username', '$password', '$fullname', '$mobile', '$address')";
		return $mysqli->query($sql);
	}
	public function updateUser($username, $password, $fullname, $mobile, $address, $uid) {
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "UPDATE `signup` SET	`username`='$username',`password`='$password',
		`fullname`='$fullname',`mobile`='$mobile',`address`='$address' WHERE `id`='$uid'";
		 return $mysqli->query($sql);
	}
	public function validateUser($username, $password) {
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "SELECT * FROM `signup` WHERE `username`='$username' AND `password`='$password'";
		return $mysqli->query($sql);
	}
	public function countUser()	{
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "SELECT count(*) FROM `signup`";
		$res =  $mysqli->query($sql);
		$row = $res->fetch_array();	
		return $row[0];
	}
	public function showUserByID($uid)	{
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "SELECT * FROM `signup` WHERE `id`='$uid'";
		return $res =  $mysqli->query($sql);
	}
}
?>