<?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'trainspotter');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Get username and password from the login form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT * FROM trainspotter WHERE Username='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, set session variables and redirect to a welcome page
        $_SESSION['username'] = $username;
        header('Location: welcome.php'); // Create a welcome page and redirect there
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username or password. Please try again.";
    }
}

// Close the database connection
$conn->close();
?>
