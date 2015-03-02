<html>
<?php 
$db = array ( 
    'host' => 'localhost', 
    'dbname' => 'v13mgielen_opdr', 
    'user' => 'v13mgielen', 
    'pass' => '3Hs8WpT2' 
); 

try 
{ 
    $db = new PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'], $db['user'], $db['pass']); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//    $db->query("SET SESSION sql_mode = 'ANSI,ONLY_FULL_GROUP_BY'"); 
} 
catch(PDOException $e) 
{ 
    $sMsg = '<p> 
            Regelnummer: '.$e->getLine().'<br /> 
            Bestand: '.$e->getFile().'<br /> 
            Foutmelding: '.$e->getMessage().' 
        </p>'; 
     
    trigger_error($sMsg); 
} 

function query($query,$db){

try{
	$result = $db->prepare($query);
	$result->execute();
	return $result;
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
</html>