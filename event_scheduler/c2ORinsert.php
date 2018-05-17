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

$sql = "INSERT INTO Data (Date, Time, Lat)
VALUES ('15-06-2017', '17:09', '0981231 E')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully (berhasil ditambahkan gan)";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 