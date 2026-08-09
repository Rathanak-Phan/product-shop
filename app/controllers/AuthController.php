<?php
    class AuthController {
        private $user;

        public function __construct($user)
        {
            $this->user = $user;
        }
        
        public function login() {

            require "./app/views/auth/login.php"; 
        }

        public function register() {

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                //  var_dump($_POST);
        // die();

                $hash_password = password_hash(
                    $password,
                    PASSWORD_DEFAULT
                );
                    
                $this->user->create(
                    $username,
                    $email,
                    $hash_password
                );

                header("Location: index.php?page=login");
                exit();
            }

            require "./app/views/auth/register.php";
        }
    }