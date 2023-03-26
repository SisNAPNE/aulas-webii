<?php

    Class Curso {
        
        private $table = "tb_cursos";
        private $connection;

        public function __construct() {
            $this->connection = Connect::connection();
        }

        public function all() {

            $query = $this->connection->query("SELECT * FROM $this->table");
            return $query->fetchAll();
        }
    }

    class Ocorrencia {

        private $table = "tb_ocorrencias";
        private $connection;

        public function __construct() {
            $this->connection = Connect::connection();
        }

        public function all() {

            $query = $this->connection->query("SELECT * FROM $this->table");
            return $query->fetchAll();
        }
    }