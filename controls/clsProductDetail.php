<?php
/**
* Product Related Function
*/
class prodDetails 
{
	public function prodInsert($prodName, $prodPrice, $prodModal, $prodSpec)
	{
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "INSERT INTO `product`(`prodName`, `prodPrice`, `prodModal`, `prodSpec`) VALUES ('$prodName', '$prodPrice', '$prodModal', '$prodSpec')";
		return $mysqli->query($sql);
	}
	public function countProduct()
	{
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "SELECT count(*) FROM `product`";
		$res =  $mysqli->query($sql);
		$row = $res->fetch_array();	
		return $row[0];
	}
}
?>