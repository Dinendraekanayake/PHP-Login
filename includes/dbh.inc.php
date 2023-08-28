<?php
$serverName = "localhost";
$dbUsername = "dinendra123";
$dbPassword = "dinendra1/*";
$dbName = "php-login";

$conn = mysqli_connect($serverName, $dbUsername,$dbPassword, $dbName);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}