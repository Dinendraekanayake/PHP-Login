<?php
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styls.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <title>Login</title>
</head>

<style>
    
</style>
<body>
    
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <!-- <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>-->
  
  <?php 
    if(isset($_SESSION["username"])){
        echo '<li style="float:right"><a href="includes/logout.inc.php"> Logout! </a></li>';
        echo '<li style="float:right"><a href="#">'.$_SESSION["username"] . ' ! </a></li>';
        
    }else{
        echo '<li style="float:right"><a href="login.php">login</a></li>';
    }
     
    ?>

  </a></li> 
</ul>
    <div class="container" style="margin: 20px;">
    
   