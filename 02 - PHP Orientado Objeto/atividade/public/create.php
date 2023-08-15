<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

    header('Access-Control-Allow-Origin: *');
    require __DIR__ . '/../vendor/autoload.php';

    use app\controllers\StudentController;

    $obj = new StudentController();

    $data = $obj->create(
        array(
            'nome' => $_POST['nome'], 
            'turma' => $_POST['turma']
        )
    );
    print_r($data);