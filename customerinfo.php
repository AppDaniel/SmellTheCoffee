<?php
session_start(); 
require 'db.php';

if (session_status() == PHP_SESSION_NONE) {
    echo "session inte startat";
 }
   
    else {
 
        echo $use =  $_SESSION['customer_id'];
    

    }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php include('navbar.php'); ?>
<div align="center">
<?php
 $sql = "SELECT * FROM customer WHERE customer_id = $use ";
 $tabell = mysqli_query($conn, $sql)  or die (mysqli_error($conn));
 while($rad = $tabell ->fetch_assoc()){
    echo "<h5>Namn : </h5>";
    echo $rad['customer_firstname']," ", $rad['customer_lastname']; 
    echo "<h5>Email : </h5>";
     echo $rad['customer_email'];
     echo "<h5>Adress : </h5>";
   echo $rad['customer_address']; 
   echo "<h5>Postkod : </h5>";
     echo $rad['customer_zip']; 
     echo "<h5>Stad : </h5>";
    echo $rad['customer_city']; 
}

    ?>
    <br>
    <a href='changedetails.php' class='btn btn-outline-primary'>Ändra uppgifter</a>
    </div>
   <!--
     <?php
    $sql = "SELECT * FROM customer WHERE customer_id = '6' ";
    $tabell = mysqli_query($conn, $sql) 
    or die (mysqli_error($conn));
    echo "<table class='table'>";
    echo "<tr>
        <th>Namn</th> <th>Efternamn</th>
        <th>Email</th>
        <th>Adress</th> <th>Postkod</th>
        <th>Stad</th> <th>Ta bort</th>

    </tr>";
    while($rad = $tabell ->fetch_assoc()){
        echo "<tr> 
                <td>".$rad['customer_firstname']."</td>
                <td>".$rad['customer_lastname']."</td> 
                <td>".$rad['customer_email']."</td> 
                <td>".$rad['customer_address']."</td> 
                <td>".$rad['customer_zip']."</td> 
                <td>".$rad['customer_city']."</td> 
                <td><a href='changedetails.php' class='btn btn-outline-danger'>Ta bort</td>
                
            </tr>";
    }

    echo "</table>";
    ?> 
    -->
                
</body>
</html>
