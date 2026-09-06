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

            '/dashboard/categories/edit' => [
                $categoryController,
                'edit'
            ],

            '/dashboard/categories/remove' => [
                $categoryController,
                'remove'
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
            ],

            // Category
            '/dashboard/categories/create' => [
                $categoryController,
                'addCategory'
            ],

            '/dashboard/categories/update' => [
                $categoryController,
                'update'
            ],

            '/dashboard/categories/delete' => [
                $categoryController,
                'delete'
            ]

            

            
        ]

        // 'login' => 'login',
        // 'register' => 'register'
    ];