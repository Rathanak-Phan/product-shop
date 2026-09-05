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
            $user = $this->user->getUserById($_SESSION['user_id']);

            $id = $user['id'];

            $first_name = $_POST['first_name'];
            $last_name  = $_POST['last_name'];
            $bio = $_POST['bio'];
            $phone = $_POST['phone'];

            $old_image = $user['profile'];

            $path = 'uploads/profile/';
            
            if (isset($_FILES['profile']) && $_FILES['profile']['error'] === UPLOAD_ERR_OK){
                $new_image = $_FILES['profile']['name'];
                $tmp = $_FILES['profile']['tmp_name'];

                if (!dir($path)){
                    mkdir($path, 0777, true);
                }

                $image_name = time() . '_rathanak_' . $new_image;

                if (!move_uploaded_file($tmp, $path . $image_name)){
                    die('Error uploads image');
                }

                if (file_exists($path . $old_image)){
                    unlink($path . $old_image);
                }

            } else {
                $image_name = $old_image;
            }

            $this->user->update(
                $id,
                $first_name,
                $last_name,
                $bio,
                $phone,
                $image_name
            );

            header("Location: /profile");
            exit();
        }

        public function logout(){
            session_unset();
            session_destroy();

            header("location: /login");
            exit();
        }
    }