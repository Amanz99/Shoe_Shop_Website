<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">

    <title>Contact</title>
</head>

<body>
<header>
            <a class="logo" href="index.php"><img src="images/logo.png" alt="logo" height="50" width="150"></a>
            <nav>
                <ul class="nav__links">
                    <a href="index.php">Our Products</a>
                    <a style="color:White;">|</a>
                    <a href="Contact2.php">CONTACT US</a>
                </ul>
            </nav>
            <a class="cta" href="login.php">Login</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
               <a href="CasualShoe.php">Casual</a>
               <a style="color:White;"> | </a>
               <a href="SportsShoe.php">Sports</a>
               <a style="color:White;"> | </a>
               <a href="shoppingcart.php">Shopping cart</a>
               <a href="login.php">Login</a>
            </div>
        </div>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Contact Us</title>
</head>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        </div>
                        
                    <div class="card-body">
                        <form action="Contact.php" method="post">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Phonenumber" placeholder="Phone number(Optional)" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write your query"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                        <?php
            //including the database connection file
            include_once("conn.php");

            // Check If form submitted, insert user data into database.
            if (isset($_POST['btn-send'])) {
                $Email     = $_POST['Email'];
                $Phonenumber     = $_POST['Phonenumber'];
                $msg    = $_POST['msg'];
                

                // If email already exists, throw error
                // $email_result = mysqli_query($conn, "select 'email' from users where email='$email' and pass='$password'");
                
                
                $contact_result = $conn->query($sql);

                $sql = "INSERT INTO contactus (Email, Phone_Numbers, Query) values('$Email', '$Phonenumber', '$msg')";
                    $result = $conn->query($sql);

                    // check if user data inserted successfully.
                    if ($result) {
                        echo "<br/><br/>User message sent successfully.";
                    } else {    
                        echo "Error. Please try again." . mysqli_error($mysqli);
                    }
                
            }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>
   
</body>
    <div id="footer">
        <p>© 2022 Aman Zamarad</p>
    </div>
</html>