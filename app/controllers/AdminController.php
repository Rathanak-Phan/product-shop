<?php
    class AdminController {
        private $admin;

        public function __construct($admin){
            $this->admin = $admin;
        }

        public function showDashboard(){
            require "./app/helpers/admin.php";

            requireAdmin();
            $profile = $this->admin->getUserById($_SESSION['user_id']);

            $pageTitle = "Admin Dashboard";
            $content = "app/views/admin/dashboard/index.php";
            
            require "./app/views/layouts/admin.php";
        }

        public function showProduct() {
            require "./app/helpers/admin.php";

            requireAdmin();
            $profile = $this->admin->getUserById($_SESSION['user_id']);


            $pageTitle = "Product Management";
            $content = "app/views/admin/products/index.php";
            
            require "./app/views/layouts/admin.php";
        }

        public function showCategories() {
            require "./app/helpers/admin.php";

            requireAdmin();
            $profile = $this->admin->getUserById($_SESSION['user_id']);


            $pageTitle = "Category Management";
            $content = "app/views/admin/categories/index.php";
            
            require "./app/views/layouts/admin.php";
        }

        public function showOrders() {
            require "./app/helpers/admin.php";

            requireAdmin();
            $profile = $this->admin->getUserById($_SESSION['user_id']);


            $pageTitle = "Order Products";
            $content = "app/views/admin/orders/index.php";
            
            require "./app/views/layouts/admin.php";
        }

        public function showCustomers() {
            require "./app/helpers/admin.php";

            requireAdmin();
            $profile = $this->admin->getUserById($_SESSION['user_id']);


            $pageTitle = "Customer Products";
            $content = "app/views/admin/customers/index.php";
            
            require "./app/views/layouts/admin.php";
        }

        public function showSettings() {
            require "./app/helpers/admin.php";

            requireAdmin();
            $profile = $this->admin->getUserById($_SESSION['user_id']);


            $pageTitle = "Customer Products";
            $content = "app/views/admin/settings/index.php";
            
            require "./app/views/layouts/admin.php";
        }
    }