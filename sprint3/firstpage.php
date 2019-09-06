<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script type="text/javascript" src="js/action.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
        if(!empty($_GET['productType'])&&!empty($_GET['productName']))
		{
		  include_once("functions.php");
		  $productType = $_GET['productType'];
		  $productName = $_GET['productName'];
		  $testing=new allDisplayFunctions;
		  $testing->addToCart($productType,$productName);
		  $testing->displayHomeProducts();
		}
		else
		{
		        require "functions.php";
		        $testing=new allDisplayFunctions;
		        $testing->displayHomeProducts();
		}
?>
</body>
</html>