<?php 

$array = array(
	"1" => "janvier",
	"2" => "février",
	"3" => "mars",
	"4" => "avril",
	"5" => "mai",
	"6" => "juin",
	"7" => "juillet",
	"8" => "aout",
	"9" => "septembre",
	"10" => "octobre",
	"11" => "novembre",
	"12" => "décembre",
	);

$tailleArray=sizeof($array);

for ($i=0; $i<$tailleArray; $i++) { 
	echo $array[$i].'<br/>';
}
 ?>