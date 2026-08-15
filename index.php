<?php
    require "./config/db.php";
    require "./app/models/User.php";
    require "./app/controllers/AuthController.php";
    require "./app/controllers/UserController.php";
    
    $user = new User($conn);
    $authController = new AuthController($user);
    $userController = new UserController($user);

    require "./app/routes/web.php";

    $method = $_SERVER['REQUEST_METHOD'];

    $uri = parse_url(
        $_SERVER['REQUEST_URI'],
        PHP_URL_PATH
    );

    if (!isset($routes[$method][$uri])){
        http_response_code(404);
        die("404 not found");
    }

    [$controller, $action] = $routes[$method][$uri];

    $controller->$action();