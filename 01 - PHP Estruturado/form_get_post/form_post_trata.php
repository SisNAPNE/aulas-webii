<?php

    if( !empty($_POST['form_submit']) ) {
        $dados = $_POST['aluno']. " - " .$_POST['turma'];
        echo "<script>alert('".$dados."')</script>";
    }

?>
<html lang="pt-br">
    <head>
        <title> Formulário - POST </title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form_post_trata.php" method="post">
        <input type="hidden" name="form_submit" value="OK">
            <p> Aluno: <input type="text" name="aluno"/> </p>
            <p> Turma: <input type="text" name="turma"/> </p>
            <p> <input type="submit" value="Enviar!"/> </p>
        </form>
    </body>
</html>


