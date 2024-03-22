<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1>Complete this form to submit your feeback</h1>
    <form action="feedback.php" method="post">
        <label>Name: </lable><br>
        <input type ="text" name="Name">
        <br><br>

        <label>Email: </lable><br>
        <input type ="email" id="email" name="Email">
        <br><br>

        <label>Phone: </lable><br>
        <input type ="text" name="Phone">
        <br><br>

        <label>Comment: </lable><br>
        <textarea id="Message" name="Message" rows="4" cols="50">
        </textarea><br>

        <label>Rating: </label>
        <input type ="radio" name="Rating" value="Excellent">Excellent
        <input type ="radio" name="Rating" value="Okay">Okay
        <input type ="radio" name="Rating" value="Boring">Boring
        <br><br>
        
        <input type="submit" value="Send My Feedback"><br>
    </form>
</body>
</html>

<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Subject = $_POST["Phone"];
    $Rating = $_POST["Rating"];
    $Message = $_POST["Message"];

    echo "Thank: " . $Name . "<br>";
    echo "Your Email address is " . $Email . "<br>";
    echo "and your phone number is " . $Subject . "<br>";
    echo "You stated that the play was" . $Message . "and" . $Rating . "<br>";
}
?>