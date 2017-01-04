<html>
<head>
	<title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body background = "back.jpg"; background-size: 80px 60px;
    background-repeat: no-repeat;>
	<div id = "pagewrap">
	<h2>Tip Calculator</h2>


	<form action= 'tipcalculator.php' method='post'>
		<p>Bill amount: $
		<input type = 'text' name = 'bill'>
		<br>
		</p>

		<p>Number of people:
		<input type = 'text' name = 'people'>
		<br>
		</p>

		<div>
		<input type = "radio" name = "percentages" value ="10%"> 10%
		<input type = "radio" name = "percentages" value ="15%"> 15%
		<input type = "radio" name = "percentages" value ="20%"> 20%
		<br>
		<input type = "radio" name = "percentages" value = "Custom"> Custom:
		<input type = 'text' name = 'percentagesCustom'>
		<br><br>
		</div>

		<input type = 'submit' name ='submit' value = 'Submit' class: 'submit2'>

	</form>
	<div class = "output" style="font-style: italic; font-size: 20px; font-weight: lighter;">

	<?php
if(isset($_POST['submit'])){
$bill = $_POST['bill'];
$people = $_POST['people'];
$percentages = $_POST['percentages'];
$percentagesCustom = $_POST['percentagesCustom']/100;

if($_POST['bill'] > 0 and $_POST['people'] > 0){
if($percentages == "10%"){
	echo "<b> Your tip is: </b><br>$";
	echo $bill*0.10;
	echo "<br>";
	echo "<b> Your total is: </b><br>$";
	echo $bill*1.10;
	echo "<br>";
	echo "<b> Your total per person: </b><br>$";
	echo $bill*1.10/$people;
 }

 if($percentages == "15%"){
 	echo "<b> Your tip is: </b><br>$";
 	echo $bill*0.15;
 	echo "<br>";
 	echo "<b> Your total is: </b><br>$";
 	echo $bill*1.15;
	echo "<br>";
	echo "<b> Your total per person: </b><br>$";
	echo $bill*1.15/$people;
  }

	if($percentages == "20%"){
		echo "<b> Your tip is: </b><br>$";
		echo $bill*0.20;
		echo "<br>";
		echo "<b> Your total is: </b><br>$";
		echo $bill*1.20;
		echo "<br>";
		echo "<b> Your total per person: </b><br>$";
		echo $bill*1.20/$people;
	 }

	 if($percentages == "Custom"){
		if($_POST['percentagesCustom'] > 0){
 		echo "<b> Your tip is: </b><br>$";
 		echo $bill*$percentagesCustom;
 		echo "<br>";
 		echo "<b> Your total is: </b><br>$";
 		echo $bill*(1+$percentagesCustom);
 		echo "<br>";
 		echo "<b> Your total per person: </b><br>$";
 		echo $bill*(1+$percentagesCustom)/$people;
 	 }
 }

}
}

if($_POST['bill'] < 0 or $_POST['people'] < 0){
	echo "<b> Insert a different amount of bill or number of people or custom tip percent. </b><br>";
}

if($_POST['percentagesCustom'] < 0){
 echo "<b> Insert a different amount of bill or number of people or custom tip percent. </b><br>";
}
	?>
</div>
</div>
</body>
</html>
