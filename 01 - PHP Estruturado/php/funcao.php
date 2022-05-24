<?php

	function nome_funcao($par_1 = 0, $par_2 = "vazio") {
		echo "Código da Função <br>";
		return "Dada de Retorno: ".$par_1."/".$par_2;
	}

	$retorno = nome_funcao();
	echo $retorno."<br><br>";

	$retorno = nome_funcao(12, "Gil Eduardo");
	echo $retorno."<br><br>";
?>



