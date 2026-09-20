<?php

class ProductController
{
    private $product;
    private $category;
    private $user;

    public function __construct($product, $category, $user)
    {
        $this->product = $product;
        $this->category = $category;
        $this->user = $user;
    }

    // =========================
    // ADD PRODUCT
    // =========================
    public function addProduct()
    {
        require "./app/helpers/admin.php";
        requireAdmin();

        $categories = $this->category->getAll();

        $profile = $this->user->getUserById(
            $_SESSION['user_id']
        );

        $product_name = $_POST['product_name'];
        $code = $_POST['code'];
        $category_id = (int) $_POST['category_id'];
        $price = $_POST['price'];
        $stock = $_POST['quantity'];
        $des = $_POST['description'];

        $created_by = $_SESSION['user_id'];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Image
            $image = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];

            $path = "uploads/products/";

            // Create folder if not exists
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Create unique image name
            $image_name = time() . "_rathanak_" . $image;

            // Upload image
            if (!move_uploaded_file($tmp, $path . $image_name)) {
                die("Error upload product image");
            }

            // Create product
            $this->product->create(
                $product_name,
                $code,
                $price,
                $stock,
                $des,
                $image_name,
                $category_id,
                $created_by
            );

            header("Location: /dashboard/products");
            exit();
        }

        $pageTitle = "Add product";
        $content = "app/views/admin/products/index.php";

        require "./app/views/layouts/admin.php";
    }


    // =========================
    // EDIT PRODUCT
    // =========================
    public function edit()
    {
        require "./app/helpers/admin.php";
        requireAdmin();

        $profile = $this->user->getUserById(
            $_SESSION['user_id']
        );

        $categories = $this->category->getAll();

        $id = $_GET['id'];

        $product = $this->product->getById($id);

        if (!$product) {
            header("Location: /dashboard/products");
            exit();
        }

        $update_by_product_id = $id;

        $isEditingProduct = true;

        $pageTitle = "Update product";
        $content = "app/views/admin/products/index.php";

        require "./app/views/layouts/admin.php";
    }


    // =========================
    // UPDATE PRODUCT
    // =========================
    public function update()
    {
        require "./app/helpers/admin.php";
        requireAdmin();

        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $code = $_POST['code'];
        $category_id = (int) $_POST['category_id'];
        $price = $_POST['price'];
        $stock = $_POST['quantity'];
        $des = $_POST['description'];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Get old product
            $product = $this->product->getById($id);

            if (!$product) {
                header("Location: /dashboard/products");
                exit();
            }

            // Default old image
            $image_name = $product['image'];

            // Check if user selected new image
            if (
                isset($_FILES['image']) &&
                $_FILES['image']['error'] == 0
            ) {

                $image = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];

                $path = "uploads/products/";

                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }

                $image_name = time() . "_rathanak_" . $image;

                if (!move_uploaded_file(
                    $tmp,
                    $path . $image_name
                )) {
                    die("Error upload product image");
                }

                // Delete old image
                if (
                    !empty($product['image']) &&
                    file_exists($path . $product['image'])
                ) {
                    unlink($path . $product['image']);
                }
            }

            $this->product->update(
                $id,
                $product_name,
                $code,
                $price,
                $stock,
                $des,
                $image_name,
                $category_id
            );

            header("Location: /dashboard/products");
            exit();
        }

        $pageTitle = "Update product";
        $content = "app/views/admin/products/index.php";

        require "./app/views/layouts/admin.php";
    }


    // =========================
    // REMOVE PRODUCT
    // =========================
    public function remove()
    {
        require "./app/helpers/admin.php";
        requireAdmin();

        $profile = $this->user->getUserById(
            $_SESSION['user_id']
        );

        $delete_by_id = $_GET['id'];

        $pageTitle = "Delete product";
        $content = "app/views/admin/products/index.php";

        require "./app/views/layouts/admin.php";
    }


    // =========================
    // DELETE PRODUCT
    // =========================
    public function delete() {
        require "./app/helpers/admin.php";
        requireAdmin();

        $id = $_POST['id'];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Get product before deleting
            $product = $this->product->getById($id);

            if ($product) {

                // Delete database record
                $this->product->delete($id);

                // Delete product image
                $path = "uploads/products/";

                if (
                    !empty($product['image']) &&
                    file_exists($path . $product['image'])
                ) {
                    unlink($path . $product['image']);
                }
            }

            header("Location: /dashboard/products");
            exit();
        }
    }

    public function productDetail() {
        $id = $_GET['id'];

        $product = $this->product->getById($id);

        // var_dump($product);
        // die();

        require "./app/views/store/detail.php";
    }

    public function productShop() {

        $products = $this->product->getAll();

        require "./app/views/store/products.php";
    }
}
