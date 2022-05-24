<?php
	// Array: Definição Direta (sem chave)
	$var[0] = "Desenvolvimento";
	$var[1] = "Web";
	$var[2] = "II";

	echo "[for]: ";
	for($a=0; $a<count($var); $a++) {
		echo "$var[$a] ";
	}

	echo "<br>[foreach]: ";
	foreach ($var as $dado) {
		echo "$dado ";
	}
?>


