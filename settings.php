<?php require 'include/common.php'; ?>
<?php 
    if (!isset($_SESSION['email'])) { 
        header('location: index.php');
    } 
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Settings | FASHIONSCAPE</title>
        
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
        
        <?php include 'include/header.php' ?>
        
        <div class="container">
           <div class="row" style="margin-top: 75px;">
              <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 col-xs-offset-1 column_style">
              
              <h2>
                  Change Password
              </h2>
              <form action="settings_script.php" method="POST">
                  
                  <div class="form-group">
                      <input type="password" class="form-control" placeholder="Old Password" name="old_password" required = "true">
                   <?php if( isset($_GET['password_error'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['password_error']?></p>
                        </div>
                 <?php } ?> 
                  </div>
                 <div class="form-group">
                      <input type="password" class="form-control" placeholder="New Password" name="new_password" required = "true">
                  </div>
                     <div class="form-group">
                      <input type="password" class="form-control" placeholder="Retype New Password" name="rt_new_password" required = "true">
                       <?php if( isset($_GET['new_password_error'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['new_password_error']?></p>
                        </div>
                    <?php } ?> 
                  </div>
                  
                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Change</button>
                  </div>
             </form>
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