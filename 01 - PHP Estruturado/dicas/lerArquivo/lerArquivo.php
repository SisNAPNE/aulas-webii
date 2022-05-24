<?php
	function ler() {
		$dados = array();
		$fp = fopen('pessoas.txt', 'r');

        if ($fp) {

            while(!feof($fp)) {
				$cpf = fgets($fp);
				$linha = fgets($fp);
				if(!empty($linha)) {
					$dados = explode("#", $linha);
					print_r($dados);
					echo "<br>";
				}
			}

			fclose($fp);
		}
	}
?>

