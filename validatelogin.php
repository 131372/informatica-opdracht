<!doctype html>
<html>
<head>
<?php
require_once 'db_config.php';

$username=$_POST['username']; 
$password=$_POST['password']; 

try{
	$sql = "SELECT username,password from login where username='$username' and password='$password'";
	$result = $db->prepare($sql);
	$result->execute();
}	
	catch(PDOException $e) 
{ 
    echo '<pre>'; 
    echo 'Regel: '.$e->getLine().'<br>'; 
    echo 'Bestand: '.$e->getFile().'<br>'; 
    echo 'Foutmelding: '.$e->getMessage(); 
    echo '</pre>'; 
}

$count=$result->rowCount();

if($count==1){
$_SESSION['username']=$username;
session_register("password"); 
header("location:loginsuccess.php");
}
else {
echo "verkeerde gebruikersnaam of wachtwoord<br><a href='login.php'>opnieuw proberen</a>";
}

?>
</head>



<body>



</body>
</html>