<?php 
    class CartController {
        private $cart;

        public function __construct($cart) {
            $this->cart = $cart;
        }

        public function show() {
            require "./app/helpers/auth.php";

            requireAuth();

            require "./app/views/store/cart.php";
        }
    }