<?php
/// Estrutura condicionais IF, ELSE, ELSE IF 
$suaIdade = 18;
$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($suaIdade <= $idadeCriança){

	echo "Criança";

}else if($suaIdade <= $idadeMaior){

	echo "Adolescente";

}else if($suaIdade <= $idadeMelhor){

	echo "Adulto";

}else{

	echo "Idoso";
}

//Operador ternário

Echo "<br>";
echo ($suaIdade <= $idadeMaior)?"Menor de Idade":"Maior de Idade";






?>