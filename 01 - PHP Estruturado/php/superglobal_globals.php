<?php
	function exemplo_globals() {

		$var = "variável local a função";

		echo "\$var NO ESCOPO LOCAL: $var<br>";
		echo "\$var NO ESCOPO GLOBAL: ". $GLOBALS['var']."<br>";	
	}

	$var = "variável global ao script";
	exemplo_globals();
?>


