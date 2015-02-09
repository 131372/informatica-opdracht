<html>
<head>
	<style>

	.streep{
		width:20px;
		height: 2px;
		background-color:black;
	}
	

	
	</style>


	
</head>
<body>

<img width="500" height="500" src="camping plattegrond.jpg" alt="niets">

<script>
require_once 'db_config.php'; 

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

//boekingsinformatie naar database + omschrijven naar PDO
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

require_once 'db_config.php';

	try{
	$sql = "SELECT nummer,coordinaten2 from Kavels";
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
	
	while($row = $result->fetch(PDO::FETCH_ASSOC)){

<<<<<<< HEAD
	$sql = "SELECT nummer,coordinaten2 from Kavels";
	$result = $conn->$sql;
	$i = 0;
	foreach($cords as $div){
		$i++;
		print_r($div);
		$div = explode(",",$div);
		echo "<div id='",$i,"' class='streep' style='top:",$div[1],";left:",$div[0],";'></div>";
=======
		$div = explode(",",$row['coordinaten2']);
		echo "<div class='streep' style='top:",$div[1],";left:",$div[0],";'></div>";
>>>>>>> bbd69ce063a9d3b298c61e70c00bffcf34b9568e
	}
	
?>



</body>
</html>

