<?php
// Include the database connection file
include 'connection.php';

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    
    $tableid = $_POST['tableidd'];
    $confirm = $_POST['confir'];

    // SQL query to insert data into the 'menu' table
    $sql_insert = "DELETE from tables where table_id='$tableid'";

    // Perform the insertion
    if ($connect->query($sql_insert) === TRUE && $confirm="confirm") {
        echo "<script>alert('Table deleted succesfully.');</script>";
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