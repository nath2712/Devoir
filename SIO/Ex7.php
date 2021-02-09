<!DOCTYPE HTML>
<html>


		<head>
			<meta charset = "UTF-8">
			<title><Ex7></title>

		</head>
	<body>
	
<?php
 $s['nom'] = $_POST['nom'];
 $s2['nbl'] = $_POST['nbl'];

echo str_word_count("$s");
echo strlen("$s");
echo "<div> Le mot est $s Il y'a $mot mots et $ch charactére <div>";
	

?>		

    <form method="post"  >
				<label>Nom :</label>
							<td><input type="textarea" name="nom" id ="nom" required placeholder="Entrez votre nom"></td>

			<input type="submit" value="Envoyer" id="envoyer" name="submitpost">
    </form>


	<form method= "GET">
			<label for "nom">Création du tableau </label>
			<input type = "textarea" value "2" name ="nbl" id= "nbl">
			<input type = "submit" value = "Valider">
		</form>


	</body>
</html>


		