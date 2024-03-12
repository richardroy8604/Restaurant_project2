<?php
// Include the database connection file
include 'connection.php';

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    
    $item = $_POST['itemm'];

    // SQL query to insert data into the 'menu' table
    $sql_insert = "DELETE from menu where item='$item'";

    // Perform the insertion
    if ($connect->query($sql_insert) === TRUE) {
        echo "<script>alert('Item deleted succesfully.');</script>";
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