<?php
//foreach = para cada item dessa array faça algo execute algo

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);
// primeiro o array $meses depois cada item da array ele cria uma variavel $mes
//array tem indice = $index
foreach ($meses as$index => $mes) {

	echo "O Indice: ".$index."<br>";
	echo "O mês é ".$mes."<br><br>";
}



?>