<?php
//SESSION
// Variaveis local só funciona na propria pagina ou ele vir no Include ou requiere
//Variaveis de Sessão elas são vistas em todo código enquanto se esta conectado no site ela começa quando o user se conecta. ex google cria um temp com seus dados pesquisados, e ela pode ser matada ha qualquer momento pelo código. ex sistemas de login ou restritos.
// o padrão do PHP as sesions não iniciam automaticamente temos que inicia-las
// no php.ini SESSION_autoStart uda p iniciar
session_start();

$_SESSION["nome"] = "Ana";





?>