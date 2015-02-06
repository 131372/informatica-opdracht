
<?php
require_once 'db_config.php'; 

require_once 'db_config.php';

$c = $_GET['test'];


$c = $_GET['test'];


$a = $_GET['name'];
$b = $_GET['eman'];

if($c==1){
<<<<<<< HEAD
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
=======
	try{
	$sql = "UPDATE Kavels SET coordinaten1='$b' WHERE nummer='$a'";

	$action = $db->prepare($sql);
	$action->execute();
}	
	catch(PDOException $e) 
{ 
    echo '<pre>'; 
    echo 'Regel: '.$e->getLine().'<br>'; 
    echo 'Bestand: '.$e->getFile().'<br>'; 
    echo 'Foutmelding: '.$e->getMessage(); 
    echo '</pre>'; 
}
}
else{

	try{
	$sql = "UPDATE Kavels SET coordinaten2='$b' WHERE nummer='$a'";

	$action = $db->prepare($sql);
	$action->execute();
}	
	catch(PDOException $e) 
{ 
    echo '<pre>'; 
    echo 'Regel: '.$e->getLine().'<br>'; 
    echo 'Bestand: '.$e->getFile().'<br>'; 
    echo 'Foutmelding: '.$e->getMessage(); 
    echo '</pre>'; 
}

>>>>>>> bbd69ce063a9d3b298c61e70c00bffcf34b9568e
}
?>