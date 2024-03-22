<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
    <link rel="stylesheet" type="text/css" href="enrol.css">

    
</head>
<body>
<h1>Student Form</h1>
<form method="POST" action="enrol.php">
  <label for="enrollment">Enrollment:</label>
  <input type="text" name="enrollment" placeholder="Enter your Enrollment" required>
  <br><br>

  <label for="name">Name:</label>
  <input type="text" name="name" placeholder="Enter your Name" required>
  <br><br>

  <label for="birthdate">Birth Date:</label>
  <input type="date" name="birthdate" required>
  <br><br>

  <label for="Phone">Phone Number:</label>
  <input type="text" name="Phone" placeholder="Enter your Phone" required>
  <br><br>

  <label for="email">Email Address:</label>
  <input type="email" name="email" placeholder="Enter your Email" required>
  <br><br>

  <input type="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>