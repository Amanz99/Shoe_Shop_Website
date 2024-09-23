

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Home</title>
</head>

<body>
<header>
            <a class="logo" href="CasualShoe.php"><img src="images/logo.png" alt="logo" height="50" width="150"></a>
            <nav>
                <ul class="nav__links">
                    <a href="CasualShoe.php">Casual</a>
                    <a style="color:White;"> | </a>
                    <a href="SportsShoe.php">Sports</a>
                    <a style="color:White;"> | </a>
                    <a href="shoppingcart.php">SHOPPING CART</a>
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
               <a href="shoppingcart.php">SHOPPING CART</a>
               <a href="viewaccoutn.php">View Account</a>
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

        <h3 style="text-align: center;">Order Details</h3>  
                <div class="table-responsive">  
                <?php
                include "conn.php";
                $sql = "SELECT shoe_ID, Customer_ID, Quantity, Price FROM cart ";
                $result = $conn->query($sql);

                 // Create an array to hold the data for the table rows
                $items = [];

            if ($result->num_rows > 0) {
                 // Loop through the results and add each row to the array
                while($row = $result->fetch_assoc()) {
                $items[] = [$row["shoe_ID"], $row["Customer_ID"], $row["Quantity"], $row["Price"]];
                }
            }

            // Close the database connection
            $conn->close();
            ?>

<table>
  <thead>
    <tr>
      <th>Shoe ID</th>
      <th>Customer ID</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // Loop through the items and create a table row for each one
      foreach ($items as $item) {
        echo "<tr>";
        echo "<td>".$item[0]."</td>";
        echo "<td>".$item[1]."</td>";
        echo "<td>".$item[2]."</td>";
        echo "<td>"."£".($item[2] * $item[3]).".00"."</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
    </div>  
    </div>  
   <br /> 
    
        


        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>

    <div id="footer">
        <p>© 2022 Aman Zamarad</p>
    </div> 
</body>

</html>