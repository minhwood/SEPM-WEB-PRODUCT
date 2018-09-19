<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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
    <div class="container" style = "padding-top: 200px; min-height: 660px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="row">
                <div class="form-group text-center">
                    <label class="control-label" for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="username" class="form-control input-md">
                </div>
                <div class="form-group text-center">
                    <label class="control-label" for="password">Password</label>
                    <input id="password" name="password" type="text" placeholder="password" class="form-control input-md">
                </div>
                <div class="form-group text-center">
                    <a href = "register.php">Register a new account ?</a>
                </div>
                <div class="form-group text-center">
                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-default btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
    

</body>
</html>