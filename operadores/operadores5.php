<?php
/// Operadore PHP7 novos Spaceship <=> nullcolecing ??

$a = 35;
$b = 65;

var_dump($a <=> $b);

echo "<br>";

$c = NULL;
$d = NULL;
$e = 65;

echo $c ?? $d ?? $e;



?>