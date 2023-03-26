<?php

    namespace app\traits;

    trait Read {

        public function all($returnAll = true) {

            try {

                $query = $this->connection->query("SELECT * FROM {$this->table}");
                return $returnAll ? $query->fetchAll() : $query->fetch();

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }