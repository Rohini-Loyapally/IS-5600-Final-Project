<?php

error_reporting(E_ERROR);

$DB_HOST = "localhost";
$DB_UID = "root";
$DB_PASS = "";
$DB_NAME = "plantclinic";

$db_con = mysqli_connect($DB_HOST, $DB_UID, $DB_PASS) or die('Unable to Connect Database');

mysqli_select_db($db_con, $DB_NAME);

session_start();

$username = $_POST["username"];
$password = $_POST["password"];



$sql = "select * from user where email='$username' and password='$password'";

$result = mysqli_query($db_con,$sql);

$row = mysqli_fetch_array($result);



if ($row['email'] == $username && $row['password'] == $password) {
    $_SESSION['EMAIL'] = $row['email'];
    header('Location: userPanel.php');
} else {
   header('Location: error.html');
}

mysqli_close($db_con);
?>