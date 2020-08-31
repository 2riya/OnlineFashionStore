<?php require 'include/common.php'; ?>
<?php 
    if (isset($_SESSION['email'])) { 
        header('location: products.php');
    } 
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign Up | FASHIONSCAPE</title>
        
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
        <?php include 'include/header.php'; ?>
           
        
        <div class="container">
           <div class="row" style="margin-top: 75px;">
              <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 col-xs-offset-1 column_style">
              
              <h2>
                  SIGN UP
              </h2>
              
                <form action="signup_script.php" method="POST">
                  
                 <?php if( isset($_GET['registration_error'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['registration_error']?></p>
                        </div>
                 <?php } ?>
                      
                  <div class="form-group">
                      <input class="form-control" placeholder="Name" name="name"  required = "true">
                  </div>
                  
                  <div class="form-group">
                      <input class="form-control" placeholder="Email" name="email"  required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                  
                  <?php if( isset($_GET['email_error'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['email_error']?></p>
                        </div>
                 <?php } ?>  
                  
                  
                  </div>
                  
                  <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                  
                  <?php if( isset($_GET['password_error'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['password_error']?></p>
                        </div>
                 <?php } ?>  
                  
                  
                  
                  </div>
                  
                  <div class="form-group">
                      <input class="form-control" placeholder="Contact" name="contact"  required = "true">
                  </div>
                  
                  <div class="form-group">
                      <input class="form-control" placeholder="City" name="city"  required = "true">
                  </div>
                  
                  <div class="form-group">
                      <input class="form-control" placeholder="Address" name="address"  required = "true">
                  </div>
                  
                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
              </form>
              
              </div>
               
           </div>
            
        </div>
        <footer style="margin-top: 120px;">
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