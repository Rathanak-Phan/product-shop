<?php
    class AdminController {
        private $admin;

        public function __construct($admin){
            $this->admin = $admin;
        }

        public function showDashboard(){
            require "./app/helpers/admin.php";

            requireAdmin();

            $pageTitle = "Admin Dashboard";
            $content = "app/views/admin/dashboard/index.php";
            
            require "./app/views/layouts/admin.php";
        }
    }