<?php
    class User {
        private $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($first_name, $last_name, $email, $password){
            return mysqli_query(
                $this->connection,
                "INSERT INTO users (first_name, last_name, email, password) VALUES (
                    '$first_name',
                    '$last_name',
                    '$email',
                    '$password'
                );"
            );
        }

        public function getUserByEmail($email) {
            $result = mysqli_query(
                $this->connection,
                "SELECT * FROM users WHERE email = '$email' LIMIT 1"
            );

            return mysqli_fetch_assoc($result);
        }

        public function getUserById($id){
            $result = mysqli_query(
                $this->connection,
                "SELECT * FROM users WHERE id = '$id' LIMIT 1"
            );

            return mysqli_fetch_assoc($result);
        }
    }