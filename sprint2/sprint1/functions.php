<?php

class allDisplayFunctions 
{

	function displayProducts($productType)
	{
		$url = 'products.json'; 
        $data = file_get_contents($url); 
        $products = json_decode($data);
        foreach ($products->$productType as $product) 
        {
            echo "<div class='product-box'>
            <h2><a href='productDetails.php?productName=$product->name&productType=$productType'>$product->name</a></h2>
            <a href='productDetails.php?productName=$product->name&productType=$productType'><img class='product-img' src='$product->image'></a><br>
            <div class='price'>$$product->price </div>
                      </div>";
        }
	}

	function displayHomeProducts()
	{
		$url = 'products.json'; 
        $data = file_get_contents($url); 
        $products = json_decode($data);
        foreach ($products as $productType => $product) 
        {
        	$productTypes=$product;
        	foreach($productTypes as  $product)
        	{
            echo "<div class='product-box'>
            <h2><a href='productDetails.php?productName=$product->name&productType=$productType'>$product->name</a></h2>
            <a href='productDetails.php?productName=$product->name&productType=$productType'><img class='product-img' src='$product->image'></a><br>
            <div class='price'>$$product->price </div>
                      </div>";
            }
        }
	}



	function displayDetails($productType,$productName)
	{
		$url = 'products.json'; 
        $data = file_get_contents($url); 
        $products = json_decode($data);
        foreach ($products->$productType as $product) 
        {
        	if(strcmp($product->name,$productName)==0)
        	{
            echo "<div class='pDesc'>
            <div class='pDesc_left'>
            <div class='pDesc_left_title'>$product->name</div>
            <div class='pDesc_left_image'><img 
            src='$product->image' style='min-height: 350px'></div>
            <div class='pDesc_left_price'>Price: $$product->price
            </div>
            </div>
            <div class='pDesc_right'>
            <div class='pDesc_right_title'>Description</div>
           	<div class='pDesc_right_desc'>$product->Description</div>
           	<div class='pDesc_right_review_title'>Reviews of the product</div>
           	<div class='pDesc_right_review'>Be first to review this product</div>

            </div>
            </div>";
            break;
           }
            	
        }
	}

	function addToCart($productType,$productName)
	{
		$url = 'products.json'; 
        $data = file_get_contents($url); 
        $products = json_decode($data);
        foreach ($products->$productType as $product) 
        {
        	if(strcmp($product->name,$productName)==0)
        	{
        	}
        }
     }
}
?>