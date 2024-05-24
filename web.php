<?php

$router->get('/users', 'UserController@index'); // Retorna todos os usuários
$router->get('/users/{id}', 'UserController@show'); // Retorna um usuário específico
$router->post('/users', 'UserController@store'); // Cria um novo usuário
$router->put('/users/{id}', 'UserController@update'); // Atualiza um usuário existente
$router->delete('/users/{id}', 'UserController@destroy'); // Deleta um usuário
