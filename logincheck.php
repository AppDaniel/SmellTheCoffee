<?php
require('db.php');

// Hämtar fårn idex formuläret
$user = $_POST['user'];
$pass = $_POST['pass'];

//Hämtar users
$sql = "SELECT * FROM customer WHERE customer_email = '$user'";


$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));

$row = mysqli_fetch_array($query);
//Jämför password med user
$dbpassword = $row['customer_password']; 

if($pass == $dbpassword){
    echo "Du är nu inne i systemet";

} else{

    header("Location: login.php");
}

?>
