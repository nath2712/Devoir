<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<?php
$size = 10;

echo "<div style='font-size: {$size}px;'>Message de taille {$size}px en rouge</div>";


echo "Vous êtes sur la page n° ".$_GET["page"];
echo "Vous êtes sur la page ".$_GET["message"];

?>

<div style="font-size: <?php echo $size; ?>px;">Message de taille <?php echo $size; ?>px en rouge</div>

<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
</body>
</html>