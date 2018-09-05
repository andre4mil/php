<?php
/// Operadore PHP (Valor + Valor) defini a prioridade no calculo 
 
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;

//echo $resultado;

var_dump($resultado);


echo "<br>";

//&& compara as duas condições E
$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 20;


var_dump($resultado2);


echo "<br>";

// || compara as duas condições OU
$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 20;


var_dump($resultado3);


?>
