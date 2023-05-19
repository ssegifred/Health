<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antenatal Form</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
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
    <div class="title" style="text-align: center;"><h2>Antenatal Form</h2></div> 
    <form action="antform.php" method="post">
        <div class="col">
            <fieldset>
                <legend>Mother's Identification Details</legend>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName">
            
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            
                <label for="idNo">ID No. (National, Passport, driving licence):</label>
                <input type="text" id="idNo" name="idNo">
            
                <label for="village">Village:</label>
                <input type="text" id="village" name="village">
            
                <label for="husbandName">Husband's name/next of kin:</label>
                <input type="text" id="husbandName" name="husbandName">
            
                <label for="husbandPhone">Husband/next of kin phone No.:</label>
                <input type="text" id="husbandPhone" name="husbandPhone">
            
                <label for="motherPhone">Mother's Phone Number:</label>
                <input type="text" id="motherPhone" name="motherPhone">
            
                <label for="dob">Date of Birth:</label>
                <input type="text" id="dob" name="dob">
            
                <label for="maternalServices">Maternal support services (Yes/No):</label>
                <input type="text" id="maternalServices" name="maternalServices">
            
                <label for="caste">Caste (SC/ST/Others):</label>
                <input type="text" id="caste" name="caste">
            </fieldset>
            <fieldset>
                <legend>Details of Health care service provider</legend>
                
                <label for="anmName">Name of ANM:</label>
                <input type="text" id="anmName" name="anmName">
            
                <label for="anmPhone">Phone Number of ANM:</label>
                <input type="text" id="anmPhone" name="anmPhone">
            
                <label for="ashaName">Name of associated ASHA:</label>
                <input type="text" id="ashaName" name="ashaName">
            
                <label for="ashaPhone">Phone Number of ASHA (if available):</label>
                <input type="text" id="ashaPhone" name="ashaPhone">
            
                <label for="deliveryFacility">Linked facility for delivery:</label>
                <input type="text" id="deliveryFacility" name="deliveryFacility">
            
                <label for="facilityName">Name of Facility:</label>
                <input type="text" id="facilityName" name="facilityName">
            </fieldset>
            <fieldset>
                <legend>ANC Details Date to be specified (dd/mm/yyyy)</legend>
                <label for="lmp">LMP:</label>
                <input type="text" id="lmp" name="lmp">
            
                <label for="firstANC">1st ANC (including Registration):</label>
                <input type="text" id="firstANC" name="firstANC">
            
                <label for="secondANC">2nd ANC:</label>
                <input type="text" id="secondANC" name="secondANC">
            
                <label for="thirdANC">3rd ANC:</label>
                <input type="text" id="thirdANC" name="thirdANC">
            
                <label for="fourthANC">4th ANC:</label>
                <input type="text" id="fourthANC" name="fourthANC">
            
                <label for="tt1">TT1 (immediately at detection of pregnancy):</label>
                <input type="text" id="tt1" name="tt1">
            
                <label for="tt2">TT2 (after 1 month of TT1 administration):</label>
                <input type="text" id="tt2" name="tt2">
            
                <label for="ttBooster">TT Booster:</label>
                <input type="text" id="ttBooster" name="ttBooster">
            
                <label for="ifaTablets">IFA tablets given (Date on which 100 IFA Tabs completed):</label>
                <input type="text" id="ifaTablets" name="ifaTablets">
            
                <label for="anemia">Anemia (Moderate &lt;11/Severe &lt;7/Normal):</label>
                <input type="text" id="anemia" name="anemia">
            
                <label for="complication">Complication (Hypertensive/Diabetics/APH/Malaria/None):</label>
                <input type="text" id="complication" name="complication">
            
                <label for="rtiSti">RTI/STI (Y/N):</label>
                <input type="text" id="rtiSti" name="rtiSti">
            </fieldset>
        </div>
        <div class="col" id="coln2">
            <fieldset>
                <legend>Pregnency Outcome</legend>
                <label for="deliveryDate">Date of Delivery (dd/mm/yyyy):</label>
                <input type="text" id="deliveryDate" name="deliveryDate">
            
                <label for="placeOfDelivery">Place of delivery (Home-Type/Institutional-Type):</label>
                <input type="text" id="placeOfDelivery" name="placeOfDelivery">
            
                <label for="deliveryType">Delivery Type (Normal/CS/Instrumental):</label>
                <input type="text" id="deliveryType" name="deliveryType">
            
                <label for="complications">Complications (Y/N):</label>
                <input type="text" id="complications" name="complications">
            
                <label for="dischargeDate">Date of Discharge from Institution (if applicable) (dd/mm/yyyy):</label>
                <input type="text" id="dischargeDate" name="dischargeDate">
            
                <label for="mothersSupport">Mothers support if any (Date):</label>
                <input type="text" id="mothersSupport" name="mothersSupport">
            
                <label for="abortion">Abortion (MTP &lt;12/MTP &gt;12/Spontaneous/None):</label>
                <input type="text" id="abortion" name="abortion">
            </fieldset>
            <fieldset>
                <legend>PNC Details</legend>
                <label for="pncHomeVisit">PNC Home Visit (Within 48 hours/7 days):</label>
                <input type="text" id="pncHomeVisit" name="pncHomeVisit">
            
                <label for="pncComplications">PNC Complications (PPH/Sepsis/Death/Others/None):</label>
                <input type="text" id="pncComplications" name="pncComplications">
            
                <label for="contraceptionMethod">Post Partum Contraception Method (Sterilisation/IUD/Injectibles):</label>
                <input type="text" id="contraceptionMethod" name="contraceptionMethod">
            
                <label for="pncCheckup">PNC Checkup (Y/N):</label>
                <input type="text" id="pncCheckup" name="pncCheckup">
            
                <label for="outcomeNumbers">Outcome Numbers (0/1/2/3/4/5):</label>
                <input type="text" id="outcomeNumbers" name="outcomeNumbers">
                </fieldset>

            <fieldset>
                Infant Details
                <label for="child1Sex">Child 1 - Sex:</label>
                <input type="text" id="child1Sex" name="child1Sex">
            
                <label for="child1Weight">Child 1 - Weight:</label>
                <input type="text" id="child1Weight" name="child1Weight">
            
                <label for="child1Condition">Child 1 - Condition:</label>
                <input type="text" id="child1Condition" name="child1Condition">
            
                <label for="child1Feeding">Child 1 - Feeding:</label>
                <input type="text" id="child1Feeding" name="child1Feeding">
            
            
            
                <label for="child2Sex">Child 2 - Sex:</label>
                <input type="text" id="child2Sex" name="child2Sex">
            
                <label for="child2Weight">Child 2 - Weight:</label>
                <input type="text" id="child2Weight" name="child2Weight">
            
                <label for="child2Condition">Child 2 - Condition:</label>
                <input type="text" id="child2Condition" name="child2Condition">
            
                <label for="child2Feeding">Child 2 - Feeding:</label>
                <input type="text" id="child2Feeding" name="child2Feeding">
            </fieldset>
            
        </div>
        <div style="text-align: center;">
        <input type="submit" name="sub" value="Submit">
    </div>
      </form>
</body>
</html>