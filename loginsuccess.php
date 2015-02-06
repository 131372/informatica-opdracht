<!doctype html>
<?php
session_start();
if(!session_is_registered($username)){
header("location:login.php");
}
?>
<html>
<head>

<script>
function destroy(){
	session_destroy;
}
</script>
</head>



<body>

yay
<button onclick="destroy()">logout</button> 
</body>
</html>