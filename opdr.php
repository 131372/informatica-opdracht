<html>
<head>
<?php

$servername = "localhost";
$username = "v13mgielen";
$password = "3Hs8WpT2";
$dbName= "v13mgielen_opdr";

$conn = new mysqli($servername, $username, $password, $dbName); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
for($i=204;$i<=218;$i++){
	$sql = "INSERT INTO Kavels (Nummer, Type, Standaard_dagprijs, Geboekt)
	VALUES ('$i', 'zonder elektra', 0, 0)";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
*/

for($i=204;$i<=218;$i++){
	$sql = "UPDATE Kavels SET type='zonder elektra' WHERE nummer='$i'";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
}

$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Naam: " . $row["naam"]. " Waarde:" . 2*$row["prijs"]. "<br>";
    }
} else {
    echo "0 results";
}


?>
</head>
<body>



</body>
</html>
