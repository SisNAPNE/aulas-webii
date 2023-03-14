<?php

    use app\controllers\UserController;

    $app->get('/user', 'app\controllers\UserController:index');
    $app->post('/user/create', 'app\controllers\UserController:create');
    $app->put('/user/update/{id}', 'app\controllers\UserController:update');
    $app->delete('/user/delete/{id}', 'app\controllers\UserController:delete');