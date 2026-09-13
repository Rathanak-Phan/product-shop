<?php

    class ProductController {
        private $product, $category, $user;
        
        public function __construct($product, $category, $user) {
            $this->product = $product;
            $this->category = $category;
            $this->user = $user;
        }

        public function addProduct() {
            require "./app/helpers/admin.php";
            requireAdmin();
            $categories = $this->category->getAll();
            $profile = $this->user->getUserById($_SESSION['user_id']);



            $product_name = $_POST['product_name'];
            $code = $_POST['code'];
            $category_id = (int)$_POST['category_id'];
            $price = $_POST['price'];
            $stock = $_POST['quantity'];
            $des = $_POST['description'];

            $created_by = $_SESSION['user_id'];
            
            $image = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];

            $path = 'uploads/products/';
            
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            $image_name = time() . '_rathanak_' . $image;

            if (!move_uploaded_file($tmp, $path . $image_name)){
                die("Error upload product image");
            }

            $this->product->create(
                $product_name,
                $code,
                $price,
                $stock,
                $des,
                $image_name,
                $category_id,
                $created_by
            );

            header("Location: /dashboard/products");

            $pageTitle = "Add product";
            $content = "app/views/admin/products/index.php";
            
            require "./app/views/layouts/admin.php";
        }
    }