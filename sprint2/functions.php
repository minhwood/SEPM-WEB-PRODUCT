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
            $test=0;
            echo "<div class='product-box'>
            <h2><a href='productDetails.php?productName=$product->name&productType=$productType'>$product->name</a></h2>
            <a href='productDetails.php?productName=$product->name&productType=$productType'><img class='product-img' src='$product->image'></a>
            <div class='price'>$$product->price </div>";
            if(isset($_SESSION['cart']))
            foreach ($_SESSION['cart'] as $key => $value)
                { 
                    if(strcmp($product->name,$value->name)==0)
                    {
                        $test=1;
                        break;
                    }
                }
            if($test==0)
            echo "<a href='cart.php?productName=$product->name&productType=$productType&page='index.php''><img class='add-cart-button ' src='img/add-cart.svg' alt='addToCartButton'>";
            else
            {
                echo "<a href='yourcart.php' target='Test'><span class='glyphicon glyphicon-shopping-cart productDisplay-cart'></span></a>";
            }
            echo "</div>";
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
            $test=0;
            echo "<div class='product-box'>
            <h2><a href='productDetails.php?productName=$product->name&productType=$productType'>$product->name</a></h2>
            <a href='productDetails.php?productName=$product->name&productType=$productType'><img class='product-img' src='$product->image'></a><br>
            <div class='price'>$$product->price </div>";

            if(isset($_SESSION['cart']))
            foreach ($_SESSION['cart'] as $key => $value)
                { 
                    if(strcmp($product->name,$value->name)==0)
                    {
                        $test=1;
                        break;
                    }
                }
            if($test==0)
            echo "<a href='cart.php?productName=$product->name&productType=$productType&page='index.php''><img class='add-cart-button ' src='img/add-cart.svg' alt='addToCartButton'></a>";
            else
            {
                echo "<a href='yourcart.php' target='Test'><span class='glyphicon glyphicon-shopping-cart productDisplay-cart'></span></a>";
            }
            echo "</div>";
            }
        }
	}



	function displayDetails($productType,$productName)
	{
        $test=0;
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
            </div>";
            if(isset($_SESSION['cart']))
            foreach ($_SESSION['cart'] as $key => $value)
                { 
                    if(strcmp($productName,$value->name)==0)
                    {
                        $test=1;
                        break;
                    }
                }
            if($test==0)
            echo "
            <a href='cart.php?productName=$product->name&productType=$productType&page='productDetails.php''><img class='pDesc_left_button' src='img/add-cart.svg' alt='addToCartButton'></a>";
            else
            {
                echo "<a href='yourcart.php' target='Test'><span class='glyphicon glyphicon-shopping-cart details-cart'></span></a>";
            }
            echo "</div>
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

	function addToCart($productType,$productName,$page)
	{
        // session_destroy();
        $test=0;
		$url = 'products.json'; 
        $data = file_get_contents($url); 
        $products = json_decode($data);
        foreach ($products->$productType as $product) 
        {
            if(strcmp($product->name,$productName)==0)
            {
                $_SESSION['cart'][]=$product;
                break;
            }
        }
        header('Location:index.php');
     }

     function removeItemFromCart($productName)
    {
        // session_destroy();
        $test=0;
        $url = 'products.json'; 
        $data = file_get_contents($url); 
        $products = json_decode($data);
        if(isset($_SESSION['cart']))
        foreach ($_SESSION['cart'] as $key => $value)
                { 
                     if(strcmp($productName,$value->name)==0)
                    {
                        unset($_SESSION['cart'][$key]);
                    }
                }
    header("location:yourcart.php");
     }

}

?>

