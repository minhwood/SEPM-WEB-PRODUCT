<?php include("navigation.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        include_once("functions.php");
        $testing=new allDisplayFunctions;
        $testing->loginUsers($username,$password);
    }

?>
    <div class="container" style = "padding-top: 200px; min-height: 660px;">
        <div class="col-md-4 col-md-offset-4">
            <form class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post">
                <div class="form-group text-center">
                    <label class="control-label" for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" required>
                </div>
                <div class="form-group text-center">
                    <label class="control-label" for="password">Password</label>
                    <input id="password" name="password" type="text" placeholder="password" class="form-control input-md" required>
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
