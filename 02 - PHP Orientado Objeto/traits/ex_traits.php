<?php

    // CODIFICAÇÃO APENAS ILUSTRATIVA
    Trait Read {
        
        public function all() {

            $query = "SELECT * FROM $this->table";
            return PDO::fetchAll($query);
        }
    }

    // CODIFICAÇÃO APENAS ILUSTRATIVA
    class Curso {

        use Read;
        protected $table = "tb_cursos";
    }

    // CODIFICAÇÃO APENAS ILUSTRATIVA
    class Ocorrencia {

        use Read;
        protected $table = "tb_ocorrencias";
    }