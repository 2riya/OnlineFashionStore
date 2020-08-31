<?php require 'include/common.php'; ?>
<?php 
    if (isset($_SESSION['email'])) { 
        header('location: products.php');
    } 
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Login | FASHIONSCAPE</title>
        
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
           
        
        <div class="container">
           <div class="row" style="margin-top: 75px;">
              <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 col-xs-offset-1 column_style">
              
              <div class = "panel panel-primary">
                 <div class="panel-heading">
                     <h3>
                         LOGIN
                     </h3>
                 </div>
                 <div class="panel-body">
                     <p class="text-warning">
                         Login to make a purchase
                     </p>
                     
                     <form method="POST" action="login_submit.php">
                         
                <div class="form-group">
                      <input class="form-control" placeholder="Email" name="email"  required = "true">
                  </div>
                  
                  <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                  </div>     
                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                 
                          
                 <?php if( isset($_GET['incorrect_login_details'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['incorrect_login_details']?></p>
                        </div>
                 <?php } ?>     
                        
                  </div>
                     </form>
                 

                 
                 </div>
                 
                  
                  <div class="panel-footer">
                      <p>Don't have an account? <a href="signup.php">Register</a></p>
                 </div>
                  
              </div>
              
              </div>
               
           </div>
            
        </div>
        <footer>
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