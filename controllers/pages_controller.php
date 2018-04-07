<?php
include 'models/bloggerLogin.php';

class PagesController {
   
    public function home() {
      //example data to use in the home page
      $first_name = 'Lisa';
      $last_name  = 'Simpson';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }

    
    public function login() {        
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/pages/login.php');            
        }
        else {
            bloggerLogin::grantAccess();               
        }
    }
    



}
