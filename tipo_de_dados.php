<?php
///////tipos de dados básicos String Int float bool
$nome = "Pedro";
$email = 'pepe@gmail.com';

$ano = 2010;
$salario = 3000.99;
$bloqueado = false;

/*var_dump($nome);
var_dump($email);
var_dump($ano);
var_dump($salario);
var_dump($bloqueado);
*/
/////tipos de dados compostos Array e Objeto
$frutas = array("laranja", "abacaxi", "manga");

//echo $frutas[2];

$nascimento = new dateTime();

//var_dump($nascimento);

/////tipos de dados especiais
$arquivo = fopen("tipo_de_dados.php", "r");
var_dump($arquivo);




?>