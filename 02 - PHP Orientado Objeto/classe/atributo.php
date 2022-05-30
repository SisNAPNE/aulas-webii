<?php
    class aluno {

        public $nome;

        function __construct($nome="VAZIO") {
            $this->nome = $nome;
        }
    }

    $obj = new aluno();
    echo "<h3>".$obj->nome."</h3>";

    $obj = new aluno("MARIA");
    echo "<h3>".$obj->nome."</h3>";
?>


