<?php
// ID de Session 
// Se o ID for descoberto podemos roubar dados SESSIONHATTTACK o HTTPS encripta o ID SESSION trazendo segurança
require_once("config.php");

//Gera novos ID Session usado no login paara validar falamos p gerar outro ID SeSSION para segurança
session_regenerate_id();

//mostra seu ID na Session
echo session_id();

var_dump($_SESSION);

?>