<?php
session_start();

$FullName = $_POST['FullName'];
$Email = $_POST['Email'];
$Telephone = $_POST['Telephone'];
$Destination = $_POST['Destination'];
$Package = $_POST['Package'];

if(! empty($FullName) || empty($Email) || empty($Telephone) || empty($Destination) || empty($Package)){

    $serverName = "localhost";
    $dbUsername = "test20";
    $dbPassword = "4[eqpS(fV4v9KM@Q";
    $dbName = "orders";

    $conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_errno()) {
    
      die('Connection failed:('. mysqli_connect_error().'	'. mysqli_connect_error());
    }
    else
    {
       $sql = "INSERT INTO trip_orders (FullName, Email, Telephone, Destinaion, Package) 
       values ('$FullName','$Email','$Telephone','$Destination','$Package')";

       if($conn->query($sql)){

        $_SESSION['status'] = "Order Inserted Successfully";
        header('Location: Booking.php');

    }
    else
    {
        echo "Error";
    }
    $conn->close();
    }

} else
{
    echo "Fill the form";
}


    




?>