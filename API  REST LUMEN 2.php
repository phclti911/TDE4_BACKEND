<?php

use Illuminate\Support\Facades\Route;

// Endpoint para retornar uma lista de usuários
Route::get('/api/users', function () {
    $users = [
        ['id' => 1, 'name' => 'Usuário 1'],
        ['id' => 2, 'name' => 'Usuário 2'],
        ['id' => 3, 'name' => 'Usuário 3'],
    ];

    return response()->json($users);
});
