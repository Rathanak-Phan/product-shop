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

            '/profile/edit' => [
                $userController,
                'editProfile'
            ],

            '/logout' => [
                $userController,
                'logout'
            ],

            // Admin
            '/dashboard' => [
                $adminController,
                'showDashboard'
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

            '/profile/update' => [
                $userController,
                'update'
            ]

            
        ]

        // 'login' => 'login',
        // 'register' => 'register'
    ];