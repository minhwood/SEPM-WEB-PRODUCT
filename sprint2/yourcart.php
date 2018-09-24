<?php session_start();?>
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
    <script type="text/javascript" src="js/action.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <?php 
    if (!isset($_SESSION['cart'])) {
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
      foreach ($_SESSION['cart'] as $key => $value) 
        {
            echo 
            "<tr class='product-row'>
              <td>$value->name</td>
              <td class='price'>$ $value->price</td>
              <td><input class ='quantity-input' type='number' value=$value->no required></td>
              <td class='subtotal' >$ ".$value->price*$value->no."</td>
              <td><a href='removeItemFromCart.php?name=$value->name&type=$key'  class='btn btn-danger'>Remove</a></td>
            </tr>";
            $total+=($value->price*$value->no);
        }
    
      echo "<tr>
        <th colspan=3 >Total Price</th>
        <td class='total-price'>$ $total</td>
      </tr>
    </tbody>
  </table>
  <div class='col-xs-1 col-xs-offset-9'>
      <button class='btn btn-success btn-lg'>Check out</button>
  </div>

    </div>"; }?>

</body>
</html>