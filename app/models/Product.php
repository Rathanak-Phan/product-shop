<?php
    class Product {
        private $connection;

        public function __construct($connection) {
            $this->connection = $connection;
        }

        public function create($name, $code, $price, $stock, $des, $image, $category_id, $created_by) {
            $sql = "INSERT INTO products
                (
                    product_name,
                    product_code,
                    price,
                    stock,
                    description,
                    product_image,
                    category_id,
                    created_by
                ) VALUES (
                    '$name',
                    '$code',
                    '$price',
                    '$stock',
                    '$des',
                    '$image',
                    '$category_id',
                    '$created_by'
                )
            ";

            return mysqli_query(
                $this->connection,
                $sql
            );
        }

        public function getAll() {
            $sql = "SELECT 
                    product.product_name,
                    product.product_code,
                    product.price,
                    product.stock,
                    product.description,
                    product.product_image,
                    category.category_name
                FROM products AS product
                INNER JOIN category
                ON product.category_id = category.id 
            ";

            $result = mysqli_query(
                $this->connection,
                $sql
            );

            $products = [];

            while($row = mysqli_fetch_assoc(($result))){
                $products[] = $row;
            }

            return $products;
        }
    }