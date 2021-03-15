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
	
If(isset($_POST['orga'])){
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