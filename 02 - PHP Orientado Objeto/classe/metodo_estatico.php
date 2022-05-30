<?php
    class aluno {

        public static function getReferencia($nome) {
            $partes = explode(" ", $nome);
            return mb_strtoupper($partes[count($partes)-1], 'UTF-8').", ".$partes[0];
        }
    }

    $ref = aluno::getReferencia("Maria Eduarda Silva");
    echo "<h3>".$ref."</h3>";
?>


