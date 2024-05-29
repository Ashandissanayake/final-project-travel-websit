<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahaweli</title>

    <style>
        body
        {
            display: flex;
            
            
            min-height: 100vh;
            background:url(../img/image.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            
        }
        
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: #111;
        }

        .active {
        background-color: #04AA6D;
        }
    /* css for form */
    
        input[type=text], input[type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        button {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        .form {
            width : 70%;
            margin-left :auto ;
            margin-right :auto;
            text-align :center;
        }

        .error {
            color : red;
            border: 1px solid red;
            padding: 12px;
            font-size: 22px;
            margin-bottom: 10px;
        }
        /*btn*/
        .btn
{
    display: inline-block;
    padding: 40px 80px;
    background: #023020;
    color: #ffa343;
    font-size: 35px;
    font-weight: 600;
    border: 2px solid transparent;
    border-radius: 5px;
    transition: all .50s ease;
    cursor: pointer;
    margin-left: 450px;
    margin-top: 250px;
}

.btn:hover
{
    transform: translate(10px);
    border: 2px solid var(--text-color);
    background: transparent;
    color: var(--text-color);
}

    </style>
     
</head>
<body>
<ul>
  <li><a class="active" href="../index.php">Home</a></li>
  <!-- <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li> -->
  
  <?php 
    if (isset($_SESSION["username"])) {
        echo '<li style="float:right"><a href="includes/logout.inc.php">Logout</a></li>'; 
        echo '<li style="float:right"><a href="profile.php">'.$_SESSION["username"] . ' ! </a></li>'; 
        
    } else {
        echo '<li style="float:right"><a href="login.php">login</a></li>';
    }
     
     ?>
    
</ul>
    <div class="container" style="margin:20px;">