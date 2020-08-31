<?php require 'include/common.php'; ?>
<?php 
    if (!isset($_SESSION['email'])) { 
        header('location: index.php');
    } 
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Success Page | FASHIONSCAPE</title>
        
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
        
        <?php
        $id = $_GET['itemsid'];
        $id_array = explode(',', $id);
        foreach ($id_array as $id_value) {
            $confirm_query = "UPDATE users_items SET status='Confirmed' WHERE id='$id_value'";
            $confirm_query_result = mysqli_query($con, $confirm_query) or die(mysqli_error($con));
        }
        ?>
        
        <div class="container" style="padding-top: 75px;">
            <div class="jumbotron">
                   <center>
                       <h2> 
                           Your order is confirmed. Thank you for shopping with us!<br> 
                           <a href="products.php">Click here</a> to continue shopping.
                       </h2> 
                   </center>  
            </div>
       </div>
    </body>  
</html>