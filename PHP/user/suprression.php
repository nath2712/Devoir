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

	
If(isset($_POST['id'])){
	$id=$_POST['id'];

	try {

		$statement= connect()->exec('DELETE FROM user WHERE id = '.$id.'') ; 

		if($statement->exec($id)){
		
		
			
			echo "Utilisateur effacé";
		}	

	}catch (\PDOException $e) {
		echo "impossible d'effacé l'Utilisateur<br>";
		
	}
}
	$statement = connect()->query('select firstname,password from user');

	foreach ($statement as $row){
		echo $row['domain'].'<br>';
			
	}





?>