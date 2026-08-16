<?php
    function requireAuth() {
        if (!isset($_SESSION['user_id'])){
            header("Location: /login");
            exit();
        }

        if (isset($_SESSION['expire_at']) > time()){
            header("Location: /login");
            exit();
        }
    }
