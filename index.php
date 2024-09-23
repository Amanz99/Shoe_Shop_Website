<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <title>Casual Shoes</title>
    
</head>

<body>
    
<header>
            <a class="logo" href="/"><img src="images/logo.png" alt="logo" height="50" width="150"></a>
            <nav>
                <ul class="nav__links">
                    <a href="index.php">OUR PRODUCTS</a>
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
               <a href="viewaccount.php">View Account</a>
            </div>
        </div>    

        <h2 style=text-align:center;>TO MAKE AN ORDER PLEASE LOGIN</h2>

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
               <table>
            

            <div class="container">
            <div class="row">
            <div class="col-sm-4">
                <div class="text-center">
                <?php
                $sql = "SELECT * FROM shoe WHERE Shoe_ID=1";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <img src="images/<?php echo $row["Shoe img"]; ?>" width="300" height="200"><br>
                    <?php echo $row["Shoe Name"]; ?><br>
                    <?php echo $row["Colour"]; ?><br>
                    <?php 
                    $price = $row["Price"]; 
                    echo "£$price.00";?><br>
                    <?php
                    $size = $row["Size"];
                    echo "Size $size";
                    }
                    ?>
                </div>
                </div>

                <?php
                }
                ?>
            
            
            <div id = product class="col-sm-4">
                <div class="text-center">
                <?php
                $sql = "SELECT * FROM shoe WHERE Shoe_ID=2";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <img src="images/<?php echo $row["Shoe img"]; ?>" width="300" height="200"><br>
                    <?php echo $row["Shoe Name"]; ?><br>
                    <?php echo $row["Colour"]; ?><br>
                    <?php 
                    $price = $row["Price"]; 
                    echo "£$price.00";?><br>
                    <?php
                    $size = $row["Size"];
                    echo "Size $size";
                    }
                    ?>
                    
                </div>
                </div>
                

            <div class="col-sm-4">
                <div class="text-center">
                <?php
                $sql = "SELECT * FROM shoe WHERE Shoe_ID=3";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <img src="images/<?php echo $row["Shoe img"]; ?>" width="300" height="200"><br>
                    <?php echo $row["Shoe Name"]; ?><br>
                    <?php echo $row["Colour"]; ?><br>
                    <?php 
                    $price = $row["Price"]; 
                    echo "£$price.00";?><br>
                    <?php
                    $size = $row["Size"];
                    echo "Size $size";
                    }
                    ?>
                </div>
                </div>

                <div class="col-sm-4">
                <div class="text-center">
                <?php
                $sql = "SELECT * FROM shoe WHERE Shoe_ID=5";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <img src="images/<?php echo $row["Shoe img"]; ?>" width="300" height="200"><br>
                    <?php echo $row["Shoe Name"]; ?><br>
                    <?php echo $row["Colour"]; ?><br>
                    <?php 
                    $price = $row["Price"]; 
                    echo "£$price.00";?><br>
                    <?php
                    $size = $row["Size"];
                    echo "Size $size";
                    }
                    ?>
                </div>
                </div>

                <div class="col-sm-4">
                <div class="text-center">
                <?php
                $sql = "SELECT * FROM shoe WHERE Shoe_ID=4";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <img src="images/<?php echo $row["Shoe img"]; ?>" width="300" height="200"><br>
                    <?php echo $row["Shoe Name"]; ?><br>
                    <?php echo $row["Colour"]; ?><br>
                    <?php 
                    $price = $row["Price"]; 
                    echo "£$price.00";?><br>
                    <?php
                    $size = $row["Size"];
                    echo "Size $size";
                    }
                    ?>
                </div>
                </div>



                </div>
                </div>

                
            
            
            
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>

    <div id="footer">
        <p>© 2022 Aman Zamarad</p>
    </div> 
</body>

</html>     