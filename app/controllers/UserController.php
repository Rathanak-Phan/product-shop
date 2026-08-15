<?php
    class UserController {
        private $user;

        public function __construct($user){
            $this->user = $user;
        }

        public function profile(){
            require "./app/helpers/auth.php";
            requireAuth();
            require "./app/views/profile.php";
        }
    }