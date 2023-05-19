<?php
    if(isset($_POST['sub'])){
        // Database connection details
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'Health';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO Antenatal (fullName, address, idNo, village, husbandName, husbandPhone, motherPhone, dob, maternalServices, caste, anmName, anmPhone, ashaName, ashaPhone, deliveryFacility, facilityName, lmp, firstANC, secondANC, thirdANC, fourthANC, tt1, tt2, ttBooster, ifaTablets, anemia, complication, rtiSti, deliveryDate, placeOfDelivery, deliveryType, complications, dischargeDate, mothersSupport, abortion, pncHomeVisit, pncComplications, contraceptionMethod, pncCheckup, outcomeNumbers, child1Sex, child1Weight, child1Condition, child1Feeding, child2Sex, child2Weight, child2Condition, child2Feeding)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            // Bind the form data to the prepared statement parameters
            $stmt->bindParam(1, $_POST['fullName']);
            $stmt->bindParam(2, $_POST['address']);
            $stmt->bindParam(3, $_POST['idNo']);
            $stmt->bindParam(4, $_POST['village']);
            $stmt->bindParam(5, $_POST['husbandName']);
            $stmt->bindParam(6, $_POST['husbandPhone']);
            $stmt->bindParam(7, $_POST['motherPhone']);
            $stmt->bindParam(8, $_POST['dob']);
            $stmt->bindParam(9, $_POST['maternalServices']);
            $stmt->bindParam(10, $_POST['caste']);
            $stmt->bindParam(11, $_POST['anmName']);
            $stmt->bindParam(12, $_POST['anmPhone']);
            $stmt->bindParam(13, $_POST['ashaName']);
            $stmt->bindParam(14, $_POST['ashaPhone']);
            $stmt->bindParam(15, $_POST['deliveryFacility']);
            $stmt->bindParam(16, $_POST['facilityName']);
            $stmt->bindParam(17, $_POST['lmp']);
            $stmt->bindParam(18, $_POST['firstANC']);
            $stmt->bindParam(19, $_POST['secondANC']);
            $stmt->bindParam(20, $_POST['thirdANC']);
            $stmt->bindParam(21, $_POST['fourthANC']);
            $stmt->bindParam(22, $_POST['tt1']);
            $stmt->bindParam(23, $_POST['tt2']);
            $stmt->bindParam(24, $_POST['ttBooster']);
            $stmt->bindParam(25, $_POST['ifaTablets']);
            $stmt->bindParam(26, $_POST['anemia']);
            $stmt->bindParam(27, $_POST['complication']);
            $stmt->bindParam(28, $_POST['rtiSti']);
            $stmt->bindParam(29, $_POST['deliveryDate']);
            $stmt->bindParam(30, $_POST['placeOfDelivery']);
            $stmt->bindParam(31, $_POST['deliveryType']);
            $stmt->bindParam(32, $_POST['complications']);
            $stmt->bindParam(33, $_POST['dischargeDate']);
            $stmt->bindParam(34, $_POST['mothersSupport']);
            $stmt->bindParam(35, $_POST['abortion']);
            $stmt->bindParam(36, $_POST['pncHomeVisit']);
            $stmt->bindParam(37, $_POST['pncComplications']);
            $stmt->bindParam(38, $_POST['contraceptionMethod']);
            $stmt->bindParam(39, $_POST['pncCheckup']);
            $stmt->bindParam(40, $_POST['outcomeNumbers']);
            $stmt->bindParam(41, $_POST['child1Sex']);
            $stmt->bindParam(42, $_POST['child1Weight']);
            $stmt->bindParam(43, $_POST['child1Condition']);
            $stmt->bindParam(44, $_POST['child1Feeding']);
            $stmt->bindParam(45, $_POST['child2Sex']);
            $stmt->bindParam(46, $_POST['child2Weight']);
            $stmt->bindParam(47, $_POST['child2Condition']);
            $stmt->bindParam(48, $_POST['child2Feeding']);
    
            // Execute the statement
            //$stmt->execute();
    
            if ( $stmt->execute()=== true) {
                header('Location: Home.php');
                exit();
            } 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
        // Close the database connection
        $conn = null;
    }
?>
