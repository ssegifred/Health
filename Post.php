<?php
// Retrieve form data
session_start();
if (isset($_POST['submit'])) {
$fullName = $_POST['fullName'];
$ipNo = $_POST['ipNo'];
$ward = $_POST['ward'];
$dateOfAdmission = $_POST['dateOfAdmission'];
$dateOfDischarge = $_POST['dateOfDischarge'];
$typeOfDelivery = $_POST['typeOfDelivery'];
$dateOfDelivery = $_POST['dateOfDelivery'];
$mother = $_POST['mother'];
$baby = $_POST['baby'];
$sex = $_POST['babySex'];
$weight = $_POST['babyWeight'];
$feedingOption = $_POST['feedingOption'];
$vitaminAGiven = $_POST['vitaminAGiven'];
$familySize = $_POST['familySize'];
$dualProtection = $_POST['dualProtection'];
$hivTesting = $_POST['hivTesting'];
$infantFeeding = $_POST['infantFeeding'];
$heavyBleeding = $_POST['heavyBleeding'];
$facialPuffiness = $_POST['facialPuffiness'];
$fever = $_POST['fever'];
$vomiting = $_POST['vomiting'];
$smellingDischarge = $_POST['smellingDischarge'];
$legPain = $_POST['legPain'];
$abdominalPain = $_POST['abdominalPain'];
$abnormalBreathing = $_POST['abnormalBreathing'];
$failureToBreastfeed = $_POST['failureToBreastfeed'];
$babyFever = $_POST['babyFever'];
$yellowEyesBody = $_POST['yellowEyesBody'];
$convulsion = $_POST['convulsion'];
$cordStump = $_POST['cordStump'];
$generalWeakness = $_POST['generalWeakness'];
$failureToPass = $_POST['failureToPass'];
$injuries = $_POST['injuries'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Health";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the "Postnatal" table
$sql = "INSERT INTO Postnatal (fullName, ipNo, ward, dateOfAdmission, dateOfDischarge, typeOfDelivery, dateOfDelivery, mother, baby, sex, weight, feedingOption, vitaminAGiven, familySize, dualProtection, hivTesting, infantFeeding, heavyBleeding, facialPuffiness, fever, vomiting, smellingDischarge, legPain, abdominalPain, abnormalBreathing, failureToBreastfeed, babyFever, yellowEyesBody, convulsion, cordStump, generalWeakness, failureToPass, injuries)
        VALUES ('$fullName', '$ipNo', '$ward', '$dateOfAdmission', '$dateOfDischarge', '$typeOfDelivery', '$dateOfDelivery', '$mother', '$baby', '$sex', '$weight', '$feedingOption', '$vitaminAGiven', '$familySize', '$dualProtection', '$hivTesting', '$infantFeeding', '$heavyBleeding', '$facialPuffiness', '$fever', '$vomiting', '$smellingDischarge', '$legPain', '$abdominalPain', '$abnormalBreathing', '$failureToBreastfeed', '$babyFever', '$yellowEyesBody', '$convulsion', '$cordStump', '$generalWeakness', '$failureToPass', '$injuries')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['authenticated'] = true; // Set the session variable
    header('Location: Home.php');
    exit();
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
}
?>
