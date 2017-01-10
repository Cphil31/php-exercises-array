<?php 

$array = array(
	"02" => "Aisne",
	"59" => "Nord",
	"60" => "Oise",
	"62" => "Pas-de-Calais",
	"80" => "Somme",
	);

$tailleArray=sizeof($array);

foreach ($array as $key => $value) {
	echo "Le département ".$value." a le numéro ".$key.'<br/>';
}


 ?>

