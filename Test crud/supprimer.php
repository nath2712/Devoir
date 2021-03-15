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
	
	$PDOstats = $link->prepare('DELETE INTO organization WHERE id=:num LIMIT 1');
	$PDOstats->bindValue(':num',$_GET ["numOrga"],PDO::PARAM_INT);
	
	
	$insertIsOk = $PDOstats -> execute();

	if ($insertIsOk) 
	{
		echo("<br/>Suppression réussie");
	}
	else
	{
		echo("<br/>Echec Suppression");
	}	
?>



	</body>
</html>