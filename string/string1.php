<?php
/// String diferença de "" e '' interpolação de variaveis 

$nome = "Ana";

$nome2 = 'Silva';

//var_dump($nome, $nome2);

// "" pegam o valor da variavel
echo "ABC  $nome";
echo "<br>";

// '' não pegam o valor da variavel
echo 'ABC  $nome';


?>