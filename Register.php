<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <title>Register</title>
</head>
<body>

    <div class="wrapper">
        <form action="php/signup.inc.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" name="name" placeholder="Full name with initials" required>
                <i class='bx bxs-user'></i>

            </div>
           
            <div class="input-box">
                <input type="text" name="uid"  placeholder="Username" required>
                <i class='bx bxs-user'></i>

            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
                
            </div>
            <div class="input-box">
                <input type="text" name="tp" placeholder="Telephone" required>
                
            </div>
            <div class="input-box">
                <input type="text" name="Add" placeholder="Address" required>
                
            </div>
            <div class="input-box">
                <input type="password" name="pwd" placeholder="password" required>
                
            </div>
            <div class="input-box">
                <input type="password" name="pwdrepeat" placeholder="Confirm password" required>
                
            </div>
            <div class="register-link">
                <p>Already have an account ?<a href="login.php">Log In</a></p>
            </div>
            
            <button type="submit" class="btn">Register</button>
        </form>
    </div>
    
</body>
</html>