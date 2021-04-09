<!DOCTYPE html>
<html>
<head>
	<title>Class 3</title>
</head>
<body>

<?php
$FirstName = "Tanvir";
$LastName = "Rumman";
echo '<i style="color:blue;">Answer of Question 1:<br></i>';

echo $FirstName . " " . $LastName;

echo "<br>";
echo "<br>";

echo '<i style="color:blue;">Answer of Question 2:<br></i>';
echo "<br>";


function calculate_sum($num1,$num2){
	echo $num1. "+" .$num2 ."=" . ($num1+$num2);
}

function calculate_multi($num1,$num2){
	echo $num1. "x" .$num2 ."=" . ($num1*$num2);
}

function calculate_subtrac($num1,$num2){
	echo $num1. "/" .$num2 ."=" . ($num1/$num2);
}

echo '<i style="color:red;">SUM: </i>';
calculate_sum(2534,4034);
echo "<br>";
echo '<i style="color:red;">MULTIPLICATION: </i>';
calculate_multi(2534,4034);
echo "<br>";
echo '<i style="color:red;">SUBTRACTION: </i>';
calculate_subtrac(4034,2534);
echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 3:<br><br> </i>';

for ($i=0; $i < 11; $i++){
	echo 20-$i ."<br>";
}

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 4:<br><br> </i>';

$j=0;
for ($i=0; $i < 5; $i++){
	$j = ($j+$i);
}
echo "1+2+3+4". "=". $j ."<br>";

echo "<br>";

echo '<i style="color:blue;">Answer of Question 5:<br><br> </i>';

for ($i = 40; $i < 46; $i++){
	for($j = 1; $j < 11; $j++){
		echo $i. "x" .$j. "=" .($i*$j). "<br>";
	}

	echo "=============================<br>";

}

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 7:<br></i>';
echo "<br>";
$Num = array(1,2,3,4,5,6,7,8,9,10);

for($i=0; $i < 10; $i++){
	if($Num[$i]%2==0){  
 
	}  
	else  
	{  
 	echo $Num[$i] . " is Odd Number <br>";  
	}   
}
echo "<br>";
echo "<br>";

echo '<i style="color:blue;">Answer of Question 8:<br></i>';
echo "<br>";





?>



</body>
</html>