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

	
If(isset($_POST['orga'])){
	$orga=$_POST['orga'];
	$domain = $_POST['domain'];
	try {
		$statement= connect()->exec('INSERT INTO user(firstname,password) VALUES("'.$orga.'","'.$domain.'")') ; 
		
		$statement->bindValue(':orga',$orga);
		$statement->bindValue(':domain',$domain);
		$statement->exec([$orga,$domain]);
		if($statement->execute([$orga,$domain])){
		
		
			
			echo "Utilisateur ajoutée";
		}	

	}catch (\PDOException $e) {
		echo "impossible d'ajouté l'utilisateur";
		
	}
}
	$statement = connect()->query('select firstname,password from user');

	foreach ($statement as $row){
		echo $row['domain'].'<br>';
			
	}





?>