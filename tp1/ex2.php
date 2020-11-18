<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<?php
$size=$_GET{"size"}??"10px";

$p=$_GET{"p"}??1;


$c=$_GET{"c"}??"black";



if  ($size > 15){
		echo "<div style='font-size: {$size}px;color:red'>Message de taille {$size}px en rouge</div>";
		

	}
	
if  ($size > 30){
		echo "<div style='font-size: {$size}px;color:green'>Message de taille {$size}px en rouge</div>";
		

	}

if  ($size > 50){
		echo "<div style='font-size: {$size}px;color:blue'>Message de taille {$size}px en rouge</div>";
		

	}



if  ($p == 1)
	{
		echo "<div style='font-size: 15px;color:red'>Message de taille 15px en rouge</div>";
	}
if  ($p == 2)
	{
		echo "<div style='font-size: 30px;color:green'>Message de taille 30px en vert</div>";
	}
	if  ($p == 3)
	{
		echo "<div style='font-size: 50px;color:blue'>Message de taille 50px en bleu</div>";
	}
	
	else { 
				echo "<div style='font-size: 15px;color:red'>Message de taille 15px en rouge</div>";
	}
?>
<a href = "/tp1/ex2.php?p=1&c=red&size=15px"> page 1</a>
<a href = "/tp1/ex2.php?p=2&c=green&size=30px"> page 2</a>
<a href = "/tp1/ex2.php?p=3&c=blue&size=50px"> page 3</a>

<?php

		echo "<div style='font-size: {$size};color:{$c}'>Message de taille {$size} en {$c}</div>";
		

	
?>
<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
</body>
</html>