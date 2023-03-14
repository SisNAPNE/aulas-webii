<?php

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    require __DIR__ . '/../vendor/autoload.php';

    $app = AppFactory::create();

    $app->addBodyParsingMiddleware();
    $app->addRoutingMiddleware();

    $errorMiddleware = $app->addErrorMiddleware(true, true, true);

    // Inclui arquivo com as contantes e variáveis de ambiente
    require "../app/helpers/config.php";
    // Inclui o arquivo de rotas para usuários 
    require "../app/routes/user.php";
    
    // Executa Aplicação
    $app->run();