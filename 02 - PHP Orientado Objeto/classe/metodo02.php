<?php
    class aluno {

        private $nome;

        function __construct($nome="VAZIO") {
            $this->nome = $nome;
        }

        public function getReferencia() {
            $partes = explode(" ", $this->nome);
            return $this->getSobrenome().", ".$partes[0];

        }

        private function getSobrenome() {
            $partes = explode(" ", $this->nome);
            return mb_strtoupper($partes[count($partes)-1], 'UTF-8');
        }
    }

    $obj = new aluno("Maria Eduarda Silva");
    echo "<h3>".$obj->getReferencia()."</h3>";
?>


