<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainspotters Login</title>
    <link rel="stylesheet" type="text/css" href="train.css">
</head>
<body>
    <h1>Trainspotters Login</h1>
    <form method="POST" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Enter your Username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        <br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
