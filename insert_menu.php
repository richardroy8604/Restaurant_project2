<?php
// Include the database connection file
include 'connection.php';

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    
    $item = $_POST['item'];
    $price = $_POST['price'];
    $item_number = $_POST['Category'];

    // SQL query to insert data into the 'menu' table
    $sql_insert = "INSERT INTO menu (item, price,Category) VALUES ('$item', '$price','$item_number')";

    // Perform the insertion
    if ($connect->query($sql_insert) === TRUE) {
        echo "<script>alert('Item added succesfully.');</script>";
    echo "<script>window.location.href='adminpage.php';</script>";
        exit();
    } else {
        // Handle errors if the insertion fails
        echo "Error: " . $sql_insert . "<br>" . $connect->error;
    }
}

// Close the database connection
$connect->close();
?>