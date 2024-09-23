<?php

// Start PHP session at the beginning 
session_start();

// Create database connection 
include_once("conn.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = md5($_POST['password']);


    // Check if a user exists with given username & password
    $sql = "SELECT email, pass from customer where email='$email' and pass='$password'";
    $result = $conn->query($sql);

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        
        header("location: CasualShoe.php");
    } else {
        echo "Incorrect email or password <br/><br/>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Login</title>
</head>

<body>

        <header>
            <a class="logo" href="/"><img src="images/logo.png" alt="logo" height="50" width="150"></a>
            <nav>
                <ul class="nav__links">
                    <a href="index.php"> Our Products</a>
                    <a style="color:White;"> | </a>
                    <a href="Contact2.php">Contact Us</a>
                </ul>
            </nav>
            <a class="cta" href="login.php">LOGIN</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
               <a href="CasualShoe">Casual</a>
               <a href="SportsShoe.php">Sports</a>
               <a href="shoppingcart.php">Shopping cart</a>
               <a href="login.php">Login</a>
            </div>
        </div>
        
        <div id="loginbox">
        <h1>Login</h1>
        <form action="login.php" method="post" name="form1">
            <table width="25%">
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
        
    
        <a href="register.php">Don't have an account? Sign up</a>
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <div id="footer">
        <p>© 2022 Aman Zamarad</p>
    </div>
    
</body>

</html>