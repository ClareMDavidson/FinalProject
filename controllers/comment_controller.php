<?php

class commentController {
  
    
    public function writeComment() {
        require_once('views/blogPost/viewBlogPost.php');
//         $blogPostID = isset($_GET['blogPostID']) ? $_GET['blogPostID'] : "";
    }
    
    public function saveComment() {
        require_once('models/comment.php');
        require_once('models/blogPost.php');
        filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_EMAIL);
        filter_input(INPUT_POST, 'c1ontent', FILTER_SANITIZE_STRING);
        $content = isset($_POST['content']) ? $_POST['content'] : "";
        nl2br($content);
        $comment = new Comment();
        $blogPostID = isset($_GET['blogPostID']) ? $_GET['blogPostID'] : "";
        $username = isset($_POST['username']) ? $_POST['content'] : "";
        $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : "";
        if ($comment->create($blogPostID, $username, $userEmail, $content)){
            //what does this mean^^
            require_once('views/blogPost/viewBlogPost.php');
        }
        else{
            require_once('views/blogPost/viewBlogPost.php');
        }
    }
    
    public function viewComment() {
        require_once('models/blogPost.php');
//        filter_input(INPUT_GET, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
//        $blogPost = new blogPost($_GET['blogPostID']);
        require_once('views/blogPost/viewBlogPost.php');
    }
    
}