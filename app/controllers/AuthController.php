<?php
    class AuthController {
        private $user;

        public function __construct($user)
        {
            $this->user = $user;
        }

        public function home() {
            require "./app/views/home.php";
        }
        
        public function login() {

            require "./app/views/auth/login.php"; 
        }

        public function register() {
            $errorEmail = '';

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                //  var_dump($_POST);
        // die();

                $user = $this->user->getUserByEmail($email);

                if ($email == $user['email']){
                    $errorEmail = 'Email already exist';
                }


                if (!$errorEmail) {

                    $hash_password = password_hash(
                        $password,
                        PASSWORD_DEFAULT
                    );
                        
                    $this->user->create(
                        $first_name,
                        $last_name,
                        $email,
                        $hash_password
                    );
                            
                    header("Location: /login");
                    exit();
                }
            }

            require "./app/views/auth/register.php";
        }
    }