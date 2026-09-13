<?php
    class ProductController {
        private $product;
        
        public function __construct($product) {
            $this->product = $product;
        }

        public function addProduct() {
            require "./app/helpers/admin.php";
            requireAdmin();

            $product_name = $_POST['product_name'];
            $code = $_POST['code'];
            $category_id = $_POST['category_id'];
            $price = $_POST['price'];
            $stock = $_POST['quantity'];
            $des = $_POST['description'];
            
            $image = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];

            

            $pageTitle = "Add product";
            $content = "app/views/admin/products/index.php";
            
            require "./app/views/layouts/admin.php";
        }
    }