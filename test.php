<html>
<head>
	<style>

	.streep{
		width:20px;
		height: 2px;
		background-color:black;
		position: absolute;
	}
	

	
	</style>


	
</head>
<body>

<img width="500" height="500" src="camping plattegrond.jpg" alt="niets">

<script>
var y=0;
var z=0;
var coordinates = "";
function printMousePos(e) {
	if(y==1 && z>0){
		if(z==1){
		var cursorX = e.clientX;
		var cursorY = e.clientY;
		var waarde1 = cursorX.toString();
		var waarde2 = cursorY.toString();
		coordinates = coordinates+waarde1+","+waarde2
		}
		else{
		var cursorX = e.clientX;
		var cursorY = e.clientY;
		var waarde1 = cursorX.toString();
		var waarde2 = cursorY.toString();
		coordinates = coordinates+","+waarde1+","+waarde2
		}
	}
	if(y==1){
	z=z+1;
	}
}

function test(){

}

function record(){
	z=0;
	y=1;
}

function stop(){
	z=0;
	y=0;
	var x = document.getElementById("test").value;
	window.location.href = "ptest.php?name=" + x + "&" + "eman=" + coordinates + "&" + "test=1";  
}

function stop2(){
	z=0;
	y=0;
	var x = document.getElementById("test").value;
	window.location.href = "ptest.php?name=" + x + "&" + "eman=" + coordinates + "&" + "test=0";  
}

document.addEventListener("click", printMousePos);
</script>

</button>

</img>

<form>
<input id="test" type="text"></input>
</form>

<button onclick="record()" id="test3">record</button>
<button onclick="stop()" id="test4">stop</button>
<button onclick="stop2()" id="test4">stop2</button>

<?php

	$servername = "localhost";
	$username = "v13mgielen";
	$password = "3Hs8WpT2";
	$dbName= "v13mgielen_opdr";
	
	$conn = new mysqli($servername, $username, $password, $dbName); 
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT nummer,coordinaten2 FROM Kavels";
	$result = $conn->query($sql);
	
    while($row = $result->fetch_assoc()) {
		$div = explode(",",$row['coordinaten2']);
        echo "<div class='streep' style='top:",$div[1],";left:",$div[0],";'></div>";
    }
	
?>



</body>
</html>

