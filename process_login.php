<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get user input
$email = $_POST['email'];
$password = $_POST['psw'];

// SQL query
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Login successful
  $row = $result->fetch_assoc();
  $_SESSION['user_id'] = $row['id'];
  $_SESSION['first_name'] = $row['first_name'];
  header("Location: rof.php");
  exit;
} else {
  // Login unsuccessful
  echo "<div style='background-color: #FF5733; padding: 20px; border-radius: 10px; text-align: center;'>
          <h2>Login failed</h2>
          <p>Incorrect email or password. Please try again or create an account.</p>
          <a href='signup.php' style='background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;'>Create an account</a>
          <a href='login.php' style='background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;'>Try again</a>
        </div>";
}

$conn->close();
?>
