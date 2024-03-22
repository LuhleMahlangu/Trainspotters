<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
</head>
<body>
    
</body>
</html>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Enrollment: <input type="text" name="Enrollment">
    <span class="error"><?php echo $enrollmentErr; ?></span><br><br>

    Name: <input type="text" name="Name">
    <span class="error"><?php echo $nameErr; ?></span><br><br>

    Birthdate: <input type="date" name="Birthday">
    <span class="error"><?php echo $birthdateErr; ?></span><br><br>

    Phone: <input type="tel" name="Phone">
    <span class="error"><?php echo $phone_numErr; ?></span><br><br>

    Email: <input type="email" name="Email">
    <span class="error"><?php echo $emailErr; ?></span><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>





<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollmentdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$enrollmentErr = $nameErr = $birthdateErr = $phone_numErr = $emailErr = "";
$enrollment = $name = $birthdate = $phone = $email = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Enrollment
    if (empty($_POST["Enrollment"])) {
        $enrollmentErr = "Enrollment is required!";
    } else {
        $enrollment = test_input($_POST["Enrollment"]);
    }

    // Validate Name
    if (empty($_POST["Name"])) {
        $nameErr = "Name is required!";
    } else {
        $name = test_input($_POST["Name"]);
    }

    // Validate Birthday (Ensure the HTML form field name matches)
    if (empty($_POST["Birthday"])) {
        $birthdateErr = "Birthdate is required!";
    } else {
        $birthdate = test_input($_POST["Birthday"]);
    }

    // Validate Phone Number
    if (empty($_POST["Phone"])) {
        $phone_numErr = "Phone number is required!";
    } else {
        $phone = test_input($_POST["Phone"]);
    }

    // Validate Email
    if (empty($_POST["Email"])) {
        $emailErr = "Email is required!";
    } else {
        $email = test_input($_POST["Email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($enrollmentErr) && empty($nameErr) && empty($birthdateErr) && empty($phone_numErr) && empty($emailErr)) {
        // SQL query to insert data into the database
        $sql = "INSERT INTO users (Enrollment, Name, Birthday, Phone, Email)
        VALUES ('$enrollment', '$name', '$birthdate', '$phone', '$email')";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record has been added successfully!";
        } else {
            echo "Error: " . $sql . " - " . mysqli_error($conn);
        }
    }
}
// Close the database connection
mysqli_close($conn);
// Function to sanitize user input
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
 ?>