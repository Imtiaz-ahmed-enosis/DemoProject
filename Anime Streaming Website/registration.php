<?php
session_start();
include 'header.php';
include 'connect.php';
$name = $_POST['name'];
$name     = mysql_real_escape_string($name);
$address = $_POST['address'];
$address     = mysql_real_escape_string($address);
$phone = $_POST['phone'];
$phone     = mysql_real_escape_string($phone);
$license = $_POST['license'];
$license     = mysql_real_escape_string($license);
$reg_query = 
include 'headbarUser.php';
?>