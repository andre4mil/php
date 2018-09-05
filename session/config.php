<?php

session_start();

//apagar a variavel de session chamado nome
//session_unset($_SESSION['nome']);

//apaga todas as variaveis da session porém mantem a sesion logada
//session_unset();

//destroi limpa e remove a variavel como encerrar login
//session_destroy();

$_SESSION["nome"] = "Ana";





?>