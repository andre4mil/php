<?php
// Funções para Session 

require_once("config.php");

// pasta onde salva o TEMP ID Session
echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

//tratando Session_status
switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sessões estiverem desabilitadas";
		break;
	case PHP_SESSION_NONE:
		echo "As sessões estiverem habilitadas, mas nenhuma existir";
		break;

	case PHP_SESSION_ACTIVE:
		echo "As sessões estiverem habilitadas, e uma existir";
		break;
	
}


?>