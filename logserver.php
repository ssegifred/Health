<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Health";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    // Fetch username and password from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform data validation or additional checks if required
    // ...

    // Query the database for user authentication
    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful
        $_SESSION['authenticated'] = true; // Set the session variable
        header('Location: Home.php');
        exit();
    } else {
        // Authentication failed
        header('Location: Login.php');
        exit();
    }
}

?>
