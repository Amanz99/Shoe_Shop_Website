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
                    <a href="viewaccount.php">VIEW ACCOUNT</a>
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
    $sql = "SELECT * from customer WHERE Email = '".$_SESSION['email']."'";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        // output data of each row
    ?>
    <h3 style='text-align: center; '>Details</h3>
    </div >
        <table style="padding-top: 20px;">
            <tr>
                <td><b>First name</b></td>
                <td><b>Last name</b></td>
                <td><b>Address</b></td>
                <td><b>Email</b></td>
                <td><b>Phone Number</b></td>
                
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
            $custid = $row["Customer_ID"];
            ?>
                <div id=displayuser>
                
                <tr>
                    
                    <td><?php echo $row["Forename"]; ?></td>
                    <td><?php echo $row["Surname"]; ?></td>
                    <td><?php echo $row["Address1"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Phonenumber"]; ?></td>
                </tr>
                
            </div>
            
            <?php
            
            }
            ?>
        </table>
        <div style="text-align: center;">
            <a href="Update.php?custid=<?php echo $custid?>">Update</a>
            <a href="Delete.php?custid=<?php echo $custid ?>">Delete</a>
        </div>
        </div>
    <?php
    } else {
    ?>
        <p>0 results</p>
    <?php
    }
    $conn->close();
    ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    </div>
    <div id="footer">
        <p>© 2022 Aman Zamarad</p>
    </div> 
</body>

</html>
