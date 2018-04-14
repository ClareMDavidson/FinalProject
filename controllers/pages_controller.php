<?php
include 'models/bloggerLogin.php';

class PagesController {
   
    public function home() {
      require_once('models/multiPostDisplay.php');
      require_once('models/blogPost.php');
      require_once('models/comment.php');
      $multiPost = new MultiPostDisplay();
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
    
    public function logout() {
        session_unset();
        session_destroy();
        require_once 'views/pages/logout.php';
    }
    



}
