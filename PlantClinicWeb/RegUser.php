<?php

error_reporting(E_ERROR);

$DB_HOST = "localhost";
$DB_UID = "root";
$DB_PASS = "";
$DB_NAME = "plantclinic";

$db_con = mysqli_connect($DB_HOST, $DB_UID, $DB_PASS) or die('Unable to Connect to Database');

mysqli_select_db($db_con, $DB_NAME);

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];


$sql = "select * from user where email='$email'";

$result = mysqli_query($db_con,$sql);
$row = mysqli_fetch_array($result);

if ($row['email'] == $email) {
    header('Location: avail.php?msg=User already exist');
    return;
} else {
    header('Location: error.html');
}


$sql = "insert into user(name, email,phone,  password, address)"
        . "values('$name','$email','$mobile','$password','$address')";

$result = mysqli_query($db_con,$sql);

if ($result == "1") {
    header('Location: success.html');
} else {
    header('Location: error.html');
}
mysqli_close($db_con);
?>