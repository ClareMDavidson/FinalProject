<?php
include 'models/bloggerLogin.php';
include 'models/register.php';

class PagesController {
   
    public function home() {
      require_once('models/multiPostDisplay.php');
      require_once('models/blogPost.php');
      require_once('models/comment.php');
      $multiPost = new MultiPostDisplay();
      $multiPost->generateLastThreePosts();
      require_once('views/pages/home.php');
    }
    
    public function archive() {
        require_once('models/archivePostDisplay.php');
        require_once('models/blogPost.php');
        require_once('models/comment.php');
        $archivePost = new archivePostDisplay();
        require_once('views/pages/archive.php');
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
        //the line below forces it to go round the loop again, which does the redirect properly.
        if(isset($_GET['done']) && $_GET['done']=='true'){
            require_once ('views/pages/logout.php');
        }else{
            ?>
                <script>
                    window.location.replace("index.php?controller=pages&action=logout&done=true");
                </script>
            <?php
        }
    }
//    public function loggedout() {
//        require_once ('views/pages/logout.php');
//    }
    
    public function contactUs() {
        require_once('views/pages/contactUs.php');
    }
    
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/pages/registration.php');            
        }
        else {
            Register::registerContributor();   
        
        }
    }
    
    public function about(){
        require_once('views/pages/about.php');
    }
    
    public function thankyou(){
        require_once ('views/pages/thankyou.php'); 
    }    
}
