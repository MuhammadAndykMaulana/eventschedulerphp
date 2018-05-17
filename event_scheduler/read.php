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

$nama = $_GET['nama'];

$sql="SELECT * FROM info where nama like '%$nama%'";
$res = mysqli_query($conn,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
	array_push($result,
		array('nama'=>$row[1],
		'ruang'=>$row[2],
		'ext'=>$row[3],
		'telp'=>$row[4],
		'alamat'=>$row[5]		
	));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($conn);
 
?>