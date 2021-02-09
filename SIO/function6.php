<?php
include "header.php";


function div($message){
		return '<span>'.$message.'</span>';
echo div('Hello world !');

}
$contenu = "<div> contenu </div>";
$niveau=1;
$titre ="<h$niveau>Ceci est un titre</h$niveau>";
$element =[$titre,$contenu,$niveau=1];


foreach($element as $value){

	echo "$value";

}


echo "$titre";
echo "<div>  Non ?</div>";
echo "$contenu" ;
echo "<hr>";


$contenu2 = "";
$titre2= "";
$contenu = "<div>contenu</div>";
$niveau=1;
$titre ="<h$niveau>titre</h$niveau>";

$elms =  [

		["titre"=>"Ex", "contenu"=> "Liste des ex dispo"],
		["titre"=>"Ex 2", "contenu"=> "créer une fonction", "niveau"=>2]

];

foreach($elms as $value){
	if ($value['niveau'] == null) {
		$niveau=1;
	}
	else {
		$niveau = $value['niveau'];
	}
	echo "<h$niveau> $value[titre] </h$niveau>";
	echo "<p> $value[contenu] </p>";


}




include "footer.php";
?>
