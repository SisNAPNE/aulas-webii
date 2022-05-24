<?php
	// Array Multidimensional: Definição Explícita
	$arr = array(	"Maria" => 	array(
							"endereco" 	=> "Rua Chile 1046",
							"bairro"	=> "Rebouças",
							),
			
 				"João" => 	array(
							"endereco" 	=> "Rua Iapó 234",
							"bairro"	=> "Prado Velho",
							)
			);

	foreach($arr as $chave => $aux) {
		
		echo strtoupper($chave).": <br>";
		foreach($aux as $chave => $valor) {
			echo "  - $valor<br>";
		}
		echo "<br>";
	}
?>


