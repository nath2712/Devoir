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
	
	$PDOstats = $link->prepare('UPDATE organization set name =:addorga WHERE id=:num');
	$PDOstats->bindValue(':num',$_POST ["numOrga"],PDO::PARAM_INT);
	$PDOstats->bindValue(':addorga',$_POST ["addorga"],PDO::PARAM_STR);
	
	$insertIsOk = $PDOstats -> execute();

	if ($insertIsOk) 
	{
		echo("<br/>Modification réussie");
	}
	else
	{
		echo("<br/>Echec Modification");
	}	
?>



	</body>
</html>