<?php

/**
 * This class contains the grantAccess() function which we use to 
 * determine if the user has entered valid login credentials
 *
 * @author jess
 */
class bloggerLogin {
    
// COMMENTED OUT CONSTRUCTOR AS DON"T THINK WE ACTUALLY NEED ONE FOR THIS?    
//    public $username;
//    public $password;
//    
//    public function __construct($username, $password) {
//        $this->username = $username;
//        $this->password = $password; 
//    }
    
    const BLOGUSERNAME = 'BLOGGER';
    const BLOGPASSWORD = 'password123';
    
    //this function takes the post values for 'username' & 'password, filters/sanitizes them and then checks the value of them 
    //against the BLOGUSERNAME & BLOGPASSWORD constants. If they match then the user is taken to the loggedInPage.php,
    //if not we reload the login.php page.
    public static function grantAccess() {

        if (isset($_POST['username'])&&(isset($_POST['password']))) {
            $filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if (($filteredUsername == bloggerLogin::BLOGUSERNAME)&&($filteredPassword == bloggerLogin::BLOGPASSWORD)) {
            require_once('views/pages/loggedInPage.php');
        } 
        else {
            //would like to change this so that it loads a modal message using JS to say username/password is incorrect.
            
            require_once ('views/pages/login.php');
            echo '<script>alert("Invalid Username and/or Password. Please try again.")</script>';
        }
    }
    
    
    
    
    
    
    
}
