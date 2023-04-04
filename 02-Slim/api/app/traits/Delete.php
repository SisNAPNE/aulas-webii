<?php

    namespace app\traits;

    trait Delete {

        public function delete(array $where) {

            try {

                $sql = "DELETE FROM {$this->table}";
                $sql .= " WHERE ";
                foreach(array_keys($where) as $field) {
                    $sql .= "{$field} = :{$field} AND";
                }
                $sql = rtrim($sql, " AND");

                $prepared = $this->connection->prepare($sql);
                return $prepared->execute($where);

                // var_dump($sql);

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }