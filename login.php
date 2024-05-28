<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="loginstyle.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
    </head>

    <body>

        <div class="wrapper">
            <form action="php/login.inc.php" method="post">
                <h1>Log In</h1>
                <div class="input-box">
                    <input type="text" name="uid" placeholder="Username"  required>
                    <i class='bx bxs-user'></i>

                </div>
                <div class="input-box">
                    <input type="password" name="pwd" placeholder="password"  required>
                    
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                    <a href="#">Forgot password</a>
                </div>
                <button type="submit" class="btn">Log in</button>
                <div class="register-link">
                    <p>Don't have an account ?<a href="Register.php">Register</a></p>
                </div>
            </form>
        </div>

    </body>



</html>