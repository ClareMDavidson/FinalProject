<?php

class bloggerLogin {

    public static function grantAccess() {

        if (isset($_POST['username']) && (isset($_POST['password']))) {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username='$filteredUsername' AND password ='$filteredPassword'");
            $stmt->execute();
            $row = $stmt->fetch();
            if ($row) {
                $_SESSION["username"] = $filteredUsername;
                require_once('views/blogPost/createBlogPost.php');
            } else {
                require_once ('views/pages/login.php');
                echo '<script>alert("Invalid Username and/or Password. Please try again.")</script>';
            }
        }
    }
}
