<!doctype html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}

require_once "db_config.php";

//$tijd=$_POST[''];
$aantal=$_POST['personen'];

$tijd="nee";
$caravan=0;
$tent=0;
$camper=0;


if(isset($_POST['Caravan'])){
$caravan=1;
}
if(isset($_POST['Tent'])){
$tent=1;
}
if(isset($_POST['Camper'])){
$camper=1;
}

$verblijf=$caravan.",".$tent.",".$camper;

query("INSERT INTO Boekingen (username,boekingsperiode,personen,verblijfplaats) VALUES (:usnaam,:per,:pers,:ver)",array(":usnaam"=>$_SESSION['username'],"per"=>$tijd,":pers"=>$aantal,":ver"=>$verblijf),$db);
?>


</head>


<body>



</body>
</html>