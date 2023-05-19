<?php
session_start();

if (isset($_POST['register'])) {
    $Name = $_POST['cname'];
    $DOB = $_POST['dob'];
    $Age = $_POST['age'];
    $Address = $_POST['address'];
    $Village = $_POST['village'];
    $NationalId = $_POST['Id'];
    $Next_of_kin = $_POST['kin'];
    $Kin_Contact = $_POST['Kcontact'];
    $Telephone = $_POST['tele'];
    $Fname = $_POST['fname'];
    $Rname = $_POST['rname'];
    $Contact = $_POST['rcontact'];
    $Ragency = $_POST['hospital'];
    $Grade = $_POST['grade'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'Health';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn) {
        $query1 = "INSERT INTO Client_Details (Name, DOB, Age, Address, Village, NationalID, Next_of_kin, KinContact) 
                    VALUES ('$Name', '$DOB', '$Age', '$Address', '$Village', '$NationalId', '$Next_of_kin', '$Kin_Contact')";

        $query2 = "INSERT INTO RTable (Telephone, FullName, RName, Contact, RAgency, Grade) 
                    VALUES ('$Telephone', '$Fname', '$Rname', '$Contact', '$Ragency', '$Grade')";

        mysqli_query($conn, $query1);
        mysqli_query($conn, $query2);

        $_SESSION['success'] = 'Successfully registered';
        header('Location: Referral_form.php');
        exit();
    } else {
        echo "Failed to connect to the database.";
    }
}
?>
