
<?php

$servername = "localhost";
$username = "v13mgielen";
$password = "3Hs8WpT2";
$dbName= "v13mgielen_opdr";

$conn = new mysqli($servername, $username, $password, $dbName); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$a = $_GET['name'];
$b = $_GET['eman'];

	$sql = "UPDATE Kavels SET coordinaten='$b' WHERE nummer='$a'";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}

?>