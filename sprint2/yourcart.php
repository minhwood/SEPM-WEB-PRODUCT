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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <!-- <h1>Melbourne Tech Store</h1> -->
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php"><img src="img/logo.jpg" alt="logo of Melbourne Tech Store"></a>
            </div>
               
            <ul class="nav navbar-nav navbar-right">
                <li class= "navbar-item"><a href='yourcart.php'><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                <li class= "navbar-item"><a href='login.php'>Log in</a></li>
            </ul>
        </div>
    </nav>
    <div class="side-nav"> 
        <div><h3 class="cat-title">Categories</h3>
        <a class="cat-box" href="display.php?type=desktops" target="Test">Desktops</a>
        <a class="cat-box" href="display.php?type=laptops" target="Test">Laptops</a>
        <a class="cat-box" href="display.php?type=parts" target="Test">Desktop & Laptop Parts</a>
        <a class="cat-box" href="display.php?type=other_parts" target="Test">Other Accessories</a></div>
    </div>
    <div class="main-container">
        <div class="container">
  <h2>Your Cart</h2>          
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Product name</th>
        <th>Product id</th>
        <th>Quantity</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Acer A114-31-C014</td>
        <td>1235</td>
        <td><input type="number" value=1></td>
        <td>$ 318</td>
        <td><button class="btn btn-danger">Remove</button></td>
      </tr>
      <tr>
        <td>Ollee L14FTCPW</td>
        <td>1231</td>
        <td><input type="number" value=1></td>
        <td>$ 278</td>
        <td><button class="btn btn-danger">Remove</button></td>
      </tr>
      <tr>
        <th colspan=3 >Total Price</th>
        <td>$ 596</td>
      </tr>
    </tbody>
  </table>
  <div class="col-xs-1 col-xs-offset-9">
      <button class="btn btn-success btn-lg">Check out</button>
  </div>
</div>

    </div>

    <footer><h3>Melbourne Tech Store</h3></footer>
    

</body>
</html>