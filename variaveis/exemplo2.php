<?php
/* outra forma de comentar 
$anoNascimento = 1988;
*/
$nomeCompleto ="André Xavier";
// Na linha abaixo temos uma váriavel com núemro e nome 
$nome1 = "Paulo";

$sobrenome = "Silva";
//concatenando usamos o . Ponto
$nomeCompleto = $nome1 . $sobrenome;

echo "$nomeCompleto";

exit;

echo $nome1;
echo "<br>";

// apaga valor da váriavel
Unsert($nome1);

if (isset($nome1)) {

echo $nome1;

}


?>