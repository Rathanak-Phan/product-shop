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
                category.id,
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

        public function getById($id) {
            $sql = "SELECT * FROM category WHERE id = $id";

            $result = mysqli_query(
                $this->connection,
                $sql
            );

            return mysqli_fetch_assoc($result);
        }

        public function update($id, $category_name, $description, $status){
            $sql = "UPDATE category
                SET 
                    category_name = '$category_name',
                    description = '$description',
                    status = '$status'
                WHERE id = $id
            ";

            return mysqli_query(
                $this->connection,
                $sql
            );
        }

        public function delete($id) {
            $sql = "DELETE FROM category WHERE id = $id";

            return mysqli_query(
                $this->connection,
                $sql
            );
        }

        public function getTotal(){
            $sql = "SELECT COUNT(*) AS total
                FROM category
            ";

            $result = mysqli_query(
                $this->connection,
                $sql
            );

            return mysqli_fetch_assoc($result)['total'];
        }

        public function getActive() {
            $sql = "SELECT COUNT(*) AS active
                FROM category
                WHERE status = 'Active'
            ";

            $result = mysqli_query(
                $this->connection,
                $sql
            );

            return mysqli_fetch_assoc($result)['active'];
        }

        public function getInactive() {
            $sql = "SELECT COUNT(*) AS active
                FROM category
                WHERE status = 'Inactive'
            ";

            $result = mysqli_query(
                $this->connection,
                $sql
            );

            return mysqli_fetch_assoc($result)['active'];
        }

        public function searchCategory($keyword) {
            $sql = "SELECT * FROM 
                category WHERE category_name
                LIKE '%$keyword%';
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