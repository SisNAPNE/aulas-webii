<?php

    namespace app\traits;

    trait Update {

        public function update(array $fieldsAndValues, array $where) {

            try {

                $sql = "UPDATE {$this->table} SET ";
                foreach(array_keys($fieldsAndValues) as $field) {
                    $sql .= "{$field} = :{$field}, ";
                }
                $sql = rtrim($sql, ", ");

                $sql .= " WHERE ";
                foreach(array_keys($where) as $field) {
                    $sql .= "{$field} = :{$field} AND";
                }
                $sql = rtrim($sql, " AND");

                $prepared = $this->connection->prepare($sql);
                return $prepared->execute(array_merge($fieldsAndValues, $where));

                // var_dump($sql);

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }