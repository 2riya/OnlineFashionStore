<?php require 'include/common.php' ?>
<?php

if( !isset($_SESSION['email']) ){
    header('location: index.php');
}
else{
    $user_id = $_SESSION['id'];
    $old_password = mysqli_real_escape_string($con, md5($_POST['old_password']));
    
    $select_query = "select password from users where id = '$user_id' and password = '$old_password'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    
    if(mysqli_num_rows($select_query_result) == 0){
        header('location: settings.php?password_error=You entered an incorrect password!');
    }
    else{
        $new_password = $_POST['new_password'];
        $rt_new_password = $_POST['rt_new_password'];
        
        if (strcmp($new_password, $rt_new_password) == 0){
            $new_password = mysqli_real_escape_string($con, md5($new_password));
            $update_query = "update users set password='$new_password' where id='$user_id' and password='$old_password'";
            $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
            header('location: products.php?password_set=Your password has been updated successfully!');
        }
        else{
            header('location: settings.php?new_password_error=Passwords do not match!');
        }  
    }   
}
?>