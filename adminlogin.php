<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-image: url("logo.php"); /* Replace 'path_to_your_image.jpg' with your image path */
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      color: #000000; /* Text color */
      text-align: center;
    }
    .success-message {
      font-size: 40px;
      margin-bottom: 20px;
    }
    .welcome-username {
      font-size: 46px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .login-link {
      color: #fff;
      text-decoration: none;
      font-size: 20px;
      margin-top: 10px;
    }
    .login-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
    <?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restraunt"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password (for security, you should use a strong hashing algorithm)
$hashedPassword = hash('sha256', $password);

// Query to check if the provided email and hashed password exist in the database

// Function to validate email format
function isValidEmail($eid) {
  return filter_var($eid, FILTER_VALIDATE_EMAIL);
}

$sql = "SELECT * FROM admindata WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

$sqll = "SELECT * FROM admindata WHERE email='$email'";
$resultt = $conn->query($sqll);

if ($result->num_rows > 0) {
  // Login successful
  header("Location: adminpage.php");
  exit();
}
elseif (!isValidEmail($email)) {
  echo "<script>alert('Invalid email format.');</script>";
  echo "<script>window.location.href='adminlogin.html';</script>";
}

elseif($resultt->num_rows === 0) {
  echo "<script>alert('User doesnt Exist. Make sure the ADMIN credentials aare right');</script>";
  echo "<script>window.location.href='adminlogin.html';</script>";

}
else {
    // Login failed
    echo "<script>alert('Invalid ADMIN Password');</script>";
    echo "<script>window.location.href='adminlogin.html';</script>";
}

$conn->close();
?>