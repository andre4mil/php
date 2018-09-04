<?php
/// Include e Require puxa uma função de outro arquivo
//importante sempre usar uma pasta p armazenar seus includes
// diferença entre eles:
//Require obriga que o arquivo exita e funciona senão da erro fatal
//Include tenta funcionar c erros além de ter mais recursos que o require
//Include remoto permite trazer coisas de outro site e usa no seu sistema
//pasta de Include
//Riqiere once ele traz apenas 1 vez o arquivo mesmo q seja chamado várias vezes o mesmo

//include "inc/include1.php";

//Require "inc/include1.php";

Require_once "inc/include1.php";


//função somar veio de outro arquivo
$resultado = somar(10, 20);

echo $resultado;


?>