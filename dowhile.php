<?php
//DO WHILE executa 1 vez enquanto o while for veraddeiro


$total = 150;
$desconto = 0.9;

//pegue o total * ele mesmo com desconto
do {
	
$total *= $desconto;

//apenas enqunto o total for acima de 100
} while ($total > 100);

echo $total;



?>