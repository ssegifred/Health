<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Health";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['reg'])) {
// Fetch data from the registration form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Perform data validation or additional checks if required
// ...

// Insert data into the database table
$sql = "INSERT INTO registration (first_name, last_name, username, email, contact, password)
        VALUES ('$first_name', '$last_name', '$username', '$email', '$contact', '$password')";

if ($conn->query($sql) === true) {
    header('Location: Login.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
