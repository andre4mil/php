<?php

//Array Constante depois do PHP7 onde o valor da Constante é um array

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'teste'
	], true);
//para informar que ele é Case sinsitive coloque "true" no fim da constante por regra não usamos isso deixando sempre td maiusculo


 //nesse exemplo definimos a conexão c BD via comando

print_r(BANCO_DE_DADoS);


?>