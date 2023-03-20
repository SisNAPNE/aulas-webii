<?php

    include_once 'file_manager.php';

	function loadTable() {

        // Carrega Dados do Arquivo
        $arr = read();

        foreach($arr as $chave => $dados) {
            echo "<tr>";
                echo "<th scope='row'>$chave</th>";
                foreach($dados as $item) {
                    echo "<td>".$item."</td>";
                }
                echo "<td>";
                    echo "<a href='#' class='btn btn-success'>";
                        echo "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#FFF' class='bi bi-arrow-counterclockwise' viewBox='0 0 16 16'>";
                            echo "<path fill-rule='evenodd' d='M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z'/>";
                            echo "<path d='M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z'/>";
                        echo "</svg>";
                    echo "</a>";
                    echo "<a href='#' class='btn btn-danger'>";
                        echo "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#FFF' class='bi bi-trash-fill' viewBox='0 0 16 16'>";
                            echo "<path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z' />";
                        echo "</svg>";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
        }
	}

?>