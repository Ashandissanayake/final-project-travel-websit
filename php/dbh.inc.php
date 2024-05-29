<?php

$serverName = "localhost";
$dbUsername = "First_attem";
$dbPassword = "4pJgw.@0L!xIF2ld";
$dbName = "site_login";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}