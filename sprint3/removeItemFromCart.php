<?php
   

	if($_SERVER['REQUEST_METHOD'] == "POST")
    {
		require "functions.php";
       foreach ($_SESSION['cart'] as $key => $value) 
        {
          $value->no=$_POST['quantity'.$key];
        }
        $index=$_POST['submit'];
        $testing=new allDisplayFunctions;
        $testing->removeItemFromCart($index);
        
   }
	
		// if($_SERVER['REQUEST_METHOD'] == "POST")
  //   {
		// require "functions.php";
  //      foreach ($_SESSION['cart'] as $key => $value) 
  //       {
  //         $value->no=$_POST['quantity'.$key];
  //       }
  //       $index=$_POST['submit'];
  //       $testing=new allDisplayFunctions;
  //       $testing->removeItemFromCart($index);
        
  //  }	
?>