<?php
//Escopo de Váriavel são importantes para Função
//Nota-se que a variável $nome fora da função não esta no mesmo escopo que a $nome dentro da função

$nome = "André";


function teste(){
	//usando o global informo p ele buscar váriaveis fora do escopo 
	global $nome;
	echo $nome;

}

//sem usar Global
function teste2(){
	$nome = "Ana";
	echo $nome. " teste2";

}


teste();

teste2();


?>