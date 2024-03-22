<?php
// Initialize variables
$name = '';
$surname = '';
$email = '';
$username = '';
$password = '';

// Check if POST data exists for each key and assign values accordingly
if(isset($_POST['name'])) {
    $name = $_POST['name'];
}

if(isset($_POST['surname'])) {
    $surname = $_POST['surname'];
}

if(isset($_POST['email'])) {
    $email = $_POST['email'];
}

if(isset($_POST['username'])) {
    $username = $_POST['username'];
}

if(isset($_POST['password'])) {
    $password = $_POST['password'];
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'trainspotter');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// SQL query to insert data into the database
$sql = "INSERT INTO trainspotter (Name, Surname, Email, Username, Password)
VALUES ('$name', '$surname', '$email', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Record has been added";
} else {
    echo "Error: " . $sql . " - " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

// Function to sanitize user input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>