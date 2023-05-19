<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="dash.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <?php
// Start the session
session_start();

// Check if the user is authenticated (logged in)
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

?>
  <div class="container">
    <nav>
      <ul>
       
        <li><a href="Home.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Home</span>
        </a></li>
       
        <li><a href="antenatal.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">antenatal</span>
        </a></li>
        <li><a href="PostNantalDischarge.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">PostNantalDischarge</span>
        </a></li>
        <li><a href="Referral_form.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Referral Form</span>
        </a></li>
        <li><a href="Login.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Login</span>
        </a></li>
        <li><a href="registration.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">Register</span>
        </a></li>
        
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1 >Welcome to NAKASEKE HCIV CBHIS Dashboard</h1>
        <i class="fas fa-user-cog"></i>
      </div>
     
      <section class="attendance">
        <div class="attendance-list">
            <h1 style="text-align: center;">NAKASEKE HEALTH CENTER IV, NAKASEKE DISTRICT</h1><br>
          <h1 style="text-align: center;">PostNantal First ten Columns</h1>
          <table class="table">
            <thead>
                <tr>
                    <th>FULL NAME</th>
                    <th>IP NO</th>
                    <th>WARD</th>
                    <th>Date of Admission</th>
                    <th>Date of Discharge</th>
                    <th>TYPE OF DELIVERY</th>
                    <th>DATE OF DELIVERY</th>
                    <th>Mother</th>
                    <th>Baby</th>
                    <th>Sex</th>
                  </tr>
            </thead>
            <tbody>
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
        
                // Retrieve data from the "Postnatal" table
                $sql = "SELECT `fullName`, `ipNo`, `ward`, `dateOfAdmission`, `dateOfDischarge`, `typeOfDelivery`, `dateOfDelivery`, `mother`, `baby`, `sex` FROM Postnatal";
        
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        // Display the data in table cells
                        echo "<td>" . $row["fullName"] . "</td>";
                        echo "<td>" . $row["ipNo"] . "</td>";
                        echo "<td>" . $row["ward"] . "</td>";
                        echo "<td>" . $row["dateOfAdmission"] . "</td>";
                        echo "<td>" . $row["dateOfDischarge"] . "</td>";
                        echo "<td>" . $row["typeOfDelivery"] . "</td>";
                        echo "<td>" . $row["dateOfDelivery"] . "</td>";
                        echo "<td>" . $row["mother"] . "</td>";
                        echo "<td>" . $row["baby"] . "</td>";
                        echo "<td>" . $row["sex"] . "</td>";
                        echo "</tr>";
                        
                    }
                } else {
                    echo "<tr><td colspan='10'>No data available.</td></tr>";
                }
        
                $conn->close();
                ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>