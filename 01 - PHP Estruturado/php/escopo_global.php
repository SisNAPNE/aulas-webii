<?php
	$val = 12;	// Escopo do script

	function quadrado() {
	
		global $val;	// Escopo global	
		$val = 6;
		$val = $val * $val;
		echo "\$val (na função \"". __FUNCTION__ ."()\") = $val";
	}

	function metade() {
		global $val;
		$val = $val / 2;
		echo "\$val (na função \"". __FUNCTION__ ."()\") = $val";
	}

	function soma10() {
		$GLOBALS['val'] = $GLOBALS['val'] + 10;
		echo "\$val (na função \"". __FUNCTION__ ."()\") = ".$GLOBALS['val'];	
	}

	echo "\$val = $val<br>";
	quadrado();
	echo "<br>\$val = $val<br>";
	metade();
	echo "<br>\$val = $val<br>";
	soma10();
	echo "<br>\$val = $val";
?>


