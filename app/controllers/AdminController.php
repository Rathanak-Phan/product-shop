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

            $content = "../views/admin/dashboard.php";
            require "./app/views/admin/layout.php";
        }
    }