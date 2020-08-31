<?php require 'include/common.php'; ?>
<?php
$email = mysqli_real_escape_string($con, $_POST['email'] );
$password = mysqli_real_escape_string($con, md5($_POST['password']));

$login_query = "select id, email from users where email='$email' AND password='$password'";
$login_query_result = mysqli_query($con, $login_query) or die(mysqli_error($con));

if (mysqli_num_rows($login_query_result) == 0){
    header('location: login.php?incorrect_login_details=No such user exists!');
}
else{
    $row = mysqli_fetch_array($login_query_result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    header('location: products.php?login_successful=You have logged in successfully. HAPPY SHOPPING!');
}

?>