<?php require 'include/common.php'; ?>
<?php
$name = mysqli_real_escape_string($con, $_POST['name']);

$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=Enter correct email');
}

$password = $_POST['password'];
if (strlen($password) < 6) {
  header('location: signup.php?password_error=Enter correct password');
}

$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, md5($password));

$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$email_check_query = "select id from users where email = '$email'";
$email_check_query_result = mysqli_query($con, $email_check_query) or die(mysqli_error($con));

if(mysqli_num_rows($email_check_query_result)>0){
    header('location: signup.php?registration_error=Email id already registered!');
}
else{
    $user_registration_query = "insert into users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address' )";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con) or die(mysqli_error($con));
    header('location: products.php?registration_successful=You have been registered and logged in successfully. HAPPY SHOPPING!');
}

?>