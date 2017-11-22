<?php
header("Location: index.php");
require('db.php');

$customer_firstname = $_POST['customer_firstname'];
$customer_surname = $_POST['customer_surname'];
$customer_email = $_POST['customer_email'];
$customer_password = $_POST['customer_password'];
$customer_address = $_POST['customer_address'];
$customer_zip = $_POST['customer_zip'];
$customer_city = $_POST['customer_city'];




$sql = "INSERT INTO customer (customer_firstname, customer_surname, customer_email, 
customer_password, customer_address, customer_zip, customer_city) 
VALUES ('$customer_firstname', '$customer_surname', '$customer_email', 
'$customer_password', '$customer_address', '$customer_zip', '$customer_city')"; 
mysqli_query($conn, $sql) or die (mysqli_error($conn));
?>
