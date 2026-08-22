<?php
    class UserController {
        private $user;

        public function __construct($user){
            $this->user = $user;
        }

        public function profile(){
            require "./app/helpers/auth.php";
            requireAuth();
            $user = $this->user->getUserById($_SESSION['user_id']);
            require "./app/views/profile/profile.php";
        }

        public function editProfile() {
            require "./app/helpers/auth.php";
            requireAuth();
            $user = $this->user->getUserById($_SESSION['user_id']);

            require "./app/views/profile/update.php";
        }

        public function update() {
    
        }

        public function logout(){
            session_unset();
            session_destroy();

            header("location: /login");
            exit();
        }
    }