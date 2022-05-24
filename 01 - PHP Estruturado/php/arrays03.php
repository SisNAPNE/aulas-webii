<?php
	// Array: Definição Explícita (com chave)
	$var = array(	"000.000.000-00"	=> "Maria", 
				"000.000.000-01"	=> "João"
			);

	foreach ($var as $chave => $valor) {
		echo "($chave: $valor) ";
	}
	
	$var = array(	12	=> "Maria", 
				21	=> "João"
			);

	echo "<br>";
	foreach ($var as $chave => $valor) {
		echo "($chave: $valor) ";
	}
?>


