 <?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Date, Time, Lat FROM Data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["Date"]. " -- time: " . $row["Time"]. " - Latitude: " . $row["Lat"]. " - Longitude: " . $row["Long"]." - Altitude: " . $row["Alt"]. "<br>";
		
    }
} else {
    echo "0 results: Hello World!";
}
$conn->close();


/*
`Time` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Lat` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Long` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Alt` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `SupportPIDs` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `StatusDTC` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `DTCCausingFreezeFrame` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `FuelSysStat` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `CalcLoadValue` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `CoolantTemp` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ShortTermFuelTrim` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `LongTermFuelTrim` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ShortTermFuelTrim2` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `LongTermFuelTrim2` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `FuelRailPress` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `IntakeManifoldPress` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `RPM` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Speed` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `TimingAdvance` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `IntakeAirTemp` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `AirFlowRateMAF` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ThrottlePosition` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `SecondaryAirStat` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `LocationofO2sensors` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor11` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor12` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor13` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor14` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor21` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor22` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor23` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `O2Sensor24` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `OBDDesignation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LocationofO2sensors2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `AuxInputStat` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `TimeSinceEngineStart` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Engin RunwithMILon` varchar(8) COLLATE utf8_unicode_ci NOT NULL
*/
?> 