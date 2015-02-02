
<?php

require_once 'db_config.php';

$c = $_GET['test'];


$a = $_GET['name'];
$b = $_GET['eman'];

if($c==1){
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

}
?>