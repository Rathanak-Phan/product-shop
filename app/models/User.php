<?php
    class User {
        private $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($username, $email, $password){
            return mysqli_query(
                $this->connection,
                "CALL registerUser(
                    '$username',
                    '$email',
                    '$password'
                )"
            );
        }
    }