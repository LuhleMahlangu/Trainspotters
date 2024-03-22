<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Trainspotters</title>
    <link rel="stylesheet" type="text/css" href="train.css">
</head>
<body>
    <h1>Welcome to Trainspotters</h1>
    
    <?php
    session_start();

    // Check if the user is logged in (session variable is set)
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<p>Hello, $username! You are now logged in.</p>";
        echo "<p>Put your content or functionality for authenticated users here.</p>";
        echo '<a href="logout.php">Logout</a>'; // Provide a link to log out
    } else {
        // If the session variable is not set, the user is not logged in
        echo "<p>You are not logged in. Please <a href='login.php'>login</a>.</p>";
    }
    ?>
</body>
</html>
