<!DOCTYPE HTML>
<html>


		<head>
			<meta charset = "UTF-8">
			<title><=$title??"TD2"></title>

		</head>
	<body>
	
		
			<?php
			$nbligne =$_GET{"nbl"}??"2"; //TR
			$nbcolone = $_GET {"nbc"}?? "2"; //TD
			
			
			?>

			<a href = "ex4.php?nbl=2&nbc=2"> tableaux 2x2</a>
			<a href = "ex4.php?nbl=5&nbc=5"> tableaux 5x5</a>
			<a href = "ex4.php?nbl0=2&nbc=8"> tableaux 210x8</a>
			
			
		<table border = '1'>
		<?php
			for ($i=0;$i<$nbligne;$i++) {
				echo "<tr>";
				for ($j=0;$j<$nbcolone; $j++)
					echo "<td>$i-$j</td>";
				echo "</tr>";
			}
		
		
		?>

		</table>
		




	</body>
</html>


		