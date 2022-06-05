<?php

    include_once '../global.php';

    class Aluno extends BD {

        public static $tabela = 'tb_alunos';

        public static function all($orderby="") {
            return parent::select(self::$tabela, $orderby);
        }

        public static function find($id) {
            return parent::selectFind(self::$tabela, "id = $id");
        }

        public static function create($dados) {
            return parent::insert(self::$tabela, $dados);
        }

        public static function update($id, $dados) {
            return parent::edit(self::$tabela, $dados, "id = $id");
        }

        public static function destroy($id) {
            return parent::delete(self::$tabela, "id = $id");
        }
    }
