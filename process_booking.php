<?php

session_start(); // Start the session

// Check if the user is logged in and the email is set in the session
if (isset($_SESSION['logged_in_user'])) {
    $logged_in_user_email = $_SESSION['logged_in_user'];

    // Database credentials
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "restraunt"; // your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the form
    $name = $logged_in_user_email;
    $phone = $_POST['phone_number'];
    $table_number = $_POST['table_number'];
    $booking_date = $_POST['booking_time'];
    $seatno = $_POST['seating_capacity'];
    $ac = $_POST['ac_type'];

    // Check if the entered date and table number already exist in the table
    $sql_check = "SELECT * FROM booking WHERE booking_time = '$booking_date' AND table_id = '$table_number'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        // If the data already exists, redirect to 'resfailed.php'
        $_SESSION['tableavail'] = $table_number;
        $conn->close();
        echo "<script>alert('this table is already booked. please try booking again');</script>";
        echo "<script>window.location.href='mac-book-pro-14-5.php';</script>";
        exit();
    } else {
        // If the data doesn't exist, insert into the database
        $sql_insert = "INSERT INTO booking (email, phone_number, table_id, booking_time, number_of_seats, is_ac) 
                       VALUES ('$name', '$phone', '$table_number', '$booking_date', '$seatno', '$ac')";

        if ($conn->query($sql_insert) === TRUE) {
            // If insertion successful, close connection and redirect to a success page
            $sql_update = "UPDATE tables SET s$booking_date = 0 WHERE table_id='$table_number'";
            $conn->query($sql_update);
            $conn->close();
            echo "<script>alert('Booking Successful, Thank you for choosing us');</script>";
            echo "<script>window.location.href='mac-book-pro-14-3.php';</script>";
            exit();
        } else {
            // If there's an error in insertion, handle it accordingly
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
} else {
    // If the user is not logged in, handle the situation (redirect or error message)
    echo "User not logged in";
    // Redirect or perform necessary actions for non-logged-in users
}
?>
