<?php

class commentController {
  
    
    public function writeComment() {
        require_once('views/blogPost/viewBlogPost.php');
    }
    
    public function saveComment() {
        require_once('models/comment.php');
        filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_EMAIL);
        filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
        $content = nl2br($_POST['Content']);
        $comment = new Comment();
        if ($comment->create($_POST['username'], $content, $_POST['userEmail'])){
            //what does this mean^^
            require_once('views/blogPost/viewBlogPost.php');
        }
        else{
            require_once('views/blogPost/viewBlogPost.php');
        }
    }
    
    public function view() {
        require_once('models/blogPost.php');
        filter_input(INPUT_GET, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
        $blogPost = new blogPost($_GET['blogPostID']);
        require_once('views/blogPost/viewBlogPost.php');
    }
    
}