<?php
session_start();
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
            <a href='cart.php?productName=$product->name&productType=$productType'><img class='add-cart-button ' src='img/add-cart.svg' alt='addToCartButton'>
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
            <a href='cart.php?productName=$product->name&productType=$productType'><img class='add-cart-button ' src='img/add-cart.svg' alt='addToCartButton'></a>
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
            src='$product->image' style='min-width:250px;max-width:400px;'></div>
            <div class='pDesc_left_price'>Price: $$product->price
            </div>
            <a href='cart.php?productName=$product->name&productType=$productType'><img class='pDesc_left_button' src='img/add-cart.svg' alt='addToCartButton'></a>
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
        // session_destroy();
        $test=0;
		$url = 'products.json'; 
        $data = file_get_contents($url); 
        $products = json_decode($data);
        foreach ($products->$productType as $product) 
        {
            if(!isset($_SESSION['cart'])&&strcmp($product->name,$productName)==0)
            {
                $_SESSION['cart'][]=$product;
                break;
            }
            else if(isset($_SESSION['cart']))
            {
                foreach ($_SESSION['cart'] as $key => $value)
                { 
                    if(strcmp($productName,$value->name)==0&&$test==0)
                    {
                        $value->no++;
                        $test=1;
                        break;
                    }
                }
                if($test==0&&strcmp($product->name,$productName)==0)
                {
                    $_SESSION['cart'][]=$product;
                    break;
                }
            }


        }
        
        foreach ($_SESSION['cart'] as $key => $value) 
        {
            echo $value->name."-----";
            echo $value->no."<br>";
        }
     }

}

?>

