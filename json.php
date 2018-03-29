<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
require('db.php');

echo "<h1>Test</h1>";

$query = "SELECT `product_name`,`product_description`, `product_cost` ,`product_quantity`, `product_image3` FROM `product`";

$table = mysqli_query($conn, $query) 
    or die(mysqli_error($conn));

$temparray = array();
while($row = $table-> fetch_assoc()){
    $temparray[] = $row;
}

$json_string = json_encode($temparray, JSON_PRETTY_PRINT);
echo "<pre>$json_string</pre>";


?>
<body>
</body>
</html>
