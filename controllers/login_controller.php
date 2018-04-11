<?php
include 'models/bloggerLogin.php';

class LoginController {
    
    public function loginValidation () {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            bloggerLogin::grantAccess();
        }
    }
