<?php

$get = $_GET['usuario'];


$codigo = file_get_contents("https://www.habblet.in/profile/".$get);

$array1 = explode('<div class="header-description">',$codigo);


foreach ($array1 as $idArray => $array) {

	
 if(isset($a)){
 	$missao = explode('</div>',$array);

 	print $missao[0];

	
 }	

$a++;

} 

?>

