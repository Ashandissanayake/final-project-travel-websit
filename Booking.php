<?php

    session_start();

?>


<!DOCTYPE html>
<html>
<style>
    body {
    margin: 60px;
    background: url(image.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
    color: #333;
    font: 100% / normal sans-serif;
    
  }
    .heading
{
    text-align:center;
    padding: 2.5rem 0;

}
.heading span
{
    font-size: 3.5rem;
    background: rgba(255,155,0,.2);
    color: var(--orange);
    border-radius: .5rem;
    padding: .2rem 1rem;
    display: inline-block;
}
input[type=text],input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
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

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1 class="heading">
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span>N</span>
        <span>O</span>
        <span>W</span>
    </h1>
<?php

    if(isset($_SESSION['status']))
    {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Hey</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php

        
        unset($_SESSION['status']);
    }

?>

<div>
  <form action="connect.php" method="post">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="FullName" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="Email" placeholder="Email">

    <label for="lname">Telephone</label>
    <input type="number" id="lname" name="Telephone" placeholder="Telephone">

    <label for="lname">Destination</label>
    <input type="text" id="lname" name="Destination" placeholder="Destination">

    <label for="lname">Package</label>
    <input type="text" id="lname" name="Package" placeholder="GOLD/SILVER/BRONZE">
    
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>