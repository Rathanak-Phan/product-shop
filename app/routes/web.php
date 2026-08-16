<?php
    $routes = [
        'GET' => [
            '/' => [
                $authController,
                'home'
            ],

            '/login' => [
                $authController,
                'login'
            ],

            '/register' => [
                $authController,
                'register'
            ],

            '/profile' => [
                $userController,
                'profile'
            ],

            '/logout' => [
                $userController,
                'logout'
            ]
        ],

        'POST' => [
            '/register' => [
                $authController,
                'register'
            ],

            '/login' => [
                $authController,
                'login'
            ],

            
        ]

        // 'login' => 'login',
        // 'register' => 'register'
    ];