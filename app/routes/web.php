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

            

            // Admin
            '/dashboard' => [
                $adminController,
                'showDashboard'
            ],

            '/dashboard/products' => [
                $adminController,
                'showProduct'
            ],

            '/dashboard/categories' => [
                $adminController,
                'showCategories'
            ],

            '/dashboard/orders' => [
                $adminController,
                'showOrders'
            ],

            '/dashboard/customers' => [
                $adminController,
                'showCustomers'
            ],

            '/dashboard/settings' => [
                $adminController,
                "showSettings"
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

            '/profile/update' => [
                $userController,
                'update'
            ]

            
        ]

        // 'login' => 'login',
        // 'register' => 'register'
    ];