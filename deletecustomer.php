<?php
header("Location: customerlist.php");
//Ta bort en rad
require('db.php');

//Hämta data via URLen (med $_GET )
$deletecustomer = $_GET['customer_id'];
//Skapa SQL-satsen

$query = "DELETE FROM customer WHERE customer_id = '$deletecustomer' ";

mysqli_query($conn, $query) or die (mysqli_error($conn));   


/*
print("<pre>");
print_r($_GET); 
*/

?>
