<!DOCTYPE HTML>
<html lang="fr">


		<head>
			<meta charset = "UTF-8">
			<title>Crud</title>
	
		</head>
	<body>
	
<?php

	//Ouverture de la BDD
	$link = new PDO( 'mysql:host=localhost;dbname=groups', "root", "");
	
	$PDOstats = $link->prepare('SELECT * FROM  organization WHERE id=:num ');
	$PDOstats->bindValue(':num',$_GET ["numOrga"],PDO::PARAM_INT);
	
	$orga = $PDOstats -> fetch();
	$insertIsOk = $PDOstats -> execute();

	if ($insertIsOk) 
	{
		echo("<br/>Orga récup réussie");
	}
	else
	{
		echo("<br/>Echec Orga perdu");
	}	
?>

			<form action="modifiera.php" method="post">
				<fieldset>
				
						<input type="hidden" name="numOrga" values="<?= $orga['id'] ?>">
					<p>
							<label for="addorga"> Modiffier une organisation</label>
							
							<input id="addorga" type="text" name="addorga" values="<?= $orga['name'];  ?>">
					</p>


					
					<p>
						<input type="submit" value="Enregistrer">


					</p>









				</fieldset>

			</form>

	</body>
</html>