<?php
session_start();
require('db.php');

if (session_status() == PHP_SESSION_NONE) {
    echo "session inte startat";
 }
   
    else {
 
      $user = $_SESSION['customer_id'];
    

    }




$customer_password = $_POST['customer_password'];

$sql = "SELECT * FROM customer WHERE customer_id = '$user'";
$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));

$row = mysqli_fetch_array($query);

$hash = $row['customer_password'];


$newcustomer_password = $_POST[customer_newpassword];
$confirmcustomer_password = $_POST[customer_confirmpassword];

if (password_verify($customer_password, $hash)){

    if($confirmcustomer_password === $newcustomer_password){

        $customer_password_hash = password_hash($newcustomer_password, PASSWORD_BCRYPT);
       
       $sql = "UPDATE customer
        SET customer_password = '$customer_password_hash'
        WHERE customer_id = ".$_SESSION['customer_id'];
        mysqli_query($conn, $sql) or die (mysqli_error($conn));

        $sql = "SELECT * FROM customer WHERE customer_id = $user";
        
        
        $query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
        
        $row = mysqli_fetch_array($query);
        $_SESSION['customer_password']=$row['customer_password'];
        header("Location: index.php");

    }

}else {echo "login fail";}




?>
