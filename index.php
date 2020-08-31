<?php require 'include/common.php'; ?>
<?php 
    if (isset($_SESSION['email'])) { 
        header('location: products.php');
    } 
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>FASHIONSCAPE - Home</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
        
        <style>
            @media only screen and (max-width: 700px){
                #banner-image{
                    display: none;
                }
            }
            @media only screen and (min-width: 700px){
                #for-small-devices{
                    display: none;
                }
            }            
        </style>
    
    </head>
    
    <body style="background-color: black;">
        <?php include 'include/header.php'; ?>
        

        
        <div id="banner-image">
            <div class="container">
        <?php if( isset($_GET['logout_message'])) {?> 
                      <div class="alert" style="margin-top: 50px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['logout_message']?></p>
                        </div>
        <?php } ?>
                <div id="banner-content">
                   <h1 style="font-size:5em; font-family: 'Chelsea Market', cursive;">Fashionscape:</h1>
                   <h3 style="font-size:2em; font-family: 'Chelsea Market', cursive; margin-bottom: 20px;">Fashion as unique as you are!</h3>
                   <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        
        <div id="for-small-devices" style="max-height: 100%;
    max-width: 100%; padding-top: 20%;
    padding-bottom: 50px; background: url('images/bgsmall.jpg') no-repeat center center;
    background-size: cover;">
            <div class="container" style="position: relative; color: red; padding-top: 40%; padding-bottom: 60%; text-align: center;">
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now @<br>FASHIONSCAPE</a>
            </div>
        </div>
        
           
        <footer style="background-color: black;">
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