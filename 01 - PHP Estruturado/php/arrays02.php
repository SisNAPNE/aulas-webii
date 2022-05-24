<?php
	// Array: Definição Explícita (com chave)
	$var = array(	"Maria"	=> 25, 
				"João"	=> 44,
				"José"	=> 12,
				"Neusa"	=> 73
			);

	foreach ($var as $chave => $valor) {
		echo "$chave: $valor<br>";
	}
	echo "<br>";
	print_r($var);
?>


