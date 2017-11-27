<?php
session_start(); 
require('db.php');



// Hämtar fårn index formuläret
$user = $_POST['user'];
$pass = $_POST['pass'];


//Hämtar users
$sql = "SELECT * FROM customer WHERE customer_email = '$user'";


$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));

$row = mysqli_fetch_array($query);
//Jämför password med user
$hash = $row['customer_password'];

if (password_verify($pass, $hash)) {
    $_SESSION['customer_id']=$row['customer_id'];
    $_SESSION['customer_firstname']=$row['customer_firstname'];
    $_SESSION['customer_lastname']=$row['customer_lastname'];

    $_SESSION['customer_email']=$row['customer_email'];
    $_SESSION['customer_password']=$row['customer_password'];
    $_SESSION['customer_address']=$row['customer_address'];
    $_SESSION['customer_zip']=$row['customer_zip'];
    $_SESSION['customer_city']=$row['customer_city'];

   
    
    header("Location: index.php");

} else{

    $_SESSION['error'] = '<h1 style="color: red;">Fel anv eller email</h1>';
    header("Location: login.php");
    
    } 

/*

/* now displaying the session id..... 

if($pass == $dbpassword){

    $_SESSION['customer_id']=$row['customer_id'];
    $_SESSION['customer_firstname']=$row['customer_firstname'];
    $_SESSION['customer_lastname']=$row['customer_lastname'];

    $_SESSION['customer_email']=$row['customer_email'];
    $_SESSION['customer_password']=$row['customer_password'];
    $_SESSION['customer_address']=$row['customer_address'];
    $_SESSION['customer_zip']=$row['customer_zip'];
    $_SESSION['customer_city']=$row['customer_city'];

   
    
    header("Location: index.php");

} else{

    $_SESSION['error'] = '<h1 style="color: red;">Fel anv eller email</h1>';
    header("Location: login.php");
    
    }  

*/
if(isset($_POST['submit'])) { SignIn(); } 
?>
