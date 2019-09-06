<?php
include("navigation.php");?>
    <div class="side-nav"> 
        <div><h3 class="cat-title">Categories</h3>
        <a class="cat-box" href="display.php?productType=desktops" target="Test">Desktops</a>
        <a class="cat-box" href="display.php?productType=laptops" target="Test">Laptops</a>
        <a class="cat-box" href="display.php?productType=parts" target="Test">Desktop & Laptop Parts</a>
        <a class="cat-box" href="display.php?productType=other_parts" target="Test">Other Accessories</a>
        <?php if(isset($_SESSION['loggedInUser'])&&!empty($_SESSION['loggedInUser']))
        echo "<a class='cat-box' href='memberSpecial.php?productType=other_parts' target='Test' style='color:darkred'>Member Special</a>";
        ?>

    </div>
    </div>
    <div>
        
        <iframe src="firstpage.php" class="iframe" name="Test">
        </iframe>

    </div>

    <footer><h3>Melbourne Tech Store</h3></footer>
    
<section class="home-newsletter">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="single">
        <h2>Subscribe to our Newsletter</h2>
    <div class="input-group">
         <input type="email" class="form-control" placeholder="Enter your email">
         <span class="input-group-btn">
         <button class="btn btn-theme" type="submit">Subscribe</button>
         </span>
          </div>
    </div>
</div>
</div>
</div>
</section>
    

</body>
</html>