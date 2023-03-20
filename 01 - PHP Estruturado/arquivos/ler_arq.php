<?php

	function readArray() {

		$pessoas = array();
		$fp = fopen('pessoas.txt', 'r');

		if ($fp) {

			while(!feof($fp)) {
				$arr = array();
				$cpf = fgets($fp);
				$dados = fgets($fp);
				if(!empty($dados)) {
					$arr = explode("#", $dados);
					$pessoas[$cpf] = $arr;
				}
			}

			fclose($fp);
			return $pessoas;
		}
	}

	$arr = readArray();
	print_r($arr);
?>

