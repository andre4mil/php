<?php
///Variáveis Pré-definidas Arrays Super Globais

///Sempre vem tipo String porém mudamos para tipo INT
//$_GET pega os dados da barra de endereço
$nome = (int)$_GET["a"];

//var_dump($nome);
//Localizar o IP pega os dados do IP
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;
$arrayName = array('' => , );



?>