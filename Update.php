<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <title>Sports Shoes</title>
    
</head>

<body>
    
        
<header>
            <a class="logo" href="/"><img src="images/logo.png" alt="logo" height="50" width="150"></a>
            <nav>
                <ul class="nav__links">
                    <a href="CasualShoe.php">Casual</a>
                    <a style="color:White;"> | </a>
                    <a href="SportsShoe.php">Sports</a>
                    <a style="color:White;"> | </a>
                    <a href="shoppingcart.php">Shopping cart</a>
                    <a style="color:White;"> | </a>
                    <a href="viewaccount.php">View account</a>
                    <a style="color:White;"> | </a>
                    <a href="Contact.php">Contact Us</a>
                </ul>
            </nav>
            <a class="cta" href="logout.php">Log Out</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
               <a href="CasualShoe.php">Casual</a>
               <a href="SportsShoe.php">Sports</a>
               <a href="shoppingcart.php">Shopping cart</a>
               <a href="viewaccount.php">View Account</a>
            </div>
        </div>

    <div id=loggedin>
        <?php
        session_start();


        if($_SESSION['email']){
            echo"Logged in as, " . $_SESSION['email'];
        }

        ?>
    </div>
<?php
    include "conn.php";

    // Define the customer ID
    $Custid = $_GET['custid'];
    
    // Fetch customer data based on customer ID
    $sql = "SELECT * FROM customer WHERE 'Customer_ID'=$Custid";
    // Perform the database query
    $result = $conn->query($sql);

    
    // Check if the query was successful
    if ($result !== false) {
    // Iterate over the query results
        while ($row = $result->fetch_assoc()) {
            $firstname = $row['Forename'];
            $lastname = $row['Surname'];
            $email = $row['Email'];
            $phone = $row['Phonenumber'];
        }
    } else {
    // Handle the error
        echo "Error: " . $conn->error;
    }
    ?>
    <form name="update_user" method="post" action="">
        <table>
            <tr>
                <td>first name</td>
                <td><input type="text" name="Firstname" value=""></td>
            </tr>
            
            <tr>
                <td>last name</td>
                <td><input type="text" name="lastname" value=""></td>
            </tr>
            
            <tr>
                <td>Address</td>
                <td><input type="text" name="Address" value=""></td>
            </tr>
            
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value=""></td>
            </tr>
            
            <tr>
                <td>Phone number</td>
                <td><input type="text" name="Phonenumber" value=""></td>
            </tr>
            <tr>
                <td><input type="hidden" name="custid" value="<?php echo $Custid; ?>"></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
    <h5 style="text-align: center; color: red; padding-top: 70px;">BY CLICKING "UPDATE" YOU WILL BE REQUIRED TO LOG IN AGAIN</h5>




<?php
    if (isset($_POST['update'])) {
        $Custid = $_POST['custid'];
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['lastname'];
        $Address = $_POST['Address'];
        $email = $_POST['email'];
        $phone = $_POST['Phonenumber'];

        

        // update genre data
        $sql = ("UPDATE `customer` SET `Address1` = '$Address', `Forename` = '$firstname', `Surname` = '$lastname', `Email` = '$email', `Phonenumber` = '$phone' WHERE `customer`.`Customer_ID` = '$Custid'");
        $result = $conn->query($sql);
        // Redirect to homepage to display updated details
        header("Location: logout.php");
    }
    ?>
    <?php
    $conn->close();
    ?>