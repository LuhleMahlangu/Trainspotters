
<?php

// Initialize variables
$enrollment = '';
$name = '';
$birthdate = '';
$phone = '';
$email = '';

// Check if POST data exists for each key and assign values accordingly
if(isset($_POST['enrollment'])) {
    $enrollment = $_POST['enrollment'];
}

if(isset($_POST['name'])) {
    $name = $_POST['name'];
}

if(isset($_POST['birthdate'])) {
    $birthdate = $_POST['birthdate'];
}

if(isset($_POST['Phone'])) {
    $phone = $_POST['Phone'];
}

if(isset($_POST['email'])) {
    $email = $_POST['email'];
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'enrollment');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// SQL query to insert data into the database
$sql = "INSERT INTO enrollment (Enrollment, Name, Birthdate, Phone, Email)
VALUES ('$enrollment', '$name', '$birthdate', '$phone', '$email')";

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
















