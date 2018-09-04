<?php
/// String 

$frase = "A repetição é mãe da retenção";
$palavra ="mãe";

//localizar uma palavra no meio texto
$q = strpos($frase, "mãe");

// localiza a frase pelo indice de onde de posição q ela esta 
$texto = substr($frase, 0, $q);

// começe apartir da palavra mais 3 letra e vai at´é o final da frase
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));


var_dump($q);
echo "<br>";

var_dump($texto);
echo "<br>";

var_dump($texto2);
echo "<br>";

?>