<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomePage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
   <!-- <script type="text/javascript" src="js/jquery-3.3.1.js"></script>-->
    <script type="text/javascript" src="js/action.js"></script>
</head>
<body>
    <nav>
        <!-- <h1>Melbourne Tech Store</h1> -->
        <img src="img/logo.jpg" alt="logo of Melbourne Tech Store" style="height: 145px;">
    </nav>
    <div class="side-nav"> 
        <div><h3 class="cat-title">Categories</h3>
        <a class="cat-box" href="display.php?type=desktops" target="Test">Desktops</a>
        <a class="cat-box" href="display.php?type=laptops" target="Test">Laptops</a>
        <a class="cat-box" href="display.php?type=parts" target="Test">Desktop & Laptop Parts</a>
        <a class="cat-box" href="display.php?type=other_parts" target="Test">Other Accessories</a></div>
    </div>
    <div>
        
        <iframe src="firstpage.php" class="iframe" name="Test">
        </iframe>

    </div>

    <footer><h3>Melbourne Tech Store</h3></footer>
    

</body>
</html>