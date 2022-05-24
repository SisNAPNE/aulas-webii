<?php

	function select() {

		$cursos = array();
		$fp = fopen('cursos.txt', 'r');

        if($fp) {
            while(!feof($fp)) {
				$arr = array();
                $id = fgets($fp);
				$dados = fgets($fp);
				if(!empty($dados)) {
					$arr = explode("#", $dados);
					$cursos[$id] = $arr;
				}
			}
			fclose($fp);
		}

		return $cursos;
	}

	function select_where($id) {

		$cursos = select();

		foreach ($cursos as $chave => $dados) {
			// echo "$cpf=$chave<br>";
			if(strcmp($id, trim($chave)) == 0) { 
				return $dados;
			}
		}

		return null;	
	}

	function insert($curso) {

		$fp = fopen('cursos.txt', 'a+');

		if ($fp) {
			foreach($curso as $id => $dados) {
				if(!empty($dados)) {
					fputs($fp, $id);
					fputs($fp, "\n");
					$linha=$dados['nome']."#".$dados['sigla']."#".$dados['tempo'];
					fputs($fp, $linha);
					fputs($fp, "\n");
				}
			}
			fclose($fp);
			echo "<script> alert('[OK] Curso Cadastrado com Sucesso!') </script>";
		}
	}

	function update($new, $id) {

		$cursos = select();

		$fp = fopen('bkp.txt', 'a+');

		if ($fp) {
			foreach($cursos as $chave => $dados) {
				if(!empty($dados)) {
					fputs($fp, $chave);
					if($id == trim($chave)){
						foreach($new as $new_id => $new_dados) {
							if(!empty($new_dados)) {
								$linha=$new_dados['nome']."#".$new_dados['sigla']."#".$new_dados['tempo']."\n";
							}
						}
					}
					else 
						$linha=$dados[0]."#".$dados[1]."#".$dados[2];
					fputs($fp, $linha);
				}
			}
			fclose($fp);
			echo "<script> alert('[OK] Curso Alterado com Sucesso!') </script>";

			unlink("cursos.txt");
			rename("bkp.txt", "cursos.txt");
		}
	}

	function delete() {

	}

?>
