<?php require 'include/common.php'; ?>
<?php 
    if (!isset($_SESSION['email'])) { 
        header('location: index.php');
    } 
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Cart | FASHIONSCAPE</title>
        
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
        
       
    <div class="container" style="padding-top: 50px;">
    <table class="table table-striped" >
        <?php 
            $user_id = $_SESSION['id'];
            $join_query = "SELECT i.pid AS iid, i.name AS name, i.price AS price, ui.id AS uiid FROM users_items ui INNER JOIN items i ON ui.item_id = i.pid WHERE ui.user_id = '$user_id' AND status='Added to cart'";
            $join_query_result = mysqli_query($con, $join_query);
            
            if ( mysqli_num_rows($join_query_result) == 0){
                echo 'Add items to cart first!';
            }
            else{
        ?>
        <thead>
          <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <?php
            $sum = 0;
            $id = '';
            $cnt = 1;
            while( $row = mysqli_fetch_array($join_query_result) ){
                    $sum = $sum + $row['price'];
                    $id = $id.$row['uiid'].",";
                    echo "<tr> <td>".
                            $cnt.
                            "</td> <td>".
                            $row['name'].
                            "</td> <td>".
                            $row['price'].
                            "</td> <td><a href='cart-remove.php?id={$row['iid']}' class='remove_item_link'>Remove</a></td></tr>";
                    $cnt += 1;
           }
           $id = rtrim($id, ",");
            echo "<tr> <td></td> <td>Total</td> <td>".
                 $sum.
                 "</td> <td><a href='success.php?itemsid=".
                 $id.
                 "' class='btn btn-primary'>Confirm Order</a></td></tr>";    
            }
            ?>  
        </tbody>
        
        
    </table>
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