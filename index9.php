<?php 

$array = array(
	"02 => Aisne",
	"59 => Nord",
	"60 => Oise",
	"62 => Pas-de-Calais",
	"80 => Somme",
	);

$tailleArray=sizeof($array);

for ($i=0; $i<$tailleArray; $i++) { 
	echo $array[$i].'<br/>';
}

?>
