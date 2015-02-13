<!doctype html>
<html>
<head>
<?php
require_once 'db_config.php';

$username=$_POST['username']; 
$password=$_POST['password']; 

$result=query("SELECT username,password from login where username='$username' and password='$password'",$db);


$count=$result->rowCount();
session_start();
if($count==1){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['verkeerd']=0;
	header("location:loginsuccess.php");

}
else {
	$_SESSION['verkeerd']=1;
	header("location:login.php");
}

?>
</head>



<body>



</body>
</html>