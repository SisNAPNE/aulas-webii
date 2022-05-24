<?php

	function obterDados($post) {
		$dados = $post['cpf']." - ".$post['nome'];
		echo "<script> alert('".$dados."') </script>";
	}
?>


