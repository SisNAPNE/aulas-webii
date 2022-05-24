<?php

    include_once ("controle.php");

    if( !empty($_POST['form_submit']) ) {
        alterar();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SisColetivos - Alterar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-4">        
            <form class="form" method="post" action="viewAlterar.php">
                <input TYPE="hidden" NAME="form_submit" VALUE="OK">

                <h3 class="display-7 text-secondary"><b>Novo Curso</b></h3>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="id" 
                                placeholder="id"
                                value="<?php echo $_GET['id']; ?>"
                                readonly="true"
                            />
                            <label for="id">ID do Curso</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="nome" 
                                placeholder="Nome"
                                value="<?php echo $_GET['nome']; ?>"
                            />
                            <label for="nome">Nome do Curso</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="sigla" 
                                placeholder="Sigla"
                                value="<?php echo $_GET['sigla']; ?>"
                            />
                            <label for="sigla">Sigla do Curso</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="number"
                                min="1" 
                                max="5" 
                                class="form-control" 
                                name="tempo" 
                                placeholder="Tempo"
                                value="<?php echo $_GET['tempo']; ?>"
                            />
                            <label for="tempo">Tempo do Curso (anos)</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="viewMain.php" class="btn btn-secondary btn-block align-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                            </svg>
                            &nbsp; Voltar
                        </a>
                        <button type='submit' class='btn btn-success btn-block align-content-center'>
                            Confirmar &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
