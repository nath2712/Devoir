<?php
function connect(string $dbname='groups'):\PDO { #création d'une fonction de connexion
$dbo=null;
try {#connexion a la BDD
	$dbo = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8",'root',''); #Ligne de commande permettant la connexion a la BDD
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
	
If(isset($_POST['orga'])){ # Récupére le nom de l'organisation et domaine enregistré 
	$orga=$_POST['orga'];
	$domain = $_POST['domain'];
	try {
		$statement= connect()->exec('INSERT INTO Organization(name,domain) VALUES("'.$orga.'","'.$domain.'")')==1 ; 
		$statement->execute([$orga,$domain]);
		$stement->bindValue(':orga',$orga);
		$statement->bindValue(':domain',$domain);
		if($statement->execute([$orga,$domain])){
		
		
			
			echo "Organization ajoutée";
		}	

	}catch (\PDOException $e) {
		echo "impossible d'ajouté l'orga";
		
	}
}






?>