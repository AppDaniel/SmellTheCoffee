<?php
require 'db.php';
session_start();
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
<?php include('navbar.php')?>
<fieldset align="center">
	<legend>LOGGA IN HÄR</legend> 
	<form method="POST" action="logincheck.php"> Användarnamn <br>
	<input type="email" name="user" class='inp'><br> Lösenord <br>
	<input type="password" name="pass" class='inp' ><br><br> 
	<input id="button" type="submit" name="submit" value="Log-In"> 
	</form> 
	</fieldset>   
</body>
</html>
