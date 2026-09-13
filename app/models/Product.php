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
    }