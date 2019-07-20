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
	public function updateProduct($prodName, $prodPrice, $prodModal, $prodSpec, $pid)
	{
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "UPDATE `product` SET `prodName`='$prodName',`prodPrice`='$prodPrice',`prodModal`='$prodModal',`prodSpec`='$prodSpec' WHERE `id`='$pid'";
		return $mysqli->query($sql);
	}
	public function showProdByID($pid)	{
		$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
		$sql = "SELECT * FROM `product` WHERE `id`='$pid'";
		return $res =  $mysqli->query($sql);
	}
}
?>