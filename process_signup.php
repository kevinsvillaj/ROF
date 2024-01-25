<?php
// Database credentials
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'articles';

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["psw"];

    // Check if email already exists
    $check_sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check_sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<div style='background-color: #FF5733; padding: 20px; border-radius: 10px; text-align: center;'>
        <h2>Login failed</h2>
        <p>Email already Associated with a different account. Please use a different email Or login with your account.</p>
        <a href='signup.php' style='background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;'>Try agian</a>
        <a href='login.php' style='background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;'>Log in</a>
      </div>";
        
    } else {
        // Insert new user record
        $insert_sql = "INSERT INTO users (first_name, last_name, dob, gender, email, password) VALUES ('$fname', '$lname', '$dob', '$gender', '$email', '$password')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "<div style='background-color: #FF5733; text-align: center; padding: 20px;'>Congrats! You have made an account. Click <a href='login.php'>here</a> to log in.</div>";
        } else {
            echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
