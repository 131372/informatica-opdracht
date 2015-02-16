<!doctype html>
<html>
<head>

<script>
 console.log(11);
</script>

<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}

require_once "db_config.php";

$tijd1=$_POST['boekingsperiode'];
$tijd2=$_POST['boekingsperiode2'];
$aantal=$_POST['personen'];
$tijd=$tijd1."/".$tijd2;
$plaats=$_POST['kavel'];

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

$results = query("SELECT boekingsperiode FROM Boekingen WHERE kavel=:kavel",array(":kavel"=>$plaats),$db);
$perio=$results->fetch();
$perio=$perio['boekingsperiode'];
echo $perio;

$verblijf=$caravan.",".$tent.",".$camper;
query("INSERT INTO Boekingen (username,boekingsperiode,personen,verblijfplaats,kavel) VALUES (:usnaam,:per,:pers,:ver,:kavel)",array(":usnaam"=>$_SESSION['username'],"per"=>$tijd,":pers"=>$aantal,":ver"=>$verblijf,":kavel"=>$plaats),$db);

// als gebruikersnaam verandert moet ook de gebruikersnaam bij de boekingen veranderen
?>


</head>


<body>



</body>
</html>