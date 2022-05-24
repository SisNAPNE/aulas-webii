<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once ("obterDadosPostMontarArray.php");

    if( !empty($_POST['form_submit']) ) {
        obterDadosMontarArray($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SisCadPF</title>

        <!-- Bootstrap URL - CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="css/theme.css" rel="stylesheet">
        <!-- Ajax Script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>

    <body role="document">
        <form class="form" method="post" action="viewObterDadosArray.php">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK">
            <br><br>
            <button type="submit" class="btn btn-primary btn-block">
                <b>Obter Dados Post</b>
            </button>
            <br>
            <div class='row'>
        		<div class='col-sm-4'>
                    <label class="sr-only">CPF</label>
                    <input type="text" class="form-control" name="cpf" maxlength="15" placeholder="CPF" required autofocus>
                </div>
                <div class='col-sm-4'>
                    <label class="sr-only">nome</label>
                    <input type="text" class="form-control" name="nome" maxlength="40"  placeholder="Nome" required autofocus>
                </div>
                <div class='col-sm-4'>
                    <label class="sr-only">telefone</label>
                    <input type="text" class="form-control" name="telefone" maxlength="18" placeholder="Telefone" required autofocus>
                </div>
            </div>
        </form>
    </body>
</html>
