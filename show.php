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
include 'connection.php';

$uname = $_GET["name"];
$eid = $_GET["email"];
$pw1 = $_GET["pass1"];
$pw2 = $_GET["pass2"];

// Function to validate email format
function isValidEmail($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate password format
function isValidPassword($password) {
  // Password should have at least 8 characters, an uppercase letter, a special character, and a number
  return preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password);
}

if (!isValidEmail($eid)) {
  echo "<script>alert('Invalid email format. Registration unsuccessful.');</script>";
  echo "<script>window.location.href='reg1.html';</script>";
}elseif ($pw1 !== $pw2) {
  echo "<script>alert('passwords do not match.');</script>";
  echo "<script>window.location.href='reg1.html';</script>";
} 
elseif (!isValidPassword($pw1)) {
  echo "<script>alert('Invalid password format. password must be minimum 8 charachters. it should have atleast 1 uppercase, One digit, one special character');</script>";
    echo "<script>window.location.href='login.html';</script>";
}
 elseif ($pw1 === $pw2 && isValidPassword($pw1)) {
  $query = "INSERT INTO registerdata(Name,email,password) VALUES ('$uname','$eid','$pw1')";
  $result = $connect->query($query);

  if ($result) {
    echo "<script>alert('Registration successful. Welcome $uname');</script>";
    echo "<script>window.location.href='login.html';</script>";
  } else {
    echo "<script>alert('You already have an account with this email id.');</script>";
    echo "<script>window.location.href='reg1.html';</script>";
  }
} else {
  echo "<script>alert('Invalid password format. password must be minimum 8 charachters. it should have atleast 1 uppercase, One digit, one special character');</script>";
  echo "<script>window.location.href='login.html';</script>";
}
?>


</body>
</html>