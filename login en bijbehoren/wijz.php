<!doctype html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}

require_once "db_config.php";

$type=$_GET['type'];
$wachtwoord=$_POST['password'];

if($wachtwoord!=$_SESSION['password']){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

if($type==1){
	$data=$_POST['gebruikersnaam2'];
	query("UPDATE login SET username=:name WHERE password=:pass",array(":name"=>$data,":pass"=>$wachtwoord),$db);
}
else if($type==2){
	$data=$_POST['wachtwoord2'];
	query("UPDATE login SET password=:wachtwoord WHERE password=:pass",array(":wachtwoord"=>$data,":pass"=>$wachtwoord),$db);
	$_SESSION['password']=$data;
}
else if($type==3){
	$data=$_POST['naam2'];
	query("UPDATE login SET naam=:name WHERE password=:pass",array(":name"=>$data,":pass"=>$wachtwoord),$db);
}
else if($type==4){
	$data=$_POST['post2'];
	query("UPDATE login SET postcode=:post WHERE password=:pass",array(":post"=>$data,":pass"=>$wachtwoord),$db);
	$data=$_POST['huis2'];
	query("UPDATE login SET huisnummer=:huis WHERE password=:pass",array(":huis"=>$data,":pass"=>$wachtwoord),$db);
	$data=$_POST['land2'];
	query("UPDATE login SET land=:land WHERE password=:pass",array(":land"=>$data,":pass"=>$wachtwoord),$db);
}
else if($type==5){
	$data=$_POST['telefoon2'];
	query("UPDATE login SET telefoon=:telefoon WHERE password=:pass",array(":telefoon"=>$data,":pass"=>$wachtwoord),$db);
}
else if($type==6){
	$data=$_POST['mail2'];
	query("UPDATE login SET email=:mail WHERE password=:pass",array(":mail"=>$data,":pass"=>$wachtwoord),$db);
}
else{
	echo "error";
}
?>


</head>


<body>



</body>
</html>