<?php

    namespace app\traits;

    trait Create {

        public function create(array $fieldsAndValues) {

            try {

                $sql = "INSERT INTO " . $this->table . "(nome, turma)";
                $sql = $sql . "VALUES('".$fieldsAndValues['nome'] . "', '"; 
                $sql = $sql . $fieldsAndValues['turma']. "')";

                return $this->connection->query($sql);

                /*$sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", 
                    $this->table, 
                    implode(",", array_keys($fieldsAndValues)),
                    ":" . implode(",:", array_keys($fieldsAndValues))
                );

                $prepared = $this->connection->prepare($sql);
                return $prepared->execute($fieldsAndValues);*/

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }