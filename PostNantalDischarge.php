<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTNATAL DISCHARGE FORM</title>
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
   <form action="Post.php" method="POST">
    <h1 style="text-align: center;">POSTNATAL DISCHARGE FORM</h1>
    <p style="text-align: center;">Please fill in the form below to submit your postnatal discharge information.</p>
    
            <table>
                <tr style="text-align: center;"><td colspan="2"><h3>Mother's Identification Form</h3></td></tr>
                <tr style="text-align: center;">
                    <td><label for="fullName">Full Name:</label></td>
                    <td><input type="text" id="fullName" name="fullName"></td>
                    <td><label for="ipNo">IP No:</label></td>
                    <td><input type="text" id="ipNo" name="ipNo"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="ward">Ward:</label></td>
                    <td><input type="text" id="ward" name="ward"></td>
                    <td><label for="dateOfAdmission">Date of Admission:</label></td>
                    <td><input type="date" id="dateOfAdmission" name="dateOfAdmission"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="dateOfDischarge">Date of Discharge:</label></td>
                    <td><input type="date" id="dateOfDischarge" name="dateOfDischarge"></td>
                    <td><label for="typeOfDelivery">Type of Delivery:</label></td>
                    <td><input type="text" id="typeOfDelivery" name="typeOfDelivery"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="dateOfDelivery">Date of Delivery:</label></td>
                    <td><input type="date" id="dateOfDelivery" name="dateOfDelivery"></td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="2"><h3>Conditions at Discharge(Normal/Abnomarl)</h3></td>
                </tr>
                <tr style="text-align: center;">
                    
                    <td><label for="mother">Mother:</label></td>
                    <td><input type="text" id="mother" name="mother"></td>
                    <td><label for="baby">Baby:</label></td>
                    <td><input type="text" id="baby" name="baby"></td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="2"><h3>Baby Status Information</h3></td>
                </tr>
                <tr style="text-align: center;">
                    
                    <td><label for="babySex">Sex:</label></td>
                    <td><input type="text" id="babySex" name="babySex"></td>
                    <td><label for="babyWeight">Weight:</label></td>
                    <td><input type="text" id="babyWeight" name="babyWeight"></td>
                </tr>
                <tr style="text-align: center;">
                    
                    <td><label for="feedingOption">Infant Feeding Option Selected:</label></td>
                    <td><input type="text" id="feedingOption" name="feedingOption"></td>
                    <td><label for="vitaminAGiven">Vit A Given (Yes/No):</label></td>
                    <td><input type="radio" id="vitaminAGiven" name="vitaminAGiven" value="No">Yes&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="vitaminAGiven" name="vitaminAGiven" value="No">No</td>
                </tr>
                <tr style="text-align: center;"><td colspan="2"><h3>Family Planning information given (Yes/No)</h3></td></tr>
                <tr style="text-align: center;">
                    <td></td>
                <td><input type="radio" name="information" value="Yes">Yes</td>
                <td></td>
                <td><input type="radio"  name="information" value="No">No</td>
            </tr>
                <tr style="text-align: center;">
                    
                    <td><label for="familySize">Family Size:</label></td>
                    <td><input type="number" id="familySize" name="familySize"></td>
                    <td><label for="hivTesting">HIV Testing:</label></td>
                    <td><input type="text" id="hivTesting" name="hivTesting"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="dualProtection">Dual Protection:</label></td>
                    <td><input type="text" id="dualProtection" name="dualProtection"></td>
                    <td><label for="heavyBleeding">Heavy Bleeding:</label></td>
                    <td><input type="text" id="heavyBleeding" name="heavyBleeding"></td>
                   
                </tr>
                <tr style="text-align: center;">
                    <td><label for="infantFeeding">Infant Feeding:</label></td>
                    <td><input type="text" id="infantFeeding" name="infantFeeding"></td>
                   
                </tr>
                <tr style="text-align: center;"><td colspan="2"><h3>Condition of the Mother	</h3>			
                </td></tr>
                <tr style="text-align: center;">
                    <td><label for="facialPuffiness">Facial Puffiness:</label></td>
                    <td><input type="text" id="facialPuffiness" name="facialPuffiness"></td>
                    <td><label for="fever">Fever:</label></td>
                    <td><input type="text" id="fever" name="fever"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="vomiting">Vomiting:</label></td>
                    <td><input type="text" id="vomiting" name="vomiting"></td>
                    <td><label for="smellingDischarge">Smelling Vaginal Discharge:</label></td>
                    <td><input type="text" id="smellingDischarge" name="smellingDischarge"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="legPain">Pain in Legs:</label></td>
                    <td><input type="text" id="legPain" name="legPain"></td>
                    <td><label for="abdominalPain">Constant Abdominal Pain:</label></td>
                    <td><input type="text" id="abdominalPain" name="abdominalPain"></td>
                </tr>
                <tr style="text-align: center;"><td colspan="2"><h3>Condition of the Baby</h3></td></tr>
                <tr style="text-align: center;">
                    <td><label for="abnormalBreathing">Abnormal Breathing:</label></td>
                    <td><input type="text" id="abnormalBreathing" name="abnormalBreathing"></td>
                    <td><label for="failureToBreastfeed">Failure to Breastfeed:</label></td>
                    <td><input type="text" id="failureToBreastfeed" name="failureToBreastfeed"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="babyFever">Baby Fever:</label></td>
                    <td><input type="text" id="babyFever" name="babyFever"></td>
                    <td><label for="yellowEyesBody">Yellow Eyes/Body:</label></td>
                    <td><input type="text" id="yellowEyesBody" name="yellowEyesBody"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="convulsion">Convulsion:</label></td>
                    <td><input type="text" id="convulsion" name="convulsion"></td>
                    <td><label for="cordStump">Cord Stump/Foul Smelling:</label></td>
                    <td><input type="text" id="cordStump" name="cordStump"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="generalWeakness">General Body Weakness:</label></td>
                    <td><input type="text" id="generalWeakness" name="generalWeakness"></td>
                    <td><label for="failureToPass">Failure to Pass Urine/Stool:</label></td>
                    <td><input type="text" id="failureToPass" name="failureToPass"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><label for="injuries">Injuries:</label></td>
                    <td colspan="3"><input type="text" id="injuries" name="injuries" style="width: 100%;"></td>
                </tr>
            </table>
            <div style="text-align: center;">
            <input type="submit" name="submit" value="Submit" >
            </div>
        </form>
    </body>
    </html>
    