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
<?php include('navbar.php')?>
    <?php 
        require('db.php');

        $sql = "SELECT * FROM customer";
        $tabell = mysqli_query($conn, $sql) 
        or die (mysqli_error($conn));
        echo "<table class='table'>";
        echo "<tr>
        <th>Kund ID</th>
            <th>Namn</th> <th>Efternamn</th>
            <th>Email</th> <th>Lösenord</th>
            <th>Adress</th> <th>Postkod</th>
            <th>Stad</th> <th>Ta bort</th>
    
        </tr>";
        while($rad = $tabell ->fetch_assoc()){
            echo "<tr> 
                    <td>".$rad['customer_id']."</td>
                    <td>".$rad['customer_firstname']."</td>
                    <td>".$rad['customer_surname']."</td> 
                    <td>".$rad['customer_email']."</td> 
                    <td>".$rad['customer_password']."</td> 
                    <td>".$rad['customer_address']."</td> 
                    <td>".$rad['customer_zip']."</td> 
                    <td>".$rad['customer_city']."</td> 
                    <td><a href='delete.php?customer_id=".$rad['customer_id']."' class='btn btn-outline-danger'>Ta bort</td>
                    
                </tr>";
        }

        echo "</table>";
     ?>
</body>
</html>


