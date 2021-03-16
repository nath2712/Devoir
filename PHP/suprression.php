<?php
function connect(string $dbname='groups'):\PDO {#création d'une fonction de connexion
$dbo=null;
try { #connexion a la BDD
	$dbo = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8",'root','');#Ligne de commande permettant la connexion a mysql
	$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbo;
	var_dump($dbo);



}catch (\PDOException $e){ #Renvoie une erreur si la connexion a la BDD a échouer 
	echo $e->getMessage();
}

}	

	
If(isset($_POST['id'])){ # Récupére l'id enregistré dans le formulaire 
	$id=$_POST['id'];

	try {

		$statement= connect()->exec('DELETE FROM Organization WHERE id = '.$id.'') ;  

		if($statement->exec($id)){
		
		
			
			echo "Organization effacé";
		}	

	}catch (\PDOException $e) {
		echo "impossible d'effacé l'orga<br>";
		
	}
}
	$statement = connect()->query('select name,domain from Organization');

	foreach ($statement as $row){
		echo $row['domain'].'<br>';
			
	}





?>