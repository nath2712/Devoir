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
	$PDOstats = $link->prepare('SElECT * FROM organization');
	
	
	
	
	$insertIsOk = $PDOstats -> execute();

	if ($insertIsOk) 
	{
		echo("<br/>prélevage réussie");
	}
	else
	{
		echo("<br/>Echec prélevage");
	}
	$orga = $PDOstats -> fetchAll();
	
?>

<h1>Liste des organisation</h1>
<ul>
	<?php foreach ($orga as $orga):?>
	<li>
	
		<?=$orga['id']   ?> <?=$orga['name']   ?> - <?=$orga['domain']   ?> - <?=$orga['aliases']   ?>
		<a href="supprimer.php?numOrga=<?= $orga['id'] ?>"> Supprimer </a>
		<a href="modifier.php?numOrga=<?= $orga['id'] ?>"> Modifier </a>
	</li>
	<?php endforeach; ?>
</ul>
	</body>
</html>