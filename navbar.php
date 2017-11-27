<?php
if(!(isset($_SESSION['customer_firstname'])))
{
  $login = $_SESSION ['login'] = '<a  class="dropdown-item" href="login.php">Login</a>';
}
if((isset($_SESSION['customer_firstname'])))
{
  $logout = $_SESSION ['logout'] = '<a  class="dropdown-item" href="logout.php">Logout</a>';
  $minasidor = $_SESSION ['minasidor'] = '<a  class="dropdown-item" href="customerinfo.php">Mina Sidor</a>';
}

/*
if(session_status() == PHP_SESSION_NONE)
   {
    $_SESSION ['login'] = '<a  class="dropdown-item" href="login.php">Login</a>';
       
   }
   else
   {
    $_SESSION ['logout'] = '<a  class="dropdown-item" href="logout.php">Logout</a>';
   }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Kaffe koppen som får dig att älska TE</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>   
</button>

<div class="collapse navbar-collapse" id="navbarsExample05">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="newcustomer.php">Ny Medlem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="customerlist.php">Medlemar</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu" aria-labelledby="dropdown05">
      <?php echo $logout?>
      <?php echo $login?>
      <?php echo $minasidor?>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
  </ul>
</div>
</nav>
    
</body>
</html>
