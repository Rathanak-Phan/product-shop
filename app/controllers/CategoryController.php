<?php
    class CategoryController {
        private $category;
        private $user;

        public function __construct($category, $user) {
            $this->category = $category;
            $this->user = $user;
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

        public function edit() {
            require "./app/helpers/admin.php";
            requireAdmin();
            $profile = $this->user->getUserById($_SESSION['user_id']);

            $id = $_GET['id'];

            $category = $this->category->getById($id);

            if (!$category) {
                header("Location: /dashboard/categories");
                exit();
            }

            $update_by_category_id = $id;

            $isEditingCategory = true;

            $pageTitle = "Update category";
            $content = "app/views/admin/categories/index.php";
            require "./app/views/layouts/admin.php";            
        }

        public function update() {
            require "./app/helpers/admin.php";
            requireAdmin();

            $id = $_POST['id'];
            $category_name = $_POST['category_name'];
            $description = $_POST['description'];
            $status = $_POST['status'];

            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                $this->category->update(
                    $id,
                    $category_name,
                    $description,
                    $status
                );

                header("Location: /dashboard/categories");
                exit();
            }


            $pageTitle = "Add category";
            $content = "app/views/admin/categories/index.php";
            
            require "./app/views/layouts/admin.php";
        }
    }