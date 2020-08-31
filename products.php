<?php require 'include/common.php'; ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Buy online at FASHIONSCAPE</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        
        <?php include 'include/header.php';  ?>
        <?php include 'include/check-if-added.php'; ?>
        
        <div class="container" style="margin-top: 65px;">
            <?php if( isset($_GET['registration_successful'])) {?> 
                      <div class="alert" style="margin-top: 14px; background-color: #32CD32;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['registration_successful']?></p>
                        </div>
            <?php } ?>
            
            <?php if( isset($_GET['login_successful'])) {?> 
                      <div class="alert" style="margin-top: 14px; background-color: #32CD32;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['login_successful']?></p>
                        </div>
            <?php } ?>
            
            <?php if( isset($_GET['password_set'])) {?> 
                      <div class="alert" style="margin-top: 14px; background-color: #32CD32;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['password_set']?></p>
                        </div>
            <?php } ?>
            <div class="jumbotron">
                <h1>
                    Welcome to Fashionscape Store!
                </h1>
                <p>
                    We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
                </p>    
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/5.jpg" alt="" style="margin-bottom: -3%;">
                        <h3>Canon EOS</h3>
                        <p style="margin-top: -2%;">Price: Rs. 36000.00</p>
                        
                        
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/1.jpg" alt="" style="padding-bottom: 14px;">
                        <h3>Nikon DSLR</h3>
                        <p>Price: Rs. 40000.00</p>
                        
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(2)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>                        
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/3.jpg" alt="">
                       <h3>Sony DSLR</h3>
                        <p>Price: Rs. 45000.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/4.jpg" alt="">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs. 80000.00</p>
                        
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>               
            </div>    
            
            <div class="row text-center">                  
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/9.jpg" alt="">
                        <h3>Titan Model #301</h3>
                        <p>Price: Rs. 13000.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(5)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/10.jpg" alt="">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs. 3000.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/11.jpg" alt="">
                        <h3>HMT Milan</h3>
                        <p>Price: Rs. 8000.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(7)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
                
            
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/12.jpg" alt="">
                        <h3>Faber Luba #111</h3>
                        <p>Price: Rs. 18000.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(8)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
            </div>
            
            <div class="row text-center">   
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/8.jpg" alt="">
                        <h3>H&W</h3>
                        <p>Price: Rs. 800.00</p>
                        
                        
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(9)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/6.jpg" alt="">
                        <h3>Luis Phil</h3>
                        <p>Price: Rs. 1000.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(10)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/13.jpg" alt="">
                        <h3>John Zok</h3>
                        <p>Price: Rs. 1500.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(11)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/14.jpg" alt="">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs. 1300.00</p>
                        <?php 
                            if (!isset($_SESSION['email'])) { 
                        ?> 
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">
                                Buy Now
                            </a>
                        </p> 
                        <?php 
                            } 
                            else {  
                                if (check_if_added_to_cart(12)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } 
                                else { ?> 
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">
                                        Add to cart
                                    </a> 
                                <?php } 
                            } 
                        ?>  
                    </div>
                </div>
            </div>
                
            
        </div>
        
        
           
        <footer style="position: relative;">
            <div class="container">
                <center>
                    <p>
                        Copyright © Fashionscape Store. All Rights Reserved|Contact Us: +91 90000 00000
                    </p>
                </center>
            </div>
        </footer>    
    </body>
</html>