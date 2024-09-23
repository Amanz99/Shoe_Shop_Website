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
                    <a href="SportsShoe.php">SPORTS</a>
                    <a style="color:White;"> | </a>
                    <a href="shoppingcart.php">Shopping cart</a>
                    <a style="color:White;"> | </a>
                    <a href="viewaccount.php">View Account</a>
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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "21183681";
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_errno) {
            die("Connection failed: " . $conn->connect_error);
            exit();
        }

        $sql = "SELECT * FROM shoe";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            //Output data of each row
        
        ?>
        <?php
        $sql = "SELECT * from customer WHERE Email = '".$_SESSION['email']."'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $custid = $row["Customer_ID"];
        }
        ?>
               <table>
            

               <div class="container">
            <div class="row">
            <?php
            $i = 1;
            while ($i <= 3) {
            ?>
            <div class="col-sm-4">
                <div class="text-center">
                <?php
                $sql = "SELECT * FROM sportsshoe WHERE Shoe_ID=$i";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <img src="images/<?php echo $row["Shoe img"]; ?>" width="300" height="200"><br>
                    <?php echo $row["Shoe name"]; ?><br>
                    <?php echo $row["Colour"]; ?><br>
                    <?php 
                    $price = $row["Price"]; 
                    echo "£$price.00";?><br>
                    <?php
                    $size = $row["size"];
                    echo "Size $size";
                    }
                    ?>
                    <form  method="post">
                        Quantity: <input type="number" name="quantity" value="1">
                        <input type="submit" value="Add to Cart">
                    </form>
                    <?php
                
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Retrieve the values from the form
                    $quantity = $_POST["quantity"];
                
                    // Generate the SQL query
                    $sql = "INSERT INTO cart (Shoe_ID, Customer_ID, quantity)
                            VALUES ($i, $custid, $quantity)";
                
                    // Execute the query
                    if (mysqli_query($conn, $sql)) {
                        echo "Item(s) added to cart successfully";
                    } else {
                        echo "Error adding record: " . mysqli_error($conn);
                    }
                }
            
                ?>
                </div>
                </div>
            <?php
            $i++;
            }}
            ?>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>

    <div id="footer">
        <p>© 2022 Aman Zamarad</p>
    </div> 
</body>

</html>