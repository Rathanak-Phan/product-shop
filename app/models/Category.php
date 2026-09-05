<?php
    class Category {
        private $connection;

        public function __construct($connection) {
            $this->connection = $connection;
        }

        public function create($category_name, $description, $status, $created_by) {
            $sql = "INSERT INTO category (
                    category_name,
                    description,
                    status,
                    created_by
                ) VALUES (
                    '$category_name',
                    '$description',
                    '$status',
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
                category.category_name,
                category.description,
                category.status,
                user.first_name,
                user.last_name,
                user.profile
                FROM category as category 
                INNER JOIN users as user
                ON category.created_by = user.id
                ORDER BY category.id DESC
            ";

            $result = mysqli_query(
                $this->connection,
                $sql
            );

            $categories = [];

            while($row = mysqli_fetch_assoc(($result))){
                $categories[] = $row;
            }

            return $categories;
        }
    }