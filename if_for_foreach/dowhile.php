<?php
//DO WHILE executa 1 vez mesmo a condição sendo falsa ou enquanto o while for veraddeiro
//cuidado c a condição dele p não ser ifinito


$total = 150;
$desconto = 0.9;

//pegue o total * ele mesmo com desconto
do {
	
$total *= $desconto;

//apenas enqunto o total for acima de 100
} while ($total > 100);

echo $total;



?>