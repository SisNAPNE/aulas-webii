<?php

    namespace app\traits;

    trait Read {

        public function all($returnAll = true) {

            try {

                $query = $this->connection->query("select * from {$this->table}");
                return $returnAll ? $query->fetchAll() : $query->fetch();

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }

        public function find($field, $value, $returnAll = true) {

            try {

                $prepared = $this->connection->prepare("select * from {$this->table} where {$field} = :{$field}");
                $prepared->bindValue(":{$field}", $value);
                $prepared->execute();
                return $returnAll ? $prepared->fetchAll() : $prepared->fetch();

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }