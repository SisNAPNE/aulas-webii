<?php

    $DB_NOME = "dwii";
    $DB_USUARIO = "root";
    $DB_SENHA = "*******";
    $DB_CHARSET = "utf8";

    $str_conn = "mysql:host=localhost;dbname=".$DB_NOME;

    $conn = new PDO($str_conn, $DB_USUARIO, $DB_SENHA,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".$DB_CHARSET));
        
    $stmt = $conn->prepare("SELECT * FROM tb_cursos LIMIT 3");
    $stmt->execute();

    while($row = $stmt->fetchObject()) {
        echo "<h4>".$row->id." - ".$row->nome."</h4>";
    }

?>
