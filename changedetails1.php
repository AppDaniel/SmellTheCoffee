<?php
session_start();
header("Location: index.php");
require('db.php');

if (session_status() == PHP_SESSION_NONE) {
    echo "session inte startat";
 }
   
    else {
 
         $user = $_SESSION['customer_id'];
    

    }

$customer_firstname = $_POST['customer_firstname'];
$customer_lastname = $_POST['customer_lastname'];
$customer_email = $_POST['customer_email'];
$customer_address = $_POST['customer_address'];
$customer_zip = $_POST['customer_zip'];
$customer_city = $_POST['customer_city'];


if(!empty($_POST[customer_lastname] || $_POST[customer_firstname] || $_POST[customer_email] || $_POST[customer_firstname]
|| $_POST[customer_address] || $_POST[customer_zip] || $_POST[customer_city])) 
{
    $sql = "UPDATE customer
    SET customer_firstname = '$customer_firstname',  customer_lastname = '$customer_lastname', 
    customer_email = '$customer_email', customer_address = '$customer_address',
    customer_zip = '$customer_zip', customer_city = '$customer_city'
    WHERE customer_id = ".$_SESSION['customer_id'];
    mysqli_query($conn, $sql) or die (mysqli_error($conn));

    $sql = "SELECT * FROM customer WHERE customer_id = $user";
    
    
    $query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    
    $row = mysqli_fetch_array($query);

    $_SESSION['customer_firstname']=$row['customer_firstname'];
    $_SESSION['customer_lastname']=$row['customer_lastname'];
    $_SESSION['customer_email']=$row['customer_email'];
    $_SESSION['customer_address']=$row['customer_address'];
    $_SESSION['customer_zip']=$row['customer_zip'];
    $_SESSION['customer_city']=$row['customer_city'];
    
    
}    



?>
