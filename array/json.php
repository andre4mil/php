<?php
//JSON JAVA SCRIPT Object NOTEtion  
// tds linguagens geram Json onde podemos trocar PHP c JAVA
// interoperabilidade de sistemas gera Json para outros consumir 
//relacionado com Arrays onde serealiza elas encode e decode


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
//transformar array em Json
echo json_encode($pessoas);

?>