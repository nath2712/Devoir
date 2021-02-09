
<?php
function getHeader() { 
	 $startSession = session_start(); 
	 $_SESSION['nom'] = $_POST['nom'];


?>
<html lang="fr">


		<head>
			<meta charset = "UTF-8">
			<title>Ex Td3</title>
	
		
		</head>
	<body>
    <form method="post" action="resultat.php">
				<label>Nom :</label>
							<td><input type="text" name="nom" id ="nom" required placeholder="Entrez votre nom"></td>

			<input type="submit" value="Envoyer" id="envoyer" name="submitpost">
    </form>
	
<?php }
function getFooter() { ?>
    </body>
    </html>
<?php } ?>