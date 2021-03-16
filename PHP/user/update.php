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

	


	
			function getUpdateQuery($dbname, $id2,$fieldValues){
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