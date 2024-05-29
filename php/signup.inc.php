<?php

if (isset($_POST["submit"]) ) 
{
    $name = $_POST["Fname"];
    $username = $_POST["uid"];
    $Telephone = $_POST["Telephone"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSignup($name,  $username, $Telephone, $pwdRepeat);
    $invalidUid = invalidUid( $username);
    $invalidEmail = invalidEmail( $email );
    $pwdMatch = pwdmatch( $pwd, $pwdRepeat );
    $uidExitsts = uidExists($conn,$username, $email );

    if ($emptyInput !== false)
    {      
        exit();
    }
    if ($invalidUid!== false)
    {      
        exit();
    }
    if ($invalidEmail !== false)
    {      
        exit();
    }
    if ($pwdMatch !== false)
    {      
        exit();
    }
    if ($uidExitsts !== false)
    {      
        exit();
    }

    createUser($conn, $name ,$email,$username,$pwd );
    

}
else
{
    header("../login.php");
    exit();
}


