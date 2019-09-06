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
    <title>Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="productDetails.css" />
    
    <script type="text/javascript" src="js/action.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <nav>
        <!-- <h1>Melbourne Tech Store</h1> -->
            <div class="navbar-header">
                <a href="index.php"><img class='navbar-img' src="img/logo.jpg" alt="logo of Melbourne Tech Store"></a>
            </div>
           
            <div class="navbar-login">
                <?php
                if(isset($_SESSION['loggedInUser'])&&!empty($_SESSION['loggedInUser']))
                echo "Welcome, ".$_SESSION['loggedInUser']."<a class='loginLogout-btn' href='logout.php'>Logout</a>";
                else
                echo "<a href='login.php' class='loginLogout-btn loginBtn' target='_parent'>Log in</a>";
                ?>
                
                <a href='yourcart.php' target="Test"><span class="glyphicon glyphicon-shopping-cart nav-cartBtn"></span></a>
            </div>
        
    </nav>
    