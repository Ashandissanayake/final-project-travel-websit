<?php
    include_once 'header.php';
?>
  

    <h1><?php
    if (isset($_SESSION["username"])) {
        echo $_SESSION["username"] . ' !'; 
    } else {
        echo 'user !';
    }
     
     ?></h1>
     <p>Successfully login</p>

     <a href="../Book.php" class="btn">Book a Trip</a>
    


<?php
    include_once 'footer.php';
?>