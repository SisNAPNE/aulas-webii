<?php
	$val = 12;	// Escopo do script

	function quadrado() {
	
		$val = 6;	// Escopo da função	
		$val = $val * $val;
		echo "\$val (na função \"". __FUNCTION__ ."()\") = $val";
	}

	echo "\$val = $val<br>";
	quadrado();
	echo "<br>\$val = $val";
?>


