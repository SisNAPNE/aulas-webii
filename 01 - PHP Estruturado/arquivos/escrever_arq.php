<?php

	$arr = array(
		"000.000.000-00" => array(
			"nome" => "Gil Eduardo",
			"ender" => "Av. Oswald de Andrade, 411",
			"tel" => "(41)9902-8921"
		),
		"000.000.000-01" => array(
			"nome" => "Maria Claudia",
			"ender" => "Rua Tenório Cardoso, 1002",
			"tel" => "(41)3422-9543"
		)
	);

	function addArray($arr) {

		$fp = fopen('pessoas.txt', 'a+');

		if ($fp) {
			foreach($arr as $cpf => $dados) {
				if(!empty($dados)) {
					fputs($fp, "$cpf\n");
					$linha = $dados['nome']."#".$dados['ender']."#".$dados['tel'];
					fputs($fp, "$linha\n");
				}
			}
			fclose($fp);
		}

		echo "[OK] Dados escritos com Sucesso!";
	}

	addArray($arr);
?>

