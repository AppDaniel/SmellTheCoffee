<?php
session_start();
require 'db.php';
    

if (session_status() == PHP_SESSION_NONE) {
   echo "session inte startat";
}
  
   else {

    echo $_SESSION['customer_id'];
   }


?>
<!DOCTYPE html>
<html lang="sv">
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
<?php include('navbar.php');?>


</form>
<h1 align="center" style="background-color: green;">Hej Hej!<br><?php echo $_SESSION['customer_firstname']?></h1>
<?php
/*
require('db.php');


$sql = "SELECT customer_id, customer_firstname, customer_lastname FROM customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["customer_id"]. " - Name: " . $row["customer_firstname"]. " " . $row["customer_lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


*/

?>  
</body>
</html>
