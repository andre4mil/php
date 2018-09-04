<?php
//JSON
//transformar um Json em array

$json = '[{"nome": "Jo\u00e3o","idade":20},{"nome": "paulo","idade":26}]';

// transformando Json em Array precissa informar o true no comando
$data = json_decode($json, true);

//$data = json_decode($json); assim ele traz Objeto

var_dump($data);

?>