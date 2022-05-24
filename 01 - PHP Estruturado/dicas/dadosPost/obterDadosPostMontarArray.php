<?php
	function obterDadosMontarArray($post) {

		// Monta o array
		$dados = array(
			$post['cpf'] => array(
				"nome" => $post['nome'],
				"telefone" => $post['telefone']
			)
		);

		print_r($dados);
	}
?>

