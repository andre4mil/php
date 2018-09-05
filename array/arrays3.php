<?php
//ARRAYS funçõe spara trata-los bi-dimensional 

$pessoas = array();

//adiciona um item no array ja criado
//array $pessoas vai receber outro array
array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'paulo',
	'idade'=>26
));

//print_r($pessoas);
print_r($pessoas[0]['nome']);

?>