<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once ("route.php");

    if( !empty($_POST['form_submit']) ) {
        rotas($_POST['acao']);
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
        <form class="form" method="post" action="viewRoute.php">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK">
            <br><br>
            <div class='row'>
        		<div class='col-sm-4'>
                    <button type="submit" name="acao" value="cadastar/0" class="btn btn-primary btn-block">
                        <b>Cadastar</b>
                    </button>
                </div>
                <div class='col-sm-4'>
                    <button type="submit" name="acao" value="alterar/1" class="btn btn-success btn-block">
                        <b>Alterar</b>
                    </button>
                </div>
                <div class='col-sm-4'>
                    <button type="submit" name="acao" value="remover/2" class="btn btn-danger btn-block">
                        <b>Remover</b>
                    </button>
                </div>
            </div>
        </form>
    </body>
</html>
