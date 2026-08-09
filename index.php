<?php
    require "./config/db.php";
    require "./app/models/User.php";
    require "./app/controllers/AuthController.php";
    require "./app/routes/web.php";

    $user = new User($conn);
    $controller = new AuthController($user);

    $page = $_GET['page'] ?? 'login';

    if (!isset($routes[$page])){
        http_response_code(404);
        die("404 not found");
    }

    $route = $routes[$page];

    $controller->$route();