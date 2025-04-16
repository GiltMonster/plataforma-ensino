<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AlunoController;
use App\Controllers\HomeController;

// BASE_URL
$url = $_GET['url'] ?? 'home/index'; 

$url = explode('/', $url);

// pega a controller e o método da URL
$controllerName = ucfirst($url[0] ?? 'home') . 'Controller';
$method = $url[1] ?? 'index';

// namespace
$controllerClass = "App\\Controllers\\$controllerName";

// Verifica se o controller e método existem
if (class_exists($controllerClass)) {
    $controller = new $controllerClass();

    if (method_exists($controller, $method)) {
        call_user_func([$controller, $method]);
    } else {
        http_response_code(404);
        echo "Método não encontrado";
    }
} else {
    http_response_code(404);
    echo "Controller não encontrado";
}
