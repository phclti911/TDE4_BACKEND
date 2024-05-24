<?php

// Definindo o cabeçalho da resposta como JSON
header("Content-Type: application/json");

// Definindo um array de exemplo de usuários
$users = array(
    array("id" => 1, "name" => "João"),
    array("id" => 2, "name" => "Maria"),
    array("id" => 3, "name" => "Pedro")
);

// Verificando o método da requisição
$method = $_SERVER['REQUEST_METHOD'];

// Manipulando diferentes métodos
switch ($method) {
    case 'GET':
        // Se a requisição for GET, retorna a lista de usuários
        echo json_encode($users);
        break;
    case 'POST':
        // Se a requisição for POST, pode ser usado para criar um novo usuário, mas isso depende da aplicação
        // Aqui podemos manipular a criação de um novo usuário
        break;
    default:
        // Se outro método for usado, retornar um erro
        http_response_code(405); // Método não permitido
        echo json_encode(array("message" => "Método não permitido."));
        break;
}