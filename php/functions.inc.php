<?php
 
 function emptyInputSignup($name, $username, $Telephone, $pwdRepeat)
 {
    $result = $name ."". $username ." ". $Telephone ." ". $pwdRepeat;

    if(empty($name)  || empty($username) || empty($Telephone) || empty($pwd) || empty($phone) || empty($pwdRepeat))
    {
        $result = true;
    }else
    {
        $result = false;
    }
    return $result;
 }
 function invalidUid( $username)
 {
    $result = $username;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username) )
    {
        $result = true;
    }else
    {
        $result = false;
    }
    return $result;
 }
 function invalidEmail( $email )
 {
    $result = $email;
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        $result = true;
    }else
    {
        $result = false;
    }
    return $result;
 }
 function pwdmatch( $pwd, $pwdRepeat )
 {
    $result = $pwd;
    
    if($pwd !== $pwdRepeat)
    {
        $result = true;
    }else
    {
        $result = false;
    }
    return $result;
 }
 function uidExists($conn,$username, $email )
 {
    $sql = "SELECT * FROM users WHERE ID = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss", $username , $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else
    {
        return false;
    }

    mysqli_stmt_close($stmt);

 }

 function createUser($conn, $name ,$email,$username,$pwd )
 {
    $sql = "INSERT INTO users (usersname, usersEmail, usersTelephone, usersPwd ) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",  $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_execute($stmt);
    header("Locaton:../signup.php?error=none");
    exit();

 }
