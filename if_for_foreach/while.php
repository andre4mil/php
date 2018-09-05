<?php
//WHILE = faz enquanto existir na base de dados
//DO WHILE executa 1 vez
$condicao = true;

// usarmos para qualquer assunto desde que a condição seja verdadeira ele executa o comando
while ($condicao) {
	
	$numero = rand(1, 10);

	if ($numero === 3) {
		
		echo "TRÊS!!";
		$condicao = false;
	}

	echo $numero . "  ";
}


?>

