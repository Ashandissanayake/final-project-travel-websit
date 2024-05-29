<?php
$serverName = "localhost";
$dbUsername = "dbase1";
$dbPassword = "W(DS0kdvcG)7rS5d";
$dbName = "customers";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
} 