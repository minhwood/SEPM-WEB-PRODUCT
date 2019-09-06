<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        include_once("functions.php");
        $testing=new allDisplayFunctions;
        $testing->registerUsers($username,$password,$address,$mobile);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomePage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="productDetails.css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/card-validation.js"></script>
    <script type="text/javascript" src="js/action.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <div class="container" style = "padding-top: 200px; min-height: 660px;">
        <div class="col-md-4 col-md-offset-4">
            <form class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post">
                <div class="text-center mb-4">
                <a href='index.php'><img class="mb-4" src="img/logo.jpg" alt="Company Logo in PNG" height="100"></a>
                <h1 class="h3 mb-3 font-weight-normal login-title">Registration</h1>
                </div>
                <div class="form-group text-center">
                    <label class="control-label" for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" required>
                </div>
                <div class="form-group text-center">
                    <label class="control-label" for="password">Password</label>
                    <input id="password" name="password" type="text" placeholder="password" class="form-control input-md" required>
                </div>
                <div class="form-group text-center">
                    <label class="control-label" for="address">Address</label>
                    <input id="address" name="address" type="text" placeholder="Delivery Address" class="form-control input-md" required>
                </div>
                <div class="form-group text-center">
                    <label class="control-label" for="mobile">Mobile</label>
                    <input id="mobile" name="mobile" type="number" placeholder="Mobile Number" class="form-control input-md" required>
                </div>
                <div class="form-group text-center">
                    <a href = "login.php">Already have account ?</a>
                </div>
                <div class="form-group text-center">
                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-default btn-primary">Register</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    <footer>
        
    </footer>
    

</body>
</html>