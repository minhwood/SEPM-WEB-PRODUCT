<?php include("navigation.php"); ?>

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
                    <label class="control-label" for="address">Address</label>
                    <input id="address" name="address" type="text" placeholder="Delivery Address" class="form-control input-md">
                </div>
                <div class="form-group text-center">
                    <label class="control-label" for="credit-card">Address</label>
                    <input id="credit-card" name="credit-card" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" class="form-control input-md">
                </div>
                <div class="form-group text-center">
                    <a href = "login.php">Already have account ?</a>
                </div>
                <div class="form-group text-center">
                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-default btn-primary">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
    

</body>
</html>