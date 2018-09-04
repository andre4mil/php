<?php
/// Operadore PHP Comparação > < >= <= != == comparação de valor não de tipo
//retorno True - false
$a = 55.0;

$b = 55;

//maior
var_dump($a > $b);
echo "<br>";

//menor
var_dump($a < $b);
echo "<br>";

// usamos o == comparação de valor não de tipo ex: 55.0 == 55 
var_dump($a == $b);
echo "<br>";

//=== para comparação de tipo(identidade) de valor ex: tipo decimal e inteiro 
var_dump($a === $b);
echo "<br>";

//diferente
var_dump($a != $b);
echo "<br>";

// diferente por tipo de valor
var_dump($a !== $b);
echo "<br>";



?>
