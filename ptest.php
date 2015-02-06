
<?php
require_once 'db_config.php'; 

$servername = "localhost";
$username = "v13mgielen";
$password = "3Hs8WpT2";
$dbName= "v13mgielen_opdr";

$conn = new mysqli($servername, $username, $password, $dbName); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$c = $_GET['test'];


$a = $_GET['name'];
$b = $_GET['eman'];

if($c==1){
	$sql = "UPDATE Kavels SET coordinaten1='$b' WHERE nummer='$a'";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
}
else{
	$sql = "UPDATE Kavels SET coordinaten2='$b' WHERE nummer='$a'";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
}
?>