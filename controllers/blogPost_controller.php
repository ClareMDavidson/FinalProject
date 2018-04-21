<?php

class blogPostController {
  
    
    public function write() {
        if (!empty ($_SESSION['username'])){
        require_once('views/blogPost/createBlogPost.php');
        }
        else {
            require_once('views/pages/login.php');
        }
    }
    
    public function save() {
        require_once('models/blogPost.php');
        filter_input(INPUT_POST, 'Title', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'Content', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'Keywords', FILTER_SANITIZE_STRING);
        $content = nl2br($_POST['Content']);
        $keywords = explode(',', $_POST['Keywords']);
        $blogPost = new blogPost();
        if ($blogPost->create($_POST['Title'], $content, $keywords)){
            require_once('views/blogPost/viewBlogPost.php');
        }
        else{
            require_once('views/blogPost/createBlogPost.php');
        }
    }
    
    public function view() {
        require_once('models/blogPost.php');
        require_once('models/comment.php');
        filter_input(INPUT_GET, 'blogPostID', FILTER_SANITIZE_NUMBER_INT);
        $blogPost = new blogPost($_GET['blogPostID']);
        require_once('views/blogPost/viewBlogPost.php');
    }
    
}
