<?php include ("REffserver.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Referral Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
   
</head>
<body >
<header>
        <h1>NAKASEKE HEALTH CENTER IV, NAKASEKE DISTRICT</h1>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="registration.php">Register</a></li>
                <li><a href="Login.php">Login</a></li>
                
            </ul>
        </nav>
    </header>
<form action="REffserver.php" method="post">
    
    <table >
        <th colspan="4">CLIENT INFOMARTION FORM</th>
        <tr>
            <td colspan="2"><h2>Client Details</h2></td>
            <td colspan="2"><h2>Referring Agency</h2></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" placeholder="Enter client's full name" name="cname"></td>
            <td>Telephone:</td>
            <td><input type="text" placeholder="Enter the telephone" name="tele"></td>
        </tr>
        <tr>
            <td>DOB:</td>
            <td><input type="date" placeholder="Date of birth" name="dob"></td>
            <td>FullName:</td>
            <td><input type="text" placeholder="Enter your Full name" name="fname"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" placeholder="Client's Age" name="age"></td>
            <td>Reffer'sName:</td>
            <td><input type="text" placeholder="Enter the Reffer's Name" name="rname"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" placeholder="Client's Address" name="address"></td>
            <td>Contact:</td>
            <td><input type="text" placeholder="Enter contact details" name="rcontact"></td>
        </tr>
        <tr>
            <td>Village:</td>
            <td><input type="text" placeholder="Client's village" name="village"></td>
            <td colspan="2">Referred to:</td>
        </tr>
        <tr>
            <td>NationalID:</td>
            <td><input type="text" placeholder="Client's ID" name="Id"></td>
            <td>Recipients Agency:</td>
            <td><input type="text" placeholder="Recipient Agency" name="hospital"></td>
        </tr>
        <tr>
            <td>Next of kin:</td>
            <td><input type="text" placeholder="Client's next of kin" name="kin"></td>
            <td>Grade:</td>
            <td><input type="text" placeholder="Referral grade" name="grade"></td>
        </tr>
        <tr>
            <td>Kin contact:</td>
            <td><input type="text" placeholder="Next of kin contact" name="Kcontact"></td>
            <td hidden></td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4"><input type="submit" value="Save" name="register"></td>
        </tr>
    </table>
</form>

</body>
</html>
