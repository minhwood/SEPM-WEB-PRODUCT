<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="productDetails.css" />
   <!-- <script type="text/javascript" src="js/jquery-3.3.1.js"></script>-->
   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script type="text/javascript" src="js/action.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript">
    
      $(document).ready(function(){
    $(".quantity-input").change(function(){
        quantity = parseInt($(this).val())
        price_string = $(this).parent().parent().find(".priceInCart").html()
        price = price_string.slice(2)
        price = parseInt(price)
        subtotal = (price * quantity).toString()
        display_price = "$ "+subtotal
        
        $(this).parent().parent().find(".subtotal").html(display_price)
        total_price = 0
        $(".subtotal").each(function(){
           price_string = $(this).html()
           price = parseInt(price_string.slice(2))
           total_price = total_price + price
        });
        
        $(".total-price").html("$ "+total_price)
    });
});
    </script>
</head>
<body>
  <div class="container">
  <?php 
    if (!isset($_SESSION['cart']))
    {
      echo "Your Cart is empty";
    }
    else
    {
  echo "<h2>Your Cart</h2>          
  <table class='table table-condensed'>
    <thead>
      <tr>
        <th>Product name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sub Total</th>
        <th></th>
      </tr>
    </thead>
    <tbody>";?>
    <?php
    $total=0;
      echo "<form  action='removeItemFromCart.php' method='post'>";
      foreach ($_SESSION['cart'] as $key => $value) 
        {
            echo 
            "<tr class='product-row'>
              <td>$value->name</td>
              <td class='priceInCart'>$ $value->price</td>
              <td>
              <input type='number' min='1' name='quantity".$key."' class ='quantity-input' value=$value->no>
              </td>
              <td class='subtotal' >$ ".$value->price*$value->no."</td>
              <td><button type='submit' name='submit' class='btn btn-danger' value=$key>Remove</button></td>
            </tr>";
            $total+=($value->price*$value->no);
        }
        echo "</form>";
    
      echo "<tr>
        <th colspan=3 >Total Price</th>
        <td class='total-price'>$ $total</td>
      </tr>
    </tbody>
  </table>
  <div class='col-xs-1 col-xs-offset-9'>
      <form action='checkout.php' method='post'>
      <button class='btn btn-success btn-lg'>Check out</button>
      <form>
  </div>

    </div>"; }?>

</body>
</html>
<!-- href='yourcart.php?name=$value->name&type=$key' -->
