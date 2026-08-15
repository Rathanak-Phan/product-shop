<?php
    function requireAuth() {
        if (!isset($_SESSION['user_id'])){
            header("Location: /login");
            exit();
        }
    }
