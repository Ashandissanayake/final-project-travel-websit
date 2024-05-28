<?php
$serverName = "localhost";
$dbUsername = "dbase2";
$dbPassword = "PKUHEYFwmVIF3]9a";
$dbName = "customers";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
} 