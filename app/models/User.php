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
                "CALL registerUser(
                    '$first_name',
                    '$last_name',
                    '$email',
                    '$password'
                )"
            );
        }

        public function getUserByEmail($email) {
            $result = mysqli_query(
                $this->connection,
                "CALL getUserByEmail(
                    '$email'
                )"
            );

            return mysqli_fetch_assoc($result);
        }
    }