<?php
//FOR cria um loop de acordo com a condição SE
// valor inicial ; até ; incrementar ou decrementar

//for($i = 0; $i <= 10; $i++){
for($i = 0; $i <= 1000; $i+=5){

	if ($i > 200 && $i < 800) continue;

	if ($i === 900) break;

	echo $i . "<br>";
}
//lop infinito
//for ($i=0; $i < 10 ; $i--) { 
	//echo $i . "<br>";  }




?>