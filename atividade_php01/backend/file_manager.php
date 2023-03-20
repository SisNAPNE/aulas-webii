<?php

    function create() {
        echo "<script>alert('SUBMIT - CREATE')</script>";
    }

    function read() {

        $pessoas = array();
        $fp = fopen('../bd/pessoas.txt', 'r');

        if ($fp) {

            while(!feof($fp)) {
                $arr = array();
                $cpf = fgets($fp);
                $dados = fgets($fp);
                if(!empty($dados)) {
                    $arr = explode("#", $dados);
                    $pessoas[$cpf] = $arr;
                }
            }

            fclose($fp);
            return $pessoas;
        }
    }

?>