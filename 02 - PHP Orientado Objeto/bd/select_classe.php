<?php

    class BD {
        private $DB_NOME = "dwii";
        private $DB_USUARIO = "root";
        private $DB_SENHA = "*******";
        private $DB_CHARSET = "utf8";

        public function connection() {
            $str_conn = "mysql:host=localhost;dbname=".$this->DB_NOME;

    		return new PDO($str_conn, $this->DB_USUARIO, $this->DB_SENHA,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".$this->DB_CHARSET));
    	}

        public function select() {
            $conn = $this->connection();
    		$stmt = $conn->prepare("SELECT * FROM tb_cursos LIMIT 3");
            $stmt->execute();

            return $stmt;
        }
    }

    $obj = new BD();
    $cursos = $obj->select();

    while($row = $cursos->fetchObject()) {
        echo "<h4>".$row->id." - ".$row->nome."</h4>";
    }

?>
