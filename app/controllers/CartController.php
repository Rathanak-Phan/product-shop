<?php 
    class CartController {
        private $cart, $product;

        public function __construct($cart, $product) {
            $this->cart = $cart;
            $this->product = $product;
        }

        public function addToCart() {
            require "./app/helpers/auth.php";

            requireAuth();

            $id = $_POST['id'];
            $quantity = $_POST['quantity'];

            $product = $this->product->getAll($id);

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                }
                
                if (isset($_SESSION['cart'][$id])) {

                    // Increase quantity
                    $_SESSION['cart'][$id] += $quantity;

                } else {

                    // Add new product
                    $_SESSION['cart'][$id] = $quantity;

                }

                // var_dump($_SESSION['cart']);
                // die();
                
                header("Location: /cart/add");
                exit;

            }

            require "./app/views/store/cart.php";
        }
    }