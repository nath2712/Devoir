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

	


	
			function getUpdateQuery($dbname, $id2,$fieldValues){ # Récupére les information sur la base de donnée afin de savoir ou et quoi modifié 
				$res = "UPDATE '$dbname' SET"  ;
				$parts =[];
				foreach ($fieldValues as $key => $Value){
					$parts[]="'$key'= : $key";
					
				}
				$res.=\implode(',',$parts);
				
				return $res. "where id =$id2";
				
			}
	
	

	function getInsertQuery($dbname, $fieldValues) {
		$fields= array_keys($fieldValues);
		$res= "Insert into '$dbname'($fields)";
		$values= array_values($keyValues);
		array_walk($values, function(&$v){$v="'$v'";});
		$res.="($values)";
		return $res;
		
		
	}

if (isset($_get['id2'])){
	$sql = getUpdateQuery ("Organization",$_get['id2'],$_post);
	$db= connect();
	if ($st=$db-> prepare ($sql)){
		
		var_dump($st -> execute ($_post));
		
	}
	
	
	
}
else {
	echo "erreur<br>";
}

	$statement = connect()->query('select name,domain from Organization');

	foreach ($statement as $row){
		echo $row['domain'].'<br>';
			
	}





?>