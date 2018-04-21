<?php

class Register {
    
    public static function registerContributor () {
        if (isset($_POST['username'])&&(isset($_POST['password']))) {
            $filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }
    
    
    
    
    
    
}
