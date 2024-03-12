<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve AC type and seating capacity from the POST data
    $acType = $_POST["ac_type"];
    $seatingCapacity = $_POST["seating_capacity"];
    $booking_time = $_POST["booking_time"];

    // Check if booking time is between 9 and 19 (inclusive)
    if ($booking_time >= 9 && $booking_time <= 19) {
        // Perform a SELECT query to check availability
        $sql = "SELECT table_id, is_ac, seats FROM tables WHERE is_ac = $acType AND seats = $seatingCapacity AND s$booking_time = 1";
        $result = $connect->query($sql);

        // Display the result
        if ($result->num_rows > 0) {
            echo '<table border="1">';
            echo '<tr><th>Table ID</th><th>AC Type</th><th>Seating Capacity</th></tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["table_id"] . '</td>';
                echo '<td>' . ($row["is_ac"] ? 'AC' : 'Non AC') . '</td>';
                echo '<td>' . $row["seats"] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo "No available tables matching the criteria \n We Are Extremely Sorry :(";
        }
    } else {
        // Display an alert using JavaScript
        echo '<script>alert("Booking time must be between 9 and 19 (inclusive).");</script>';
    }
} else {
    // If the request method is not POST, handle accordingly (e.g., redirect or display an error)
    echo 'Invalid request method.';
}
?>
