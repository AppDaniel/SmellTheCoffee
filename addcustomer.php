<?php
session_start();
header("Location: index.php");
require('db.php');


$customer_firstname = $_POST['customer_firstname'];
$customer_lastname = $_POST['customer_lastname'];
$customer_email = $_POST['customer_email'];
$customer_password = $_POST['customer_password'];
$customer_address = $_POST['customer_address'];
$customer_zip = $_POST['customer_zip'];
$customer_city = $_POST['customer_city'];

$customer_password_hash = password_hash($customer_password, PASSWORD_BCRYPT);


$sql = "INSERT INTO customer (customer_firstname, customer_lastname, customer_email, 
customer_password, customer_address, customer_zip, customer_city) 
VALUES ('$customer_firstname', '$customer_lastname', '$customer_email', 
'$customer_password_hash', '$customer_address', '$customer_zip', '$customer_city')"; 
mysqli_query($conn, $sql) or die (mysqli_error($conn));
?>
