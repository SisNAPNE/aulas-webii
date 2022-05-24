<?php
	function escreverArquivoArray($arr) {

		$fp = fopen('pessoas.txt', 'a+');

		if ($fp) {
			foreach($arr as $cpf => $dados) {
				if(!empty($dados)) {
					$linha = $cpf." - ".$dados['nome']." - ".$dados['endereco']." - ".$dados['telefone'];
					fputs($fp, "$linha\n");
				}
			}
			fclose($fp);
		}

		echo "[OK] Dados escritos com Sucesso!";
	}
?>

