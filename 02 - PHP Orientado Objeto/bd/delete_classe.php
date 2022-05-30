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
    		$stmt = $conn->prepare("SELECT * FROM tb_alunos LIMIT 3");
            $stmt->execute();

            return $stmt;
        }

        public function insert($dados) {

            $sql = "INSERT INTO tb_cursos(nome, sigla, tempo) VALUES(";

            $flag = 0;
            foreach($dados as $campo => $valor) {
                if($flag == 0) {
                    $sql .= "'$valor'";
                    $flag = 1;
                }
                else { $sql .= ", '$valor'"; }
            }
            $sql .= ")";

            $conn = $this->connection();
    		$stmt = $conn->prepare($sql);
            $stmt->execute();

            return $conn->lastInsertId();
        }

        public function update($dados, $id) {
        
            $sql = "UPDATE tb_cursos SET ";

            $flag = 0;
            foreach($dados as $campo => $valor) {
                if($flag == 0) { $sql .= "$campo=:$campo"; }
                else { $sql .= ", $campo=:$campo"; }
                $flag = 1;
            }

            $sql .= " WHERE id=$id";

            $conn = $this->connection();
    		$stmt = $conn->prepare($sql);

            foreach($dados as $campo => &$valor) {
                $stmt->bindParam($campo, $valor);
            }

            $stmt->execute();
            return $stmt;
        }

        public function delete($id) {

            $conn = $this->connection();
    		$stmt = $conn->prepare("DELETE FROM tb_cursos WHERE id=$id");
            $stmt->execute();

            return $stmt;
        }
    }

    $obj = new BD();
    $ret = $obj->delete(7);

    echo "REMOVIDO COM SUCESSO!";

?>
