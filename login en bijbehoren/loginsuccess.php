<!doctype html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>


</head>


<body>



<a href="logout.php">logout</a> <br>
<a href="accman.php">account gegevens veranderen</a>
</body>
</html>