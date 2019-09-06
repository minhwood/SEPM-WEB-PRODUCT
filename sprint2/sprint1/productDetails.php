<?php
$productType = $_GET['productType'];
$productName = $_GET['productName'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Details Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="productDetails.css" />
</head>
<body>
<div class="pDesc">
			<?php 
			require "functions.php";
        	$testing=new allDisplayFunctions;
			$testing->displayDetails($productType,$productName);
			?>
</div>
</body>
</html>
