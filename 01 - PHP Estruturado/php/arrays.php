<?php
	// Array: Definição Explícita (sem chave)
	$var = array(1, 2, 3, 4);

	echo "[for]: ";
	for($a=0; $a<count($var); $a++) {
		echo "$var[$a] ";
	}

	echo "<br>[foreach]: ";
	foreach ($var as $dado) {
		echo "$dado ";
	}
?>


