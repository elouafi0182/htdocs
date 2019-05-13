<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>

<body>
<?php
$gebruikers = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($gebruikers, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

<form>
    Username:
    <input type="text" name="username"><br>
    Password:
    <input type="text" name="password">
    <input type="submit" name="submit" value="Inloggen">
</form>

</body>
</html>