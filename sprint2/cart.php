<?php
if(empty($_GET['productType'])&&empty($_GET['productName']))
{
	header("location:index.php"); 
	exit();
}
include_once("functions.php");
	$productType = $_GET['productType'];
	$productName = $_GET['productName'];
	$page=$_GET['page'];
   	$testing=new allDisplayFunctions;
	$testing->addToCart($productType,$productName);
?>
