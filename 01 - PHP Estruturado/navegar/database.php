<?php

	function loadTabela() {

		$pessoas = array(
			"000.000.000.01" => array(
				"nome" => "Carlos Eduardo",
				"endereco" => "Rua Manuel Viana, 200",
				"telefone" => "(41)3422-2829",
			),

			"000.000.000.02" => array(
				"nome" => "Fabiola Oliveira",
				"endereco" => "Rua Antonio Carlos Rodrigues, 2064",
				"telefone" => "(41)99912-0214",
			)
		);

		foreach ($pessoas as $cpf => $dados) {

			if(!empty($dados)) {
				echo "<tr>";
					echo "<td>".$cpf."</td>";

					foreach ($dados as $valor) {
						echo "<td>".$valor."</td>";
					}

					echo "<td>";
						echo "<button type='submit' name='acao' value='alterar/'".$cpf.">";
							echo "<span class='glyphicon glyphicon-pencil'></span>";
						echo "</button>";
						echo "&nbsp";
						echo "<button type='submit' name='acao' value='remover/'".$cpf.">";
							echo "<span class='glyphicon glyphicon-remove'></span>";
						echo "</button>";
					echo "</td>";
				echo "</tr>";
			}
		}
	}
?>
