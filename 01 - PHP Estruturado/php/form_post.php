<?php
    //include_once 'funcao.php';

    if(!empty($_POST['form_submit'])) {
        echo "<script>alert('Submeteu formulário');</script>";
    }
?>

<html lang="pt-br">
    <head>
        <title> Formulário - POST </title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form_post.php" method="post">
            <input type="hidden" name="form_submit" value="OK"/>
            <p> Aluno: <input type="text" name="aluno"/> </p>
            <p> Turma: <input type="text" name="turma"/> </p>
            <p> <input type="submit" value="Enviar!"/> </p>
        </form>
    </body>
</html>


