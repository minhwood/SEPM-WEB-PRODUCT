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
    <title>HomePage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="productDetails.css" />
    
    <script type="text/javascript" src="js/action.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<?php
    $mesg="";
    static $test=0;
    if($test==1)
    {
        $page='checkout';
    }
    else
    {
        $page='';
    }
    if(!empty($_GET['page'])||strcmp('checkout', $page)==0)
        {
            $test=1;
            if(!empty($_GET['page']))
            $page=$_GET['page'];
            else
            {
                $page='checkout';
            }

        } 
    else
        {
            $page="index";
        }

         if(!empty($_GET['status']))
        {
            if(strcmp("fail", $_GET['status'])==0)
            {
            $mesg="your details are incorrect";
            }   
        } 

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        include_once("functions.php");
        $testing=new allDisplayFunctions; 
        $testing->loginUsers($username,$password,$page);
    }

?>
    <div class="container" style = "padding-top: 200px; min-height: 660px;">
        <div class="col-md-4 col-md-offset-4">
            <form class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post">
                <div class="text-center mb-4">
                <a href='index.php'><img class="mb-4" src="img/logo.jpg" alt="Company Logo in PNG" height="100"></a>
                <h1 class="h3 mb-3 font-weight-normal login-title">Authorisation</h1>
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
                    <input disabled style='color:red;border:0;background: white;' name="error" type="text" class="form-control input-md" value='<?php echo $mesg;?>'>
                </div>
                <div class="form-group text-center">
                    <a href = "register.php">Register a new account ?</a>
                </div>
                <div class="form-group text-center">
                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-default btn-primary" >Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
  
</body>
</html>
