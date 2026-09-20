<?php

class Product
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }


    // =========================
    // CREATE PRODUCT
    // =========================
    public function create(
        $name,
        $code,
        $price,
        $stock,
        $des,
        $image,
        $category_id,
        $created_by
    ) {
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
            )
            VALUES
            (
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


    // =========================
    // GET ALL PRODUCTS
    // =========================
    public function getAll()
    {
        $sql = "SELECT
                    product.id,
                    product.product_name,
                    product.product_code,
                    product.price,
                    product.stock,
                    product.description,
                    product.product_image,
                    product.category_id,
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

        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }

        return $products;
    }


    // =========================
    // GET PRODUCT BY ID
    // =========================
    public function getById($id) {
        $sql = "SELECT
                    product.id,
                    product.product_name,
                    product.product_code,
                    product.price,
                    product.stock,
                    product.description,
                    product.product_image,
                    product.category_id,
                    category.category_name
                FROM products AS product
                INNER JOIN category
                    ON product.category_id = category.id
                WHERE product.id = '$id'
        ";

        $result = mysqli_query(
            $this->connection,
            $sql
        );

        return mysqli_fetch_assoc($result);
    }


    // =========================
    // UPDATE PRODUCT
    // =========================
    public function update(
        $id,
        $name,
        $code,
        $price,
        $stock,
        $des,
        $image,
        $category_id
    ) {
        $sql = "UPDATE products
                SET
                    product_name = '$name',
                    product_code = '$code',
                    price = '$price',
                    stock = '$stock',
                    description = '$des',
                    product_image = '$image',
                    category_id = '$category_id'
                WHERE id = '$id'
        ";

        return mysqli_query(
            $this->connection,
            $sql
        );
    }


    // =========================
    // DELETE PRODUCT
    // =========================
    public function delete($id)
    {
        $sql = "DELETE FROM products
                WHERE id = '$id'
        ";

        return mysqli_query(
            $this->connection,
            $sql
        );
    }
}