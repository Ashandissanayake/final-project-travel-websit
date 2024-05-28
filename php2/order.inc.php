<?php 

if (isset($_POST["submit"])) {
    $Fname = $_POST["name"];
    $Email = $_POST["email"];
    $Telephone = $_POST["Telephone"];
    $Destination = $_POST["Destination"];
    $Package = $_POST["Package"];

    require_once 'db.inc.php';

    createUser($conn, $Fname, $Email, $Telephone, $Destination);
}
else
{
     echo 'Failed';
    exit();
}
