<!DOCTYPE html>
<html lang = "fr">
<head>
	<meta charset="UFT-8">
	<title> Nouvelle organisation </title>
	
	</head>
<body>
	
<?php
function connect(string $dbname='groups'):\PDO {
$dbo=null;
try {
	$dbo = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8",'root','');
	$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbo;
	var_dump($dbo);



}catch (\PDOException $e){
	echo $e->getMessage();
}

}	
	$statement = connect()->query('select name,domain from Organization');

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