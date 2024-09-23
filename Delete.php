<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php

    include "conn.php";

    // Get genreid from URL to delete that genre
    $custid = $_GET['custid'];

    // Delete genre row from table based on given genreid
    $sql = ("DELETE FROM customer WHERE Customer_ID=$custid");
    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    // After delete redirect to Home, so that latest genre list will be displayed.
    header("Location:login.php");

    ?>
</body>

</html>