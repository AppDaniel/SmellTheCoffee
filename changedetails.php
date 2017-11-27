<?php
session_start(); 
require 'db.php';
   

if (session_status() == PHP_SESSION_NONE) {
    echo "session inte startat";
  } else {

    echo $_SESSION['customer_id'];
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
<?php include('navbar.php')?>
    
<h1 align="center">Ändra Uppfigter</h1>
<form action="changedetails1.php" method="post" align="center">
<label for="customer_firstname">Namn:</label>
<input type="text" name="customer_firstname" id="customer_firstname" value="<?php echo $_SESSION['customer_firstname']; ?>"><br>

<label for="customer_lastname" id="customer_lastname">Efternamn:</label>
<input type="text" name="customer_lastname" id="customer_lastname" value="<?php echo $_SESSION['customer_lastname']; ?>"><br>

<label for="customer_email" id="customer_email">Email:</label>
<input type="email" name="customer_email" id="customer_email" value="<?php echo $_SESSION['customer_email']; ?>"><br>

<label for="customer_address" id="customer_address">Adress:</label>
<input type="text" name="customer_address" id="customer_address" value="<?php echo $_SESSION['customer_address']; ?>"><br>

<label for="customer_zip" id="customer_zip">Postkod:</label>
<input type="text" name="customer_zip" id="customer_zip" value="<?php echo $_SESSION['customer_zip']; ?>"><br>

<label for="customer_city" id="customer_city">Stad:</label>
<input type="text" name="customer_city" id="customer_city" value="<?php echo $_SESSION['customer_city']; ?>"><br>

<input type="submit" name="add" style="background-color: green;"><br><br>   </form>

<form action="changepassword.php" method="post" align="center">
<label for="customer_password" id="customer_password" >Gammalt lösenord:</label>
<input type="password" name="customer_password" id="customer_password" placeholder="Gammalt lösenord"><br>

<label for="customer_newpassword" id="customer_newpassword" >Nytt lösenord:</label>
<input type="password" name="customer_newpassword" id="customer_newpassword" placeholder="Nytt lösenord"><br>

<label for="customer_confirmpassword" id="customer_confirmpassword" >Bekräfta lösenord:</label>
<input type="password" name="customer_confirmpassword" id="customer_confirmpassword" placeholder="Bekräfta lösenord"><br>

<input type="submit" name="changepassword" style="background-color: green;">

</form>

</body>
</html>
