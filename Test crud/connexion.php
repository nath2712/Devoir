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

	
	if (!$link) 
	{
		echo "<br/>Erreur: Impossible de se connecter à MySQL : ". mysqli_connect_error();
		exit;
	}

	echo "<br/>La connexion a bien réussie<br/>";

	
	//Préparation de la requéte
	$PDOstats = $link->prepare('INSERT INTO organization VALUES (NULL,:addorga,NULL,NULL)');
	$PDOstats->bindValue(':addorga',$_POST ["addorga"],PDO::PARAM_STR);
/*
	$requete = "SELECT id, name, domain, aliases
				FROM organization
				
				Order by name ASC";

	if ($result = mysqli_query($link, $requete)) 
	{

	  
		while ($res = mysqli_fetch_assoc($result)) 
		{
			echo "L'id est : ".$res["id"]."<br />";
			echo "Le name est : ".$res["name"]."<br />";
			echo "Le domain est : ".$res["domain"]."<br />";
			echo "L'aliases est : ".$res["aliases"]."<br />";
			echo "<br />";
		}
	  
	}
	*/
	$insertIsOk = $PDOstats -> execute();

	if ($insertIsOk) 
	{
		echo("<br/>Insertion réussie");
	}
	else
	{
		echo("<br/>Echec insertion");
	}	
?>


	</body>
</html>