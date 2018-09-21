<?php
$name=$_GET['name'];
$type=$_GET['type'];
echo $name."<br>";
echo $type;
		require "functions.php";
        $testing=new allDisplayFunctions;
        $testing->removeItemFromCart($name);
?>