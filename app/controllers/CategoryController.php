<?php
    class CategoryController {
        private $category;

        public function __construct($category) {
            $this->category = $category;
        }

        function addCategory() {
            require "./app/helpers/admin.php";

            requireAdmin();

            $category_name = $_POST['category_name'];
            $description = $_POST['description'];
            $status = $_POST['status'];

            $created_by = $_SESSION['user_id'];

            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                $this->category->create(
                    $category_name,
                    $description,
                    $status,
                    $created_by
                );

                header("Location: /dashboard/categories");
                exit();
            }


            $pageTitle = "Add category";
            $content = "app/views/admin/categories/index.php";
            
            require "./app/views/layouts/admin.php";
        }
    }