<?php
    class aluno {

        private $nome;

        function __construct($nome="Vazio") {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }
    }

    $obj = new aluno();
    echo "<h3>".$obj->getNome()."</h3>";
    $obj = new aluno("Maria Eduarda Silva");
    echo "<h3>".$obj->getNome()."</h3>";
?>


