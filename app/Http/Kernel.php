<?php

namespace App\Http;

use App\Http\Router;

class Kernel
{
    protected $middlewares = [];

    public function handle()
    {
        //routes
        $router = new Router();

        $router->add("GET", "", \App\Controllers\HomeController::class, "index");
        $router->add("GET", "users", \App\Controllers\UserController::class, "index");
        $router->add("GET", "users/create", \App\Controllers\UserController::class, "create");
        $router->add("POST", "users/store", \App\Controllers\UserController::class, "store");

        try {
            echo $router->dispatch();
        } catch (\Exception $exception) {
            $errorCode = $exception->getCode();
            $data = [
                "errorMessage" => $exception->getMessage(),
                "errorCode" => $errorCode
            ];
            header('Content-Type: application/json');
            http_response_code($errorCode);
            echo json_encode(["data" => $data], JSON_PRETTY_PRINT);
        }

    }
}

$kernel = new Kernel();
$kernel->handle();