<?php

    $DB_NOME = "dwii";
    $DB_USUARIO = "root";
    $DB_SENHA = "*******";
    $DB_CHARSET = "utf8";

    $str_conn = "mysql:host=localhost;dbname=".$DB_NOME;

    $conn = new PDO($str_conn, $DB_USUARIO, $DB_SENHA,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".$DB_CHARSET));
        

    $sql = "INSERT INTO tb_cursos(nome, sigla, tempo) 
        VALUES('Licenciatura em Ciências Sociais', 'LCS', '4')";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    echo "INSERIDO COM SUCESSO!";
?>
