<!DOCTYPE html>
<html lang = "fr">
<head>
	<meta charset="UFT-8">
	<title> Nouvelle organisation </title>
	
	</head>
<body>
	
<?php
function connect(string $dbname='groups'):\PDO {#création d'une fonction de connexion
$dbo=null;
try { #connexion a la BDD
	$dbo = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8",'root','');#Ligne de commande permettant la connexion a la BDD
	$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbo;
	var_dump($dbo);



}catch (\PDOException $e){#Renvoie une erreur si la connexion a la BDD a échouer 
	echo $e->getMessage();
}

}	
	$statement = connect()->query('select name,domain from Organization'); # Récupére Le nom et domaine de la liste d'information afin de les présenter sous une forme de liste

	foreach ($statement as $row){
		echo $row['domain'].'<br>';
			
	}

?>		

    <form method="post" action="ajout.php"  >
				<label>Nom :</label>
							<td><input type="textarea" name="orga" id ="orga" required placeholder="Entrez votre nom"></td>
							<input type = "textarea" value "2" name ="domain" id= "domain">
			<input type="submit" value="Envoyer" id="envoyer" name="submitpost">
    </form>



    <form method="post" action="suprression.php"  >
				<label>Nom :</label>
							<td><input type="textarea" name="id" id ="id" required placeholder="Entrez votre id"></td>
							
			<input type="submit" value="Envoyer" id="envoyer" name="submitpost">
    </form>
	
    <form method="post" action="update.php"  >
				<label>Nom :</label>
							<td><input type="textarea" name="id2" id ="id2" required placeholder="Entrez votre id"></td>
							<td><input type="textarea" name="Organization" id ="Organization" required placeholder="Entrez votre nom"></td>
							
			<input type="submit" value="Envoyer" id="envoyer" name="submitpost">
    </form>

	</body>
</html>