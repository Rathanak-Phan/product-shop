<?php
    function requireAdmin(){
        require "./app/helpers/auth.php";

        requireAuth();

        if (!isset($_SESSION['role']) || $_SESSION['role'] != 2){
            header("Location: /");
            exit();
        }
    }