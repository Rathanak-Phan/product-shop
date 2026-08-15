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
            ]
        ],

        'POST' => [
            '/register' => [
                $authController,
                'register'
            ]
        ]

        // 'login' => 'login',
        // 'register' => 'register'
    ];