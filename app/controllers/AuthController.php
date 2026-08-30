<?php
    class AuthController {
        private $user;

        public function __construct($user)
        {
            $this->user = $user;
        }

        public function home() {

            $user = $this->user->getUserById($_SESSION['user_id']);

            require "./app/views/store/home.php";
        }
        
        public function login() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $errorLogin = '';

                $email = $_POST['email'];
                $password = $_POST['password'];
            
                $user = $this->user->getUserByEmail($email);

                if (!$user){
                    $errorLogin = "You don't have an account,..."; 
                }

                if (!$errorLogin && password_verify($password, $user['password'])){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['role'] = $user['role_id'];

                    $_SESSION['expire_at'] = time() + 60;

                    if ($_SESSION['role'] == 2){
                        header("Location: /dashboard");
                        exit();
                    }

                    header("Location: /");
                    exit();
                } else {
                    $errorLogin = 'Incorrect password';
                }
            }

            require "./app/views/auth/login.php"; 
        }

        public function register() {
            $errorEmail = '';
            $errorPassword = '';

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

                if (strlen($password) < 8){
                    $errorPassword = 'Password must be at least 8 character';
                } else {
                    
                    
                    if (!preg_match('/[A-Z]/', $password)){
                        $errorPassword = 'Password must be at least 1 uppercase';
                    }
                        
                    if (!preg_match('/[a-z]/', $password)){
                        $errorPassword = 'Password must be at least 1 lowercase';
                    }
                            
                    if (!preg_match('/[0-9]/', $password)){
                        $errorPassword = 'Password must be at least 1 number';
                    }
                                
                    if (!preg_match('/[^a-zA-Z0-9]/', $password)){
                        $errorPassword = 'Password must be at least 1 specials character';
                    }
                }

                if (!$errorEmail && !$errorPassword) {

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