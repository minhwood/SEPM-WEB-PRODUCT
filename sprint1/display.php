<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
<?php
        $type = $_GET['type'];
        require "functions.php";
        $testing=new allDisplayFunctions;
        $testing->displayProducts($type);
?>
</body>
</html>
