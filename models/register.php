<?php

class Register {
    
    const ACCESSCODE = 'ALLOWED';
    
    public static function registerContributor () {
        if (isset($_POST['username'])&&(isset($_POST['password']))&&(isset($_POST['accesscode']))&&(isset($_POST['confirmpassword']))) {
            $filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
            $filteredAccessCode = filter_input(INPUT_POST,'accesscode', FILTER_SANITIZE_SPECIAL_CHARS);
            $filteredConfirmPassword = filter_input(INPUT_POST,'confirmpassword', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if ($filteredAccessCode == Register::ACCESSCODE) {
            if ($filteredPassword == $filteredConfirmPassword) {
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("INSERT INTO users(username, password) VALUES (:username, :password)");
            if (!empty($_POST)) {
               $stmt->execute([
                   'username' => $filteredUsername,
                   'password' => $filteredPassword,                  
               ]);
               require_once('views/pages/registrationSuccessful.php');
            }
        } else {
          require_once ('views/pages/registration.php');
          echo '<script>alert("Passwords do not match. Please try again.")</script>';
        }
    } else {
        require_once ('views/pages/registration.php');
        echo '<script>alert("Invalid Access Code. Please try again.")</script>';
    }
    
    
    
    
    
    
}
}
