<?php

    class pessoa {

        private $nome;

        function __construct($n) {
            $this->nome = $n;
        }
        public function setNome($n) { $this->nome = $n; }
        public function getNome() { return $this->nome; }
        
    }

    class aluno extends pessoa {

        public $turma;

        function __construct($n, $t) {
            parent::__construct($n);
            $this->turma = $t;
        }
        public function setTurma($t) { $this->turma = $t; }
        public function getTurma() { return $this->turma; }
    }

    $obj = new aluno("Maria", "TADS16");
    echo "<h3>".$obj->getNome()."</h3>";
    echo "<h3>".$obj->getTurma()."</h3>";
?>


