<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Registration</title>
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
            <a class="cta" href="login.php">Login</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
               <a href="CasualShoe.php">Casual</a>
               <a href="SportsShoe.php">Sports</a>
               <a href="shoppingcart.php">Shopping cart</a>
               <a href="login.php">Login</a>
            </div>
        </div>
    
    <div id="registerbox">
    <div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post" name="form1">
            <table width="100%">
            <tr>
                    <td>First Name</td>
                    <td><input type="text" name="forename" required></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="surname" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                    <td>Password</td>   
                    <td><input type="password" name="pass" required></td>
                </tr>   
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address1" required></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="integer" name="phonenumber" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="register" value="Register"></td>
                </tr>
            </table>
            <a href="login.php">Login</a>
            </div>
            <?php
            //including the database connection file
            include_once("conn.php");

            // Check If form submitted, insert user data into database.
            if (isset($_POST['register'])) {
                $firstname     = $_POST['forename'];
                $lastname     = $_POST['surname'];
                $email    = $_POST['email'];
                $password = md5($_POST['pass']);
                $address  = $_POST['address1'];
                $phonenum = $_POST['phonenumber'];

                // If email already exists, throw error
                // $email_result = mysqli_query($conn, "select 'email' from users where email='$email' and pass='$password'");
                
                $sql = "SELECT Email from customer where Email='$email' and Pass='$password'";
                $email_result = $conn->query($sql);
                
                // Count the number of row matched 
                $user_matched = mysqli_num_rows($email_result);

                // If number of user rows returned more than 0, it means email already exists
                if ($user_matched > 0) {
                    echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$email'.";
                } else {
                    // Insert user data into database
                    
                    $sql = "INSERT INTO customer (Address1, Forename, Surname, Email, Pass, Phonenumber) values('$address', '$firstname', '$lastname', '$email', '$password', '$phonenum')";
                    $result = $conn->query($sql);

                    // check if user data inserted successfully.
                    if ($result) {
                        echo "<br/><br/>User Registered successfully.";
                    } else {    
                        echo "Registration error. Please try again." . mysqli_error($mysqli);
                    }
                }
            }

            ?>
        </form>
    </div>
</body>
    <div id="footer">
        <p>© 2022 Aman Zamarad</p>
    </div> 
</html>